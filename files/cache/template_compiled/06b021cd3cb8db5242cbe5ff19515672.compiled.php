<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::addJsFile("modules/marketplace/ruleset/insertItem.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" enctype="multipart/form-data" class="mp-form-insert" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertItem" />
    <input type="hidden" name="act" value="procMarketplaceAddContent" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<div class="mp-box mp-popup-box">
		<div class="mp-content">
			<div class="content_header">
				<div class="mp-title-add-content mp-hidetext">내 상품 등록</div>
				<a href="javascript:window.close();" class="mp-button button-white button-small button-return"><i class="xe-close"></i> 창 닫기</a>
			</div>
		   <div class="mp-notice"><i class="xe-announce"> 상품의 내용을 추가하실 수 있습니다. 내용을 수정하실 수 없으니 <strong>신중히 작성</strong>해주시기 바랍니다.</i></div>
		   <div class="mp-block">
				<?php echo $__Context->oDocument->getEditor() ?>
				<div class="btnArea">
					<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
					<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
					<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentSave(this);"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
					<?php } ?>
				</div>		   
		   </div>
		</div>
		<div class="mp-clearfix"></div>
	</div>
</form>