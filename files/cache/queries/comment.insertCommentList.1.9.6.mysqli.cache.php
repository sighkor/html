<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCommentList");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl8_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl8_argument'}->checkNotNull();
if(!${'comment_srl8_argument'}->isValid()) return ${'comment_srl8_argument'}->getErrorMessage();
if(${'comment_srl8_argument'} !== null) ${'comment_srl8_argument'}->setColumnType('number');

${'document_srl9_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->checkNotNull();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');
if(isset($args->head)) {
${'head10_argument'} = new Argument('head', $args->{'head'});
${'head10_argument'}->checkFilter('number');
if(!${'head10_argument'}->isValid()) return ${'head10_argument'}->getErrorMessage();
} else
${'head10_argument'} = NULL;if(${'head10_argument'} !== null) ${'head10_argument'}->setColumnType('number');
if(isset($args->arrange)) {
${'arrange11_argument'} = new Argument('arrange', $args->{'arrange'});
${'arrange11_argument'}->checkFilter('number');
if(!${'arrange11_argument'}->isValid()) return ${'arrange11_argument'}->getErrorMessage();
} else
${'arrange11_argument'} = NULL;if(${'arrange11_argument'} !== null) ${'arrange11_argument'}->setColumnType('number');

${'module_srl12_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl12_argument'}->checkFilter('number');
${'module_srl12_argument'}->checkNotNull();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate13_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
} else
${'regdate13_argument'} = NULL;if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');
if(isset($args->depth)) {
${'depth14_argument'} = new Argument('depth', $args->{'depth'});
${'depth14_argument'}->checkFilter('number');
if(!${'depth14_argument'}->isValid()) return ${'depth14_argument'}->getErrorMessage();
} else
${'depth14_argument'} = NULL;if(${'depth14_argument'} !== null) ${'depth14_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl8_argument'})
,new InsertExpression('`document_srl`', ${'document_srl9_argument'})
,new InsertExpression('`head`', ${'head10_argument'})
,new InsertExpression('`arrange`', ${'arrange11_argument'})
,new InsertExpression('`module_srl`', ${'module_srl12_argument'})
,new InsertExpression('`regdate`', ${'regdate13_argument'})
,new InsertExpression('`depth`', ${'depth14_argument'})
));
$query->setTables(array(
new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>