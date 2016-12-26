<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 公共类库
 */
class Common {

    /**
     * 成功返回
     */
    public function success($message=null, $url=null) {
        $CI =& get_instance();

        // 成功标识
        $data['flag'] = 1;

        if ($message == null) { // 设置信息默认值
            $data['message'] = '操作成功';
        } else {
            $data['message'] = $message;
        }

        if ($url == null) { // 设置跳转默认路径（返回上一页）
            $data['url'] = $_SERVER['HTTP_REFERER'];
        }

        $CI->load->view('jump', $data);

        $CI->output->_display();
        die();
    }

    /**
     * 失败返回
     */
    public function false($message=null, $url=null) {
        $CI =& get_instance();

        // 失败标识
        $data['flag'] = 0;

        if ($message == null) { // 设置信息默认值
            $data['message'] = '操作成功';
        } else {
            $data['message'] = $message;
        }

        if ($url == null) { // 设置跳转默认路径（返回上一页）
            $data['url'] = $_SERVER['HTTP_REFERER'];
        }

        $CI->load->view('jump', $data);

        $CI->output->_display();
        die();
    }
}
