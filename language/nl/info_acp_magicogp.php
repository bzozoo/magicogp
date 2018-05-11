<?php

/**
 *
 * Magic OGP parser. An extension for the phpBB Forum Software package.
 * [Dutch]
 *
 * @copyright (c) 2017, Ger, https://github.com/GerB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'MOGP_BLACKLIST'                 => 'Magic OGP zwarte lijst',
    'MOGP_BLACKLIST_EXPLAIN'         => 'Geplaatste links die in de URL een van de woorden in deze lijst bevatten, worden niet verwert door de Magic OGP extensie. Ieder woord moet op een nieuwe regel staan.',
    'MOGP_LOG_MISSING_SERVER_REQ'    => 'Magic OGP heeft cURL, libXML, DOMDocument en DOMXPath nodig om de inhoud van geplakte links op te halen. Minstens een onderdeel mist, waardoor de extensie niet werkt.',
    'MOGP_MISSING_REQUIREMENTS'      => 'De extensie heeft cURL, libXML, DOMDocument en DOMXPath nodig om de inhoud van geplakte links op te halen. Minstens een onderdeel mist, waardoor de extensie niet geïnstalleerd kan worden.',
    'MOGP_SETTING_SAVED'            => 'Magic OGP instellingen opgeslagen',
    'MOGP_SETTINGS_TITLE'            => 'Magic OGP instellingen',
		));    