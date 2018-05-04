<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl22_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl22_argument'}->createConditionValue();
if(!${'site_srl22_argument'}->isValid()) return ${'site_srl22_argument'}->getErrorMessage();
} else
${'site_srl22_argument'} = NULL;if(${'site_srl22_argument'} !== null) ${'site_srl22_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module23_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module23_argument'}->createConditionValue();
if(!${'module23_argument'}->isValid()) return ${'module23_argument'}->getErrorMessage();
} else
${'module23_argument'} = NULL;if(${'module23_argument'} !== null) ${'module23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl22_argument,"equal")
,new ConditionWithArgument('`module`',$module23_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>