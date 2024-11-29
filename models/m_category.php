<?php
class Category extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }
    public function getALLDM() {
        $sql = "SELECT * FROM category WHERE hidden = 'HIEN'";
        return $this->db->getAll($sql);
    }
    public function getALLDMADMIN() {
        $sql = "SELECT * FROM category";
        return $this->db->getAll($sql);
    }

    public function getByIDDM($category_id) {
        $sql = "SELECT * FROM category WHERE category_id = " .$category_id;
        return $this->db->getAll($sql);
    }
    public function creatDM($category_name, $description, $image_url) {
        $sql = "INSERT INTO category (category_name, description, image_url) VALUES ('" . $category_name . "', '" . $description . "', '" . $image_url . "')";
        return $this->db->insert($sql);
    }
    
    public function updateDM($name, $description, $image_url, $id) {
        $sql = 'UPDATE category SET category_name="' . $name . '", description="' . $description . '", image_url="' . $image_url . '" WHERE category_id=' . $id;
        return $this->db->update($sql);
    }
     
    public function deleteDM($category_id) {
        $sql = "DELETE FROM category WHERE category_id = ?";
        return $this->db->update($sql, [$category_id]);
    }
    public function toggleHidden($category_id, $currentStatus) {
        $newStatus = ($currentStatus === 'HIEN') ? 'AN' : 'HIEN';
        $sql = "UPDATE category SET hidden = '$newStatus' WHERE category_id = $category_id";
        return $this->db->update($sql);
    }

}
?>
