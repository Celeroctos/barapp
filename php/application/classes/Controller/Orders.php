<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Orders extends Controller {

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
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     a.price,
                                                     b.price as price_full,
                                                     c.nick,
                                                     a.priced,
                                                     b.name AS coctail_name,
                                                     a.create_date
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = a.owner_id
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
            $orderModel->coctail_id = $order->coctail;
            $orderModel->status = $order->status;
            $orderModel->priced = $order->priced;
            $orderModel->priority = $order->priority;
            $orderModel->owner_id = $order->client;
            $orderModel->price += ($orderModel->discount - $order->discount); // Скидка текущая больше - сумма уменьшится.
            $orderModel->discount = $order->discount;
            // Клиент полностью оплатил заказик
            if($order->priced >= $orderModel->price && $orderModel->status < 2) {
                $orderModel->status = 2;
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

    public function makeResponse($data) {
        $view = View::factory('default');
        $view->response = json_encode($data);
        $view->render();

        $this->response->body($view);
    }

}