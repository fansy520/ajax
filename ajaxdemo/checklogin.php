<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username=='admin'&&$password=='admin'){
    session_start();
    $_SESSION['username']=$username;
    echo '{success:true}';
}else{
    echo '{success:false}';
}
