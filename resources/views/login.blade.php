<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Title</title>
  <style>
    .loginArea{
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row loginArea">
      <div class="col-md-4">
        @if($err)
          <div class="alert alert-danger" role="alert">
            username atau password salah..!!
          </div>
        @endif

      <form class="form-signin" method="POST" action="{{route('rLogin')}}">
          {{csrf_field()}}

        <h1 class="h3 mb-3 font-weight-normal">Login {{config('app.name')}}</h1>
        
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="inputEmail" value="{{old('inputEmail')}}">
          </div>
       
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required"  name="inputPassword">
  
          </div>
       
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <small>dont have account?, click <a href="{{url('/register')}}">here</a></small>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </form>
      </div>
    </div>
  </div>








  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>