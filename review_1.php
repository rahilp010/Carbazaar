<?php

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$query = "SELECT * FROM review";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
mysqli_close($conn);
?>
    <!-- echo $result['UserName'];
    echo $result['review']; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
<style>
    
.r61 {
    font-size: 17px;
    position: absolute;
    top:78px;
    left:30px;
    font-weight: 600;
    font-style: oblique;
    border:1px solid yellow;
    width:10%;
    padding:2px;
    text-align:center;
    border-radius:20px;
    background-color:yellow;
    color:slate gray;

}
</style>
</head>
<body>
    <div class="container">
        <h1>Review</h1>
            <?php
            while($result = mysqli_fetch_assoc($data)){
            ?>
              <div class="r11">
              <p style="position:absolute; color:white;"><?php echo $result['id'] ?></p>
            <p class="r21"><?php echo $result['uname'] ?></p>
            <p class="r31"><?php echo $result['feedback'] ?></p>
            <p class="r61"><?php echo 'Rating : ';echo $result['rating'];echo'/5' ?></p>
            <a href="delete.php?id=<?php echo $result['id'] ?>" class="r41"><input type="submit" value="Delete"></a>
            <a href="update.php?id=<?php echo $result['id']; ?>" class="r51"><input type="submit" value="Update"></a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>