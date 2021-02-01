@extends('layouts.template')

@section('content')

  <div class="content my-3">
    <div class="container-xl"> 
       <div class="row">
            @include('classrooms.classmenu')
            <!-- center content -->
            <div class="box col-md-6">
              <div class="card mb-3 text-white bg-{{$roominfo->colourvariant}} shadow-lg">
                <div class="card-body">
                  <div class="d-flex justify-content-start align-items-center ">
                    <div class="me-2">
                     <img src="{{asset($roominfo->avatar)}}" class="rounded-left" alt="Shape of You" width="60" height="60">
                    </div>
                    <div class="">
                     <h2 class="text-left">{{$roominfo->classname}}</h2> 
                    </div>
                    <div class="text-center ms-auto">
                      <p class="mb-0">Class Code <!-- <i class="fe fe-eye-off" id="classcodetoggle"></i>  --></p>
                      <h1>{{$roominfo->classcode}}</h1>
                    </div>
                  </div> 
                </div> 
              </div>
              <div class="row row-list">
                <div class="col-md-12" id="poster"> 
                  <div class="card post mb-3">
                    <div class="card-body border-0 pb-0 post-header"> 
                      <div class="row align-items-start"> 
                        <div class="col-auto pr-0">
                          <img src="{{asset('static/doodle/doodle-17.svg')}}" class="avatar avatar-md" width="48" height="48">
                        </div>
                        <div class="col">
                            KCC Cams user
                            <div class="text-muted">
                             Just now
                            </div>
                          </div>
                        <div class="col-auto pl-0">
                            <div class="dropdown">
                              <a href="#" class="link-secondary" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z"></path>
                                  <circle cx="5" cy="12" r="1"></circle>
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="19" cy="12" r="1"></circle>
                                </svg>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </div>
                          </div>
                      </div> 
                    </div>                     
                    <div class="card-body border-0 post-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione iure aut reprehenderit, cum impedit magni placeat unde cupiditate ex. Quibusdam tenetur, id corporis totam! Enim libero fugit facilis maiores nulla.
                      <div class="d-flex row p-0 mt-2">
                        <div class="col-6 pr-0">
                          <a href="#"><img src="../static/photos//9f36332564ca271d.jpg" class="h-100 w-100 object-cover" alt="Card side image"></a>
                        </div>
                        <div class="col-6 pl-0">
                          <a href="#" class="d-block"><img src="../static/photos/1b73704b282a8ec6.jpg" class="card-img-top"></a>
                        <a href="#" class="d-block"><img src="../static/photos/1194d63fe36a8670.jpg" class="card-img-top"></a>
                             
                        </div>
                       </div>
                    </div>
                    <div class="card-body border-0 pt-0 post-footer">
                      <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-icon border-0 me-2" aria-label="Button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-original-title="Like">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <path d="M7 11v 8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"></path>
                          </svg>
                        </a> 
                        <a href="#" class="text-muted ml-5">                             
                          467 likes
                        </a>  
                        <div class="ms-auto">
                          <a href="#" class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"></path>
                              <circle cx="12" cy="12" r="2"></circle>
                              <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2"></path>
                              <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2"></path>
                            </svg>
                            467
                          </a>
                          <a href="#" class="ml-3 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"></path>
                              <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7"></path>
                            </svg>
                            67
                          </a>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div> 
            </div>
            <!-- right side info -->
            <div class="col-md-3">
              <div style="position: -webkit-sticky; position: sticky; top: 0;">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-command"></i> Other Class</h3>                      
                </div>
                <div class="list-group card-list-group mb-2 border-0 py-0">
                  <div class="list-group-item">
                    <div class="row row-sm align-items-center">
                      <div class="col-auto p-1">
                        <img src="../static/doodle/doodle-62.svg" class="rounded-left" alt="Shape of You" width="60" height="60">
                      </div>
                      <div class="col">
                        <h4>Empowerment Technology</h4>
                        <div class="text-muted">
                          E-tech STEM 11 - Gratitude
                        </div>
                      </div>
                    </div>
                  </div> 
                </div> 
                <div class="card-body border-0 py-0 mb-2">
                  <div class="btn-list">
                      <a href="#" class="btn bg-lime-lt btn-icon" aria-label="Button" data-bs-toggle="tooltip" data-placement="bottom" title="" data-original-title="Photos/Videos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"></path>
                          <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path>
                          <circle cx="12" cy="13" r="3"></circle>
                        </svg>
                      </a>
                      <a href="#" class="btn bg-azure-lt btn-icon" aria-label="Button" data-bs-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tag a friend">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"></path>
                          <path d="M11 3L20 12a1.5 1.5 0 0 1 0 2L14 20a1.5 1.5 0 0 1 -2 0L3 11v-4a4 4 0 0 1 4 -4h4"></path>
                          <circle cx="9" cy="9" r="2"></circle>
                        </svg>
                      </a>
                      <a href="#" class="btn bg-yellow-lt btn-icon" aria-label="Button" data-bs-toggle="tooltip" data-placement="bottom" title="" data-original-title="Feeling/Activity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"></path>
                          <circle cx="12" cy="12" r="9"></circle>
                          <line x1="9" y1="9" x2="9.01" y2="9"></line>
                          <line x1="15" y1="9" x2="15.01" y2="9"></line>
                          <path d="M8 13a4 4 0 1 0 8 0m0 0H8"></path>
                        </svg>
                      </a>
                      <a href="#" class="btn bg-pink-lt btn-icon" aria-label="Button" data-bs-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check in">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"></path>
                          <line x1="18" y1="6" x2="18" y2="6.01"></line>
                          <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5"></path>
                          <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15"></polyline>
                          <line x1="9" y1="4" x2="9" y2="17"></line>
                          <line x1="15" y1="15" x2="15" y2="20"></line>
                        </svg>
                      </a>
                    </div>
                </div> 
                <div class="card-body text-center border-0 py-0 mb-3">
                  <h3 class="pt-2">45 Members</h3>
                  <div class="avatar-list avatar-list-stacked">
                    <span class="avatar">EB</span>
                    <span class="avatar" style="background-image: url(../static/avatars/016f.jpg)"></span>
                    <span class="avatar" style="background-image: url(../static/avatars/015m.jpg)"></span>
                    <span class="avatar" style="background-image: url(../static/avatars/017f.jpg)"></span>
                    <span class="avatar" style="background-image: url(../static/avatars/018f.jpg)"></span>
                    <span class="avatar">+8</span>
                  </div> 
                </div>
              </div>
              <!-- Class Information -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><i class="fe fe-info"></i> About ETECH</h3>                      
                </div>
                <div class="card-body">
                  <p>Empowerment Technology</p>
                </div>   
              </div>
            </div>
          </div>
        </div>
    </div>
  </div> 
@endsection