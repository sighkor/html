<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/analytics/tpl/filter','insert_api_key.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/analytics/tpl','header.html') ?>
<form action-"./" method="post" class="x_form-horizontal" onsubmit="return procFilter(this, insert_api_key)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label" for="api_key"><?php echo $__Context->lang->analytics_api_key ?></label>
			<div class="x_controls">
				api_key : <input type="text" id="api_key" name="api_key" value="<?php echo $__Context->api_key ?>" />
				<input class="x_btn x_btn-primary" type="button" onclick="checkAPIKey(jQuery('#api_key').val())" value="<?php echo $__Context->lang->cmd_check_analytics_api_key ?>" />
				<p class="x_help-block"><?php echo $__Context->lang->about_analytics_api_key ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" />
		</div>
	</div>
</form>
