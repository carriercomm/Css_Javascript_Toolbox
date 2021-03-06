<?php
/**
 * css_javascript_toolbox Plugin 
 * 
 * @package blesta
 * @subpackage blesta.plugins.CssJavascriptToolbox
 * @copyright Copyright (c) 2005, Naja7host SARL.
 * @link http://www.naja7host.com/ Naja7host
 */
 
class CssJavascriptToolboxController extends AppController {
	/**
	 * Setup
	 */
	public function preAction() {
		$this->structure->setDefaultView(APPDIR);
		parent::preAction();
		
		// Override default view directory
		$this->view->view = "default";
		$this->orig_structure_view = $this->structure->view;
		$this->structure->view = "default";
	}
}
?>