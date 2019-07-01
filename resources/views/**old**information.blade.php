@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
/**************************************************************************************************/

.col-sm-9 {
    min-height: 90%;
}





@-webkit-keyframes pulsate {
 50% { color: #000; }
}
@keyframes pulsate {
 50% { color: #000; }
}
@media (max-width: 480px) {
    .btn-group {
        display: block !important;
        float: none !important;
        width: 100% !important;
        max-width: 100% !important;
    }
}
@media (max-width: 600px) {
    .btn-nav .glyphicon {
        padding-top: 12px;
        font-size: 26px;
    }

    
}
</style>
@section('content')

<div class="container-fluid">
    <div class="row" style="padding: 35px 0 0 0; background-color: #FFF;">
             
        <!-- Sidebar -->
        

        <div class="col-sm-9 tab" style="background:#fff; min-height: 90%;">

            <div class="tab-content active" id="app-informations"> 
                <div id="informations-personelles" class="content" role="tabpanel" aria-labelledby="informations-personelles-trigger">
                    <div class="row justify-content-center" style="margin-top: 24px;">
                        <div class="col-md-10" style="margin-bottom: 70px;">
            
                            

            

            </div>

            <div class="tab-content" id="parametre">  
                <div>
                    <h1> Paramètres de compte</h1>
                    <p class="font-weight-light">
                        Modifier vos paramètres de compte
                    </p> 
                </div>
            
                    <div class="form-group">
                        <p class="font-weight-light">
                            Modifier votre adresse E-mail:
                        </p> 
                        <label for="email_register">Nouvelle addresse E-mail:</label>
                        <input type="email" name="email_register" id="email-register" class="form-control input-lg" placeholder="Addresse E-mail">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-primary  pull-right button"> Modifier Adresse E-mail</button>
                    </div>
                
            
                    <div class="form-group">
                        <p class="font-weight-light">
                            Modifier votre mot de passe:
                        </p> 
                        <label for="password_register">Nouveau mot de passe:</label>
                        <input type="password" name="password_register" id="password-register" class="form-control @error('password_register') is-invalid @enderror input-lg" placeholder="Mot de passe" required autocomplete="new-password">
                    </div>          
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer votre nouveau mot de Passe:</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirmer votre mot de passe" required autocomplete="new-password">               
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-primary pull-right button"> Modifier Adresse E-mail</button>
                    </div>
                        
            </div>

            <div class="tab-content" id="support"> 
                <!--header support--->
                <div>
                    <h1> Support</h1>
                    <p class="font-weight-light">
                        Veuillez prendre contact avec notre 
                        agréable équipe de support dédiée au 
                        traitement des demandes de nos chers candidats.
                    </p> 
                </div>
                <!--les numeros de telephone--->
                <div>
                        
                </div>
                <!--les adresses--->
                <div>

                </div>
            
                    
            </div>
        
        
        
        </div>

    </div>
</div>

@endsection