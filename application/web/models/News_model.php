<?php
class News_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得新闻一览
     */
    public function get_list() {
        $query = $this->db->get_where('news');
        return $query->result_array();
    }

    /**
     * 取得新闻信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('news', array('id'=>$id));

        return $query->row_array();
    }
}
?>
