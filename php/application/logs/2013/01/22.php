<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-22 11:51:06 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in on clause is ambiguous [ SELECT a.id,
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
                                                AND c.id = "10"  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:06 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(82): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(73): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:07 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 78 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 11:51:07 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 78, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 11:51:10 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(82): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:10 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(82): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:12 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:12 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(82): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:30 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in on clause is ambiguous [ SELECT a.id,
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
                                                AND c.id = "10"  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(82): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(73): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:51:31 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 78 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 11:51:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 78, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 11:52:19 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in on clause is ambiguous [ SELECT a.id,
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
                                                AND c.id = "10"  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:52:19 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(83): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(73): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 11:52:19 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Users.php [ 78 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 11:52:19 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 78, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(36): Controller_Users->getUsers(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:78
2013-01-22 12:13:01 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 12:13:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(83): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 12:13:02 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 12:13:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(83): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 12:13:04 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'bar_id' in where clause is ambiguous [ SELECT a.id,
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
                                                WHERE a.is_visible = 1  AND bar_id = 1
                                               ORDER BY a.id DESC
                                               LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 12:13:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(83): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-22 14:06:27 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-22 14:06:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 14:06:27 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-01-22 14:06:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 16:49:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idsStr ~ APPPATH\classes\Controller\Components.php [ 228 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:228
2013-01-22 16:49:05 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(228): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 228, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:228
2013-01-22 16:49:21 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Components.php [ 233 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:233
2013-01-22 16:49:21 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(233): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 233, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:233
2013-01-22 16:55:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 117 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:117
2013-01-22 16:55:57 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 117, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:117