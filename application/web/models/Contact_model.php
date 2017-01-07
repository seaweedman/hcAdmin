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
}
?>
