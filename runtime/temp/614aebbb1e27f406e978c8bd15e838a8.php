<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\PHP\xiangmu\bick\public/../application/admin\view\login\login.html";i:1523516390;}*/ ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/bick/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/bick/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="checklogin" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" id="users" placeholder="用户名" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="密码" id="pwd" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="验证码" id="captcha" name="captcha" type="text">
                    <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?id=Math.random()'">
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center"></p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="http://localhost/bick/public/static/admin/style/jquery.js"></script>
    <script src="http://localhost/bick/public/static/admin/style/bootstrap.js"></script>
    <script src="http://localhost/bick/public/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="../../../../../TP5项目/前0后台静态模板/后台自适应模板文件/style/beyond.js"></script>

    <script>
        
        $(".btn-block").click(function () {
            if($("#users").val()==""){
                alert("用户名或密码不能为空");
                return false;  //阻止表单提交
            }
            else if($("#pwd").val()==""){
                alert("用户名或密码不能为空");
                return false;  //阻止表单提交
            }
            else if($("#captcha").val()==""){
                alert("验证码不能为空");
                return false;  //阻止表单提交
            }
        })
        
        
        
    </script>



</body><!--Body Ends--></html>