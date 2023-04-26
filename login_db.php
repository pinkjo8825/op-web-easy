<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['username']) && isset($_POST['password'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
     require_once 'connect.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];
//sql update
$stmt = $conn->prepare("SELECT* FROM auth");
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $k) {
    if ($k["username"] == $username && $k["password"] == $password) {
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
 if($stmt->rowCount() >= 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "login successful",
                  type: "success"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
    break;
$conn = null; //close connect db
} else{
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
 if($stmt->rowCount() >= 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "fail",
                  type: "error"
              }, function() {
                  window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
}
    }
}