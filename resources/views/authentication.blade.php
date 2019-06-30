@extends('layouts.app')
@section('content')
<section>
    <div class="candidature-auth">
        <div class="container">
            <h1>Mon Compte</h1>
            <div class="row">
                <div class="col-sm-5">
                    <h2 class="title">Inscrivez-vous</h2>
                    <div class="form">
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <label for="email_register">Addresse E-mail:</label>
                                    <input type="email" name="email_register" id="email-register" class="form-control input-lg "  placeholder="Addresse E-mail">
                                    @error('email_register')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_register">Mot de passe:</label>
                                    <input type="password" name="password_register" id="password-register" class="form-control @error('password_register') is-invalid @enderror input-lg" placeholder="Mot de passe" required autocomplete="new-password">
                                    @error('password_register')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                    <div class="form-group">
                                    <label for="password_confirmation">Confirmer votre mot de Passe:</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirmer votre mot de passe" required autocomplete="new-password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" style="margin-top: 2px; margin-bottom:12px;">
                                        <input type="checkbox" class="form-check-input" required="">
                                        En cliquant ici, j'accepte sans réserve <a href="http://localhost:8000/candidature#" style="font-size: 15px; padding: 0;"><u>les conditions générales d'utilisation</u></a></label>
                                </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button">
                                        Inscription
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <h2 class="title">Déja inscrit</h2>

                    <div class="form">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>                                
                                <div class="form-group">
                                    <label for="email">Addresse E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control input-lg form-control @error('email') is-invalid @enderror" placeholder="Addresse E-mail" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('lang.email') }}</strong>
                                        </span> 
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe:</label>
                                    <input type="password" name="password" id="password" class="form-control input-lg form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('lang.motdepasse') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-link no-padding" href="#">Mot de passe oublié?</a>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button float-right">
                                        Connexion
                                    </button>
                                </div>  
                            </fieldset>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
