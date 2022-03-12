<?php defined('_JEXEC') or die;
/**
 * @Plugin for UIkit 3 Framework
 * @version 3.5.16
 * @author Theme-Point powered by Joomlaplates
 * @copyright (C) 2010- Theme-Point powered by Joomlaplates
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
class plgSystemuikit3 extends JPlugin {
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	function onAfterInitialise() {

		$document = JFactory::getDocument();

		if($this->params->get('uikit') == 1) {
			$document->addStyleSheet("media/uikit3/css/uikit.css", array(), array('async'=>'async'));
			$document->addScript("media/uikit3/js/uikit.min.js", array(), array('async'=>'async'));
			$document->addScript("media/uikit3/js/uikit-icons.min.js", array(), array('async'=>'async'));
		}
		else {
			$document->addStyleSheet('https://cdn.jsdelivr.net/gh/Joomlaplates/uikit3plugin@795e84ad5b13e35521786c93a14f1fe15099d869/css/uikit.css');
			$document->addScript('https://cdn.jsdelivr.net/gh/Joomlaplates/uikit3plugin@cd26a56e5637a91dcd88e5d5c82bd52f07ac1c0e/js/uikit.min.js');
			$document->addScript('https://cdn.jsdelivr.net/gh/Joomlaplates/uikit3plugin@cd26a56e5637a91dcd88e5d5c82bd52f07ac1c0e/js/uikit-icons.min.js');
		}

	}
}


