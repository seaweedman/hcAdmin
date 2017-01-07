<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');
        // 加载产品model
		$this->load->model('product_model');

        $data['list'] = $this->product_model->get_list();

        $this->load->view('header');
		$this->load->view('products', $data);
		$this->load->view('footer');
	}
}
