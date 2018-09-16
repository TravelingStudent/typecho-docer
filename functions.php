<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//Theme settings
	$form->addInput(new Typecho_Widget_Helper_Form_Element_Text('theme-primary',null,null,_t('Primary colour'),_t('The primary color of theme.')));
	$form->addInput(new Typecho_Widget_Helper_Form_Element_Text('theme-accent',null,null,_t('Accent colour'),_t('The accent color of theme.')));
	$form->addInput((new Typecho_Widget_Helper_Form_Element_Checkbox('theme-add',[
		'dark'=>_t('Use dark theme'),
		'non-nav-color'=>_t('Don\'t use primary colour for navigation bar')
	],[],_t('Apperence settings')))->multiMode());
    /*$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());*/
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

