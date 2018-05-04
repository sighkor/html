<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMarketplaceItemInfo");
$query->setAction("insert");
$query->setPriority("");

${'document_srl57_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl57_argument'}->checkFilter('number');
${'document_srl57_argument'}->checkNotNull();
if(!${'document_srl57_argument'}->isValid()) return ${'document_srl57_argument'}->getErrorMessage();
if(${'document_srl57_argument'} !== null) ${'document_srl57_argument'}->setColumnType('number');

${'thumbnails_srl58_argument'} = new Argument('thumbnails_srl', $args->{'thumbnails_srl'});
${'thumbnails_srl58_argument'}->checkFilter('number');
${'thumbnails_srl58_argument'}->checkNotNull();
if(!${'thumbnails_srl58_argument'}->isValid()) return ${'thumbnails_srl58_argument'}->getErrorMessage();
if(${'thumbnails_srl58_argument'} !== null) ${'thumbnails_srl58_argument'}->setColumnType('number');
if(isset($args->product_name)) {
${'product_name59_argument'} = new Argument('product_name', $args->{'product_name'});
if(!${'product_name59_argument'}->isValid()) return ${'product_name59_argument'}->getErrorMessage();
} else
${'product_name59_argument'} = NULL;if(${'product_name59_argument'} !== null) ${'product_name59_argument'}->setColumnType('varchar');
if(isset($args->original_price)) {
${'original_price60_argument'} = new Argument('original_price', $args->{'original_price'});
if(!${'original_price60_argument'}->isValid()) return ${'original_price60_argument'}->getErrorMessage();
} else
${'original_price60_argument'} = NULL;if(${'original_price60_argument'} !== null) ${'original_price60_argument'}->setColumnType('number');
if(isset($args->price)) {
${'price61_argument'} = new Argument('price', $args->{'price'});
if(!${'price61_argument'}->isValid()) return ${'price61_argument'}->getErrorMessage();
} else
${'price61_argument'} = NULL;if(${'price61_argument'} !== null) ${'price61_argument'}->setColumnType('number');
if(isset($args->item_condition)) {
${'item_condition62_argument'} = new Argument('item_condition', $args->{'item_condition'});
if(!${'item_condition62_argument'}->isValid()) return ${'item_condition62_argument'}->getErrorMessage();
} else
${'item_condition62_argument'} = NULL;if(${'item_condition62_argument'} !== null) ${'item_condition62_argument'}->setColumnType('varchar');
if(isset($args->used_month)) {
${'used_month63_argument'} = new Argument('used_month', $args->{'used_month'});
if(!${'used_month63_argument'}->isValid()) return ${'used_month63_argument'}->getErrorMessage();
} else
${'used_month63_argument'} = NULL;if(${'used_month63_argument'} !== null) ${'used_month63_argument'}->setColumnType('number');
if(isset($args->priority_area)) {
${'priority_area64_argument'} = new Argument('priority_area', $args->{'priority_area'});
if(!${'priority_area64_argument'}->isValid()) return ${'priority_area64_argument'}->getErrorMessage();
} else
${'priority_area64_argument'} = NULL;if(${'priority_area64_argument'} !== null) ${'priority_area64_argument'}->setColumnType('varchar');
if(isset($args->delivery)) {
${'delivery65_argument'} = new Argument('delivery', $args->{'delivery'});
if(!${'delivery65_argument'}->isValid()) return ${'delivery65_argument'}->getErrorMessage();
} else
${'delivery65_argument'} = NULL;if(${'delivery65_argument'} !== null) ${'delivery65_argument'}->setColumnType('char');
if(isset($args->direct_dealing)) {
${'direct_dealing66_argument'} = new Argument('direct_dealing', $args->{'direct_dealing'});
if(!${'direct_dealing66_argument'}->isValid()) return ${'direct_dealing66_argument'}->getErrorMessage();
} else
${'direct_dealing66_argument'} = NULL;if(${'direct_dealing66_argument'} !== null) ${'direct_dealing66_argument'}->setColumnType('char');
if(isset($args->safe_dealing)) {
${'safe_dealing67_argument'} = new Argument('safe_dealing', $args->{'safe_dealing'});
if(!${'safe_dealing67_argument'}->isValid()) return ${'safe_dealing67_argument'}->getErrorMessage();
} else
${'safe_dealing67_argument'} = NULL;if(${'safe_dealing67_argument'} !== null) ${'safe_dealing67_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl57_argument'})
,new InsertExpression('`thumbnails_srl`', ${'thumbnails_srl58_argument'})
,new InsertExpression('`product_name`', ${'product_name59_argument'})
,new InsertExpression('`original_price`', ${'original_price60_argument'})
,new InsertExpression('`price`', ${'price61_argument'})
,new InsertExpression('`item_condition`', ${'item_condition62_argument'})
,new InsertExpression('`used_month`', ${'used_month63_argument'})
,new InsertExpression('`priority_area`', ${'priority_area64_argument'})
,new InsertExpression('`delivery`', ${'delivery65_argument'})
,new InsertExpression('`direct_dealing`', ${'direct_dealing66_argument'})
,new InsertExpression('`safe_dealing`', ${'safe_dealing67_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_items`', '`marketplace_items`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>