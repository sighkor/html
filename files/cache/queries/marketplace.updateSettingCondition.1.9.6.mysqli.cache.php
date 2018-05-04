<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSettingCondition");
$query->setAction("update");
$query->setPriority("");

${'name1_argument'} = new Argument('name', $args->{'name'});
${'name1_argument'}->checkNotNull();
if(!${'name1_argument'}->isValid()) return ${'name1_argument'}->getErrorMessage();
if(${'name1_argument'} !== null) ${'name1_argument'}->setColumnType('varchar');

${'short_name2_argument'} = new Argument('short_name', $args->{'short_name'});
${'short_name2_argument'}->checkNotNull();
if(!${'short_name2_argument'}->isValid()) return ${'short_name2_argument'}->getErrorMessage();
if(${'short_name2_argument'} !== null) ${'short_name2_argument'}->setColumnType('varchar');
if(isset($args->desc)) {
${'desc3_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc3_argument'}->isValid()) return ${'desc3_argument'}->getErrorMessage();
} else
${'desc3_argument'} = NULL;if(${'desc3_argument'} !== null) ${'desc3_argument'}->setColumnType('text');

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'eid5_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid5_argument'}->checkNotNull();
${'eid5_argument'}->createConditionValue();
if(!${'eid5_argument'}->isValid()) return ${'eid5_argument'}->getErrorMessage();
if(${'eid5_argument'} !== null) ${'eid5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`name`', ${'name1_argument'})
,new UpdateExpression('`short_name`', ${'short_name2_argument'})
,new UpdateExpression('`desc`', ${'desc3_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>