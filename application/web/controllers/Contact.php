<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
		$this->load->model('company_model');

        $data['info'] = $this->company_model->get_info();
        $data['menu'] = 'contact';

        $this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
