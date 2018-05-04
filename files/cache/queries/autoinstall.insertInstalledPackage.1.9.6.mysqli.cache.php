<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl18_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl18_argument'}->checkFilter('number');
${'package_srl18_argument'}->checkNotNull();
if(!${'package_srl18_argument'}->isValid()) return ${'package_srl18_argument'}->getErrorMessage();
if(${'package_srl18_argument'} !== null) ${'package_srl18_argument'}->setColumnType('number');

${'version19_argument'} = new Argument('version', $args->{'version'});
${'version19_argument'}->checkNotNull();
if(!${'version19_argument'}->isValid()) return ${'version19_argument'}->getErrorMessage();
if(${'version19_argument'} !== null) ${'version19_argument'}->setColumnType('varchar');

${'current_version20_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version20_argument'}->checkNotNull();
if(!${'current_version20_argument'}->isValid()) return ${'current_version20_argument'}->getErrorMessage();
if(${'current_version20_argument'} !== null) ${'current_version20_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update21_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update21_argument'}->isValid()) return ${'need_update21_argument'}->getErrorMessage();
} else
${'need_update21_argument'} = NULL;if(${'need_update21_argument'} !== null) ${'need_update21_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl18_argument'})
,new InsertExpression('`version`', ${'version19_argument'})
,new InsertExpression('`current_version`', ${'current_version20_argument'})
,new InsertExpression('`need_update`', ${'need_update21_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>