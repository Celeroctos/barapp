<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-23 13:08:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Setting::execute() ~ APPPATH\classes\Controller\Settings.php [ 85 ] in :
2013-01-23 13:08:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 16:28:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'components.id' in 'on clause' [ SELECT DISTINCT coctails.id AS id,
                                                              coctails.price_clean,
                                                              coctails.strength,
                                                              coctails.name AS name,
                                                              coctails.recipe AS recipe,
                                                              coctails.price AS price,
                                                              coctails.profit_prozent
                                              FROM coctails
                                              INNER JOIN coctailscomponents ON coctails.id = coctailscomponents.coctail_id
                                              INNER JOIN components ON components.id = coctailscomponents.component_id
                                              WHERE NOT EXISTS (SELECT *
                                                                FROM coctailscomponents
                                                                INNER JOIN components ON coctailscomponents.component_id = components.id
                                                                WHERE components.type = 0
                                                                      AND coctailscomponents.coctail_id = coctails.id)
                                                    AND coctails.bar_id = 1
                                              ORDER BY coctails.id DESC  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 16:28:15 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(192): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(117): Controller_Coctails->getCoctails(1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_getNoAlcoCoctails()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 16:44:59 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ SELECT a.*
                                              FROM components
                                              ORDER BY a.id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 16:44:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(260): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_pizdaPrimaku()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 16:54:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\classes\Controller\Components.php [ 269 ] in :
2013-01-23 16:54:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 17:31:27 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-01-23 17:31:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 17:32:03 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-01-23 17:32:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 22:29:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:29:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:31:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 303 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:31:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(303): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 303, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:32:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 303 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:32:24 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(303): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 303, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:34:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ')' ~ APPPATH\classes\Controller\Coctails.php [ 285 ] in :
2013-01-23 22:34:07 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 22:34:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 305 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:305
2013-01-23 22:34:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(305): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 305, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:305
2013-01-23 22:35:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 303 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:35:07 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(303): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 303, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:303
2013-01-23 22:39:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:39:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:40:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:40:13 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:41:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:41:04 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:41:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:41:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:42:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Coctails.php [ 302 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:42:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(302): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 302, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:302
2013-01-23 22:42:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Coctails.php [ 295 ] in :
2013-01-23 22:42:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 22:43:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Coctails.php [ 304 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:304
2013-01-23 22:43:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 304, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:304
2013-01-23 22:43:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Coctails.php [ 304 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:304
2013-01-23 22:43:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\barapp....', 304, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Coctails->action_moveToBar()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Coctails))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Coctails.php:304
2013-01-23 22:53:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 1 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(21): Controller_Components->getComponents(1)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getNoAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 12 OFFSET 24' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 0 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 12 OFFSET 24 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 3 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 2 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:53:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(24): Controller_Components->getComponents(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 12 OFFSET 24' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 0 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 12 OFFSET 24 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 1 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(21): Controller_Components->getComponents(1)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getNoAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 2 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(24): Controller_Components->getComponents(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 3 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:27 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 12 OFFSET 24' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 0 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 12 OFFSET 24 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 1 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(21): Controller_Components->getComponents(1)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getNoAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 3 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 2 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:54:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(24): Controller_Components->getComponents(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:55:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 2 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:55:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(24): Controller_Components->getComponents(2)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getInventory()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:55:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 100 OFFSET 0' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 3 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 100 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:55:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(27): Controller_Components->getComponents(3)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getOther()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251ery.php:251
2013-01-23 22:55:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DEC LIMIT 12 OFFSET 24' at line 1 [ SELECT `component`.`id` AS `id`, `component`.`name` AS `name`, `component`.`type` AS `type`, `component`.`buy_price` AS `buy_price`, `component`.`capacity` AS `capacity`, `component`.`current_capacity` AS `current_capacity`, `component`.`owner_id` AS `owner_id`, `component`.`strength` AS `strength`, `component`.`disabled` AS `disabled`, `component`.`bar_id` AS `bar_id`, `component`.`from` AS `from` FROM `components` AS `component` WHERE `type` = 0 AND `disabled` = 0 AND `bar_id` = '13' ORDER BY `id` DEC LIMIT 12 OFFSET 24 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-23 22:55:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `compone...', 'Model_Component', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(101): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251