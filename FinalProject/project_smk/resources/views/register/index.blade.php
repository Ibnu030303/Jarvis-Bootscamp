<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

            <link href="/public/css/style.css" rel="stylesheet">

        </head>
        <body>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5">
                    <main class="form-registration m-auto">
                    <form action="/register" method="post">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                        <div class="form-floating mt-2">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="name" placeholder="Name" required autofocus value="{{ old ('name') }}">
                            <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                plasee chooice a Name
                            </div>
                        @enderror
                        <div class="form-floating mt-2">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" required autofocus value="{{ old ('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                plasee chooice a Email
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating mt-2">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                 plasee chooice a Password
                            </div>
                             @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block mt-3 text-center">Alredy registerd? <a href="/admin">Login</a></small>
                    </main>

                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        </body>
    </html>