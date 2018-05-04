<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl37_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl37_argument'}->checkFilter('number');
${'module_srl37_argument'}->checkNotNull();
${'module_srl37_argument'}->createConditionValue();
if(!${'module_srl37_argument'}->isValid()) return ${'module_srl37_argument'}->getErrorMessage();
if(${'module_srl37_argument'} !== null) ${'module_srl37_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl37_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>