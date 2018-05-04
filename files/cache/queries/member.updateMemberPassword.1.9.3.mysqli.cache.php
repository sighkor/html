<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMemberPassword");
$query->setAction("update");
$query->setPriority("");

${'password2_argument'} = new Argument('password', $args->{'password'});
${'password2_argument'}->checkNotNull();
if(!${'password2_argument'}->isValid()) return ${'password2_argument'}->getErrorMessage();
if(${'password2_argument'} !== null) ${'password2_argument'}->setColumnType('varchar');
if(isset($args->denied)) {
${'denied3_argument'} = new Argument('denied', $args->{'denied'});
if(!${'denied3_argument'}->isValid()) return ${'denied3_argument'}->getErrorMessage();
} else
${'denied3_argument'} = NULL;if(${'denied3_argument'} !== null) ${'denied3_argument'}->setColumnType('char');

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`password`', ${'password2_argument'})
,new UpdateExpression('`denied`', ${'denied3_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>