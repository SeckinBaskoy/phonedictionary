<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emailsettings_model extends SB_Model{

	public function __construct() {
		parent::__construct();
		$this->tableName="email_settings";
	}


}