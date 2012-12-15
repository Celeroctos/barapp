<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-05 15:40:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Controller\Coctails.php [ 29 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:29
2012-12-05 15:40:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 29, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(5): Controller_Coctails->addCoctail(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_addAlcoCoctail()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:29
2012-12-05 16:43:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coctailscomponent' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-05 16:43:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 16:44:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coctailscomponent' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-05 16:44:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 16:44:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coctailscomponent' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-05 16:44:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 16:45:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coctailscomponent' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-05 16:45:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 16:45:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_coctailscomponent' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-05 16:45:59 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 17:35:09 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php on line 56 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 42 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\DB.php:42
2012-12-05 17:35:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\DB.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\barapp....', 42, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(56): Kohana_DB::query('SELECT DISTINCT...')
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(46): Controller_Coctails->getCoctails(0)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getAlcoCoctails()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\DB.php:42