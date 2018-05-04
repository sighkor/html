<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl52_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl52_argument'}->checkNotNull();
${'site_srl52_argument'}->createConditionValue();
if(!${'site_srl52_argument'}->isValid()) return ${'site_srl52_argument'}->getErrorMessage();
if(${'site_srl52_argument'} !== null) ${'site_srl52_argument'}->setColumnType('number');

${'addon53_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon53_argument'}->checkNotNull();
${'addon53_argument'}->createConditionValue();
if(!${'addon53_argument'}->isValid()) return ${'addon53_argument'}->getErrorMessage();
if(${'addon53_argument'} !== null) ${'addon53_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl52_argument,"equal")
,new ConditionWithArgument('`addon`',$addon53_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>