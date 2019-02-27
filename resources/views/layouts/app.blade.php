<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- <link rel="stylesheet" href="{{URL::asset('css/jquery.notify.css')}}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        
    </head>
    <body>

      @include('inc.navbar')

      @yield('carousel')
      
      <!--Main layout-->
    
        @yield('content')
        
          


    @include('inc.footer')
        <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
  
        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">
  
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 mdb-color darken-3" role="tablist">
            <li class="nav-item ">
              <a class="nav-link user active text-muted" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"
                style="padding: 15px;
                border-radius: 0;
                "></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link user text-muted" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"
                style="padding: 15px;
                border-radius: 0;"></i>
                Register</a>
            </li>
          </ul>
  
          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
              <!--Body-->
              <div class="modal-body mb-1">

               

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">

                      <div class="md-form form-sm mb-3 col-md-12">
                        
                        <input type="email" id="email" class="form-control form-control-sm  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                        <label data-error="wrong" data-success="right" for="email"><i class="fas fa-envelope "></i> Your email</label>
                      </div>

                      <div class="md-form form-sm mb-3 col-md-12">
                        
                        <input type="password" id="modalLRInput12 password" class="form-control form-control-sm  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required >
                        <label data-error="wrong" data-success="right" for="modalLRInput12"><i class="fas fa-lock "></i> Your password</label>
                        @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                  </div>

                  

                  <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                      </div>
                  </div>

                   <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>Not a member? <a href="#" data-toggle="tab" href="#panel8" role="tab" class="blue-text">Sign Up</a></p>

                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      
                      <p><a href="#" class="blue-text">{{ __('Forgot Password?') }}?</a></p>
                  </a>
                  @endif
                  
                </div>

                <button type="submit" class="btn btn-info waves-effect ml-auto">
                  {{ __('Login') }}
              </button>

              
              </div>
              

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                         
                      </div>
                  </div>
              </form>
              </div>
             
  
            </div>
            <!--/.Panel 7-->
  
            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">
  
              <!--Body-->
              <div class="modal-body">

                  <form method="POST" action="{{ route('register') }}">
                      @csrf

                      
                      <div class="md-form form-sm mb-5">
                          <i class="fas fa-user prefix"></i>
                          <input type="text" id="modalLRInput18 name" class="form-control form-control-sm {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                          <label data-error="wrong" data-success="right" for="modalLRInput18">Your Name</label>

                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                      
                      <div class="md-form form-sm mb-5">
                          <i class="fas fa-envelope prefix"></i>
                          <input type="email" id="modalLRInput19 email" class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                          <label data-error="wrong" data-success="right" for="modalLRInput19">Your email</label>
                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
          
                        <div class="md-form form-sm mb-5">
                          <i class="fas fa-lock prefix"></i>
                          <input type="password" id="modalLRInput13 password" class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
          
                        <div class="md-form form-sm mb-4">
                          <i class="fas fa-lock prefix"></i>
                          <input type="password" id="modalLRInput14 confirm-password" class="form-control form-control-sm " name="password_confirmation" required>
                          <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                        </div>
          
                        <div class="text-center form-sm mt-2">
                          <button type="submit" class="btn btn-info mdb-color">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                        </div>
          
                  </form>
                
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-right">
                  <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!--/.Panel 8-->
          </div>
  
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->
  {{-- {{ dd($errors) }} --}}
                
        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    {{-- <script type="text/javascript" src="{{URL::asset('js/jquery.notify.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('extra-js')


    </body>
</html>
