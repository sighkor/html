<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleFiles");
$query->setAction("select");
$query->setPriority("");

${'module_srl26_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl26_argument'}->checkFilter('number');
${'module_srl26_argument'}->checkNotNull();
${'module_srl26_argument'}->createConditionValue();
if(!${'module_srl26_argument'}->isValid()) return ${'module_srl26_argument'}->getErrorMessage();
if(${'module_srl26_argument'} !== null) ${'module_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>