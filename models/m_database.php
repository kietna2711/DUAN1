<?php
class database{

   public $servername = "localhost";
   public $username = "root";
   public $password = "";
   public $dbname = "duan1";
   public $conn;
   public function __construct(){
    try {
        $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Database created successfully<br>";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      $this->conn = $conn;
   }
   public function query($sql,$params=[]){
    $statement = $this->conn->prepare($sql);
    $statement->execute($params);
    return $statement;
   }
   // láy tất cả
   public function getAll($sql){
    $statement=$this->query($sql);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
   }
   // lấy 1
   public function getOne($sql){
    $statement=$this->query($sql);
    return $statement->fetch(PDO::FETCH_ASSOC);
   }
   // tạo thêm
   public function insert($sql){
    $this->query($sql);
    return $this->conn->lastInsertId();
   }
   // sữa lại
   public function update($sql){
    $this->query($sql);
   }
   // xóa
   public function delete($sql){
    $this->query($sql);
   }
}
//  $db = new database();
?>