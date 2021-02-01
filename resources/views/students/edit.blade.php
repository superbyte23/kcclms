@extends('layouts.template')

@section('content')

  <div class="content my-3">
    <div class="container-xl">
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h2 class="page-title">{{ $title }}</h2>
            {{-- <div class="text-muted mt-1">1-12 of 241 photos</div> --}}
          </div>
          <div class="col-auto ms-auto d-print-none">
            <div class="d-flex"> 
              <a href="{{route('student.index')}}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-0" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-11l-5 -5a1.5 1.5 0 0 1 0 -2l5 -5z" /><path d="M12 10l4 4m0 -4l-4 4" /></svg>
                <span class="d-none d-md-block ms-2">Back</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      {{-- data --}}
      <div class="row justify-content-center"> 
        <div class="col-lg-12">          
          <div class="card">
            <form method="POST" action="{{route('student.update', $std->id)}}" id="withFormValidation">
            @csrf
            @method('PATCH')
            <div class="card-header">
              <h3 class="card-title">Add New Student Form</h3>
            </div>
            <div class="card-body">
              <div class="row g-3"> 
                <div class="col-lg-3">                
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="first_name" value="{{ old('first_name') ? old('first_name') : $std->first_name }}">
                    <label>First Name <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-3"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="last_name" value="{{ old('last_name') ? old('last_name') : $std->last_name }}">
                    <label>Last Name <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-3"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="middle_name" value="{{ old('middle_name') ? old('middle_name') : $std->middle_name }}">
                    <label>Middle Name <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-3"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('suffix') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="suffix" value="{{ old('suffix') ? old('suffix') : $std->suffix }}">
                    <label>Suffix</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                      placeholder="Leave a comment here" style="height: 100px" name="address">{{ old('address') ? old('address') : $std->address }}</textarea>
                    <label>Address <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-4"> 
                  <div class="form-floating">  
                    <input type="date" id="calendar-simple" class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                    placeholder=" "  name="date_of_birth" value="{{ old('date_of_birth') ? old('date_of_birth') : $std->dob }}"> 
                    <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                  </div>
                </div>    
                <div class="col-lg-4"> 
                  <div class="form-floating">
                    <input type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="age" value="{{ old('age') ? old('age') : $std->age }}">
                    <label>Age <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-4"> 
                  <div class="form-floating">
                    <select class="form-select {{ $errors->has('gender') ? 'is-invalid' : '' }} cursor-pointer" id="floatingSelect"
                      placeholder=" " aria-label="" name="gender" >

                      @if(old('gender') && $std->gender == 'Female')
                        <option selected="">Male</option>
                        <option>Female</option> 
                      @elseif(old('gender') && $std->gender == 'Male')
                        <option selected="">Male</option>
                        <option>Female</option>
                      @else
                        <option value="" selected="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      @endif

                      
                    </select>
                    <label for="floatingSelect">Gender <span class="text-danger">*</span></label> 
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control {{ $errors->has('birth_place') ? 'is-invalid' : '' }}"
                      placeholder=" " style="height: 100px" name="birth_place">{{ old('birth_place') ? old('birth_place') : $std->birth_place }}</textarea>
                    <label>Place of Birth <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-4"> 
                  <div class="form-floating">  
                    <input type="text" class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="religion" value="{{ old('religion') ? old('religion') : $std->religion }}">
                    <label class="form-label">Religion</label>
                  </div>
                </div>    
                <div class="col-lg-4"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('civil_status') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="civil_status" value="{{ old('civil_status') ? old('civil_status') : $std->civil_status }}">
                    <label>Civil Status <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-4"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="nationality"  value="{{ old('nationality') ? old('nationality') : $std->nationality }}">
                    <label for="floatingSelect">Nationality <span class="text-danger">*</span></label>
                  </div>
                </div>
                <div class="col-lg-6">

                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="mobile" value="{{ old('mobile') ? old('mobile') : $std->mobile }}">
                    <label><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="7" y="4" width="10" height="16" rx="1" /><line x1="11" y1="5" x2="13" y2="5" /><line x1="12" y1="17" x2="12" y2="17.01" /></svg> Mobile Number <span class="text-danger">*</span></label>
                     
                  </div>
                </div>
                <div class="col-lg-6"> 
                  <div class="form-floating">
                    <input type="text" class="form-control {{ $errors->has('fb_account') ? 'is-invalid' : '' }}"
                    placeholder=" " autocomplete="off" name="fb_account" value="{{ old('fb_account') ? old('fb_account') : $std->fb_account }}">
                    <label><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>Facebook Link </label> 
                  </div>

                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <div class="d-flex">
                <a href="{{ route('student.index') }}" class="btn btn-link">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>Submit</button>
              </div>
            </div>
          </form>
          </div> 
        </div>
      </div>
    </div>
  </div> 
@endsection