<?php if(!defined("__XE__"))exit;
$__Context->oMemberModel = getModel('member');
	$__Context->profile = $__Context->oMemberModel->getProfileImage($__Context->logged_info->member_srl);
 ?>
<div class="cmt_lst_wrap" style="display:block">
	<!-- COMMENT LIST -->
	<ul class="cmt_lst">
	<!-- 코멘트 반복-->
	<?php if($__Context->oMarketItem->getComments()&&count($__Context->oMarketItem->getComments()))foreach($__Context->oMarketItem->getComments() as $__Context->key=>$__Context->comment){ ?><li<?php if(!$__Context->comment->get('depth')){ ?> class="cmt_item"<?php };
if($__Context->comment->get('depth')){ ?> class="cmt_item re_cmt cmt_depth<?php echo $__Context->comment->get('depth') ?>"<?php } ?> id="comment_<?php echo $__Context->comment->comment_srl ?>">
		<div class="cmt_item_con">
			<div class="cmt_profile">
				<span class="ico_recmt"><span class="blind">대댓글</span></span>
				<?php if(!$__Context->comment->getProfileImage()){ ?><img src="/modules/marketplace/skins/default/images/thumb_user.png" alt="" class="cmt_profile_img" style="width:50px;height:50px" /><?php } ?>
				<?php if($__Context->comment->getProfileImage()){ ?><img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="Profile" class="cmt_profile_img" style="width:50px;height:50px" /><?php } ?>
			</div>
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
					<?php if(!$__Context->comment->isAccessible()){ ?>
					<form action="./" method="get" class="xe_content" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
						<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
						<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
						<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					</form>
					<?php }else{ ?>
					<?php echo $__Context->comment->getContent(false, true, false) ?>
					<?php } ?>
					<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
						<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
						<ul class="files">
							<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
						</ul>
					</div><?php } ?>
				</div>
				<div class="cmt_func_area">
					<div class="cmt_func_more">
						<?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><i class="xe-ellipsis-h"></i><span class="cmt_txt"> <?php echo $__Context->lang->cmd_comment_do ?></span></a><?php } ?>
					</div>
					<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispMarketplaceModifyComment','comment_srl',$__Context->comment->comment_srl) ?>"><i class="xe-pen"></i><span class="cmt_txt"><?php echo $__Context->lang->cmd_modify ?></span></a><?php } ?>
					<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispMarketplaceDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>"><i class="xe-close"></i><span class="cmt_txt"><?php echo $__Context->lang->cmd_delete ?></span></a><?php } ?>
					<?php if($__Context->oMarketItem->allowComment()){ ?><a href="javascript:reComment(<?php echo $__Context->comment->comment_srl ?>)" class="reply"><i class="xe-comment-bubble"></i><span class="cmt_txt"><?php echo $__Context->lang->cmd_reply ?></span></a><?php } ?>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		<!--
		function reComment(comment_srl) {
			jQuery("#cmt_write_form").find("input[name=parent_srl]").val(comment_srl);
			jQuery("#cmt_write_form").hide().appendTo("#comment_" + comment_srl).show();
		}
		//-->
		</script>
	</li><?php } ?>
	<!-- RECOMMENT WRITE -->
	<div id="cmt_write_form" class="cmt_write_form" style="display:none" >
		<?php Context::addJsFile("modules/marketplace/ruleset/insertComment.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="write_comment" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertComment" />
			<input type="hidden" name="act" value="procMarketplaceInsertComment" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			<input type="hidden" name="comment_srl" value="" />
			<input type="hidden" name="parent_srl" value="" />
			<div class="cmt_editor">
				<div class="cmt_profile">
					<span class="ico_recmt"></span>
					<!-- [D] 댓글에 노출될 프로필 이미지 적용 및 노출 사이즈 적용 -->
					<img<?php if(!$__Context->profile->src){ ?> src="/modules/marketplace/skins/default/images/thumb_user.png"<?php };
if($__Context->profile->src){ ?> src="<?php echo $__Context->profile->src ?>"<?php } ?> alt="" class="cmt_profile_img" style="width:50px;height:50px">
				</div>
				<div class="cmt_textarea_wrap">
					<textarea rows="8" cols="42" class="cmt_textarea" name="content"></textarea>
					<!-- [D] 비로그인 일 경우 노출 -->
					<?php if(!$__Context->is_logged){ ?><div class="write_author">
						<div class="cmt_user_form essen_check">
							<label for="author" title="<?php echo $__Context->lang->writer ?>"><i class="xe-user"></i><span class="blind"><?php echo $__Context->lang->writer ?></span></label>
							<input name="nick_name" class="text-input" id="author" placeholder="<?php echo $__Context->lang->writer ?>" type="text">
						</div>
						<div class="cmt_user_form essen_check">
							<label for="password" title="<?php echo $__Context->lang->password ?>"><i class="xe-lock"></i><span class="blind"><?php echo $__Context->lang->password ?></span></label>
							<input name="password" class="text-input" id="password" placeholder="<?php echo $__Context->lang->password ?>" type="password">
						</div>
						<div class="cmt_user_form">
							<label for="url" title="홈페이지"><i class="xe-link-l"></i><span class="blind"><?php echo $__Context->lang->homepage ?></span></label>
							<input name="homepage" class="text-input" id="url" placeholder="<?php echo $__Context->lang->homepage ?>" type="text">
						</div>
					</div><?php } ?>
				</div>
				<div class="cmt_submit">
					<input type="image" alt="등록" src="/modules/marketplace/skins/default/images/btn_registry.gif" />
				</div>
			</div>
		</form>
	</div>
	<!-- /RECOMMENT WRITE -->
	</ul>
	<!-- /COMMENT LIST -->
	<!-- 댓글 쓰기 -->
	<?php if($__Context->grant->write_comment && $__Context->oMarketItem->isEnableComment()){ ?><div class="write_comment cmt_write_form" >
        <?php Context::addJsFile("modules/marketplace/ruleset/insertComment.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertComment" />
        <input type="hidden" name="act" value="procMarketplaceInsertComment" />
        <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
        <input type="hidden" name="document_srl" value="<?php echo $__Context->oMarketItem->document_srl ?>" />
        <input type="hidden" name="comment_srl" value="" />
        <input type="hidden" name="content" value="" />
			<div class="cmt_editor">
				<div class="cmt_profile">
					<span class="ico_recmt"></span>
					<!-- [D] 댓글에 노출될 프로필 이미지 적용 및 노출 사이즈 적용 -->
					<img<?php if(!$__Context->profile->src){ ?> src="/modules/marketplace/skins/default/images/thumb_user.png"<?php };
if($__Context->profile->src){ ?> src="<?php echo $__Context->profile->src ?>"<?php } ?> alt="" class="cmt_profile_img" style="width:50px;height:50px">
				</div>
				<div class="cmt_textarea_wrap">
					<?php echo $__Context->oMarketItem->getCommentEditor() ?>
				
					<!-- [D] 비로그인 일 경우 노출 -->
					<?php if(!$__Context->is_logged){ ?><div class="write_author" style="display:inline-block">
						<div class="cmt_user_form essen_check">
							<label for="author" title="<?php echo $__Context->lang->writer ?>"><i class="xe-user"></i><span class="blind"><?php echo $__Context->lang->writer ?></span></label>
							<input name="nick_name" class="text-input" id="author" placeholder="<?php echo $__Context->lang->writer ?>" type="text">
						</div>
						<div class="cmt_user_form essen_check">
							<label for="password" title="<?php echo $__Context->lang->password ?>"><i class="xe-lock"></i><span class="blind"><?php echo $__Context->lang->password ?></span></label>
							<input name="password" class="text-input" id="password" placeholder="<?php echo $__Context->lang->password ?>" type="password">
						</div>
						<div class="cmt_user_form">
							<label for="url" title="홈페이지"><i class="xe-link-l"></i><span class="blind"><?php echo $__Context->lang->homepage ?></span></label>
							<input name="homepage" class="text-input" id="url" placeholder="<?php echo $__Context->lang->homepage ?>" type="text">
						</div>
					</div><?php } ?>
					<!-- [D] 비밀글 쓰기 설정 시 노출 -->
					<div class="secret_box" style="display:inline-block">
						<input id="cmt_write_secret" name="is_secret" value="Y" type="checkbox">
						<label for="cmt_write_secret"><?php echo $__Context->lang->secret ?></label> 
					</div>
					<?php if($__Context->is_logged){ ?><div class="secret_box" style="display:inline-block">
						<input id="cmt_notify_message" name="notify_message" value="Y" type="checkbox">
						<label for="cmt_notify_message"><?php echo $__Context->lang->notify ?></label> 
					</div><?php } ?>
				</div>
				<div class="cmt_submit">
		            <input type="image" alt="등록" src="/modules/marketplace/skins/default/images/btn_registry.gif" />
				</div>
			</div>
		</form>
	</div><?php } ?>
	<!-- /댓글 쓰기 -->
</div>
<?php if($__Context->oMarketItem->getCommentcount()){ ?><div class="mp-comment" id="comment">
    <?php if($__Context->oMarketItem->comment_page_navigation){ ?><div class="pagination">
        <a href="<?php echo getUrl('cpage',1) ?>#comment" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no=$__Context->oMarketItem->comment_page_navigation->getNextPage()){ ?>
			<?php if($__Context->cpage==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->cpage!=$__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('cpage',$__Context->oMarketItem->comment_page_navigation->last_page) ?>#comment" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
    </div><?php } ?>
</div><?php } ?>
<!-- /COMMENT -->
