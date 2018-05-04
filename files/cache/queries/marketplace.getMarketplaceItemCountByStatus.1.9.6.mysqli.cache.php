<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMarketplaceItemCountByStatus");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = NULL;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');
if(isset($args->item_status)) {
${'item_status6_argument'} = new ConditionArgument('item_status', $args->item_status, 'equal');
${'item_status6_argument'}->createConditionValue();
if(!${'item_status6_argument'}->isValid()) return ${'item_status6_argument'}->getErrorMessage();
} else
${'item_status6_argument'} = NULL;if(${'item_status6_argument'} !== null) ${'item_status6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_marketplace_items`', '`items`')
,new JoinTable('`xe_documents`', '`documents`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`document_srl`','`items`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`items`.`item_status`',$item_status6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>