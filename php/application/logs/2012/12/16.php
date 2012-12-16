<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-16 00:47:49 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'strength' at row 1 [ INSERT INTO `components` (`name`, `capacity`, `type`, `owner_id`, `current_capacity`, `strength`, `buy_price`) VALUES ('1', '2', 2, '24', '2', '', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 00:47:49 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(58): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(12): Controller_Components->addComponent(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_addInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 00:49:13 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'strength' doesn't have a default value [ INSERT INTO `components` (`name`, `capacity`, `type`, `owner_id`, `current_capacity`, `buy_price`) VALUES ('1', '2', 2, '24', '2', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 00:49:13 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(60): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(12): Controller_Components->addComponent(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_addInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 01:20:13 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '', 1, '', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 01:20:13 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(21): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 01:31:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\Controller\Coctails.php [ 69 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:31:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 69, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:32:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\Controller\Coctails.php [ 69 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:32:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 69, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:42:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\Controller\Coctails.php [ 69 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:42:50 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 69, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:44:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\Controller\Coctails.php [ 69 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:44:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 69, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:69
2012-12-16 01:53:41 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'quantity' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `status`, `priced`, `priority`, `owner_id`) VALUES ('15', '3', '0', '0', '24') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 01:53:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(65): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_saveChanges()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 02:06:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The coctail property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2012-12-16 02:06:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('coctail')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(65): Kohana_ORM->__get('coctail')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2012-12-16 02:08:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Order::query() ~ APPPATH\classes\Controller\Orders.php [ 67 ] in :
2012-12-16 02:08:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-16 02:08:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Orders.php [ 67 ] in :
2012-12-16 02:08:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-16 02:09:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Orders.php [ 67 ] in :
2012-12-16 02:09:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-16 02:09:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Orders.php [ 67 ] in :
2012-12-16 02:09:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-16 02:10:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Order::sav() ~ APPPATH\classes\Controller\Orders.php [ 68 ] in :
2012-12-16 02:10:26 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-16 02:10:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The owner_i property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-16 02:10:55 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('owner_i', '24')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(60): Kohana_ORM->__set('owner_i', '24')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-16 02:11:20 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'r' for column 'owner_id' at row 1 [ UPDATE `orders` SET `owner_id` = 'r' WHERE `id` = '10' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 02:11:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `orders`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1391): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->update(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(68): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_saveChanges()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-16 02:22:42 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Orders.php [ 54 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:54
2012-12-16 02:22:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 54, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:54