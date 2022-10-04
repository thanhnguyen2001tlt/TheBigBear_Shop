<?php

class event {

    private $id;
    private $event;
    private $start;
    private $end;
    private $discount;

    function __construct($id, $event, $start, $end, $discount) {
        $this->id = $id;
        $this->event = $event;
        $this->start = $start;
        $this->end = $end;
        $this->discount = $discount;
    }

    public function insert($conn) {
        $sql = "insert into event(ID, Event,Start_date ,End_end ,Discount) values (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $this->id, $this->event, $this->start, $this->end, $this->discount);
        $stmt->execute();
        $query = mysqli_query($conn, $sql);
    }

    public function showall($conn) {
        $sql = "SELECT * FROM event";
        $result = $conn->query($sql);
        return $result;
    }
     public function delete($conn) {
        $id = $_REQUEST['delete'];
        $stmt = $conn->prepare("update event set Status = ? where ID= ?");
        $dl="false";
        $stmt->bind_param("ss",$dl,$id); 
        $result = $stmt->execute();
        return $result;
    }
     public function seach($conn){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM event where  ID='$id'";
        $result = $conn->query($sql);
        return $result;
    }
    public function edit($conn) {
        $id = $_REQUEST['edit'];
        $stmt = $conn->prepare("update event set Event = ?,Start_date=?,End_end=?,Discount=? where  ID= ?");
        $stmt->bind_param("sssis", $this->event, $this->start, $this->end, $this->discount,$id);
        $result = $stmt->execute();
        return $result;      
    }
     public function showallseachname($conn,$seach) {
        $sql = "SELECT * FROM event where Event Like '%$seach%' ";
        $result = $conn->query($sql);
        return $result;
    }

}
