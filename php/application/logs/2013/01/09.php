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