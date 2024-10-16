<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sb-2')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-2')}}/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: #4e73df;
            /* Warna latar belakang */
        }

        .login-container {
            height: 100vh;
            /* Memastikan kontainer mengisi tinggi layar */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 400px;
            /* Mengatur lebar card */
        }
    </style>

</head>

<body>

    <div class="container login-container">

        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input name="name" type="text" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                        <hr>
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sb-2')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('sb-2')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sb-2')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sb-2')}}/js/sb-admin-2.min.js"></script>

</body>

</html>