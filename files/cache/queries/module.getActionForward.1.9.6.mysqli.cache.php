<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act74_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act74_argument'}->createConditionValue();
if(!${'act74_argument'}->isValid()) return ${'act74_argument'}->getErrorMessage();
} else
${'act74_argument'} = NULL;if(${'act74_argument'} !== null) ${'act74_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act74_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>