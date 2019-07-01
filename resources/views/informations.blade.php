@extends('layouts.app')
@section('content')
<section id="home" class="home">
    <div class="row">
        
        <div class="col-3">
            <div class="sidebar">   
                <div class="tab-menu">  
                        <br>
                    <div class="list-group list-group-flush">
                        

                        <button class="list-group-item active" id="sidebar-informations">Informations personnelles</button>
                        
                        <button class="list-group-item" id="sidebar-candidatures">Candidatures</button>

                        <button class="list-group-item" id="parametres">Paramètres</button>

                        <button class="list-group-item" id="supports">Support</button>
    
                    </div>

                    <div>
                        <a href="{{url('logout')}}" class="list-group-item ">Déconnexion</a>
                    </div> 
                </div>
            </div>
        </div>  

        <div class="col-9 justify-content-center">
            <div class="container-fluid">
                <div class="home-content justify-content-center">   

                    <div class="informations justify-content-center">
            
                        <div id="app-informations">
                            <form>
                                @csrf
                                <input type="hidden" id="has-notes" @if ($hasNotes == 'true') value="true" @endif>
    
                                <div>
                                    <h3 class="justify-content-center title">Informations Personnelles</h3>
                                </div>
    
                                <br>
            
                                <div class="form-group">
                                    <label for="niveau">Dernier Diplôme Obtenu:</label>
                                    <select name="niveau" class="form-control @if ($niveau != '') form-input @endif" id="niveau">
                                        <option disabled selected @if ($niveau == '') selected @endif><span>Diplôme</span></option>  
                                        <option value="BAC" @if ($niveau == 'BAC') selected @endif><span class="form-input">Baccalauréat</span></option>
                                        <option value="LIC" @if ($niveau == 'LIC') selected @endif><span class="form-input">Licence<span></option>
                                        <option value="MAS" @if ($niveau == 'MAS') selected @endif><span class="form-input">Master</span></option>
                                        <option value="DOC" @if ($niveau == 'DOC') selected @endif><span class="form-input">Doctorat</span></option>
                                    </select>
                                </div>
                                
                                <hr>
    
                                <div class="form-group group">
                                    <label for="nationalite">Nationalité:</label>
                                    <input type="text" id="nationalite" class="form-control form-input" placeholder="Marocaine" disabled>
                                </div>         
    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nom">Nom: <span class="red">*</span></label>
                                        <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="{{ $nom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;">
                                            <label for="nom_ar" dir="rtl"  >الاسم العائلي: <span class="red">*</span> </label>
                                            <input name="nom_ar" id="nom_ar" type="text" class="form-control form-input " placeholder="الاسم العائلي" value="{{ $nom_ar }}" required dir="rtl">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="prenom" >Prénom: <span class="red">*</span></label>
                                        <input name="prenom" type="text" id="prenom" class="form-control form-input" placeholder="Prénom" value="{{ $prenom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;" >
                                            <label  dir="rtl" for="prenom_ar" >الاسم الشخصي: <span class="red">*</span></label>
                                            <input dir="rtl" name="prenom_ar" id="prenom_ar" type="text" class="form-control form-input" placeholder="الاسم الشخصي" value="{{ $prenom_ar }}" required >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="group">
                                    <div class="form-group">
                                        <label for="cin">Carte Nationale d'Identité: <span class="red">*</span></label>
                                        <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="{{ $cin }}" required>
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label for="ce">Identification de l'étudiant: <span class="red">*</span></label>
                                        <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg MXXxxxxxxxxx" value="{{ $ce }}">
                                    </div>
            
                                </div>
                                
                                <div class="form-group group">
                                    <label for="sexe">Sexe: <span class="red">*</span></label>
                                    
                                    <div class="row justify-content-center">
            
                                        <div class="col">
                                            <div class="row justify-content-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H" @if ($sexe == 'H') checked @endif >
                                                    <label class="custom-control-label" for="homme">Homme</label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col">
                                            <div class="row justify-content-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="femme" name="sexe" class="custom-control-input" value="F" @if ($sexe == 'F') checked @endif>
                                                    <label class="custom-control-label" for="femme" >Femme</label>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
                                    
                                </div>
            
                                <div class="group">
                                    <div class="form-group">
                                        <label for="date-naissance">Date Naissance: <span class="red">*</span></label>
                                        <input name="dateNaissance" id="naissance" value="{{ $date_naissance }}" type="date" class="form-control form-input">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="prenom" >Pays de Naissance: <span class="red">*</span></label>
                                                <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="{{ $pays_naissance }}" required>
                                            </div>
                                            <div class="col" >
                                                <label for="prenom" >Ville de Naissance: <span class="red">*</span></label>
                                                <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="{{ $ville_naissance }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
            
                                <div class="form-group group">
                                    <label for="disabledTextInput">Adresse E-mail:</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $email }}" disabled>
                                </div>
            
                                <div class="group">
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 1: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_1" type="tel" class="form-control form-input"  placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="{{ $tel_1 }}" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 2: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_2" type="tel" class="form-control form-input" placeholder="0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="{{ $tel_2 }}" required>
                                        </div>
                                    </div>
                                </div>
            
                            </form>
    
                        </div>
    
                        <div id="app-candidatures">

                            <div id="mes-candidatures">
                                
                                <div>
                                    <h3 class="justify-content-center title">Mes Candidatures</h3>
                                </div>
                                            
                                <div>
                                    <button id="candidater" class="btn btn-primary float-right" >Nouvelle candidature</button>
                                </div>

                                <br><br><br>

                                <div id="candidatures-table">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th>Programme</th>
                                            <th>Discipline</th>
                                            <th>Date Dépot</th>
                                            <th>État</th>
                                        </tr>
                                        </thead>
                                        
                                    </table> 
                                </div>


                            </div>
                           {{-- END  --}}

                           <div id="nouvelle-candidatures">

                                <div>
                                    <h3 class="justify-content-center title">Nouvelle Candidatures</h3>
                                </div>

                                <br>

                                <div>
                                    <h4 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Choix du programme de bourse</h4>
                                    <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez indiquer votre choix de bourse</h5>
                                    
                                    <div class="alert alert-secondary" role="alert">
                                        Vous avez le droit de postuler à une seule disciplne par programme.
                                    </div>
                        
                                    <div class="alert alert-danger" role="alert" style="display: none">
                                        Vous avez déja postuler pour ce programme.
                                    </div>
                        
                                </div>

                                <div class="form-group">
                                    <label for="programmes">Recherche:</label>
                                    <input type="text" placeholder="Chercher par disciplines, programmes..." class="form-control" id="recherche">
                                </div> 

                                <hr>

                                <div class="form-group">
                                    <label for="programmes">Programme</label>
                                    <select class="form-control" id="programmes">
                                        <option selected disabled>Programme</option>
                                            @foreach ($programmes as $programme)
                                                <option value="{{ $programme->programme_id }}">{{ $programme->pays }}</option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="disciplines">Discipline</label>
                                    <select disabled class="form-control" id="disciplines">
                                        <option selected disabled>Discipline</option>
                                    </select>
                                </div>

                                

                                <div id="discipline" class="form-group">

                                    <hr>

                                    <div id="discipline-conditions">
                                        
                                        <h3>Présentation:</h3>
                                        <br><br><br>
                                        <div>
                                            <div>
                                                <a href="#" class="float-right">Plus d'informations</a>
                                            </div>
                                        </div>

                                        <div>
                                            <h3>Dates à Retenir:</h3>
                                            <br>
                                        </div>

                                        <div>
                                            <h3>Conditions d'admission</h3>
                                            <br><br><br><br><br>
                                        </div>    

                                    </div> 

                                    <div class="form-group">
                                        <input type="checkbox" class=""> 
                                        <label class="custom-control-labe">Je confirme avoir pris connaissance des prérequis</label>
                                    </div> 

                                    <div class="form-group">


                                    </div> 

                                    {{-- <div role="alert" class="alert alert-danger" style="display: none">
                                        Vous n'avez le droit de postuler à cette disciplne.
                                    </div>   --}}

                                </div>
    
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
          
    </div>
</section>
@endsection

