<?php
$conn= new mysqli('localhost','root','','carbazaar');
$db =mysqli_select_db($conn,"carbazaar"); 
$query = "SELECT * FROM review";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
mysqli_close($conn);
?>


<?php
session_start();
if(isset($_POST['submit'])){
$username=$_POST["username"];
$rating=$_POST["rating"];
$review=$_POST["review"];


$conn= new mysqli('localhost','root','','carbazaar');
if($conn->connect_error){
    die("error".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into review (username,rating,review) values(?,?,?)");
    $stmt->bind_param("sss",$username,$rating,$review);
    $stmt->execute();
    echo "<script>
    alert('Review is Added');
    window.location.assign('review.php');
    </script>";
    $stmt->close();
    $conn->close();
}
}
?>