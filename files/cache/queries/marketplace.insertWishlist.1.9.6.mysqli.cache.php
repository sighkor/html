<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertWishlist");
$query->setAction("insert");
$query->setPriority("");

${'document_srl1_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`regdate`', ${'regdate3_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_wishlist`', '`marketplace_wishlist`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>