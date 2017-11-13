@extends('layouts.app')

@section('content')
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
@endsection
