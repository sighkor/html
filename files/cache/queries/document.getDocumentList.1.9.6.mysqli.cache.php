<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
} else
${'module_srl11_argument'} = NULL;if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl12_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl12_argument'}->checkFilter('number');
${'exclude_module_srl12_argument'}->createConditionValue();
if(!${'exclude_module_srl12_argument'}->isValid()) return ${'exclude_module_srl12_argument'}->getErrorMessage();
} else
${'exclude_module_srl12_argument'} = NULL;if(${'exclude_module_srl12_argument'} !== null) ${'exclude_module_srl12_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl13_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl13_argument'}->createConditionValue();
if(!${'category_srl13_argument'}->isValid()) return ${'category_srl13_argument'}->getErrorMessage();
} else
${'category_srl13_argument'} = NULL;if(${'category_srl13_argument'} !== null) ${'category_srl13_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice14_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice14_argument'}->createConditionValue();
if(!${'s_is_notice14_argument'}->isValid()) return ${'s_is_notice14_argument'}->getErrorMessage();
} else
${'s_is_notice14_argument'} = NULL;if(${'s_is_notice14_argument'} !== null) ${'s_is_notice14_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl15_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl15_argument'}->checkFilter('number');
${'member_srl15_argument'}->createConditionValue();
if(!${'member_srl15_argument'}->isValid()) return ${'member_srl15_argument'}->getErrorMessage();
} else
${'member_srl15_argument'} = NULL;if(${'member_srl15_argument'} !== null) ${'member_srl15_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls16_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls16_argument'}->checkFilter('number');
${'member_srls16_argument'}->createConditionValue();
if(!${'member_srls16_argument'}->isValid()) return ${'member_srls16_argument'}->getErrorMessage();
} else
${'member_srls16_argument'} = NULL;if(${'member_srls16_argument'} !== null) ${'member_srls16_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList17_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList17_argument'}->createConditionValue();
if(!${'statusList17_argument'}->isValid()) return ${'statusList17_argument'}->getErrorMessage();
} else
${'statusList17_argument'} = NULL;if(${'statusList17_argument'} !== null) ${'statusList17_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division18_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division18_argument'}->createConditionValue();
if(!${'division18_argument'}->isValid()) return ${'division18_argument'}->getErrorMessage();
} else
${'division18_argument'} = NULL;if(${'division18_argument'} !== null) ${'division18_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division19_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division19_argument'}->createConditionValue();
if(!${'last_division19_argument'}->isValid()) return ${'last_division19_argument'}->getErrorMessage();
} else
${'last_division19_argument'} = NULL;if(${'last_division19_argument'} !== null) ${'last_division19_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title20_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title20_argument'}->createConditionValue();
if(!${'s_title20_argument'}->isValid()) return ${'s_title20_argument'}->getErrorMessage();
} else
${'s_title20_argument'} = NULL;if(${'s_title20_argument'} !== null) ${'s_title20_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content21_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content21_argument'}->createConditionValue();
if(!${'s_content21_argument'}->isValid()) return ${'s_content21_argument'}->getErrorMessage();
} else
${'s_content21_argument'} = NULL;if(${'s_content21_argument'} !== null) ${'s_content21_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name22_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name22_argument'}->createConditionValue();
if(!${'s_user_name22_argument'}->isValid()) return ${'s_user_name22_argument'}->getErrorMessage();
} else
${'s_user_name22_argument'} = NULL;if(${'s_user_name22_argument'} !== null) ${'s_user_name22_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id23_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id23_argument'}->createConditionValue();
if(!${'s_user_id23_argument'}->isValid()) return ${'s_user_id23_argument'}->getErrorMessage();
} else
${'s_user_id23_argument'} = NULL;if(${'s_user_id23_argument'} !== null) ${'s_user_id23_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name24_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name24_argument'}->createConditionValue();
if(!${'s_nick_name24_argument'}->isValid()) return ${'s_nick_name24_argument'}->getErrorMessage();
} else
${'s_nick_name24_argument'} = NULL;if(${'s_nick_name24_argument'} !== null) ${'s_nick_name24_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address25_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address25_argument'}->createConditionValue();
if(!${'s_email_address25_argument'}->isValid()) return ${'s_email_address25_argument'}->getErrorMessage();
} else
${'s_email_address25_argument'} = NULL;if(${'s_email_address25_argument'} !== null) ${'s_email_address25_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage26_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage26_argument'}->createConditionValue();
if(!${'s_homepage26_argument'}->isValid()) return ${'s_homepage26_argument'}->getErrorMessage();
} else
${'s_homepage26_argument'} = NULL;if(${'s_homepage26_argument'} !== null) ${'s_homepage26_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags27_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags27_argument'}->createConditionValue();
if(!${'s_tags27_argument'}->isValid()) return ${'s_tags27_argument'}->getErrorMessage();
} else
${'s_tags27_argument'} = NULL;if(${'s_tags27_argument'} !== null) ${'s_tags27_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl28_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl28_argument'}->createConditionValue();
if(!${'s_member_srl28_argument'}->isValid()) return ${'s_member_srl28_argument'}->getErrorMessage();
} else
${'s_member_srl28_argument'} = NULL;if(${'s_member_srl28_argument'} !== null) ${'s_member_srl28_argument'}->setColumnType('number');
if(isset($args->s_member_srls)) {
${'s_member_srls29_argument'} = new ConditionArgument('s_member_srls', $args->s_member_srls, 'in');
${'s_member_srls29_argument'}->createConditionValue();
if(!${'s_member_srls29_argument'}->isValid()) return ${'s_member_srls29_argument'}->getErrorMessage();
} else
${'s_member_srls29_argument'} = NULL;if(${'s_member_srls29_argument'} !== null) ${'s_member_srls29_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count30_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count30_argument'}->createConditionValue();
if(!${'s_readed_count30_argument'}->isValid()) return ${'s_readed_count30_argument'}->getErrorMessage();
} else
${'s_readed_count30_argument'} = NULL;if(${'s_readed_count30_argument'} !== null) ${'s_readed_count30_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count31_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count31_argument'}->createConditionValue();
if(!${'s_voted_count31_argument'}->isValid()) return ${'s_voted_count31_argument'}->getErrorMessage();
} else
${'s_voted_count31_argument'} = NULL;if(${'s_voted_count31_argument'} !== null) ${'s_voted_count31_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count32_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count32_argument'}->createConditionValue();
if(!${'s_blamed_count32_argument'}->isValid()) return ${'s_blamed_count32_argument'}->getErrorMessage();
} else
${'s_blamed_count32_argument'} = NULL;if(${'s_blamed_count32_argument'} !== null) ${'s_blamed_count32_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count33_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count33_argument'}->createConditionValue();
if(!${'s_comment_count33_argument'}->isValid()) return ${'s_comment_count33_argument'}->getErrorMessage();
} else
${'s_comment_count33_argument'} = NULL;if(${'s_comment_count33_argument'} !== null) ${'s_comment_count33_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count34_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count34_argument'}->createConditionValue();
if(!${'s_trackback_count34_argument'}->isValid()) return ${'s_trackback_count34_argument'}->getErrorMessage();
} else
${'s_trackback_count34_argument'} = NULL;if(${'s_trackback_count34_argument'} !== null) ${'s_trackback_count34_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count35_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count35_argument'}->createConditionValue();
if(!${'s_uploaded_count35_argument'}->isValid()) return ${'s_uploaded_count35_argument'}->getErrorMessage();
} else
${'s_uploaded_count35_argument'} = NULL;if(${'s_uploaded_count35_argument'} !== null) ${'s_uploaded_count35_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate36_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate36_argument'}->createConditionValue();
if(!${'s_regdate36_argument'}->isValid()) return ${'s_regdate36_argument'}->getErrorMessage();
} else
${'s_regdate36_argument'} = NULL;if(${'s_regdate36_argument'} !== null) ${'s_regdate36_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update37_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update37_argument'}->createConditionValue();
if(!${'s_last_update37_argument'}->isValid()) return ${'s_last_update37_argument'}->getErrorMessage();
} else
${'s_last_update37_argument'} = NULL;if(${'s_last_update37_argument'} !== null) ${'s_last_update37_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress38_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress38_argument'}->createConditionValue();
if(!${'s_ipaddress38_argument'}->isValid()) return ${'s_ipaddress38_argument'}->getErrorMessage();
} else
${'s_ipaddress38_argument'} = NULL;if(${'s_ipaddress38_argument'} !== null) ${'s_ipaddress38_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date39_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date39_argument'}->createConditionValue();
if(!${'start_date39_argument'}->isValid()) return ${'start_date39_argument'}->getErrorMessage();
} else
${'start_date39_argument'} = NULL;if(${'start_date39_argument'} !== null) ${'start_date39_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date40_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date40_argument'}->createConditionValue();
if(!${'end_date40_argument'}->isValid()) return ${'end_date40_argument'}->getErrorMessage();
} else
${'end_date40_argument'} = NULL;if(${'end_date40_argument'} !== null) ${'end_date40_argument'}->setColumnType('date');

