<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status37_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status37_argument'}->createConditionValue();
if(!${'status37_argument'}->isValid()) return ${'status37_argument'}->getErrorMessage();
} else
${'status37_argument'} = NULL;if(${'status37_argument'} !== null) ${'status37_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl38_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl38_argument'}->checkFilter('number');
${'document_srl38_argument'}->createConditionValue();
if(!${'document_srl38_argument'}->isValid()) return ${'document_srl38_argument'}->getErrorMessage();
} else
${'document_srl38_argument'} = NULL;if(${'document_srl38_argument'} !== null) ${'document_srl38_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl39_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl39_argument'}->checkFilter('number');
${'module_srl39_argument'}->createConditionValue();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
} else
${'module_srl39_argument'} = NULL;if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate40_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate40_argument'}->createConditionValue();
if(!${'regDate40_argument'}->isValid()) return ${'regDate40_argument'}->getErrorMessage();
} else
${'regDate40_argument'} = NULL;if(${'regDate40_argument'} !== null) ${'regDate40_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status37_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl38_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl39_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate40_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>