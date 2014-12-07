<?php

namespace Hivefive\CFlasher;

/**
*  A utility class for creating flash messages
*
* @package CFlasher
*/

class CFlasher {

	/*
	* Properties
	*/
	public $valid = array(); // Valid forms of flash messages
	
	public function __construct() {
	
		$this->valid = ['info', 'success', 'error', 'warning'];
	
	}

	/*
	* Set type and message
	* @param string $type type of flash message
	* @param string $message message content
	* @return true
	*/
	public function setMessage($type = 'info', $message = NULL) {
	
		if(!isset($_SESSION['flash'])) {
			$_SESSION['flash'] = array();
		}
		
		//Check if $type is in $valid array
		if(!in_array($type, $this->valid)) {
			$type = $this->valid[0];
		}
		
		if(!isset($message)) {
			$message = "This is an info message";
		}
		
		$_SESSION['flash']['type'] = $type;
		$_SESSION['flash']['message'] = $message;
		
		return true;
	}
	
	/*
	* Get message
	*
	* @return $type and $message through $flash array
	*/
	public function getMessage() {
		
		$flash = array();
		$flash['type'] = $_SESSION['flash']['type'];
		$flash['message'] = $_SESSION['flash']['message'];
		
		return $flash;
	}
	
	/*
	* Clear the session from the flash array
	*
	* @return true
	*/
	public function clearFlash() {
		
		unset($_SESSION['flash']);
		$_SESSION['flash'] = array();
		return true;
		
	}
}