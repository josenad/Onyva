<!DOCTYPE html>
<html lang="en">
   <!-- Header Goes Here -->
   @include ('header')
   <!-- Header Goes Here -->
   <body>
      <div class="content-wrapper">
         <!-- Header Goes Here -->
         @guest
            @include ('menu')
         @endguest

         @auth
            @include ('menu-loggedin')
         @endauth
         <!-- Header Goes Here -->
         <section class="wrapper bg-gradient-primary">
            <div class="container pt-10 pt-md-14 pb-8 text-center">
               <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                  <div class="col-lg-7">
                     <!-- <figure><img class="w-auto" src="./assets/img/home/jumbo1.jpg" srcset="./assets/img/concept/concept2@2x.png 2x" alt="" /></figure> -->
                     <div class="basic-slider owl-carousel carousel-fade dots-over" data-margin="5" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="1000" data-bs-interval="true">
                        <div class="item"><img src="{{asset('img/home/jumbo1.jpg')}}" class="rounded" alt="" /></div>
                        <div class="item"><img src="{{asset('img/home/jumbo2.jpg')}}" class="rounded" alt="" /></div>
                        <div class="item"><img src="{{asset('img/home/jumbo3.jpg')}}" class="rounded" alt="" /></div>
                     </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
                     <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Votre destination numéro un pour vos événements et covoiturage.</h1>
                     <p class="lead fs-lg mb-7">Onyva vous aide à trouver les événements parfaits qui correspondent à votre style de vie.</p>
                     <span><a class="btn btn-primary rounded-pill me-2">Voir les événements</a></span>
                     <span><a class="btn btn-success rounded-pill me-2">Créer un événement</a></span>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
         <section class="wrapper bg-light">
            <div class="container pt-14 container pt-14 pt-md-14">
               <div class="row text-center">
                  <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                     <h2 class="fs-16 text-uppercase text-muted mb-3">What We Do?</h2>
                     <h3 class="display-4 mb-4 px-xl-10">Événements populaires.</h3>
                     <p class="mb-10">Vous recherchez des activités en France? Que vous soyez un habitant de la région, un nouveau venu en ville ou simplement de passage, nous avons plein de bons conseils et d'événements.</p>
                  </div>
                  <!-- /column -->
               </div>
               <ul class="nav nav-tabs nav-pills" style="justify-content: center;">
                  <li class="nav-item"> 
                     <a class="nav-link active" data-bs-toggle="tab" href="#all">
                     <i class="uil uil-check pe-1"></i>
                     <span>Tous</span>
                     </a>
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#online">
                     <i class="uil uil-globe pe-1"></i>
                     <span>En Ligne</span>
                     </a> 
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#today">
                     <i class="uil uil-exclamation-octagon pe-1"></i>
                     <span>Aujourdhui</span>
                     </a> 
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#weekend">
                     <i class="uil uil-exclamation-circle pe-1"></i>
                     <span>Ce Week-end</span>
                     </a> 
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#free">
                     <i class="uil uil-smile-beam pe-1"></i>
                     <span>Gratuits</span>
                     </a> 
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#food">
                     <i class="uil uil-food pe-1"></i>
                     <span>Gastronomie</span>
                     </a> 
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" data-bs-toggle="tab" href="#charity">
                     <i class="uil uil-flower pe-1"></i>
                     <span>Charité</span>
                     </a> 
                  </li>
               </ul>
               <!-- /.nav-tabs -->
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="all">
                    <div class="row mt-10">
                       <div class="col-lg-4 col-md-4 col-sm-12 mb-6">
                       <div class="card">
                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"><span class="bg"></span> <img src="{{asset('img/home/dj-1.jpg')}}" alt=""></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                          <a href="#" class="hover" rel="category">Gastronomie</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="#">Ligula tristique quis risus</a></h2>
                        <p class="post-date mb-1"><span>14 Apr 2021</span></p>
                        <p class="post-location mb-1"><span>Location, City</span></p>
                        <p class="post-event-type mb-1"><span>Free</span></p>
                        <p class="post-organizateur mb-1"><span>Organizateur</span></p>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content mb-2 mt-4">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0" style="list-style-type: none;">
                        <li class="post-followers">1.1<span>k followers</span></li>
                        <li class="co-link post-likes ms-auto"><a href="#">Trouvez un co-voiturage ></a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                       </div>
                     </div>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="online">
                     ...
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="today">
                     ...
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="weekend">
                     ...
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="free">
                     ...
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="food">
                     ...
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="charity">
                     ...
                  </div>
                  <!--/.tab-pane -->
               </div>
               <!-- /.tab-content -->
               <!-- /.position-relative -->
            </div>
            <!-- /.container -->
         </section>
      </div>
      <!-- /.content-wrapper -->
      @include ('footer')
   </body>
</html>