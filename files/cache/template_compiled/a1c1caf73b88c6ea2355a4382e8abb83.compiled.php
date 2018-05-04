<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/skins/default/marketplace.default.js--><?php $__tmp=array('modules/marketplace/skins/default/marketplace.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--xe icon load-->
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--carousel plugin load-->
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.theme.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.theme.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.js--><?php $__tmp=array('modules/marketplace/skins/default/plugin/owl-carousel/owl.carousel.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->order_type == "desc"){ ?>
    <?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
    <?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php 
    $__Context->_mypage_act = array("dispMarketplaceWrite", "dispMarketplaceItemManage", "dispMarketplaceMemberModify","dispMarketplaceAdvertiseManage","dispMarketplaceAdvertiseLog");
 ?>
<div class="mp-box">
