<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroupsExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx7_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notin');
${'var_idx7_argument'}->checkFilter('number');
${'var_idx7_argument'}->createConditionValue();
if(!${'var_idx7_argument'}->isValid()) return ${'var_idx7_argument'}->getErrorMessage();
} else
${'var_idx7_argument'} = NULL;if(${'var_idx7_argument'} !== null) ${'var_idx7_argument'}->setColumnType('number');
if(isset($args->eid)) {
${'eid8_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid8_argument'}->createConditionValue();
if(!${'eid8_argument'}->isValid()) return ${'eid8_argument'}->getErrorMessage();
} else
${'eid8_argument'} = NULL;if(${'eid8_argument'} !== null) ${'eid8_argument'}->setColumnType('varchar');

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx7_argument,"notin", 'and')
,new ConditionWithArgument('`eid`',$eid8_argument,"equal", 'and')))
));
$query->setGroups(array(
'`module_srl`' ,'`var_idx`' ,'`eid`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, "asc")
));
$query->setLimit();
return $query; ?>