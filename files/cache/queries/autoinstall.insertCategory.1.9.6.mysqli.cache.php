<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl6_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl6_argument'}->checkFilter('number');
${'category_srl6_argument'}->checkNotNull();
if(!${'category_srl6_argument'}->isValid()) return ${'category_srl6_argument'}->getErrorMessage();
if(${'category_srl6_argument'} !== null) ${'category_srl6_argument'}->setColumnType('number');

${'parent_srl7_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl7_argument'}->checkFilter('number');
${'parent_srl7_argument'}->checkNotNull();
if(!${'parent_srl7_argument'}->isValid()) return ${'parent_srl7_argument'}->getErrorMessage();
if(${'parent_srl7_argument'} !== null) ${'parent_srl7_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title8_argument'} = new Argument('title', $args->{'title'});
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
} else
${'title8_argument'} = NULL;if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');

${'list_order9_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order9_argument'}->checkFilter('number');
${'list_order9_argument'}->checkNotNull();
if(!${'list_order9_argument'}->isValid()) return ${'list_order9_argument'}->getErrorMessage();
if(${'list_order9_argument'} !== null) ${'list_order9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl6_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl7_argument'})
,new InsertExpression('`title`', ${'title8_argument'})
,new InsertExpression('`list_order`', ${'list_order9_argument'})
));
$query->setTables(array(
new Table('`xe_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>