<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMarketplaceItemStatus");
$query->setAction("update");
$query->setPriority("");
if(isset($args->item_status)) {
${'item_status1_argument'} = new Argument('item_status', $args->{'item_status'});
if(!${'item_status1_argument'}->isValid()) return ${'item_status1_argument'}->getErrorMessage();
} else
${'item_status1_argument'} = NULL;if(${'item_status1_argument'} !== null) ${'item_status1_argument'}->setColumnType('varchar');

${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->checkNotNull();
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`item_status`', ${'item_status1_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_items`', '`marketplace_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>