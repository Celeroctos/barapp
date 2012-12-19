<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-19 00:14:10 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 54 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-19 00:14:10 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^transactions/...', 'users/getClient...', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-19 00:14:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 54 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-19 00:14:11 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^transactions/...', 'orders/getOrder...', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-19 00:14:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 54 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-19 00:14:11 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^transactions/...', 'orders/getOrder...', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-19 00:14:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 54 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-19 00:14:14 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^transactions/...', 'users/getOwners', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-19 00:14:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:46 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Transactions.php [ 99 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:14:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 99, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php:99
2012-12-19 00:23:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '24'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '23'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '22'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '21'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:40 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:42 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '24'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:42 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '22'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:42 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM(money) AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '21'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:23:43 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM(mone...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '24'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '23'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '22'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '21'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '24'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '22'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM transactions a
                                                     WHERE ' at line 2 [ SELECT SUM("money") AS antiMoney,
                                                     FROM transactions a
                                                     WHERE a.user_id = '21'
                                                           AND a.type = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 00:25:08 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SUM("mon...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Transactions.php(119): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Transactions->action_getCleanProfit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Transactions))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(50): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(26): Controller_Users->getUsers(1)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getOwners()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 01:17:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Controller\Coctails.php [ 90 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:90
2012-12-19 01:17:06 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 90, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(62): Controller_Coctails->getCoctails(1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getNoAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:90
2012-12-19 01:59:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'components.components.id' in 'IN/ALL/ANY subquery' [ SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              INNER JOIN components ON components.id = coctailscomponents.component_id
                                              WHERE components.components.id != ALL(SELECT *
                                                                    FROM components
                                                                    WHERE type = 0)
                                              ORDER BY coctails.id DESC  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 01:59:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(112): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(62): Controller_Coctails->getCoctails(1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getNoAlcoCoctails()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 01:59:41 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              INNER JOIN components ON components.id = coctailscomponents.component_id
                                              WHERE components.id != ALL(SELECT *
                                                                    FROM components
                                                                    WHERE type = 0)
                                              ORDER BY coctails.id DESC  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 01:59:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(112): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(62): Controller_Coctails->getCoctails(1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getNoAlcoCoctails()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 02:09:15 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price_clean' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('Ноу алко', '', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 02:09:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
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
2012-12-19 02:10:37 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'price_clean' doesn't have a default value [ INSERT INTO `coctails` (`name`, `recipe`, `profit_prozent`) VALUES ('Ноу алко', '', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 02:10:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
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
2012-12-19 02:11:37 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'coctail_id' doesn't have a default value [ INSERT INTO `coctailscomponents` (`capacity`, `component_id`) VALUES ('15', '5') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 02:11:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(47): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 13:24:24 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-19 13:24:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(34): Kohana_ORM::factory('user')
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\MySQL.php:171
2012-12-19 16:51:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Users.php [ 53 ] in :
2012-12-19 16:51:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-19 16:54:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '24
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 24
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(52): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '23
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 23
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(52): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '22
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 22
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(52): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '21
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 21
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:54:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(52): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:55:14 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '24
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 24
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:55:14 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:56:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"24
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 AND a.owner_id = "24
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:56:36 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:58:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"24
                                               ORDER BY a.id DESC' at line 18 [ SELECT a.id,
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
                                               WHERE a.is_visible = 1 AND c.id = "24
                                               ORDER BY a.id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 16:58:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.id,?? ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Orders.php(57): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Orders->action_getOrders()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-19 17:01:38 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 58 ] in :
2012-12-19 17:01:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-19 17:01:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 58 ] in :
2012-12-19 17:01:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-19 17:02:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 58 ] in :
2012-12-19 17:02:20 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-19 17:02:41 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Users.php [ 59 ] in :
2012-12-19 17:02:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :