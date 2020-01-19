<!doctype html>
<html lang="en">

<head>


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

 
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">JEMBLONGAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <small>
                    {{Auth::user()->name}}
                </small>
            <a href="{{route('logout')}}">
                <button class="btn btn-light my-2 my-sm-0 login" type="button" style="margin-left: 10px">Logout</button>
            </a>
            
            </form>
        </div>
    </nav>


    <!-- halaman HOME -->
    <div class="container-fluid home" id="home">

        <div class="row content">

            <div class="col-md-4 col-sm-10 homeText">

                <h1>Sekolah ITu Gratis..</h1>
                <hr style="border: 1px solid gray;">
                <p>
                    Dimana pendidikan IT untuk semua Gratis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quidem eveniet quaerat eum nobis
                    inventore doloremque quos tempora? Ea, consequuntur. Neque rem in doloremque labore qui at, error
                    reiciendis quos.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quidem eveniet quaerat eum nobis
                    inventore doloremque quos tempora? Ea, consequuntur. Neque rem in doloremque labore qui at, error
                    reiciendis quos.
                </p>


            </div>

            <div class="col-md-6 col-sm-10 image">
                <img src="image.jpg" alt="">
            </div>

        </div>

    </div>


    <!-- halaman ABOUT -->
    <div class="container-fluid about" id="about">

        <div class="row content">

            <div class="col-md-6 col-sm-10 image">
                <img src="https://image.freepik.com/free-vector/people-using-digital-devices-modern-office_1262-19462.jpg"
                    alt="">
            </div>

            <div class="col-md-4 col-sm-10">

                <h1>Dimana Pendidikan Itu Gratis !</h1>
                <hr style="border: 1px solid white;">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quidem eveniet quaerat eum nobis
                    inventore doloremque quos tempora? Ea, consequuntur. Neque rem in doloremque labore qui at, error
                    reiciendis quos.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quidem eveniet quaerat eum nobis
                    inventore doloremque quos tempora? Ea, consequuntur. Neque rem in doloremque labore qui at, error
                    reiciendis quos.
                </p>




            </div>

        </div>

    </div>


    <!-- halaman GALLERY -->
    <div class="container-fluid about" id="gallery">

        <div class="row content">

            <!-- ini adalah carrousel GALLERY -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/235648/pexels-photo-235648.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="d-block w-100" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/534049/pexels-photo-534049.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>










    <!-- halaman CONTACT -->
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 contact" id="footer">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row contact">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Here you can use rows and columns to organize your footer content.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <span>
                                <i class="fa fa-instagram" style="width: 20px;"></i>
                            </span>
                            <a href="https://instagram.com">instagram</a>
                        </li>

                        <li>
                            <span>
                                <i class="fa fa-facebook"></i>
                            </span>
                            <a href="https://facebook.com">facebook</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> lumenagency.id</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>