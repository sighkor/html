<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComment");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl15_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl15_argument'}->checkNotNull();
if(!${'comment_srl15_argument'}->isValid()) return ${'comment_srl15_argument'}->getErrorMessage();
if(${'comment_srl15_argument'} !== null) ${'comment_srl15_argument'}->setColumnType('number');

${'module_srl16_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl16_argument'}->checkFilter('number');
${'module_srl16_argument'}->checkNotNull();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');

${'parent_srl17_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl17_argument'}->checkFilter('number');
${'parent_srl17_argument'}->ensureDefaultValue('0');
if(!${'parent_srl17_argument'}->isValid()) return ${'parent_srl17_argument'}->getErrorMessage();
if(${'parent_srl17_argument'} !== null) ${'parent_srl17_argument'}->setColumnType('number');

${'document_srl18_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl18_argument'}->checkFilter('number');
${'document_srl18_argument'}->checkNotNull();
if(!${'document_srl18_argument'}->isValid()) return ${'document_srl18_argument'}->getErrorMessage();
if(${'document_srl18_argument'} !== null) ${'document_srl18_argument'}->setColumnType('number');

${'is_secret19_argument'} = new Argument('is_secret', $args->{'is_secret'});
${'is_secret19_argument'}->ensureDefaultValue('N');
if(!${'is_secret19_argument'}->isValid()) return ${'is_secret19_argument'}->getErrorMessage();
if(${'is_secret19_argument'} !== null) ${'is_secret19_argument'}->setColumnType('char');

${'notify_message20_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message20_argument'}->ensureDefaultValue('N');
if(!${'notify_message20_argument'}->isValid()) return ${'notify_message20_argument'}->getErrorMessage();
if(${'notify_message20_argument'} !== null) ${'notify_message20_argument'}->setColumnType('char');

${'content21_argument'} = new Argument('content', $args->{'content'});
${'content21_argument'}->checkNotNull();
if(!${'content21_argument'}->isValid()) return ${'content21_argument'}->getErrorMessage();
if(${'content21_argument'} !== null) ${'content21_argument'}->setColumnType('bigtext');

${'voted_count22_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count22_argument'}->ensureDefaultValue('0');
if(!${'voted_count22_argument'}->isValid()) return ${'voted_count22_argument'}->getErrorMessage();
if(${'voted_count22_argument'} !== null) ${'voted_count22_argument'}->setColumnType('number');

${'blamed_count23_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count23_argument'}->ensureDefaultValue('0');
if(!${'blamed_count23_argument'}->isValid()) return ${'blamed_count23_argument'}->getErrorMessage();
if(${'blamed_count23_argument'} !== null) ${'blamed_count23_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password24_argument'} = new Argument('password', $args->{'password'});
if(!${'password24_argument'}->isValid()) return ${'password24_argument'}->getErrorMessage();
} else
${'password24_argument'} = NULL;if(${'password24_argument'} !== null) ${'password24_argument'}->setColumnType('varchar');

${'nick_name25_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name25_argument'}->checkNotNull();
if(!${'nick_name25_argument'}->isValid()) return ${'nick_name25_argument'}->getErrorMessage();
if(${'nick_name25_argument'} !== null) ${'nick_name25_argument'}->setColumnType('varchar');

${'user_id26_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id26_argument'}->ensureDefaultValue('');
if(!${'user_id26_argument'}->isValid()) return ${'user_id26_argument'}->getErrorMessage();
if(${'user_id26_argument'} !== null) ${'user_id26_argument'}->setColumnType('varchar');

${'user_name27_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name27_argument'}->ensureDefaultValue('');
if(!${'user_name27_argument'}->isValid()) return ${'user_name27_argument'}->getErrorMessage();
if(${'user_name27_argument'} !== null) ${'user_name27_argument'}->setColumnType('varchar');

${'member_srl28_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl28_argument'}->checkFilter('number');
${'member_srl28_argument'}->ensureDefaultValue('0');
if(!${'member_srl28_argument'}->isValid()) return ${'member_srl28_argument'}->getErrorMessage();
if(${'member_srl28_argument'} !== null) ${'member_srl28_argument'}->setColumnType('number');

${'email_address29_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address29_argument'}->checkFilter('email');
${'email_address29_argument'}->ensureDefaultValue('');
if(!${'email_address29_argument'}->isValid()) return ${'email_address29_argument'}->getErrorMessage();
if(${'email_address29_argument'} !== null) ${'email_address29_argument'}->setColumnType('varchar');

${'homepage30_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage30_argument'}->checkFilter('homepage');
${'homepage30_argument'}->ensureDefaultValue('');
if(!${'homepage30_argument'}->isValid()) return ${'homepage30_argument'}->getErrorMessage();
if(${'homepage30_argument'} !== null) ${'homepage30_argument'}->setColumnType('varchar');

${'uploaded_count31_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count31_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count31_argument'}->isValid()) return ${'uploaded_count31_argument'}->getErrorMessage();
if(${'uploaded_count31_argument'} !== null) ${'uploaded_count31_argument'}->setColumnType('number');

${'regdate32_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate32_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate32_argument'}->isValid()) return ${'regdate32_argument'}->getErrorMessage();
if(${'regdate32_argument'} !== null) ${'regdate32_argument'}->setColumnType('date');

${'last_update33_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update33_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update33_argument'}->isValid()) return ${'last_update33_argument'}->getErrorMessage();
if(${'last_update33_argument'} !== null) ${'last_update33_argument'}->setColumnType('date');

${'ipaddress34_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress34_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress34_argument'}->isValid()) return ${'ipaddress34_argument'}->getErrorMessage();
if(${'ipaddress34_argument'} !== null) ${'ipaddress34_argument'}->setColumnType('varchar');

${'list_order35_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order35_argument'}->ensureDefaultValue('0');
if(!${'list_order35_argument'}->isValid()) return ${'list_order35_argument'}->getErrorMessage();
if(${'list_order35_argument'} !== null) ${'list_order35_argument'}->setColumnType('number');

${'status36_argument'} = new Argument('status', $args->{'status'});
${'status36_argument'}->checkFilter('number');
${'status36_argument'}->checkNotNull();
if(!${'status36_argument'}->isValid()) return ${'status36_argument'}->getErrorMessage();
if(${'status36_argument'} !== null) ${'status36_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl15_argument'})
,new InsertExpression('`module_srl`', ${'module_srl16_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl17_argument'})
,new InsertExpression('`document_srl`', ${'document_srl18_argument'})
,new InsertExpression('`is_secret`', ${'is_secret19_argument'})
,new InsertExpression('`notify_message`', ${'notify_message20_argument'})
,new InsertExpression('`content`', ${'content21_argument'})
,new InsertExpression('`voted_count`', ${'voted_count22_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count23_argument'})
,new InsertExpression('`password`', ${'password24_argument'})
,new InsertExpression('`nick_name`', ${'nick_name25_argument'})
,new InsertExpression('`user_id`', ${'user_id26_argument'})
,new InsertExpression('`user_name`', ${'user_name27_argument'})
,new InsertExpression('`member_srl`', ${'member_srl28_argument'})
,new InsertExpression('`email_address`', ${'email_address29_argument'})
,new InsertExpression('`homepage`', ${'homepage30_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count31_argument'})
,new InsertExpression('`regdate`', ${'regdate32_argument'})
,new InsertExpression('`last_update`', ${'last_update33_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress34_argument'})
,new InsertExpression('`list_order`', ${'list_order35_argument'})
,new InsertExpression('`status`', ${'status36_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>