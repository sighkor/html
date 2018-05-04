<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/default/default.layout.css--><?php $__tmp=array('layouts/default/default.layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->WEB_FONT == 'YES'){ ?><!--#Meta:layouts/default/default.layout.webfont.css--><?php $__tmp=array('layouts/default/default.layout.webfont.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:common/js/respond.min.js--><?php $__tmp=array('common/js/respond.min.js','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/default/default.layout.js--><?php $__tmp=array('layouts/default/default.layout.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="container">
	<p class="skip"><a href="#content"><?php echo $__Context->lang->skip_to_content ?></a></p>
	<header class="header">
		<h1>
<a href="http://sighkor.dothome.co.kr"> <img src="https://4.bp.blogspot.com/-5OKi40p07R4/WuuASNIVXJI/AAAAAAAAAK0/NgPkKZ3u7EEkItw0HmwO36D6UqW9PJMbACLcBGAs/s320/LOGO.png"></a>
		</h1>
		<div class="side">
		        <div class="mp-searchbox" style="float:left">
            <?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="marketplace_search" class="marketplace_search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
                <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
                <input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
                <input type="text" placeholder="ex) 강의, 듀오, 랭크" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" /><input type="submit" value="검색" class="mp-hidetext" onclick="xGetElementById('marketplace_search').submit();return false;" />
            </form><?php } ?>
        </div>
			<!-- ACCOUNT -->
			<img widget="login_info" skin="default" />
			<!-- /ACCOUNT -->
		</div>
		<!-- GNB -->
		<nav class="gnb" id="gnb">
			<ul>
				<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</nav>
		<!-- /GNB -->
	</header>
	<!-- VISUAL | DEFAULT -->
	<?php if(!$__Context->layout_info->VISUAL_IMAGE_1 && !$__Context->layout_info->VISUAL_IMAGE_2 && !$__Context->layout_info->VISUAL_IMAGE_3 && $__Context->layout_info->VISUAL_USE=='YES'){ ?><div<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?> class="visual main"<?php };
if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?> class="visual sub"<?php } ?>>
		<div class="list">
			<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?><a href="<?php echo geturl('','module','admin','act','dispAdminConfigGeneral') ?>" class="item i1">
				<img src="/layouts/default/visual.main.1.jpg" alt="" />
				<p>Click, to change<br> the site title.</p>
			</a><?php } ?>
			<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?><a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>" class="item i2">
				<img src="/layouts/default/visual.main.2.jpg" alt="" />
				<p>Click, to change<br> the site navigation.</p>
			</a><?php } ?>
			<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?><a href="<?php echo geturl('','module','admin','act','dispLayoutAdminInstanceList','layout','default') ?>" class="item i3">
				<img src="/layouts/default/visual.main.3.jpg" alt="" />
				<p>Click, to change<br> the site visual image.</p>
			</a><?php } ?>
			<?php if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?><a href="<?php echo geturl('','module','admin','act','dispLayoutAdminInstanceList','layout','default') ?>" class="item i1">
				<img src="/layouts/default/visual.sub.jpg" alt="" />
				<p>Click, to change the site visual image.</p>
			</a><?php } ?>
		</div>
		<button type="button" class="prev" title="Prev"><i></i></button>
		<button type="button" class="next" title="Next"><i></i></button>
	</div><?php } ?>
	<!-- VISUAL | USER DEFINE -->
	<?php if(($__Context->layout_info->VISUAL_IMAGE_1 || $__Context->layout_info->VISUAL_IMAGE_2 || $__Context->layout_info->VISUAL_IMAGE_3) && $__Context->layout_info->VISUAL_USE=='YES'){ ?><div<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?> class="visual main"<?php };
if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?> class="visual sub"<?php } ?>>
		<div class="list">
			<?php if($__Context->layout_info->VISUAL_IMAGE_1){ ?><a href="<?php echo $__Context->layout_info->VISUAL_LINK_1 ?>" class="item i1">
				<img src="<?php echo $__Context->layout_info->VISUAL_IMAGE_1 ?>" alt="" />
				<p><?php echo $__Context->layout_info->VISUAL_TEXT_1 ?></p>
			</a><?php } ?>
			<?php if($__Context->layout_info->VISUAL_IMAGE_2){ ?><a href="<?php echo $__Context->layout_info->VISUAL_LINK_2 ?>" class="item i2">
				<img src="<?php echo $__Context->layout_info->VISUAL_IMAGE_2 ?>" alt="" />
				<p><?php echo $__Context->layout_info->VISUAL_TEXT_2 ?></p>
			</a><?php } ?>
			<?php if($__Context->layout_info->VISUAL_IMAGE_3){ ?><a href="<?php echo $__Context->layout_info->VISUAL_LINK_3 ?>" class="item i3">
				<img src="<?php echo $__Context->layout_info->VISUAL_IMAGE_3 ?>" alt="" />
				<p><?php echo $__Context->layout_info->VISUAL_TEXT_3 ?></p>
			</a><?php } ?>
		</div>
		<button type="button" class="prev" title="Prev"><i></i></button>
		<button type="button" class="next" title="Next"><i></i></button>
	</div><?php } ?>
	<!-- /VISUAL -->
	<div<?php if($__Context->layout_info->LAYOUT_TYPE=='MAIN_PAGE'){ ?> class="body main"<?php };
if($__Context->layout_info->LAYOUT_TYPE=='SUB_PAGE'){ ?> class="body sub"<?php } ?>>
		<!-- LNB -->
		<?php if($__Context->layout_info->LAYOUT_TYPE == 'SUB_PAGE'){ ?><nav class="lnb">
			<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h1><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></h1><?php }} ?>
			<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php }} ?>
		</nav><?php } ?>
		<!-- /LNB -->
		<!-- CONTENT -->
		<div class="content" id="content">
			<?php echo $__Context->content ?>
		</div>
		<!-- /CONTENT -->
	</div>
	
</div>
<footer class="footer">
    <?php if(!$__Context->layout_info->FOOTER){ ?><p><strong>Company Information</strong></p><?php } ?>
    <?php if(!$__Context->layout_info->FOOTER){ ?><p>상호명: 에브리대리</p><?php } ?>
	<?php if(!$__Context->layout_info->FOOTER){ ?><p>주소: 서울특별시 용산구 청파로20길 34, 22동 3층 6001-1호 (한강로2가, 선인상가)</p><?php } ?>
	<?php if(!$__Context->layout_info->FOOTER){ ?><p>사업자번호: 310-87-00427 | 통신판매신고: 2017-서울용산-01085 | 분쟁조정기관표시: 소비자보호원</p><?php } ?>
	<?php if(!$__Context->layout_info->FOOTER){ ?><p>이메일: sighkor@gmail.com</p><?php } ?>
	<?php if(!$__Context->layout_info->FOOTER){ ?><p>Copyright(c) www.everydaery.com All right reserved.</p><?php } ?>
	<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
</footer>
