<?php if(!defined("__XE__"))exit;?><!--xe icon load-->
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_comment)" class="context_message"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oComment->get('document_srl') ?>" />
	<input type="hidden" name="comment_srl" value="<?php echo $__Context->oComment->get('comment_srl') ?>" />
	<?php if($__Context->oComment->isExists()){ ?><div class="context_message">
		<div class="message_box">
			<h2><i class="xe-exclamation-triangle"></i> <?php echo $__Context->lang->cmd_comment_do ?> <?php echo $__Context->lang->confirm_delete ?></h2>
			<p><?php echo $__Context->oComment->getContent(false) ?></p>
		</div>
		<div class="btnArea">
			<input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_delete ?>" />
			<button type="button" class="btn" onclick="history.back()"><?php echo $__Context->lang->cmd_cancel ?></button>
		</div>	
	</div><?php } ?>
</form>
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
