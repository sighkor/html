<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl68_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl68_argument'}->checkFilter('number');
${'site_srl68_argument'}->ensureDefaultValue('0');
${'site_srl68_argument'}->checkNotNull();
${'site_srl68_argument'}->createConditionValue();
if(!${'site_srl68_argument'}->isValid()) return ${'site_srl68_argument'}->getErrorMessage();
if(${'site_srl68_argument'} !== null) ${'site_srl68_argument'}->setColumnType('number');

${'layout_type69_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type69_argument'}->ensureDefaultValue('P');
${'layout_type69_argument'}->createConditionValue();
if(!${'layout_type69_argument'}->isValid()) return ${'layout_type69_argument'}->getErrorMessage();
if(${'layout_type69_argument'} !== null) ${'layout_type69_argument'}->setColumnType('char');

${'layout70_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout70_argument'}->ensureDefaultValue('.');
${'layout70_argument'}->createConditionValue();
if(!${'layout70_argument'}->isValid()) return ${'layout70_argument'}->getErrorMessage();
if(${'layout70_argument'} !== null) ${'layout70_argument'}->setColumnType('varchar');

${'sort_index71_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index71_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index71_argument'}->isValid()) return ${'sort_index71_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl68_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type69_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout70_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index71_argument'}, "desc")
));
$query->setLimit();
return $query; ?>