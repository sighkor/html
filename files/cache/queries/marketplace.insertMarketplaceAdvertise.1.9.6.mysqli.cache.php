<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMarketplaceAdvertise");
$query->setAction("insert");
$query->setPriority("");

${'document_srl3_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl3_argument'}->checkFilter('number');
${'document_srl3_argument'}->checkNotNull();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

${'bid_price4_argument'} = new Argument('bid_price', $args->{'bid_price'});
${'bid_price4_argument'}->checkFilter('number');
${'bid_price4_argument'}->checkNotNull();
if(!${'bid_price4_argument'}->isValid()) return ${'bid_price4_argument'}->getErrorMessage();
if(${'bid_price4_argument'} !== null) ${'bid_price4_argument'}->setColumnType('number');

${'balance5_argument'} = new Argument('balance', $args->{'balance'});
${'balance5_argument'}->checkFilter('number');
${'balance5_argument'}->checkNotNull();
if(!${'balance5_argument'}->isValid()) return ${'balance5_argument'}->getErrorMessage();
if(${'balance5_argument'} !== null) ${'balance5_argument'}->setColumnType('number');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl3_argument'})
,new InsertExpression('`bid_price`', ${'bid_price4_argument'})
,new InsertExpression('`balance`', ${'balance5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_advertise`', '`marketplace_advertise`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>