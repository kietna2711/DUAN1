<?php
class Blog extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }

    public function getALLBlog() {
        $sql = "SELECT * FROM blog_post";
        return $this->db->getAll($sql);
    }

    // public function getOneIdBlog($blog_post_id) {
    //     $sql = "SELECT * FROM blog_post WHERE blog_post_id = ?";
    //     return $this->db->getOne($sql, [$blog_post_id]);
    // }
    public function getOneIdBlog($blog_post_id) {
        $sql = "SELECT * FROM blog_post WHERE blog_post_id = " .$blog_post_id;
        return $this->db->getOne($sql, [$blog_post_id]);
    }
    public function creatBlog($category_name) {
        $sql = "INSERT INTO category(category_name) VALUES (?)";
        return $this->db->insert($sql, [$category_name]);
    }

    public function updateBlog($blog_post_id, $title) {
        $sql = "UPDATE category SET category_name = ? WHERE category_id = ?";
        $params = [$title, $blog_post_id];
        return $this->db->update($sql, $params);
    }

    public function deleteBlog($blog_post_id) {
        $sql = "DELETE FROM category WHERE category_id = ?";
        return $this->db->update($sql, [$blog_post_id]);
    }
}
?>
