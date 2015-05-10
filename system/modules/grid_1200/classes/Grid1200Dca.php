<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2015 Leo Feyer
 *
 * @copyright  Hamid Abbaszadeh 2015 <http://respinar.org>
 * @author     Hamid Abbaszadeh (respinar)
 * @package    grid_1200
 * @license    GPL-v3
 * @filesource
 * @see        https://github.com/respinar/contao_1200
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Grid1200;

/**
 * Class Grid1140Dca for Hook loadDataContainer
 * @author Data
 *
 */
class Grid1200Dca extends \BackendModule
{
	 /**
    * Current object instance
    * @var object
    */
    protected static $instance = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();
    }


    protected function compile()
    {

    }

    /**
     * Return the current object instance (Singleton)
     * @return Grid1140Dca
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new Grid1200Dca();
        }

        return self::$instance;
    }

    /**
     * Hook loadDataContainer
     * @param string $strName    dca
     */
    public function loadDataContainerGrid1200($strName)
    {
    	if ($strName == 'tl_layout')
    	{
    		//add the new css files
    		array_push($GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'], 'grid-1200-12-ltr.css', 'grid-1200-12-rtl.css', 'grid-1200-12-ltr-wrapper.css', 'grid-1200-12-rtl-wrapper.css');
    	}
        if ($strName == 'tl_page')
        {
            //Alias Name anzeigen in Seitenstruktur, just4fun
        	$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'] = array('title','alias');
            $GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color:#b3b3b3;padding-left:3px">[%s]</span>';
        }
    }

}
