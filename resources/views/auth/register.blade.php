@include('index')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration of Users</title>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  
    <div class="card card-outline card-success">
      
      <div class="card-header text-center">
        
        <div class="card card-header card-success"> <a href="" class='h1'><b>Al-Hikma School</b>|Doaba</a></div>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('auth.save')}}" method="post">
      
      
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
        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name') }}">         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> 
        </div>
        

        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       
        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        <div class="input-group mb-3"> 
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
             
            </div>
          </div>
          
        </div>
        {{-- <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> --}}

      {{-- <a href="login.html" class="text-center">I already have a membership</a>
    </div> --}}
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

</body>
</html>
