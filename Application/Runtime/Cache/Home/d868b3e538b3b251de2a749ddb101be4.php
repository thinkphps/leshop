<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>用户中心</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="Shortcut Icon" href="/object/Public/images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/object/Public/css/Content/top.css"/>
    <link rel="stylesheet" type="text/css" href="/object/Public/css/Content/register.css">
</head>
<script type="text/javascript" src="/object/Public/js/jquery-1.8.3.min.js"></script>
<body>
<div class="register-box">
    <a href="<?php echo U('admin/index/index');?>" class="pop_head_btn_close"></a>

    <div class="regi-tit1"><h2>找回密码</h2></div>
    <div class="regi-cnt">
        <div class="regi-pass-tit"><h3>使用邮箱找回</h3></div>
        <ul class="regi-info">
            <li class="li01">找回密码邮件已经发送至</li>
            <li><?php echo ($email); ?></li>
            <li><a class="blu" id="resendEmail" href="<?php echo U('Helpself:findPassword');?>">返回重填</a></li>
            <li class="li04"><a title="登录邮箱" id="submitLogin" class="regi-code phone-login" target="_blank"
                                href="http://mail.<?php echo ($emailExt); ?>">登录邮箱</a></li>
        </ul>
    </div>
    <div class="regi-other">我知道密码了， <a class="blu" href="/?ver=2.0">立即登录</a></div>
</div>
</body>
</html>