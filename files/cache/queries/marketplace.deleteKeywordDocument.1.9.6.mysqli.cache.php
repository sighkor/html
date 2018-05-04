<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteKeywordDocument");
$query->setAction("delete");
$query->setPriority("LOW");

${'document_srl13_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl13_argument'}->checkFilter('number');
${'document_srl13_argument'}->checkNotNull();
${'document_srl13_argument'}->createConditionValue();
if(!${'document_srl13_argument'}->isValid()) return ${'document_srl13_argument'}->getErrorMessage();
if(${'document_srl13_argument'} !== null) ${'document_srl13_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_marketplace_keyword_document`', '`marketplace_keyword_document`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>