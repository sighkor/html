<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/marketplace.default.js--><?php $__tmp=array('modules/marketplace/skins/default/marketplace.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--relatedselects plugin load-->
<!--#Meta:modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js','head','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="mp-box mp-popup-box">
<form action="./" method="post" class="mp-form-insert"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="act" value="procMarketplaceItemModify" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<div class="mp-content">
			<div class="content_header">
				<div class="mp-title-modify-item mp-hidetext">내 상품 등록</div>
				<a href="javascript:window.close();" class="mp-button button-white button-small button-return"><i class="xe-close"></i> 창 닫기</a>
			</div>
		   <div class="mp-notice"><i class="xe-announce"> 판매중인 상품의 상품 정보를 수정하실 수 있습니다.</i></div>
			<div class="mp-block" style="padding: 0 10px;">
				<div class="mp-block">
                    <?php if($__Context->module_info->hide_category=='N'){ ?><section class="mp-section" >
                      <label class="mp-label"><strong>상품 카테고리<strong></label>			
                        <select name="category_srl" class="mp-input mp-dependent">
                            <option value=""><?php echo $__Context->lang->category ?></option>
                            <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
                            <?php  
                                if($__Context->val->child_count) $__Context->_parent_text[$__Context->val->category_srl] = $__Context->_parent_text[$__Context->val->parent_srl].$__Context->val->title." || ";
                             ?>
                            <?php if(!$__Context->val->child_count){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oMarketItem->get('category_srl')){ ?> selected="selected"<?php } ?> >
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
                            <label for="item_condition" class="mp-label"><strong>서비스 구분</strong></label>
                            <select name="item_condition" id="item_condition" class="mp-input">
								<?php if($__Context->condition_list&&count($__Context->condition_list))foreach($__Context->condition_list as $__Context->condition){ ?><option value="<?php echo $__Context->condition->eid ?>"<?php if($__Context->oMarketItem->get('item_condition') == $__Context->condition->eid){ ?> selected="selected"<?php } ?>><?php echo $__Context->condition->name ?></option><?php } ?>
                            </select>
                        </section>
						
                    <section class="mp-section">
                        <label for="item_name" class="mp-label"><strong>판매 상품명<strong> <small>(*검색 키워드)</small></label>
                        <input id="item_name" type="text" value="<?php echo $__Context->oMarketItem->get('product_name') ?>" name="item_name" class="mp-input input-full">
                        <p class="description">키워드를 포함하여 입력하시기 바랍니다. (예. 랭크, 듀오, 강의, 버스)</p>
                    </section>
                    <section class="mp-section">
                      <label for="item_price" class="mp-label"><strong>판매 가격<strong></label>
                      <input id="item_price" type="text" value="<?php echo number_format($__Context->oMarketItem->get('price')) ?>" name="item_price" class="mp-input number"> 원 <span id="item_price_ko"></span>
                    </section>
						
                     
					<div class="btnArea">
						<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
					</div>	
				</div>
			</div>
		</div>
		<div class="mp-clearfix"></div>
</form>
</div>