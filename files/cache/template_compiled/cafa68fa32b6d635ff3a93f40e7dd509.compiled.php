<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/x.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<!--#Meta:modules/marketplace/m.skins/default/js/mmarketplace.js--><?php $__tmp=array('modules/marketplace/m.skins/default/js/mmarketplace.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/m.skins/default/css/mmarketplace.css--><?php $__tmp=array('modules/marketplace/m.skins/default/css/mmarketplace.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--relatedselects plugin load-->
<!--#Meta:modules/marketplace/m.skins/default/plugin/dependent-selects/jquery.dependent-selects.js--><?php $__tmp=array('modules/marketplace/m.skins/default/plugin/dependent-selects/jquery.dependent-selects.js','head','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a></h2>
	</div>
	<div class="hx h3">
		<h3>내 물품 판매하기</h3>
	</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("modules/marketplace/ruleset/insertItem.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" enctype="multipart/form-data" class="ff" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertItem" />
    <input type="hidden" name="act" value="procMarketplaceInsertDocument" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="status" value="PUBLIC" />
		<ul>
			<li>
				<label for="nText">제품구분</label>
				<select name="item_condition" id="item_condition" class="mp-input">
					<option value="used">중고 제품</option>
					<option value="new">새 제품</option>
					<option value="refurbish">리퍼비시 제품</option>
				</select>
			</li>
			<?php if($__Context->module_info->hide_category == "N"){ ?>
			<li>
				<label for="nCategory"><?php echo $__Context->lang->category ?></label>
				<select name="category_srl" id="nCategory">
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>	
					<option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
					<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
					</option>
					<?php } ?>
				</select>
			</li>
			<?php } ?>
			<li>
				<label for="nText">물품 사진 (대표사진)</label>
				<input name="thumbnail[0]" type="file" />
			</li>
			<li>
				<label for="nText">물품 사진 (+)</label>
				<input name="thumbnail[1]" type="file" />
			</li>
			<li>
				<label for="nTitle">판매글 제목</label>
				<input name="title" type="text" id="nTitle" style="width:100%" />
			</li>
			<li>
				<label for="item_name">판매 상품명</label>
                <input type="text" value="" name="item_name" id="item_name" style="width:60%">
			</li>
			<li>
				<label for="item_price">판매가격</label>
                <input type="text" value="" name="item_price" id="item_price" style="width:60%">
			</li>
			<li>
				<label for="item_price">구매 당시 가격</label>
                <input type="text" value="" name="item_original_price" id="item_original_price" style="width:60%">
			</li>
			<li>
				<label for="item_used_month">사용 기간</label>
				<?php 
					$__Context->used_month=array();
					for($__Context->i=1;$__Context->i<=24;$__Context->i++) $__Context->used_month[] = $__Context->i;
				 ?>
				<select id="item_used_month" name="item_used_month">
					<option value="0">미개봉</option>
					<?php if($__Context->used_month&&count($__Context->used_month))foreach($__Context->used_month as $__Context->val){ ?><option value="<?php echo $__Context->val ?>"><?php echo $__Context->val ?>개월</option><?php } ?>
					<option value="25">24개월 이상</option>
				</select> 
			</li>
			<?php if(count($__Context->extra_keys)){ ?>
			<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=> $__Context->val){ ?>
			<li class="exvar">
				<label for="ex_<?php echo $__Context->val->name ?>"><?php echo $__Context->val->name ?> <?php if($__Context->val->is_required=="Y"){ ?>*<?php } ?></label>
				<?php echo $__Context->val->getFormHTML() ?>
			</li>
			<?php } ?>
			<?php } ?>
			<li>
				<label for="nText"><?php echo $__Context->lang->content ?></label>
				<textarea name="content" rows="8" cols="42" id="nText" class="textarea"></textarea>
			</li>
			<li>
				<label for="nText">거래 방법</label>
				<input type="checkbox" name="item_delivery" value="Y" checked="checked"  /> 택배거래
				<input type="checkbox" name="item_direct_dealing" value="Y"  checked="checked" /> 직거래
				<input type="checkbox" name="item_safe_dealing" value="Y" checked="checked"  /> 안전거래
			</li>
			<li>
				<label for="nText">거래 우선 지역</label>
				<select id="priority_area" name="priority_area" class="mp-input mp-district">
					<?php if($__Context->korea_districts&&count($__Context->korea_districts))foreach($__Context->korea_districts as $__Context->val){ ?><option value="<?php echo $__Context->val ?>"><?php echo $__Context->val ?></option><?php } ?>
				</select>
			</li>
			<script>
			jQuery('.mp-district').dependentSelects({
				separator: ' ', 
				placeholderOption: '선택',
				class: 'mp-input mp-district'
			});
			</script>
			<?php if(!$__Context->is_logged){ ?>
			<li>
				<label for="uName"><?php echo $__Context->lang->writer ?></label>
				<input name="nick_name" type="text" id="uName" />
			</li>
			<li>
				<label for="uMail"><?php echo $__Context->lang->email_address ?></label>
				<input name="email_address" type="email" id="uMail" />
			</li>
			<li>
				<label for="uPw"><?php echo $__Context->lang->password ?></label>
				<input name="password" type="password" id="uPw" />
			</li>
			<li>
				<label for="uSite"><?php echo $__Context->lang->homepage ?></label>
				<input name="homepage" type="url" id="uSite" value="" />
			</li>
			<?php } ?>
		</ul>
		<div class="bna">
			<button type="submit" class="bn dark"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
</form>
</div>
