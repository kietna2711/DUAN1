<?php
    class User extends database{
        public $db;
        public function __construct()
        {
            $this->db = new database();
        }
        public function getALLUser(){//Hiển thịc tất cả
            $spl = "SELECT * FROM user";
            return $this->db->getAll($spl);
        }
        public function getOneId($user_id){//Hiển thị theo id
            $spl = "SELECT * FROM user WHERE user_id = ?";
            return $this->db->getOne($spl,[$user_id]);
        }
        public function createUser($name, $email, $password, $address, $phone) {
            $sql = 'INSERT INTO user (name, email, password, address, phone) VALUES ("' . $name . '", "' . $email . '", "' . $password . '", "' . $address . '", "' . $phone . '")';
            return $this->db->query($sql);
        }
        
        public function updateUsser($id,$data){
            //Cập nhật thông tin user
            $spl = "UPDATE user SET username = ? , emial = ? WHERE id = ?";
            $params = [$data['name'], $data['email'],$id];
            return $this->db->update($spl,$params);
        }
        public function updateUser($user_id, $data) {
            // Cập nhật thông tin user
            $sql = "UPDATE user SET name = ?, email = ?, address = ?, phone = ? WHERE $user_id = ?";
            $params = [$data['name'], $data['email'], $data['address'], $data['phone'], $user_id];
            
            // Thực thi câu truy vấn
            return $this->db->update($sql, $params);
        }
        
        public function getALLByEmail($email){//Hiển thị theo id
            $spl = "SELECT * FROM user WHERE email = '" . $email. "'";
            return $this->db->getAll($spl);
        }
        public function login($email, $password) {
            $spl = "SELECT * FROM user WHERE email = '" . $email . "' AND password = '" . $password . "'";
            return $this->db->getAll($spl);
        }
        
        
    }
?>