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
                        
                        {{-- @if (request()->session()->get('isRegisterd') == 'False') --}}
                        <div id="informations-personelles" class="content" role="tabpanel" aria-labelledby="informations-personelles-trigger">
                            <div class="row justify-content-center" style="margin-top: 24px;">
                                <div class="col-md-9">
                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>
                                            
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
                                                    <option value="LICENCIER">License</option>
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
                                                    <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="XX123456" value="{{ $cin }}" required>
                                            </div>                       

                                            <div class="form-group">
                                                <label for="ce">Code d'Étudiant (Code Massar | Code d'Inscription)</label>
                                                <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="XX123456" value="{{ $ce }}">
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
                                                {{-- <input type="date" id=""  placeholder=""> --}}
                                                <input name="dateNaissance" id="naissance" type="date" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Lieu de Naissance: *</label>
                                                <div class="row">
                                                
                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Ville: </label>
                                                        <div class="col-sm-10">
                                                        <input name="villeNaissance" type="text" class="form-control" placeholder="Ville" value="" required>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Pays: </label>
                                                        <div class="col-sm-10">
                                                            <input name="paysNaissance" type="text" class="form-control" placeholder="Pays" required>
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
                                                    <input name="telephone_1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="eg. 0612345678" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 2: *</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input name="telephone_2" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="0612345678" required>
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
                                                <label for="niveau-etude">Programme</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Programme</option>
                                                    <option>Tunisie</option>
                                                    <option>Sénégal</option>
                                                    <option>Jordani</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="niveau-etude">Discipline</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Discipline</option>
                                                    <option>Médecine Génerale</option>
                                                    <option>Médecine Dentaire</option>
                                                    <option>Architecture</option>
                                                    <option>Industrie Biomédicale</option>
                                                </select>
                                            </div>

                                            <br><br><br><br><br><br>

                                            <div>
                                                <div class="float-left" > 
                                                    <button class="btn nextBtn btn-lg button-no-border" type="button" onclick="stepperPrevious();">Précédant</button>
                                                </div>

                                                <div class="text-right" > 
                                                    <button class="btn btn-primary nextBtn btn-lg" type="button" onclick="bourseNext();">Suivant</button>
                                                </div>
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
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Formulaire de Candidature</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5>
                                            </div>

                                            <br><br><br><br><br><br>
                                            <br><br><br><br><br><br>
                                            <br><br><br><br><br><br>
                                            <br><br><br><br><br><br>
                                            
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div id="confirmation" class="content" role="tabpanel" aria-labelledby="confirmation-trigger"></div>

                    </div>
                </div>

            </div>
            
        </div>
       

    </div>

</section>

@endsection



