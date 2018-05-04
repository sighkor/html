<?php if(!defined("__XE__"))exit;
if(!$__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header.html');
} ?>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_header_read.html');
} ?>
<div class="mp-content"<?php if($__Context->oDocument->isExists() && $__Context->module_info->flybanner == 'Y'){ ?> style="<?php if($__Context->module_info->flybanner_width){ ?>margin-left:<?php echo $__Context->module_info->flybanner_width ?>px;<?php }else{ ?>margin-left:110px;<?php } ?>
"<?php };
if($__Context->oDocument->isExists() && $__Context->module_info->flybanner != 'Y'){ ?> style="margin-left:0px"<?php } ?>>
	<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_read.html');
} ?>
	<?php if(!$__Context->oDocument->isExists()){ ?>
    <div style="overflow:hidden">
        <div class="mp-searchbox" style="float:left">
        </div>
    </div>
	<?php } ?>
	</br>
	<br>
<center>
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
</center>
<Br>
<center>
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
<a href="https://open.kakao.com/o/sxfg60L" target="_blank"> <img src="https://3.bp.blogspot.com/-IISaU5AQn8c/WutRS_1sZQI/AAAAAAAAAIk/VtKWeyRKqFssDClACSCacKW_32KpITIKQCLcBGAs/s1600/K160120.jpg" width="160" height="120"></a>
&nbsp;
</center>
<br>
	<?php if($__Context->module_info->use_advertise && !$__Context->oDocument->isExists() && !Context::get('search_keyword') && !$__Context->category){ ?>
    <div class="mp-premiumarea mp-margin-top-30">
        <h3 class="mp-title mp-title-premium-list mp-hidetext"><span>프리미엄 등록 상품</span></h3>
        <div class="mp-margin-top-15">
            <div id="premium-ad" class="mp-carousel">
                <?php if($__Context->advertise_list&&count($__Context->advertise_list))foreach($__Context->advertise_list as $__Context->item){ ?><div class="item">
					<div class="thumb_area">
						<span class="mp-condition-badge  mp-<?php echo $__Context->item->getItemCondition() ?>"><?php echo $__Context->condition_list[$__Context->item->getItemCondition()]->short_name ?></span>
						<img src="<?php echo $__Context->item->getThumbnail(110,110) ?>" />
						<span class="mask"></span>
						<div class="hover_info_mask">
							<div class="hover_info_wrap">
								<span class="hover_info">
									<a href="<?php echo getUrl('','act','procMarketplaceActionRecord','document_srl',$__Context->item->document_srl) ?>" class="btn_show"><i class=" xe-magnifier"></i><span class="blind">상품보기</span></a>
								</span>  
							</div>
						</div>
					</div>
                    <p class="item_name"><a href="<?php echo getUrl('','act','procMarketplaceActionRecord','document_srl',$__Context->item->document_srl) ?>"><?php echo $__Context->item->getTitle(34,'..') ?></a></p>
                    <p class="mp-price">￦ <?php echo $__Context->item->getPrice(true) ?></p>
                </div><?php } ?>
                <?php for($__Context->i=0;$__Context->i<5-count($__Context->advertise_list);$__Context->i++){ ?><div class="item">
					<div class="blank_area">
						<img src="/modules/marketplace/skins/default/images/advertise_here.png" />
					</div>
                </div><?php } ?>
            </div>
        </div>
    </div>
	<!-- 프리미엄 상품 로딩 -->
    <script>
    jQuery(document).ready(function() {
      var owl = jQuery("#premium-ad");
      owl.owlCarousel({
        autoPlay: false, //Set AutoPlay to 3 seconds
        stopOnHover : true,
        scrollPerPage : true,
        items : 5,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet : false,
        itemsMobile : false,
		scrollPerPage : true,
		navigation: true,
		pagination: true,
		navigationText : ["<",">"]
      });
	  /*
	  jQuery('.thumb_area').height(jQuery('.thumb_area').children('img').height());
	  */
      jQuery('.select_redirect').bind('change', function () {
          var url = jQuery(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
    </script>
	<?php } ?>
	<?php if($__Context->category){ ?><div style="border-top:1px solid #bbbbbb; border-bottom:1px solid #bbbbbb; padding: 13px 10px 12px; font-size: 13px;" class="mp-margin-top-30">
	<span style="color:#fff;background:#313131; padding:3px 6px;margin-right: 8px; border-radius:2px; font-size: 14px;">선택된 카테고리</span> <?php echo $__Context->category_list[$__Context->category_list[$__Context->category]->parent_srl]->title ?> <?php if($__Context->category_list[$__Context->category]->parent_srl){ ?><i class=" xe-angle-right"></i><?php } ?> <?php echo $__Context->category_list[$__Context->category]->title ?>
	</div><?php } ?>
	
	<!-- 게시판 시작 -->
    <div class="board mp-margin-top-35">
        <div class="list_header">
            <div class="btn_area">
                <div class="btn_area_l btn_area_count">
                    등록된 상품 총 <strong><?php echo $__Context->total_count ?></strong>개
                </div>
				<!-- 게시판 상단 컨트롤러 -->
                <div class="btn_area_r">
                    <div class="select_area">
                        <form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                            <div class="search_select">
                                <select class="select_redirect">
                                <option value="<?php echo getUrl('list_count','20') ?>"<?php if(Context::get('list_count')==20){ ?> selected="selected"<?php } ?>>20개씩 보기</option>
                                <option value="<?php echo getUrl('list_count','35') ?>"<?php if(Context::get('list_count')==35){ ?> selected="selected"<?php } ?>>35개씩 보기</option>
                                <option value="<?php echo getUrl('list_count','50') ?>"<?php if(Context::get('list_count')==50){ ?> selected="selected"<?php } ?>>50개씩 보기</option>
                                <option value="<?php echo getUrl('list_count','100') ?>"<?php if(Context::get('list_count')==100){ ?> selected="selected"<?php } ?>>100개씩 보기</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="select_area">
						<div class="search_select">
							<select class="select_redirect">
							<option value="<?php echo getUrl('sort_index','list_order','order_type','asc') ?>"<?php if(Context::get('sort_index')=='list_order' && Context::get('order_type')=='asc'){ ?> selected="selected"<?php } ?>>신규등록순</option>
							<option value="<?php echo getUrl('sort_index','price','order_type','asc') ?>"<?php if(Context::get('sort_index')=='price' && Context::get('order_type')=='asc'){ ?> selected="selected"<?php } ?>>낮은가격순</option>
							<option value="<?php echo getUrl('sort_index','price','order_type','desc') ?>"<?php if(Context::get('sort_index')=='price' && Context::get('order_type')=='desc'){ ?> selected="selected"<?php } ?>>높은가격순</option>
							</select>
						</div>
                    </div>
					<!-- 판매중인 상품/ 판매완료 상품 보기 버튼 -->
                    <?php if(!$__Context->item_status){ ?><a class="btn_type btn_lst" style="padding: 0 8px;" href="<?php echo getUrl('item_status','selling') ?>">
                        <i class=" xe-check-square"></i>
                        <span class="btn_txt">판매중인 상품만 보기</span>
                    </a><?php } ?>
                    <?php if($__Context->item_status=='selling'){ ?><a class="btn_type btn_lst" style="padding: 0 8px;" href="<?php echo getUrl('item_status','') ?>">
                        <i class=" xe-check-square"></i>
                        <span class="btn_txt">판매완료된 상품도 보기</span>
                    </a><?php } ?>
                </div>
            </div>
        </div>
		<!-- 게시판 목록 시작 -->
        <div class="board_list basic_type">
            <table class="tbl_board_lst">
            <caption>마켓 상품 목록</caption>
            <colgroup>
            <col style="width: 128px;">
            <col>
            <col style="width: 98px;">
            <col style="width: 79px;">
            <?php if($__Context->grant->manager){ ?><col style="width:44px"><?php } ?>
            </colgroup>
            <thead>
            <!-- 목록 헤더 -->
            <tr>
            <th scope="col"><div class="ta_c">사진</div></th>
            <th scope="col"><div class="ta_c"><?php echo $__Context->lang->title ?></div></th>
            <th scope="col"><div class="ta_c"><a href="#">가격</a></div></th>
			<?php if($__Context->grant->manager){ ?><th scope="col"><div class="ta_c"><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /></div></th><?php } ?>
            </tr>
            <!-- 목록 헤더 끝 -->
            </thead>
			<!-- 등록된 글 없음 출력 (조건. 글 없을 때)-->
            <?php if(!$__Context->marketitem_list && !$__Context->notice_list){ ?><tbody>
                <tr>
                    <td<?php if(!$__Context->grant->manager){ ?> colspan="4"<?php };
if($__Context->grant->manager){ ?> colspan="5"<?php } ?>>
                        <p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
                    </td>
                </tr>
            </tbody><?php } ?>
			<!-- 목록 출력 (조건. 글 있을 때) -->
            <?php if($__Context->marketitem_list || $__Context->notice_list){ ?><tbody>
                <!-- 공지사항 리스트 -->
                <?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="bd_notice">
                <td colspan="3"><div class="ta_l bd_tit notice_check"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><span class="badge">공지사항</span> <?php echo $__Context->document->getTitle() ?></a></div></td>
				<?php if($__Context->grant->manager){ ?><td class="ta_c"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
                </tr><?php } ?>
                <!-- 리스트  -->           
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
                    <div class="ta_l bd_tit"><?php if($__Context->document->isSoldout()){ ?><span class="badge_soldout">판매완료</span><?php };
if($__Context->document->isReinserted() && $__Context->document->isSelling()){ ?><span class="badge_reupload">재등록</span><?php } ?><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"<?php if($__Context->document->isSoldout()){ ?> class="soldout"<?php } ?>><?php echo $__Context->document->getTitle() ?></a> <?php if($__Context->document->getCommentCount()){ ?><em class="cmt_count">(<?php echo $__Context->document->getCommentCount() ?>)</em><?php } ?> </div>
					<!-- 작성일 -->
                    <div class="ta_l bd_date"><i class="xe-time-o"></i> <?php echo $__Context->document->getRegdate('Y년 m월 d일') ?> </div>
                </td>
                <td>
					<!-- 가격 -->
                    <div class="ta_c mp-price"><span class="won">￦</span><?php echo number_format($__Context->document->get('price')) ?></div>
                    <?php if($__Context->document->get('original_price')){ ?><div class="ta_c mp-price price-original">(<?php echo number_format($__Context->document->get('original_price')) ?>)</div><?php } ?>
                </td>
				<?php if($__Context->grant->manager){ ?><td class="ta_c"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
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
	<!-- 게시판 끝 -->
	
	<div class="list_footer">
		<div class="btnArea">
			<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('mid',$__Context->mid,'act','dispMarketplaceNoticeWrite') ?>" class="btn"><i class="xe-pen"></i> 공지사항 작성</a><?php } ?>
			<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" class="btn" onclick="popopen(this.href,'manageDocument'); return false;"><?php echo $__Context->lang->cmd_manage_document ?></a><?php } ?>
		</div>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/marketplace/skins/default','_footer.html') ?>
