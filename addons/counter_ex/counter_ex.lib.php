<?php
/**
 * @file counter_ex.lib.php
 * @author KnDol (kndol@kndol.net)
 * @brief 알려진 봇 검출 라이브러리
 */

if(!defined('__XE__')) exit();

/**
 * @brief Return information of knwon bots
 */
function getKnownBots()
{
	static $KnownBots;
	if ($KnownBots) return $KnownBots;
	
	$bots = array();
	if (($handle = fopen($addon_path."/Bots.csv", "r")) !== false)
	{
		while (($data = fgetcsv($handle, 1000, ",")) !== false)
		{
			$num = count($data);
			if ($num == 2) $bots[$data[0]] = $data[1];
		}
		fclose($handle);
	}
	
	$KnownBots = $bots;

	return $bots;
}

function isBot($uagent)
{
	static $KnownBots;
	if (!$KnownBots) $KnownBots = getKnownBots();
	
	foreach ($KnownBots as $strBot => $strDesc)
	{
		if ( stripos($uagent, $strBot) !== false )
			return true;
	}
	if ( $addon_info->treat_msie6_bot != no && strstr($uagent, 'MSIE 6.0') !== false )
		return true;
	if ( $addon_info->treat_moz5_bot != no && $uagent == 'Mozilla/5.0' )
		return true;
	if ( strstr($uagent, 'SocialXE ClientBot') === false
		&& (preg_match('/(bot|spider|crawler)/i',$uagent)
		|| strstr($uagent, 'MSIE or Firefox mutant; not on Windows server;') !== false) )
		return true;

	return false;
}

/* !End of file */