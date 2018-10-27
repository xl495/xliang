<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class='sidebar mdui-drawer  mdui-drawer-close' id='sidebar'>
<div class='sidebar-header'></div>
<div class='sidebar-header-tx mdui-img-circle mdui-center'></div>
<h1 class='mdui-text-center'><a href='<?php $this->options->siteUrl(); ?>' style='color:#111;text-decoration:none;'><?php $this->options->title() ?></a></h1>

<div class="mdui-container ">
  <div class="mdui-panel" mdui-panel="{accordion: true}">
    <div class="mdui-panel-item">
       <div class="mdui-panel-item-header mdui-ripple">本站搜索</div>
         <div class="mdui-panel-item-body">
          <form method="post" action="">
            <div>
              <input type="text" name="s" class="mdui-textfield-input" placeholder="输入后回车搜索" /> 
            </div>
          </form>
        </div>
    </div>
        <div class="mdui-panel-item">
      <div class="mdui-panel-item-header mdui-ripple">分类</div>
        <div class="mdui-panel-item-body">
         <?php $this->widget('Widget_Metas_Category_List')->parse('<p><a href="{permalink}">{name}</a> ({count})</p>'); ?>
      </div>
    </div>
    <div class="mdui-panel-item">
      <div class="mdui-panel-item-header mdui-ripple">归档</div>
      <div class="mdui-panel-item-body">
         <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<p><a href="{permalink}">{date}</a></p>'); ?>
      </div>
    </div>
    <div class="mdui-panel-item">
    <a href='<?php $this->options->adminUrl(); ?>'><div class="mdui-panel-item-header mdui-ripple">登录</div></a>
    </div>
</div>
</div>
</div>