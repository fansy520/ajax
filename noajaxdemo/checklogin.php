<?php
$username = $_POST['username'];
$password = $_POST['password'];

@session_start();

if($username=='admin'&&$password=='admin'){
    //登录成功
    $_SESSION['username'] = $_POST['username'];
}
header('Location: login.php');