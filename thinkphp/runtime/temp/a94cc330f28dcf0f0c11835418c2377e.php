<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\Users\asus\Desktop\thinkphp\public/../application/index\view\jurisdiction\edit.php";i:1532400021;s:70:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_meta.php";i:1532070491;s:72:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_footer.php";i:1532399617;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/js/Validform_v5.3.2.js"></script> 

<div class="page-container">
  <form action="" method="post" class="demoform form form-horizontal" id="form-article-add">
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品标题：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <input type="text" class="input-text" value=" " datatype="s5-16" errormsg="昵称至少5个字符,最多16个字符！" placeholder="" id="" name="">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">权限：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <button type="button" style="width: 80px;height: 30px; border-radius: 2px;   border: 1px solid #d2d2d2;color: inherit;background:#fff ">编辑权限</button>  
      </div>
    </div>
    <div class="row cl">
      <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
        <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
      </div>
    </div>
  </form>
</div>



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">
$(function(){


$(".demoform").Validform();
});
</script>
</body>
</html>