<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/tpl/js/marketplace_admin.js--><?php $__tmp=array('modules/marketplace/tpl/js/marketplace_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->marketplace_management ?> 
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_marketplace ?></p>
<?php if($__Context->module_info && $__Context->act != 'dispMarketplaceAdminContent' && $__Context->act != 'dispMarketplaceAdminDeleteMarketplace'){ ?><ul class="x_nav x_nav-tabs">
	<?php if($__Context->module=='admin'){ ?><li<?php if($__Context->act=='dispMarketplaceAdminContent'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminContent','module_srl','', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_marketplace_list ?></a></li><?php } ?>
	<!--<?php if($__Context->act=='dispMarketplaceAdminInsertMarketplace'){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispMarketplaceAdminInsertMarketplace', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_create_marketplace ?></a></li><?php } ?>-->
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminMarketplaceInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminMarketplaceInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_marketplace_info ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminItemConditions'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminItemConditions', 'selected_var_idx', '', 'type', '') ?>">제품구분 관리</a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminCategoryInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminCategoryInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_category ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminExtraVars'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminExtraVars', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->extra_vars ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminGrantInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminMarketplaceAdditionSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminMarketplaceAdditionSetup', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li><?php } ?>
	<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispMarketplaceAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceAdminMobileSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_mobile_skin ?></a></li><?php } ?>
</ul><?php } ?>
