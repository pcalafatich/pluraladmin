@extends('layouts.master-without_nav')

@section('title')@lang('translation.Login')@endsection

@section('content')

<div class="authentication-bg min-vh-100">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">

                    <div class="text-center mb-4">
                        <a href="index">
                            {{-- <img src="{{ URL::asset('assets/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Symox</span> --}}
                        </a>
                    </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Bienvenido</h5>
                                <p class="text-muted">Ingrese para ingresar al Panel de Administración</p>
                            </div>
                            <div class="p-2 mt-4">

                                @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="username" value="{{ old('email', 'admin@pluraldescuentos.com.ar') }}"  placeholder="Ingrese su email" autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">Olvidó su contraseña?</a>
                                            @endif
                                        </div>
                                        <label class="form-label" for="userpassword">Contraseña</label>
                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="123456" placeholder="Ingrese su contraseña" aria-label="Password" aria-describedby="password-addon">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember"> Recordarme </label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Ingresar</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title">Ingresar con</h5>
                                        </div>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">No tienes una cuenta ?
                                            <a href="{{ url('register') }}" class="fw-medium text-primary"> Registrarse ahora </a>
                                        </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-muted p-4">
                        <script>
                            document.write(new Date().getFullYear())

                        </script> Plural. Desarrollado por RaitNauDigital</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>

@endsection
