<?php

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar"); 
    $id=$_GET['id'];
    $query="DELETE from appointment where id ='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>
            alert('Review is Deleted');
            window.location.assign('admin1.php');
        </script>";
    }

?>
