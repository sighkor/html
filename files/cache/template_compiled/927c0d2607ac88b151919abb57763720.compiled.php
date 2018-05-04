<?php if(!defined("__XE__"))exit;?><!--#Meta:/jquery.elevatezoom.js--><?php $__tmp=array('/jquery.elevatezoom.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/colorbox/jquery.colorbox.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/colorbox/jquery.colorbox.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/colorbox/example2/colorbox.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/colorbox/example2/colorbox.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
xe.lang.ask_change_soldout = '<?php echo $__Context->lang->ask_change_soldout ?>';
xe.lang.ask_change_cancel = '<?php echo $__Context->lang->ask_change_cancel ?>';
xe.lang.ask_change_selling = '<?php echo $__Context->lang->ask_change_selling ?>';
</script>
<div class="board_read">
	<?php if($__Context->module_info->flybanner == 'Y'){ ?>
    <div class="fly_banner">
		<?php if(!$__Context->module_info->flybanner_content){ ?><a href="http://contest.xpressengine.com/" target="_blank"><img src="/modules/marketplace/skins/default/images/advertise_xecontest_60x320.png" style="margin-left:8px; width:72px" /></a><?php } ?>
		<?php echo $__Context->module_info->flybanner_content ?>
    </div>
    <style type="text/css">
        .fly_banner {
            position:absolute;
			<?php if($__Context->module_info->flybanner_width){ ?>
            left:-<?php echo $__Context->module_info->flybanner_width ?>px;
			<?php }else{ ?>
            left:-110px;
			<?php } ?>
            top: 15px
        }
    </style>
	<?php } ?>
	<!-- 제목 상단 -->
	<div<?php if(!$__Context->oMarketItem->isNotice()){ ?> class="read_header"<?php };
