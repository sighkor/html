<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<?php  Context::loadLang('./modules/marketplace/m.skins/default/lang') ?>
<!--#Meta:modules/marketplace/m.skins/default/js/mmarketplace.js--><?php $__tmp=array('modules/marketplace/m.skins/default/js/mmarketplace.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/m.skins/default/css/mmarketplace.css--><?php $__tmp=array('modules/marketplace/m.skins/default/css/mmarketplace.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="hd hx h2">
	<div class="category"><?php if($__Context->module_info->hide_category == "N" && $__Context->oDocument->get('category_srl')){ ?><a href="<?php echo getUrl('document_srl','','category',$__Context->oDocument->get('category_srl')) ?>"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a><?php } ?></div>
	<h2 class="title"><?php echo $__Context->oDocument->getTitle() ?></h2>
	<div class="ex"><?php echo $__Context->oDocument->getNickName() ?> | <?php echo $__Context->oDocument->getRegdate() ?> | <a href="#skip_co"><?php echo $__Context->lang->skip_to_content ?></a></div>
</div>
<div class="co">
<?php  $__Context->thumbnails = $__Context->oMarketItem->getThumbnails(400,0,'ratio') ?>
<?php if($__Context->thumbnails&&count($__Context->thumbnails))foreach($__Context->thumbnails as $__Context->val){ ?><img src="<?php echo $__Context->val ?>" /><?php } ?>
<?php if(!$__Context->oMarketItem->isNotice()){ ?><dl class="xv">
	<dt>상품명</dt>
	<dd><?php echo $__Context->oMarketItem->get('product_name') ?></dd>
	<dt>사용 기간</dt>
	<dd>
	<?php 
		$__Context->used_month = $__Context->oMarketItem->get('used_month');
		if($__Context->used_month>12)
		  echo sprintf("%d년",intval($__Context->used_month/12));
		if($__Context->used_month%12)
		  echo sprintf("%d개월",$__Context->used_month%12);
		if($__Context->used_month == 0)
		  echo "미사용";
	 ?>
	</dd>
	<dt>판매 가격</dt>
	<dd><?php echo number_format($__Context->oMarketItem->get('price')) ?><small>원</small></dd>
	
	<dt>우선 거래 지역</dt>
	<dd><?php echo $__Context->oMarketItem->get('priority_area') ?></dd>
	
	<dt>거래 방법</dt>
	<dd><?php if($__Context->oMarketItem->get('direct_dealing')=='Y'){ ?><span class="badge">직거래</span><?php } ?> <?php if($__Context->oMarketItem->get('delivery')=='Y'){ ?><span class="badge">택배거래</span><?php } ?> <?php if($__Context->oMarketItem->get('safe_dealing')=='Y'){ ?><span class="badge badge-yellow">안전거래</span><?php } ?></dd>
	<?php if($__Context->oDocument->isExtraVarsExists()){ ?>
	<?php if($__Context->_extra_vars&&count($__Context->_extra_vars))foreach($__Context->_extra_vars as $__Context->key => $__Context->val){ ?>
		<dt><?php echo $__Context->val->name ?></dt>
		<dd><?php echo $__Context->val->getValueHTML() ?></dd>
	<?php } ?>
	<?php } ?>
</dl><?php } ?>
<div class="getnumber">
<a href="javascript:getSellerContact('<?php echo $__Context->oMarketItem->document_srl ?>','.contact_number');" class="bn white full"><span class="mp-text-get-phone-number mp-hidetext">판매자 연락처 보기</span></a>
<div class="contact_number" style="display:none">
	<strong>전화번호 :</strong> <span class="response"></span>
</div>
</div>
<?php echo $__Context->oDocument->getContent(false) ?>
</div>
<div id="skip_co"></div>
<?php if($__Context->oDocument->hasUploadedFiles()){ ?>
<?php  $__Context->uploaded_list = $__Context->oDocument->getUploadedFiles()  ?>
<div class="hx h3">
	<h3><?php echo $__Context->lang->uploaded_file ?> <em>[<?php echo count($__Context->uploaded_list) ?>]</em></h3> 
	<button type="button" class="tg" title="open/close"></button>
</div>
<ul class="file tgo open">
	<?php if($__Context->uploaded_list&&count($__Context->uploaded_list))foreach($__Context->uploaded_list as $__Context->key => $__Context->file){ ?>
	<li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="size"><?php echo FileHandler::filesize($__Context->file->file_size) ?></span></a></li>
	<?php } ?>
</ul>
<?php } ?>
<?php if($__Context->oDocument->getCommentCount()){ ?>
<div class="hx h3">
	<h3 id="clb"><?php echo $__Context->lang->comment ?> <em>[<?php echo $__Context->oDocument->getCommentCount() ?>]</em></h3> 
	<button type="button" class="tg tgr" title="open/close"></button>
</div>
<?php } ?>
<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment() ){ ?>
<div class="hx h3">
	<h3><?php echo $__Context->lang->write_comment ?></h3>
	<button type="button" class="tg" title="open/close"></button>
</div>
<?php Context::addJsFile("modules/marketplace/ruleset/insertComment.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="ff tgo open"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertComment" />
	<input type="hidden" name="act" value="procMarketplaceInsertComment" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<input type="hidden" name="comment_srl" value="" />
	<ul>
		<li>
			<label for="rText"><?php echo $__Context->lang->comment ?></label>
			<textarea class="textarea" name="content" rows="8" cols="10" id="rText"></textarea>
		</li>
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
			<input name="homepage" type="url" id="uSite" value="http://" />
		</li>
		<?php } ?>
	</ul>
	<div class="bna">
		<input name="" type="submit" value="<?php echo $__Context->lang->cmd_comment_registration ?>" class="bn white full" />
	</div>
</form>
<?php } ?>
<div style="height:1px;overflow:hidden;background:#ddd"></div>
<div class="bna">
	<span class="fl"><a href="<?php echo getUrl('document_srl','') ?>" class="bn white"><?php echo $__Context->lang->cmd_list ?></a></span>
	<span class="fr">
		<?php if($__Context->oDocument->isEditable()){ ?>
		<a href="<?php echo getUrl('act','dispMarketplaceDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>" class="bn white"><?php echo $__Context->lang->cmd_delete ?></a>
		<?php } ?>
	</span>
</ul>
<script>
//<![CDATA[
jQuery(function($){
	$('.co .mm').next().hide();
	$('.mm').click(function(){ $(this).hide().next().show();});
	$('.tgo').removeClass('open');
	$('.tg').click(function(){
		$(this).parent('.h3').next('.tgo').toggleClass('open');
	});
	var loaded = false;
	$('.tgr').click(function(){
		if(!loaded) {
			loaded = true;
			<?php  $__Context->lastpage = 1;  ?>
			<?php  $__Context->temp = $__Context->oDocument->getComments()  ?>
			<?php if($__Context->oDocument->comment_page_navigation){ ?>
			<?php  $__Context->lastpage = $__Context->oDocument->comment_page_navigation->last_page  ?>
			<?php } ?>
			loadPage(<?php echo $__Context->oDocument->document_srl ?>, <?php echo $__Context->lastpage ?>);
		}
	});
});
//]]>
</script>
