<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-15 16:16:05 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'barapp' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:75
2012-12-15 16:16:05 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('barapp')
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(80): Kohana_Database_Query->execute()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:75
2012-12-15 16:20:55 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:20:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:20:58 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:20:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:22:40 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:22:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:23:05 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:23:05 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:23:42 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:23:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:24:49 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:24:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:25:08 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:25:08 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:25:08 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:25:08 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:25:13 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:25:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 16:27:40 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:27:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(80): Kohana_Database_Query->execute()
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:29:32 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'CelsComp' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:29:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(80): Kohana_Database_Query->execute()
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:30:04 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'rot'@'CelsComp' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:30:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(80): Kohana_Database_Query->execute()
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:30:37 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'CelsComp' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:30:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(80): Kohana_Database_Query->execute()
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-15 16:31:32 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2012-12-15 16:31:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-15 21:21:16 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:21:16 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(22): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:23:04 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:23:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(22): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:34:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: priotity ~ APPPATH\classes\Controller\Orders.php [ 14 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:14
2012-12-15 21:34:45 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 14, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:14
2012-12-15 21:35:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: priotity ~ APPPATH\classes\Controller\Orders.php [ 14 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:14
2012-12-15 21:35:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 14, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:14
2012-12-15 21:35:38 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'id' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '21', 1, '0', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:35:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(15): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:36:54 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'coctail_id' at row 1 [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '21', 1, '0', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:36:54 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(15): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:37:21 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'coctail_id' at row 1 [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '21', 1, '0', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:37:21 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(15): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_addOrder()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:49:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.owner_id' in 'on clause' [ SELECT a.id,
                                                     a.coctail_id,
                                                     a.owner_id,
                                                     a.quantity,
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     c.nick,
                                                     b.name AS coctail_name
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = b.owner_id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:49:50 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(34): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:49:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.owner_id' in 'on clause' [ SELECT a.id,
                                                     a.coctail_id,
                                                     a.owner_id,
                                                     a.quantity,
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     c.nick,
                                                     b.name AS coctail_name
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = b.owner_id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:49:50 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(34): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 21:58:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: componentsResult ~ APPPATH\classes\Controller\Orders.php [ 36 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:58:58 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 36, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:58:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: componentsResult ~ APPPATH\classes\Controller\Orders.php [ 36 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:58:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 36, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:59:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: componentsResult ~ APPPATH\classes\Controller\Orders.php [ 36 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:59:00 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 36, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:59:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: componentsResult ~ APPPATH\classes\Controller\Orders.php [ 36 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 21:59:03 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 36, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:36
2012-12-15 22:07:29 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.nick,
                                                     b.name AS coctail_n' at line 9 [ SELECT a.id,
                                                     a.coctail_id,
                                                     a.owner_id,
                                                     a.quantity,
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     a.price
                                                     c.nick,
                                                     b.name AS coctail_name
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = a.owner_id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:07:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(41): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:07:29 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.nick,
                                                     b.name AS coctail_n' at line 9 [ SELECT a.id,
                                                     a.coctail_id,
                                                     a.owner_id,
                                                     a.quantity,
                                                     a.status,
                                                     a.discount,
                                                     a.priority,
                                                     a.price
                                                     c.nick,
                                                     b.name AS coctail_name
                                               FROM orders a
                                               INNER JOIN coctails b ON a.coctail_id = b.id
                                               INNER JOIN users c ON c.id = a.owner_id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:07:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(41): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:17:04 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '', 1, '', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:17:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
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
2012-12-15 22:20:11 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('Какая-то бурда', 'Рецепт 2', '25') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:20:11 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(22): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:22:30 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'strength' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('Какая-то бурда', 'Рецепт 2', '25') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:22:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(22): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:54:42 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price' doesn't have a default value [ INSERT INTO `orders` (`coctail_id`, `owner_id`, `quantity`, `status`, `discount`, `priority`) VALUES ('', '', 1, '', 0, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-15 22:54:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `or...', false, Array)
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