<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['username']) && isset($_POST['password'])){
    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';
    // ประกาศตัวแปรรับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    //sql insert
    $stmt = $conn->prepare("SELECT* FROM auth");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $k) {
        if($k['username'] == $username){break;}
        $stmt = $conn->prepare("INSERT INTO auth (username, password)
    VALUES (:username, :password)");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password , PDO::PARAM_STR);
        $result = $stmt->execute();


        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
            echo '<script>
                 setTimeout(function() {
                  swal({
                      title: "เพิ่มข้อมูลสำเร็จ",
                      type: "success"
                  }, function() {
                      window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                  });
                }, 1000);
            </script>';
    }
    $conn = null; //close connect db
    } //isset
    ?>