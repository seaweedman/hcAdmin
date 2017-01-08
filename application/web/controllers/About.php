<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');

        $this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
}
