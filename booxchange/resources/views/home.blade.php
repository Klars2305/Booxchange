<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BooXchange</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="book.png" rel="icon">
 

  <!-- Fonts  Reference-->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files  Reference-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{asset('/css/main.css')}}" >

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
      
        <h1>BooXchange</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#Home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#Genre">Genre</a></li>
          <li><a href="#Top Seller">Top Seller</a> </li>
          <li><a href="#Games">Games</a></li>

          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>BooXchange</h2>
            <p>The “Pre-loved Book Exchange” is a user-friendly online platform designed specifically for students to buy, sell, or trade used textbooks. The site helps students save money and find affordable books by allowing them to list and search for pre-loved textbooks within their local area or campus.</p>
            <div class="d-flex">
              <a href="/choice/1.html" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=UMogVGvhs7U" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset('/images/2.png')}}" class="img-fluid" alt="" style="width:50vh; height: 50vh; margin-left: 90px;">
          </div>
        </div>
      </div>



     
      
      
      <br><br><br>
      <div class="container section-title" data-aos="fade-up">
        <h2 id="Genre">GENRE</h2>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-ghost"></i>
                <h4 class="title"><a href="/choice/1.html" class="stretched-link">Horror</a></h4>
              </div>  
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-wand-magic"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Fantasy</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>  
                <i class="fa-solid fa-heart"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Romance</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-face-grin-hearts"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Romance Comedy</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-mars-double"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Bromance</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-rocket"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Fiction</a></h4>
              </div>
            </div><!--End Icon Box -->


            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-book"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Non-Fiction</a></h4>
              </div>
            </div><!--End Icon Box -->


            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-question"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Mystery</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-plane"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Travel</a></h4> 
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-book-medical"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Health and Wellness</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-book-open"></i>
                <h4 class="title"><a href="" class="stretched-link">Poetry</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-book-bookmark"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Graphic Novels</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-burger"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Cookery</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-computer"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Information Technology</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-face-smile-wink"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Possessive</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-volleyball"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Sports</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-seedling"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Science</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-scale-balanced"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Politics</a></h4>
              </div>
            </div><!--End Icon Box -->


            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-brain"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Philosophy</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box"><br>
                <i class="fa-solid fa-briefcase"></i>
                <h4 class="title"><a href="/userfile/user.html" class="stretched-link">Business</a></h4>
              </div>
            </div><!--End Icon Box -->
          </div>
        </div>
      </div>

      <!--Games Section-->
      <div class="container section-title" data-aos="fade-up" id="Games"></div>
        <h2 id="Genre">Games</h2>
        <p>Play Games for Vouchers</p>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box" style="border-radius: 50%;"><br>
                <i class="fa-solid fa-ghost"></i>
                <h4 class="title"><a href="" class="stretched-link">Flappy Ghost</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box" style="border-radius: 50%;"><br>
                <i class="fa-solid fa-book"></i>
                <h4 class="title"><a href="" class="stretched-link">Quizlet</a></h4>
              </div>
            </div><!--End Icon Box -->
            
            <div class="col-xl-3 col-md-6">
              <div class="icon-box" style="border-radius: 50%;"><br>
                <i class="fa-solid fa-book"></i>
                <h4 class="title"><a href="" class="stretched-link">Memory Game</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box" style="border-radius: 50%;"><br>
                <i class="fa-solid fa-book"></i>
                <h4 class="title"><a href="" class="stretched-link">Hang-Man</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 id="contact">Contact</h2>
        <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Davao del Norte State College</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3 style="margin-left: 65px;">    Call Us</h3>
                <p>0926++++++++++++++</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3 style="margin-left: 10px;">Email Us</h3>
                <p>corpuz.jerlyn@dnsc.edu.ph</p>
              </div>
            </div><!-- End Info Item -->

          </div> <!--DITPOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->
    <section>
    </section>
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" id="about">
      <div class="row gy-5">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2>About Us</h2>
          <p>Description ng mga feo</p>
          
        </div>
        
      </div>
    </div>







  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">BooXchange</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>