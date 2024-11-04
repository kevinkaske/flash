<?php
function flash($type, $message) {
	// create flash holder
	if(!isset($_SESSION['flash'])) {
		$_SESSION['flash'] = array();
	}
	// set the message
	if(!isset($_SESSION['flash'][$type])) {
		$_SESSION['flash'][$type] = '';
	}
	$_SESSION['flash'][$type] .= $message;
}

function unsetFlash() {
	if(isset($_SESSION['flash'])) {
		$_SESSION['flash'] = null;
	}
}

function getFlash($type) {
	if(isset($_SESSION['flash']) && isset($_SESSION['flash'][$type])) {
		$return_flash = $_SESSION['flash'][$type];
		$_SESSION['flash'][$type] = null;
		return $return_flash;
	}
	
	return null;
}

function isFlashMessage(){
	return isset($_SESSION['flash']);
}

function isFlashMessageType($type){
	return isset($_SESSION['flash'][$type]);
}
?>
