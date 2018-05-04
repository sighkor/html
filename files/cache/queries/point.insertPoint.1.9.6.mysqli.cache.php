<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'point2_argument'} = new Argument('point', $args->{'point'});
${'point2_argument'}->checkFilter('number');
${'point2_argument'}->ensureDefaultValue('0');
${'point2_argument'}->checkNotNull();
if(!${'point2_argument'}->isValid()) return ${'point2_argument'}->getErrorMessage();
if(${'point2_argument'} !== null) ${'point2_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl1_argument'})
,new InsertExpression('`point`', ${'point2_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>