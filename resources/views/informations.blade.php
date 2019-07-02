@extends('layouts.app')
@section('content')
<section id="home" class="home">
    <div class="row">
        
        <div class="col-3">
            <div class="sidebar">   
                <div class="tab-menu">  
                        <br>
                    <div class="list-group list-group-flush">
                        

                        <button class="list-group-item active" id="sidebar-candidatures">Candidatures</button>

                        <button class="list-group-item" id="sidebar-informations">Informations personnelles</button>
                        
                        <button class="list-group-item" id="cursus-informations">Cursus</button>

                        <button class="list-group-item" id="dossier-informations">Dossier de Candidature</button>

                        

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
            <div class="container">
                <div class="home-content justify-content-center">   

                    <div class="informations justify-content-center">

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
                                            <br><br><br>
                                        </div>    

                                    </div> 

                                    <div class="form-group">
                                        <button type="confirm-candidature" style="margin-bottom: 2rem;" class="btn btn-primary footer-button float-right" data-toggle="modal" data-target="#confirmation">Confirmer</button>
                                    </div> 

                                    {{-- <div role="alert" class="alert alert-danger" style="display: none">
                                        Vous n'avez le droit de postuler à cette disciplne.
                                    </div>   --}}

                                </div>
    
                            </div>

                        </div>
            
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
                                    <input type="text" id="niveau" class="form-control form-input" placeholder="@if ($niveau == 'BAC') Baccalauréat @elseif ($niveau == 'LIC') Licence @elseif ($niveau == 'MAS') Master @elseif ($niveau == 'DOC') Doctorat @endif" disabled>
                                </div>
                                
                                <hr>
    
                                <div class="form-group group">
                                    <label for="nationalite">Nationalité:</label>
                                    <input type="text" id="nationalite" class="form-control form-input" placeholder="Marocaine" disabled>
                                </div>         
    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nom">Nom:  </label>
                                        <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="{{ $nom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;">
                                            <label for="nom_ar" dir="rtl"  >الاسم العائلي:   </label>
                                            <input name="nom_ar" id="nom_ar" type="text" class="form-control form-input " placeholder="الاسم العائلي" value="{{ $nom_ar }}" required dir="rtl">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="prenom" >Prénom:  </label>
                                        <input name="prenom" type="text" id="prenom" class="form-control form-input" placeholder="Prénom" value="{{ $prenom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;" >
                                            <label  dir="rtl" for="prenom_ar" >الاسم الشخصي:  </label>
                                            <input dir="rtl" name="prenom_ar" id="prenom_ar" type="text" class="form-control form-input" placeholder="الاسم الشخصي" value="{{ $prenom_ar }}" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="group">
                                    <div class="form-group">
                                        <label for="cin">Carte Nationale d'Identité:  </label>
                                        <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="{{ $cin }}" disabled>
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label for="ce">Identification de l'étudiant:  </label>
                                        <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg MXXxxxxxxxxx" value="{{ $ce }}" disabled>
                                    </div>
            
                                </div>
                                
                                <div class="form-group group">
                                    <label for="sexe">Sexe:  </label>
                                    
                                    <div class="row justify-content-center">
            
                                        <div class="col">
                                            <div class="row justify-content-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H" @if ($sexe == 'H') checked @endif>
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
                                        <label for="date-naissance">Date Naissance:  </label>
                                        <input name="dateNaissance" id="naissance" value="{{ $date_naissance }}" type="date" class="form-control form-input">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="prenom" >Pays de Naissance:  </label>
                                                <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="{{ $pays_naissance }}" required>
                                            </div>
                                            <div class="col" >
                                                <label for="prenom" >Ville de Naissance:  </label>
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
                                        <label for="date-naissance">Téléphone 1:  </label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_1" type="tel" class="form-control form-input"  placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="{{ $tel_1 }}" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 2:  </label>
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

                        <div id="app-cursus" style="display: none">
                            
                            <div>
                                <h3 class="justify-content-center title">Cursus</h3>
                            </div>

                            <div class="form-group">
                                <label for="serie-bac">Série de Baccalauréat:</label>
                                <input type="text" id="type-bac" name="serie_bac" class="form-control form-input" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="annee_obtention">Année d'obtention:</label>
                                        <input type="text" id="annee-obtention" class="form-control" disabled>
                                    </div>
                                
                                    <div class="col">
                                        <label for="nom">Académie d'obtention:  </label>
                                    <input type="text" id="academie" name="academie" class="form-control form-input" placeholder="Académie d'obtention" @if ($hasNotes == 'true') value="{{ $academie_obtention }}" @endif required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="notes">

                                <div class="group" id="notes_mat">
                                    <div class="form-group">
                                        <label for="nom">Note <span id="mat-1"></span> </label>
                                        <input type="text" id="mat-1-input" name="mat_1" class="form-control form-input" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nom">Note <span id="mat-2"></span> </label>
                                        <input type="text" id="mat-2-input" name="mat_2" class="form-control form-input" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nom">Note <span id="mat-3"></span> </label>
                                        <input type="text" id="mat-3-input" name="mat_3" class="form-control form-input" placeholder="">
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div id="app-cursus" style="display: none">
                            
                            <div>
                                <h3 class="justify-content-center title">Dossier de Candidature</h3>
                            </div>
    
                                
    
    
                        </div>
    
                        <div id="app-parametre" style="display: none">
                            
                            <div>
                                <h3 class="justify-content-center title">Dossier de Candidature</h3>
                            </div>
        
                                    
    
                        </div>

                        <div id="app-supports" style="display: none">
                            
                            <div>
                                <h3 class="justify-content-center title">Dossier de Candidature</h3>
                            </div>
        
                                    
        
        
                        </div>

                    </div>

                </div>
            </div>
        </div>
          
    </div>
</section>

<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmationTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Une fois vous avez candidater pour cette discipline dans ce programme, vous avez plus le choix pour d'autre disci dans ce programme.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary back-button float-left" style="color: red" data-dismiss="modal">Annuler</button>
            <button type="button" class="btn btn-primary" id="confirmer-candidature">Confirmer</button>
        </div>
        </div>
    </div>
</div>

@endsection

{{--
<section id="bac-cursus">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="informations">   
                    <div>
                        <form>
                            @csrf
                            <input type="hidden" id="diplome-type" name="diplome_type">

                            <div class="form-group">
                                <h3 class="title">Cursus</h3>
                                <h5 class="subtitle">Veuillez renseigner vos notes</h5>
                                
                                
                                
                                

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nom">Note Regionale:  </label>
                                            <input type="text" id="note-reg"  name="note_reg" class="form-control form-input" placeholder="Note Regionale" @if ($hasNotes == 'true') value="{{ $note_nationale }}" @endif required>
                                        </div>
                                    
                                        <div class="col">
                                            <label for="nom">Note Nationale:  </label>
                                            <input type="text" id="note-nat" name="note_nat" class="form-control form-input" placeholder="Note Nationale" @if ($hasNotes == 'true') value="{{ $note_regionale }}" @endif required>
                                        </div>
                                    </div>
                                </div>

                                



                                

                            </div>
                            
                        </form>  
                    </div> 
                </div>    
            </div>
        </div>
    </section>--}}