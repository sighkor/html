<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/m.skins/default/css/mmarketplace.css--><?php $__tmp=array('modules/marketplace/m.skins/default/css/mmarketplace.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a> &rsaquo; <?php echo $__Context->lang->category ?></h2>
		<a href="<?php echo getUrl('act','dispMarketplaceWrite','document_srl','') ?>" class="write"><?php echo $__Context->lang->cmd_write ?></a>
	</div>
	<ul class="gn">
		<?php  $__Context->start = true  ?>
		<?php  $__Context->depth = 0  ?>
		<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->category){ ?>
		<?php if(!$__Context->start && $__Context->category->depth == $__Context->depth){ ?>
		</li>
		<?php } ?>
		<?php if($__Context->category->depth > $__Context->depth){ ?> <!--more depth-->
		<ul>
		<?php }else{ ?>
		<?php while($__Context->category->depth < $__Context->depth){ ?>
		</li>
		</ul>
		<?php  $__Context->depth -= 1 ?>
		<?php } ?>
		<?php } ?>
			<li><a href="<?php echo getUrl('act','','category',$__Context->category->category_srl) ?>"><?php echo $__Context->category->title ?> <em>[<?php echo $__Context->category->document_count ?>]</em></a>
			<?php  $__Context->start = false  ?>
			<?php  $__Context->depth = $__Context->category->depth  ?>
		<?php } ?>
		<?php while($__Context->depth > 0){ ?>
		</li>
		</ul>
		<?php  $__Context->depth -= 1 ?>
		<?php } ?>
		</li>
	</ul>
	<div class="bna">
		<a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid,'mobile',$__Context->mobile) ?>" class="bn dark"><?php echo $__Context->lang->cmd_list ?></a>
	</div>
</div>
