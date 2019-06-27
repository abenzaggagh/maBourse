@extends('layouts.app')

@section('content')
<section class="candidature-section">
    
    <div class="container">
        <div class="row justify-content-center" style="">
            
            <div class="col-md-12">

                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        
                        <div class="step" data-target="#informations-personelles">
                            <button type="button" class="step-trigger" role="tab" aria-controls="informations-personelles" id="informations-personelles-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Informations Personnelles</span>
                            </button>
                        </div>

                        <div class="line"></div>

                        <div class="step" data-target="#bourse">
                            <button type="button" class="step-trigger" role="tab" aria-controls="bourse" id="bourse-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Programme de Bourse</span>
                            </button>
                        </div>
                       
                        <div class="line"></div>

                        <div class="step" data-target="#formulaire">
                            <button type="button" class="step-trigger" role="tab" aria-controls="formulaire" id="formulaire-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Formulaire de Candidature</span>
                            </button>
                        </div>

                        <div class="line"></div>

                        <div class="step" data-target="#confirmation">
                            <button type="button" class="step-trigger" role="tab" aria-controls="confirmation" id="confirmation-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Confirmation</span>
                            </button>
                        </div>

                    </div>

                    <div class="bs-stepper-content">
                        
                        <div id="informations-personelles" class="content" role="tabpanel" aria-labelledby="informations-personelles-trigger">
                            <div class="row justify-content-center" style="margin-top: 24px;">
                                <div class="col-md-11">
                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>
                                        
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <input type="hidden" id="register" name="register" value="{{ $alreadyRegistered }}">
                                            <input type="hidden" id="niveau_etude" name="niveau_etude" value="{{ $niveau }}">

                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Informations Personnelles</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez saisir les informations suivantes</h5>
                                            </div>

                                            <div class="form-group">
                                                <label for="niveau">Niveau d'étude:</label>
                                                <select name="niveau" class="form-control @if ($niveau != '') form-input @endif" id="niveau">
                                                    <option disabled @if ($niveau == '') selected @endif><span>Niveau d'étude</span></option>  
                                                    <option value="BAC" @if ($niveau == 'BAC') selected @endif><span class="form-input">Baccalauréat</span></option>
                                                    <option value="LIC" @if ($niveau == 'LIC') selected @endif><span class="form-input">Licence<span></option>
                                                    <option value="MAS"@if ($niveau == 'MAS') selected @endif><span class="form-input">Master</span></option>
                                                    <option value="DOC"@if ($niveau == 'DOC') selected @endif><span class="form-input">Doctorat</span></option>
                                                </select>
                                            </div>
                                            
                                            <hr style="margin: 32px 0 16px 0; padding: 8px;">

                                            <div class="form-group">
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

                                            <br>
                                            
                                            <div class="form-group">
                                                    <label for="cin">Carte Nationale d'Identité: <span class="red">*</span></label>
                                                    <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="{{ $cin }}" required>
                                            </div>  
                                            
                                            {{-- TODO: Dropdown for type system -> Code Massar or Code Etudiant --}}

                                            <div class="form-group">
                                                <label for="ce">Code d'Étudiant (Code Massar | Code d'Inscription)</label>
                                                <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg MXXxxxxxxxxx" value="{{ $ce }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="sexe">Sexe: <span class="red">*</span></label>
                                                
                                                <div class="row justify-content-center" >
                                                    
                                                    <div class="col-md-2"></div>
                                                
                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H" @if ($sexe == 'H') checked @endif>
                                                            <label class="custom-control-label" for="homme">Homme</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="femme" name="sexe" class="custom-control-input" value="F" @if ($sexe == 'F') checked @endif>
                                                            <label class="custom-control-label" for="femme" >Femme</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                    <label for="date-naissance">Date Naissance: <span class="red">*</span></label>
                                                    <input name="dateNaissance" id="naissance" value="{{ $dateNaissance }}" type="date" class="form-control form-input">
                                                </div>

                                            <div class="form-group">
                                                <label>Lieu de Naissance: <span class="red">*</span></label>
                                                <div class="row">
                                                
                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Ville: </label>
                                                        <div class="col-sm-10">
                                                        <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="{{ $villeNaissance }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Pays: </label>
                                                        <div class="col-sm-10">
                                                            <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="{{ $paysNaissance }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="disabledTextInput">Adresse E-mail:</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $email }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 1: <span class="red">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input name="telephone_1" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="{{ $tel_1 }}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 2: <span class="red">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input name="telephone_2" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="{{ $tel_2 }}" required>
                                                </div>
                                            </div>

                                            <div class="text-right" style="margin-top: 50px">
                                                <div>
                                                    <button class="btn btn-primary nextBtn btn-lg" type="button" id="informations">Suivant</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="bourse" class="content" role="tabpanel" aria-labelledby="bourse-trigger">
                            <div class="row justify-content-center" style="margin-top: 24px;">

                                <div class="col-md-11" style="margin-top: 50px">
                                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>

                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Choix du programme de bourse</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez indiquer votre choix de bourse</h5>
                                                
                                                <div class="alert alert-secondary" role="alert">
                                                    Vous avez le droit de postuler à une seule disciplne par programme.
                                                </div>
                                            </div>

                                            {{-- 
                                                <div class="form-group">
                                                    <label for="programmes">Recherche:</label>
                                                    <input type="text" placeholder="Chercher par disciplines, programmes..." class="form-control" id="recherche">
                                                </div> 
                                            --}}

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

                                            <div id="discipline" style="padding: 0 16px 0 16px">
                                                <hr style="margin: 32px 0 16px 0; padding: 8px;">
                                                
                                                <div id="condition" class="">
                                                    <h3>Présentation:</h3>
                                                    <br><br>
                                                    <p>

                                                    </p>
                                                    <div>
                                                        <a href="#" class="float-right">En savoir plus...</a>
                                                        <br>
                                                    </div>
                                                    <h3>Dates à Retenir:</h3>
                                                    <br>
                                                    <h3>Conditions d'admission</h3>
                                                    <br> <br> 
                                                </div>  
                                                <div style="margin: 32px 0 0px 0;">
                                                    <hr style="margin: 32px 0 16px 0; padding: 8px;">
                                                    <div class="form-group">
                                                        <h3>Mon Cursus: <span class="red">*</span></h3>
                                                        <label>Veuillez renseigner les notes obtenues:</label>
                                                        <div class="form-group">
                                                                <label for="niveau">Série de Baccalauréat:</label>
                                                                <select name="niveau" class="form-control form-input" id="type-bac">
                                                                    <option disabled selected>Série de Baccalauréat</option>  
                                                                </select>
                                                            </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="annee_obtention">Année d'obtention: <span class="red">*</span></label>
                                                                    <select class="form-control form-input" id="anneeAcadimique">
                                                                        <option disabled selected>Année d'obtention</option>  
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                    </select>
                                                                </div>
                                                            
                                                                <div class="col">
                                                                    <label for="nom">Académie d'obtention: <span class="red">*</span></label>
                                                                    <input type="text" id="academie" name="academie" class="form-control form-input" placeholder="Académie d'obtention" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="nom">Note Regionale: <span class="red">*</span></label>
                                                                    <input type="text" id="note-reg" class="form-control form-input" placeholder="Note Regionale" required>
                                                                </div>
                                                            
                                                                <div class="col">
                                                                    <label for="nom">Note Nationale: <span class="red">*</span></label>
                                                                    <input type="text" id="note-nat" class="form-control form-input" placeholder="Note Nationale" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="notes" style="display: none">

                                                            <div role="alert" class="alert alert-warning" style="">
                                                                Il s'agit des notes du bac...
                                                            </div>

                                                            <div class="form-group" id="notes_mat">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="nom">Note <span id="mat-1"></span><span class="red">*</span></label>
                                                                        <input type="text" id="mat-1-input" name="mat-1" class="form-control form-input" placeholder="" required>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="nom">Note <span id="mat-2"></span><span class="red">*</span></label>
                                                                        <input type="text" id="mat-2-input" name="mat-2" class="form-control form-input" placeholder="" required>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="nom">Note <span id="mat-3"></span><span class="red">*</span></label>
                                                                        <input type="text" id="mat-3-input" name="mat-3" class="form-control form-input" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div role="alert" class="alert alert-danger" style="display: none">
                                                        Vous n'avez le droit de postuler à cette disciplne.
                                                    </div>

                                                </div> 

                                            </div>    

                                                     
                                            <div style="margin-top: 45px">
                                                <button class="btn prevtBtn btn-lg back-button" type="button" id="previous" >Précedent</button>
                                                <button class="btn btn-primary nextBtn btn-lg float-right" type="button" id="candidature" >Poursuivre candidature</button>
                                            </div>

                                        </form>

                                    </div>

                                </div>
                            
                            </div>
                        </div>

                        <div id="formulaire" class="content" role="tabpanel" aria-labelledby="formulaire-trigger">

                            <div class="row justify-content-center" style="margin-top: 24px;">

                                <div class="col-md-11" style="margin-top: 50px">
                                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>


                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">CFormulaire de candidature</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Information sur le diplome</h5>
                                            </div>

                                            <div class="form-group">
                                                    <label for="serie_bac">Série du baccaluaréat:</label>
                                                    <select class="form-control" id="serie_bac">
                                                        <option>SM</option>
                                                        <option>SP</option>
                                                        <option>SVT</option>
                                                        <option> </option>
                                                    </select>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label for="academie">Académie d'obtention du baccalauréat:</label>
                                                    <input type="text" id="academie" class="form-control" placeholder="" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="seri-bac">Année d'obtention du baccaluaréat:</label>
                                                    <select class="form-control" id="annee">
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                    
                                                        <div class="col">
                                                            <label for="reg" class="col-sm-2 col-form-label">Note régional </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="reg" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <label for="nat" class="col-sm-2 col-form-label">Note national: </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="nat" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  

                                                <div class="form-group">
                                                    <div class="row">
                                                    
                                                        <div class="col">
                                                            <label for="note1" class="col-sm-3 col-form-label">Note 1:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="note1" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <label for="note2" class="col-sm-3 col-form-label">Note 2:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="note2" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <label for="note3" class="col-sm-3 col-form-label">Note 3:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="note3" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  

                                                

                                                <!-- SEPARATOR -->

                                                <hr style="margin: 32px 0 16px 0; padding: 8px;">
                                                <div>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Téléchargement des pièces</h5>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="CIN_F" class="col-sm-2 col-form-label">CIN</label>
                                                    <div class="input-group input-file" name="CIN_F">
                                                        <input type="text" class="form-control" placeholder='Choisi un fichier ...' />			
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default btn-choose" type="button">Télécharger</button>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="RN_F" class="col-sm-2 col-form-label">Relevé de notes</label>
                                                    <div class="input-group input-file" name="Fichier2">
                                                        <input type="text" class="form-control" placeholder='Choisi un fichier...' />			
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default btn-choose" type="button">Télécharger</button>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Bac_F" class="col-sm-2 col-form-label">Baccalauréat</label>
                                                    <div class="input-group input-file" name="Fichier1">
                                                        <input type="text" class="form-control" placeholder='choisi un fichier...' />			
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default btn-choose" type="button">Télécharger</button>
                                                        </span>
                                                    </div>
                                                </div>

                                            <button class="btn btn-primary prevtBtn btn-lg" type="button" onclick="stepperPrevious();">Précédent</button>
                                            <button class="btn btn-primary nextBtn btn-lg" type="button" onclick="stepperNext();">Suivant</button>
                                        
                                        </form>


                                    </div>

                                </div>

                        </div>

                        <div id="confirmation" class="content" role="tabpanel" aria-labelledby="confirmation-trigger">


                            <p>Programme : "<span id="niveau_etude_v"></span>"</p>
                            <p>Discipline : "<span id="niveau_etude_v"></span>"</p>

                            <p>Nom "<span id="nom_v"></span>"</p>
                            <p>Prénom : "<span id="prenom_v"></span>"</p>
                            <p>Date de naissance: "<span id="date_naissance_v"></span>"</p>
                            <p>Lieu de naissance : "<span id="ville_v"></span>" &nbsp;&nbsp;&nbsp;"<span id="pays_v"></span>"</p>
                            <p>CIN : "<span id="CIN_v"></span>"</p>
                            <p>Code étudiant : "<span id="code_mass_v"></span>"</p>
                            <p>Sexe : "<span id="sexe_v"></span>"</p>
                            <p>Numéro GSM 1 : "<span id="tel1_v"></span>"</p>
                            <p>Numéro GSM 2 : "<span id="tel2_v"></span>"</p>
                            <p>Adresse e-mail : "<span id="niveau_etude_v"></span>"</p>

                            <p>Serie du baccalauréat : "<span id="niveau_etude_v"></span>"</p>
                            <p>Année d'obtention du baccalauréat : "<span id="niveau_etude_v"></span>"</p>
                            <p>Academie : "<span id="niveau_etude_v"></span>"</p>
                            <p>Note régional  : "<span id="niveau_etude_v"></span>"&nbsp;&nbsp;&nbsp;Note nationale:"<span id="niveau_etude_v"></span>" </p>
                            <p>Note1 : "<span id="niveau_etude_v"></span>"</p>
                            <p>Note1 : "<span id="niveau_etude_v"></span>"</p>
                            <p>Note1 : "<span id="niveau_etude_v"></span>"</p>
                            
                            <button class="btn btn-primary prevtBtn btn-lg" type="button" onclick="stepperPrevious();">Modifier</button>
                            <button class="btn btn-primary nextBtn btn-lg" type="button" onclick="stepperNext();">Valider</button>
                                    
                        </div>

                    </div>
                </div>

            </div>
            
        </div>
       

    </div>

</section>


@endsection



