<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<form action="./" method="post" enctype="multipart/form-data" class="mp-form-insert"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="act" value="procMarketplaceInsertNotice" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="status" value="PUBLIC" />
    <?php if($__Context->grant->manager){ ?><input type="hidden" name="is_notice" value="Y" /><?php } ?>
        <div class="mp-content content-insert-page">
			<div class="content_header">
                <div class="mp-title-insert-notice mp-hidetext">내 상품 등록</div>
                <a href="<?php echo getUrl('act','dispMarketplaceContent','') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
            </div>
			<div class="mp-notice"><i class="xe-announce"> 공지사항 등록은 권한이 있는 관리자만 등록하실 수 있습니다. </i></div>
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
				<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
			</div><?php } ?>
			<div class="mp-block">
				<div class="mp-block" style="padding-top:0; padding-left:0; padding-right:0">
                    <section class="mp-section">
                      <label for="title" class="mp-label">글 제목</label>
                      <input id="title" type="text" name="title" title="<?php echo $__Context->lang->title ?>"<?php if($__Context->oDocument->getTitleText()){ ?> value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>"<?php } ?> class="mp-input input-full" />
                        <?php if($__Context->is_logged){ ?>
                            <input type="checkbox" name="notify_message" class="iCheck" value="Y"<?php if($__Context->oDocument->useNotify()){ ?> checked="checked"<?php } ?> id="notify_message" />
                            <label for="notify_message"><?php echo $__Context->lang->notify ?></label>
                        <?php } ?>
                    </section>
                    <section class="mp-section">
                      <?php echo $__Context->oDocument->getEditor() ?>
                    </section>
				</div>
			</div>
        </div>
		<div class="write_footer">
			<div class="write_author">
				<?php if(!$__Context->is_logged){ ?><span class="item">
					<label for="userName" class="iLabel"><?php echo $__Context->lang->writer ?></label>
					<input type="text" name="nick_name" id="userName" class="iText userName" style="width:80px" value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" />
				</span><?php } ?>
				<?php if(!$__Context->is_logged){ ?><span class="item">
					<label for="userPw" class="iLabel"><?php echo $__Context->lang->password ?></label>
					<input type="password" name="password" id="userPw" class="iText userPw" style="width:80px" />
				</span><?php } ?>
				<?php if(!$__Context->is_logged){ ?><span class="item">
					<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
					<input type="text" name="homepage" id="homePage" class="iText homePage"  style="width:140px"value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" />
				</span><?php } ?>
			</div>
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
