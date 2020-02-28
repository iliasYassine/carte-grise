@extends('layouts.app')

@section('content')
<section class="login_box_area section_gap">
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <div class="login_box_img">
                <img class="img-fluid" src="img/login.jpg" alt="">
                <div class="hover">
                    <h4>J'ai un compte</h4>
                    <a class="primary-btn" href="{{ route('register') }}">Connexion</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="login_form_inner">
                <h3>Crée votre compte</h3>
                    <form  class="row login_form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-md-12 form-group">               
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom complet">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 form-group">                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation mot de passe">
                        </div>

                        <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
</section>
@endsection
