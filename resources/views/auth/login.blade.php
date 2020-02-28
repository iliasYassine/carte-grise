@extends('layouts.app')
@section('content')
<section class="login_box_area section_gap">
<div class="container">
    <div class="row ">
                <div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Je n'ai pas encore de compte</h4>
							<a class="primary-btn" href="{{ route('login') }}">Crée un compte</a>
						</div>
					</div>
				</div>
                <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Connectez-vous pour entrer</h3>
                    <form class="row login_form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-12 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 form-group">                     
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>          
                            </div>
                        </div>

                        <div  class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif       
                        </div>
                    </form>
                </div>
            </div>
            
    </div>
</div>
</section>
@endsection
