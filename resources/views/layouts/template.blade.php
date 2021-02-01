<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ 'KCCLMS' }}</title>
    {{-- tailselect --}}
    <link href="{{ asset('dist/libs/tail.select/css/bootstrap4/tail.select-default.min.css')}}" rel="stylesheet" >

    {{-- datatable bootstrap 5 --}} 
    <link href="{{asset('dist/libs/datatable/dist/css/datatable.css')}}" rel="stylesheet"/>

    {{-- faltpicker --}}
    <link href="{{asset('dist/libs/flatpickr/dist/flatpickr.min.css')}}" rel="stylesheet"/>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/demo.min.css')}}" rel="stylesheet"/>
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      body{
        font-family: 'Poppins', sans-serif;
      } 
    </style>
  </head>
  <body class="antialiased">
    <div class="page"> 

      @include('layouts.header')

      @include('layouts.navbar')

      @yield('content')

      @include('layouts.footer')

    </div> 
    <!-- Libs JS -->
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('dist/libs/tail.select/js/tail.select-full.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js')}}"></script>
    <script src="{{ asset('dist/libs/jquery/dist/jquery.slim.min.js')}}"></script> 
    {{-- dataTables --}}
    <script src="{{ asset('dist/libs/datatable/dist/js/datatable.js')}}"></script>
    <script src="{{ asset('dist/libs/datatable/dist/js/datatable.bootstrap5.js')}}"></script>
    <script>
      $(document).ready(function() {
        $('#datatable').DataTable();
      });
    </script> 
    <script>
      tail.select(".tailSelect", {
        search: true,
        descriptions: true,
        classNames: 'w-100',
      });
    </script>
    
    <div class="toast-container position-absolute top-0 end-0 p-3" id="toastPlacement">
      <div class="toast toastsuccess text-white {{ session()->get('success') }}" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"> 
          <strong class="me-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16"><path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
              <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/></svg> Message</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          <p>{{ session()->get('message') }}</p> 
        </div> 
      </div>
    </div> 
    <div class="toast-container position-absolute top-0 end-0 p-3" id="toastPlacement">
      <div class="toast text-danger bg-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"> 
          <strong class="me-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg> Message</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          <ul class="list-unstyled"> 
            @foreach ($errors->all() as $error)
                <li class="p"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/></svg> {{ $error }}</li>
            @endforeach
          </ul>
        </div> 
      </div>
    </div>

    @if(session()->has('success'))
    <script>
      $(document).ready(function(){
        $('.toastsuccess').toast('show', {delay:3000});         
      });
    </script> 
    @endif
    
    @if ($errors->any())
    <script>
      $(document).ready(function(){
        $('.toast').toast('show', {delay:3000}); 
      });
    </script>
    @endif
      <script type="text/javascript">
        $(document).ready(function() {
          
        });
      </script>
       {{-- flatpicker --}}
    <script src="{{asset('dist/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          flatpickr(document.getElementById('calendar-simple'), {
          });
        });
      </script>
  </body>
</html>