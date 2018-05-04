<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdvertiseBidList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'list_count3_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count3_argument'}->ensureDefaultValue('5');
if(!${'list_count3_argument'}->isValid()) return ${'list_count3_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('advertise.bid_price');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`advertise`.`bid_price`')
,new SelectExpression('`documents`.`document_srl`')
,new SelectExpression('`documents`.`category_srl`')
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
new ConditionWithArgument('`documents`.`module_srl`',$module_srl1_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count3_argument'}));
return $query; ?>