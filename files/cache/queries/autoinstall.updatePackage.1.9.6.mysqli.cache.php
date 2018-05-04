<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path10_argument'} = new Argument('path', $args->{'path'});
${'path10_argument'}->checkNotNull();
if(!${'path10_argument'}->isValid()) return ${'path10_argument'}->getErrorMessage();
if(${'path10_argument'} !== null) ${'path10_argument'}->setColumnType('varchar');

${'have_instance11_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance11_argument'}->checkNotNull();
if(!${'have_instance11_argument'}->isValid()) return ${'have_instance11_argument'}->getErrorMessage();
if(${'have_instance11_argument'} !== null) ${'have_instance11_argument'}->setColumnType('char');

${'updatedate12_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate12_argument'}->checkNotNull();
if(!${'updatedate12_argument'}->isValid()) return ${'updatedate12_argument'}->getErrorMessage();
if(${'updatedate12_argument'} !== null) ${'updatedate12_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl13_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl13_argument'}->checkFilter('number');
if(!${'category_srl13_argument'}->isValid()) return ${'category_srl13_argument'}->getErrorMessage();
} else
${'category_srl13_argument'} = NULL;if(${'category_srl13_argument'} !== null) ${'category_srl13_argument'}->setColumnType('number');

${'latest_item_srl14_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl14_argument'}->checkNotNull();
if(!${'latest_item_srl14_argument'}->isValid()) return ${'latest_item_srl14_argument'}->getErrorMessage();
if(${'latest_item_srl14_argument'} !== null) ${'latest_item_srl14_argument'}->setColumnType('number');

${'version15_argument'} = new Argument('version', $args->{'version'});
${'version15_argument'}->checkNotNull();
if(!${'version15_argument'}->isValid()) return ${'version15_argument'}->getErrorMessage();
if(${'version15_argument'} !== null) ${'version15_argument'}->setColumnType('varchar');

${'package_srl16_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl16_argument'}->checkNotNull();
${'package_srl16_argument'}->createConditionValue();
if(!${'package_srl16_argument'}->isValid()) return ${'package_srl16_argument'}->getErrorMessage();
if(${'package_srl16_argument'} !== null) ${'package_srl16_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path10_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance11_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate12_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl13_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl14_argument'})
,new UpdateExpression('`version`', ${'version15_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>