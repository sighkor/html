<?php if(!defined("__XE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles = array();$_descriptions = array();$_titles[154]["ko"] = 'LOL'; $_descriptions[154]["ko"] = '리그오브레전드'; $_titles[156]["ko"] = 'OVERWATCH'; $_descriptions[156]["ko"] = ''; $_titles[157]["ko"] = 'BATTLEGROUND'; $_descriptions[157]["ko"] = ''; $_titles[155]["ko"] = 'WOW'; $_descriptions[155]["ko"] = '월드오브워크래프트'; $_titles[160]["ko"] = 'ETC'; $_descriptions[160]["ko"] = '기타'; $menu = new stdClass;$menu->list = array(154=>array("mid" => "marketplace_dgpN38", "module_srl" => "135","node_srl"=>"154","category_srl"=>"154","parent_srl"=>"0","text"=>$_titles[154][$lang_type],"selected"=>(in_array(Context::get("category"),array("154"))?1:0),"expand"=>'Y',"color"=>'#ff0000',"description"=>$_descriptions[154][$lang_type],"list"=>array(),"document_count"=>"13","grant"=>true?true:false),156=>array("mid" => "marketplace_dgpN38", "module_srl" => "135","node_srl"=>"156","category_srl"=>"156","parent_srl"=>"0","text"=>$_titles[156][$lang_type],"selected"=>(in_array(Context::get("category"),array("156"))?1:0),"expand"=>'Y',"color"=>'#ff0000',"description"=>$_descriptions[156][$lang_type],"list"=>array(),"document_count"=>"5","grant"=>true?true:false),157=>array("mid" => "marketplace_dgpN38", "module_srl" => "135","node_srl"=>"157","category_srl"=>"157","parent_srl"=>"0","text"=>$_titles[157][$lang_type],"selected"=>(in_array(Context::get("category"),array("157"))?1:0),"expand"=>'Y',"color"=>'#ff0000',"description"=>$_descriptions[157][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),155=>array("mid" => "marketplace_dgpN38", "module_srl" => "135","node_srl"=>"155","category_srl"=>"155","parent_srl"=>"0","text"=>$_titles[155][$lang_type],"selected"=>(in_array(Context::get("category"),array("155"))?1:0),"expand"=>'Y',"color"=>'#ff0000',"description"=>$_descriptions[155][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),160=>array("mid" => "marketplace_dgpN38", "module_srl" => "135","node_srl"=>"160","category_srl"=>"160","parent_srl"=>"0","text"=>$_titles[160][$lang_type],"selected"=>(in_array(Context::get("category"),array("160"))?1:0),"expand"=>'Y',"color"=>'#ff0000',"description"=>$_descriptions[160][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),); 