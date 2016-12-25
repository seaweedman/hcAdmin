<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 公司概况
 */
class Company extends CI_Controller {

    /**
     * 公司概况详情
     *
     */
	public function index() {
		// 加载url辅助类
		$this->load->helper('url_helper');

        $data['error'] = '';

        $this->load->view('header.php');
		$this->load->view('company/index', $data);
        $this->load->view('footer.php');
	}

    /**
     * 保存修改
     */
    public function data_save() {
        $this->load->library('common');
        $this->common->success();
        // $this->load->helper('url');
        // // 公司简介
        // $summary = $_POST['summary'];
        // // 详细内容
        // $content = $_POST['content'];
        //
        // // 文件类型
        // $file_type = $_FILES["img"]["type"];
        //
        // // 上传图片
        // if ((($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/pjpeg")) && ($_FILES["img"]["size"] < 50000)) {
        //     if ($file_type == "image/gif") {
        //         $name = time().'.gif';
        //     } elseif ($file_type == "image/jpeg") {
        //         $name = time().'.jpg';
        //     } elseif (($file_type == "image/pjpeg")) {
        //         $name = time().'.png';
        //     } else {
        //         // TODO:
        //     }
        //     move_uploaded_file($_FILES["img"]["tmp_name"], "upload/" . $name);
        // }

    }
}
