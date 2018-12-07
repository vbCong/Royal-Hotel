<?php
// require_once('connection.php');

// if (isset($_GET['controller'])) {
//   $controller = $_GET['controller'];
//   if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//   } else {
//     $action = 'index';
//   }
// } else {
//   $controller = 'pages';
//   $action = 'home';
// }
// require_once('routes.php');

// core configuration
// include_once "config/core.php";
 
// // set page title
// $page_title="Index";
 
// // include login checker
// $require_login=true;
// include_once "login_checker.php";
 
// // include page header HTML
// include_once 'layout_head.php';
 
// echo "<div class='col-md-12'>";
 
//     // to prevent undefined index notice
//     $action = isset($_GET['action']) ? $_GET['action'] : "";
 
//     // if login was successful
//     if($action=='login_success'){
//         echo "<div class='alert alert-info'>";
//             echo "<strong>Hi " . $_SESSION['firstname'] . ", welcome back!</strong>";
//         echo "</div>";
//     }
 
//     // if user is already logged in, shown when user tries to access the login page
//     else if($action=='already_logged_in'){
//         echo "<div class='alert alert-info'>";
//             echo "<strong>You are already logged in.</strong>";
//         echo "</div>";
//     }
 
//     // content once logged in
//     echo "<div class='alert alert-info'>";
//         echo "Content when logged in will be here. For example, your premium products or services.";
//     echo "</div>";
 
// echo "</div>";
 
// // footer HTML and JavaScript codes
// include 'layout_foot.php';
// ?>
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
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="Footer-Basic.css" />
    <link rel="stylesheet" href="assets/stylesheets/style.css">
</head>
<body>
  <!-- header -->
    <div class="header">
        <div class="row">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <!-- login -->
            <div class="login">
                <button type="button" id="btnlogin" href="#">Login</button>
                <button type="button" id="btnregister">Register</button>
            </div>
            <!-- menu -->
            <div class="drop-menu ">
                <ul class="main-nav">
                    <li><a href="#">BOOKING</a></li>
                    <li><a href="#">PHOTO GALLERY</a></li>
                    <li><a href="#">MEETING & EVENT</a></li>
                    <li><a href="#">RESTAURANTS & BAR</a></li>
                    <li><a href="#">WELLNESS</a></li>
                    <li><a href="#">CONTACT US</a></li>
              </ul>
              <div class="handle">
                <b class="menu">MENU</b></div>
          </div>
        </div>    
    </div>
    <!-- slider show -->
    <div class="container-1">
        <br>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
      
           <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
                <img src="images/slide1.jpg">
            </div>
      
            <div class="item">
                <img src="images/slide2.jpg">
            </div>
            <div class="item">
                <img src="images/slide3.jpg">
            </div>
            <div class="item">
                <img src="images/slide4.jpg">
            </div>
            <div class="item">
                <img src="images/slide5.jpg">
              </div>  
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
        <div class="show">
            <div class="container-show">
                <div class="row1">
                    <ul class="ul-show">
                        <li><img  id="wifi" width="40" src="images/wifi.png"><p id="p1">FREE WIFI </br><h id="h1" style="font-size:10px;">ON ALL BOOKINGS</h></li>      
                          <li><img width="40" src="images/tik.png"><p id="p2">BEST RATE </br><h id="h2" style="font-size:10px;">GUARANTEE</h></li>
                        <li><img width="40" src="images/location.png"><p id="p3">LOCATION </br><h id="h3" style="font-size:30px;">HA NOI</h></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ten">
            <p>Royal Luxury Hotel</p>
        </div>
        <!-- content -->
        <div class="container">
          <div class="content">
              <p class="clear">
                    Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
    
                    Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
                    Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
    
                  Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
                  Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
                  
                  Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
                  Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
                  
                  Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
                  Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
                  
                  Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
                  <var>Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
                  
              Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
              Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
      
              Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
              Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
      
              Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
              Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
      
              Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.
              Từ các kiến thức mà bạn đã biết được ở 21 phần trước trong serie Học CSS cơ bản, bạn có thể đã biết qua một số kỹ thuật cơ bản nhưng quan trọng nhất trong việc sử dụng CSS để thiết kế giao diện cho website. Vậy tại sao chúng ta lại không vận dụng tất cả để thực hành xây dựng một giao diện đơn giản chứ? Bởi vì bạn cần biết rằng học CSS là quá trình không ngừng nghỉ, có thể bạn thuộc hết các thuộc tính và cách sử dụng nó, nhưng điều đó không có nghĩa là bạn tự tin mình có thể làm được một giao diện trước khi tự tay làm một cái.
      
              Mặc dù giao diện mình sẽ hướng dẫn bạn làm ở đây chỉ là ở mức đơn giản thôi, nhưng hãy tin mình đi vì chỉ với bấy nhiêu thôi đã giúp bạn có nhiều kinh nghiệm hơn rồi, từ đó bạn có thể tự học ở các tài nguyên khác trên internet.</var>
              </p>
          </div>  
        </div>
            <!-- footer -->
            <div class="footer-basic">
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
            </div>

            <!-- java script menu-->
            <script>
            $(document).ready(function(){
                $('.menu').click(function(){
                    $('.main-nav').toggleClass('active');
                });
            });
            </script>
        <!-- end -->
    </body>
    </html>    