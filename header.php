<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang='zh-CN'>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>"> 
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/media.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- MDUI -->
    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.min.css">
    <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
    <!-- zoom.js -->
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/jquery.fancybox.min.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/transition.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.fancybox.min.js'); ?>"></script>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="mdui-appbar-with-toolbar mdui-loaded">
	<!--  侧边栏  -->
<?php $this->need('sidebar.php'); ?>
<header class='header mdui-shadow-0 mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide' id="header">
    <div class="mdui-toolbar mdui-color-indigo mdui-shadow-0" style='background-color:transparent!important'>
        <button id="sidebaropen" class="header-menu-btn mdui-btn mdui-color-pink-accent mdui-btn-dense mdui-ripple"><i class="mdui-icon material-icons">menu</i></button>
        <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline topbar-logo-text">首页</a>
        <div class="mdui-toolbar-spacer"></div>
</div>
</header><!-- end #header -->
<div class='header-bg sidebar-hide'>
<div id='particles-js' class='header-bg-op'></div></div>
</div>