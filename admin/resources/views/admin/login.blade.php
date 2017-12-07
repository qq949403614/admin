<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>登录系统</title>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/amazeui.datatables.min.css">
    <link rel="stylesheet" href="/css/app
    1.css">
</head>
<body data-type="login" style="background-image:url(/image/sakdljfajflkk.jpg);color:black;">
    <div style="background:#fff;width:400px;padding:10px;margin-top:100px;margin-left:60%">
        <div style="font-size:20px;margin:30px auto;padding:30px;text-align:center">
            <p style="background :#000;color:#fff;">后台登录系统</p>
            @if(session('msg'))
            <div style="color:red;background:#ff0">{{session('msg')}}</div>
            @endif
        </div>
        <form class="am-form tpl-form-line-form" method="post" action="/admin/login">
            <div class="am-form-group">
                <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="请输入账号">
            </div>
            <div class="am-form-group">
                <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">
            </div>
            <div class="am-form-group">
            {{csrf_field()}}
                <button class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">登录</button>
            </div>
        </form>
    </div>
</body>
</html>