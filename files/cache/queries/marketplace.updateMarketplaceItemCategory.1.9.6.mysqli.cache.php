<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMarketplaceItemCategory");
$query->setAction("update");
$query->setPriority("LOW");

${'category_srl1_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl1_argument'}->checkFilter('number');
${'category_srl1_argument'}->ensureDefaultValue('0');
${'category_srl1_argument'}->checkNotNull();
if(!${'category_srl1_argument'}->isValid()) return ${'category_srl1_argument'}->getErrorMessage();
if(${'category_srl1_argument'} !== null) ${'category_srl1_argument'}->setColumnType('number');

${'last_update2_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update2_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update2_argument'}->isValid()) return ${'last_update2_argument'}->getErrorMessage();
if(${'last_update2_argument'} !== null) ${'last_update2_argument'}->setColumnType('date');

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`category_srl`', ${'category_srl1_argument'})
,new UpdateExpression('`last_update`', ${'last_update2_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress3_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>