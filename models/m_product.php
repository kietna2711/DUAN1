<?php
class Product extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }

    public function getALLSP() {
        $sql = "SELECT * FROM product";
        return $this->db->getAll($sql);
    }

    public function getDMById($category_id) {
        $sql = "SELECT * FROM product WHERE category_id = " .$category_id;
        return $this->db->getAll($sql, [$category_id]);
    }
    public function getById($product_id) {
        $sql = "SELECT * FROM product WHERE product_id = " .$product_id;
        return $this->db->getAll($sql);
    }
    public function insertSP($name, $price, $description, $img1, $img2, $quantity, $sold, $category_id) {
        $sql =  'INSERT INTO product (name, price, description, image1, image2, quantity, sold, category_id) 
                 VALUES ("' . $name . '", ' . $price . ', "' . $description . '", "' . $img1 . '", "' . $img2 . '", ' . $quantity . ', ' . $sold . ', ' . $category_id. ')';
        return $this->db->insert($sql);
    }
    
    public function deleteSP($product_id) {
        $sql = "DELETE FROM product WHERE product_id = $product_id";
        return $this->db->update($sql);
    }

    public function getALLdaban($sold, $limit) {
        $sql = "SELECT * FROM product WHERE 1";
        if ($sold > 0) {
            $sql .= " ORDER BY sold DESC LIMIT ".$limit;
        } else {
            $sql .= " ORDER BY product_id DESC LIMIT ".$limit;
        }
        return $this->db->getAll($sql);
    }

    public function getALLSPtrang($trang, $soluongsp) {
        $sql = "SELECT * FROM product";
        $limit1 = ($trang - 1) * $soluongsp;
        $limit2 = $soluongsp;
        $sql .= " ORDER BY category_id DESC LIMIT " . $limit1 . "," . $limit2;
        return $this->db->getALL($sql);
    }

    public function getALLidDMALL($category_id, $trang, $soluongsp) {
        $sql = "SELECT * FROM product WHERE 1";
        if ($category_id > 0) {
            $sql .= " AND category_id=" . $category_id;
        }
        $limit1 = ($trang - 1) * $soluongsp;
        $limit2 = $soluongsp;
        $sql .= " ORDER BY product_id DESC LIMIT " . $limit1 . "," . $limit2;
        return $this->db->getALL($sql);
    }
    
    public function getALLSPLQ($category_id,$id){
        $sql = "SELECT * FROM product WHERE id!= " .$id;
        if ($category_id > 0){
            $sql .= "AND category_id=".$category_id;
        }
        return $this->db->getall($sql);
    }
    public function updateSP($name, $price, $description, $img1, $img2, $quantity, $sold, $category_id, $product_id) {
        $sql = 'UPDATE product SET name="' . $name . '", price=' . $price . ', description="' . $description . '", image1="' . $img1 . '", image2="' . $img2 . '", quantity=' . $quantity . ', sold=' . $sold . ', category_id=' . $category_id . ' WHERE id=' . $product_id;
        return $this->db->update($sql);
    }   
}
?>

