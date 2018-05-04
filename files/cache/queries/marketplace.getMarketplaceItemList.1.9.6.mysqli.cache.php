<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMarketplaceItemList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl14_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl14_argument'}->checkFilter('number');
${'module_srl14_argument'}->createConditionValue();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
} else
${'module_srl14_argument'} = NULL;if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl15_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl15_argument'}->checkFilter('number');
${'category_srl15_argument'}->createConditionValue();
if(!${'category_srl15_argument'}->isValid()) return ${'category_srl15_argument'}->getErrorMessage();
} else
${'category_srl15_argument'} = NULL;if(${'category_srl15_argument'} !== null) ${'category_srl15_argument'}->setColumnType('number');
if(isset($args->item_condition)) {
${'item_condition16_argument'} = new ConditionArgument('item_condition', $args->item_condition, 'in');
${'item_condition16_argument'}->createConditionValue();
if(!${'item_condition16_argument'}->isValid()) return ${'item_condition16_argument'}->getErrorMessage();
} else
${'item_condition16_argument'} = NULL;if(${'item_condition16_argument'} !== null) ${'item_condition16_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl17_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl17_argument'}->checkFilter('number');
${'member_srl17_argument'}->createConditionValue();
if(!${'member_srl17_argument'}->isValid()) return ${'member_srl17_argument'}->getErrorMessage();
} else
${'member_srl17_argument'} = NULL;if(${'member_srl17_argument'} !== null) ${'member_srl17_argument'}->setColumnType('number');
if(isset($args->priority_area)) {
${'priority_area18_argument'} = new ConditionArgument('priority_area', $args->priority_area, 'like_prefix');
${'priority_area18_argument'}->createConditionValue();
if(!${'priority_area18_argument'}->isValid()) return ${'priority_area18_argument'}->getErrorMessage();
} else
${'priority_area18_argument'} = NULL;if(${'priority_area18_argument'} !== null) ${'priority_area18_argument'}->setColumnType('varchar');
if(isset($args->used_month)) {
${'used_month19_argument'} = new ConditionArgument('used_month', $args->used_month, 'less');
${'used_month19_argument'}->createConditionValue();
if(!${'used_month19_argument'}->isValid()) return ${'used_month19_argument'}->getErrorMessage();
} else
${'used_month19_argument'} = NULL;if(${'used_month19_argument'} !== null) ${'used_month19_argument'}->setColumnType('number');
if(isset($args->item_status)) {
${'item_status20_argument'} = new ConditionArgument('item_status', $args->item_status, 'equal');
${'item_status20_argument'}->createConditionValue();
if(!${'item_status20_argument'}->isValid()) return ${'item_status20_argument'}->getErrorMessage();
} else
${'item_status20_argument'} = NULL;if(${'item_status20_argument'} !== null) ${'item_status20_argument'}->setColumnType('varchar');
if(isset($args->not_item_status)) {
${'not_item_status21_argument'} = new ConditionArgument('not_item_status', $args->not_item_status, 'notequal');
${'not_item_status21_argument'}->createConditionValue();
if(!${'not_item_status21_argument'}->isValid()) return ${'not_item_status21_argument'}->getErrorMessage();
} else
${'not_item_status21_argument'} = NULL;if(${'not_item_status21_argument'} !== null) ${'not_item_status21_argument'}->setColumnType('varchar');
if(isset($args->search_keyword)) {
${'search_keyword22_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword22_argument'}->createConditionValue();
if(!${'search_keyword22_argument'}->isValid()) return ${'search_keyword22_argument'}->getErrorMessage();
} else
${'search_keyword22_argument'} = NULL;if(${'search_keyword22_argument'} !== null) ${'search_keyword22_argument'}->setColumnType('varchar');
if(isset($args->search_keyword)) {
${'search_keyword23_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword23_argument'}->createConditionValue();
if(!${'search_keyword23_argument'}->isValid()) return ${'search_keyword23_argument'}->getErrorMessage();
} else
${'search_keyword23_argument'} = NULL;if(${'search_keyword23_argument'} !== null) ${'search_keyword23_argument'}->setColumnType('bigtext');
if(isset($args->search_keyword)) {
${'search_keyword24_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword24_argument'}->createConditionValue();
if(!${'search_keyword24_argument'}->isValid()) return ${'search_keyword24_argument'}->getErrorMessage();
} else
${'search_keyword24_argument'} = NULL;if(${'search_keyword24_argument'} !== null) ${'search_keyword24_argument'}->setColumnType('varchar');
if(isset($args->price_from)) {
${'price_from25_argument'} = new ConditionArgument('price_from', $args->price_from, 'more');
${'price_from25_argument'}->createConditionValue();
if(!${'price_from25_argument'}->isValid()) return ${'price_from25_argument'}->getErrorMessage();
} else
${'price_from25_argument'} = NULL;if(${'price_from25_argument'} !== null) ${'price_from25_argument'}->setColumnType('number');
if(isset($args->price_to)) {
${'price_to26_argument'} = new ConditionArgument('price_to', $args->price_to, 'less');
${'price_to26_argument'}->createConditionValue();
if(!${'price_to26_argument'}->isValid()) return ${'price_to26_argument'}->getErrorMessage();
} else
${'price_to26_argument'} = NULL;if(${'price_to26_argument'} !== null) ${'price_to26_argument'}->setColumnType('number');

${'page29_argument'} = new Argument('page', $args->{'page'});
${'page29_argument'}->ensureDefaultValue('1');
if(!${'page29_argument'}->isValid()) return ${'page29_argument'}->getErrorMessage();

${'page_count30_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count30_argument'}->ensureDefaultValue('10');
if(!${'page_count30_argument'}->isValid()) return ${'page_count30_argument'}->getErrorMessage();

${'list_count31_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count31_argument'}->ensureDefaultValue('20');
if(!${'list_count31_argument'}->isValid()) return ${'list_count31_argument'}->getErrorMessage();

${'sort_index27_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index27_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index27_argument'}->isValid()) return ${'sort_index27_argument'}->getErrorMessage();

${'order_type28_argument'} = new SortArgument('order_type28', $args->order_type);
${'order_type28_argument'}->ensureDefaultValue('asc');
if(!${'order_type28_argument'}->isValid()) return ${'order_type28_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`items`.*')
,new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_marketplace_items`', '`items`')
,new JoinTable('`xe_documents`', '`documents`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`document_srl`','`items`.`document_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl14_argument,"in")
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl15_argument,"in", 'and')
,new ConditionWithArgument('`items`.`item_condition`',$item_condition16_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl17_argument,"equal", 'and')
,new ConditionWithArgument('`items`.`priority_area`',$priority_area18_argument,"like_prefix", 'and')
,new ConditionWithArgument('`items`.`used_month`',$used_month19_argument,"less", 'and')
,new ConditionWithArgument('`items`.`item_status`',$item_status20_argument,"equal", 'and')
,new ConditionWithArgument('`items`.`item_status`',$not_item_status21_argument,"notequal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`title`',$search_keyword22_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`content`',$search_keyword23_argument,"like", 'or')
,new ConditionWithArgument('`items`.`product_name`',$search_keyword24_argument,"like", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`items`.`price`',$price_from25_argument,"more", 'and')
,new ConditionWithArgument('`items`.`price`',$price_to26_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index27_argument'}, $order_type28_argument)
));
$query->setLimit(new Limit(${'list_count31_argument'}, ${'page29_argument'}, ${'page_count30_argument'}));
return $query; ?>