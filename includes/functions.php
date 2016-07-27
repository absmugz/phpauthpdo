<?php

/*------connection to database-----*/

include('includes/dbconfig.php');

/*------connection to database-----*/

/*------user class-----*/

include('classes/userClass.php');
$userClass = new userClass();

/*------user class-----*/
/*

include("dbconfig.php");
include('classes/userClass.php');
$userClass = new userClass();
*/

/*------login variables-----*/

$usernameEmail = '';
$password ='';

/*------login variables-----*/

/*------error variables-----*/

$errorMsgLogin = '';

/*------error variables-----*/


if(isset($_POST['loginSubmit'])){

//echo '<pre>'.var_dump($_POST).'</pre>';
$usernameEmail = $_POST['usernameEmail'];
$password = $_POST['password'];

if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {

//r_dump($userClass->userLogin($usernameEmail,$password));die();

$uid=$userClass->userLogin($usernameEmail,$password);
if($uid)
{
$url=BASE_URL.'index.php';
header("Location: $url"); // Page redirecting to home.php 
}

}else {

	$errorMsgLogin="Please check login details.";
}

}



?>