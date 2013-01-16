<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-16 13:46:27 --- EMERGENCY: Database_Exception [ 1265 ]: Data truncated for column 'capacity' at row 1 [ INSERT INTO `components` (`name`, `capacity`, `type`, `owner_id`, `current_capacity`, `buy_price`) VALUES ('', '', 0, '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 13:46:27 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(60): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(6): Controller_Components->addComponent(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_addAlcoComponent()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 14:18:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The 63 property does not exist in the Model_Component class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2013-01-16 14:18:03 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('63')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(178): Kohana_ORM->__get('63')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:600
2013-01-16 14:23:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Component class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 14:23:54 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('price', '850')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(180): Kohana_ORM->__set('price', '850')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 14:26:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Component class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 14:26:27 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('price', '850')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(180): Kohana_ORM->__set('price', '850')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 14:26:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Component class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 14:26:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('price', '850')
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(179): Kohana_ORM->__set('price', '850')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-16 16:20:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Coctails.php [ 102 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:102
2013-01-16 16:20:07 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 102, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getCoctailsByComponent()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(182): Kohana_Request->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:102
2013-01-16 16:54:15 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Components.php [ 187 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:187
2013-01-16 16:54:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(187): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 187, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:187
2013-01-16 16:54:21 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Components.php [ 187 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:187
2013-01-16 16:54:21 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(187): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 187, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:187
2013-01-16 16:57:22 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Components.php [ 186 ] in :
2013-01-16 16:57:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 16:57:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Components.php [ 186 ] in :
2013-01-16 16:57:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 16:58:06 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Components.php [ 189 ] in :
2013-01-16 16:58:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 17:06:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Components.php [ 208 ] in :
2013-01-16 17:06:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 17:12:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$type ~ APPPATH\classes\Controller\Components.php [ 195 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:195
2013-01-16 17:12:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(195): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 195, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:195
2013-01-16 17:13:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$type ~ APPPATH\classes\Controller\Components.php [ 196 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:196
2013-01-16 17:13:10 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(196): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\barapp....', 196, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_saveChanges()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:196