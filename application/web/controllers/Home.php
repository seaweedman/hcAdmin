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
		$this->load->library('session');

        // 初始化返回数组
		$return['flag'] = 1;

        if (empty($_SESSION['times']) && $_SESSION['times'] != 0) {
            $_SESSION['times'] = 0;
		}

		if ($_SESSION['times'] >= 10) {
			$return['flag'] = 0;
            $return['msg'] = '留言过于频繁请稍后再发';
		} else {
			// 手机号
			$data['mobile'] = $_POST['mobile'];
			// 邮箱
			$data['mail'] = $_POST['mail'];
			// 内容
			$data['content'] = $_POST['content'];
			// 当前时间
			$data['create_time'] = date('Y-m-d H:i:s', time());

			// 保存内容
			$res = $this->contact_model->add_message($data);

			if (empty($res)) {
				$return['flag'] = 0;
				$return['msg'] = '留言失败！';
			}
		}

        $_SESSION['times'] ++;

		echo json_encode($return);
	}
}
