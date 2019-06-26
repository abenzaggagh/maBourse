@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
/**************************************************************************************************/

div.tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
 /* background-clip: padding-box;*/
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.tab-menu{
  padding-right: 0;
  padding-left: 10;
  padding-bottom: 0;
 
}
div.tab-menu div.list-group{
  margin-bottom: 0;
  margin-top:10;
}
div.tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.tab-menu div.list-group>a .fa {
  color: #5A55A3;
}

div.tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.tab-menu div.list-group>a.active,
div.tab-menu div.list-group>a.active .glyphicon,
div.tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}


div.tab-content{
  background-color: #ffffff;
 
}

div.tab div.tab-content:not(.active){
  display: none;
}

table {    width: 100%;}
table, th, td {	border: 1px solid black;	border-collapse: collapse;}
th, td {	padding: 5px;	text-align: left;}
table#t01 tr:nth-child(even) {	background-color: #F6E6E3;}
table#t01 tr:nth-child(odd) {	background-color: #7E9987;}
table#t01 th {	background-color: Green;	color: white;}


.profile-userpic img {
  float: none;
  margin:  5%;
  width:20%;
  margin-left:40%;
  
}

.profile-usertitle {
  text-align: center;

}

/*88*****************************************************************************************************************/

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

<div class="row" style="margin-top:4%;" >
            
            <div class="col-md-3" style="-webkit-box-shadow: 2px 0px 11px -2px rgba(0,0,0,0.75);  -moz-box-shadow: 2px 0px 11px -2px rgba(0,0,0,0.75);
                    box-shadow: 2px 0px 11px -2px rgba(0,0,0,0.75);background:#ffff;" >
            
                <div class="tab-menu">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="img/profile.svg" class="img-responsive" >
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Nom utilisateur
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        
                        <div class="list-group center">
                            <a href="#infos" class="list-group-item  " id="candidature">
                                <h4 class="fas fa-id-card">&nbsp;&nbsp;</h4>Mes Infos personnelles
                            </a>
                            <a href="#candidature" class="list-group-item active " id="candidature">
                                <h4 class="fas fa-file-signature">&nbsp;&nbsp;</h4>Mes candidatures
                            </a>
                            <a href="#parametre" class="list-group-item  " id="parametre">
                                <h4 class="fas fa-cog">&nbsp;&nbsp;</h4>Paramètres
                            </a>
                            <a href="#support" class="list-group-item  " id="support">
                                <h4 class="fas fa-question-circle">&nbsp;&nbsp;</h4>Support
                            </a>

                        </div>
                        <div>
                            <a href="{{url('logout')}}" class="list-group-item ">
                            <h4 class="	fas fa-times-circle">&nbsp;&nbsp;</h4>Déconnexion
                            </a>
                        </div>
                        
                    
                </div>

            
            </div>

        <!--rubrique contenu profile--->
            <div class="col-md-8 tab " >

                <div class="tab-content" id="infos"> 
                    <!--header infos--->
                    <div>
                        <h1> Informations personnelles</h1>
                        <p class="font-weight-light">
                            
                        </p> 
                    </div>      
                </div>

                <div class="tab-content active" id="candidature">
                    <div>
                          <h1> Mes candidatures</h1>
                    </div>
                        <!--table de candidature-->
                    <div class="container col-md-11" style="border:none;" >
                        <table class="table table-borderless" style="border:none;">
                            <thead>
                            <tr>
                                <th>PROGRAMME</th>
                                <th>DISCIPLINE</th>
                                <th>DATE DEPOT</th>
                                <th>STATUS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tunisie</td>
                                <td>Medecine générale</td>
                                <td>27-07-2019</td>
                                <td>envoyé</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>

                <div class="tab-content" id="parametre">  
                    <div>
                        <h1> Paramètres de compte</h1>
                        <p class="font-weight-light">
                            Modifier vos paramètres de compte
                        </p> 
                    </div>
                    <div class="col-sm-6 justify-center">
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
                    </div>
                    <div class="col-sm-6 ">
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





@endsection