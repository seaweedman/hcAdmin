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
        // 加载company模型
        $this->load->model('system');

        $data['info'] = $this->system->get_info();

        $this->load->view('header.php');
		$this->load->view('company/index', $data);
        $this->load->view('footer.php');
	}

    /**
     * 保存修改
     */
    public function data_save() {
        // 引入公共类
        $this->load->library('common');
        // url辅助函数
        $this->load->helper('url');
        // 加载company模型
        $this->load->model('system');

        // 上传文件类型
        $file_type = $_FILES["img"]["type"];

        if (empty($_POST['summary'])) {
            $this->common->false('公司简介不能为空');
        }
        if (empty($_POST['content'])) {
            $this->common->false('详细内容不能为空');
        }
        if (empty($_FILES['img'])) {
            $this->common->false('图片不能为空');
        }

        if (!empty($_POST['img_url']) && strstr($_POST['img_url'], 'upload/')) {
            $img_url = $_POST['img_url'];
        } else {
            // 上传图片
            if ((($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png"))) {
                if ($file_type == "image/gif") {
                    $name = time().'.gif';
                } elseif ($file_type == "image/jpeg") {
                    $name = time().'.jpg';
                } elseif (($file_type == "image/png")) {
                    $name = time().'.png';
                } else {
                    $this->common->false('图片不正确');
                }
                move_uploaded_file($_FILES["img"]["tmp_name"], "upload/" . $name);
            } else {
                $this->common->false('文件格式不正确或过大');
            }

            $img_url = "upload/" . $name;
        }

        // 保存公司信息
        $res = $this->system->sava_info($img_url);

        if ($res !== false) {
            $this->common->success('保存成功');
        } else {
            $this->common->false('保存失败');
        }
    }
}
