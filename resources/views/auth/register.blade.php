@extends("layouts.default")
@section("title", "Register")
@section("content")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('NiceAdmin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{route("register.post")}}" novalidate>
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter a valid Email address!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="{{route("login")}}">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('NiceAdmin/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('NiceAdmin/assets/js/main.js') }}"></script>

</body>

</html>

@endsection
