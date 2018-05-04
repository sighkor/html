<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSettingCondition");
$query->setAction("insert");
$query->setPriority("");

${'module_srl3_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->checkNotNull();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

${'eid4_argument'} = new Argument('eid', $args->{'eid'});
${'eid4_argument'}->checkNotNull();
if(!${'eid4_argument'}->isValid()) return ${'eid4_argument'}->getErrorMessage();
if(${'eid4_argument'} !== null) ${'eid4_argument'}->setColumnType('varchar');

${'name5_argument'} = new Argument('name', $args->{'name'});
${'name5_argument'}->checkNotNull();
if(!${'name5_argument'}->isValid()) return ${'name5_argument'}->getErrorMessage();
if(${'name5_argument'} !== null) ${'name5_argument'}->setColumnType('varchar');

${'short_name6_argument'} = new Argument('short_name', $args->{'short_name'});
${'short_name6_argument'}->checkNotNull();
if(!${'short_name6_argument'}->isValid()) return ${'short_name6_argument'}->getErrorMessage();
if(${'short_name6_argument'} !== null) ${'short_name6_argument'}->setColumnType('varchar');
if(isset($args->desc)) {
${'desc7_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc7_argument'}->isValid()) return ${'desc7_argument'}->getErrorMessage();
} else
${'desc7_argument'} = NULL;if(${'desc7_argument'} !== null) ${'desc7_argument'}->setColumnType('text');

${'idx8_argument'} = new Argument('idx', $args->{'idx'});
${'idx8_argument'}->checkFilter('number');
${'idx8_argument'}->checkNotNull();
if(!${'idx8_argument'}->isValid()) return ${'idx8_argument'}->getErrorMessage();
if(${'idx8_argument'} !== null) ${'idx8_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl3_argument'})
,new InsertExpression('`eid`', ${'eid4_argument'})
,new InsertExpression('`name`', ${'name5_argument'})
,new InsertExpression('`short_name`', ${'short_name6_argument'})
,new InsertExpression('`desc`', ${'desc7_argument'})
,new InsertExpression('`idx`', ${'idx8_argument'})
));
$query->setTables(array(
new Table('`xe_marketplace_conditions`', '`marketplace_conditions`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>