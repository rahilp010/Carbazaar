<?php
$email = $_POST["email"];
$password = $_POST["password"];
$conn =mysqli_connect("localhost","root","")or die ("giuy");
$db =mysqli_select_db($conn,"carbazaar");
$query="select * from user where email='$email' and password='$password' ";
$result=mysqli_query($conn,$query);
$number=mysqli_num_rows($result);
if($number==1){
   echo "<script>
   alert('Successfully Login');
   window.location.assign('http://localhost/GitHub/Carbazaar/web1.html');
   </script>"
   ;
}
else{
    echo "<script>
   alert('Wrong email and password');
   window.location.assign('Register.html');
   </script>"
   ;
}
?>

