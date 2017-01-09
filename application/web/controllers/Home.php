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
		// 企业宣传
		$data['center'] = $this->ad_model->get_one();
		$data['menu'] = 'home';

        $this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function message() {
		// 产品表
		$this->load->model('contact_model');

		// 手机号
		$data['mobile'] = $_POST['mobile'];
		// 邮箱
		$data['mail'] = $_POST['mail'];
		// 内容
		$data['content'] = $_POST['content'];
		// 当前时间
		$data['create_time'] = date('Y-m-d H:i:s', time());

		// 保存内容
		$this->contact_model->add_message($data);
	}
}
