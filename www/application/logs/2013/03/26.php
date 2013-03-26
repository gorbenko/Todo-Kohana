<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-26 02:04:30 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Task.php [ 19 ] in Z:\home\planner\www\application\classes\Controller\Task.php:19
2013-03-26 02:04:30 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\planner...', 19, Array)
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:19
2013-03-26 02:04:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller::action_index() ~ APPPATH\classes\Controller\Task.php [ 6 ] in :
2013-03-26 02:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 02:05:37 --- CRITICAL: View_Exception [ 0 ]: The requested view task could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\planner\www\system\classes\Kohana\View.php:137
2013-03-26 02:05:37 --- DEBUG: #0 Z:\home\planner\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('task')
#1 Z:\home\planner\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('task', Array)
#2 Z:\home\planner\www\application\classes\Controller\Task.php(13): Kohana_View::factory('task', Array)
#3 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#6 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\planner\www\system\classes\Kohana\View.php:137
2013-03-26 02:44:58 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:44:58 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(27): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:45:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:45:13 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(27): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:47:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:47:06 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(27): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:27
2013-03-26 02:47:53 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 02:47:53 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(28): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 02:47:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 02:47:54 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(28): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 02:47:57 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 02:47:57 --- DEBUG: #0 Z:\home\planner\www\application\classes\Controller\Task.php(28): Kohana_ORM->delete()
#1 Z:\home\planner\www\system\classes\Kohana\Controller.php(84): Controller_Task->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\planner\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 Z:\home\planner\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\planner\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\planner\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\planner\www\application\classes\Controller\Task.php:28
2013-03-26 03:41:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function datetotime() ~ APPPATH\classes\Controller\Task.php [ 33 ] in :
2013-03-26 03:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :