<!DOCTYPE html>
<html lang="en">
   <!-- Header Goes Here -->
   @include ('header')
   
   <style>
      .card-img-top img{
         border-radius:0.4rem !important;
      }
   </style>
   <!-- Header Goes Here -->
   <body>
      <div class="content-wrapper">
         <!-- Header Goes Here -->
         @include ('menu')
         <!-- Header Goes Here -->
         <section id="top" class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('img/home/jumbo2.jpg')}}">
            <div class="container pt-16 pb-22 pt-md-16 pb-md-22 text-center">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <h1 class="display-1 mb-3 text-white">Titre de l'evenement</h1>
                     <nav class="d-inline-block mt-4">
                        <ol class="breadcrumb text-white">
                           <li class="breadcrumb-item"><a id="participateBtn" href="#" class="btn btn-primary rounded-pill mb-3"><i class="uil uil-plus"> </i> Inviter des personnes</a></li>
                           <li class="breadcrumb-item"><a href="#co-voiture" class="btn btn-danger rounded-pill mb-3"><i class="uil uil-trash-alt"> </i> Supprimer l'événement</a></li>
                        </ol>
                     </nav>
                     <!-- /buttons -->
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
         <!-- /section -->
         <section class="wrapper bg-light upper-end">
            <div class="container pb-11">
               <div class="row mb-14 mb-md-15">
                  <div class="col-xl-10 mx-auto mt-n19">
                     <div class="card">
                        <div class="row gx-0">
                           <div class="col-lg-6 align-self-stretch">
                              <div class="map map-full rounded-top rounded-lg-start">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12689.82598376783!2d-122.02156526949733!3d37.3317!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63bb79532baa6af4!2sApple%20Campus!5e0!3m2!1sen!2str!4v1583842280816!5m2!1sen!2str" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                              </div>
                              <!-- /.map -->
                           </div>
                           <!--/column -->
                           <div class="col-lg-6">
                              <div class="p-8 p-md-9 p-lg-12">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-start justify-content-start">
                                       <h2 class="mb-8">Informations</h2>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div class="align-self-start justify-content-start">
                                       <h5 class="mb-1">Address</h5>
                                       <address>Moonshine St. 14/05 Light City <br class="d-none d-md-block" />London, United Kingdom</address>
                                    </div>
                                 </div>
                                 <!--/div -->
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-calendar-alt"></i> </div>
                                    </div>
                                    <div>
                                       <h5 class="mb-1">Date & Time</h5>
                                       <p>Friday, November 23, 2021 <br class="d-none d-md-block" />20:00</p>
                                    </div>
                                 </div>
                                 <!--/div -->
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-info-circle"></i> </div>
                                    </div>
                                    <div>
                                       <h5 class="mb-1">More Info</h5>
                                       <p class="mb-0"><a href="#" class="link-body">Organzier name</a></p>
                                       <p>Event Type</p>
                                    </div>
                                 </div>
                                 <!--/div -->
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-users-alt"></i> </div>
                                    </div>
                                    <div>
                                       <h5 class="mb-1 mt-1">1.2k followers</h5>
                                    </div>
                                 </div>
                              </div>
                              <!--/div -->
                           </div>
                           <!--/column -->
                        </div>
                        <!--/.row -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
               <div class="row mb-14 mb-mt-15">
                  <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                     <h2 class=" mb-4 text-left">Description de l'Événement</h2>
                     <p id="co-voiture" class="lead text-left mb-10">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
         <!-- /section -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Footer Here --->
      @include ('footer')
      <!-- Footer Here --->
      
   </body>
</html>