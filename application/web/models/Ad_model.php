<?php
class ad_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得公告一览
     */
    public function get_list() {
        $query = $this->db->get_where('ad', 'id<>1');
        return $query->result_array();
    }

    /**
     * 取得公告信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('ad', array('id'=>$id));

        return $query->row_array();
    }

    /**
     * 取得企业宣传
     */
    public function get_one() {
        $query = $this->db->get_where('ad', 'id=1');

        return $query->row_array();
    }
}
?>
