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