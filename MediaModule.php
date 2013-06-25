<?php
/**
 * 
 * Media module for Group-Office.
 * This module can be used to keep track of your media items
 * 
 */
class GO_Media_MediaModule extends GO_Base_Module{
	
	public function autoInstall() {
		return false;
	}
	
	public function author() {
		return 'Wesley Smits';
	}

	public function authorEmail() {
		return 'wsmits@intermesh.nl';
	}	
}