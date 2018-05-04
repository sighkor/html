<?php if(!defined("__XE__"))exit;?><div class="hx hd h2">
	<h2><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a> <em>[<?php echo number_format($__Context->total_count) ?>]</em></h2>
	<?php if($__Context->module_info->hide_category == "N"){ ?><a href="<?php echo getUrl('page','','act','dispMarketplaceCategory','') ?>" class="ca"><?php echo $__Context->lang->category ?></a><?php } ?>
	<a href="<?php echo getUrl('act','dispMarketplaceWrite','document_srl','') ?>" class="write">내 물품 판매</a>
</div>
<ul class="lt">
	<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
	<li>
		<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
		<span class="title"><span class="notice"><?php echo $__Context->lang->notice ?></span> <strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->document->getCommentCount()){ ?><em>[<?php echo $__Context->document->getCommentCount() ?>]</em><?php } ?></span>
			<span class="auth"><strong><?php echo $__Context->document->getNickName() ?></strong> <span class="time"><?php echo $__Context->document->getRegDate("Y.m.d") ?></span></span>
		</a>
	</li>
	<?php } ?>
	<?php if($__Context->marketitem_list&&count($__Context->marketitem_list))foreach($__Context->marketitem_list as $__Context->no => $__Context->marketitem){ ?>
	<li>
		<a href="<?php echo getUrl('document_srl', $__Context->marketitem->document_srl) ?>">
			<div class="thumb">
				<span class="badge badge-<?php echo $__Context->marketitem->getItemCondition() ?>"  style="border-radius:3px 0 3px 0"><?php echo $__Context->condition_list[$__Context->marketitem->getItemCondition()]->short_name ?></span>
				<img src="<?php echo $__Context->marketitem->getThumbnail(80, 65) ?>" style="border-radius:3px"/>
			</div>
			<div class="meta">
				<span class="category">
					<?php if($__Context->module_info->hide_category == "N" && $__Context->marketitem->get('category_srl')){;
echo $__Context->category_list[$__Context->marketitem->get('category_srl')]->title ?> &rsaquo;<?php } ?> 				
				</span>
				<span class="title"><strong><?php echo $__Context->marketitem->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->marketitem->getCommentCount()){ ?><em>[<?php echo $__Context->marketitem->getCommentCount() ?>]</em><?php } ?></span>
				<span class="auth">
				<span class="time"><?php echo $__Context->marketitem->getRegDate("Y.m.d") ?></span><strong><?php echo $__Context->marketitem->getNickName() ?></strong></span>
				<span class="price"><?php echo $__Context->marketitem->getPrice(true) ?>원</span>
			</div>
			<div style="clear:both"></div>
		</a>
	</li>
	<?php } ?>
</ul>
<div class="pn">
	<?php if($__Context->page != 1){ ?>
	<a href="<?php echo getUrl('page',$__Context->page-1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="prev"><?php echo $__Context->lang->cmd_prev ?></a> 
	<?php } ?>
	<strong><?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></strong>
	<?php if($__Context->page != $__Context->page_navigation->last_page){ ?>
	<a href="<?php echo getUrl('page',$__Context->page+1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="next"><?php echo $__Context->lang->cmd_next ?></a>
	<?php } ?>
</div>
<div class="sh">
	<form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" />
		<button type="submit" class="shbn" title="<?php echo $__Context->lang->cmd_search ?>"></button>
	</form>
</div>
