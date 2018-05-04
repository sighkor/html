<?php if(!defined("__XE__"))exit;?><!--xe icon load-->
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="context_message">
	<div class="message_box">
		<h2><i class="xe-exclamation-triangle"></i> <?php echo $__Context->message ?></h2>
	</div>
    <div class="btnArea">
        <?php if(!$__Context->is_logged){ ?><a class="btn" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a><?php } ?>
        <button type="button" class="btn" onclick="history.back()"><?php echo $__Context->lang->cmd_back ?></button>
    </div>
</div>
<style type="text/css">
	.context_message {
		width:400px;
		margin:0 auto;
		text-align:center
	}
	.context_message .message_box {
		display: block;
		border: 1px solid #999;
		padding: 30px;
		box-shadow: 0px 3px 5px #CCC;
		border-radius: 6px;
		box-sizing: border-box;
	}
</style>
