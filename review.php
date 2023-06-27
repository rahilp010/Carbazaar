<?php
session_start();
$conn= new mysqli('localhost','root','','carbazaar');
$db =mysqli_select_db($conn,"carbazaar"); 
$query = "SELECT * FROM review";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | CarBazaar</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" />
    <link rel="icon" href="logo.png" type="img/png">
</head>
<?php
$email=$_SESSION['email'];
if($email==true){

}
else{
    header('location:login/login.html');
}
?>
<body>
    <div class="content">
        <div class="I">
            <img id="i1" src="image/logo/CarBazaar-removebg-preview.png" alt="car bazaar" />
            <div class="searchbar">
                <div class="logo2">CarBazaar</div>
                <div class="wrapper">
                    <div class="container90">
                        <div class="search_wrap search_wrap_6">
                            <div class="search_box">
                                <div class="searchlist" id="searchlist">
                                    <div id="myUL">
                                        <p><a href="Maruti suzuki/suzuki.html">Maruti Suzuki</a></p>
                                        <p><a href="Mahindra/mahindra.html">Mahindra</a></p>
                                        <p><a href="Hyundai/hyundai.html">Hyundai</a></p>
                                        <p><a href="tata//tata.html">Tata</a></p>
                                        <p><a href="honda/honda.html">Honda</a></p>
                                        <p><a href="kia/kia.html">Kia</a></p>
                                        <p><a href="MG/mg.html">MG</a></p>
                                        <p><a href="toyota/toyota.html">Toyota</a></p>
                                        <p><a href="nissan/nissan.html">Nissan</a></p>
                                        <p><a href="renault/renault.html">Renault</a></p>
                                        <p><a href="skoda/skoda.html">Skoda</a></p>
                                        <p><a href="volkswagen/volkswagen.html">Volkswagen</a></p>
                                        <p><a href="Maruti suzuki/Maruti Swift.html">Maruti Swift</a></p>
                                        <p><a href="Maruti suzuki/ertiga.html">Maruti Ertiga</a></p>
                                        <p><a href="Maruti suzuki/Alto.html">Maruti Alto</a></p>
                                        <p><a href="Maruti suzuki/altok10.html">Maruti Alto K10</a></p>
                                        <p><a href="Maruti suzuki/celerio.html">Maruti Celerio</a></p>
                                        <p><a href="Maruti suzuki/ciaz.html">Maruti Ciaz</a></p>
                                        <p><a href="Maruti suzuki/dzire.html">Maruti Dzire</a></p>
                                        <p><a href="Maruti suzuki/eeco.html">Maruti EECO</a></p>
                                        <p><a href="Maruti suzuki/grandvitara.html">Maruti Grand Vitara</a></p>
                                        <p><a href="Maruti suzuki/ignis.html">Maruti Ignis</a></p>
                                        <p><a href="Maruti suzuki/Maruti Baleno.html">Maruti Baleno</a></p>
                                        <p><a href="Maruti suzuki/Maruti Brezza.html">Maruti Brezza</a></p>
                                        <p><a href="Maruti suzuki/spresso.html">Maruti Spresso</a></p>
                                        <p><a href="Maruti suzuki/wagonr.html">Maruti WegonR</a></p>
                                        <p><a href="Maruti suzuki/xl6.html">Maruti XL6</a></p>
                                        <p><a href="Mahindra/thar.html">Mahindra Thar</a></p>
                                        <p><a href="Mahindra/xuv700.html">Mahindra XUV700</a></p>
                                        <p><a href="Mahindra/xuv300.html">Mahindra XUV300</a></p>
                                        <p><a href="Mahindra/xuv400.html">Mahindra XUV400</a></p>
                                        <p><a href="Mahindra/bolero.html">Mahindra Bolero</a></p>
                                        <p><a href="Mahindra/boleroneo.html">Mahindra Bolero-Neo</a></p>
                                        <p><a href="Mahindra/kuv100nxt.html">Mahindra KUV100 NXT</a></p>
                                        <p><a href="Mahindra/scorpioclassic.html">Mahindra Scorpio-Classic</a></p>
                                        <p><a href="Mahindra/scorpion.html">Mahindra Scorpio-N</a></p>
                                        <p><a href="Mahindra/marrazo.html">Mahindra Marrazo</a></p>
                                        <p><a href="MG/hector.html">MG Hector</a></p>
                                        <p><a href="MG/astor.html">MG Astor</a></p>
                                        <p><a href="MG/gloster.html">MG Gloster</a></p>
                                        <p><a href="MG/zsev.html">MG ZS-EV</a></p>
                                        <p><a href="Hyundai/i20.html">Hyundai i20</a></p>
                                        <p><a href="Hyundai/kona.html">Hyundai kona</a></p>
                                        <p><a href="Hyundai/alcazar.html">Hyundai Alcazar</a></p>
                                        <p><a href="Hyundai/aura.html">Hyundai Aura</a></p>
                                        <p><a href="Hyundai/creta.html">Hyundai Creta</a></p>
                                        <p><a href="Hyundai/grandi10.html">Hyundai Grand i10</a></p>
                                        <p><a href="Hyundai/ioniq5.html">Hyundai Ioniq5</a></p>
                                        <p><a href="Hyundai/tucson.html">Hyundai Tucson</a></p>
                                        <p><a href="Hyundai/venue.html">Hyundai Venue</a></p>
                                        <p><a href="kia/sonet.html">Kia Sonet</a></p>
                                        <p><a href="kia/carens.html">Kia Carens</a></p>
                                        <p><a href="kia/carnival.html">Kia Carnival</a></p>
                                        <p><a href="kia/ev6.html">Kia EV6</a></p>
                                        <p><a href="kia/seltos.html">Kia Seltos</a></p>
                                        <p><a href="tata/harrier.html">Tata Harrier</a></p>
                                        <p><a href="tata/nexon.html">Tata Nexon</a></p>
                                        <p><a href="tata/nexon ev max.html">Tata Nexon EV-Max</a></p>
                                        <p><a href="tata/altroz.html">Tata Altroz</a></p>
                                        <p><a href="tata/punch.html">Tata Punch</a></p>
                                        <p><a href="tata/safari.html">Tata Safari</a></p>
                                        <p><a href="tata/tiago.html">Tata Tiago</a></p>
                                        <p><a href="tata/tigor.html">Tata Tigor</a></p>
                                        <p><a href="tata/tigorev.html">Tata Tigor-EV</a></p>
                                        <p><a href="tata/tiago ev.html">Tata Tiago-EV</a></p>
                                        <p><a href="honda/amaze.html">Honda Amaze</a></p>
                                        <p><a href="honda/city.html">Honda City</a></p>
                                        <p><a href="honda/jazz.html">Honda Jazz</a></p>
                                        <p><a href="honda/wrv.html">Honda WR-V</a></p>
                                        <p><a href="toyota/fortuner.html">Toyota Fortuner</a></p>
                                        <p><a href="toyota/vellfire.html">Toyota Vellfire</a></p>
                                        <p><a href="toyota/camry.html">Toyota Camry</a></p>
                                        <p><a href="toyota/glanza.html">Toyota Glanza</a></p>
                                        <p><a href="toyota/urbancruiser.html">Toyota Toyota Urban Cruiser Hyryder</a></p>
                                        <p><a href="toyota/Hycross.html">Toyota Innova Hycross</a></p>
                                        <p><a href="nissan/kicks.html">Nissan Kicks</a></p>
                                        <p><a href="nissan/magnite.html">Nissan Magnite</a></p>
                                        <p><a href="skoda/kodiaq.html">Skoda Kodiaq</a></p>
                                        <p><a href="skoda/kushaq.html">Skoda Kushaq</a></p>
                                        <p><a href="skoda/octavia.html">Skoda Octavia</a></p>
                                        <p><a href="skoda/slavia.html">Skoda Slavia</a></p>
                                        <p><a href="skoda/superb.html">Skoda Superb</a></p>
                                        <p><a href="volkswagen/taigun.html">Volkswagen Taigun</a></p>
                                        <p><a href="volkswagen/tiguan.html">Volkswagen Tiguan</a></p>
                                        <p><a href="volkswagen/virtus.html">Volkswagen Virtus</a></p>
                                        <p><a href="renault/triber.html">Renault Triber</a></p>
                                        <p><a href="renault/kiger.html">Renault Kiger </a></p>
                                        <p><a href="renault/kwid.html">Renault Kwid</a></p>
                                    </div>
                                </div>
                                <input type="text" class="input" id="myInput" placeholder="Search Cars and Brands......." onkeyup="Searchup()" autocomplete="off">
                                <a href="">
                                    <lord-icon id="icon9" src="https://cdn.lordicon.com/mkxtghuq.json" trigger="hover" colors="outline:#ffffff,primary:#66a1ee,secondary:#ebe6ef">
                                    </lord-icon>
                                </a>
                                <div class="btn">
                                    <p>Search</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <select name="lan" id="lan" class="lan">
                    <option value="English">English</option>
                    <option value="Hindi">हिन्दी </option>
                    <option value="Gujrati">ગુજરાતી</option>
                    <option value="Tamil">தமிழ்</option>
                    <option value="Telugu">తెలుగు</option>
                    <option value="Malayalam">മലയാളം</option>
                    <option value="Kannada">ಕನ್ನಡ</option>
                </select>
                <div class="ico1">
                    <lord-icon src="https://cdn.lordicon.com/unvvkseg.json" trigger="hover" colors="primary:#ffffff,secondary:#4030e8"></lord-icon>
                </div>
                <a href="login/login.html" class="sign">LogOut</a>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li class="a1"><a href="web1.html">Home</a></li>
                <li class="a1">
                    <a href="#">New Cars <i id="angle" class="fa-solid fa-angle-down"></i></a>
                    <div class="submenu" style="margin-left: 30px">
                        <ul style="background-color: transparent">
                        <li class="ho1"><a href="http://localhost/Carbazaar/web1.html#popularbrands">Popular Brands <i class="fa-solid fa-angle-right" style="margin-left: 100px; position:absolute;"></i></a>
                                    <div class="submenu2">
                                        <ul>
                                            <li><a href="Maruti suzuki/suzuki.html">Maruti Suzuki</a></li>
                                            <li><a href="Mahindra/mahindra.html">Mahindra</a></li>
                                            <li><a href="hyundai/hyundai.html">Hyundai</a></li>
                                            <li><a href="tata/tata.html">Tata</a></li>
                                            <li><a href="kia/kia.html">Kia</a></li>
                                        </ul>
                                    </div>
                                </li>
    
                            <li><a href="http://localhost/Carbazaar/web1.html#latest">Latest Cars</a></li>
                            <li><a href="http://localhost/Carbazaar/web1.html#most search">Most Search Cars</a></li>
                            <li><a href="http://localhost/Carbazaar/web1.html#upcoming">Upcoming Cars</a></li>
                                <li class="ho1"><a href="">By Bodytype <i class="fa-solid fa-angle-right" style="margin-left: 120px;"></i></a>
                                    <div class="submenu2">
                                        <ul>
                                            <li><a href="hatchback.html">Hatchback</a></li>
                                            <li><a href="sedan.html">Sedan</a></li>
                                            <li><a href="muv.html">MUV</a></li>
                                            <li><a href="suv.html">SUV</a></li>
                                            <li><a href="hybrid.html">Hybrid</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="sellcars/sell.html">Sell Cars
                        <i id="angle" class="fa-solid fa-angle-down"></i></a>
                        <div class="submenu" style="margin-left: 30px;">
                            <ul style="background-color: transparent;">
                            <li><a href="http://localhost/Carbazaar/Sellcars/sell.html#inspection">Car Inspection</a> </li>
                            <li><a href="used/used.html">Used Cars</a> </li>
                            <li><a href="http://localhost/Carbazaar/Sellcars/sell.html#bybrands">Sell car by Brands</a></li>
                            <li><a href="http://localhost/Carbazaar/Sellcars/sell.html#FAQS">FAQS </a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="compare cars/compare.html">Compare Cars</a></li>
                <li><a href="#">Service Booking
                    <i id="angle" class="fa-solid fa-angle-down"></i>
                </a>
                    <div class="submenu" style="margin-left:10px;">
                        <ul style="background-color: transparent;">
                            <li><a href="appointment.php">Book my sloat</a> </li>
                        </ul>
                    </div>
                </li>
                <li><a href="review.php"> Reviews</a></li>
            </ul>
        </div>
    </div>
    <div class="componet44">
        <div class="section44" id="review">
            <p class="txt44" style="margin-bottom: 80px">Reviews</p>
            <div class="box41">
                <form action="review1.php" method="post">
                    <label class="us41">UserName :</label><br><br>
                    <input class="us42" type="text" name="username" required><br>
                    <label class="us41">Rating :</label><br><br>
                    <input class="us42" type="number" name="rating" min="1" max="5" required><br>
                    <label class="us41">Review :</label><br><br>
                    <textarea class="us42" name="review" cols="35" rows="5" required></textarea>
                    <input class="bt4" type="submit" name="submit" value="Add Review">
                    <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="hover" colors="primary:#121331,secondary:#08a88a">
                    </lord-icon>
                    <p id="pra">Thank You For Giving your precious time to Us.</p>
                    <div class="oo">
                        <lord-icon src="https://cdn.lordicon.com/pithnlch.json" trigger="hover" colors="primary:#121331,secondary:#08a88a">
                        </lord-icon>
                    </div>
                </form>
            </div>
        </div>
    </div>
            <?php
            while($result = mysqli_fetch_assoc($data)){
            ?>
            <div class="r111">
            <p class="r211"><?php echo $result['username'] ?></p>
            <p class="r311"><?php echo $result['review'] ?></p>
            <p class="r611"><?php echo 'Rating : ';echo $result['rating'];echo'/5' ?></p>
            </div>
            <?php
                }
        ?>


    <script src="search.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</body>

</html>