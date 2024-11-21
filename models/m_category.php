<?php
class Category extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }

    public function getALLDM() {
        $sql = "SELECT * FROM category";
        return $this->db->getAll($sql);
    }

    public function getOneIdDM($category_id) {
        $sql = "SELECT * FROM category WHERE category_id = ?";
        return $this->db->getOne($sql, [$category_id]);
    }

    public function creatDM($category_name) {
        $sql = "INSERT INTO category(category_name) VALUES (?)";
        return $this->db->insert($sql, [$category_name]);
    }

    public function updateDM($category_id, $category_name) {
        $sql = "UPDATE category SET category_name = ? WHERE category_id = ?";
        $params = [$category_name, $category_id];
        return $this->db->update($sql, $params);
    }

    public function deleteDM($category_id) {
        $sql = "DELETE FROM category WHERE category_id = ?";
        return $this->db->update($sql, [$category_id]);
    }
}
?>
