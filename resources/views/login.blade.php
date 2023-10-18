<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<base href="/public">
<link rel="shortcut icon" href="img/1971886456.jpg" type="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">


    <title>Role Auth</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">



    <div class="py-5 mb-4 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="border border-3 border-primary"></div>
                    <div class="card bg-white">
                        <div class="card-body p-5">
                                <form class="mb-3 mt-md-4" method="POST"action="{{ route('authenticate') }}">
                                    @csrf
                                   <h2>Role Auth</h2>
                                    
                                    <p class="mb-5 fw-bold">Please enter your login and password!</p>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-bold">Email address</label>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email"
                                            placeholder="name@example.com" required>
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label fw-bold">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="*******" required>
                                            @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <p class="small"><a class="text-primary" href="">Forgot
                                            password?</a></p>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit">Login</button>
                                    </div>
                                </form>
                                <div>
                                    <p class="mb-0  text-center">Don't have an account? <a href=""
                                            class="text-primary fw-bold">SignUp</a></p>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
