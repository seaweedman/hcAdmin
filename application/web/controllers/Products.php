<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * 产品列表
     */
	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
        // 加载产品model
		$this->load->model('product_model');

        $data['list'] = $this->product_model->get_list();
		$data['menu'] = 'products';

        $this->load->view('header', $data);
		$this->load->view('products');
		$this->load->view('footer');
	}

	/**
	 * 产品详情
	 */
	public function info($id) {
		// 加载url辅助类
		$this->load->helper('url_helper');
		// 加载产品model
		$this->load->model('product_model');

        $data['info'] = $this->product_model->get_info($id);
		$data['menu'] = 'products';

		$this->load->view('header', $data);
		$this->load->view('info');
		$this->load->view('footer');
	}
}
