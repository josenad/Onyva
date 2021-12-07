<!DOCTYPE html>
<html lang="en">
   <!-- Header Goes Here -->
   @include('header')
   <!-- Header Goes Here -->
   <body>
      <style>
         #signup-btn {display:none;} 
      </style>
      <div class="content-wrapper">
         <!-- Header Goes Here -->
         @include('menu')
         <!-- Header Goes Here -->
         <section class="wrapper bg-gradient-primary">
            <div class="container pt-10 pt-md-14 pb-8 text-center">
               <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                  <div class="col-lg-6">
                     <figure><img class="w-auto rounded" src="{{ asset('img/home/signup.jpg') }}" srcset="{{ asset('img/concept/concept2@2x.png 2x ') }}" alt="" /></figure>
                  </div>
                  <!-- /column -->
                  <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
                     <!-- <h4 class="display-1 mb-5 mx-md-n5 mx-lg-0">Inscription</h4> -->
                     <form class="text-start mb-3" method='POST' action="{{route('register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-4">
                           <input type="text" class="form-control" placeholder="Nom" id="surname_user" name="name">
                           <label for="name_user">Nom</label>

                           @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror                        
                        </div>

                        <div class="form-floating mb-4">
                           <input type="text" class="form-control" placeholder="Prenom" id="first_name" name="first_name">
                           <label for="first_name">Prenom</label>

                           @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="form-floating mb-4">
                           <input type="tel" class="form-control" placeholder="Tel" id="phone" name="phone">
                           <label for="phone"><i class="uil uil-phone pe-1"></i>Tel</label>

                           @error('phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="form-floating mb-4">
                           <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email">
                           <label for="loginEmail"><i class="uil uil-fast-mail pe-1"></i>Email</label>
                        
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                        <div class="form-floating mb-4">
                           <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
                           <label for="loginPassword"><i class="uil uil-keyboard pe-1"></i>Password</label>

                           @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="form-floating mb-4">
                           <input type="password" class="form-control" placeholder="Confirm password" id="password-confirm" name="password_confirmation">
                           <label for="loginPassword"><i class="uil uil-keyboard pe-1"></i>Password</label>
                        </div>

                        <div class="mb-3">
                           <label for="formFile" class="form-label">Image de profil : </label>
                           <input class="form-control" type="file" id="imageProfile" name="imageProfile">
                        </div>
                        
                        <button type='submit' class="btn btn-primary rounded-pill btn-login w-100 mb-2">Je M'inscris</button>
                        <div class="divider-icon my-4"><br></div>
                        <nav class="nav social justify-content-center text-center">
                           <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                           <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                           <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                        </nav>
                     </form>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
      </div>
      <!-- /.content-wrapper -->
      @include('footer')
   </body>
</html>