<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMarketplaceList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_category_srl)) {
${'s_module_category_srl5_argument'} = new ConditionArgument('s_module_category_srl', $args->s_module_category_srl, 'equal');
${'s_module_category_srl5_argument'}->createConditionValue();
if(!${'s_module_category_srl5_argument'}->isValid()) return ${'s_module_category_srl5_argument'}->getErrorMessage();
} else
${'s_module_category_srl5_argument'} = NULL;if(${'s_module_category_srl5_argument'} !== null) ${'s_module_category_srl5_argument'}->setColumnType('number');
if(isset($args->s_mid)) {
${'s_mid6_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid6_argument'}->createConditionValue();
if(!${'s_mid6_argument'}->isValid()) return ${'s_mid6_argument'}->getErrorMessage();
} else
${'s_mid6_argument'} = NULL;if(${'s_mid6_argument'} !== null) ${'s_mid6_argument'}->setColumnType('varchar');
if(isset($args->s_browser_title)) {
${'s_browser_title7_argument'} = new ConditionArgument('s_browser_title', $args->s_browser_title, 'like');
${'s_browser_title7_argument'}->createConditionValue();
if(!${'s_browser_title7_argument'}->isValid()) return ${'s_browser_title7_argument'}->getErrorMessage();
} else
${'s_browser_title7_argument'} = NULL;if(${'s_browser_title7_argument'} !== null) ${'s_browser_title7_argument'}->setColumnType('varchar');
if(isset($args->s_comment)) {
${'s_comment8_argument'} = new ConditionArgument('s_comment', $args->s_comment, 'like');
${'s_comment8_argument'}->createConditionValue();
if(!${'s_comment8_argument'}->isValid()) return ${'s_comment8_argument'}->getErrorMessage();
} else
${'s_comment8_argument'} = NULL;
${'page10_argument'} = new Argument('page', $args->{'page'});
${'page10_argument'}->ensureDefaultValue('1');
if(!${'page10_argument'}->isValid()) return ${'page10_argument'}->getErrorMessage();

${'page_count11_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count11_argument'}->ensureDefaultValue('10');
if(!${'page_count11_argument'}->isValid()) return ${'page_count11_argument'}->getErrorMessage();

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('20');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'marketplace'","equal")
,new ConditionWithArgument('`module_category_srl`',$s_module_category_srl5_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid6_argument,"like", 'or')
,new ConditionWithArgument('`browser_title`',$s_browser_title7_argument,"like", 'or')
,new ConditionWithArgument('`comment`',$s_comment8_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count12_argument'}, ${'page10_argument'}, ${'page_count11_argument'}));
return $query; ?>