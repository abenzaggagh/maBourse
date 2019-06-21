@extends('layouts.app')

@section('content')
<section class="candidature-section" style="margin-top: 50px">
    
    <div class="container">

        <div class="row justify-content-center" style="">
            
            <div class="col-md-12">

                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- STEEEEEEEEPS -->

                        <!-- STEEEEEEEEP 1 -->
                        <div class="step" data-target="#informations-personelles">
                            <button type="button" class="step-trigger" role="tab" aria-controls="informations-personelles" id="informations-personelles-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Informations Personnelles</span>
                            </button>
                        </div>

                        <div class="line"></div>

                        <!-- STEEEEEEEEP 2 -->
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

                                        <form>

                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Informations Personnelles</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5>
                                            </div>

                                            <div class="form-group">
                                                <label for="niveau-etude">Niveau d'étude:</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Baccalauréat</option>
                                                    <option>License</option>
                                                    <option>Master</option>
                                                    <option>Doctorat</option>
                                                </select>
                                            </div>
                                            
                                            <!-- SEPARATOR -->

                                            <hr style="margin: 32px 0 16px 0; padding: 8px;">

                                            <div class="form-group">
                                                <label for="disabledTextInput">Nationalité:</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Marocaine" disabled>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="nom">Nom: *</label>
                                                    <input type="text" class="form-control" placeholder="Nom" required>
                                                </div>
                                                <div class="col">
                                                    <label for="nom">Prénom: *</label>
                                                    <input type="text" class="form-control" placeholder="Prénom" required>
                                                </div>
                                            </div>

                                            <br>
                                            
                                            <div class="form-group">
                                                    <label for="nom">Carte Nationale d'Identité: *</label>
                                                    <!-- Tooltip -->
                                                    <input type="text" class="form-control" placeholder="A123456">
                                            </div>                       

                                            <div class="form-group">
                                                <label for="disabledTextInput">Code d'Étudiant (Code Massar | Code d'Inscription)</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="19 XX XX XX XX">
                                            </div>

                                            <div class="form-group">
                                                <label for="sexe">Sexe: *</label>
                                                
                                                <div class="row justify-content-center" >
                                                    
                                                    <div class="col-md-2"></div>
                                                
                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="homme" name="sexe" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="homme">Homme</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="femme" name="sexe" class="custom-control-input">
                                                            <label class="custom-control-label" for="femme">Femme</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="date-naissance">Date Naissance: *</label>
                                                <input type="date" id="" class="form-control" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>Lieu de Naissance: *</label>
                                                <div class="row">
                                                
                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Ville: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" placeholder="Ville" required>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <label for="ville" class="col-sm-2 col-form-label">Pays: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" placeholder="Pays" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="disabledTextInput">Adresse E-mail</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="amine.benzaggagh@gmail.com" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 1: *</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="date-naissance">Téléphone 2: *</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                                    </div>
                                                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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

                        <div id="bourse" class="content" role="tabpanel" aria-labelledby="bourse-trigger">
                            <div class="row justify-content-center" style="margin-top: 24px;">

                                <div class="col-md-9" style="margin-top: 50px">
                                    
                                    <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                        <form>


                                            <div>
                                                <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Choix du programme de bourse</h3>
                                                <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5>
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

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                        </form>

                                    </div>

                                </div>
                            
                            </div>
                        </div>

                        <div id="formulaire" class="content" role="tabpanel" aria-labelledby="formulaire-trigger"></div>

                        <div id="confirmation" class="content" role="tabpanel" aria-labelledby="confirmation-trigger"></div>

                    </div>
                </div>

            </div>
            
        </div>
       

    </div>

</section>
@endsection
