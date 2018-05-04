<?php

if(!defined('__XE__'))
	exit();

/**
 * @file counter_ex.addon.php
 * @author KnDol (kndol@kndol.net)
 * @brief Extended Version of the XE Counter Add-on
 */


// Execute if called_position is before_display_content
if($called_position == 'before_module_init' && Context::get('module') != 'admin' && Context::getResponseMethod() == 'HTML' && Context::isInstalled())
{
	// User-agent counting control
	$exclude_uagent = trim($addon_info->exclude_uagent);
	$exclude_addr   = trim($addon_info->exclude_addr);
	$uagent         = removeHackTag($_SERVER["HTTP_USER_AGENT"]);
	
	require_once($addon_path.'counter_ex.lib.php');
	if($addon_info->exclude_bot == 'yes' && (isCrawler() || isBot($uagent)))		return;
	if($exclude_uagent && preg_match("/$exclude_uagent/i", $uagent))				return;
	if($exclude_addr   && preg_match("/$exclude_addr/i", $_SERVER["REMOTE_ADDR"]))	return;

	// Administrator counting control
	if($logged_info->is_admin == "Y" && $addon_info->admin != "yes") return;

	$oCounterController = getController('counter');
	$oCounterController->counterExecute();
}

/* End of file counter_ex.addon.php */
/* Location: ./addons/counter_ex/counter_ex.addon.php */
