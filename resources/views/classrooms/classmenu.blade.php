<div class="col-md-3 d-print-none">
  <div class="card mb-3" style="position: -webkit-sticky; position: sticky; top: 0;" id="sub-menu">
    <div class="navbar navbar-expand-md">
      <div class="container-xl p-2 m-2 d-md-inline justify-content-between">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manageclass-menu" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="nav-item dropdown">
          <h2 class="pl-2 mb-0 d-flex justify-content-start align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md col-auto" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="3" y1="19" x2="21" y2="19" /><rect x="5" y="6" width="14" height="10" rx="1" /></svg><span class="pl-5 align-items-center">{{ $roominfo->classname }}</span></h2>  
        </div>
        <div class="navbar-collapse collapse mt-3" id="manageclass-menu" style="">
          <div class="row">                        
            <div class="card border-0 shadow-none mb-0"> 
              <div class="card-body px-0 py-0">
                <div class="list list-row"> 
                  <div class="list-item mx-0 border-0 p-0 mb-2">
                    <a href="{{route('classroom.show', $roominfo->classcode )}}" class="nav-item py-1 text-body d-flex text-decoration-none" id="addclasslink"> 
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 7.5v9l-4 2.25l-4 2.25l-4 -2.25l-4 -2.25v-9l4 -2.25l4 -2.25l4 2.25z" /><path d="M12 12l4 -2.25l4 -2.25" /><line x1="12" y1="12" x2="12" y2="21" /><path d="M12 12l-4 -2.25l-4 -2.25" /><path d="M20 12l-4 2v4.75" /><path d="M4 12l4 2l0 4.75" /><path d="M8 5.25l4 2.25l4 -2.25" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Dashboard
                      </span>
                    </a>  
                  </div>                            
                  <div class="list-item mx-0 border-0 p-0 mb-2">
                    <a href="{{ route('classroom.students', $roominfo->classcode) }}" class="nav-item py-1 text-body d-flex text-decoration-none" id="addclasslink"> 
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Students
                      </span>
                    </a>  
                  </div>
                  <div class="list-item mx-0 border-0 p-0 mb-2">
                    <a href="{{ route('classroom.files', $roominfo->classcode) }}" class="nav-item py-1 text-body d-flex text-decoration-none" id="addclasslink"> 
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M11 14h1v4h1" /><path d="M12 11h.01" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Files
                      </span>
                    </a>  
                  </div>                            
                  <div class="list-item mx-0 border-0 p-0 mb-2">
                    <a href="{{ route('classroom.academic', $roominfo->classcode) }}" class="nav-item py-1 text-body d-flex text-decoration-none" id="addclasslink"> 
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" /><path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Academic
                      </span>
                    </a>  
                  </div>
                  <div class="list-item mx-0 border-0 p-0 mb-2">
                    <a href="{{ route('classroom.settings', $roominfo->classcode) }}" class="nav-item py-1 text-body d-flex text-decoration-none" id="addclasslink"> 
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Settings
                      </span>
                    </a>  
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-0 shadow-none">
              <div class="card-header px-0" id="headingOne">
                <h5 class="mb-0">
                  <div class="card-title">Basic info</div>
                </h5>
              </div>
              <div class="card-body px-0  pb-0"> 
                <div class="mb-2">
                  <i class="fe fe-flag mx-1"></i>  
                  Subject: <strong>{{$roominfo->subjectid}}</strong>
                </div>
                <div class="mb-2">
                  <i class="fe fe-award mx-1"></i>  
                  Course: <strong>{{$roominfo->courseid}}</strong>
                </div>
                <div class="mb-2">
                  <i class="fe fe-map-pin mx-1"></i> 
                  Grade: <strong>
                    {{$roominfo->courselevelid }}</strong>
                  </div>
                  <div class="mb-2">
                    <i class="fe fe-home mx-1"></i> 
                    Section: <strong>{{$roominfo->section}}</strong>
                  </div>
                  <div class="mb-2">
                    <i class="fe fe-list mx-1"></i> 
                    Total Members: <strong> {{-- <?php echo count($members); ?>  --}}</strong>
                  </div>
                  <div>
                    <i class="fe fe-clock mx-1"></i>
                    <?php if ($roominfo->status == 'active'): ?>
                    Status: <span class="text-success">●</span> <strong>{{ucfirst($roominfo->status)}}</strong>
                    <?php else: ?>
                    Status: <span class="text-danger">●</span> <strong>{{ucfirst($roominfo->status)}}</strong>
                    <?php endif ?>
                  </div>
                </div>
              </div> 
            </div>
        </div> 
      </div>              
    </div> 
  </div> 
</div>