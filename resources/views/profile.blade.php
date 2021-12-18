<!DOCTYPE html>
<html lang="en">
   <!-- Header Goes Here -->
   @include ('header')
   <style>
     .active{
       font-weight:bold;
     }
     .post-date{
       color:#6bbea3;
     }
     .co-link{
      color:#6bbea3 !important;
     }
  </style>
   <body>
      <div class="content-wrapper">
      <div class="modal fade" id="modal-01" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
               <div class="modal-content text-center">
                  <div class="modal-body">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     <h3 class="mb-4"><b style="color:#3f78e0;">O</b>nyva</h3>
                     <h3 class="mb-4">Create an Event</h3>
                     <form class="text-start mb-3" method="POST" action="{{route('createEvent')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-4">
                           <input type="text" class="form-control" placeholder="event title" id="titleEvent" name="title">
                           <label for="loginEmail">Title</label>
                        </div>
                        <div class="form-floating mb-4">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="radioType[]" id="radioPublic" checked>
                              <label class="form-check-label" for="radioPublic">
                              Public
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="radioType[]" id="radioPrivate">
                              <label class="form-check-label" for="radioPrivate">
                              Private
                              </label>
                           </div>
                        </div>
                        <div class="form-floating mb-4">
                           <input type="text" class="form-control" placeholder="event address" id="addressEvent" name='addressEvent'>
                           <label for="addressEvent">Address</label>
                        </div>
                        <div class="form-floating mb-4">
                           <label for="Cateogry" style="position:relative !important;">Categorie</label>
                           <select class="form-control" name='category_event' id="category_event">
                              @foreach ($list_category_event as $category)
                                 <option value='{{$category->id}}'>{{$category->name}}</option>
                              @endforeach
                           </select>                           
                        </div>
                        <div class="form-floating mb-4">
                           <input type="date" class="form-control" placeholder="event date" id="dateEvent" name="dateEvent">
                        </div>
                        <div class="form-floating mb-4">
                           <input type="time" class="form-control" placeholder="event time" id="timeEvent" name="timeEvent">
                        </div>
                        <div class="mb-3">
                           <label for="formFile" class="form-label">Event Image</label>
                           <input class="form-control" type="file" id="eventImage" name="imageEvent">
                        </div>
                        <div class="mb-3">
                           <label for="eventDescription" class="form-label">Event Description</label>
                           <textarea class="form-control" type="textarea" placeholder="Description" id="eventDescription" name="eventDescription"></textarea>
                        </div>
                        <div class="mb-3 mt-10">
                     <button class="btn btn-primary rounded-pill btn-login w-100 mb-2">Créer évenement</button>
                     </form>
                  </div>
                  </div>
                  <!-- /form -->
               </div>
               <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
         </div>
         <!--/.modal-dialog -->
      </div>
      <!--/.modal -->   
      <div class="modal fade" id="modal-01" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
               <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <h3 class="mb-4">Login to <b style="color:#3f78e0;">O</b>nyva</h3>
                  <form class="text-start mb-3">
                     <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                     </div>
                     <div class="form-floating mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <label for="loginPassword">Password</label>
                     </div>
                     <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">S'identifier</a>
                  </form>
                  <!-- /form -->
                  <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                  <p class="mb-0">Don't have an account? <a href="#" class="hover">Inscrivez-vous</a></p>
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
      <!-- Header Goes Here -->
      @include ('menu-loggedin')
      <!-- Header Goes Here -->
      <section id="top" class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('img/home/party.jpg')}}">
         <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
            <div class="row">
               <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light">
         <div class="row">
            <div class="col-lg-3 col-sm-12 mt-n19 container pb-14 pb-md-16">
               <div class="card">
                  <figure class="card-img-top overlay overlay1 hover-scale">
                     <a href="#"><span class="bg"></span> <img src="{{Storage::url($info_profile->image)}}" alt=""></a>
                     <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                     </figcaption>
                  </figure>
                  <div class="card-body">
                     <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-4">{{$info_profile->name}} {{$info_profile->first_name}}</h2>
                     </div>
                     <!-- /.post-header -->
                     <div class="post-content">
                        <div class="d-flex flex-row">
                           <div>
                              <div class="icon text-primary fs-24 me-4 mt-n1"> <i class="uil uil-mailbox"></i> </div>
                           </div>
                           <div class="align-self-start justify-content-start">
                              <p class="mb-1">{{$info_profile->email}}</p>
                           </div>
                        </div>
                        <div class="d-flex flex-row">
                           <div>
                              <div class="icon text-primary fs-24 me-4 mt-n1"> <i class="uil uil-phone-alt"></i> </div>
                           </div>
                           <div class="align-self-start justify-content-start">
                              <p class="mb-1">{{$info_profile->phone}}</p>
                           </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                           <div>
                              <div class="icon text-primary fs-24 me-4 mt-n1"> <i class="uil uil-lock-alt"></i> </div>
                           </div>
                           <div class="align-self-start justify-content-start">
                              <a class="mb-1" href="{{url('/forgot-password')}}">Change Password</a>
                           </div>
                        </div>
                     </div>
                     <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
               </div>
            </div>
            <div class="col-lg-8 mt-n19 container pb-14 pb-md-16">
               <div class="card" style="padding: 2rem;">
                  <ul class="nav nav-tabs nav-pills" style="justify-content: space-around;">
                     <li class="nav-item"> 
                        <a class="active" data-bs-toggle="tab" href="#upcoming" style="font-size: 20px;">
                        <span>My Upcoming Events</span>
                        </a>
                     </li>
                     <li class="nav-item"> 
                        <a class="link-dark" data-bs-toggle="tab" href="#myEvents" style="font-size: 20px;">
                        <span>My Events</span>
                        </a> 
                     </li>
                     <li class="nav-item"> 
                        <a class="link-dark" data-bs-toggle="tab" href="#messagerie" style="font-size: 20px;" disabled>
                        <span>Messagerie</span>
                        </a> 
                     </li>
                     <li class="nav-item"> 
                     <a href="#top" class="btn btn-blue rounded-pill" style="width:100%;" data-bs-toggle="modal" data-bs-target="#modal-01">+ Create an Event</a>
                     </li>
                  </ul>
                  <!-- /.nav-tabs -->
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="upcoming">
                        <div class="row mt-10">
                           @foreach ($list_participation_event_upcoming as $event)
                           <div class="col-lg-4 col-md-6 col-sm-12 mb-6">
                              <div class="card">
                                 <figure class="card-img-top overlay overlay1 hover-scale">
                                    <a href="{{url('/event/'.$event->id.'/detail')}}"><span class="bg"></span> <img src="{{Storage::url($event->image)}}" alt=""></a>
                                    <figcaption>
                                       <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                 </figure>
                                 <div class="card-body">
                                    <div class="post-header">
                                       <div class="post-category text-line">
                                          <a href="#" class="hover" rel="category">{{$event->category->name}}</a>
                                       </div>
                                       <!-- /.post-category -->
                                       <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{url('/event/'.$event->id.'/detail')}}">{{$event->name}}</h2></a>
                                       <p class="post-date mb-1"><span>{{$event->date}}</span></p>
                                       <p class="post-location mb-1"><span>{{$event->coordinates->address}}</span></p>
                                       <p class="post-event-type mb-1"><span>{{$event->type_event->name}}</span></p>
                                       <p class="post-organizateur mb-1"><span>{{$event->user->name}}  {{$event->user->first_name}}</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                 </div>
                                 <!--/.card-body -->
                                 <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0" style="list-style-type: none;">
                                       <li class="post-followers">1.1<span>k followers</span></li>
                                       <li class="co-link post-likes ms-auto"><a href="#">co-voiturage ></a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           
                        </div>
                     </div>
                     <!--/.tab-pane -->
                     <div class="tab-pane fade" id="myEvents">
                        <div class="row mt-10">
                        @foreach ($list_event_user as $event)
                           <div class="col-lg-4 col-md-6 col-sm-12 mb-6">
                           <div class="card">
                              <figure class="card-img-top overlay overlay1 hover-scale">
                                 <a href="{{url('/event/'.$event->id.'/detail')}}"><span class="bg"></span> <img src="{{Storage::url($event->image)}}" alt=""></a>
                                 <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                 </figcaption>
                              </figure>
                              <div class="card-body">
                                 <div class="post-header">
                                    <div class="post-category text-line">
                                       <a href="#" class="hover" rel="category">{{$event->category->name}}</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{url('/event/'.$event->id.'/detail')}}">{{$event->name}}</h2></a>
                                    <p class="post-date mb-1"><span>{{$event->date}}</span></p>
                                    <p class="post-location mb-1"><span>{{$event->coordinates->address}}</span></p>
                                    <p class="post-event-type mb-1"><span>{{$event->type_event->name}}</span></p>
                                    <p class="post-organizateur mb-1"><span>{{$event->user->name}}  {{$event->user->first_name}}</span></p>
                                 </div>
                                 <!-- /.post-header -->
                              </div>
                              <!--/.card-body -->
                              <div class="card-footer">
                                 <ul class="post-meta d-flex mb-0" style="list-style-type: none;">
                                    <li class="post-followers">1.1<span>k followers</span></li>
                                    <li class="co-link post-likes ms-auto"><a href="#">co-voiturage ></a></li>
                                 </ul>
                                 <!-- /.post-meta -->
                              </div>
                           </div>
                        </div>
                        @endforeach
                        </div>
                     </div>
                     <!--/.tab-pane -->
                     <div class="tab-pane fade" id="messagerie">
                        ...
                     </div>
                     <!--/.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
               </div>
            </div>
            <!-- /.container -->
      </section>
      <!-- /section -->
      </div>
      <!-- /.content-wrapper -->
      @include('footer')
   </body>
</html>