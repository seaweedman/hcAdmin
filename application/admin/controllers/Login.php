<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
        // 加载url辅助类
        $this->load->helper('url_helper');

		$this->load->view('login');
	}

    /**
     * 登录检查
     */
	public function check() {
		$this->load->helper('url');
		$this->load->model('admin');

        // 用户名
		$username = $_POST['username'];
		// 密码
		$password = $_POST['password'];

		$info = $this->admin->get_admin($username);

		if (empty($info)) {
			echo '有可能是密码错了，也有可能是用户名错了，也有可能都错了';
			die();
		}

		if ($info['password'] == $password) { // 密码正确
			redirect('Welcome/index');
		} else {
			echo '有可能是密码错了，也有可能是用户名错了，也有可能都错了';
			die();
		}
	}
}
