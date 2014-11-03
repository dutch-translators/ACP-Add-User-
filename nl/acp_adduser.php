<?php
/**
* 
* @copyright (c) 201 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'Het gebruikersaccount is aangemaakt. The user may now login with the username and password sent to the email address you provided.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Het gebruikersaccount is aangemaakt. Echter, de foruminstellingen vereisen dat de gebruiker het account zelf activeert.<br />An activation key has been sent to the email address you provided for the user.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Het gebruikersaccount is aangemaakt. Echter, de foruminstellingen vereisen dat het account wordt geactiveerd door een beheerder.<br />An email has been sent to the Administrators and the user will be informed when their account has been activated',
	'ACP_ADD_USER'				=> 'ACP Gebruiker Toevoegen',
	'ACP_ADMIN_ACTIVATE'		=> 'An email will be dispatched to an Administrator for account activation, alternatively you may check the activate account box below to activate the account instantly once created. The user will receive an email containing account login details.',
	'ACP_EMAIL_ACTIVATE'		=> 'Wanneer het account is aangemaakt, zal de gebruiker een e-mail ontvangen met daarin een activatie link om de account te activeren.',
	'ACP_INSTANT_ACTIVATE'		=> 'Het account zal meteen geactiveerd worden. De gebruiker zal een e-mail ontvangen met daarin zijn account details..',

	'ADD_USER'					=> 'Gebruiker toevoegen',
	'ADD_USER_EXPLAIN'			=> 'Een nieuw gebruikersaccount aanmaken. Als je %saccount-activatie instellingen%s ingesteld zijn op "door beheerder", dan heb je de optie om het gebruikersaccount meteen te activeren.',
	'MOD_VERSION'				=> 'Versie %s',
	'ADMIN_ACTIVATE'			=> 'Activeer gebruikersaccount',
	'CONFIRM_PASSWORD'			=> 'Bevestig wachtwoord',
	'EDIT_USER_GROUPS'			=> '%sKlik hier om de gebruikersgroep voor deze gebruiker te wijzigen%s',
	'GROUP_ADD'					=> 'Als je hier een groep selecteert, wordt het gebruikersaccount aan de geselecteerde groep toegevoegd evenals aan de geregistreerde gebruikersgroep',

	'CONTINUE_EDIT_USER'		=> '%1$sKlik hier om %2$s’s profiel te beheren%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD'					=> 'Wachtwoord',
	'PASSWORD_EXPLAIN'			=> 'Als je hier een wachtwoord opgeeft, dan zal er geen automatische gegenereerd worden.',
));
