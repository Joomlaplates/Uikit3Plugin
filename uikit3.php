<?php defined('_JEXEC') or die;
/**
 * @Plugin for UIkit 3 Framework
 * @author Joomlaplates
 * @copyright (C) 2021 - Joomlaplates
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
class plgSystemuikit3 extends JPlugin {
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	function onAfterInitialise() {

		$document = JFactory::getDocument();
		
			$document->addStyleSheet('plugins/system/uikit3/css/uikit.css',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
			$document->addScript('plugins/system/uikit3/js/uikit.js',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
			$document->addScript('plugins/system/uikit3/js/uikit-icons.js',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
			
			
			


	}
}

