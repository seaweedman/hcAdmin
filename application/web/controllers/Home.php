<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
        $this->load->model('company_model');
		$this->load->model('product_model');
		$this->load->model('news_model');
		$this->load->model('ad_model');

        // 公告列表
		$data['ads'] = $this->ad_model->get_list();
        // 公司信息
		$data['company'] = $this->company_model->get_info();
        // 产品列表
		$data['products'] = $this->product_model->get_list();
		// 新闻消息
		$data['news'] = $this->news_model->get_list();

		$this->load->view('home', $data);
	}
}
