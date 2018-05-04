<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin54_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin54_argument'}->createConditionValue();
if(!${'is_admin54_argument'}->isValid()) return ${'is_admin54_argument'}->getErrorMessage();
} else
${'is_admin54_argument'} = NULL;if(${'is_admin54_argument'} !== null) ${'is_admin54_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied55_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied55_argument'}->createConditionValue();
if(!${'is_denied55_argument'}->isValid()) return ${'is_denied55_argument'}->getErrorMessage();
} else
${'is_denied55_argument'} = NULL;if(${'is_denied55_argument'} !== null) ${'is_denied55_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls56_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls56_argument'}->createConditionValue();
if(!${'member_srls56_argument'}->isValid()) return ${'member_srls56_argument'}->getErrorMessage();
} else
${'member_srls56_argument'} = NULL;if(${'member_srls56_argument'} !== null) ${'member_srls56_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id57_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id57_argument'}->createConditionValue();
if(!${'s_user_id57_argument'}->isValid()) return ${'s_user_id57_argument'}->getErrorMessage();
} else
${'s_user_id57_argument'} = NULL;if(${'s_user_id57_argument'} !== null) ${'s_user_id57_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name58_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name58_argument'}->createConditionValue();
if(!${'s_user_name58_argument'}->isValid()) return ${'s_user_name58_argument'}->getErrorMessage();
} else
${'s_user_name58_argument'} = NULL;if(${'s_user_name58_argument'} !== null) ${'s_user_name58_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name59_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name59_argument'}->createConditionValue();
if(!${'s_nick_name59_argument'}->isValid()) return ${'s_nick_name59_argument'}->getErrorMessage();
} else
${'s_nick_name59_argument'} = NULL;if(${'s_nick_name59_argument'} !== null) ${'s_nick_name59_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name60_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name60_argument'}->createConditionValue();
if(!${'html_nick_name60_argument'}->isValid()) return ${'html_nick_name60_argument'}->getErrorMessage();
} else
${'html_nick_name60_argument'} = NULL;if(${'html_nick_name60_argument'} !== null) ${'html_nick_name60_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address61_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address61_argument'}->createConditionValue();
if(!${'s_email_address61_argument'}->isValid()) return ${'s_email_address61_argument'}->getErrorMessage();
} else
${'s_email_address61_argument'} = NULL;if(${'s_email_address61_argument'} !== null) ${'s_email_address61_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday62_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday62_argument'}->createConditionValue();
if(!${'s_birthday62_argument'}->isValid()) return ${'s_birthday62_argument'}->getErrorMessage();
} else
${'s_birthday62_argument'} = NULL;if(${'s_birthday62_argument'} !== null) ${'s_birthday62_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars63_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars63_argument'}->createConditionValue();
if(!${'s_extra_vars63_argument'}->isValid()) return ${'s_extra_vars63_argument'}->getErrorMessage();
} else
${'s_extra_vars63_argument'} = NULL;if(${'s_extra_vars63_argument'} !== null) ${'s_extra_vars63_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate64_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate64_argument'}->createConditionValue();
if(!${'s_regdate64_argument'}->isValid()) return ${'s_regdate64_argument'}->getErrorMessage();
} else
${'s_regdate64_argument'} = NULL;if(${'s_regdate64_argument'} !== null) ${'s_regdate64_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login65_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login65_argument'}->createConditionValue();
if(!${'s_last_login65_argument'}->isValid()) return ${'s_last_login65_argument'}->getErrorMessage();
} else
${'s_last_login65_argument'} = NULL;if(${'s_last_login65_argument'} !== null) ${'s_last_login65_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more66_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more66_argument'}->createConditionValue();
if(!${'s_regdate_more66_argument'}->isValid()) return ${'s_regdate_more66_argument'}->getErrorMessage();
} else
${'s_regdate_more66_argument'} = NULL;if(${'s_regdate_more66_argument'} !== null) ${'s_regdate_more66_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less67_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less67_argument'}->createConditionValue();
if(!${'s_regdate_less67_argument'}->isValid()) return ${'s_regdate_less67_argument'}->getErrorMessage();
} else
${'s_regdate_less67_argument'} = NULL;if(${'s_regdate_less67_argument'} !== null) ${'s_regdate_less67_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more68_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more68_argument'}->createConditionValue();
if(!${'s_last_login_more68_argument'}->isValid()) return ${'s_last_login_more68_argument'}->getErrorMessage();
} else
${'s_last_login_more68_argument'} = NULL;if(${'s_last_login_more68_argument'} !== null) ${'s_last_login_more68_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less69_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less69_argument'}->createConditionValue();
if(!${'s_last_login_less69_argument'}->isValid()) return ${'s_last_login_less69_argument'}->getErrorMessage();
} else
${'s_last_login_less69_argument'} = NULL;if(${'s_last_login_less69_argument'} !== null) ${'s_last_login_less69_argument'}->setColumnType('date');

${'page72_argument'} = new Argument('page', $args->{'page'});
${'page72_argument'}->ensureDefaultValue('1');
if(!${'page72_argument'}->isValid()) return ${'page72_argument'}->getErrorMessage();

${'page_count73_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count73_argument'}->ensureDefaultValue('10');
if(!${'page_count73_argument'}->isValid()) return ${'page_count73_argument'}->getErrorMessage();

${'list_count74_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count74_argument'}->ensureDefaultValue('20');
if(!${'list_count74_argument'}->isValid()) return ${'list_count74_argument'}->getErrorMessage();

${'sort_index70_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index70_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index70_argument'}->isValid()) return ${'sort_index70_argument'}->getErrorMessage();

${'sort_order71_argument'} = new SortArgument('sort_order71', $args->sort_order);
${'sort_order71_argument'}->ensureDefaultValue('asc');
if(!${'sort_order71_argument'}->isValid()) return ${'sort_order71_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin54_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied55_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls56_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id57_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name58_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name59_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name60_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address61_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday62_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars63_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate64_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login65_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more66_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less67_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more68_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less69_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index70_argument'}, $sort_order71_argument)
));
$query->setLimit(new Limit(${'list_count74_argument'}, ${'page72_argument'}, ${'page_count73_argument'}));
return $query; ?>