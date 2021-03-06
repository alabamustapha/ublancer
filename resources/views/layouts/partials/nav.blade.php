<!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top"><a href="{{ route('home') }}" class="navbar-brand">{{ env('APP_NAME') }}</a>

      <form class="form-inline d-none d-sm-block">
          <input type="text" class="form-control" placeholder="search...">
      </form>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
            <li class="nav-item">
              <a href="{{ route('post_job') }}" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Post a job</a>
            </li>
            <li class="nav-item"><a href="{{ route('freelancer') }}" class="nav-link link-scroll">Hire Freelancer</a></li>
            <li class="nav-item"><a href="{{ route('jobs') }}" class="nav-link link-scroll">Find Work</a></li>
            <li class="nav-item"><a href="{{ route('how') }}" class="nav-link link-scroll">How it Work</a></li>
            

            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-scroll"><i class="fa fa-sign-in"></i> Sign in</a></li>
            @endguest

            @auth
              <li class="nav-item"><a href="#" class="nav-link link-scroll"><i class="fa fa-user"></i> {{ Auth::user()->username }}</a></li>
            @endauth

          </ul>

        </div>
      </nav>

      
    </header>