<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<div class="mp-content content-line content-insert-page">
	<div class="content_header">
		<div class="mp-title-advertise-log mp-hidetext">프리미엄 광고 과금 내역</div>
		<a href="<?php echo getUrl('act','dispMarketplaceContent','') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
	</div>
	<div class="mp-notice"><i class="xe-announce"> 광고 입찰가를 적절히 조절하면 지나친 광고비 지출을 줄일 수 있습니다.</i></div>
	<div class="mp-block">
		<div class="board ">
			<div class="board_list basic_type">
				<table class="tbl_board_lst">
				<caption>진행중인 광고 리스트</caption>
				<colgroup>
				<col>
				<col>
				<col style="width: 150px">
				<col style="width: 150px;">
				<col style="width: 150px;">
				</colgroup>
				<thead>
				<!-- LIST HEADER -->
				<tr>
				<th scope="col"><div class="ta_c">상품 번호</div></th>
				<th scope="col"><div class="ta_c">행동</div></th>
				<th scope="col"><div class="ta_c">과금</div></th>
				<th scope="col"><div class="ta_c">아이피주소</div></th>
				<th scope="col"><div class="ta_c">시간</div></th>
				</tr>
				<!-- /LIST HEADER -->
				</thead>
				<?php if(!$__Context->log_list){ ?><tbody>
					<tr>
						<td colspan="5">
							<p style="text-align:center">진행중인 광고가 없습니다.</p>
						</td>
					</tr>
				</tbody><?php } ?>
				<?php if($__Context->log_list){ ?><tbody>
					<!-- LIST -->           
					<?php if($__Context->log_list&&count($__Context->log_list))foreach($__Context->log_list as $__Context->no=>$__Context->log){ ?><tr>
					<td class="bd_thmb">
						<div class="ta_c"><a href="<?php echo getUrl('','mid',$__Context->mid,'document_srl',$__Context->log->document_srl) ?>"><?php echo $__Context->log->document_srl ?></a></div>
					</td>
					<td>
						<div class="ta_c"><?php echo Context::getLang($__Context->log->action) ?></div>
					</td>
					<td><div class="ta_c"><?php echo $__Context->log->charging ?> P</div></td>
					<td><div class="ta_c"><?php echo $__Context->log->ipaddress ?></div></td>	
					<td>
						<div class="ta_c"><?php echo zdate($__Context->log->regdate) ?></div>
					</td>
					</tr><?php } ?>
				</tbody><?php } ?>
				</table>
			</div>
		</div>
        <div class="list_footer">
            <!-- PAGINATE -->
            <?php if($__Context->log_list){ ?><div class="bd_paginate">
                <a class="pg_btn" href="<?php echo getUrl('page','','document_srl','') ?>">
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
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
