<?php
include 'inc/config.php';
include PATH.'/begin.php';

$page = @$_GET['page'];

if (isset($_SESSION['auth']))
{
    if ($page == 'send-message') $path = 'send-message.php';
    elseif ($page == 'loading-messages') $path = 'loading-messages.php';
    elseif ($page == 'logout') $path = 'logout.php';
    else $path = 'chat.php';
}
else
{
    if ($page == 'auth') $path = 'index.php';
    else $path = 'index.php';
}

include 'pages/'.$path;
?>
