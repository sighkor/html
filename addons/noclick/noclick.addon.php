<?php
	if(!defined("__XE__")) exit();
	
	if($called_position != "before_display_content") return;
	if(Context::get('module') == 'admin') return;
	
	$logged_info = Context::get('logged_info');
	if($addon_info->member_use == 'y' && $logged_info) return;
	if($addon_info->admin_use == 'y' && $logged_info->is_admin == 'Y') return;
	
	$returns = 0;
	if($addon_info->group) {
		$group_use = explode(',',$addon_info->group);
		$group_list = $logged_info->group_list;
		foreach($group_use as $value) {
			if(in_array($value, $group_list)) $returns = 1;
		}
	}
	
	if($addon_info->id) {
		$id_list = explode(',',$addon_info->id);
		foreach($id_list as $value) {
			if(in_array($value, $logged_info->user_id)) $returns = 1;
		}
	}
	
	if($returns == 1) return;
	
	if($addon_info->hard_mode == 'y') $script = './addons/noclick/js/jquery.block.js';
	elseif($addon_info->hard_mode == 'very') $script = './addons/noclick/js/javascript.block.veryhard.js';
	else $script = './addons/noclick/js/javascript.block.js';
	Context::addJSFile($script, false);
	
	if($addon_info->mobile == 'y' && Mobile::isMobileCheckByAgent()) {
		if($addon_info->mobile_type == 'all') $script2 = "<script type=\"text/javascript\">jQuery(document).ready(function(){jQuery('img').attr('oncontextmenu','return false').css('-webkit-touch-callout','none');});</script>";
		else $script2 = "<script type=\"text/javascript\">jQuery(document).ready(function(){jQuery('.xe_content img').attr('oncontextmenu','return false').css('-webkit-touch-callout','none');});</script>";
		Context::addHtmlHeader($script2);
	}
	
	if($addon_info->css_selete_block == 'y') {
		$css = "<style>*{-webkit-user-select:none;-moz-user-select:none;-o-user-select:none;-ms-user-select:none;user-select:none;-webkit-user-drag:none;-moz-user-drag:none;-o-user-drag:none;-ms-user-drag:none;user-drag:none;</style>";
		Context::addHtmlHeader($css);
	}
	
	if($addon_info->noscript == 'y') Context::addHtmlHeader('<noscript><div style="width:100%;height:100%;background-color:#fff;position: fixed;top: 0;left: 0;z-index: 99999;"><p style="width:100%;position: absolute;top: 50%;text-align: center;">You cannot see this page without javascript.</p></div></noscript>');
?>