<?php
class System extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 保存公司信息
     */
    public function sava_info($img_url) {
        $data['summary'] = $_POST['summary'];
        $data['img_url'] = $img_url;
        $data['content'] = $_POST['content'];
        $data['address'] = $_POST['address'];
        $data['mobile'] = $_POST['mobile'];
        $data['mail'] = $_POST['mail'];
        $data['products_content'] = $_POST['products_content'];

        return $this->db->update('company', $data, array('id'=>1));
    }

    /**
     * 取得公司信息
     */
    public function get_info() {
        $query = $this->db->get_where('company', array('id'=>1));

        return $query->row_array();
    }
}
?>
