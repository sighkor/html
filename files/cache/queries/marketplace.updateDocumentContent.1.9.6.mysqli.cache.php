<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentContent");
$query->setAction("update");
$query->setPriority("LOW");
if(isset($args->title)) {
${'title1_argument'} = new Argument('title', $args->{'title'});
if(!${'title1_argument'}->isValid()) return ${'title1_argument'}->getErrorMessage();
} else
${'title1_argument'} = NULL;if(${'title1_argument'} !== null) ${'title1_argument'}->setColumnType('varchar');

${'content2_argument'} = new Argument('content', $args->{'content'});
${'content2_argument'}->checkNotNull();
if(!${'content2_argument'}->isValid()) return ${'content2_argument'}->getErrorMessage();
if(${'content2_argument'} !== null) ${'content2_argument'}->setColumnType('bigtext');

${'last_update3_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update3_argument'}->isValid()) return ${'last_update3_argument'}->getErrorMessage();
if(${'last_update3_argument'} !== null) ${'last_update3_argument'}->setColumnType('date');

${'ipaddress4_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress4_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');

${'document_srl5_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->checkNotNull();
${'document_srl5_argument'}->createConditionValue();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title1_argument'})
,new UpdateExpression('`content`', ${'content2_argument'})
,new UpdateExpression('`last_update`', ${'last_update3_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress4_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>