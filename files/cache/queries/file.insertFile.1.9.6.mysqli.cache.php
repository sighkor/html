<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertFile");
$query->setAction("insert");
$query->setPriority("");

${'file_srl40_argument'} = new Argument('file_srl', $args->{'file_srl'});
${'file_srl40_argument'}->checkNotNull();
if(!${'file_srl40_argument'}->isValid()) return ${'file_srl40_argument'}->getErrorMessage();
if(${'file_srl40_argument'} !== null) ${'file_srl40_argument'}->setColumnType('number');

${'upload_target_srl41_argument'} = new Argument('upload_target_srl', $args->{'upload_target_srl'});
${'upload_target_srl41_argument'}->checkFilter('number');
${'upload_target_srl41_argument'}->ensureDefaultValue('0');
${'upload_target_srl41_argument'}->checkNotNull();
if(!${'upload_target_srl41_argument'}->isValid()) return ${'upload_target_srl41_argument'}->getErrorMessage();
if(${'upload_target_srl41_argument'} !== null) ${'upload_target_srl41_argument'}->setColumnType('number');
if(isset($args->sid)) {
${'sid42_argument'} = new Argument('sid', $args->{'sid'});
if(!${'sid42_argument'}->isValid()) return ${'sid42_argument'}->getErrorMessage();
} else
${'sid42_argument'} = NULL;if(${'sid42_argument'} !== null) ${'sid42_argument'}->setColumnType('varchar');

${'module_srl43_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl43_argument'}->checkFilter('number');
${'module_srl43_argument'}->ensureDefaultValue('0');
${'module_srl43_argument'}->checkNotNull();
if(!${'module_srl43_argument'}->isValid()) return ${'module_srl43_argument'}->getErrorMessage();
if(${'module_srl43_argument'} !== null) ${'module_srl43_argument'}->setColumnType('number');

${'source_filename44_argument'} = new Argument('source_filename', $args->{'source_filename'});
${'source_filename44_argument'}->checkNotNull();
if(!${'source_filename44_argument'}->isValid()) return ${'source_filename44_argument'}->getErrorMessage();
if(${'source_filename44_argument'} !== null) ${'source_filename44_argument'}->setColumnType('varchar');

${'uploaded_filename45_argument'} = new Argument('uploaded_filename', $args->{'uploaded_filename'});
${'uploaded_filename45_argument'}->checkNotNull();
if(!${'uploaded_filename45_argument'}->isValid()) return ${'uploaded_filename45_argument'}->getErrorMessage();
if(${'uploaded_filename45_argument'} !== null) ${'uploaded_filename45_argument'}->setColumnType('varchar');

${'file_size46_argument'} = new Argument('file_size', $args->{'file_size'});
${'file_size46_argument'}->ensureDefaultValue('0');
${'file_size46_argument'}->checkNotNull();
if(!${'file_size46_argument'}->isValid()) return ${'file_size46_argument'}->getErrorMessage();
if(${'file_size46_argument'} !== null) ${'file_size46_argument'}->setColumnType('number');

${'direct_download47_argument'} = new Argument('direct_download', $args->{'direct_download'});
${'direct_download47_argument'}->ensureDefaultValue('N');
${'direct_download47_argument'}->checkNotNull();
if(!${'direct_download47_argument'}->isValid()) return ${'direct_download47_argument'}->getErrorMessage();
if(${'direct_download47_argument'} !== null) ${'direct_download47_argument'}->setColumnType('char');
if(isset($args->comment)) {
${'comment48_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment48_argument'}->isValid()) return ${'comment48_argument'}->getErrorMessage();
} else
${'comment48_argument'} = NULL;if(${'comment48_argument'} !== null) ${'comment48_argument'}->setColumnType('varchar');

${'download_count49_argument'} = new Argument('download_count', $args->{'download_count'});
${'download_count49_argument'}->ensureDefaultValue('0');
if(!${'download_count49_argument'}->isValid()) return ${'download_count49_argument'}->getErrorMessage();
if(${'download_count49_argument'} !== null) ${'download_count49_argument'}->setColumnType('number');

${'member_srl50_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl50_argument'}->ensureDefaultValue('0');
if(!${'member_srl50_argument'}->isValid()) return ${'member_srl50_argument'}->getErrorMessage();
if(${'member_srl50_argument'} !== null) ${'member_srl50_argument'}->setColumnType('number');

${'is_cover51_argument'} = new Argument('is_cover', $args->{'is_cover'});
${'is_cover51_argument'}->ensureDefaultValue('N');
if(!${'is_cover51_argument'}->isValid()) return ${'is_cover51_argument'}->getErrorMessage();
if(${'is_cover51_argument'} !== null) ${'is_cover51_argument'}->setColumnType('char');

${'regdate52_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate52_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate52_argument'}->isValid()) return ${'regdate52_argument'}->getErrorMessage();
if(${'regdate52_argument'} !== null) ${'regdate52_argument'}->setColumnType('date');

${'ipaddress53_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress53_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress53_argument'}->isValid()) return ${'ipaddress53_argument'}->getErrorMessage();
if(${'ipaddress53_argument'} !== null) ${'ipaddress53_argument'}->setColumnType('varchar');

${'isvalid54_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid54_argument'}->ensureDefaultValue('N');
if(!${'isvalid54_argument'}->isValid()) return ${'isvalid54_argument'}->getErrorMessage();
if(${'isvalid54_argument'} !== null) ${'isvalid54_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`file_srl`', ${'file_srl40_argument'})
,new InsertExpression('`upload_target_srl`', ${'upload_target_srl41_argument'})
,new InsertExpression('`sid`', ${'sid42_argument'})
,new InsertExpression('`module_srl`', ${'module_srl43_argument'})
,new InsertExpression('`source_filename`', ${'source_filename44_argument'})
,new InsertExpression('`uploaded_filename`', ${'uploaded_filename45_argument'})
,new InsertExpression('`file_size`', ${'file_size46_argument'})
,new InsertExpression('`direct_download`', ${'direct_download47_argument'})
,new InsertExpression('`comment`', ${'comment48_argument'})
,new InsertExpression('`download_count`', ${'download_count49_argument'})
,new InsertExpression('`member_srl`', ${'member_srl50_argument'})
,new InsertExpression('`cover_image`', ${'is_cover51_argument'})
,new InsertExpression('`regdate`', ${'regdate52_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress53_argument'})
,new InsertExpression('`isvalid`', ${'isvalid54_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>