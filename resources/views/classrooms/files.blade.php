@extends('layouts.template')

@section('content')

  <div class="content my-3">
    <div class="container-xl"> 
      <div class="row">
        @include('classrooms.classmenu')
        <div class="box col-md-9"> 
          <div class="row row-list">
            <div class="col-md-12" id="poster"> 
              <h1>Files</h1>
            </div>
          </div> 
        </div> 
      </div>
    </div>
  </div> 
@endsection