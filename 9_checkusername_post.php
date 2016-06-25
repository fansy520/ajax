<?php
header('Content-Type: text/json;charset=utf-8');


//>>1.获取请求参数
$username = $_POST['username'];
if($username=='管理员'){
    //验证失败了
    echo 0;
}else{
    //>>用户输出的用户名可用
    echo 1;
}