<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<div class="mp-content content-insert-page">
	<div class="content_header">
		<div class="mp-title-manage-premium mp-hidetext">내 상품 등록</div>
		<a href="<?php echo getUrl('act','dispMarketplaceContent','') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
	</div>
	<div class="mp-notice"><i class="xe-announce"> 광고 입찰가를 적절히 조절하면 지나친 광고비 지출을 줄일 수 있습니다.</i></div>
	<div class="mp-block">
		<div class="board ">
			<div class="board_list basic_type">
				<table class="tbl_board_lst">
				<caption>진행중인 광고 리스트</caption>
				<colgroup>
				<col style="width: 110px;">
				<col style="width: 90px;">
				<col style="width: 125px;">
				<col>
				</colgroup>
				
				<thead>
				<!-- LIST HEADER -->
				<tr>
				<th scope="col"><div class="ta_c">남은 광고료</div></th>
				<th scope="col"><div class="ta_c">입찰가</div></th>
				<th scope="col"><div class="ta_c">사진</div></th>
				<th scope="col"><div class="ta_c">제목</div></th>
				</tr>
				<!-- /LIST HEADER -->
				</thead>
				<?php if(!$__Context->advertise_list){ ?><tbody>
					<tr>
						<td colspan="4">
							<p style="text-align:center">진행중인 광고가 없습니다.</p>
						</td>
					</tr>
				</tbody><?php } ?>
				<?php if($__Context->advertise_list){ ?><tbody>
					<!-- LIST -->           
					<?php if($__Context->advertise_list&&count($__Context->advertise_list))foreach($__Context->advertise_list as $__Context->no=>$__Context->document){ ?><tr>
	
					<td>
						<div class="ta_c mp-price"><span style="background:none repeat scroll 0% 0% #5D6872;color:#fff;padding:4px 6px 3px;border-radius:2px"><i class="xe-leaf"></i> <?php echo number_format($__Context->document->get('balance')) ?> P</span></div>
					</td>
					<td><div class="ta_c mp-price"><?php echo number_format($__Context->document->get('bid_price')) ?> P</div></td>
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
						<div class="ta_l bd_tit"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"<?php if($__Context->document->isSoldout()){ ?> class="soldout"<?php } ?>><?php echo $__Context->document->getTitle() ?></a> </div>
						<!-- 작성일 -->
						<div class="ta_l bd_date"><i class="xe-time-o"></i> <?php echo $__Context->document->getRegdate('Y년 m월 d일') ?> (<?php echo $__Context->document->getTimeGap() ?>) / <a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></div>
						<div class="ta_l">
							<div class="manage_area"> 
								<a href="javascript:doStopAdvertise(<?php echo $__Context->document->document_srl ?>);" class="btn_action"><i class="xe-wastebasket"></i> 광고 중단</a> <a onclick="popopen(this.href); return false;" href="<?php echo getUrl('act','dispMarketplaceAdvertiseInsert','document_srl',$__Context->document->document_srl) ?>" class="btn_action mp-btn_blue"><i class="xe-tool"></i> 광고 수정</a>
							</div>
						</div>
					</td>
					</tr><?php } ?>
				</tbody><?php } ?>
				</table>
			</div>
		</div>
	</div>
	<style type="text/css">
		.mp-squarebutton {
			float: left;
			width: 100px;
			background-color: #f3f3f3;
			border-radius: 6px;
			text-align:center;
			padding:20px 0;
			margin-right:13px;
		}
		.mp-squarebutton i {
			display:block;
			font-size:60px;
			margin-bottom:10px;
		}
	</style>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
