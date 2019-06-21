@extends('layouts.app')

@section('content')
<section class="" style="margin-top: 50px">
    
    <div class="container">

        <div class="row" style="display: none;">
            
            <div class="col-md-12">

            <!-- Stepers Wrapper -->
                <ul class="stepper stepper-horizontal">

                <!-- First Step -->
                    <li class="completed">
                        <a href="#!">
                        <span class="circle">1</span>
                        <span class="label">First step</span>
                        </a>
                    </li>

                <!-- Second Step -->
                    <li class="active">
                        <a href="#!">
                        <span class="circle">2</span>
                        <span class="label">Second step</span>
                        </a>
                    </li>

                <!-- Third Step -->
                    <li class="warning">
                        <a href="#!">
                        <span class="circle"><i class="fas fa-exclamation"></i></span>
                        <span class="label">Third step</span>
                        </a>
                    </li>

                </ul>
            <!-- /.Stepers Wrapper -->

            </div>
            
        </div>

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
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="4min3b3n@gmail.com" disabled>
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

                    </form>

                </div>

            </div>
        
        </div>

    </div>
<section>
@endsection
