<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
// 5就是首页文章数量
function themeInit($archive) {
if ($archive->is('index')) {
$archive->parameter->pageSize = 5;
}
}
/**
* 显示下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">下一篇</a>';
echo $link;
} else {
echo $default. "<span>这已经是最新一篇了</span>";
}
} 
/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql); 
if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">上一篇</a>';
echo $link;
} else {
echo $default. "<span>这已经是最早的一篇了</span>";
}
}
// 文章缩略图
function thumb($obj) {
	$rand_num = 10; //随机图片数量，根据图片目录中图片实际数量设置
	if ($rand_num == 0) {
		$imgurl = "usr/themes/xliang/img/0.jpg";
		//如果$rand_num = 0,则显示默认图片，须命名为"0.jpg"，注意是绝对地址
	}else{
		$imgurl = "usr/themes/xliang/img/".rand(1,$rand_num).".jpg";
			//随机图片，须按"1.jpg","2.jpg","3.jpg"...的顺序命名，注意是绝对地址
	}
	$attach = $obj->attachments(1)->attachment;
	if(isset($attach->isImage) && $attach->isImage == 1){
		$thumb = $attach->url;
	}else{
		$thumb = $imgurl;
	}
		return $thumb;
}