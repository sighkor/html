<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin73_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin73_argument'}->ensureDefaultValue('.');
${'skin73_argument'}->createConditionValue();
if(!${'skin73_argument'}->isValid()) return ${'skin73_argument'}->getErrorMessage();
if(${'skin73_argument'} !== null) ${'skin73_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin73_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>