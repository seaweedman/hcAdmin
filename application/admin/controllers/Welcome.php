<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index() {
		// 加载url辅助类
		$this->load->helper('url_helper');

		$this->load->view('welcome_message');
	}

	public function helo() {
		$this->load->view('helo');
	}
}
