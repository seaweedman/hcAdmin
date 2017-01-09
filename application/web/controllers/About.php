<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
		// 公司表
		$this->load->model('company_model');

        $data['info'] = $this->company_model->get_info();

        $data['menu'] = 'about';

        $this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}
