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
     * 新增产品信息
     */
    public function sava_info($img_url) {
        $data['title'] = $_POST['title'];
        $data['img_url'] = $img_url;
        $data['summary'] = $_POST['summary'];
        $data['content'] = $_POST['content'];
        $data['create_time'] = date('Y-m-d H:i:s', time());
        return $this->db->insert('product', $data);
    }

    /**
     * 修改产品信息
     */
    public function update_info($img_url, $id) {
        $data['title'] = $_POST['title'];
        $data['img_url'] = $img_url;
        $data['summary'] = $_POST['summary'];
        $data['content'] = $_POST['content'];
        $data['create_time'] = date('Y-m-d H:i:s', time());
        return $this->db->update('product', $data, array('id'=>$id));
    }

    /**
     * 取得产品信息
     */
    public function get_info($id) {
        $query = $this->db->get_where('product', array('id'=>$id));

        return $query->row_array();
    }

    /**
     * 删除产品
     */
    public function del_info($id) {
        $this->db->delete('product', array('id'=>$id));
    }
}
?>
