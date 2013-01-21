<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-17 12:29:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Settings.php [ 11 ] in :
2013-01-17 12:29:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-17 12:30:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'key = defaultBarPanel' at line 3 [ SELECT a.*
                                              FROM settings a
                                              WHERE user_id = 1 AND key = defaultBarPanel ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 12:30:18 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(12): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 12:30:48 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'key = "defaultBarPanel"' at line 3 [ SELECT a.*
                                              FROM settings a
                                              WHERE user_id = 1 AND key = "defaultBarPanel" ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 12:30:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*??   ...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(12): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 12:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\Controller\Settings.php [ 14 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:14
2013-01-17 12:31:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 14, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:14
2013-01-17 12:31:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\Controller\Settings.php [ 15 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:15
2013-01-17 12:31:51 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 15, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:15
2013-01-17 12:42:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-17 12:42:35 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('user_id', 1)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(31): Kohana_ORM->__set('user_id', 1)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(16): Controller_Settings->addSetting('defaultBarPanel', 1)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:699
2013-01-17 12:42:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\Controller\Settings.php [ 33 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:33
2013-01-17 12:42:57 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 33, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(16): Controller_Settings->addSetting('defaultBarPanel', 1)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:33
2013-01-17 12:43:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\Controller\Settings.php [ 35 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:35
2013-01-17 12:43:25 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 35, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(16): Controller_Settings->addSetting('defaultBarPanel', 1)
#2 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#9 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:35
2013-01-17 12:44:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\Controller\Settings.php [ 18 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:18
2013-01-17 12:44:59 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 18, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(5): Controller_Settings->getSetting('defaultBarPanel', 1)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getDefaultBarPanel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php:18
2013-01-17 13:33:02 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php on line 45 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:1846
2013-01-17 13:33:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\barapp....', 1846, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(45): Kohana_ORM->where('name', 'defaultBarPanel')
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveSettings()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:1846
2013-01-17 13:33:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `setting`.`key` AS `key`, `setting`.`value` AS `value`, `setting`.`user_id` AS `user_id` FROM `settings` AS `setting` WHERE `name` = 'defaultBarPanel' AND `user_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:33:26 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `setting...', 'Model_Setting', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(47): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveSettings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:35:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Setting as array ~ APPPATH\classes\Controller\Settings.php [ 49 ] in :
2013-01-17 13:35:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-17 13:36:57 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'key' doesn't have a default value [ INSERT INTO `settings` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:36:57 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(50): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveSettings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:37:57 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'key' doesn't have a default value [ INSERT INTO `settings` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:37:57 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(51): Kohana_ORM->save()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveSettings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#10 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:45:41 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SET
                                                    a.value = 'Bar.view.Ord' at line 2 [ UPDATE settings a,
                                                  SET
                                                    a.value = 'Bar.view.OrdersPanel'
                                                  WHERE
                                                     a.user_id = 1 AND
                                                     a.key = 'defaultBarPanel' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 13:45:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE settings...', false, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Settings.php(59): Kohana_Database_Query->execute()
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Settings->action_saveSettings()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2013-01-17 15:02:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH\classes\Controller\Bars.php [ 13 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Bars.php:13
2013-01-17 15:02:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Bars.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 13, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Bars->action_getBars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bars))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(117): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Bars.php:13
2013-01-17 15:24:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Bars.php [ 12 ] in :
2013-01-17 15:24:20 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :