<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Orders extends Controller_Extendcontroller {

    public function action_addOrder() {
        $params = $this->request->param();
        $model = ORM::factory('order');
        // Пишем новый заказ в баре
        $model->coctail_id = $params['coctail'];
        $model->owner_id = $params['client'];
        $model->quantity = trim($params['quantity']) == '' ? 1 : $params['quantity'];
        $model->status = $params['status'];
        $model->discount = trim($params['discount']) == '' ? 0 : $params['discount'];
        $model->priority = trim($params['priority']) == '' ? 0 : $params['priority'];
        $coctail = ORM::factory('coctail', $params['coctail']);
        if(trim($params['discount']) != '') {
            $model->price = $coctail->price - $params['discount'];
        } else {
            $model->price = $coctail->price;
        }
        $model->save();

        $this->makeResponse(array('success' => true,
                                  'msg' => 'Заказ '.$model->id.' успешно сформирован.'));
    }

    public function action_getOrders() {
        $query = DB::query(Database::SELECT, 'SELECT a.id,
                                                     a.coctail_id,
                                                     a.owner_id,
                                                     a.quantity,
                                                     a.quantity,
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     a.price,
                                                     FORMAT((b.price * a.quantity), 2) as price_full,
                                                     c.nick,
                                                     a.priced,
                                                     b.name AS coctail_name,
                                                     a.create_date
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = a.owner_id
                                               WHERE a.is_visible = 1
                                               ORDER BY a.id DESC');
        $result = $query->execute()->as_array();
        $this->makeResponse(array('success' => true,
                                  'data' => $result));
    }

    public function action_saveChanges() {
        $params = $this->request->param();

        $newData = json_decode($params['newData']);
        foreach($newData as $order) {
            $orderModel = ORM::factory('order', $order->id);
            if(isset($order->coctail) && $order->coctail !== '') {
                $orderModel->coctail_id = $order->coctail;
            }
            if(isset($order->discount) && $order->discount !== '') {
                $orderModel->price += ($orderModel->discount - $order->discount) * $orderModel->quantity; // Скидка текущая больше - сумма уменьшится.
                $orderModel->discount = $order->discount;
            }
            if(isset($order->quantity) && $order->quantity !== '') {
                $orderModel->quantity = $order->quantity;
                // Пересчитать цену и цену со скидкой
                // Получаем коктейль
                $coctailModel = ORM::factory('coctail', $orderModel->coctail_id);
                $orderModel->price = round(($coctailModel->price - $orderModel->discount)  * $orderModel->quantity, 2);
            }
            if(isset($order->status) && $order->status !== '') {
                // Доплатить..?
                if($orderModel->priced < $orderModel->price) {
                    $orderModel->status = 1;
                } else {
                    $orderModel->status = $order->status;
                }
                // Теперь смотрим на флаг принудительности, если эта принудиловка с тулбара
                if(isset($params['forced']) && $params['forced'] == 1) {
                    $orderModel->status = $order->status;
                    // Уже оплачен - цену поставить проплаченную
                    if($order->status > 1) {
                        $coctailModel = ORM::factory('coctail', $orderModel->coctail_id);
                        $orderModel->priced = ($coctailModel->price - $orderModel->discount)  * $orderModel->quantity;
                    }
                }
            }
            if(isset($order->priced) && $order->priced !== '') {
                $orderModel->priced = $order->priced;
                // Клиент полностью оплатил заказик
                if($order->priced >= $orderModel->price && $orderModel->status < 2) {
                    $orderModel->status = 2;
                }
                // Клиент не полностью оплатил
                if($order->priced < $orderModel->price && $orderModel->status > 0) {
                    $orderModel->status = 1;
                }
            }
            if(isset($order->priority) && $order->priority !== '') {
                $orderModel->priority = $order->priority;
            }
            if(isset($order->client) && $order->client !== '') {
                $orderModel->owner_id = $order->client;
            }
            $orderModel->save();
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Данные успешно сохранены'));
    }


    public function action_delOrders() {
        $params = $this->request->param();
        if(isset($params['ids']) && $params['ids'] == '') {
            return;
        }
        $ids = json_decode($params['ids']);
        $orders = ORM::factory('order')
            ->where('id', 'IN', $ids)
            ->find_all();
        $num = 0;
        foreach($orders as $order) {
            $order->delete();
            $num++;
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Успешно удалено '.$num.' заказов.'));
    }

}