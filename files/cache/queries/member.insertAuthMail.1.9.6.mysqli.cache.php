<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAuthMail");
$query->setAction("insert");
$query->setPriority("");

${'member_srl30_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl30_argument'}->checkFilter('number');
${'member_srl30_argument'}->checkNotNull();
if(!${'member_srl30_argument'}->isValid()) return ${'member_srl30_argument'}->getErrorMessage();
if(${'member_srl30_argument'} !== null) ${'member_srl30_argument'}->setColumnType('number');

${'user_id31_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id31_argument'}->checkNotNull();
if(!${'user_id31_argument'}->isValid()) return ${'user_id31_argument'}->getErrorMessage();
if(${'user_id31_argument'} !== null) ${'user_id31_argument'}->setColumnType('varchar');

${'auth_key32_argument'} = new Argument('auth_key', $args->{'auth_key'});
${'auth_key32_argument'}->checkNotNull();
if(!${'auth_key32_argument'}->isValid()) return ${'auth_key32_argument'}->getErrorMessage();
if(${'auth_key32_argument'} !== null) ${'auth_key32_argument'}->setColumnType('varchar');

${'new_password33_argument'} = new Argument('new_password', $args->{'new_password'});
${'new_password33_argument'}->checkNotNull();
if(!${'new_password33_argument'}->isValid()) return ${'new_password33_argument'}->getErrorMessage();
if(${'new_password33_argument'} !== null) ${'new_password33_argument'}->setColumnType('varchar');

${'is_register34_argument'} = new Argument('is_register', $args->{'is_register'});
${'is_register34_argument'}->ensureDefaultValue('N');
if(!${'is_register34_argument'}->isValid()) return ${'is_register34_argument'}->getErrorMessage();
if(${'is_register34_argument'} !== null) ${'is_register34_argument'}->setColumnType('char');

${'regdate35_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate35_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate35_argument'}->isValid()) return ${'regdate35_argument'}->getErrorMessage();
if(${'regdate35_argument'} !== null) ${'regdate35_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl30_argument'})
,new InsertExpression('`user_id`', ${'user_id31_argument'})
,new InsertExpression('`auth_key`', ${'auth_key32_argument'})
,new InsertExpression('`new_password`', ${'new_password33_argument'})
,new InsertExpression('`is_register`', ${'is_register34_argument'})
,new InsertExpression('`regdate`', ${'regdate35_argument'})
));
$query->setTables(array(
new Table('`xe_member_auth_mail`', '`member_auth_mail`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>