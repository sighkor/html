<?php if(!defined("__XE__"))exit;?><script>
xe.lang.ask_change_soldout = '<?php echo $__Context->lang->ask_change_soldout ?>';
xe.lang.ask_change_cancel = '<?php echo $__Context->lang->ask_change_cancel ?>';
xe.lang.ask_change_selling = '<?php echo $__Context->lang->ask_change_selling ?>';
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<div class="mp-content content-insert-page">
	<div class="content_header">
		<div class="mp-title-manage-myitem mp-hidetext">내 상품 등록</div>
		<a href="<?php echo getUrl('act','dispMarketplaceContent') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
	</div>
	<div class="mp-notice">
		<i class="xe-announce"> 한번 등록된 상품은 삭제할 수 없으며 <strong>'판매 중단/완료'</strong> 처리만 가능합니다.</i>
		<div>
			<ul class="notice_list">
			<li><strong>판매 중단</strong> : 판매를 중지한 상태로 리스트에 노출되지 않으며 검색이 불가능합니다. (판매실적 포함X)</li>
			<li><strong>판매 완료</strong> : 판매가 완료된 상품으로 리스트에 노출되며 연락처는 자동으로 가려집니다. </li>
		</div>
	</div>
	<div class="mp-block">
		<div class="board_header">
			<ul class="board_tab">
			<li<?php if(!$__Context->item_status){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceItemManage') ?>">전체(<?php echo $__Context->total_count ?>)</a></li>
			<li<?php if($__Context->item_status == 'selling'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceItemManage','item_status','selling') ?>">판매중 상품(<?php echo $__Context->selling_count ?>)</a></li>
			<li<?php if($__Context->item_status == 'soldout'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceItemManage','item_status','soldout') ?>">판매완료 상품(<?php echo $__Context->soldout_count ?>)</a></li>
			<li<?php if($__Context->item_status == 'cancel'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispMarketplaceItemManage','item_status','cancel') ?>">판매중단 상품(<?php echo $__Context->cancel_count ?>)</a></li>
			</ul>
		</div>
		<div class="board">
			<div class="board_list basic_type">
				<table class="tbl_board_lst">
				<caption>게시판 리스트</caption>
				<colgroup>
				<col style="width: 125px;">
				<col>
				<col style="width: 150px;">
				</colgroup>
				<thead>
				<!-- LIST HEADER -->
				<tr>
				<th scope="col"><div class="ta_c">사진</div></th>
				<th scope="col"><div class="ta_c"><?php echo $__Context->lang->title ?></div></th>
				<th scope="col"><div class="ta_c">가격</div></th>
				</tr>
				<!-- /LIST HEADER -->
				</thead>
				<?php if(!$__Context->marketitem_list){ ?><tbody>
					<tr>
						<td<?php if(!$__Context->grant->manager){ ?> colspan="4"<?php };
if($__Context->grant->manager){ ?> colspan="5"<?php } ?>>
							<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
						</td>
					</tr>
				</tbody><?php } ?>
				<?php if($__Context->marketitem_list){ ?><tbody>
					<!-- LIST -->           
					<?php if($__Context->marketitem_list&&count($__Context->marketitem_list))foreach($__Context->marketitem_list as $__Context->no=>$__Context->document){ ?><tr>
					<td class="bd_thmb">
						<div style="position:relative">
						<span class="mp-condition-badge mp-condition-badge-small mp-<?php echo $__Context->document->getItemCondition() ?>"><?php echo $__Context->condition_list[$__Context->document->getItemCondition()]->short_name ?></span>
						<img src="<?php echo $__Context->document->getThumbnail(118,77) ?>" />
						</div>
					</td>
					<td>
						<!-- 카테고리 -->
						<?php if($__Context->document->get('category_srl')){ ?><div class="ta_l bd_catetgory">
						<a href="<?php echo getUrl('category',$__Context->document->get('category_srl'), 'document_srl', '') ?>" class="category">
						[<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?>] 
						</a>
						</div><?php } ?>
						<!-- 타이틀 -->
						<div class="ta_l bd_tit"><a href="<?php echo getUrl('','mid',$__Context->mid,'document_srl',$__Context->document->document_srl) ?>"><?php echo $__Context->document->getTitle() ?></a> <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?></div>
						<div class="ta_l bd_date"><i class="xe-time-o"></i> <?php echo $__Context->document->getRegdate('Y년 m월 d일 H시 i분') ?></div>
						<div class="ta_l">
							<div class="manage_area">
							<!-- 프리미엄 광고 관리 -->
							<?php if($__Context->document->isSelling()){ ?>
							<?php if($__Context->module_info->use_advertise && !$__Context->document->isAdvertise()){ ?><a onclick="popopen(this.href); return false;" href="<?php echo getUrl('act','dispMarketplaceAdvertiseInsert','document_srl',$__Context->document->document_srl) ?>" class="btn_action btn_action_yellow"><i class="xe-tree" ></i> 프리미엄 광고 등록</a><?php } ?> <?php if($__Context->document->isAdvertise()){ ?><span href="<?php echo getUrl('act','dispMarketplaceAdvertiseManage') ?>" class="btn_action" style="background:#5D6872;color:#fff"><i class="xe-leaf" ></i> 광고 잔액 : <?php echo number_format($__Context->document->getAdvertiseBalance()) ?> P</span><?php } ?>
							<a href="javascript:doChangeItemStatus(<?php echo $__Context->document->document_srl ?>,'soldout');" class="btn_action"><i class="xe-status-check"></i> 판매 완료</a> <a href="javascript:doChangeItemStatus(<?php echo $__Context->document->document_srl ?>,'cancel');" class="btn_action"><i class="xe-close-circle"></i> 판매 중단</a> 
							<?php } ?>
							<?php if($__Context->document->get('item_status')!='selling'){ ?>
							이 상품은 <strong class="<?php echo $__Context->document->get('item_status') ?>"><?php echo $__Context->lang->item_status[$__Context->document->get('item_status')] ?></strong> 되었습니다. <a href="javascript:doChangeItemStatus(<?php echo $__Context->document->document_srl ?>,'selling');" class="btn_action btn_action_none"><i class="xe-rotate-left"></i> 다시판매</a> 
							<?php } ?>
							</div>
						</div>
					</td>
					<td>
						<div class="ta_c mp-price">\ <?php echo number_format($__Context->document->get('price')) ?></div>
						<?php if($__Context->document->get('original_price')){ ?><div class="ta_c mp-price price-original">(<?php echo number_format($__Context->document->get('original_price')) ?>)</div><?php } ?>
					</td>
					</tr><?php } ?>
				</tbody><?php } ?>
				</table>
			</div>
			<div class="list_footer">
				<!-- PAGINATE -->
				<?php if($__Context->marketitem_list){ ?><div class="bd_paginate">
					<a class="pg_btn" href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>">
						<i class="xe-angle-left"><span class="blind"><?php echo $__Context->lang->first_page ?></span></i>
					</a>
					<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
					<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
					<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
					<?php } ?>
					<a class="pg_btn" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>">
					<i class="xe-angle-right"><span class="blind"><?php echo $__Context->lang->last_page ?></span></i>
					</a>
				</div><?php } ?>
				<!-- /PAGINATE -->
			</div>
		</div>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
