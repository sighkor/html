<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAllKeywords");
$query->setAction("select");
$query->setPriority("");

${'module_srl68_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl68_argument'}->checkFilter('number');
${'module_srl68_argument'}->checkNotNull();
${'module_srl68_argument'}->createConditionValue();
if(!${'module_srl68_argument'}->isValid()) return ${'module_srl68_argument'}->getErrorMessage();
if(${'module_srl68_argument'} !== null) ${'module_srl68_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`keyword_member`.`keyword`')
));
$query->setTables(array(
new Table('`xe_marketplace_keyword_member`', '`keyword_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl68_argument,"equal", 'and')))
));
$query->setGroups(array(
'`keyword_member`.`keyword`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>