<header class="wrapper bg-soft-primary">
<nav class="navbar navbar-expand-lg classic transparent navbar-light pt-4 pb-4">
  <div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100">
      <a href="{{route('dashboard')}}">
        <img src="{{asset('img/logo.png')}}" srcset="{{asset('img/logo@2x.png 2x')}}" alt="" />
      </a>
    </div>
    <div class="navbar-collapse offcanvas-nav">
      <div class="offcanvas-header d-lg-none d-xl-none">
        <a href="{{route('dashboard')}}"><img src="{{asset('img/logo-light.png')}}" srcset="{{asset('img/logo-light@2x.png 2x')}}" alt="" /></a>
        <ul class="navbar-nav sm-collapsible mt-5">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-01">S'identifier</a>   
        </ul>
        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
      </div>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other ms-lg-4">
      <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
        <li class="nav-item d-none d-md-block">
          <a href="#" id="signup-btn" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-01">S'identifier</a>
        </li>
        <li class="nav-item d-lg-none">
          <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
        </li>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-other -->
    <!-- /.offcanvas-info -->
  </div>
  <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  <div class="modal fade" id="modal-01" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h3 class="mb-4">Login to <b style="color:#3f78e0;">O</b>nyva</h3>
        <form class="text-start mb-3" method='POST' action="{{route('login')}}">
          @csrf
          <div class="form-floating mb-4">
            <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email">
            <label for="loginEmail">Email</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
            <label for="loginPassword">Password</label>
          </div>
          <button class="btn btn-primary rounded-pill btn-login w-100 mb-2">S'identifier</button>
        </form>
        <!-- /form -->
        <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
        <p class="mb-0">Don't have an account? <a href="{{route('register')}}" class="hover">Inscrivez-vous</a></p>
        <div class="divider-icon my-4">or</div>
        <nav class="nav social justify-content-center text-center">
          <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
        </nav>
        <!--/.social -->
      </div>
      <!--/.modal-content -->
    </div>
    <!--/.modal-body -->
  </div>
  <!--/.modal-dialog -->
  </div>
<!--/.modal -->
    </header>