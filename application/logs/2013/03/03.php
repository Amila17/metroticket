<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 15:57:25 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125
2013-03-03 15:57:25 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 D:\Program Files\Wamp\www\metroticket\application\classes\Controller\ticket.php(7): Kohana_Session::instance()
#3 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(84): Controller_Ticket->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125
2013-03-03 17:40:31 --- CRITICAL: Twig_Error_Loader [ 0 ]: Unable to find template "Ticket/ticketMaintenance.twig" (looked into: D:\Program Files\Wamp\www\metroticket\application\views). ~ MODPATH\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php [ 198 ] in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 17:40:31 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php(134): Twig_Loader_Filesystem->findTemplate('Ticket/ticketMa...')
#1 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(266): Twig_Loader_Filesystem->getCacheKey('Ticket/ticketMa...')
#2 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(313): Twig_Environment->getTemplateClass('Ticket/ticketMa...', NULL)
#3 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(19): Twig_Environment->loadTemplate('Ticket/ticketMa...')
#4 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(52): Kohana_Kotwig_View::capture('Ticket/ticketMa...', Array)
#5 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\controller\kotwig.php(45): Kohana_Kotwig_View->render()
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(87): Kohana_Controller_Kotwig->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#9 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#12 {main} in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 17:41:15 --- CRITICAL: Twig_Error_Loader [ 0 ]: Unable to find template "Ticket/ticketMaintenance.twig" (looked into: D:\Program Files\Wamp\www\metroticket\application\views). ~ MODPATH\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php [ 198 ] in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 17:41:15 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php(134): Twig_Loader_Filesystem->findTemplate('Ticket/ticketMa...')
#1 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(266): Twig_Loader_Filesystem->getCacheKey('Ticket/ticketMa...')
#2 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(313): Twig_Environment->getTemplateClass('Ticket/ticketMa...', NULL)
#3 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(19): Twig_Environment->loadTemplate('Ticket/ticketMa...')
#4 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(52): Kohana_Kotwig_View::capture('Ticket/ticketMa...', Array)
#5 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\controller\kotwig.php(45): Kohana_Kotwig_View->render()
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(87): Kohana_Controller_Kotwig->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#9 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#12 {main} in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 18:37:10 --- CRITICAL: Twig_Error_Loader [ 0 ]: Unable to find template "Ticket/ticketMaintenance.twig" (looked into: D:\Program Files\Wamp\www\metroticket\application\views). ~ MODPATH\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php [ 198 ] in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 18:37:10 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php(134): Twig_Loader_Filesystem->findTemplate('Ticket/ticketMa...')
#1 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(266): Twig_Loader_Filesystem->getCacheKey('Ticket/ticketMa...')
#2 D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Environment.php(313): Twig_Environment->getTemplateClass('Ticket/ticketMa...', NULL)
#3 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(19): Twig_Environment->loadTemplate('Ticket/ticketMa...')
#4 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\kotwig\view.php(52): Kohana_Kotwig_View::capture('Ticket/ticketMa...', Array)
#5 D:\Program Files\Wamp\www\metroticket\modules\twig\classes\kohana\controller\kotwig.php(45): Kohana_Kotwig_View->render()
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(87): Kohana_Controller_Kotwig->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#9 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#12 {main} in D:\Program Files\Wamp\www\metroticket\modules\twig\vendor\Twig\lib\Twig\Loader\Filesystem.php:134
2013-03-03 18:38:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Ticket::loadBean() ~ MODPATH\redbean\vendor\redbean\rb.php [ 371 ] in :
2013-03-03 18:38:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 18:42:43 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125
2013-03-03 18:42:43 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 D:\Program Files\Wamp\www\metroticket\application\classes\Controller\ticket.php(7): Kohana_Session::instance()
#3 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(84): Controller_Ticket->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125
2013-03-03 20:38:25 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125
2013-03-03 20:38:25 --- DEBUG: #0 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 D:\Program Files\Wamp\www\metroticket\application\classes\Controller\ticket.php(7): Kohana_Session::instance()
#3 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Controller.php(84): Controller_Ticket->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ticket))
#6 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Program Files\Wamp\www\metroticket\system\classes\Kohana\Session.php:125