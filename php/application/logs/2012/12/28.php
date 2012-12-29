<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-28 23:28:58 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '3', 1, 0, 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 23:28:58 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(25): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251