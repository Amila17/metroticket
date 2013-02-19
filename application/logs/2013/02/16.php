<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-16 18:29:49 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125
2013-02-16 18:29:49 --- DEBUG: #0 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\kohana_framework\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Program Files\Wamp\kohana_framework\application\classes\Controller\index.php(12): Kohana_Session::instance()
#4 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#10 {main} in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125
2013-02-16 18:31:31 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125
2013-02-16 18:31:31 --- DEBUG: #0 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\kohana_framework\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Program Files\Wamp\kohana_framework\application\classes\Controller\index.php(12): Kohana_Session::instance()
#4 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#10 {main} in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125
2013-02-16 18:31:33 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125
2013-02-16 18:31:33 --- DEBUG: #0 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Program Files\Wamp\kohana_framework\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Program Files\Wamp\kohana_framework\application\classes\Controller\index.php(12): Kohana_Session::instance()
#4 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\Program Files\Wamp\www\metroticket\index.php(118): Kohana_Request->execute()
#10 {main} in D:\Program Files\Wamp\kohana_framework\system\classes\Kohana\Session.php:125