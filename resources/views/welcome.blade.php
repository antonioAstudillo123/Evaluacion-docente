<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Evaluación docente') }}</title>

    {{-- BOOTSTRAP   --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body style="background-image: url({{ asset('img/EVALUACIÓN1.png') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <main class="container vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Login de autenticación" class="" style="border-radius: 1rem 0 0 1rem; max-width: 100%; height: 100%;" >
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="d-flex align-items-center mb-2 pb-2">
                                            <span class="h1 fw-bold mb-0">Bienvenido a la evaluación docente</span>
                                        </div>

                                        <h6 class="fw-normal mb-3 pb-2" style="letter-spacing: 1px;">Tu voz importa. ¡Ayúdanos a mejorar tus cursos compartiendo tus pensamientos y sugerencias!</h6>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Usuario / ID pwc</label>
                                            <input id="email" placeholder="000008807" class="form-control form-control-lg @error('email') is-invalid @enderror"   type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Contraseña</label>
                                            <input id="password" type="password" placeholder="*********" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>

                                        <div class="pt-2">
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-dark btn-lg btn-block" type="submit">Ingresar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>







