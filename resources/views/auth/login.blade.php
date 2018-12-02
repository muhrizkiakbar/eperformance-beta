@extends('layouts.app')

@section('body')
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="{{asset('images/logo/stack-logo-dark.png')}}" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Masuk e-Performance</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                      @csrf
                      <!-- Email -->
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Email"
                        name="email" value="{{ old('email') }}" required autofocus>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </fieldset>

                      <!-- Password -->
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        id="password" name="password" placeholder="Password" required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </fieldset>

                      <!-- Remember Me -->
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" class="chk-remember form-check-input"
                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me"> Ingat Saya</label>
                          </fieldset>
                        </div>
                      </div>

                      <!-- Submit -->
                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> {{ __('Login') }}</button>
                      
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-left text-center m-0 small">Diskominfo Prov. Kalsel TA 2018</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- <script src="{{asset('js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script> -->
  <!-- END PAGE LEVEL JS-->
  <script>
    $(document).ready(function(){
      
      // Remember checkbox
      if($('.chk-remember').length){
        $('.chk-remember').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
        });
      }
    });
  </script>
  
</body>
@endsection
