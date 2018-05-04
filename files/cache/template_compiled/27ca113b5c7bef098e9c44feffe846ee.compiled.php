<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/ding_loginWidget/skins/default/css/ding_loginWidget.css--><?php $__tmp=array('widgets/ding_loginWidget/skins/default/css/ding_loginWidget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  if($__Context->login->title_view == "view"){ ?>
<div class="ding-login-Title" style="<?php echo $__Context->login->title_height ?>"><?php echo $__Context->login->title_name ?></div>
<?php } ?>
<ul class="ding-login-listWidget ding-reset-ul" style="<?php echo $__Context->login->set_height ?>">
    <?php  if($__Context->is_logged  && count($__Context->login->nickName_array) > 0 || $__Context->login->guest_view == "true" && count($__Context->login->nickName_array) > 0){ ?>
    <?php if($__Context->login->nickName_array&&count($__Context->login->nickName_array))foreach( $__Context->login->nickName_array as $__Context->nick){ ?>
    <a class="ding-login-link <?php echo $__Context->nick['member_srl'] ?>" href="#popup_menu_area" onclick="return false">
        <li class="ding-login-content">
            <div class="ding-login-image"></div>
            <?php echo $__Context->nick["nick_name"] ?>
            <?php if($__Context->login->use_level_icon == "use"){ ?>
                <img class="level_image" width="13px" height="13px" src="<?php echo $__Context->level_icon ?>/<?php echo $__Context->nick['level'] ?>.gif">
            <?php } ?>
        </li>
    </a>
    <?php } ?>
    <?php }else if($__Context->is_logged&& count($__Context->login->nickName_array) == 0){ ?>
        <div style="padding: 5px">접속 중인 유저를 찾을 수 없습니다.</div>
    <?php }else{ ?>
        <div style="padding: 5px">로그인하면 볼 수 있습니다.</div>
    <?php } ?>
</ul>
