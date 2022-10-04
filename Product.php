<?php

class Product {

    private $product_id;
    private $product_name;
    private $type;
    private $count;
    private $price;
    private $status;
    private $image;
    private $date;
    private $description;

    function __construct($product_id, $product_name, $type, $count, $price, $image, $status, $date, $description) {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->type = $type;
        $this->count = $count;
        $this->price = $price;
        $this->status = $status;
        $this->image = $image;
        $this->date = $date;
        $this->description = $description;
    }

    public function uploadfile() {
        $target_dir = "images/";
        $uploadOk = 1;
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $_FILES['image']['name']);
        }
        return $uploadOk;
    }

    public function uploadfileimg() {
        $file_name = $_FILES["images"]['name'];
        foreach ($file_name as $key => $value) {
            move_uploaded_file($_FILES['images']['tmp_name'][$key], 'images/' . $_FILES['images']['name'][$key]);
        }
    }

    public function insert($conn) {
        $sql = "insert into product(Product_id,Product_name,Image,Type,Count,Price,Startus,Description,Date) values (?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssissss", $this->product_id, $this->product_name, $this->image, $this->type, $this->count, $this->price, $this->status, $this->description, $this->date);
        $stmt->execute();
        $query = mysqli_query($conn, $sql);
        if (!$query) {
            echo "<script>alert('Thêm thành công');</script>";
        } else {
            echo "<script>alert('Thêm không thành công');</script>";
        }
    }

    public function showall($conn) {
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
        return $result;
    }

    public function showalltype($conn) {
        $sql = "SELECT * FROM type";
        $result = $conn->query($sql);
        return $result;
    }

    public function delete($conn) {
        $id = $_REQUEST['delete'];
        $stmt = $conn->prepare("update product set Startus = ? where Product_id = ?");
        $dl="false";
        $stmt->bind_param("ss",$dl,$id); 
        $result = $stmt->execute();
        return $result;
    }

    public function edit($conn) {
        $id = $_REQUEST['edit'];
        $stmt = $conn->prepare("update product set  Product_name = ?,Type=?,Count=?,Price=? where Product_id = ?");
        $stmt->bind_param("ssiss",$this->product_name,$this->type,$this->count,$this->price,$id);
        $result = $stmt->execute();
        return $result;      
    }
     public function seachproduct($conn){
        $id = $_GET['id'];
        $sql = "SELECT * FROM product where  Product_id='$id'";
        $result = $conn->query($sql);
        return $result;
    }
   
    public function seach($conn){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM product where  Product_id='$id'";
        $result = $conn->query($sql);
        return $result;
    }
    public function showimg($conn){
        $id = $_GET['id'];
        $sql = "SELECT * FROM image where Product_id='$id'";
        $result = $conn->query($sql);
        return $result;
    }
    public function showallseachname($conn,$seach) {
        $sql = "SELECT * FROM product where Product_name Like '%$seach%' ";
        $result = $conn->query($sql);
        return $result;
    }

}
