<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/tpl','header.html') ?>
<?php  print_r($__Context->module_info->item_conditions) ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if($__Context->type == 'insertExtraForm' || $__Context->eid){ ?>
	<section class="section">
		<h1>제품구분 관리</h1>
		<?php Context::addJsFile("modules/marketplace/ruleset/insertExtraVar.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertExtraVar" />
			<input type="hidden" name="module" value="marketplace" />
			<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
			<input type="hidden" name="act" value="procMarketplaceAdminInsertItemCondition" />
			<input type="hidden" name="success_return_url" value="<?php echo getUrl('eid', '','type','') ?>" />
			<?php if($__Context->condition->eid){ ?><input type="hidden" name="eid" value="<?php echo $__Context->condition->eid ?>" /><?php } ?>
			<div class="x_control-group">
				<label class="x_control-label" for="eid">영문 컬럼명</label>
				<div class="x_controls">
					<input type="text" name="eid" id="eid" value="<?php echo $__Context->condition->eid ?>" placeholder="Ex) new, used, aclass, bclass"<?php if($__Context->condition->eid){ ?> disabled="disabled"<?php } ?> />
					<p class="x_help">데이터베이스 입출력을 위한 영문컬럼명을 적어주세요 영문, 숫자, _를 조합해서 사용할 수 있으며 첫 글자는 영문이어야 합니다.</p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_name">제품 구분 이름</label>
				<div class="x_controls">
					<input type="text" name="name" id="name" value="<?php echo $__Context->condition->name ?>" placeholder="Ex) 중고제품, 리퍼비시제품" />
					<p class="x_help">글 등록 화면이나 검색창에서 노출되는 이름입니다.</p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="default">짧은 이름</label>
				<div class="x_controls">
					<input type="text" name="short_name" id="short_name"  value="<?php echo $__Context->condition->short_name ?>" value="<?php echo $__Context->selected_var->default ?>" placeholder="Ex) 중고, 새제품, 리퍼" />
					<p class="x_help-inline"><?php echo $__Context->lang->about_extra_vars_default_value ?></p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_desc"><?php echo $__Context->lang->description ?></label>
				<div class="x_controls">
					<input type="text" name="desc" id="desc" value="<?php echo $__Context->condition->desc ?>" placeholder="Ex) Displayed as your choice." />
				</div>
			</div>
			<div class="x_clearfix btnArea">
				<div class="x_pull-left">
					<a class="x_btn" href="<?php echo getUrl('type','','eid','') ?>"><?php echo $__Context->lang->cmd_back ?></a>
				</div>
				<div class="x_pull-right">
					<?php if($__Context->eid){ ?>
					<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_modify ?></button>
					<?php }else{ ?>
					<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_insert ?></button>
					<?php } ?>
				</div>
			</div>
		</form>
	</section>
<?php }else{ ?>
<section class="section">
	<div class="x_clearfix">
		<div class="x_btn-group x_pull-right">
			<a class="x_btn" href="<?php echo getUrl('type','insertExtraForm','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_insert ?></a>
		</div>
	</div>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr class="nowr">
				<th><?php echo $__Context->lang->no ?></th>
				<th>영문 컬럼명</th>
				<th>제품 구분 이름</th>
				<th>짧은 이름</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->condition_list&&count($__Context->condition_list))foreach($__Context->condition_list as $__Context->key=>$__Context->val){ ?>
			<tr>
				<td<?php if($__Context->val->desc){ ?> rowspan="2"<?php } ?>><?php echo $__Context->val->idx ?></td>
				<td><?php echo $__Context->val->eid ?></td>
				<td class="nowr"><strong><?php echo $__Context->val->name ?></strong></td>
				<td class="nowr"><?php echo $__Context->val->short_name ?></td>
				<td class="nowr" style="text-align:right">
					<?php if($__Context->val->idx > 1){ ?>
						<button type="button" class="x_icon-arrow-up" onclick="moveCondition('up','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->eid ?>')"><?php echo $__Context->lang->cmd_move_up ?></button>
					<?php } ?>
					<?php if(count($__Context->condition_list) > $__Context->val->idx){ ?>
						<button type="button" class="x_icon-arrow-down" onclick="moveCondition('down','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->eid ?>')"><?php echo $__Context->lang->cmd_move_down ?></button>
					<?php } ?>
					<a href="<?php echo getUrl('eid',$__Context->val->eid) ?>" class="x_icon-wrench"><?php echo $__Context->lang->cmd_modify ?></a>
					<button type="button" class="x_icon-trash" onclick="return doDeleteCondition('<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->eid ?>');"><?php echo $__Context->lang->cmd_delete ?></button>
				</td>
			</tr>
			<?php if($__Context->val->desc){ ?><tr>
				<td colspan="5"><?php echo $__Context->val->desc ?></td>
			</tr><?php } ?>
			<?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<div class="x_pull-right">
			<a class="x_btn" href="<?php echo getUrl('type','insertExtraForm','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_insert ?></a>
		</div>
	</div>
</section>
<?php } ?>
<form id="fo_delete" name="fo_delete" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module_srl" value="" />
<input type="hidden" name="var_idx" value="" />
</form>
