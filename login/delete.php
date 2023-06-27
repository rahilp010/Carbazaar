<?php

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar"); 
    $id=$_GET['id'];
    $query1="DELETE from review where id ='$id'";
    $data1 = mysqli_query($conn,$query1);
    if($data1){
        echo "<script>
            alert('Review is Deleted');
            window.location.assign('admin1.php');
        </script>";
    }

?>
