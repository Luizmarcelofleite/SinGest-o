<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
@extends('layouts.app')

@section('content')
<div class="form-bg">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="form-container">
                    <div class="form-icon">

                        <span class="sg-login" style="color: hsl(218, 81%, 95%)">
                            Sin <br />
                            <span class="sg-login" style="color: hsl(218, 81%, 75%)">Gestão</span>
                        </span>
                        <span class="signup"><a href="">Cadastrar</a></span>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="icon-login">
                            <i class="uil uil-user-circle"></i>
                        </span>
                        <div class="form-group">
                            <span class="input-icon"><i class="input-icon uil uil-at"></i></span>
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="input-icon uil uil-lock-alt"></i></span>>
                            <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn ">Entrar</button>



                        @if (Route::has('password.request'))
                        <span class="forgot-pass"><a href="{{ route('password.request') }}">Esqueceu a senha?</a></span>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
