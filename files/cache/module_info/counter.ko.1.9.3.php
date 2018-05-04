<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispCounterAdminIndex';
$info->permission = new stdClass;
$info->permission->getWeeklyUniqueVisitor = 'manager';
$info->permission->getWeeklyPageView = 'manager';
$info->action = new stdClass;
$info->action->dispCounterAdminIndex = new stdClass;
$info->action->dispCounterAdminIndex->type='view';
$info->action->dispCounterAdminIndex->grant='guest';
$info->action->dispCounterAdminIndex->standalone='true';
$info->action->dispCounterAdminIndex->ruleset='';
$info->action->dispCounterAdminIndex->method='';
$info->action->dispCounterAdminIndex->check_csrf='true';
$info->action->procCounterExecute = new stdClass;
$info->action->procCounterExecute->type='controller';
$info->action->procCounterExecute->grant='guest';
$info->action->procCounterExecute->standalone='true';
$info->action->procCounterExecute->ruleset='';
$info->action->procCounterExecute->method='';
$info->action->procCounterExecute->check_csrf='true';
$info->action->getWeeklyUniqueVisitor = new stdClass;
$info->action->getWeeklyUniqueVisitor->type='model';
$info->action->getWeeklyUniqueVisitor->grant='guest';
$info->action->getWeeklyUniqueVisitor->standalone='true';
$info->action->getWeeklyUniqueVisitor->ruleset='';
$info->action->getWeeklyUniqueVisitor->method='';
$info->action->getWeeklyUniqueVisitor->check_csrf='true';
$info->action->getWeeklyPageView = new stdClass;
$info->action->getWeeklyPageView->type='model';
$info->action->getWeeklyPageView->grant='guest';
$info->action->getWeeklyPageView->standalone='true';
$info->action->getWeeklyPageView->ruleset='';
$info->action->getWeeklyPageView->method='';
$info->action->getWeeklyPageView->check_csrf='true';
return $info;