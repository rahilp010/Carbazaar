<?php
$conn = mysqli_connect("localhost","root","","carbazaar");
if($conn==false){
    die("error".mysqli_connect_error());
}
$username=$_POST["uname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$sql = " INSERT INTO user(Username,phone,email,password) VALUES('$username','$phone','$email','$password');";
if(mysqli_query($conn, $sql)){
    echo "<script>
   alert('successfully Registered');
   window.location.assign('login.html');
   </script>";
    $stmt->close();
    $conn->close();
}
else{
    echo("ERROR: Hush ! Sorry $sql ".mysqli_error($conn));
}
mysqli_close($conn);
?>



