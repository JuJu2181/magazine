<?php
include $_SERVER['DOCUMENT_ROOT'].'config/init.php';
$user = new user();
$datas = array(
    'session_token' => " "
);
$user->updateUserByEmail($datas,$_SESSION['user_email']);

if(isset($_COOKIE['_auth_user']) && !empty($_COOKIE['_auth_user'])){
	setcookie('_auth_user',"",time()-(60*60*24*7),'/');
}
session_unset();
redirect('login');
?>

