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
                                <div class="col-md-9">
                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form action="information" method="POST">
                                        
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="register" name="register" value="{{ $alreadyRegistered }}">
                                        <input type="hidden" id="niveau_etude" name="niveau_etude" value="{{ $niveau }}">

                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Informations Personnelles</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5>
                                            </div>

                                            <div class="form-group">
                                                <label for="niveau">Niveau d'étude:</label>
                                                <select name="niveau" class="form-control form-input" id="niveau">  
                                                    <option value="BACHELIER">Baccalauréat</option>
                                                    <option value="LICENCIER">Licence</option>
                                                    <option value="MASTER">Master</option>
                                                    <option value="DOCTORAT">Doctorat</option>
                                                </select>
                                            </div>
                                            
                                            <hr style="margin: 32px 0 16px 0; padding: 8px;">

                                            <div class="form-group">
                                                <label for="nationalite">Nationalité:</label>
                                                <input type="text" id="nationalite" class="form-control form-input" placeholder="Marocaine" disabled>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="nom">Nom: <span class="red">*</span></label>
                                                <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="{{ $nom }}" required>
                                                </div>
                                                <div class="col">
                                                    <label for="prenom">Prénom: <span class="red">*</span></label>
                                                    <input name="prenom" id="prenom" type="text" class="form-control form-input" placeholder="Prénom" value="{{ $prenom }}" required>
                                                </div>
                                            </div>

                                            <br>
                                            
                                            <div class="form-group">
                                                    <label for="cin">Carte Nationale d'Identité: <span class="red">*</span></label>
                                                    <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. " value="{{ $cin }}" required>
                                            </div>                       

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
                                                            <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H">
                                                            <label class="custom-control-label" for="homme">Homme</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="femme" name="sexe" class="custom-control-input" value="F">
                                                            <label class="custom-control-label" for="femme" >Femme</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="date-naissance">Date Naissance: <span class="red">*</span></label>
                                                <input name="dateNaissance" id="naissance" type="date" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Lieu de Naissance: *</label>
                                                <div class="row">
                                                
                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Ville: </label>
                                                        <div class="col-sm-10">
                                                        <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="" required>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Pays: </label>
                                                        <div class="col-sm-10">
                                                            <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="disabledTextInput">Adresse E-mail:</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $email }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 1: *</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input name="telephone_1" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 2: *</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input name="telephone_2" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="0612345678" required>
                                                </div>
                                            </div>

                                            <div class="text-right" style="margin-top: 50px">
                                                <div >
                                                    <button class="btn btn-primary nextBtn btn-lg" type="button" onclick="stepperNext();">Suivant</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- @endif --}}

                        <div id="bourse" class="content" role="tabpanel" aria-labelledby="bourse-trigger">
                            <div class="row justify-content-center" style="margin-top: 24px;">

                                <div class="col-md-9" style="margin-top: 50px">
                                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>

                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Choix du programme de bourse</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5>
                                                <div class="alert alert-secondary" role="alert">
                                                    Vous avez le droit de postuler à une seule disciplne par programme.
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="programme">Programme</label>
                                                <select class="form-control" id="programme">
                                                    <option>Programme</option>
                                                    <option>Tunisie</option>
                                                    <option>Sénégal</option>
                                                    <option>Jordani</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="discipline">Discipline</label>
                                                <select class="form-control" id="discipline">
                                                    <option>Discipline</option>
                                                    <option>Médecine Génerale</option>
                                                    <option>Médecine Dentaire</option>
                                                    <option>Architecture</option>
                                                    <option>Industrie Biomédicale</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-primary prevtBtn btn-lg " type="button" onclick="stepperPrevious();" >Précedent</button>
                                            <button data-toggle="collapse" data-target="#condition" class="btn  btn-primary btn-lg pull-right" type="button"  >Candidater</button>
                                            <!--collapse page-->
                                            <div id="condition" class="collapse">
                                                    <p>info 1</p>
                                                    <p>info 2</p>
                                                    <p>info 3</p>
                                                    <h3>Dates Limites</h3>
                                                    <p>info 1</p>
                                                    <p>info 2</p>
                                                    <p>info 3</p>
                                                    <h3>Conditions d'admission</h3>
                                                    <p>condition1 : seuil test </p>
                                                        
                                                    <div class="form-group">
                                                        <label>Test: *</label>
                                                        <div class="row">
                                                        
                                                            <div class="col-sm-4">
                                                                
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="note regionale" required>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-sm-4">
                                                                
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="note nationale" required>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Tester</button>

                                                        </div>
                                                    </div>  
                                                    <p>condition2</p>
                                                    <p>condition3</p>


                 
                                            <div class="form-group form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on  blabla.
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                                                </label>
                                            </div>
                                        
                                            <button class="btn btn-primary nextBtn btn-lg" type="button" onclick="stepperNext();" >Poursuivre candidature</button>
                                                
                                        
                                            </div> 
                                            </form>


                                    </div>

                                </div>
                            
                            </div>
                        </div>

                        <div id="formulaire" class="content" role="tabpanel" aria-labelledby="formulaire-trigger">

                        <div class="row justify-content-center" style="margin-top: 24px;">

                            <div class="col-md-9" style="margin-top: 50px">
                                
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
                        <!--validation formulaire -->

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



