<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSettingConditionIdxOrder");
$query->setAction("update");
$query->setPriority("");

${'idx3_argument'} = new Argument('idx', NULL);
${'idx3_argument'}->setColumnOperation('-');
${'idx3_argument'}->ensureDefaultValue(1);
if(!${'idx3_argument'}->isValid()) return ${'idx3_argument'}->getErrorMessage();
if(${'idx3_argument'} !== null) ${'idx3_argument'}->setColumnType('number');

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'idx5_argument'} = new ConditionArgument('idx', $args->idx, 'excess');
${'idx5_argument'}->checkFilter('number');
${'idx5_argument'}->checkNotNull();
${'idx5_argument'}->createConditionValue();
if(!${'idx5_argument'}->isValid()) return ${'idx5_argument'}->getErrorMessage();
if(${'idx5_argument'} !== null) ${'idx5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`idx`', ${'idx3_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"equal")
,new ConditionWithArgument('`idx`',$idx5_argument,"excess", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>