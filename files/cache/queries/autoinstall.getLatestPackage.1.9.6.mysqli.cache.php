<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLatestPackage");
$query->setAction("select");
$query->setPriority("");

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('1');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('updatedate');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>