<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $assets;

	public function __construct() {

		parent::__construct();

		 $this->assets = base_url().  'assets/';

		 $data = new \stdClass();
		 $data->assets = $this->assets;

		 $this->load->vars($data);
	}
}