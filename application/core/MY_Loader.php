<?php

class MY_Loader extends CI_Loader {

	function __construct(argument){
		parent::__construct();
	}

	public function iface($strInterfaceName){
		require_once APPPATH . '/interfaces/' . $strInterfaceName . '.php';
	}
}




 ?>
