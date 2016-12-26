<?php
class ad_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得新闻一览
     */
    public function get_list() {
        $query = $this->db->get_where('ad');
        return $query->result_array();
    }

    /**
     * 新增新闻信息
     */
    public function sava_info() {
        $data['title'] = $_POST['title'];
        $data['summary'] = $_POST['summary'];
        return $this->db->insert('ad', $data);
    }

    /**
     * 修改新闻信息
     */
    public function update_info($id) {
        $data['title'] = $_POST['title'];
        $data['summary'] = $_POST['summary'];
        return $this->db->update('ad', $data, array('id'=>$id));
    }

    /**
     * 取得新闻信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('ad', array('id'=>$id));

        return $query->row_array();
    }

    /**
     * 删除新闻
     */
    public function del_info($id) {
        $this->db->delete('ad', array('id'=>$id));
    }
}
?>
