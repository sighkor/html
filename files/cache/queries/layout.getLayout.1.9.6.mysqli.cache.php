<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayout");
$query->setAction("select");
$query->setPriority("");

${'layout_srl15_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl15_argument'}->checkFilter('number');
${'layout_srl15_argument'}->checkNotNull();
${'layout_srl15_argument'}->createConditionValue();
if(!${'layout_srl15_argument'}->isValid()) return ${'layout_srl15_argument'}->getErrorMessage();
if(${'layout_srl15_argument'} !== null) ${'layout_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>