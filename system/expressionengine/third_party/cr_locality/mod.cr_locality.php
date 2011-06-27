<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cr_locality {

	var $return_data = '';
	var $settings = array(
		'expires'	=> '1',
		'domain'	=> 'igrow.clickrain.com'
		);
	
	function __construct()
	{
		$this->EE =& get_instance();
	}
	
	function locate_user()
	{
		$out_settings = array();
		foreach ($this->settings as $k => $v)
		{
			$out_settings[] = "'{$k}':'{$v}'";
		}
		$out_settings = '{"cr_locality":{"settings":{'.implode(',',$out_settings).'}}}';
		return '<script>'.$out_settings."\n\n".file_get_contents(PATH_THIRD.'cr_locality/javascript/cr_locality.js').'</script>';
	}

}

// END