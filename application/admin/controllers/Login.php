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
		$this->load->library('common');
		$this->load->library('session');

        // 帐号
		$username = $_POST['username'];
		// 密码
		$password = $_POST['password'];

		if (empty($_POST['username'])) {
			$this->common->false('帐号不能为空');
		}
		if (empty($_POST['password'])) {
			$this->common->false('密码不能为空');
		}

		$info = $this->admin->get_admin($username);

		if (empty($info)) {
			$this->common->false('帐号或密码错误');
		}

		if ($info['password'] == $password) { // 密码正确
			$_SESSION['admin_id'] = $info['id'];
			redirect('Welcome/index');
		} else {
			$this->common->false('帐号或密码错误');
		}
	}

	/**
	 * 退出登录
	 */
	public function logout() {
        $this->load->library('common');
		$this->load->library('session');

		session_destroy();

		$this->common->success('退出成功');
	}
}
