
<?php
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"carbazaar");
$query = "SELECT * FROM appointment";
$query1 = "SELECT * FROM review";
$data = mysqli_query($conn,$query);
$data1 = mysqli_query($conn,$query1);
$result = mysqli_fetch_assoc($data);
$result1 = mysqli_fetch_assoc($data1);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <style>
        body{   
        margin: 0;
        padding: 0;
        }
    </style>
</head>

<body>
        <div class="logo1">
       
        <span class="logo">Carbazaar - Admin</span>
        <a href="logout.php"><input class="logout" type="submit" value="SignOut"></a>
        </div>
        
    <div class="part">
        <div class="compo3" id="review">
            <p class="logo2">Reviews</p>
            <table border=1>
                <tr class='tr1'>
                    <th>UserName</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <th>Delete</th>
                </tr>
                <?php
                    while($result1 = mysqli_fetch_assoc($data1)){
                        echo 
                        "<tr style='text-align:justify'>
                        <td style='text-align:center'>$result1[username]</td>
                        <td style='text-align:center'>$result1[rating]</td>
                        <td style='text-align:center'>$result1[review]</td>
                        <td style='text-align:center'><a href=delete.php?id=$result1[id]><input class='delete' type='submit' value='Delete'></a></td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
        <div class="compo3" id="payment">
            <p class="logo2">Appointment</p>
            <table border=1>
               <tr class='tr1'>
                   <th>Manager</th>
                   <th>CarName</th>
                   <th>YourName</th>
                   <th>PhoneNO</th>
                   <th>Date</th>
                   <th>Time</th>
                   <th>Address</th>
                   <th>Delete</th>
                   <th>Update</th>
               </tr>
               <?php
               while($result = mysqli_fetch_assoc($data)){
                       echo 
                       "<tr style='text-align:justify'>
                       <td style='text-align:center'>$result[manager]</td>
                       <td style='text-align:center'>$result[carname]</td>
                       <td style='text-align:center'>$result[buyername]</td>
                       <td style='text-align:center'>$result[phone]</td>
                       <td style='text-align:center'>$result[date]</td>
                       <td style='text-align:center'>$result[time]</td>
                       <td style='text-align:center'>$result[address]</td>
                       <td style='text-align:center'><a href=delete1.php?id=$result[id]><input class='delete' type='submit' value='Delete'></a></td>
                       <td style='text-align:center'><a href=update.php?id=$result[id]><input class='update' type='submit' value='Update'></a></td>
                       </tr>";
                   }
               ?>
            </table>
        </div>
    </div>
</body>

</html>


