<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWishlistItem");
$query->setAction("select");
$query->setPriority("");

${'document_srl22_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl22_argument'}->checkFilter('number');
${'document_srl22_argument'}->checkNotNull();
${'document_srl22_argument'}->createConditionValue();
if(!${'document_srl22_argument'}->isValid()) return ${'document_srl22_argument'}->getErrorMessage();
if(${'document_srl22_argument'} !== null) ${'document_srl22_argument'}->setColumnType('number');

${'member_srl23_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl23_argument'}->checkFilter('number');
${'member_srl23_argument'}->checkNotNull();
${'member_srl23_argument'}->createConditionValue();
if(!${'member_srl23_argument'}->isValid()) return ${'member_srl23_argument'}->getErrorMessage();
if(${'member_srl23_argument'} !== null) ${'member_srl23_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`marketplace_wishlist`.*')
));
$query->setTables(array(
new Table('`xe_marketplace_wishlist`', '`marketplace_wishlist`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl22_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl23_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>