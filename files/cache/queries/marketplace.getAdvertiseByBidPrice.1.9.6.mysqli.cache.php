<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdvertiseByBidPrice");
$query->setAction("select");
$query->setPriority("");

${'bid_price1_argument'} = new ConditionArgument('bid_price', $args->bid_price, 'equal');
${'bid_price1_argument'}->checkFilter('number');
${'bid_price1_argument'}->checkNotNull();
${'bid_price1_argument'}->createConditionValue();
if(!${'bid_price1_argument'}->isValid()) return ${'bid_price1_argument'}->getErrorMessage();
if(${'bid_price1_argument'} !== null) ${'bid_price1_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`advertise`.*')
,new SelectExpression('`documents`.`member_srl`')
));
$query->setTables(array(
new Table('`xe_marketplace_advertise`', '`advertise`')
,new JoinTable('`xe_documents`', '`documents`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`advertise`.`document_srl`','`documents`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`advertise`.`bid_price`',$bid_price1_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>