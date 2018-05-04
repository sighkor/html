<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status46_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status46_argument'}->createConditionValue();
if(!${'status46_argument'}->isValid()) return ${'status46_argument'}->getErrorMessage();
} else
${'status46_argument'} = NULL;if(${'status46_argument'} !== null) ${'status46_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl47_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl47_argument'}->checkFilter('number');
${'module_srl47_argument'}->createConditionValue();
if(!${'module_srl47_argument'}->isValid()) return ${'module_srl47_argument'}->getErrorMessage();
} else
${'module_srl47_argument'} = NULL;if(${'module_srl47_argument'} !== null) ${'module_srl47_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl48_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl48_argument'}->checkFilter('number');
${'document_srl48_argument'}->createConditionValue();
if(!${'document_srl48_argument'}->isValid()) return ${'document_srl48_argument'}->getErrorMessage();
} else
${'document_srl48_argument'} = NULL;if(${'document_srl48_argument'} !== null) ${'document_srl48_argument'}->setColumnType('number');

${'list_count50_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count50_argument'}->ensureDefaultValue('20');
if(!${'list_count50_argument'}->isValid()) return ${'list_count50_argument'}->getErrorMessage();

${'sort_index49_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index49_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index49_argument'}->isValid()) return ${'sort_index49_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status46_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl47_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl48_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index49_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count50_argument'}));
return $query; ?>