<?php
class Contact_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 保存留言
     */
    public function add_message($data) {
        return $this->db->insert('contact', $data);
    }

    /**
     * 留言列表
     */
    public function get_list() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('contact');
        return $query->result_array();
    }
}
?>
