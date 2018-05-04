<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdvertiseList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = NULL;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = NULL;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

${'page11_argument'} = new Argument('page', $args->{'page'});
${'page11_argument'}->ensureDefaultValue('1');
if(!${'page11_argument'}->isValid()) return ${'page11_argument'}->getErrorMessage();

${'page_count12_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count12_argument'}->ensureDefaultValue('10');
if(!${'page_count12_argument'}->isValid()) return ${'page_count12_argument'}->getErrorMessage();

${'list_count13_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count13_argument'}->ensureDefaultValue('20');
if(!${'list_count13_argument'}->isValid()) return ${'list_count13_argument'}->getErrorMessage();

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

${'order_type10_argument'} = new SortArgument('order_type10', $args->order_type);
${'order_type10_argument'}->ensureDefaultValue('asc');
if(!${'order_type10_argument'}->isValid()) return ${'order_type10_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
,new SelectExpression('`items`.*')
,new SelectExpression('`advertise`.`bid_price`')
,new SelectExpression('`advertise`.`balance`')
,new SelectExpression('`advertise`.`regdate`')
));
$query->setTables(array(
new Table('`xe_marketplace_advertise`', '`advertise`')
,new JoinTable('`xe_documents`', '`documents`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`advertise`.`document_srl`','`documents`.`document_srl`',"equal")))
))
,new JoinTable('`xe_marketplace_items`', '`items`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`document_srl`','`items`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, $order_type10_argument)
));
$query->setLimit(new Limit(${'list_count13_argument'}, ${'page11_argument'}, ${'page_count12_argument'}));
return $query; ?>