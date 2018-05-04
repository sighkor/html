<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSettingConditionByIdx");
$query->setAction("select");
$query->setPriority("");

${'idx1_argument'} = new ConditionArgument('idx', $args->idx, 'equal');
${'idx1_argument'}->checkFilter('number');
${'idx1_argument'}->checkNotNull();
${'idx1_argument'}->createConditionValue();
if(!${'idx1_argument'}->isValid()) return ${'idx1_argument'}->getErrorMessage();
if(${'idx1_argument'} !== null) ${'idx1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`marketplace_conditions`.*')
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`idx`',$idx1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>