<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentCount");
$query->setAction("update");
$query->setPriority("");

${'comment_count41_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count41_argument'}->checkNotNull();
if(!${'comment_count41_argument'}->isValid()) return ${'comment_count41_argument'}->getErrorMessage();
if(${'comment_count41_argument'} !== null) ${'comment_count41_argument'}->setColumnType('number');
if(isset($args->update_order)) {
${'update_order42_argument'} = new Argument('update_order', $args->{'update_order'});
if(!${'update_order42_argument'}->isValid()) return ${'update_order42_argument'}->getErrorMessage();
} else
${'update_order42_argument'} = NULL;if(${'update_order42_argument'} !== null) ${'update_order42_argument'}->setColumnType('number');

${'last_update43_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update43_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update43_argument'}->isValid()) return ${'last_update43_argument'}->getErrorMessage();
if(${'last_update43_argument'} !== null) ${'last_update43_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater44_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater44_argument'}->isValid()) return ${'last_updater44_argument'}->getErrorMessage();
} else
${'last_updater44_argument'} = NULL;if(${'last_updater44_argument'} !== null) ${'last_updater44_argument'}->setColumnType('varchar');

${'document_srl45_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl45_argument'}->checkFilter('number');
${'document_srl45_argument'}->checkNotNull();
${'document_srl45_argument'}->createConditionValue();
if(!${'document_srl45_argument'}->isValid()) return ${'document_srl45_argument'}->getErrorMessage();
if(${'document_srl45_argument'} !== null) ${'document_srl45_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`comment_count`', ${'comment_count41_argument'})
,new UpdateExpression('`update_order`', ${'update_order42_argument'})
,new UpdateExpression('`last_update`', ${'last_update43_argument'})
,new UpdateExpression('`last_updater`', ${'last_updater44_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl45_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>