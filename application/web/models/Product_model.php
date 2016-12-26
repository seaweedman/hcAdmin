<?php
class Product_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得产品一览
     */
    public function get_list() {
        $query = $this->db->get_where('product');
        return $query->result_array();
    }

    /**
     * 取得产品信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('product', array('id'=>$id));

        return $query->row_array();
    }
}
?>
