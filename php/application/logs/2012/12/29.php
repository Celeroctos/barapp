<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-29 02:21:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:21:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:21:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:21:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:21:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:21:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:21:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:21:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:22:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:22:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:22:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:22:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:22:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:22:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:22:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:22:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:22:45 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:22:45 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:22:46 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:22:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:24:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 58 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 02:24:43 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 58, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 02:24:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 58 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 02:24:43 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 58, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 02:24:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:24:44 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:24:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:24:44 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:24:48 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:24:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:24:48 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:24:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 02:29:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:29:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:29:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:29:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:29:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:29:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:29:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:29:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:47 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:47 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:48 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:48 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:33:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:54 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:33:54 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_aray() ~ APPPATH\classes\Controller\Orders.php [ 62 ] in :
2012-12-29 02:34:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 02:34:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_aray() ~ APPPATH\classes\Controller\Orders.php [ 62 ] in :
2012-12-29 02:34:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 02:34:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:16 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:16 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:16 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:16 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:21 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:21 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\Orders.php [ 65 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:65
2012-12-29 02:34:28 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 65, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:65
2012-12-29 02:34:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\Orders.php [ 65 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:65
2012-12-29 02:34:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 65, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:65
2012-12-29 02:34:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:34:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:47 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:34:47 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\Orders.php [ 66 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:66
2012-12-29 02:35:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 66, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:66
2012-12-29 02:35:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\Orders.php [ 66 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:66
2012-12-29 02:35:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 66, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:66
2012-12-29 02:35:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:43 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:43 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:58 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:58 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:35:59 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:59 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:35:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:00 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:01 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:01 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(32): Controller_Users->getUsers(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 02:36:16 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 02:36:16 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:27 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:27 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:28 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:28 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:28 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:28 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:36 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:42:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:42:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:12 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:13 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:13 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 57 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 57, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:57
2012-12-29 19:43:42 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:42 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:43:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:47:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 58 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 19:47:51 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 58, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 19:47:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH\classes\Controller\Orders.php [ 58 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 19:47:51 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 58, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php:58
2012-12-29 19:47:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:47:52 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:47:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:47:52 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:07 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:07 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:08 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:08 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:39 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:39 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:39 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT a.id,
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
                                               ORDER BY a.id DESC
                                               LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:39 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(58): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 19:49:40 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:40 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 75 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 19:49:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 75, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:75
2012-12-29 20:02:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Components.php [ 83 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 83, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Components.php [ 83 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 83, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Components.php [ 83 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 83, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:83
2012-12-29 20:02:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: offset ~ APPPATH\classes\Controller\Components.php [ 84 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:02:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 84, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:02:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: offset ~ APPPATH\classes\Controller\Components.php [ 84 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:02:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 84, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:02:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: offset ~ APPPATH\classes\Controller\Components.php [ 84 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:02:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 84, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:84
2012-12-29 20:04:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 90 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:90
2012-12-29 20:04:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 90, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:90
2012-12-29 20:04:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 90 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:90
2012-12-29 20:04:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 90, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:90
2012-12-29 20:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:10:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::execute() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:10:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:11:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::count() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:11:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:11:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::count() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:11:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:11:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::count() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:11:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:11:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::count() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:11:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:11:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Component::count() ~ APPPATH\classes\Controller\Components.php [ 89 ] in :
2012-12-29 20:11:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 20:27:12 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'profile_id' at row 1 [ INSERT INTO `users` (`nick`, `email`, `profile_id`, `type`) VALUES ('Goshaan', '', '', 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 20:27:12 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(15): Controller_Users->addUser(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_addClient()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 20:31:01 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'profile_id' at row 1 [ INSERT INTO `users` (`nick`, `email`, `profile_id`, `type`) VALUES ('Dark Snake', '', '', 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 20:31:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(15): Controller_Users->addUser(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_addClient()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 20:31:24 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'profile_id' at row 1 [ INSERT INTO `users` (`nick`, `email`, `profile_id`, `type`) VALUES ('Sega', '', '', 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 20:31:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(15): Controller_Users->addUser(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_addClient()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:01:49 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:01:49 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(87): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(43): Controller_Components->getComponents(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAllComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:04:31 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:04:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(43): Controller_Components->getComponents(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAllComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:05:24 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:05:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(43): Controller_Components->getComponents(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAllComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:06:36 --- EMERGENCY: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:06:36 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(43): Controller_Components->getComponents(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAllComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:08:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT 100 OFFSET -100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:08:36 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(43): Controller_Components->getComponents(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAllComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:38:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT 100 OFFSET -100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:38:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(38): Controller_Components->getComponents(Array, Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(20): Kohana_Request->execute()
#11 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#15 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#18 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:38:31 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Coctails.php [ 32 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:38:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 32, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:40:23 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT 100 OFFSET -100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:40:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(38): Controller_Components->getComponents(Array, Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(21): Kohana_Request->execute()
#11 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#15 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#18 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:40:23 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Coctails.php [ 33 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:33
2012-12-29 21:40:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(33): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 33, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:33
2012-12-29 21:41:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT 100 OFFSET -100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:41:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(94): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(38): Controller_Components->getComponents(Array, Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(21): Kohana_Request->execute()
#11 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#15 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#18 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:41:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Coctails.php [ 33 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:33
2012-12-29 21:41:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(33): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 33, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:33
2012-12-29 21:45:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled` FROM `components` AS `component` WHERE `type` IN (0, 1, 2, 3) AND `disabled` = 0 ORDER BY `id` DESC LIMIT 100 OFFSET -100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:45:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(95): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(38): Controller_Components->getComponents(Array, Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(20): Kohana_Request->execute()
#11 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#15 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#18 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-29 21:45:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Coctails.php [ 32 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:45:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 32, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:46:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: componentsNum ~ APPPATH\classes\Controller\Components.php [ 120 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:120
2012-12-29 21:46:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 120, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(38): Controller_Components->getComponents(Array, Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(20): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:120
2012-12-29 21:46:46 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Coctails.php [ 32 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:46:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barapp....', 32, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:32
2012-12-29 21:47:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\classes\Controller\Coctails.php [ 34 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:34
2012-12-29 21:47:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 34, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:34
2012-12-29 21:48:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Coctails.php [ 21 ] in :
2012-12-29 21:48:45 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 21:49:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Coctails.php [ 22 ] in :
2012-12-29 21:49:21 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-29 21:55:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Coctails.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99
2012-12-29 21:55:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(61): Controller_Coctails->getCoctails(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99
2012-12-29 21:56:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Coctails.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99
2012-12-29 21:56:05 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(61): Controller_Coctails->getCoctails(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99
2012-12-29 21:56:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Coctails.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99
2012-12-29 21:56:05 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(61): Controller_Coctails->getCoctails(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:99