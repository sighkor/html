<?php
class ding_loginWidget extends WidgetHandler
{
    function proc($args)
    {
        $oModuleModel = getModel('module');
        $config = $oModuleModel->getModuleConfig('point');

        $PointModel = getModel("point");

        //사용할 아이콘의 주소.
        $level_icon = "./modules/point/icons/". $config->level_icon;
        Context::set("level_icon", $level_icon);

        //Session 값을 이용하면 사용자가 지금 사용하고 있는 모듈의 이름을 가져올 수 있다,
        // Mid
        $use_mid = $args->use_mid;
        if($use_mid == 'mid') { $mid = Context::get('mid'); }   //내가 있는 페이지의 모듈에 접근.
        else { $mid = null; }   //전체.

        // Title
        $title_name = $args->title_name;
        if(!$title_name) { $title_name = "제목을 입력해주세요."; }

        // Title 높이 설정
        if($args->title_height) { $title_height = "height:".$args->title_height."px"; }
        else {$title_height = "height:26px"; }

        // 스크롤 높이 설정
        if($args->set_height) { $set_height = "height:".$args->set_height."px"; }
        else {$set_height = "height:90px"; }

        $obj = new stdClass();
        $obj->mid = $mid;

        $oSessionModel = &getModel('session');
        $output = $oSessionModel->getLoggedMembers($obj);

        $login_members = $output->data;
        Context::set("output",$output->data);  //여기 그 사람의 정보가 저장되있다.

        $admin_select = "";
        if($args->admin_select == "view")
        {$admin_select = "Y";}
        else if($args->admin_select == "none")
        {$admin_select = 'N';}

        $self_view = $args->self_view;

        $loop_count = count($login_members);
        $nickName_array = array();

        $logged_info = Context::get('logged_info');

        for($i = 0; $i < $loop_count; $i++)
        {
            //어드민을 출력안하는 상태 일때 맴버가 어드민이면 추가 시키지 않는다.
            if($admin_select == "N" && $login_members[$i]->is_admin == 'Y') {}

            else if($self_view == "false" && $login_members[$i]->member_srl == $logged_info->member_srl) {}

            else
            {
                $nickName_array[$i]["nick_name"] = $login_members[$i]->nick_name;
                $nickName_array[$i]["member_srl"] = "member_".$login_members[$i]->member_srl;
                $member_point = $PointModel->getPoint($login_members[$i]->member_srl);
                $nickName_array[$i]['level'] = $PointModel->getLevel($member_point, $config->level_step);
            }
        }

        $login = new stdClass();
        $login->nickName_array = $nickName_array;   // 닉네임.
        $login->title_name = $title_name;           // 제목.
        $login->title_view = $args->title_view;     // 제목을 보여줄지 물어본다.
        $login->set_height = $set_height;           // 높이 설정. (스크롤)
        $login->title_height = $title_height;       // 높이 설정  (타이틀)
        $login->use_level_icon = $args->use_level_icon;     //아이콘 사용 여부
        $login->guest_view = $args->guest_view; // 비 로그인 일 때 출력 여부.
        $login->self_view = $self_view; // 비 로그인 일 때 출력 여부.

        Context::set("login", $login);

        // 템플릿의 스킨 경로를 지정 (skin, colorset에 따른 값을 설정)
        $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
        Context::set('colorset', $args->colorset);

        // 템플릿 파일을 지정
        $tpl_file = 'ding_loginWidget';

        // 템플릿 컴파일
        $oTemplate = &TemplateHandler::getInstance();
        $output = $oTemplate->compile($tpl_path, $tpl_file);
        return $output;
    }
}
?>