<?php
/*------connection to database-----*/

include('includes/dbconfig.php');

/*------connection to database-----*/

$session_uid='';
$_SESSION['uid']='';
if(empty($session_uid) && empty($_SESSION['uid']))
{
$url=BASE_URL.'login.php';
header("Location: $url");
//echo "<script>window.location='$url'</script>";
}
?>