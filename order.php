<?php

class order {

    private $ID_Order;
    private $ID_Product_list;
    private $Customer_ID;
    private $Total;
    private $date;
    private $Status;

    function __construct($ID_Order, $ID_Product_list, $Customer_ID, $Total, $date, $Status) {
        $this->ID_Order = $ID_Order;
        $this->ID_Product_list = $ID_Product_list;
        $this->Customer_ID = $Customer_ID;
        $this->Total = $Total;
        $this->date = $date;
        $this->Status = $Status;
    }

    public function insert($conn) {
        $sql = "insert into `order`(ID_Order, ID_Product_list, Customer_ID, Total, date, Status) values (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss",$this->ID_Order, $this->ID_Product_list, $this->Customer_ID, $this->Total,  $this->date, $this->Status);
        $stmt->execute();
        $query = mysqli_query($conn, $sql);
    }
    public function insertorder($conn,$id,$pd_id,$count,$total){
        $sql = "insert into `order delivered`(Order_id,ID_Product,count,Total) values (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss",$id,$pd_id,$count,$total);
        $stmt->execute();
        $query = mysqli_query($conn, $sql);
    }
     public function showall($conn) {
        $sql = "SELECT * FROM `order`";
        $result = $conn->query($sql);
        return $result;
    }
    public function xatnhan($conn) {
        $id = $_REQUEST['xatnhan'];
        $stmt = $conn->prepare("update `order` set Status = ? where ID_Order = ?");
        $dl="true";
        $stmt->bind_param("ss",$dl,$id); 
        $result = $stmt->execute();
        return $result;
    }
    public function huy($conn) {
        $id = $_REQUEST['huy'];
        $stmt = $conn->prepare("update `order` set Status = ? where ID_Order= ?");
        $dl="false";
        $stmt->bind_param("ss",$dl,$id); 
        $result = $stmt->execute();
        return $result;
    }
}
