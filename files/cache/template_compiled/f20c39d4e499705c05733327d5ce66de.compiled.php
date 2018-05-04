<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<!--relatedselects plugin load-->
<!--#Meta:modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js','head','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::addJsFile("modules/marketplace/ruleset/insertItem.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" enctype="multipart/form-data" class="mp-form-insert" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertItem" />
    <input type="hidden" name="act" value="procMarketplaceInsertDocument" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="status" value="PUBLIC" />
        <div class="mp-content content-insert-page">
			<div class="content_header">
                <div class="mp-title-insert-myitem mp-hidetext">내 상품 등록</div>
                <a href="<?php echo getUrl('act','dispMarketplaceContent','') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
            </div>
			<?php  if(!$__Context->module_info->notice_write_form) $__Context->module_info->notice_write_form = '한줄 공지사항 부분입니다. 이 부분은 스킨 설정에서 설정이 가능합니다.' ?>
			<div class="mp-notice"><i class="xe-announce"> <?php echo $__Context->module_info->notice_write_form ?></i></div>
			<div class="mp-block">
				<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
					<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
				</div><?php } ?>
			
				<div class="information">
					<h3><i class="xe-information-circle" style="color:red"></i> 연락처를 꼭 확인하세요!</h3>
					<p>현재 등록된 회원님의 연락처는 ( <strong><?php echo $__Context->contact_number ?></strong> )입니다.<br />
					회원님의 연락처가 올바르지 않다면 <a href="<?php echo getUrl('mid',$__Context->mid,'act','dispMemberInfo') ?>">회원정보수정</a>에서 변경해주시기 바랍니다.</p>
				</div>
				<h1 class="section_title">1. 물품 대표 사진 등록</h1>
				<div class="mp-block">
					<p><span class="mp-important">*</span> 판매하실 물품의 대표 사진을 등록해주세요.</p>
                    <div class="mp-imagefile-upload">
						<img class="preview" src="/modules/marketplace/skins/default/#" alt="your image" style="display:none;"/>
						<div class="mp-no-image">
							<i class="xe-photo-camera-c"></i>
							<p><span>대표 사진 등록</span></p>
						</div>
						<input name="thumbnail[0]" class="insertImage"  type="file" size="1" />
                    </div>
					<div class="mp-clearfix"></div>
                    <div class="mp-imagefile-upload small">
						<img class="preview" src="/modules/marketplace/skins/default/#" alt="your image" style="display:none;"/>
						<div class="mp-no-image">
							<i class="xe-photo-camera-c"></i>
							<p>사진등록(선택)</p>
						</div>
						<input name="thumbnail[1]" class="insertImage" type="file" size="1" />
                    </div>
                    <div class="mp-imagefile-upload small">
						<img class="preview" src="/modules/marketplace/skins/default/#" alt="your image" style="display:none;"/>
						<div class="mp-no-image">
							<i class="xe-photo-camera-c"></i>
							<p>사진등록(선택)</p>
						</div>
						<input name="thumbnail[2]" class="insertImage" type="file" size="1" />
                    </div>
                    <div class="mp-imagefile-upload small" style="margin-right:0">
						<img class="preview" src="/modules/marketplace/skins/default/#" alt="your image" style="display:none;"/>
						<div class="mp-no-image">
							<i class="xe-photo-camera-c"></i>
							<p>사진등록(선택)</p>
						</div>
						<input name="thumbnail[3]" id="insertImage" class="insertImage" type="file" size="1" />
                    </div>
				</div>
				<div class="mp-clearfix"></div>
			</div>
			<div class="mp-block">
				<h1 class="section_title">2. 판매 정보 등록</h1>
				<div class="mp-block">
                    <?php if($__Context->module_info->hide_category=='N'){ ?><section class="mp-section" >
                      <label class="mp-label">상품 카테고리</label>			
                        <select name="category_srl" class="mp-input mp-dependent">
                            <option value=""><?php echo $__Context->lang->category ?></option>
                            <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
                            <?php  
                                if($__Context->val->child_count) $__Context->_parent_text[$__Context->val->category_srl] = $__Context->_parent_text[$__Context->val->parent_srl].$__Context->val->title." || ";
                             ?>
                            <?php if(!$__Context->val->child_count){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?> >
                                <?php echo $__Context->_parent_text[$__Context->val->parent_srl];
echo $__Context->val->title ?>
                            </option><?php } ?>
                            <?php } ?>
                        </select>
                    </section><?php } ?>
                    <script>
                    jQuery('.mp-dependent').dependentSelects({
                        separator: ' || ', 
                        placeholderOption: '선택',
                        class: 'mp-input mp-dependent'
                    });
                    </script>
					                        <section class="mp-section">
                            <label for="item_condition" class="mp-label">서비스 구분</label>
                            <select name="item_condition" id="item_condition" class="mp-input">
                                <?php if($__Context->condition_list&&count($__Context->condition_list))foreach($__Context->condition_list as $__Context->condition){ ?><option value="<?php echo $__Context->condition->eid ?>"><?php echo $__Context->condition->name ?></option><?php } ?>
                            </select>
                        </section>
						
                    <section class="mp-section">
                        <label for="item_name" class="mp-label">판매 상품명 <small>(*검색 키워드)</small></label>
                        <input id="item_name" type="text" value="" name="item_name" class="mp-input input-full">
                        <p class="description">키워드를 포함하여 입력하시기 바랍니다. (예. 랭크, 듀오, 강의, 버스)</p>
                    </section>
                    
                    <section class="mp-section">
                      <label for="item_price" class="mp-label">판매 가격</label>
                      <input id="item_price" type="text" value="" name="item_price" class="mp-input number"> 원 <span id="item_price_ko"></span>
                    </section>
									</div>
				<div class="mp-clearfix"></div>
			</div>
			
			<div class="mp-block">
				<h1 class="section_title">2. 판매 정보 등록</h1>
				<div class="mp-block">
                    <section class="mp-section">
                      <label for="title" class="mp-label">판매 글 제목 <small>(*수정이 불가능하니 신중히 입력하시기 바랍니다.)</small></label>
                      <?php if(!$__Context->oDocument->getTitleText()){ ?><input id="title" type="text" name="title" title="<?php echo $__Context->lang->title ?>"<?php if($__Context->oDocument->getTitleText()){ ?> value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>"<?php } ?> class="mp-input input-full" /><?php } ?>
                        <?php if($__Context->is_logged){ ?>
                            <input type="checkbox" name="notify_message" class="iCheck" value="Y"<?php if($__Context->oDocument->useNotify()){ ?> checked="checked"<?php } ?> id="notify_message" />
                            <label for="notify_message"><?php echo $__Context->lang->notify ?></label>
                        <?php } ?>
                    </section>
                    <section class="mp-section">
                      <label for="subject" class="mp-label">물품 소개</label>
                      <?php echo $__Context->oDocument->getEditor() ?>
                    </section>
                   
                    </div>
				</div>
			</div>
        </div>
		<div class="write_footer">
			<div class="btnArea">
				<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
				<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
				<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentSave(this);"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
				<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentLoad(this);"><?php echo $__Context->lang->cmd_load ?></button><?php } ?>
				<?php } ?>
			</div>
		</div>
    </div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
