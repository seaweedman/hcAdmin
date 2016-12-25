<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 公共类库
 */
class Common {

    /**
     * 成功返回
     */
    public function success() {
        $CI =& get_instance();

        $CI->load->view('success');
    }

    /**
     * 失败返回
     */
    public function false() {

    }
}
