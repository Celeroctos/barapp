<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-02 00:54:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:54:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:56:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:56:50 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:58:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:58:52 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:59:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 00:59:06 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 01:01:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 01:01:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-02 01:02:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-02 01:02:20 --- NOTICE: #0 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 960, Array)
#1 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-02 01:12:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::findAll() ~ APPPATH\classes\Controller\Users.php [ 19 ] in :
2012-12-02 01:12:07 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 01:12:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::findAll() ~ APPPATH\classes\Controller\Users.php [ 19 ] in :
2012-12-02 01:12:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 01:12:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::findAll() ~ APPPATH\classes\Controller\Users.php [ 18 ] in :
2012-12-02 01:12:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 14:35:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting '(' ~ APPPATH\classes\Controller\Users.php [ 39 ] in :
2012-12-02 14:35:21 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 14:45:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ids ~ APPPATH\classes\Controller\Users.php [ 39 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:39
2012-12-02 14:45:07 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 39, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_delUsers()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:39
2012-12-02 14:49:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\Users.php [ 48 ] in :
2012-12-02 14:49:31 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 14:51:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\Controller\Users.php [ 44 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:44
2012-12-02 14:51:35 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 44, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_delUsers()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Users.php:44
2012-12-02 15:58:30 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `type` = (0, 1) ORDER BY `id` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 15:58:30 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(27): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(22): Controller_Users->getUsers(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 15:58:48 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `type` = (0, 1) ORDER BY `id` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 15:58:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(27): Kohana_ORM->find_all()
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(22): Controller_Users->getUsers(Array)
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 18:39:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 139 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:139
2012-12-02 18:39:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(139): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 139, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:139
2012-12-02 18:40:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 139 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:139
2012-12-02 18:40:01 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(139): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 139, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:139
2012-12-02 19:41:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_owner_id' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-02 19:41:07 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 19:41:55 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.owner_id' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`owner_id` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 19:41:55 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(58): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 19:48:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.owner_id' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`owner_id` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 19:48:53 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 19:58:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 19:58:32 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:02:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:02:39 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1070): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(977): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(651): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:05:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:05:52 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1070): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(977): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(651): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(601): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:06:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The primary_key_value property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 685 ] in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:601
2012-12-02 20:06:52 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(601): Kohana_ORM->get('primary_key_val...')
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(385): Kohana_ORM->__get('primary_key_val...')
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(34): Kohana_ORM::factory('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Users.php(30): Controller_Users->getUsers(Array)
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Users->action_getClients()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php:601
2012-12-02 20:07:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:07:38 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1070): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(977): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(651): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(601): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:08:02 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:08:02 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:10:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '5' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:10:21 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:12:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:12:37 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:15:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:15:45 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:17:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.d' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`nick` AS `nick`, `user`.`email` AS `email`, `user`.`type` AS `type` FROM `users` AS `user` WHERE `user`.`d` = '19' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:17:56 --- NOTICE: #0 Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 Z:\home\barapp.my\www\php\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#5 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_ORM->__get('user')
#6 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#7 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#10 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barapp.my\www\php\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 20:26:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: component_id ~ APPPATH\classes\Controller\Components.php [ 56 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:56
2012-12-02 20:26:48 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 56, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:56
2012-12-02 20:27:17 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Components.php [ 60 ] in :
2012-12-02 20:27:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 20:29:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 62 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62
2012-12-02 20:29:58 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 62, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62
2012-12-02 20:30:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 63 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:63
2012-12-02 20:30:41 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 63, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:63
2012-12-02 20:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 64 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:64
2012-12-02 20:31:17 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 64, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:64
2012-12-02 20:38:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 62 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62
2012-12-02 20:38:31 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 62, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62
2012-12-02 20:54:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH\classes\Controller\Components.php [ 62 ] in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62
2012-12-02 20:54:19 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barapp....', 62, Array)
#1 Z:\home\barapp.my\www\php\application\classes\Controller\Components.php(18): Controller_Components->getComponents(0)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Controller.php(84): Controller_Components->action_getAlcoComponents()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Components))
#5 Z:\home\barapp.my\www\php\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barapp.my\www\php\application\classes\Controller\Components.php:62