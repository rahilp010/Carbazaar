<?php
$uname = $_POST['uname'];
$password = $_POST['password'];
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar");
$query="select * from admin where adminuname='$uname' and adminpassword='$password' ";
$result=mysqli_query($conn,$query);
$number=mysqli_num_rows($result);
if($number==1){
   echo "<script>
   alert('successfully Login');
   window.location.assign('admin1.php');
   </script>"
   ;
}
else{
    echo "<script>
   alert('Wrong email and password');
   window.location.assign('admin.html');
   </script>"
   ;
}
?>

