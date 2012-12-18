<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-18 23:18:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Coctails.php [ 92 ] in :
2012-12-18 23:18:43 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-18 23:19:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prozit_prozent ~ APPPATH\classes\Controller\Coctails.php [ 91 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:91
2012-12-18 23:19:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(91): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 91, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:91
2012-12-18 23:19:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prozit_prozent ~ APPPATH\classes\Controller\Coctails.php [ 91 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:91
2012-12-18 23:19:33 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(91): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 91, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(58): Controller_Coctails->getCoctails(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:91