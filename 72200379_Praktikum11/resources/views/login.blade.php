<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Login Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #21325E;">
            <div class="col-lg-12 col-md-9 col-sm-8 col-12 vh-100 mt-2 text-left text-white"
                style="background-color: #21325E;">
                </br>
                </br>
                <div class="col-lg-4 col-mb-md-5 col-mt-md-4 col-pb-5 px-0 col-md-3 offset-md-4">
                    @if (session('flash'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('flash') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <form action="/user/ceklogin" method="POST" class="pt-2 pb-2">
                    @csrf
                    <div class="container py-5 h-100">
                        </br>
                        </br>
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card text-white" style="border-radius: 1rem; background-color: #92B4EC;">
                                    <div class="card-body p-5 text-center">

                                        <div class="mb-md-5 mt-md-4 pb-5">
                                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                            <p class="text-white-50 mb-5">Please enter your Email and password!</p>
                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="typeEmailX" name="email"
                                                    class="form-control form-control-lg" placeholder="Email" />
                                            </div>
                                            <div class="form-outline form-white mb-4">
                                                <input type="password" id="typePasswordX" name="password"
                                                    class="form-control form-control-lg" placeholder="Password" />
                                            </div>
                                            <button class="btn btn-outline-light btn-lg px-5"
                                                type="submit">Login</button>
                                        </div>
                                        <div>
                                            <p class="mb-0">Don't have an account? <a href="#!"
                                                    class="text-white fw-bold">Sign Up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <img class="mb-4"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
                        alt="" width"72" height="57">
                    <h1 class="h3 mb-3 fw-normal"> Form Login </h1>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" required autofocus>
                        <label for="floatingInput"> Email </label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" required
                            autofocus>
                        <label for="floatingPassword"> Password </label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit"> Sign In </button> -->
                </form>
            </div>
        </div>
    </div>



    <footer class="text-center text-white fixed-bottom" style="background-color: #21325E;">
        <!-- Grid container -->
        <div class="container"></div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
            © Copyright : Trifena Katrina
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>