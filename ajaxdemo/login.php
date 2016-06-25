<!DOCTYPE html>
<html>
<head>
    <title>Ajax登录</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script type="text/javascript">
        function createAjax(){
            var xmlHttpRequest;
            if(window.XMLHttpRequest){
                xmlHttpRequest = new XMLHttpRequest();
            }else{
                var versions = ['Microsoft.XMLHTTP','Msxml2.XMLHTTP','Msxml2.XMLHTTP.3.0','Msxml2.XMLHTTP.5.0','Msxml2.XMLHTTP.6.0'];
                for(var i in versions){
                   try{
                       xmlHttpRequest = new ActiveXObject(versions[i]);
                       break;
                   }catch(e){}
                }
            }
            return xmlHttpRequest;
        }


        function sumbitLogin(){
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var xmlHttpRequest = createAjax();
            xmlHttpRequest.onreadystatechange = function(){
                if(xmlHttpRequest.readyState==4&&xmlHttpRequest.status==200){
                    eval('var result = '+xmlHttpRequest.responseText)+';';
                    if(result.success){
                        console.log('submit..inner');
                        document.getElementById('login').innerHTML='登录成功,用户名为:'+username;
                    }else{
                        alert('用户名和密码错误,需要重新登录');
                    }
                }
            };
            xmlHttpRequest.open('POST','checklogin.php',true);
            xmlHttpRequest.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xmlHttpRequest.send('username='+username+'&password='+password);

            console.log('submit..outer');
            return false;
        }

    </script>
</head>
<body>
<div id="login">
<?php
@session_start();
if(!isset($_SESSION['username'])):
?>
<form onsubmit="return sumbitLogin()">
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