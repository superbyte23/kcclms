@extends('layouts.template')

@section('content')

  <div class="content my-3">
    <div class="container-xl">
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h2 class="page-title">Students</h2>
            {{-- <div class="text-muted mt-1">1-12 of 241 photos</div> --}}
          </div>
          <div class="col-auto ms-auto d-print-none">
            <div class="d-flex">
              <div class="me-3 d-none d-md-block">
                <div class="input-icon">
                  <input type="text" class="form-control" placeholder="Search…">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  </span>
                </div>
              </div>
              <a href="{{route('student.create')}}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                New Student
              </a>
            </div>
          </div>
        </div>
      </div>
      {{-- data --}}
      <div class="col-12"> 
        <div class="card">
          <div class="table-responsive p-3 overflow-hidden">
            <table class="table table-vcenter table-mobile-md flex-wrap card-table" id="datatable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Role</th>
                  <th class="w-1"></th>
                </tr>
              </thead>
              <tbody> 
                @foreach($students as $std)
                <tr>
                  <td data-label="Name" class="px-0">
                    <div class="d-flex py-1 align-items-center">
                      <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span>
                      <div class="flex-fill">
                        <div class="font-weight-medium">{{ $std->first_name." ".$std->last_name }}</div>
                        <div class="text-muted"><a href="#" class="text-reset">{{ $std->fb_account}}</a></div>
                      </div>
                    </div>
                  </td>
                  <td data-label="Title">
                    <div>VP Sales</div>
                    <div class="text-muted">Business Development</div>
                  </td>
                  <td class="text-muted" data-label="Role">
                    User
                  </td>
                  <td class="px-0">
                    <div class="btn-list flex-nowrap">
                      <a href="{{ route('student.edit',$std->id) }}" class="btn btn-white">
                        Edit
                      </a>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                          Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="{{ route('student.show', $std->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg> <span class="ms-2">View More Details</span>
                          </a>
                          <form action="{{ route('student.destroy', $std->id) }}" class="hidden" method="POST">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="dropdown-item" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> <span class="ms-2">Delete</span>
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection