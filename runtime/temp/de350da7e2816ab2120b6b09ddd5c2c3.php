<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\phpStudy\admin/application/admin\view\user\login.html";i:1507365305;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>title</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="__SUP__/content/ui/global/bootstrap/css/bootstrap.min.css">
    <link href="__SUP__/content/ui/global/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="__SUP__/content/adminlte/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="__SUP__/content/adminlte/dist/css/skins/_all-skins.css">
    <link href="__SUP__/content/min/css/supershopui.common.min.css" rel="stylesheet" />
    <style type="text/css">
        section{
            padding-bottom: 10px;/*解决阴影被挡住的问题*/
        }
        body{
            background: url("__ADMIN__/images/login_bg.png") repeat-y;
        }
        form{
            margin: 100px auto 0;
            background: rgba(36, 36, 36, 0.46);
            padding: 60px 0;
            box-shadow: 2px 2px 6px #333333;
            overflow: hidden;
        }
        .form-group,.login_title,.username,.password,.login_btn{
            height: 45px;
            line-height: 45px;
        }
        .username input,.password input,.login_btn input{
            height: 45px;
            line-height: 45px;
        }
        .login_title{
            color: #f1f1f1;
            font-size: 1.6em;
            font-weight: bold;
        }
        .login_btn input{
            line-height: 31px;
        }
        .input-group{
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="col-sm-12 col-xs-12">
        <form action="" method="post" class="col-sm-4 col-xs-12 col-sm-offset-4">
            <div class="form-group form-title">
                <div class="col-sm-12 col-xs-12 text-center login_title">
                    管理员登录
                </div>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <div class="col-sm-12 col-xs-12 username input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                </div>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <div class="col-sm-12 col-xs-12 password input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="密码">
                </div>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <div class="col-sm-12 col-xs-12 login_btn">
                    <input type="button" class="form-control btn-primary btn" value="登录">
                </div>
            </div>
        </form>
</section>

<script src="__SUP__/content/ui/global/jQuery/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="__SUP__/content/ui/global/bootstrap/js/bootstrap.min.js"></script>
<script src="__JS__/dialog.js"></script>
<script src="__JS__/global.js"></script>
<script type="text/javascript">
    $(function () {
       //验证用户名密码
        $('.login_btn input').click(function () {
            var obj = $(this);
            var username = $.trim($('#username').val());
            var password = $.trim($('#password').val());
            if(username == ''){
                showMsg('用户名不能为空','username',1000);
                return false;
            }
            else if(password==''){
                showMsg('密码不能为空','password',1000)
                return false;
            }
            else{
                obj.attr('type','submit');
            }
        });
    });
</script>
</body>
</html>