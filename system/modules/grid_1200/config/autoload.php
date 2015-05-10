<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2014 Leo Feyer
 *
* @copyright  Hamid Abbaszadeh 2015 <http://respinar.org>
 * @author     Hamid Abbaszadeh (respinar)
 * @package    grid_1200
 * @license    GPL-v3
 * @filesource
 * @see        https://github.com/respinar/contao_1200
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Grid1200',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Grid1200\Grid200Dca' => 'system/modules/grid_1200/classes/Grid1200Dca.php',
));
