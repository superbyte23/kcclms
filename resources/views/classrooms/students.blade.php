@extends('layouts.template')

@section('content')

  <div class="content my-3">
    <div class="container-xl"> 
       <div class="row">
            @include('classrooms.classmenu')
            <div class="box col-md-9">
              <div class="container-xl">
                <div class="mt-3">
                  <div class="page-header mb-0">
                    <div class="row align-items-center">
                      <div class="col"> 
                        <h2 class="page-title">
                          <h1>Students</h1>
                        </h2>
                      </div>
                      <div class="col-auto"> 
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateClass" id="addclasslink">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                          <span class="ms-2 d-none d-sm-inline-block">Add Student</span>
                        </a>  
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div> 
          </div>
        </div>
    </div>
  </div> 
@endsection