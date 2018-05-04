<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoggedMembers");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->ensureDefaultValue('0');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'last_update2_argument'} = new ConditionArgument('last_update', $args->last_update, 'more');
${'last_update2_argument'}->checkNotNull();
${'last_update2_argument'}->createConditionValue();
if(!${'last_update2_argument'}->isValid()) return ${'last_update2_argument'}->getErrorMessage();
if(${'last_update2_argument'} !== null) ${'last_update2_argument'}->setColumnType('date');
if(isset($args->mid)) {
${'mid3_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid3_argument'}->createConditionValue();
if(!${'mid3_argument'}->isValid()) return ${'mid3_argument'}->getErrorMessage();
} else
${'mid3_argument'} = NULL;if(${'mid3_argument'} !== null) ${'mid3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_session`', '`session`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`session`.`cur_mid`','`modules`.`mid`',"equal", 'and')
,new ConditionWithArgument('`modules`.`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithoutArgument('`member_srl`','1',"more", 'and')
,new ConditionWithArgument('`last_update`',$last_update2_argument,"more", 'and')
,new ConditionWithArgument('`cur_mid`',$mid3_argument,"equal", 'and')))
));
$query->setGroups(array(
'`member_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>