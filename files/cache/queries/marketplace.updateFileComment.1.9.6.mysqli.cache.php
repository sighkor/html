<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileComment");
$query->setAction("update");
$query->setPriority("");

${'comment55_argument'} = new Argument('comment', $args->{'comment'});
${'comment55_argument'}->checkNotNull();
if(!${'comment55_argument'}->isValid()) return ${'comment55_argument'}->getErrorMessage();
if(${'comment55_argument'} !== null) ${'comment55_argument'}->setColumnType('varchar');

${'file_srl56_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl56_argument'}->checkFilter('number');
${'file_srl56_argument'}->checkNotNull();
${'file_srl56_argument'}->createConditionValue();
if(!${'file_srl56_argument'}->isValid()) return ${'file_srl56_argument'}->getErrorMessage();
if(${'file_srl56_argument'} !== null) ${'file_srl56_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`comment`', ${'comment55_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl56_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>