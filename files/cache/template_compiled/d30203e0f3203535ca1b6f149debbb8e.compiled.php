<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/tpl','header.html') ?>
<!--#Meta:modules/module/tpl/js/multi_order.js--><?php $__tmp=array('modules/module/tpl/js/multi_order.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/marketplace/tpl/marketplace_insert/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if(!$__Context->module_info->module_initialize){ ?><div class="message error">
	<p>마켓플레이스 모듈 생성이 완료되었습니다. 시작 전 기본 설정을 해주시기 바랍니다.</p>
	<p>아래의 옵션들을 사이트에 맞게 수정 후 <strong>[등록]</strong> 버튼을 눌러주세요.</p>
</div><?php } ?>
<?php Context::addJsFile("modules/marketplace/ruleset/insertMarketplace.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertMarketplace" />
	<input type="hidden" name="module" value="marketplace" />
	<input type="hidden" name="act" value="procMarketplaceAdminInsertMarketplace" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="module_initialize" value="1" />
	<?php if($__Context->mid || $__Context->module_srl){ ?><input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><?php } ?>
	<?php if($__Context->logged_info->is_admin != 'Y'){ ?><input type="hidden" name="marketplace_name" value="<?php echo $__Context->module_info->mid ?>" /><?php } ?>
	<input type="hidden" name="xe_validator_id" value="modules/marketplace/tpl/marketplace_insert/1" />
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		<?php if($__Context->logged_info->is_admin == 'Y'){ ?><div class="x_control-group">
			<label class="x_control-label" for="marketplace_name"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="marketplace_name" id="marketplace_name" value="<?php echo $__Context->module_info->mid ?>" />
				<a href="#module_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div><?php } ?>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" id="browser_title" value="<?php if(strpos($__Context->module_info->browser_title, '$user_lang->') === false){;
echo $__Context->module_info->browser_title;
}else{;
echo htmlspecialchars($__Context->module_info->browser_title);
} ?>" class="lang_code" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->cmd_marketplace_setting ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="contact_number_field">연락처 필드 설정</label>
			<div class="x_controls">
				<select name="contact_number_field" id="contact_number_field">
					<?php if($__Context->form_list&&count($__Context->form_list))foreach($__Context->form_list as $__Context->val){ ?><option value="<?php echo $__Context->val->column_name ?>"<?php if($__Context->val->column_name == $__Context->module_info->contact_number_field){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->column_title ?> (<?php echo $__Context->val->column_name ?>)</option><?php } ?>
				</select>
				<p class="x_help-block">장터에서 사용할 연락처 필드를 선택합니다. 이 필드는 [회원설정 > 회원관리 > 사용자 정의 항목]에서 추가한 항목입니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="use_reinsert">재등록 기능</label>
			<div class="x_controls">
				<select name="use_reinsert" id="use_reinsert">
					<option value="1"<?php if($__Context->module_info->use_reinsert){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="0"<?php if(!$__Context->module_info->use_reinsert){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="reinsert_interval">재등록 허용 기간</label>
			<div class="x_controls">
				<?php  if(!$__Context->module_info->reinsert_interval) $__Context->module_info->reinsert_interval = 5 ?>
				글 작성 혹은 재등록 후 <input type="text" name="reinsert_interval" id="reinsert_interval" value="<?php echo $__Context->module_info->reinsert_interval ?>" style="width:60px;text-align:center" /> 일 후 가능 (기본 5일)
			</div>
		</div>
        <div class="x_control-group">
			<label class="x_control-label">판매완료 글 댓글 허용</label>
			<div class="x_controls">
				<label class="x_inline" for="allow_comment_soldout"><input type="checkbox" name="allow_comment_soldout" id="allow_comment_soldout" value="Y"<?php if($__Context->module_info->allow_comment_soldout == 'Y'){ ?> checked="checked"<?php } ?> /> 판매완료된 상품에 댓글을 작성할 수있도록 허용합니다.</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="item_modify">상품 정보 수정</label>
			<div class="x_controls">
				<select name="item_modify" id="item_modify">
					<option value="LOG"<?php if($__Context->module_info->item_modify == 'LOG'){ ?> selected="selected"<?php } ?>>수정 가능 (단 로그 기록)</option>
					<option value="Y"<?php if($__Context->module_info->item_modify == 'Y'){ ?> selected="selected"<?php } ?>>수정 가능 (단 로그 미기록)</option>
                    <option value="N"<?php if($__Context->module_info->item_modify == 'N'){ ?> selected="selected"<?php } ?>>수정 불가능</option>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>개인정보 보호 설정</h1>
        <div class="x_control-group">
			<label class="x_control-label">연락처 보호 기능</label>
			<div class="x_controls">
				<label class="x_inline" for="protect_contact"><input type="checkbox" name="protect_contact" id="protect_contact" value="Y"<?php if($__Context->module_info->protect_contact == 'Y'){ ?> checked="checked"<?php } ?> /> 판매완료된 글과 댓글에 텍스트로 작성된 연락처를 모두 가려줍니다.</label>
				<p class="x_help-block">이 기능을 사용하시면 판매완료된 글에 대해서 연락처를 가립니다. 검색엔진 크롤러는 기본적으로 연락처를 가립니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="protect_contact_type">연락처 가림 형태</label>
			<div class="x_controls">
				<select name="protect_contact_type" id="protect_contact_type">
					<option value="star"<?php if($__Context->module_info->protect_contact_type == 'star'){ ?> selected="selected"<?php } ?>>(별표형식) ***-****-****</option>
					<option value="0"<?php if($__Context->module_info->protect_contact_type == 'text'){ ?> selected="text"<?php } ?>>(안내형식) [연락처 가림]</option>
				</select>
			</div>
		</div>
        <div class="x_control-group">
			<label class="x_control-label">판매자 이름 보호 기능</label>
			<div class="x_controls">
				<label class="x_inline" for="protect_username"><input type="checkbox" name="protect_username" id="protect_username" value="Y"<?php if($__Context->module_info->protect_username == 'Y'){ ?> checked="checked"<?php } ?> /> 판매자 이름을 일부만 보이도록 (홍*동) 형태로 숨겨줍니다.</label>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>판매자 광고 설정</h1>
		<div class="x_control-group">
			<div class="message" style="margin:0; padding: 10px 20px; line-height:1.6">
			이 기능은 판매자가 마켓플레이스에서 판매중인 상품을 모듈 리스트 페이지에서 광고를 진행하여 노출시킬 수 있는 기능입니다.<br />
			광고는 <strong>XE 포인트 CPC(Cost Per Click) 기반</strong>으로 운영되며 판매자가 자유롭게 입찰가를 수정할 수 있습니다.
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="use_advertise"><?php echo $__Context->lang->cmd_premium_ad_setting ?></label>
			<div class="x_controls">
				<select name="use_advertise" id="use_advertise">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<option value="1"<?php if($__Context->module_info->use_advertise== 1){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
				</select>
				<p class="x_help-block"><?php echo $__Context->lang->about_premium_ad_setup ?></p>
			</div>
		</div>
		<div class="x_control-group mp-cpc">
			<label class="x_control-label" for="minimum_bid_price">CPC 최저입찰금액</label>
			<div class="x_controls">
				<input type="text" name="minimum_bid_price" id="minimum_bid_price" value="<?php echo intval($__Context->module_info->minimum_bid_price) ?>" />
			</div>
		</div>
        <div class="x_control-group">
			<label class="x_control-label">비회원 행동 적용</label>
			<div class="x_controls">
				<label class="x_inline" for="advertise_guest"><input type="checkbox" name="advertise_guest" id="advertise_guest" value="Y"<?php if($__Context->module_info->advertise_guest == 'Y'){ ?> checked="checked"<?php } ?> /> 비회원이 회원의 광고를 클릭했을때 과금합니다.</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="advertise_list_count">광고 노출 개수</label>
			<div class="x_controls">
				<?php  if(!$__Context->module_info->advertise_list_count) $__Context->module_info->advertise_list_count = 5 ?>
				<input type="text" name="advertise_list_count" id="advertise_list_count" value="<?php echo $__Context->module_info->advertise_list_count ?>" /> (기본 5개)
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="advertise_interval">클릭 과금 간격 (분)</label>
			<div class="x_controls">
				<?php  if(!$__Context->module_info->advertise_interval) $__Context->module_info->advertise_interval = 360 ?>
				<input type="text" name="advertise_interval" id="advertise_interval" value="<?php echo $__Context->module_info->advertise_interval ?>" /> (기본 360분, 6시간)
				<p class="x_help-block">광고가 클릭되었을때 과금되는 시간 간격을 설정합니다. 처음 클릭 후 지정된 시간안에서는 광고료가 재 과금되지 않습니다.</p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>키워드 알림 설정</h1>
		<div class="x_control-group">
			<div class="message" style="margin:0; padding: 10px 20px;">키워드 알림 기능은 사용자가 미리 등록해둔 키워드가 새 글에 포함하고 있으면 사용자에게 알려주는 서비스입니다.</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="use_keyword_notify">키워드 알림 기능</label>
			<div class="x_controls">
				<select name="use_keyword_notify" id="use_keyword_notify">
					<option value="1"<?php if($__Context->module_info->use_keyword_notify){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="0"<?php if(!$__Context->module_info->use_keyword_notify){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="limit_keyword_count">키워드 알림 갯수 제한</label>
			<div class="x_controls">
				<?php  if(!$__Context->module_info->limit_keyword_count) $__Context->module_info->limit_keyword_count = 5 ?>
				<input type="text" name="limit_keyword_count" id="limit_keyword_count" value="<?php echo $__Context->module_info->limit_keyword_count ?>" />
				<p class="x_help-block">DB의 부하를 줄이기 위해 회원이 등록할 수 있는 키워드 알림의 갯수를 제한합니다. (0 : 무제한, 기본 5)</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="keyword_expiry_date">키워드 보관 기간</label>
			<div class="x_controls">
				<select name="keyword_expiry_date" id="keyword_expiry_date">
					<option value="1"<?php if($__Context->module_info->keyword_expiry_date == '1'){ ?> selected="selected"<?php } ?>>1개월</option>
					<option value="2"<?php if($__Context->module_info->keyword_expiry_date =='2'){ ?> selected="selected"<?php } ?>>2개월</option>
					<option value="3"<?php if($__Context->module_info->keyword_expiry_date =='3'){ ?> selected="selected"<?php } ?>>3개월</option>
					<option value="6"<?php if($__Context->module_info->keyword_expiry_date =='6'){ ?> selected="selected"<?php } ?>>6개월</option>
					<option value="12"<?php if($__Context->module_info->keyword_expiry_date =='12'){ ?> selected="selected"<?php } ?>>12개월</option>
				</select>
				<p class="x_help-block">DB의 부하를 줄이기 위해 회원이 등록한 키워드와 찾은 문서 보관 기간을 설정합니다</p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<div class="x_control-group">
			<div class="message" style="margin:0; padding: 10px 20px; line-height:1.6">
			마켓플레이스 모듈은 모바일을 지원합니다. 판매자는 모바일에서 언제 어디서든 상품을 바로 찍어 업로드 할 수 있습니다.
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_advanced ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->cmd_list_setting ?></label>
			<div class="x_controls">
				<?php $__Context->list = array_keys($__Context->list_config) ?>
				<input type="hidden" name="list" value="<?php echo implode(',', $__Context->list) ?>" />
				<p style="padding:3px 0 0 0"><?php echo $__Context->lang->about_list_config ?></p>
				<div style="display:inline-block">
					<select class="multiorder_show" size="8" multiple="multiple" style="width:220px;vertical-align:top;margin-bottom:8px">
						<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){;
if(!$__Context->list_config[$__Context->key]){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php }} ?>
					</select><br />
					<button type="button" class="x_btn multiorder_add" style="vertical-align:top"><?php echo $__Context->lang->cmd_insert ?></button>
				</div>
				<div style="display:inline-block">
					<select class="multiorder_selected" size="8" multiple="multiple" style="width:220px;vertical-align:top;margin-bottom:8px">
						<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php } ?>
					</select><br />
					<span class="x_btn-group">
						<button type="button" class="x_btn multiorder_up" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_up ?></button>
						<button type="button" class="x_btn multiorder_down" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_down ?></button>
						<button type="button" class="x_btn multiorder_del" style="vertical-align:top"><?php echo $__Context->lang->cmd_delete ?></button>
					</span>
				</div>
				<script>
					xe.registerApp(new xe.MultiOrderManager('list'));
				</script>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->order_type ?></label>
			<div class="x_controls">
				<select name="order_target" id="order_target" title="<?php echo $__Context->lang->order_target ?>">
					<?php if($__Context->order_target&&count($__Context->order_target))foreach($__Context->order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->order_target== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
					<?php if($__Context->extra_order_target){ ?>
					<?php if($__Context->extra_order_target&&count($__Context->extra_order_target))foreach($__Context->extra_order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->order_target== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
					<?php } ?>
				</select>
				<select name="order_type" id="order_type" title="<?php echo $__Context->lang->order_type ?>">
					<option value="asc"<?php if($__Context->module_info->order_type != 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_asc ?></option>
					<option value="desc"<?php if($__Context->module_info->order_type == 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_desc ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="list_count"><?php echo $__Context->lang->list_count ?></label>
			<div class="x_controls">
				<input type="text" name="list_count" id="list_count" value="<?php echo $__Context->module_info->list_count?$__Context->module_info->list_count:20 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_list_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="search_list_count"><?php echo $__Context->lang->search_list_count ?></label>
			<div class="x_controls">
				<input type="text" name="search_list_count" id="search_list_count" value="<?php echo $__Context->module_info->search_list_count?$__Context->module_info->search_list_count:20 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_search_list_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="page_count"><?php echo $__Context->lang->page_count ?></label>
			<div class="x_controls">
				<input type="text" name="page_count" id="page_count" value="<?php echo $__Context->module_info->page_count?$__Context->module_info->page_count:10 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_page_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="admin_mail"><?php echo $__Context->lang->admin_mail ?></label>
			<div class="x_controls">
				<input type="text" name="admin_mail" id="admin_mail" value="<?php echo $__Context->module_info->admin_mail ?>" />
				<a href="#admin_mail_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="admin_mail_help" class="x_help-block" hidden><?php echo $__Context->lang->about_admin_mail ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">댓글 비밀글</label>
			<div class="x_controls">
				<input type="hidden" name="use_status[]" value="PUBLIC" />
				<label class="x_inline"><input type="checkbox" name="" value="" checked="checked" disabled="disabled" /> <?php echo $__Context->document_status_list['PUBLIC'] ?></label>
				<?php if($__Context->document_status_list&&count($__Context->document_status_list))foreach($__Context->document_status_list as $__Context->key=>$__Context->value){ ?>
					<?php if($__Context->key != 'PRIVATE' && $__Context->key != 'TEMP' && $__Context->key != 'PUBLIC'){ ?>
						<label class="x_inline" for="<?php echo $__Context->key ?>"><input type="checkbox" name="use_status[]" id="<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>"<?php if(@in_array($__Context->key, $__Context->module_info->use_status) || ($__Context->key == 'PUBLIC' && !$__Context->module_srl)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->value ?></label>
					<?php } ?>
				<?php } ?>
				<p class="x_help-block">댓글 작성 시 선택할 수 있는 상태를 지정해주세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
			<div class="x_controls">
				<textarea name="header_text" id="header_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_header_text ?>"><?php if(strpos($__Context->module_info->header_text, '$user_lang->') === false){;
echo $__Context->module_info->header_text;
}else{;
echo htmlspecialchars($__Context->module_info->header_text);
} ?></textarea>
				<a href="#header_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="header_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_header_text ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
			<div class="x_controls">
				<textarea name="footer_text" id="footer_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_footer_text ?>"><?php if(strpos($__Context->module_info->footer_text, '$user_lang->') === false){;
echo $__Context->module_info->footer_text;
}else{;
echo htmlspecialchars($__Context->module_info->footer_text);
} ?></textarea>
				<a href="#footer_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="footer_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_footer_text ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="description"><?php echo $__Context->lang->description ?></label>
			<div class="x_controls">
				<textarea name="description" id="description" rows="4" cols="42" placeholder="<?php echo $__Context->lang->about_description ?>" style="vertical-align:top"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
				<a href="#description_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="description_help" class="x_help-block" hidden><?php echo $__Context->lang->about_description ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-left">
			<a href="<?php echo getUrl('act', 'dispMarketplaceAdminContent') ?>" type="button" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
		</div>
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
<style>.g11n{vertical-align:top !important}</style>
