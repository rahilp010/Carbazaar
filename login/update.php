<?php

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar"); 
$id = $_GET['id'];
$query = "SELECT * FROM appointment where id='$id'";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>
<body>
 

<div class="content77">
                <form action="" method="post">
                    <h1>Book Appoinment </h1>
                    <select name="manager" required>
                         <option value="0">Select your Manager</option>
                         <option value="Rahil">Rahil</option>
                         <option value="Anas">Anas</option>
                         <option value="Gore">Gore</option>
                         <option value="Jaimin">Jaimin</option>
                         <option value="Harsh">Harsh</option>
                         <option value="Manav">Manav</option>
                    </select>
                     <select name="carname">
                        <option value="none">Select your car </option>
                         <option value="swift">swift</option>
                         <option value="Thar">Thar</option>
                         <option value="xuv700">Xuv700</option>
                         <option value="hactor">Hactor</option>
                         <option value="kicks">Kicks</option>
                         <option value="ertiga">Ertiga</option>
                         <option value="creta">Creta</option>
                         <option value="jazz">Jazz</option>
                         <option value="ioniq5">ioniq5</option>
                         <option value="harrier">Harrier</option>
                         <option value="punch">punch</option>
                         <option value="fortuner">fortuner</option>
                         <option value="glanza">glanza</option>
                         <option value="baleno">Baleno</option>
                         <option value="alto">Alto</option>
                         <option value="virtus">virtus</option>
                         <option value="camry">Camry</option>
                         <option value="alcazar">alcazar</option>
                         <option value="i20">i20</option>
                         <option value="sonet">sonet</option>
                         <option value="ev6">Ev6</option>
                         <option value="carens">Carens</option>
                         <option value="seltos">seltos</option>
                         <option value="bolero">bolero</option>
                         <option value="kuv100">kuv100</option>
                         <option value="scorpioN">scorpioN</option>
                         <option value="Grandvitara">Grandvitara</option>
                         <option value="Brezza">Brezza</option>
                         <option value="celerio">celerio</option>
                         <option value="ignis">ignis</option>
                         <option value="xl6">xl6</option>
                         <option value="astor">astor</option>
                         <option value="gloster">gloster</option>
                         <option value="zsev">zsev</option>
                         <option value="magnite">magnite</option>
                         <option value="kiger">kiger</option>
                         <option value="triber">triber</option>
                         <option value="kodiaq">kodiaq</option>
                         <option value="kushanq">kushanq</option>
                         <option value="octavia">octavia</option>
                         <option value="superb">superb</option>
                     </select><br>
                 <input type="text" name="buyername" placeholder="Your Name" >
                 <input type="text" name="phone" placeholder="Your Number" maxlength="10"><br>
                 <input type="date" name="date" placeholder="Enter Date" >
                 <input type="time" name="time" placeholder="Enter Time" ><br>
                 <textarea name="address" id="address" placeholder="Address" cols="30" rows="10"></textarea>
                 <div class="appoinment">
                 <input type="submit" name="update" value="Update">
                 </div>
                </form>

            </div>

</body>
</html>


<?php
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar"); 
if(isset($_POST['update'])){
    $manager=$_POST["manager"];
    $carname=$_POST["carname"];
    $buyername=$_POST["buyername"];
    $phone=$_POST["phone"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $address=$_POST["address"];
$update = "UPDATE appointment SET manager='$manager',carname='$carname',buyername='$buyername',phone='$phone',date='$date',time='$time',address='$address' where id='$id'";
$data=mysqli_query($conn,$update);
if($data){
    echo "<script>
    alert ('Review Updated Successfully') ;
    window.location.assign('admin1.php');
    </script>";
}
mysqli_close($conn);
}
?>