<?php
/**
*
* External Links Open in New Window [English]
*
* @copyright (c) 2015 Rich McGirr
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'ELONW'	=> 'Opens in new window',
	'EXTENSION_REQUIREMENTS'	=> 'Deze extensie vereist een phpBB-versie %1$s.<br>Controleer welke versie u heeft en update dienovereenkomstig om deze extensie te gebruiken.',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Doneer met PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Koop als dank voor het maken van deze extensie een biertje voor mij',
	'BUY_ME_A_BEER_SHORT'		=> 'Doe een donatie voor deze extentie',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Deze extensie is volledig gratis. Het is een project waar ik mijn tijd aan besteed voor het plezier en gebruik van de phpBB-gemeenschap. Als u deze extensie graag gebruikt, of als uw forum er baat bij heeft gehad, overweeg dan alstublieft <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">een biertje voor mij te kopen</a>. Het zou zeer gewaardeerd worden. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
