<?php 
class Cart extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }
    public function getAllCart($user_id) {
        $sql = "SELECT 
                ci.cart_item_id, 
                ci.user_id, 
                ci.product_id, 
                ci.quantity, 
                p.name AS product_name, 
                p.price,                 
                p.image1                 
            FROM cart_item ci
            JOIN product p ON ci.product_id = p.product_id
            WHERE ci.user_id = " . $user_id;
        return $this->db->getAll($sql);
    }
    public function getCartById($user_id, $product_id) {
        $sql = "SELECT * FROM cart_item WHERE user_id = " . $user_id . " AND product_id = " . $product_id;
        $result = $this->db->getOne($sql);
        return $result;
    }
    
    public function addProductToCart($user_id, $product_id, $quantity) {
        $sql = "INSERT INTO cart_item (user_id, product_id, quantity) VALUES (" . $user_id . ", " . $product_id . ", " . $quantity . ")";
        return $this->db->insert($sql);
    }

    public function updateCart($user_id, $product_id, $quantity) {
        $sql = "UPDATE cart_item SET quantity = " . $quantity . " WHERE user_id = " . $user_id . " AND product_id = " . $product_id;
        return $this->db->update($sql);
    }

    public function deleteCart($user_id, $product_id) {
        $sql = "DELETE FROM cart_item WHERE user_id = " . $user_id . " AND product_id = " . $product_id;
        return $this->db->update($sql);
    }

    // Xóa tất cả sản phẩm trong giỏ hàng
    public function clearCart($user_id) {
        $sql = "DELETE FROM cart_item WHERE user_id = " . $user_id;
        return $this->db->update($sql);
    }
}
?>
