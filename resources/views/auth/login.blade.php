@include('index')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login form</title>
      </head>


      <body class="hold-transition login-page" style="background-image: url({{asset('/images/APS2.png')}}) "  alt="User profile picture">
        <div class="login-box">
          <!-- /.login-logo -->
          <div class="card card-outline card-success">
            <div class="card-header text-center">
              <div class="card card-header card-success"> <a href="" class="h2"><b>Al-Hikma public school</b>|Doaba</a>
             </div>
            </div>
    
     <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
{{-- start of form data --}}
      <form action="{{ route('auth.check')}}" method="post">

        @if (Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
        @endif


        @csrf
        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter Your Password" name="password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            {{-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> --}}
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      {{-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div> --}}
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
