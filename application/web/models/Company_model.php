<?php
class Company_model extends CI_Model {
    public function __construct() {
        $this->load->database();
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
