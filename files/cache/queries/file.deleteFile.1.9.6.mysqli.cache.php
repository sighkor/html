<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFile");
$query->setAction("delete");
$query->setPriority("");

${'file_srl8_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl8_argument'}->checkFilter('number');
${'file_srl8_argument'}->checkNotNull();
${'file_srl8_argument'}->createConditionValue();
if(!${'file_srl8_argument'}->isValid()) return ${'file_srl8_argument'}->getErrorMessage();
if(${'file_srl8_argument'} !== null) ${'file_srl8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>