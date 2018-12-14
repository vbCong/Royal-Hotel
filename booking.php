<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Hotel</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link href="./fonts/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Footer-Basic.css" />
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header -->
    <div class="header-me">
        <div class="row-me">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>
            <!-- login -->
            <div class="login-me">
                <button type="button" id="btnlogin" href="#">Login</button>
                <button type="button" id="btnregister">Register</button>
            </div>
            <!-- menu -->
            <div class="drop-menu ">
                <ul class="main-nav">
                    <li><a href="booking.php">ROOMS</a></li>
                    <li><a href="photo-gallery.html">PHOTO GALLERY</a></li>
                    <li><a href="#">RESTAURANTS & BAR</a></li>
                    <li><a href="#">WELLNESS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <a href="booking.html"><button  id="btn-booking"><b>BOOK A ROOMS</b></button></a>
              </ul>
              <div class="handle">
                <b class="menu">MENU</b></div>
          </div>
        </div>    
    </div>iv>    
    </div>
<div class="content-booking">
    <div class="booking">
        <?php
            require_once("config/connection.php");
            if(isset($_POST["btn_submit"])) {
                
                //lay thong tin tu cac form bang phuong thuc post
                $fullname = $_POST["fullname"];
                $dateofbirth = $_POST["dateofbrith"];
                $phone = $_POST["phone"];
                $addresss = $_POST["addresss"];
                $checkin = $_POST["checkin"];
                $checkout = $_POST["checkout"];
                $adult = $_POST["adult"];
                $room = $_POST["room"];
                $child = $_POST["child"];

                //kiem tra dieu kien bat buoc voi cac field khong duoc bo trong
                    if($fullname == "" || $dateofbirth == "" || $phone == "" || $addresss == "" || $checkin == "" || $checkout == "" || $adult == "" || $room == "" || $child == "")
                    {
                        echo "ban vui long nhap day du thong tin"
                    }else{

                        //thuc hien viec luu tru thong tin vao database
                        $sql = "INSERT INTO datphong(fullname,dateofbrith,phone,addresss,checkin,checkout,adult,room,child)
                                VALUES ('$fullname','$dateofbirth','$phone','$addresss','$checkin','$checkout','$adult','$room','$child')";

                                //thuc thi cau lenh $sql voi bien conn lay tu field connection.php
                                mysqli_query($conn,$sql);
                                echo " chuc mung ban da dang ki thanh cong";
                    }
            }
        ?>
        
        <!-- form -->
        <form action="booking.php" method="POST">
            <table align="center">
                <tr id="properties" align="center">
                    <td colspan="2">BOOKING A ROOM</td>
                </tr>
                <tr>
                    <td>Full Name :</td>
                    <td><input type="text" id="fullname"></td>
                </tr>

                <tr>
                    <td>Date Of Brith :</td>
                    <td><input type="text" id="dateofbrith"></td>
                </tr>

                <tr>
                    <td>Phone Number :</td>
                    <td><input type="text" id="phone"></td>
                </tr>
                
                <tr>
                    <td>AddRess :</td>
                    <td><input type="text" id="addresss"></td>
                </tr>
                
                <tr>
                    <td>Check In :</td>
                    <td><input type="text" id="checkin"></td>
                </tr>
                
                <tr>
                    <td>Check Out :</td>
                    <td><input type="text" id="checkout"></td>
                </tr>
                
                <tr>
                    <td>Adult :</td>
                    <td><input type="text" id="adult"></td>
                </tr>
                <tr>
                    <td>Rooms :</td>
                    <td><input type="text" id="room"></td>
                </tr>
                
                <tr>
                    <td>Child :</td>
                    <td><input type="text" id="child"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" id="btn_submit" VALUE="Booking A Room"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<!-- footer -->
        <!-- <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Company One Member © 2018</p>
            </footer>
        </div> -->

<!-- java script menu-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="aos.js"></script>
        <script>
          $(document).ready(function(){
            $('.menu').click(function(){
                $('.main-nav').toggleClass('active');
            });
          });
        </script>
        <script>
            AOS.init({
                offset: 200,
                duration: 2000,
            });
        </script>

<!-- end -->
</body>
</html>    