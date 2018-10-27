<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class='footer' id='footer'>
<span>❤</span><span id='hitokoto' ></span><br \>
<div class='mdui-center footer-bottom'>
 &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. Theme by Xliang
    丨<span><a href='<?php $this->options->feedUrl(); ?>'>RSS</a></span>
</div>
</footer><!--end #footer -->
    <script src="<?php $this->options->themeUrl('js/particles.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/xliang.js'); ?>"></script>
    <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script><!--  hitokoto >- 一言  -->
<?php $this->footer(); ?>
</body>
</html>
