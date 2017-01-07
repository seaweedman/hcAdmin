<?php
class ad_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * 取得广告一览
     */
    public function get_list() {
        $query = $this->db->get_where('ad');
        return $query->result_array();
    }

    /**
     * 新增广告信息
     */
    public function sava_info($img_url) {
        $data['title'] = $_POST['title'];
        $data['summary'] = $_POST['summary'];
        $data['img_url'] = $img_url;
        return $this->db->insert('ad', $data);
    }

    /**
     * 修改广告信息
     */
    public function update_info($img_url, $id) {
        $data['title'] = $_POST['title'];
        $data['img_url'] = $img_url;
        $data['summary'] = $_POST['summary'];
        return $this->db->update('ad', $data, array('id'=>$id));
    }

    /**
     * 取得广告信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('ad', array('id'=>$id));

        return $query->row_array();
    }

    /**
     * 删除广告
     */
    public function del_info($id) {
        $this->db->delete('ad', array('id'=>$id));
    }
}
?>
