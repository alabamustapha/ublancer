<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/BQ5rqoUxsfQGHC35jWa5Ub/icons.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top"><a href="index.html" class="navbar-brand">{{ env('APP_NAME') }}</a>

      <form class="form-inline">

        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-secondary navbar-btn btn-shadow btn-gradient dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div>
        <!-- <input class="form-control mr-sm-2 my-sm-0" type="search" placeholder="Search" aria-label="Search"> -->
      </form>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
            <li class="nav-item"><a href="#about-us" class="nav-link link-scroll">Hire Freelancer</a></li>
            <li class="nav-item"><a href="#about-us" class="nav-link link-scroll">Find Work</a></li>
            <li class="nav-item"><a href="#about-us" class="nav-link link-scroll">How it Work</a></li>

            <li class="nav-item"><a href="#about-us" class="nav-link link-scroll"><i class="fa fa-sign-in"></i> Sign in</a></li>
          </ul>
          <div class="navbar-text">   
            <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Post a job</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Modal-->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Sign Up Modal</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" action="#">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" id="fullname">
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" placeholder="User Name" id="username">
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email Address" id="email">
              </div>
              <div class="form-group">
                <button type="submit" class="submit btn btn-primary btn-shadow btn-gradient">Signup</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <section id="hero" class="hero hero-home bg-gray">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 text order-2 order-lg-1">
            <h1>UBLancer &mdash; Freelance&nbsp;Script</h1>
            <p class="hero-text">Find & Hire talented freelancers. You need top quality freelancers who can make your business thrive.</p>
            <div class="CTA"><a href="#features" class="btn btn-primary btn-shadow btn-gradient link-scroll">Hire Freelancer</a><a href="#" class="btn btn-outline-primary">Sign Up Now</a></div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="img/Macbook.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>


    <section id="testimonials" class="categories">
      <div class="container">
        <header class="text-center no-margin-bottom">   
          <h2>Popular categories categories</h2>
          <p class="lead">Work with someone perfect for your team</p>
        </header>
        <div class="owl-carousel owl-theme categories-slider"> 
          <div class="item-holder">
            <div class="item">
              <div class="text">
                    <strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="text">
                <strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item text-center">
                <strong class="category-name">Web Design and Develpoment</strong>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="text">
                <strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="text">
                <strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
   
    <section id="about-us" class="about-us bg-gray">

      <div class="container">
        <h2>About Us</h2>
        <div class="row">
          <p class="lead col-lg-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. or randomised words which don't look even slightly believable. </p>
        </div><a href="#" class="btn btn-primary btn-shadow btn-gradient">Discover More</a>
      </div>
    </section>
   
    
    <section id="testimonials" class="testimonials">
      <div class="container">
        <header class="text-center no-margin-bottom">   
          <h2>Happy Clients</h2>
          <p class="lead">There are many variations of passages of Lorem Ipsum available, but the majority have</p>
        </header>
        <div class="owl-carousel owl-theme testimonials-slider"> 
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a href="#" class="brand">Landy</a>
            <ul class="contact-info list-unstyled">
              <li><a href="mailto:sales@landy.com">Sales@Landy.com</a></li>
              <li><a href="tel:123456789">+00 123 456 789</a></li>
            </ul>
            <ul class="social-icons list-inline">
              <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Selected Cases</h5>
            <ul class="links list-unstyled">
              <li> <a href="#">Guess Conntect</a></li>
              <li> <a href="#">Postly</a></li>
              <li> <a href="#">Iris Vor Arnim</a></li>
              <li> <a href="#">Yapital</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Selected Cases</h5>
            <ul class="links list-unstyled">
              <li> <a href="#">Guess Conntect</a></li>
              <li> <a href="#">Postly</a></li>
              <li> <a href="#">Iris Vor Arnim</a></li>
              <li> <a href="#">Yapital</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Selected Cases</h5>
            <ul class="links list-unstyled">
              <li> <a href="#">Guess Conntect</a></li>
              <li> <a href="#">Postly</a></li>
              <li> <a href="#">Iris Vor Arnim</a></li>
              <li> <a href="#">Yapital</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>&copy; 2017 ubxty.com. All rights reserved.                        </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>