${'page43_argument'} = new Argument('page', $args->{'page'});
${'page43_argument'}->ensureDefaultValue('1');
if(!${'page43_argument'}->isValid()) return ${'page43_argument'}->getErrorMessage();

${'page_count44_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count44_argument'}->ensureDefaultValue('10');
if(!${'page_count44_argument'}->isValid()) return ${'page_count44_argument'}->getErrorMessage();

${'list_count45_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count45_argument'}->ensureDefaultValue('20');
if(!${'list_count45_argument'}->isValid()) return ${'list_count45_argument'}->getErrorMessage();

${'sort_index41_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index41_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index41_argument'}->isValid()) return ${'sort_index41_argument'}->getErrorMessage();

${'order_type42_argument'} = new SortArgument('order_type42', $args->order_type);
${'order_type42_argument'}->ensureDefaultValue('asc');
if(!${'order_type42_argument'}->isValid()) return ${'order_type42_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl12_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl13_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice14_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl15_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls16_argument,"in", 'and')
,new ConditionWithArgument('`status`',$statusList17_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division18_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division19_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title20_argument,"like")
,new ConditionWithArgument('`content`',$s_content21_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name22_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id23_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name24_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address25_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage26_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags27_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl28_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srls29_argument,"in", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count30_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count31_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count32_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count33_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count34_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count35_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate36_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update37_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress38_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date39_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date40_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index41_argument'}, $order_type42_argument)
));
$query->setLimit(new Limit(${'list_count45_argument'}, ${'page43_argument'}, ${'page_count44_argument'}));
return $query; ?>