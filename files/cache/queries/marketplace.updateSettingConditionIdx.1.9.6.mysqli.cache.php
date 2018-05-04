<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSettingConditionIdx");
$query->setAction("update");
$query->setPriority("");

${'new_idx2_argument'} = new Argument('new_idx', $args->{'new_idx'});
${'new_idx2_argument'}->checkNotNull();
if(!${'new_idx2_argument'}->isValid()) return ${'new_idx2_argument'}->getErrorMessage();
if(${'new_idx2_argument'} !== null) ${'new_idx2_argument'}->setColumnType('number');

${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->checkNotNull();
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

${'idx4_argument'} = new ConditionArgument('idx', $args->idx, 'equal');
${'idx4_argument'}->checkFilter('number');
${'idx4_argument'}->checkNotNull();
${'idx4_argument'}->createConditionValue();
if(!${'idx4_argument'}->isValid()) return ${'idx4_argument'}->getErrorMessage();
if(${'idx4_argument'} !== null) ${'idx4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`idx`', ${'new_idx2_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl3_argument,"equal")
,new ConditionWithArgument('`idx`',$idx4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>