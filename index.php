<?php
/**
 * 
 * @package Xliang
 * @author Mochenchen
 * @version 1.0.0
 * @link http://xlaiy.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<main class='main sidebar-hide' id='main'>
<div class="mdui-container-fluid">
<div id='l-wrap' class="mdui-container l-wrap">
  <div class="mdui-row">
  <div class='mdui-col-sm-2 mdui-col-md-2'></div>
    <div class="mdui-col-sm-8 mdui-col-md-8">
      <div class="mdui-container1">
        <div class="mdui-tab mdui-tab-centered" mdui-tab>
          <a href="#example1-tab1" class="mdui-ripple">联系方式&留言</a>
          <a href="#example1-tab2" class="mdui-ripple mdui-tab-active">HOME</a>
          <a href="#example1-tab3" class="mdui-ripple">友情链接</a>
        </div>
        <div id="example1-tab1" class="mdui-p-a-2 mdui-tab-centered" style='background-color: transparent'>
        <?php $this->need('links.php'); ?> <!-- 引进links.php-->
        </div><!-- End example1-tab1-->
      <div id="example1-tab2" class="mdui-p-a-2 mdui-tab-centered" style='padding:8px!important'>
        <div class="col-mb-12 col-8" id="main" role="main">
        	<?php while($this->next()): ?>
                <article class='post post-hover post-atr mdui-ripple'>
                <?php $this->sticky() ?>
                <a href='<?php $this->permalink() ?>'>
                <h2 class='l-post-title'><?php $this->title() ?></h2>
                <div class='mdui-text-center post-label' style='width:100%;'>
                <span><?php _e(''); ?> <time datetime="<?php $this->date('Y/m/d'); ?>" itemprop="datePublished"><?php $this->date("Y/m/d"); ?></time></span><b> · </b> 
                <span><?php $this->category(','); ?> </span><b> · </b>
                <span><?php $this->commentsNum('评论 %d'); ?></span>
                </div>
                </a>
                <!--首页文章图片 src='/img'-->
                <a href='<?php $this->permalink() ?>'>
                <img class='mdui-center mdui-img-fluid' src="<?php echo thumb($this); ?>"/>
                </a>
                <p class='post-text'><?php $this->excerpt(25, '...'); ?></p>
                </article>
        	<?php endwhile; ?>
        	</div><!-- End example1-tab2-->
         <?php $this->pageNav('&laquo;', '&raquo;', 1, '…', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li','textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
        </div>
        <div id="example1-tab3" class="mdui-p-a-2 mdui-tab-centered"></div>
      </div>
    </div>
  <div class='mdui-col-sm-2 mdui-col-md-2'></div>
</div>

</main>
<?php $this->need('footer.php'); ?>
