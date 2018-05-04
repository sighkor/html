<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSettingCondition");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'eid2_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid2_argument'}->checkNotNull();
${'eid2_argument'}->createConditionValue();
if(!${'eid2_argument'}->isValid()) return ${'eid2_argument'}->getErrorMessage();
if(${'eid2_argument'} !== null) ${'eid2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`marketplace_conditions`.*')
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`eid`',$eid2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>