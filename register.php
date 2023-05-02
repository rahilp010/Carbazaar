<?php
$username=$_POST["uname"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];

$conn= new mysqli('localhost','root','','music_login');
if($conn->connect_error){
    die("error".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into register (UserName,phone,email,password) values(?,?,?,?)");
    $stmt->bind_param("siss",$username,$phone,$email,$password);
    $stmt->execute();
    echo "Register successfully";
    $stmt->close();
    $conn->close();
}
?>

