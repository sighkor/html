<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl19_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl19_argument'}->checkFilter('number');
${'upload_target_srl19_argument'}->checkNotNull();
${'upload_target_srl19_argument'}->createConditionValue();
if(!${'upload_target_srl19_argument'}->isValid()) return ${'upload_target_srl19_argument'}->getErrorMessage();
if(${'upload_target_srl19_argument'} !== null) ${'upload_target_srl19_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid20_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid20_argument'}->createConditionValue();
if(!${'isvalid20_argument'}->isValid()) return ${'isvalid20_argument'}->getErrorMessage();
} else
${'isvalid20_argument'} = NULL;if(${'isvalid20_argument'} !== null) ${'isvalid20_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index21_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index21_argument'}->isValid()) return ${'sort_index21_argument'}->getErrorMessage();
} else
${'sort_index21_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl19_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index21_argument'}, "asc")
));
$query->setLimit();
return $query; ?>