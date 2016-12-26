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
     * 新增新闻信息
     */
    public function sava_info($img_url) {
        $data['title'] = $_POST['title'];
        $data['img_url'] = $img_url;
        $data['summary'] = $_POST['summary'];
        $data['content'] = $_POST['content'];
        $data['create_time'] = date('Y-m-d H:i:s', time());
        return $this->db->insert('news', $data);
    }

    /**
     * 修改新闻信息
     */
    public function update_info($img_url, $id) {
        $data['title'] = $_POST['title'];
        $data['img_url'] = $img_url;
        $data['summary'] = $_POST['summary'];
        $data['content'] = $_POST['content'];
        $data['create_time'] = date('Y-m-d H:i:s', time());
        return $this->db->update('news', $data, array('id'=>$id));
    }

    /**
     * 取得新闻信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('news', array('id'=>$id));

        return $query->row_array();
    }

    /**
     * 删除新闻
     */
    public function del_info($id) {
        $this->db->delete('news', array('id'=>$id));
    }
}
?>
