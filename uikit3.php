<?php
// no direct access
defined( '_JEXEC' ) or die;

class plgSystemuikit3 extends JPlugin
{
	/**
	 * Load the language file on instantiation. Note this is only available in Joomla 3.1 and higher.
	 * If you want to support 3.0 series you must override the constructor
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * Plugin method with the same name as the event will be called automatically.
	 */
	 function onBeforeCompileHead()
	 {
		$document = JFactory::getDocument();

		if($this->params->get('uikit') == 1) {
			$document->addStyleSheet('media/uikit3/css/uikit.css',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
			$document->addScript('media/uikit3/js/uikit.min.js',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
			$document->addScript('media/uikit3/js/uikit-icons.min.js',array('version' => 'auto', 'relative' => true), array('defer' => 'defer'));
		}
		else {
			$document->addStyleSheet('https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css');
			$document->addScript('https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js');
			$document->addScript('https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js');
		}
		return true;
	}
}
?>