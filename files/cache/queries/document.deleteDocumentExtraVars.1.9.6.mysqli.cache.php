<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl16_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl16_argument'}->checkFilter('number');
${'document_srl16_argument'}->createConditionValue();
if(!${'document_srl16_argument'}->isValid()) return ${'document_srl16_argument'}->getErrorMessage();
} else
${'document_srl16_argument'} = NULL;if(${'document_srl16_argument'} !== null) ${'document_srl16_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx17_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx17_argument'}->checkFilter('number');
${'var_idx17_argument'}->createConditionValue();
if(!${'var_idx17_argument'}->isValid()) return ${'var_idx17_argument'}->getErrorMessage();
} else
${'var_idx17_argument'} = NULL;if(${'var_idx17_argument'} !== null) ${'var_idx17_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code18_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code18_argument'}->createConditionValue();
if(!${'lang_code18_argument'}->isValid()) return ${'lang_code18_argument'}->getErrorMessage();
} else
${'lang_code18_argument'} = NULL;if(${'lang_code18_argument'} !== null) ${'lang_code18_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid19_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid19_argument'}->createConditionValue();
if(!${'eid19_argument'}->isValid()) return ${'eid19_argument'}->getErrorMessage();
} else
${'eid19_argument'} = NULL;if(${'eid19_argument'} !== null) ${'eid19_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl15_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl16_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx17_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code18_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid19_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>