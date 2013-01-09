<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-09 11:51:03 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-09 11:51:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 12:57:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Orders.php [ 43 ] in :
2013-01-09 12:57:05 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 13:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Users.php [ 48 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:48
2013-01-09 13:10:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 48, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:48
2013-01-09 13:10:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Users.php [ 48 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:48
2013-01-09 13:10:16 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 48, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:48
2013-01-09 15:48:36 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 78 ] in :
2013-01-09 15:48:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 15:49:06 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 79 ] in :
2013-01-09 15:49:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 15:49:14 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 79 ] in :
2013-01-09 15:49:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 15:50:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 78 ] in :
2013-01-09 15:50:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 15:51:30 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 79 ] in :
2013-01-09 15:51:30 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 15:55:58 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-09 15:55:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 16:02:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: price_full ~ APPPATH\classes\Controller\Users.php [ 88 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:88
2013-01-09 16:02:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(88): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 88, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:88
2013-01-09 16:36:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order
                                              FROM transactions a
      ' at line 1 [ SELECT a.*, b.nick, c.name AS order
                                              FROM transactions a
                                              INNER JOIN users b ON b.id = a.user_id
                                              INNER JOIN coctails c ON a.coctail_id = c.id
                                              ORDER BY a.id DESC
                                              LIMIT 25 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:36:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*, b.n...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(16): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:36:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order
                                              FROM transactions a
      ' at line 1 [ SELECT a.*, b.nick, c.name AS order
                                              FROM transactions a
                                              INNER JOIN users b ON b.id = a.user_id
                                              INNER JOIN coctails c ON a.coctail_id = c.id
                                              ORDER BY a.id DESC
                                              LIMIT 25 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:36:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*, b.n...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(16): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:40:23 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order
                                              FROM transactions a
      ' at line 1 [ SELECT a.*, b.nick, c.name AS order
                                              FROM transactions a
                                              INNER JOIN users b ON b.id = a.user_id
                                              INNER JOIN orders d ON d.id = a.order_id
                                              INNER JOIN coctails c ON a.coctail_id = c.id
                                              ORDER BY a.id DESC
                                              LIMIT 25 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:40:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*, b.n...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(17): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getTransactions()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 16:47:06 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-09 16:47:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 17:15:51 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-09 17:15:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 17:16:00 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-09 17:16:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :