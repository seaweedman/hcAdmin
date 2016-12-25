<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 新闻动态
 */
class News extends CI_Controller {

    /**
     * 新闻动态列表
     *
     */
	public function index() {
		// 加载url辅助类
		$this->load->helper('url_helper');

        $this->load->view('header.php');
		$this->load->view('news/index');
        $this->load->view('footer.php');
	}
}
