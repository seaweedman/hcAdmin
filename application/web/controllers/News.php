<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    /**
     * 新闻列表
     */
	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
        // 新闻表
		$this->load->model('news_model');

        $data['list'] = $this->news_model->get_list();
		$data['menu'] = 'news';

        $this->load->view('header', $data);
		$this->load->view('news');
		$this->load->view('footer');
	}

	/**
	 * 新闻详情
	 */
	public function info($id) {
		// 加载url辅助类
		$this->load->helper('url_helper');
		// 加载产品model
		$this->load->model('news_model');

		$data['info'] = $this->news_model->get_info($id);
		$data['menu'] = 'news';

		$this->load->view('header', $data);
		$this->load->view('info');
		$this->load->view('footer');
	}
}
