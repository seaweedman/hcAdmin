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
        $this->load->model('news_model');

        // 新闻列表
        $data['list'] = $this->news_model->get_list();

        $this->load->view('header.php');
		$this->load->view('news/index', $data);
        $this->load->view('footer.php');
	}

    /**
     * 编辑新闻
     */
    public function edit_news($id=0) {
        // 加载url辅助类
        $this->load->helper('url_helper');
        $this->load->model('news_model');

        $this->load->view('header.php');

        if (!empty($id)) {
            $data['info'] = $this->news_model->get_info($id);
            $this->load->view('news/edit_news', $data);
        } else {
            $this->load->view('news/edit_news');
        }

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
        $this->load->model('news_model');

        // 新闻ID
        $id = $_POST['id'];

        // 上传文件类型
        $file_type = $_FILES["img"]["type"];

        if (empty($_POST['title'])) {
            $this->common->false('标题不能为空');
        }
        if (empty($_POST['summary'])) {
            $this->common->false('简介不能为空');
        }
        if (empty($_POST['content'])) {
            $this->common->false('图文详情能为空');
        }
        if (empty($_FILES['img'])) {
            $this->common->false('展示图不能为空');
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

        // 保存新闻
        if (empty($id)) {
            $res = $this->news_model->sava_info($img_url);
        } else {
            $res = $this->news_model->update_info($img_url, $id);
        }

        if ($res !== false) {
            $this->common->success('保存成功');
        } else {
            $this->common->false('保存失败');
        }
    }

    /**
     * 删除新闻
     */
    public function del_news($id=0) {
        // 加载公共类
        $this->load->library('common');
        // 加载model类
        $this->load->model('news_model');

        $res = $this->news_model->del_info($id);

        if ($res !== false) {
            $this->common->success('删除成功');
        } else {
            $this->common->false('删除失败');
        }
    }
}
