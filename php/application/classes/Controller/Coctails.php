<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Coctails extends Controller_Extendcontroller {
    public function action_addAlcoCoctail() {
        $this->addCoctail(0);
    }

    public function action_addNoAlcoCoctail() {
        $this->addCoctail(1);
    }

    public function action_editCoctail() {
        $params = $this->request->param();
        // Удаляем компоненты, которые были уже записаны: чтобы не возиться с тем, что может больше, а что может быть меньше
        $componentsArr = json_decode($params['components']);
        $inIds = '';
        foreach($componentsArr as $key => $component) {
            $inIds .= $component->combo.',';
        }
        $inIds = substr($inIds, 0, strlen($inIds) - 1);
        $numAlcoComps = DB::query(Database::SELECT, 'SELECT COUNT(*) AS num
                                                     FROM components
                                                     WHERE id IN ('.$inIds.')
                                                       AND strength > 0')
                 ->execute()
                 ->as_array();
        if($numAlcoComps[0]['num'] > 0) { // Если выборка ненулевая - алкоголь есть
            $type = 0;
        } else {
            $type = 1;
        }
        $query = DB::query(Database::DELETE, 'DELETE FROM coctailscomponents
                                              WHERE coctail_id = '.$params['coctail'])
                 ->execute();

        // Посмотрим, какой коктейль редактируется. Для этого проверим, есть ли среди компонентов алкогольные
        $this->addCoctail($type, ORM::factory('coctail', $params['coctail']));
    }

    private function addCoctail($type, $model = false) {
        $params = $this->request->param();
        if(!$model) {
            $model = ORM::factory('coctail');
        }
        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);
        // Пишем новый коктейль в баре, либо редактируем тот, что был
        $model->name = $params['name'];
        $model->recipe = $params['recipe'];
        $model->profit_prozent = $params['prozent'];
        // Считаем цену. Для этого вызовем контроллер коктейлей и передадим ему пришедшие идшники, чтобы он посчитал цену.
        $components = Request::factory('components/getComponentsById')->execute()->body();
        $componentsArr = json_decode($components);
        $componentsArr = $componentsArr->data;
        $model->price_clean = 0;
        $model->bar_id = $currentBar->data;
        $model->save();
        // Декодируем компоненты, которые пришли: там прописан объём, который нужно брать для компонента
        $componentsIn = json_decode($params['components']);
        $sum = 0;
        $strength = 0;
        $alcoCapacity = 0; // Содержание спирта
        $capacity = 0; // Общий объём коктейля
        $componentsToCoctailsModels = array();
        // Начинаем считать стоимость коктейля
        foreach($componentsArr as $key => $component) {
            // Найдём среди пришедших компонентов нужный
            $currentComponent = false;
            foreach($componentsIn as $key2 => $componentIn) {
                if($component->id == $componentIn->combo) {
                    $currentComponent = $componentIn;
                    break;
                }
            }
            $componentsToCoctailsModels[$key] = ORM::factory('coctailscomponent');
            $componentsToCoctailsModels[$key]->capacity = $currentComponent->textfield;
            $componentsToCoctailsModels[$key]->component_id = $component->id;
            $componentsToCoctailsModels[$key]->coctail_id = $model->id;
            // Стекло не учитывается в стоимости
            if(array_search($component->type, array(0, 1)) !== false) {
                $sum += ($component->price * $currentComponent->textfield / $component->capacity) * (1 + $params['prozent'] / 100);
            //    echo ($component->price * $componentsIn[$key]->textfield / $component->capacity) * (1 + $params['prozent'] / 100)."<br>";
                $sum = round($sum, 2);
                // Вычисление крепкости коктейля
                $alcoCapacity += $component->strength * $currentComponent->textfield / 100;
                $capacity += $currentComponent->textfield;
            }
            // Вычисление крепкости окочательное

            $componentsToCoctailsModels[$key]->save();
        }
        $model->price = $sum;
        $model->price_clean = $sum;
        $model->strength = round($alcoCapacity / $capacity, 2) * 100;
        $model->save();
        $this->makeResponse(array('success' => true,
                                  'data' => 'Коктейль добавлен.'));
    }

    public function action_getCoctailsByComponent() {
        $params = $this->request->param();
        $query = DB::query(Database::SELECT, 'SELECT b.*, a.capacity AS c_capacity
                                              FROM coctailscomponents a
                                              INNER JOIN coctails b ON a.coctail_id = b.id
                                              WHERE component_id = '.$params['id']);
        $result = $query->execute()->as_array();
        $this->makeResponse(array('success' => true,
                                  'data' => $result));
    }


    public function action_getAlcoCoctails() {
        $this->getCoctails(0);
    }

    public function action_getNoAlcoCoctails() {
        $this->getCoctails(1);
    }

    public function action_getAllCoctails() {
        $this->getCoctails(2);
    }

    public function action_saveChanges() {
        $params = $this->request->param();
        $newData = json_decode($params['newData']);
        foreach($newData as $key => $data) {
            // Считаем новую цену, ориентируясь на текущую и на скидку.
            $oneProzent = $data->price / (100 + $data->profit_prozent_saved);
            $data->price = round($oneProzent * (100 + $data->profit_prozent), 2);
            $query = DB::query(Database::UPDATE, 'UPDATE coctails SET name = "'.$data->name.'", price = "'.$data->price.'", strength = "'.$data->strength.'", profit_prozent = "'.$data->profit_prozent.'" WHERE id = '.$data->id);
            $query->execute();
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Коктейли успешно отредактированы.'));
    }

    private function getCoctails($type) {
        $params = $this->request->param();
        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);
        // Алкольными считаем те коктейли, в которых есть алкогольные составляющие
        if($type == 0) {
            $query = DB::query(Database::SELECT, 'SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              WHERE EXISTS(SELECT *
                                                           FROM components
                                                           WHERE components.id = coctailscomponents.component_id
                                                                 AND type = 0)
                                                    AND coctails.bar_id = '.$currentBar->data.'
                                              ORDER BY coctails.id DESC');
        } elseif($type == 1) {
            $query = DB::query(Database::SELECT, 'SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              INNER JOIN components ON components.id = coctailscomponents.component_id
                                              WHERE NOT EXISTS (SELECT *
                                                                FROM coctailscomponents
                                                                INNER JOIN components ON coctailscomponents.component_id = components.id
                                                                WHERE components.type = 0
                                                                      AND coctailscomponents.coctail_id = coctails.id)
                                                    AND coctails.bar_id = '.$currentBar->data.'
                                              ORDER BY coctails.id DESC ');
        } elseif($type == 2) {
             $query = DB::query(Database::SELECT, 'SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              INNER JOIN components ON components.id = coctailscomponents.component_id
                                              WHERE coctails.bar_id = '.$currentBar->data.'
                                              ORDER BY coctails.id DESC');
        }

        $result = $query->execute()->as_array();
        $num = count($result);
        $resultData = array();
        $counter = 0;
        $counterForArr = 0; // Счётчик для массива
        $begin = $params['limit'] * ($params['page'] - 1);
        $end = $begin + $params['limit'];
        foreach($result as $key => $coctail) {
            // Пагинация
            if($counter >= $begin && $counter < $end) {
                $ownersProfit = array();
                $coctail['profit_prozent_saved'] = $coctail['profit_prozent'];
                $resultData[$counterForArr] = $coctail;
                $resultData[$counterForArr]['components'] = array();
                $resultData[$counterForArr]['capacity'] = 0;
                // Вычислим объём для коктейля
                $query = DB::query(Database::SELECT, 'SELECT a.id, b.type, a.component_id, a.capacity AS c_capacity, b.buy_price, b.capacity AS f_capacity, b.name, c.nick FROM coctailscomponents a INNER JOIN components b ON a.component_id = b.id INNER JOIN users c ON c.id = b.owner_id WHERE a.coctail_id = '.$coctail['id']);
                $componentsResult = $query->execute()->as_array();
                //var_dump($componentsResult);
                foreach($componentsResult as $key2 => $component) {
                    $resultData[$counterForArr]['capacity'] += $component['c_capacity'];
                    $resultData[$counterForArr]['components'][] = $component;
                    // Профит для каждого, кто вносит лепту в коктейль
                    if(array_search($component['type'], array(0, 1)) !== false) {
                        if(array_key_exists($component['nick'], $ownersProfit) === false) {
                            $ownersProfit[$component['nick']] = 0;
                        }
                    //  echo ($component['buy_price'] * $component['c_capacity'] / $component['f_capacity'])  * (1 + $coctail['profit_prozent'] / 100)."<br>";

                        $ownersProfit[$component['nick']] += ($component['buy_price'] * $component['c_capacity'] / $component['f_capacity']) * (1 + $coctail['profit_prozent'] / 100);
                        $ownersProfit[$component['nick']] = round($ownersProfit[$component['nick']], 2);
                    }
                }
               //   echo "!!";
               // var_dump($ownersProfit);
               // exit();
                $resultData[$counterForArr]['ownersProfit'] = $ownersProfit;
                $counterForArr++;
            }
            $counter++;
        }
       // var_dump($resultData);
       // exit();
        $this->makeResponse(array('success' => true,
                                  'data' => $resultData,
                                  'total' => $num));
    }

    public function action_delCoctail() {
        $params = $this->request->param();

        if(isset($params['ids']) && $params['ids'] == '') {
            return;
        }
        $ids = json_decode($params['ids']);
        $idsStr = implode(',', $ids);
        $queryDCoctails = DB::query(Database::DELETE, 'DELETE FROM coctails WHERE id IN('.$idsStr.')');
        $queryDCoctailsComponents = DB::query(Database::DELETE, 'DELETE FROM coctailsComponents WHERE coctail_id IN('.$idsStr.')');
        $queryDCoctails->execute();
        $queryDCoctailsComponents->execute();

        $this->makeResponse(array('success' => true,
                                  'data' => 'Коктейли успешно удалены.'));
    }

    public function action_moveToBar() {
        $params = $this->request->param();
        $to = $params['to'];

        $ids = json_decode($params['ids']);
        $idsStr = implode(',', $ids);

        $query = DB::query(Database::SELECT, 'SELECT a.*
                                              FROM coctails a
                                              WHERE a.id IN('.$idsStr.')');
        $coctails = $query->execute();
        $errorMsg = '';
        $errored = array();

        foreach($coctails as $key => $coctail) {
            $query = DB::query(Database::SELECT, 'SELECT a.*, b.name
                                                  FROM coctailscomponents a
                                                  INNER JOIN components b ON a.component_id = b.id
                                                  WHERE a.coctail_id = '.$coctail['id']);
            $components = $query->execute()->as_array();
            $isAviable = true; // Доступен ли коктейль для переноса, все ли есть компоненты

            $currentComponents = array();
            foreach($components as $index => $componentInCoctail) {
                // Если на запрос ниже выпадет ноль строк, то это будет означать, что не было перенесено такого компонента, поэтому перенести коктейль нельзя
                $query = DB::query(Database::SELECT, 'SELECT a.*
                                                      FROM components a
                                                      WHERE a.from = '.$componentInCoctail['component_id']);
                //echo $query;
                $result = $query->execute();
                $num = $result->count();
                if($num == 0) {
                    if(array_search($coctail['id'], $errored) === false) {
                        $errored[] = $coctail['id'];
                        $isAviable = false;
                        $errorMsg .= '<strong>Для коктейля "'.$coctail['name'].'" не хватает следующих ингредиентов:</strong><br>';
                    }
                    $errorMsg .= $componentInCoctail['name'].'<br>';
                    $currentComponents[$index] = -1;
                } else {
                    $arr = $result->as_array();
                    $currentComponents[$index] = $arr[0];
                }
            }

            if($isAviable) {
                $model = ORM::factory('coctail');
                $model->name = $coctail['name'];
                $model->price = $coctail['price'];
                $model->price_clean = $coctail['price_clean'];
                $model->recipe = $coctail['recipe'];
                $model->strength = $coctail['strength'];
                $model->profit_prozent = $coctail['profit_prozent'];
                $model->bar_id = $to;
                $model->save();
                // Ещё раз прогоняем цикл и прописываем модели
                foreach($components as $index => $componentInCoctail) {
                    $modelComponentInCoctail = ORM::factory('coctailscomponent');
                    $modelComponentInCoctail->component_id = $currentComponents[$index]['id'];
                    $modelComponentInCoctail->capacity = $componentInCoctail['capacity'];
                    $modelComponentInCoctail->coctail_id = $model->id;
                    $modelComponentInCoctail->save();
                }
            }
        }

        // Может быть ошибка, а может и не быть, тогда всё добавлено ок.
        if($errorMsg == '') {
            $this->makeResponse(array('success' => true,
                                      'data' => 'Коктейли успешно перенесены.'));
        } else {
            $errorMsg .= 'Перемещение этих коктейлей невозможно до тех пор, пока не будут перенесены соответствующие компоненты.';
            $this->makeResponse(array('success' => true,
                                      'data' => $errorMsg));
        }

    }
}