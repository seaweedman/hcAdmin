<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * My_Controller
 **/
class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();

        $this->load->helper('url');
		$this->load->library('session');

		if (empty($_SESSION['admin_id'])) {
			redirect('Login/index');
		}
	}
}
