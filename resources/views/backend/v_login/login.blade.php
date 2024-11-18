<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        #email,
        #password {
            font-size: 16px;
        }
    </style>

    </style>

    <title>Login Sipitra</title>
</head>

<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Tombol Kembali Ikon Tanpa Background -->
                    <a href="{{ route('welcome') }}" class="back-button position-absolute top-0 left-0 m-3">
                        <i class="fas fa-arrow-left" style="color: black; font-size: 24px;"></i>
                    </a>
                    <img src="{{ asset('images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <br><br>
                                <h3>Sign In</h3>
                                <p class="mb-4">Masukkan email dan password Anda untuk login ke sistem.</p>
                            </div>
                            <!-- Laravel Form -->
                            <form action="{{ route('backend.login') }}" method="post">
                                @csrf
                                <!-- Error Message -->
                                @if (session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                @endif
                                <!-- Email Input -->
                                <div class="form-group first">
                                    <label for="email"></label>
                                    <input type="text" name="email" value="{{ old('email') }}" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukkan Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Password Input -->
                                <div class="form-group last mb-4">
                                    <label for="password"></label>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukkan Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Remember Me and Forgot Password -->
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" name="remember" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
