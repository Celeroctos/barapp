<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-01 21:38:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::acept_type() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2012-12-01 21:38:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 22:04:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Users.php [ 8 ] in :
2012-12-01 22:04:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 22:07:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 72 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-01 22:07:24 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^php/users/sho...', '', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-01 22:19:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 116 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2012-12-01 22:19:45 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\barapp....', 420, Array)
#1 Z:\home\barapp.my\www\php\system\classes\Kohana\Route.php(420): preg_match('#^(?P<controlle...', '', NULL)
#2 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#5 {main} in :
2012-12-01 22:41:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-01 22:41:09 --- NOTICE: #0 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 960, Array)
#1 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-01 22:41:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-01 22:41:29 --- NOTICE: #0 Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 960, Array)
#1 Z:\home\barapp.my\www\php\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\barapp.my\www\php\system\classes\Kohana\Request.php:960
2012-12-01 22:49:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\Controller\Users.php [ 11 ] in :
2012-12-01 22:49:26 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 23:15:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-01 23:15:28 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-01 23:40:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nick ~ APPPATH\bootstrap.php [ 131 ] in Z:\home\barapp.my\www\php\application\bootstrap.php:131
2012-12-01 23:40:23 --- NOTICE: #0 Z:\home\barapp.my\www\php\application\bootstrap.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barapp....', 131, Array)
#1 Z:\home\barapp.my\www\php\index.php(102): require('Z:\home\barapp....')
#2 {main} in Z:\home\barapp.my\www\php\application\bootstrap.php:131