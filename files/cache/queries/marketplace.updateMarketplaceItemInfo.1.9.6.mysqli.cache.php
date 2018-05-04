<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMarketplaceItemInfo");
$query->setAction("update");
$query->setPriority("");
if(isset($args->product_name)) {
${'product_name5_argument'} = new Argument('product_name', $args->{'product_name'});
if(!${'product_name5_argument'}->isValid()) return ${'product_name5_argument'}->getErrorMessage();
} else
${'product_name5_argument'} = NULL;if(${'product_name5_argument'} !== null) ${'product_name5_argument'}->setColumnType('varchar');
if(isset($args->original_price)) {
${'original_price6_argument'} = new Argument('original_price', $args->{'original_price'});
if(!${'original_price6_argument'}->isValid()) return ${'original_price6_argument'}->getErrorMessage();
} else
${'original_price6_argument'} = NULL;if(${'original_price6_argument'} !== null) ${'original_price6_argument'}->setColumnType('number');
if(isset($args->price)) {
${'price7_argument'} = new Argument('price', $args->{'price'});
if(!${'price7_argument'}->isValid()) return ${'price7_argument'}->getErrorMessage();
} else
${'price7_argument'} = NULL;if(${'price7_argument'} !== null) ${'price7_argument'}->setColumnType('number');
if(isset($args->item_condition)) {
${'item_condition8_argument'} = new Argument('item_condition', $args->{'item_condition'});
if(!${'item_condition8_argument'}->isValid()) return ${'item_condition8_argument'}->getErrorMessage();
} else
${'item_condition8_argument'} = NULL;if(${'item_condition8_argument'} !== null) ${'item_condition8_argument'}->setColumnType('varchar');
if(isset($args->used_month)) {
${'used_month9_argument'} = new Argument('used_month', $args->{'used_month'});
if(!${'used_month9_argument'}->isValid()) return ${'used_month9_argument'}->getErrorMessage();
} else
${'used_month9_argument'} = NULL;if(${'used_month9_argument'} !== null) ${'used_month9_argument'}->setColumnType('number');
if(isset($args->priority_area)) {
${'priority_area10_argument'} = new Argument('priority_area', $args->{'priority_area'});
if(!${'priority_area10_argument'}->isValid()) return ${'priority_area10_argument'}->getErrorMessage();
} else
${'priority_area10_argument'} = NULL;if(${'priority_area10_argument'} !== null) ${'priority_area10_argument'}->setColumnType('varchar');
if(isset($args->delivery)) {
${'delivery11_argument'} = new Argument('delivery', $args->{'delivery'});
if(!${'delivery11_argument'}->isValid()) return ${'delivery11_argument'}->getErrorMessage();
} else
${'delivery11_argument'} = NULL;if(${'delivery11_argument'} !== null) ${'delivery11_argument'}->setColumnType('char');
if(isset($args->direct_dealing)) {
${'direct_dealing12_argument'} = new Argument('direct_dealing', $args->{'direct_dealing'});
if(!${'direct_dealing12_argument'}->isValid()) return ${'direct_dealing12_argument'}->getErrorMessage();
} else
${'direct_dealing12_argument'} = NULL;if(${'direct_dealing12_argument'} !== null) ${'direct_dealing12_argument'}->setColumnType('char');
if(isset($args->safe_dealing)) {
${'safe_dealing13_argument'} = new Argument('safe_dealing', $args->{'safe_dealing'});
if(!${'safe_dealing13_argument'}->isValid()) return ${'safe_dealing13_argument'}->getErrorMessage();
} else
${'safe_dealing13_argument'} = NULL;if(${'safe_dealing13_argument'} !== null) ${'safe_dealing13_argument'}->setColumnType('char');

${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->checkNotNull();
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`product_name`', ${'product_name5_argument'})
,new UpdateExpression('`original_price`', ${'original_price6_argument'})
,new UpdateExpression('`price`', ${'price7_argument'})
,new UpdateExpression('`item_condition`', ${'item_condition8_argument'})
,new UpdateExpression('`used_month`', ${'used_month9_argument'})
,new UpdateExpression('`priority_area`', ${'priority_area10_argument'})
,new UpdateExpression('`delivery`', ${'delivery11_argument'})
,new UpdateExpression('`direct_dealing`', ${'direct_dealing12_argument'})
,new UpdateExpression('`safe_dealing`', ${'safe_dealing13_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_items`', '`marketplace_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>