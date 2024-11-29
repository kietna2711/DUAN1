<?php
class Order extends database {
    public $db;

    public function __construct() {
        $this->db = new database();
    }
    public function getOrderDetailsByUserAndProduct($user_id, $product_id) {
        $sql = "SELECT 
                    o.order_id, 
                    o.user_id, 
                    o.order_date, 
                    o.status, 
                    o.total_amount, 
                    o.shipping_address, 
                    o.payment_method, 
                    p.name AS product_name, 
                    p.price AS product_price, 
                    od.quantity, 
                    u.name AS user_name, 
                    u.email AS user_email, 
                    u.phone AS user_phone 
                FROM orders o
                INNER JOIN order_details od ON o.order_id = od.order_id
                INNER JOIN products p ON od.product_id = p.product_id
                INNER JOIN users u ON o.user_id = u.user_id
                WHERE o.user_id = $user_id AND od.product_id = $product_id";
        
        return $this->db->getOne($sql);
    }
    
    // Tạo đơn hàng
    public function createOrder($user_id, $total_amount, $address, $payment_method) {
        $sql = "INSERT INTO orders (user_id, order_date, status, total_amount, shipping_address, payment_method) 
                VALUES ($user_id, NOW(), 'Pending', $total_amount, '$address', '$payment_method')";
        return $this->db->insert($sql);
    }

    // Thêm chi tiết đơn hàng
    public function addOrderDetails($order_id, $product_id, $quantity, $price) {
        $sql = "INSERT INTO order_details (order_id, product_id, quantity, price) 
                VALUES ($order_id, $product_id, $quantity, $price)";
        return $this->db->insert($sql);
    }
}
?>
