<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl38_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl38_argument'}->checkFilter('number');
${'module_srl38_argument'}->checkNotNull();
if(!${'module_srl38_argument'}->isValid()) return ${'module_srl38_argument'}->getErrorMessage();
if(${'module_srl38_argument'} !== null) ${'module_srl38_argument'}->setColumnType('number');

${'name39_argument'} = new Argument('name', $args->{'name'});
${'name39_argument'}->checkNotNull();
if(!${'name39_argument'}->isValid()) return ${'name39_argument'}->getErrorMessage();
if(${'name39_argument'} !== null) ${'name39_argument'}->setColumnType('varchar');

${'value40_argument'} = new Argument('value', $args->{'value'});
${'value40_argument'}->checkNotNull();
if(!${'value40_argument'}->isValid()) return ${'value40_argument'}->getErrorMessage();
if(${'value40_argument'} !== null) ${'value40_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl38_argument'})
,new InsertExpression('`name`', ${'name39_argument'})
,new InsertExpression('`value`', ${'value40_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>