if($__Context->oMarketItem->isNotice()){ ?> class="read_header notice"<?php } ?> >
		<h2><a href="<?php echo $__Context->oMarketItem->getPermanentUrl() ?>"><?php echo $__Context->oMarketItem->getTitle() ?></a></h2>
		<ul class="write_info">
			<?php if($__Context->module_info->hide_category=='N'){ ?><li>
			<a href="<?php echo getUrl('category',$__Context->oMarketItem->get('category_srl'), 'document_srl', '') ?>" class="category">
			<?php if($__Context->category_list[$__Context->category_list[$__Context->oMarketItem->get('category_srl')]->parent_srl]->parent_srl){ ?>
			<?php echo $__Context->category_list[$__Context->category_list[$__Context->category_list[$__Context->oMarketItem->get('category_srl')]->parent_srl]->parent_srl]->title ?> <i class="xe-angle-right"></i>
			<?php } ?>
			<?php if($__Context->category_list[$__Context->oMarketItem->get('category_srl')]->parent_srl){ ?>
			<?php echo $__Context->category_list[$__Context->category_list[$__Context->oMarketItem->get('category_srl')]->parent_srl]->title ?> <i class="xe-angle-right"></i>
			<?php } ?>
			<?php echo $__Context->category_list[$__Context->oMarketItem->get('category_srl')]->title ?>
			</a>
			</li><?php } ?>
			<li><?php echo $__Context->oMarketItem->getRegdate('Y년 m월 d일') ?></li>
		</ul>
		<a href="<?php echo getUrl('document_srl','') ?>" class="mp-button button-small button-white"><i class="xe-mail-reply"></i> 목록으로</a>
	</div>
	<?php if(!$__Context->oMarketItem->isNotice()){ ?>
	<!-- 상품 정보 -->
	<div class="itm_info">
		<div class="itm_thumbnails">
			<?php  
				$__Context->thumbnails = $__Context->oMarketItem->getThumbnailsObject(300,300);
				$__Context->big_thumb = $__Context->thumbnails[0];
			 ?>
			<div class="itm_prview">
				<?php if(count($__Context->thumbnails) > 1){ ?>
				<a class="prvbox" href="#">
					<img class="mainbox" src="<?php echo $__Context->big_thumb->thumbnail_url ?>" />
					<div class="desc"><span>클릭하여 크게봅니다</span></div>
				</a>
				<?php } ?>
				<?php if(count($__Context->thumbnails) <= 1){ ?>
				<a class="prvbox colorbox" href="<?php echo $__Context->big_thumb->uploaded_filename ?>">
					<img class="mainbox" src="<?php echo $__Context->big_thumb->thumbnail_url ?>" />
					<div class="desc"><span>클릭하여 크게봅니다</span></div>
				</a>
				<?php } ?>
			</div>
			<?php if(count($__Context->oMarketItem->getThumbnails())>1){ ?><div id="thumbnails" class="thumbnails"> 
				<?php if($__Context->thumbnails&&count($__Context->thumbnails))foreach($__Context->thumbnails as $__Context->key=>$__Context->thumbnail){ ?>
					<a<?php if(!$__Context->key){ ?> class="colorbox active"<?php };
if($__Context->key){ ?> class="colorbox"<?php } ?> href="<?php echo $__Context->thumbnail->uploaded_filename ?>"><img src="<?php echo $__Context->thumbnail->thumbnail_url ?>" /></a>
				<?php } ?>
			</div><?php } ?>
			<!-- 대표사진만 있을때 대표사진에 Colorbox 적용 -->
			<?php if(count($__Context->thumbnails) <= 1){ ?><script>
			jQuery(".itm_prview .colorbox").colorbox({maxWidth : '800px', opacity : '0.7'});
			</script><?php } ?>
			<!-- 다른 사진도 있을 경우 -->
			<script>
			jQuery(".prvbox").click(
				function() {
					var index = jQuery(".colorbox.active").index();
					jQuery(".colorbox").eq(index).click();
					return;
				});
			jQuery(".thumbnails .colorbox").hover(
				function() {
					jQuery(".colorbox").removeClass('active');
					jQuery(this).addClass('active');
					jQuery(".itm_prview img").attr('src', jQuery(this).find('img').attr('src'));
				}
			).colorbox({rel:'thumb', maxWidth : '800px', opacity : '0.7'});
			</script>
		</div>
		<div class="info_details">
			<div class="itm_code">
			상품코드 : <?php echo sprintf('%08d',$__Context->document_srl) ?>
			</div>
			<h3>제품 설명</h3>
			<table>
				<colgroup><col style="width: 110px;"><col></colgroup>
				<tbody>
					<tr>
						<td><span class="label">제품명</span></td>
						<td><?php echo $__Context->oMarketItem->get('product_name') ?></td>
					</tr>
					
					<!-- Extra Output -->
					<?php if($__Context->oMarketItem->isExtraVarsExists()){;
if($__Context->oMarketItem->getExtraVars()&&count($__Context->oMarketItem->getExtraVars()))foreach($__Context->oMarketItem->getExtraVars() as $__Context->key=>$__Context->val){ ?><tr>
						<td><span class="label"><?php echo $__Context->val->name ?></span></td>
						<td><?php echo $__Context->val->getValueHTML() ?></td>
					</tr><?php }} ?>
					<!-- /Extra Output -->
					<?php if($__Context->oMarketItem->get('original_price')){ ?><tr>
						<td><span class="label">구매 가격</span></td>
						<td><?php echo number_format($__Context->oMarketItem->get('original_price')) ?>원</td>
					</tr><?php } ?>
					<tr>
						<td><span class="label">판매 가격</span></td>
						<td class="price"><?php echo number_format($__Context->oMarketItem->get('price')) ?><small>원</small></td>
					</tr>
				</tbody>
			</table>
			<!-- 판매완료 메세지-->		
			<?php if($__Context->oMarketItem->isSoldout()){ ?><div class="closed">
				<i class="xe-exclamation-triangle"></i> 이 상품은 <strong>판매완료</strong>되었습니다.
			</div><?php } ?>
			<!-- 판매중단 메세지-->
			<?php if($__Context->oMarketItem->isCancel()){ ?><div class="closed">
				<i class="xe-exclamation-triangle"></i> 이 상품은 <strong>판매중단</strong>되었습니다.
			</div><?php } ?>
			<!-- 판매중일때 연락처 공개 -->
			<?php if($__Context->oMarketItem->isSelling()){ ?><div class="seller_contact">
				<a href="javascript:getSellerContact('<?php echo $__Context->oMarketItem->document_srl ?>','.contact_number');" class="red"><span class="mp-text-get-phone-number mp-hidetext">판매자 연락처 보기</span></a>
				<a onclick="popopen(this.href, 'popup'); return false;" href="<?php echo getUrl('', 'module', 'communication', 'act', 'dispCommunicationSendMessage', 'receiver_srl', $__Context->seller_info->member_srl) ?>"><i class="xe-message-bubble"></i> 쪽지보내기</a>
				<?php if($__Context->oMarketItem->isWishItem()){ ?>
					<a<?php if($__Context->oMarketItem->isWishitem()){ ?> class="active"<?php } ?> href="javascript:doToggleWishItem('<?php echo $__Context->oMarketItem->document_srl ?>');"><i class=" xe-folder-add"></i> 찜한상품</a>
				<?php } ?>
				<?php if(!$__Context->oMarketItem->isWishItem()){ ?>
					<a<?php if($__Context->oMarketItem->isWishitem()){ ?> class="active"<?php } ?> href="javascript:doToggleWishItem('<?php echo $__Context->oMarketItem->document_srl ?>');"><i class="xe-heart"></i> 찜하기</a>
				<?php } ?>
				<div class="contact_number">
					<img class="callout" src="/modules/marketplace/skins/default/images/callout.gif" />
					<strong>전화번호 :</strong> <span class="response"></span>
				</div>
			</div><?php } ?>
		</div>
	    <div class="mp-clearfix"></div>
	</div>
	<!-- 판매자 정보 -->
	<div class="lst_header seller_header">
		<h3 class="lst_tit">판매자 정보</h3>
	</div>
	<?php if($__Context->oMarketItem->get('member_srl')){ ?><table class="tbl_seller_info">
		<colgroup><col style="width: 190px;"><col></colgroup>
		<tbody>
			<tr>
				<th>닉네임</th>
				<td><?php if($__Context->oMarketItem->getNickName()){ ?><strong><?php echo $__Context->oMarketItem->getNickName() ?></strong><?php } ?></td>
			</tr>
			<tr>
				<th>최근 로그인</th>
				<td><?php echo zdate($__Context->seller_info->last_login, "Y년 m월 d일 H:i:s") ?></td>
			</tr>
			<tr>
				<th>판매 현황</th>
				<td>판매 완료 <strong><?php echo $__Context->seller_info->count_soldout ?></strong>건, 판매 중 <strong><?php echo $__Context->seller_info->count_selling ?></strong>건</td>
			</tr>
			<tr>
				<th>작성 글 / 작성 댓글</th>
				<td><?php echo $__Context->seller_info->count_document ?>건 / <?php echo $__Context->seller_info->count_comment ?>건</td>
			</tr>
			<?php if($__Context->module_info->display_sign!='N'&&($__Context->oMarketItem->getProfileImage()||$__Context->oMarketItem->getSignature())){ ?><tr>
				<th>판매자 서명</th>
				<td><?php if($__Context->oMarketItem->getProfileImage()){ ?><img src="<?php echo $__Context->oMarketItem->getProfileImage() ?>" alt="Profile" class="pf" style="width:50px; border-radius:3px" /><?php } ?>
			<?php if($__Context->oMarketItem->getSignature()){ ?><div class="tx"><?php echo $__Context->oMarketItem->getSignature() ?></div><?php } ?></td>
			</tr><?php } ?>
		</tbody>
	</table><?php } ?>
	<!-- 상품 소개 -->
	<div class="lst_header item_header">
		<h3 class="lst_tit">상품 소개</h3>
	</div>
	<?php } ?>
	<div class="read_content">
		<?php echo $__Context->oMarketItem->getContent(false) ?>
		<!-- 판매자용 상품 관리 버튼 -->
		<?php if($__Context->oMarketItem->isEditable() && $__Context->oMarketItem->isSelling()){ ?>
		<div class="lst_header contrlbox_header">
			<h3 class="lst_tit"><i class="xe-tool"></i> 판매자 상품 관리</h3>
		</div>
		<div class="item_controlbox">
			<ul class="btn_area">			
				<li>
					<a href="javascript:doChangeItemStatus(<?php echo $__Context->oMarketItem->document_srl ?>,'soldout');" class="btn_blue">
					<i class="xe-icon xe-status-check-boxout"></i>
					<p class="btn_txt">판매완료</p>
					</a>
					<p class="btn_dscription">상품 상태를 판매완료로 변경합니다.</p>
				</li>
				<?php if($__Context->module_info->use_reinsert){ ?><li>
					<a href="javascript:doItemReinsert(<?php echo $__Context->oMarketItem->document_srl ?>)" class="btn_default">
					<i class="xe-icon xe-repeat"></i>
					<p class="btn_txt">재등록</p>
					</a>
					<p class="btn_dscription">최신 목록으로 상품을 재등록합니다.</p>
				</li><?php } ?>
				<li>
					<a onclick="popopen(this.href, 'popup'); return false;" href="<?php echo getUrl('', 'module', 'marketplace', 'act', 'dispMarketplaceAddContent', 'document_srl', $__Context->oMarketItem->document_srl) ?>" class="btn_default">
					<i class="xe-icon xe-plus-square"></i>
					<p class="btn_txt">내용추가</p>
					</a>
					<p class="btn_dscription">상품에 대한 내용을 추가할 수 있습니다.</p>
				</li>
				<?php if($__Context->module_info->item_modify && $__Context->module_info->item_modify !== 'N'){ ?><li>
					<a onclick="popopen(this.href, 'popup'); return false;" href="<?php echo getUrl('', 'module', 'marketplace', 'act', 'dispMarketplaceModifyItem', 'document_srl', $__Context->oMarketItem->document_srl) ?>" class="btn_default">
					<i class="xe-icon xe-pencil-point"></i>
					<p class="btn_txt">상품 정보 수정</p>
					</a>
					<p class="btn_dscription">상품 기본 정보를 수정할 수 있습니다.</p>
				</li><?php } ?>
				<li>
					<a href="javascript:doStopItemSelling(<?php echo $__Context->oMarketItem->document_srl ?>);" class="btn_red">
					<i class="xe-icon xe-ban-circle"></i>
					<p class="btn_txt">판매 중단</p>
					</a>
					<p class="btn_dscription">상품을 더이상 판매하지 않습니다.</p>
				</li>
			</ul>
		</div>
		<?php } ?>
	</div>
	<div class="read_footer">
		<div class="etc">
			<?php if($__Context->oMarketItem->hasUploadedFiles()){ ?><div class="file_lst" >
				<span class="files_cnt">첨부 ‘<?php echo $__Context->oMarketItem->get('uploaded_count') ?>’</span>
				<?php if($__Context->oMarketItem->getUploadedFiles()&&count($__Context->oMarketItem->getUploadedFiles()))foreach($__Context->oMarketItem->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" class="file"><?php echo $__Context->file->source_filename ?> [File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</a><?php } ?><span class="comma">,</span>
			</div><?php } ?>
			<?php if($__Context->oMarketItem->isNotice() && $__Context->oMarketItem->isGranted()){ ?><div class="btn_area">
				<div class="btn_area_r">
					<ul class="func_bar_lst">
					<li>
						<a href="<?php echo getUrl('page','','act','dispMarketplaceNoticeWrite') ?>" class="w_type">
							<i class="xe-pen"></i>
							<span class="btn_txt">수정</span>
						</a>
					</li>
					<li>
						<a href="<?php echo getUrl('','document_srl',$__Context->document_srl,'act','dispMarketplaceDelete') ?>" class="w_type">
							<i class="xe-close"></i>
							<span class="btn_txt">삭제</span>
						</a>
					</li>
					</ul>
				</div>
			</div><?php } ?>
		</div>
		</div>
	<div class="mp-item-content">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_comment.html') ?>
	</div>
</div>
