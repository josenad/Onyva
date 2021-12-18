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
   <body id=>

      <div class="content-wrapper">
         <!-- Header Goes Here -->
      
         @include('menu-loggedin')
         <!-- Header Goes Here -->
         <section id="top" class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('img/home/jumbo2.jpg')}}">
            <div class="container pt-16 pb-22 pt-md-16 pb-md-22 text-center">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <h1 class="display-1 mb-3 text-white">{{$event->name}}</h1>
                     <nav class="d-inline-block mt-4">
                        <ol class="breadcrumb text-white">
                           @if ($participate == 1)
                              <form method="post" action="{{url('/event/'.$event->id.'/participate/delete')}}">
                                 @method('DELETE')
                                 @csrf
                                 <li class="breadcrumb-item">
                                    <input type="hidden" value="{{$event->id}}">
                                    <button type="submit" id="participateBtn" class="btn btn-red rounded-pill mb-3">J'annule ma participation 😞</button>
                                 </li>
                              </form>
                           @else
                              <form method="POST" action="{{url('/event/'.$event->id.'/participate')}}">
                                 @csrf
                                 <li class="breadcrumb-item">
                                    <input type="hidden" value="{{$event->id}}">
                                    <button type="submit" id="participateBtn"class="btn btn-blue rounded-pill mb-3">Je Participe</button>
                                 </li>
                              </form>
                           @endif
                           <li><a href="#co-voiture" class="btn btn-green rounded-pill mb-3">Je Trouve un co-voiturage</a></li>
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
                                       <address>{{$event->coordinates->address}}</address>
                                    </div>
                                 </div>
                                 <!--/div -->
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-calendar-alt"></i> </div>
                                    </div>
                                    <div>
                                       <h5 class="mb-1">Date & Time</h5>
                                       <p>{{$event->date}}</p>
                                    </div>
                                 </div>
                                 <!--/div -->
                                 <div class="d-flex flex-row">
                                    <div>
                                       <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-info-circle"></i> </div>
                                    </div>
                                    <div>
                                       <h5 class="mb-1">More Info</h5>
                                       <p class="mb-0"><a href="#" class="link-body"> Organisateur : {{$event->user->name}}{{$event->user->name}}</a></p>
                                       <p>Evenement {{$event->type_event->name}}</p>
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
                     <p id="co-voiture" class="lead text-left mb-10">{{$event->description}}</p>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
               <div class="row">
                  <div class="card card-body col-lg-6 offset-lg-1 item post disabled">
                     <div>
                     <h3 class="mb-4 text-left">Co-Voiturage</h3>
                     </div>
                     <div id="carOwnerCancel" style="display:none;">
                        <p class="lead text-left mb-6">Thank you for taking being a chauffeur for this Event! You can edit or change at any time by using the below.</p>
                        <a href="#" class="btn btn-green rounded-pill" onclick="modifyCo(); return false">Modifier mon covoiturage</a>
                        <a href="#" class="btn btn-red rounded-pill">I can't make it anymore <span>😞</span></a>
                     </div>
                     <div id="carOwnerSubmit">
                        <p class="lead text-left mb-10">Comment comptez-vous vous rendre à l'événement ?</p>
                        <div class="form-check mb-5">
                           <input id="toggleDis1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked @if ($participate != 1) disabled @endif onclick="hide();">
                           <label class="form-check-label" for="flexRadioDefault2">
                           J'irai seul
                           </label>
                        </div>
                        <div class="form-check mb-5">
                           <input id="toggleDis2" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" @if ($participate != 1) disabled @endif onclick="show1(); hide1(); ">
                           <label class="form-check-label" for="flexRadioDefault1">
                           Je suis prêt à emmener des gens avec moi dans ma voiture
                           </label>
                           <form id="carOwnerForm" style="display:none;" class="mt-8" method="POST" action='{{route('createCarshare')}}' >
                              @csrf
                              <div class="form-floating mb-4">
                                 <input id="carOwnerLastName" type="text" class="form-control" placeholder="Nom" name="nameCarshare">
                                 <label for="carOwnerLastName">Nom</label>
                              </div>
                              <div class="form-floating mb-4">
                                 <input id="carCapacity" type="number" class="form-control" placeholder="Capacity" name="capacity">
                                 <label for="carCapacity">Capacity</label>
                              </div>
                              <div class="form-floating mb-4">
                                 <input id="carOwnerTel" type="tel" class="form-control" placeholder="Tel" name="phoneCarshare">
                                 <label for="carOwnerTel">Tel</label>
                              </div>
                              <div class="form-floating mb-4">
                                 <input id="carOwnerTel" type="time" class="form-control" placeholder="timeEvent" name="heure">
                              </div>
                              <div class="form-floating mb-6">
                                 <input id="carOwnerLieu" type="text" class="form-control" placeholder="Lieu de Rendez-Vous" name="meeting">
                                 <label for="carOwnerLieu">Lieu de Rendez-Vous</label>
                              </div>
                              <div class="form-floating mb-4">
                                 <button type="submit" class="btn btn-green rounded-pill" style="width:100%;" onclick="submitCo();">Je Comfirme</button>
                              </div>
                              <input type="hidden" value="{{$event->id}}" name="id_event">
                           </form>
                        </div>
                        <div class="form-check mb-8">
                           <input id="toggleDis3" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="hide(); show2();" @if ($participate != 1) disabled @endif >
                           <label class="form-check-label" for="flexRadioDefault1">
                           Je cherche à faire du covoiturage
                           </label>
                        </div>
                        <a id="participateBtn1" href="#top" class="btn btn-blue rounded-pill" style="width:100%;">Je Participe</a>
                        <div id="co-voitureur" style="display:none;">
                           @foreach ($listCarshare as $car)
                              <div class="row pt-6" style="background-color:#f9f9f9; padding:20px; border-bottom: 2px solid white;">
                                 <div class="col-lg-3 col-md-3 col-sm-4">
                                 <img class="rounded-circle w-15 mb-4" src="{{asset('img/home/user.jpg')}}" alt="">
                                 </div>
                                 <div class="col-lg-5 col-md-5 col-sm-8">
                                 <p class="mb-1">{{$car->user->name}} {{$car->user->first_name}}</p>
                                 <p class="mb-1">{{$car->coordinates->address}}</p>
                                 <p>{{$car->date}}</p>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                 <div class="icon text-secondary">
                                    <form method="POST" action="{{route('joinCarshare')}}">
                                       @csrf
                                       <input type="hidden" value="{{$car->id}}" name="id_carshare">
                                       <input type="hidden" value="{{$car->event_id}}" name="id_event">
                                       <button type="submit" class="btn btn-green rounded-pill">co-voiturage</a>
                                    </form>
                                 </div>
                                 </div>
                              </div>
                           @endforeach
                        </div>  
                     </div>
                  </div>
                  <div class="col-lg-4 offset-lg-1 item">
                  <div class="card">
                    <figure class="card-img-top"><a href="#"><span class="bg"></span> <img src="{{asset('img/home/driver.jpg')}}" alt=""></a>
                    </figure>
                  </div>
                  </div>
                  <!-- /column -->
               </div>
            </div>
            <!-- /.container -->
         </section>
         <!-- /section -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Footer Here --->
      @include ('footer')
      <!-- Footer Here --->
      <script>
         function changeBtnColor () {
           $(this).toggleClass("btn-red");
         };
         
         
         function submitCo(){
          document.getElementById('carOwnerSubmit').style.display ='none';
          document.getElementById('carOwnerCancel').style.display ='block';
         }
         
         function show1(){
          document.getElementById('carOwnerForm').style.display ='block';
         }
         function show2(){
          document.getElementById('co-voitureur').style.display ='block';
         }
         
         function hide(){
          document.getElementById('carOwnerForm').style.display ='none';
         }
         function hide1(){
          document.getElementById('co-voitureur').style.display ='none';
         }
        
         function modifyCo(){
          document.getElementById('carOwnerSubmit').style.display ='block';
          document.getElementById('carOwnerCancel').style.display ='none';
         }
         function btnParticipate(){
            var toggleDis1 = document.getElementById("toggleDis1");
            var toggleDis2 = document.getElementById("toggleDis2");
            var toggleDis3 = document.getElementById("toggleDis3"); 
         }

         </script>
      
   </body>
</html>