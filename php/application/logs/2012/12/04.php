<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-04 19:00:44 --- EMERGENCY: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Components.php [ 33 ] in :
2012-12-04 19:00:44 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'Z:\home\barapp....', 33, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(33): json_decode(Array)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getComponentsById()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(18): Kohana_Request->execute()
#8 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#12 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#15 {main} in :
2012-12-04 19:02:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Components.php [ 36 ] in :
2012-12-04 19:02:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-04 19:02:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Components.php [ 36 ] in :
2012-12-04 19:02:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-04 19:02:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Components.php [ 36 ] in :
2012-12-04 19:02:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-04 19:02:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Components.php [ 36 ] in :
2012-12-04 19:02:31 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :