<?php
if(!empty($_SESSION['uid']))
{
$session_uid=$_SESSION['uid'];
/*------user class-----*/

include('classes/userClass.php');

/*------user class-----*/
$userClass = new userClass();
}
if(empty($session_uid))
{
$url=BASE_URL.'index.php';
header("Location: $url");
}
?>