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

                @if($reg)

                    <div class="alert alert-success" role="alert">
                        Success Register
                    </div>

                @endif
                
                

            <form class="form-signin" method="post" action="{{route('register')}}">

                    {{csrf_field()}}

                    <h1 class="h3 mb-3 font-weight-normal">Register {{config('app.name')}}</h1>
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Name</label>
                        <input type="text" id="inputName" class="form-control {{$errors->has('inputName') ? 'is-invalid' : ''}}" placeholder="username" name="inputName"  autofocus="autofocus" value="{{old('inputName')}}">
                        <div class="invalid-feedback">
                            <small>username minimal 6 char</small>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control {{$errors->has('inputEmail') ? 'is-invalid' : ''}}" placeholder="Email address"
                autofocus="autofocus" value="{{old('inputEmail')}}">
                    <div class="invalid-feedback">
                        <small>harus berupa email / email sudah terdaftar</small>
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password"
                        >
                        <div class="invalid-feedback">
                            <small>password min: 6 char / tidak sama</small>
                        </div>
                    </div>

                    <div class="form-group">
                       
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="password2" name="password2" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Repeat Password"
                    >
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>
                    </div>
                   

                    <small>allready have acoount, click <a href="{{url('/')}}">here</a></small>

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