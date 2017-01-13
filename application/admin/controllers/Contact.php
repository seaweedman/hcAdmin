<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 客户留言
 */
class Contact extends MY_Controller {

    /**
     * 留言列表
     *
     */
	public function index() {
		// 加载url辅助类
		$this->load->helper('url_helper');
        // 留言表
        $this->load->model('contact_model');

        $data['list'] = $this->contact_model->get_list();

        $this->load->view('header.php');
		$this->load->view('contact/index', $data);
        $this->load->view('footer.php');
	}
}
