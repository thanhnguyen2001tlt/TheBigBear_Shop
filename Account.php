<?php

class Account {
    private $id;
    private $fullname;
    private $name;
    private $password;
    private $phone;
    private $email;
    private $diachi;
    private $status;
    private $point;
    private $img;
        
    function __construct($id, $fullname, $name, $password, $phone, $email, $diachi, $status, $point, $img) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->name = $name;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
        $this->diachi = $diachi;
        $this->status = $status;
        $this->point = $point;
        $this->img = $img;
    }
    public function insert($conn) {
        $sql = "insert into customer(Customer_ID,Full_name,Username,Password,Phone,Email,Address,Image,Startus,Point) values (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss",$this->id,$this->fullname,$this->name,$this->password,$this->phone,$this->email,$this->diachi,$this->img, $this->status,$this->point);
        $stmt->execute();
         
    }
    public function login($conn) {
        $sql = "select Username,Password from customer where Username = '$this->name'  AND Password='$this->password' ";
        $user = mysqli_query($conn, $sql);
        return $user;
    }
    public function showallcustomer($conn) {
        $sql = "SELECT * FROM customer";
        $result = $conn->query($sql);
        return $result;
    }
    public function showallseachname($conn,$seach) {
        $sql = "SELECT * FROM customer where Username Like '%$seach%' ";
        $result = $conn->query($sql);
        return $result;
    }
     public function delete($conn) {
        $id = $_REQUEST['delete'];
        $stmt = $conn->prepare("update customer set Startus = ? where Customer_ID = ?");
        $dl="false";
        $stmt->bind_param("ss",$dl,$id);
        $result = $stmt->execute();
        return $result;
    }
     public function edit($conn) {
        $id = $_REQUEST['edit'];
        $stmt = $conn->prepare("update customer set  Full_name=?,Password=?,Phone=?,Email=?,Address=? where  Customer_ID= ?");
        $stmt->bind_param("ssssss",$this->fullname,$this->password,$this->phone,$this->email,$this->diachi,$id);
        $result = $stmt->execute();
        return $result;
    }

    public function seach($conn){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM customer where  Customer_ID='$id'";
        $result = $conn->query($sql);
        return $result;
    }
}
