<!DOCTYPE html>
<html>
<head>
    <title>No Ajax</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<div id="login">
    <?php
        @session_start();
       if(!isset($_SESSION['username'])):
    ?>
<form action="checklogin.php" method="post">
    用户名:<input type="text" name="username" id="username"><br/>
    密&nbsp;&nbsp;码:<input type="text" name="password" id="password"><br/>
    <input type="submit" value="登录"/>
</form>
    <?php
       else:
           echo "登录成功,用户名为:".$_SESSION['username'];
       endIf; ?>
</div>
<div>
    <h1>网站首页</h1>
</div>
</body>
</html>