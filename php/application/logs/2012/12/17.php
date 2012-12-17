<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-17 16:40:32 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ SELECT a.*
                                              FROM transactions
                                              ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:40:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(9): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:40:33 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ SELECT a.*
                                              FROM transactions
                                              ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:40:33 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(9): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:41:42 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ SELECT a.*
                                              FROM transactions
                                              ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:41:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(9): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:41:42 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ SELECT a.*
                                              FROM transactions
                                              ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:41:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(9): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 16:42:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Transactions::makeResponse() ~ APPPATH\classes\Controller\Transactions.php [ 10 ] in :
2012-12-17 16:42:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 16:42:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Transactions::makeResponse() ~ APPPATH\classes\Controller\Transactions.php [ 10 ] in :
2012-12-17 16:42:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 17:15:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The nick property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-17 17:15:22 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('nick', '')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(36): Kohana_ORM->__set('nick', '')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-17 17:16:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The nick property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-17 17:16:33 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('nick', '')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(36): Kohana_ORM->__set('nick', '')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2012-12-17 17:42:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: t_type ~ APPPATH\classes\Controller\Transactions.php [ 19 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:19
2012-12-17 17:42:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 19, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:19
2012-12-17 17:43:51 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'user_id' doesn't have a default value [ INSERT INTO `transactions` (`order_id`, `type`, `money`) VALUES ('9', 0, '218.54') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 17:43:51 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(38): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 17:44:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Transactions.php [ 33 ] in :
2012-12-17 17:44:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 18:13:59 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Transactions.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:57
2012-12-17 18:13:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:57
2012-12-17 18:15:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: coctail ~ APPPATH\classes\Controller\Transactions.php [ 61 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:61
2012-12-17 18:15:25 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 61, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:61
2012-12-17 18:19:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The profit_prozent property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2012-12-17 18:19:14 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('profit_prozent')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(62): Kohana_ORM->__get('profit_prozent')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_moveToTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2012-12-17 18:19:39 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Transactions.php [ 62 ] in :
2012-12-17 18:19:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 18:20:22 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Transactions.php [ 63 ] in :
2012-12-17 18:20:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 18:20:47 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Transactions.php [ 63 ] in :
2012-12-17 18:20:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 18:20:58 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Transactions.php [ 64 ] in :
2012-12-17 18:20:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:04:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\Users.php [ 45 ] in :
2012-12-17 19:04:21 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:06:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Controller\Users.php [ 48 ] in :
2012-12-17 19:06:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:06:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SUM("money")' in 'field list' [ SELECT `SUM("money")` AS `money_out` FROM `transactions` WHERE `user_id` = '24' AND `type` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:06:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM("mo...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:12:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SUM("money")' in 'field list' [ SELECT `SUM("money")` AS `money_out` FROM `transactions` WHERE `user_id` = '24' AND `type` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:12:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM("mo...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:15:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SUM("money")' in 'field list' [ SELECT `SUM("money")` AS `money_out` FROM `transactions` WHERE `user_id` = '24' AND `type` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:15:33 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM("mo...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:16:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SUM("money")' in 'field list' [ SELECT `SUM("money")` AS `money_out` FROM `transactions` WHERE `user_id` = '24' AND `type` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:16:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM("mo...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:17:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SUM("money")' in 'field list' [ SELECT `SUM("money")` AS `money_out` FROM `transactions` WHERE `user_id` = '24' AND `type` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:17:06 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM("mo...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:17:42 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT money FROM transactions WHERE user_id = 24 AND type = 0) AS money_out,
 ' at line 2 [ SELECT
                                                      SUM(SELECT money FROM transactions WHERE user_id = 24 AND type = 0) AS money_out,
                                                      SUM(SELECT money FROM transactions WHERE user_id = 24 AND type = 1) AS money_in ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:17:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT??       ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-17 19:19:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\classes\Controller\Users.php [ 53 ] in :
2012-12-17 19:19:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:20:17 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\classes\Controller\Users.php [ 53 ] in :
2012-12-17 19:20:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:20:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: money_in ~ APPPATH\classes\Controller\Users.php [ 53 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:53
2012-12-17 19:20:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 53, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:53
2012-12-17 19:32:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Users.php [ 55 ] in :
2012-12-17 19:32:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-17 19:32:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Users.php [ 55 ] in :
2012-12-17 19:32:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :