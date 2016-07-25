<?php


include("dbconfig.php");
include('classes/userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit']))
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
{
$uid=$userClass->userLogin($usernameEmail,$password);
if($uid)
{
$url=BASE_URL.'index.php';
header("Location: $url"); // Page redirecting to home.php 
}
else
{
$errorMsgLogin="Please check login details.";
}
}
}


?>