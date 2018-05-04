<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html') ?>
<div class="mp-content content-insert-page">
	<div class="content_header">
		<div class="mp-title-item-comments mp-hidetext">내 상품에 달린 댓글</div>
		<a href="<?php echo getUrl('act','dispMarketplaceContent') ?>" class="mp-button button-white button-small button-return"><i class="xe-mail-reply"></i> 마켓으로 돌아가기</a>
	</div>
	<div class="mp-notice">
		<i class="xe-announce"> 내가 등록한 상품에 올라온 댓글들을 모아 볼 수 있습니다.</i>
	</div>
	<div class="mp-block">
		<div class="board">
			<div class="board_list basic_type">
				<table class="tbl_board_lst">
				<caption>게시판 리스트</caption>
				<colgroup>
				<col style="width: 77px;">
				<col>
				<col style="width: 200px">
				</colgroup>
				<thead>
				<!-- LIST HEADER -->
				<tr>
				<th scope="col"><div class="ta_c">프로필</div></th>
				<th scope="col"><div class="ta_c">내용</div></th>
				<th scope="col"><div class="ta_c">상품정보</div></th>
				</tr>
				<!-- /LIST HEADER -->
				</thead>
				<?php if(!$__Context->comment_list){ ?><tbody>
					<tr>
						<td colspan="3">
							<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
						</td>
					</tr>
				</tbody><?php } ?>
				<?php if($__Context->comment_list){ ?><tbody>
					<!-- LIST -->           
					<?php if($__Context->comment_list&&count($__Context->comment_list))foreach($__Context->comment_list as $__Context->key=>$__Context->comment){ ?><tr id="comment_<?php echo $__Context->comment->comment_srl ?>">
					<?php  $__Context->oMarketItem = $__Context->comment->oMarketItem ?>
					<td class="bd_thmb" style="text-align:center">
						<?php if(!$__Context->comment->getProfileImage()){ ?><img src="/modules/marketplace/skins/default/images/thumb_user.png" alt="" class="cmt_profile_img" style="width:50px;height:50px" /><?php } ?>
						<?php if($__Context->comment->getProfileImage()){ ?><img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="Profile" class="cmt_profile_img" style="width:50px;height:50px" /><?php } ?>
					</td>
					<td>
						<div class="cmt_item">
							<div class="cmt_con">
								<!-- 댓글 작성자 정보-->
								<span class="cmt_writer">
									<?php if(!$__Context->comment->member_srl && $__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->getHomepageUrl() ?>"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
									<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
									<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
								</span>
								<span class="cmt_date"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></span>
								<!-- 댓글 내용 -->
								<div class="xe_content">
									<?php echo $__Context->comment->getContent(false, true, false) ?>
								</div>
							</div>
						</div>
					</td>
					
					<td>
						<div style="border:1px solid #eaeaea; margin:0 5px; background-color:#fff; padding:8px; overflow:hidden; ">
							<img src="<?php echo $__Context->oMarketItem->getThumbnail() ?>" alt="" style="float:left; width:50px;height:32px; margin-right:8px" />
							<!-- 타이틀 -->
							<div style="line-height:1.3"><a href="<?php echo getUrl('','mid',$__Context->mid,'document_srl',$__Context->oMarketItem->document_srl) ?>"><?php echo $__Context->oMarketItem->getTitle('25') ?></a></div>
						</div>
					</td>
					
					</tr><?php } ?>
				</tbody><?php } ?>
				</table>
			</div>
			<div class="list_footer">
				<!-- PAGINATE -->
				<div class="bd_paginate">
					<a class="pg_btn" href="<?php echo getUrl('page','','document_srl','') ?>">
						<i class="xe-angle-left"><span class="blind"><?php echo $__Context->lang->first_page ?></span></i>
					</a>
					<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
					<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
					<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','') ?>"><?php echo $__Context->page_no ?></a><?php } ?>
					<?php } ?>
					<a class="pg_btn" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>">
					<i class="xe-angle-right"><span class="blind"><?php echo $__Context->lang->last_page ?></span></i>
					</a>
				</div>
				<!-- /PAGINATE -->
			</div>
		</div>
	</div>
</div>
            
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
