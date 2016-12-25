<?php
class Admin extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得密码
     */
    public function get_admin($username) {
        $query = $this->db->get_where('admin', array('username'=>$username));
        return $query->row_array();
    }
}
?>
