<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdvertiseByDocumentSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
} else
${'document_srl1_argument'} = NULL;if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`advertise`.*')
,new SelectExpression('`documents`.`member_srl`')
));
$query->setTables(array(
new Table('`xe_marketplace_advertise`', '`advertise`')
,new JoinTable('`xe_documents`', '`documents`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`advertise`.`document_srl`','`documents`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`advertise`.`document_srl`',$document_srl1_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>