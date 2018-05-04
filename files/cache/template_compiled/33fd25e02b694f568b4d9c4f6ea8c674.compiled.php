<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/skins/default/marketplace.default.js--><?php $__tmp=array('modules/marketplace/skins/default/marketplace.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--xe icon load-->
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--carousel plugin load-->
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.theme.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.theme.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--relatedselects plugin load-->
<!--#Meta:modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/dependent-selects/jquery.dependent-selects.js','head','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
<?php 
    $__Context->_mypage_act = array("dispMarketplaceWrite", "dispMarketplaceNoticeWrite", "dispMarketplaceItemManage", "dispMarketplaceItemComments", "dispMarketplaceMemberModify","dispMarketplaceAdvertiseManage","dispMarketplaceAdvertiseLog","dispMarketplaceKeywordManage", "dispMarketplaceWishList");
 ?>
<?php if(!in_array($__Context->act, $__Context->_mypage_act)){ ?>
<div class="mp-box">
    <div class="mp-sidebar mp-clearfix">
		<?php if(count($__Context->cate_list)){ ?>
        <div class="menu_title mp-hidetext"><span>카테고리</span></div>
        <ul class="sidemenu">
            <li<?php if(!$__Context->category){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid) ?>"><?php echo $__Context->lang->total ?></a></li>
            <?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl || $__Context->category_list[$__Context->category]->parent_srl==$__Context->val->category_srl){ ?> class="active"<?php } ?>><a href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','', 'page', '', 'act', '') ?>"><?php echo $__Context->val->title ?><!--<?php if($__Context->val->document_count){ ?><em>[<?php echo $__Context->val->document_count ?>]</em><?php } ?>--></a>
                <?php if(count($__Context->val->children)){ ?><ul class="submenu">
                    <?php if($__Context->val->children&&count($__Context->val->children))foreach($__Context->val->children as $__Context->idx=>$__Context->item){ ?><li<?php if($__Context->category==$__Context->item->category_srl){ ?> class="on_"<?php } ?>><a href="<?php echo getUrl(category,$__Context->item->category_srl,'document_srl','', 'page', '', 'act', '') ?>"><?php echo $__Context->item->title ?><!--<?php if($__Context->val->document_count){ ?><em>[<?php echo $__Context->item->document_count ?>]</em><?php } ?>--></a></li><?php } ?>
                </ul><?php } ?>
            </li><?php } ?>
			
			<?php if($__Context->logged_info){ ?>
            <li class="divider"></li>
            <li><a href="<?php echo getUrl('', 'mid', $__Context->mid, 'act','dispMarketplaceWishList') ?>"><i class="xe-star"></i> 관심 상품 보기</a></li>
            <?php if($__Context->module_info->use_keyword_notify){ ?><li><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceKeywordManage') ?>"><i class="xe-bell-ring"></i> 키워드 알림 설정</a></li><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?>
			<li class="divider"></li>
            <li><a href="<?php echo getUrl('act','dispMarketplaceAdminMarketplaceInfo') ?>"><strong><i class="xe-tool"></i> 마켓플레이스 모듈 설정</a></strong></li>
			<?php } ?>
        </ul>
		<?php } ?>
        <div class="option_selector"<?php if(!count($__Context->cate_list)){ ?> style="margin-top:0"<?php } ?>>
        <form name="quick_search" action="<?php echo getUrl() ?>" method="get" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
            <input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
            <ul>
                <li><strong>서비스 구분</strong></li>
				<?php if($__Context->condition_list&&count($__Context->condition_list))foreach($__Context->condition_list as $__Context->condition){ ?>
                <li><label><input type="checkbox" name="item_condition[]" value="<?php echo $__Context->condition->eid ?>"<?php if(in_array($__Context->condition->eid,Context::get('item_condition'))){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->condition->name ?></label></li></label></li>
				<?php } ?>
            </ul>
            <ul class="mp-margin-top-15">
                <li><strong>가격대</strong></li>
                <li><input type="text" class="number price_from" id="price_from" name="price_from"<?php if($__Context->price_from){ ?> value="<?php echo number_format($__Context->price_from) ?>"<?php } ?> size="7" /> - <input type="text" class="number price_to" id="price_to" name="price_to"<?php if($__Context->price_to){ ?> value="<?php echo number_format($__Context->price_to) ?>"<?php } ?> size="8" /></li>
            </ul>
            <ul>
               
            <div class="btn_area">
            <a href="javascript:quickSearchSubmit();">조건별 검색</a>
            <a href="<?php echo getUrl('used_month','','price_from','','price_to','','priority_area','','item_condition','') ?>" /><i class="xe-repeat"></i> 선택해제
            </a>
            </div>
        </form>
        </div>
        <?php if(!count($__Context->cate_list) && $__Context->logged_info){ ?><ul class="sidemenu mp-margin-top-20" style="padding-top:10px">
            <li><a href="<?php echo getUrl('', 'mid', $__Context->mid, 'act','dispMarketplaceWishList') ?>"><i class="xe-star"></i> 관심 상품 보기</a></li>
            <?php if($__Context->module_info->use_keyword_notify){ ?><li><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceKeywordManage') ?>"><i class="xe-bell-ring"></i> 키워드 알림 설정</a></li><?php } ?>
			<?php if($__Context->grant->manager){ ?>
			<li class="divider"></li>
            <li><a href="<?php echo getUrl('act','dispMarketplaceAdminMarketplaceInfo') ?>"><strong><i class="xe-tool"></i> 마켓플레이스 모듈 설정</a></strong></li>
			<?php } ?>
        </ul><?php } ?>
		<?php if($__Context->module_info->mainbanner){ ?><div class="mp-margin-top-25">
			<!--일반 배너-->
			<?php if(!$__Context->module_info->mainbanner_link){ ?><img src="<?php echo $__Context->module_info->mainbanner ?>" style="width:215px" /><?php } ?>
			<!--링크 배너-->
			<?php if($__Context->module_info->mainbanner_link){ ?><a href="<?php echo $__Context->module_info->mainbanner_link ?>" target="<?php echo $__Context->module_info->mainbanner_target ?>"><img src="<?php echo $__Context->module_info->mainbanner ?>" style="width:215px" /></a><?php } ?>
		</div><?php } ?>
    </div>
	<?php echo $__Context->module_info->header_text ?>
<?php } ?>
<?php if(in_array($__Context->act, $__Context->_mypage_act)){ ?>
<div class="mp-box">
    <div class="mp-sidebar sidebar-insert-page">
        <h3><img src="/modules/marketplace/skins/default/images/subtitle_manage_myitem.png" /></h3>
        <ul class="sidemenu">
            <li<?php if($__Context->act=='dispMarketplaceWrite'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceWrite') ?>"><i class="xe-photo-camera-a"></i> 내 상품 등록</a></li>
            <li<?php if($__Context->act=='dispMarketplaceItemManage'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceItemManage') ?>"><i class="xe-archive"></i> 내 상품 관리</a></li>
            <li<?php if($__Context->act=='dispMarketplaceItemComments'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceItemComments') ?>"><i class="xe-message-bubble"></i> 내 상품에 달린 댓글</a></li>
            <li<?php if($__Context->act=='dispMarketplaceWishList'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceWishList') ?>"><i class="xe-star"></i> 내 관심 상품 보기</a></li>
        </ul>
		<?php if($__Context->module_info->use_advertise){ ?>
        <h3><img src="/modules/marketplace/skins/default/images/subtitle_manage_advertise.png" /></h3>
        <ul class="sidemenu">
            <li<?php if($__Context->act=='dispMarketplaceAdvertiseManage'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceAdvertiseManage') ?>">진행중인 프리미엄 광고</a></li>
            <li<?php if($__Context->act=='dispMarketplaceAdvertiseLog'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceAdvertiseLog') ?>">프리미엄 광고 과금 내역</a></li>
        </ul>
		<?php } ?>
		<?php if($__Context->module_info->use_keyword_notify){ ?>
        <h3><img src="/modules/marketplace/skins/default/images/subtitle_manage_keyword.png" /></h3>
        <ul class="sidemenu">
            <li<?php if($__Context->act=='dispMarketplaceKeywordManage'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispMarketplaceKeywordManage') ?>">장터 키워드 알림 설정</a></li>
        </ul>
		<?php } ?>
	
	</div>
<?php } ?>
