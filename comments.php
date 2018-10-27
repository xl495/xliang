<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class=''>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" autocomplete="off">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<div class="mdui-textfield ">
                <label class="mdui-textfield-label" for="author" class="required"><?php _e('称呼 or (Name)'); ?></label>
    			<input class="mdui-textfield-input text" type="text" name="author" id="author" value="<?php $this->remember('author'); ?>" autocomplete="off" required />
            </div>
            <div class="mdui-textfield ">
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required mdui-textfield-label"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input class="text mdui-textfield-input" type="email" name="mail" id="mail" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </div>
            <div class="mdui-textfield ">
                <label class="required mdui-textfield-label" for="url"<?php if ($this->options->commentsRequireURL): ?><?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text mdui-textfield-input" placeholder="<?php _e(''); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </div>
            <?php endif; ?>

                <label for="textarea" class="required mdui-textfield-label"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea mdui-textfield-input" required ><?php $this->remember('text'); ?></textarea>
                <br />
                <button type="submit" class="submit mdui-btn mdui-ripple mdui-float-right"><?php _e('提交评论'); ?></button>
                <br /><br /><br />
    		    <div class='mdui-container-fluid'>
                <div class='mdui-col-xs-6 mdui-text-center'><?php thePrev($this); ?> : <?php $this->thePrev(); ?></div><!--上一篇-->
                <div class='mdui-col-xs-6 mdui-text-center'><?php theNext($this); ?>  <?php $this->theNext(); ?></div><!--下一篇-->
    		    </div>
                
            <br />
            <br />
            </div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
