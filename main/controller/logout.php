<?php 
include_once 'user_session.php';

$uSession = user_session::getInstance();
$uSession->closeSession();
$uSession = null;
header("location: ../../index.php");


?>