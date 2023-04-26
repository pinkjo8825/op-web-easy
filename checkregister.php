<?php 
session_start();
        if(isset($_POST['username'])){
                  include("connect.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="INSERT INTO user (username,password,role) VALUES (
                    '".$_POST['username']."',
                    '".$_POST['password']."',
                    'member'
                    )";
                  $result = mysqli_query($con,$sql);
                  if ($result){
                    header('Location:index.php');;
                }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>