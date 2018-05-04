<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleTriggers");
$query->setAction("delete");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>