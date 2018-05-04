<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<div class="mp-content content-insert-page">
	<div class="content_header">
		<div class="mp-title-wish-list mp-hidetext">내 상품 등록</div>
		<a href="<?php echo getUrl('act','dispMarketplaceContent') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
	</div>
	<div class="mp-notice">
		<i class="xe-announce"> 한번 등록된 상품은 삭제할 수 없으며 <strong>'판매 중단/완료'</strong> 처리만 가능합니다.</i>
	</div>
	<div class="mp-block">
		<!-- 게시판 시작 -->
		<div class="board">
			<!-- 게시판 목록 시작 -->
			<div class="board_list basic_type">
				<table class="tbl_board_lst">
				<caption>마켓 상품 목록</caption>
				<colgroup>
				<col style="width: 128px;">
				<col>
				<col style="width: 90px;">
				<col style="width: 90px;">
				</colgroup>
				<thead>
				<!-- 목록 헤더 -->
				<tr>
				<th scope="col"><div class="ta_c">사진</div></th>
				<th scope="col"><div class="ta_c"><?php echo $__Context->lang->title ?></div></th>
				<th scope="col"><div class="ta_c"><a href="#">가격</a></div></th>
				<th scope="col"><div class="ta_c">삭제</div></th>
				</tr>
				<!-- 목록 헤더 끝 -->
				</thead>
				<!-- 등록된 글 없음 출력 (조건. 글 없을 때)-->
				<?php if(!$__Context->wish_list){ ?><tbody>
					<tr>
						<td colspan="5">
							<p style="text-align:center">등록된 관심상품이 없습니다.</p>
						</td>
					</tr>
				</tbody><?php } ?>
				<!-- 목록 출력 (조건. 글 있을 때) -->
				<?php if($__Context->wish_list){ ?><tbody>
					<!-- 리스트  -->           
					<?php if($__Context->wish_list&&count($__Context->wish_list))foreach($__Context->wish_list as $__Context->no=>$__Context->document){ ?><tr>
					<td class="bd_thmb">
						<div style="position:relative">
						<span class="mp-condition-badge mp-condition-badge-small mp-<?php echo $__Context->document->getItemCondition() ?>"><?php echo $__Context->condition_list[$__Context->document->getItemCondition()]->short_name ?></span>
						<img src="<?php echo $__Context->document->getThumbnail(118,77) ?>" />
						</div>
					</td>
					<td>
						<!-- 카테고리 -->
						<div class="ta_l bd_catetgory">
						<a href="<?php echo getUrl('category',$__Context->document->get('category_srl'), 'document_srl', '') ?>" class="category">
						[<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?>] 
						</a>
						</div>
						<!-- 타이틀 -->
						<div class="ta_l bd_tit"><?php if($__Context->document->isSoldout()){ ?><span class="badge_soldout">판매완료</span><?php };
if($__Context->document->isReinserted() && $__Context->document->isSelling()){ ?><span class="badge_reupload">재등록</span><?php } ?><a href="<?php echo getUrl('','document_srl',$__Context->document->document_srl) ?>"<?php if($__Context->document->isSoldout()){ ?> class="soldout"<?php } ?>><?php echo $__Context->document->getTitle() ?></a> <?php if($__Context->document->getCommentCount()){ ?><em class="cmt_count">(<?php echo $__Context->document->getCommentCount() ?>)</em><?php } ?> </div>
						<!-- 작성일 -->
						<div class="ta_l bd_date"><i class="xe-time-o"></i> <?php echo $__Context->document->getRegdate('Y년 m월 d일') ?> (<?php echo $__Context->document->getTimeGap() ?>) / <a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></div>
					</td>
					<td>
						<!-- 가격 -->
						<div class="ta_c mp-price">\ <?php echo number_format($__Context->document->get('price')) ?></div>
						<?php if($__Context->document->get('original_price')){ ?><div class="ta_c mp-price price-original">(<?php echo number_format($__Context->document->get('original_price')) ?>)</div><?php } ?>
					</td>
					<td style="vertical-align:middle">
						<div class="ta_c">
						<a href="javascript:doToggleWishItem(<?php echo $__Context->document->document_srl ?>)" class="btn_flat hvr_red">삭제</a>
						</div>
					</td>
					</tr><?php } ?>
				</tbody><?php } ?>
				</table>
			</div>
			<div class="list_footer">
				<!-- PAGINATE -->
				<?php if($__Context->wish_list){ ?><div class="bd_paginate">
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
		<!-- 게시판 끝 -->
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
