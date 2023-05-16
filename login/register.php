<?php
$username=$_POST["uname"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];

$conn= new mysqli('localhost','root','','carbazaar');
if($conn->connect_error){
    die("error".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into user (Username,phone,email,password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$phone,$email,$password);
    $stmt->execute();
    echo "<script>
    alert('Register successfully');
    window.location.assign('login.html');
    </script>";
    $stmt->close();
    $conn->close();
}
?>

