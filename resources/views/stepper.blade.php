@extends('layouts.app')
@section('content')
<div class="bs-stepper">
    
    <div class="bs-stepper-header" style="padding: 25px 150px" role="tablist">
        <div class="step" data-target="#informations-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="informations-part" id="informations-part-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label">Informations Personnelles</span>
        </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#cursus-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="cursus-part" id="cursus-part-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">Cursus</span>
        </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#documents-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="documents-part" id="documents-part-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">Documents</span>
        </button>
        </div>
    </div>

    <div class="bs-stepper-content">

        <div id="informations-part" class="content" role="tabpanel" aria-labelledby="informations-part-trigger">
            <section>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="informations">   
                            <form>
                                @csrf
                                <input type="hidden" id="has-notes" @if ($hasNotes == 'true') value="true" @endif>

                                <div>
                                    <h3 class="justify-content-center title">Informations Personnelles</h3>
                                    <h5 class="subtitle">Veuillez saisir les informations suivantes</h5>
                                </div>

                                <br>
            
                                <div class="form-group">
                                    <label for="niveau">Dernier Diplôme Obtenu</label>
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
                                            <label for="nom">Nom</label>
                                        <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="{{ $nom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;">
                                            <label for="nom_ar" dir="rtl"  >الاسم العائلي</label>
                                            <input name="nom_ar" id="nom_ar" type="text" class="form-control form-input " placeholder="الاسم العائلي" value="{{ $nom_ar }}" required dir="rtl">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="prenom" >Prénom</label>
                                        <input name="prenom" type="text" id="prenom" class="form-control form-input" placeholder="Prénom" value="{{ $prenom }}" required>
                                        </div>
                                        <div class="col" style="text-align:right;" >
                                            <label  dir="rtl" for="prenom_ar" >الاسم الشخصي:</label>
                                            <input dir="rtl" name="prenom_ar" id="prenom_ar" type="text" class="form-control form-input" placeholder="الاسم الشخصي" value="{{ $prenom_ar }}" required >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="group">
                                    <div class="form-group">
                                        <label for="cin">Carte Nationale d'Identité</label>
                                        <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="{{ $cin }}" required>
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label for="ce">
                                            <span>Identification de l'étudiant</span>
                                            <span class="" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                <img src="{{ url('/img/info.png') }}" alt="">
                                            </span>
                                        </label>
                                        
                                        <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg. MXXxxxxxxxxx" value="{{ $ce }}">
                                    </div>
            
                                </div>
                                
                                <div class="form-group group">
                                    <label for="sexe">Sexe</label>
                                    
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
                                        <label for="date-naissance">Date Naissance</label>
                                        <input name="dateNaissance" id="naissance" value="{{ $date_naissance }}" type="date" class="form-control form-input">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="prenom" >Pays de Naissance</label>
                                                <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="{{ $pays_naissance }}" required>
                                            </div>
                                            <div class="col" >
                                                <label for="prenom" >Ville de Naissance</label>
                                                <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="{{ $ville_naissance }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
            
                                <div class="form-group group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="text" id="email" class="form-control" placeholder="{{ $email }}" disabled>
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
            
                                <div class="text-right" style="margin-top: 50px">
                                    <div>
                                        <button class="btn btn-primary nextBtn btn-lg" type="button" id="informations-step">Suivant</button>
                                    </div>
                                </div>
            
                            </form>
                        </div>
                    </div>         
                </div>
            </section>
        </div>

        <div id="cursus-part" class="content" role="tabpanel" aria-labelledby="cursus-part-trigger">
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
                                            <label for="serie-bac">Série de Baccalauréat:</label>
                                            <select name="serie_bac" class="form-control form-input" id="type-bac">
                                                <option disabled selected>Série de Baccalauréat</option>
                                                @foreach ($bacs as $bac) 
                                                    <option value="{{ $bac->type_bacalaureat_id }}" @if ($hasNotes == 'true' && $type_bac_id == $bac->type_bacalaureat_id) selected @endif>{{ $bac->bacalaureat_fr }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        
                                            <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="annee_obtention">Année d'obtention:</label>
                                                    <input type="text" id="annee-obtention" class="form-control" disabled>
                                                </div>
                                            
                                                <div class="col">
                                                    <label for="nom">Académie d'obtention: <span class="red">*</span></label>
                                                <input type="text" id="academie" name="academie" class="form-control form-input" placeholder="Académie d'obtention" @if ($hasNotes == 'true') value="{{ $academie_obtention }}" @endif required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="nom">Note Regionale: <span class="red">*</span></label>
                                                    <input type="text" id="note-reg"  name="note_reg" class="form-control form-input" placeholder="Note Regionale" @if ($hasNotes == 'true') value="{{ $note_nationale }}" @endif required>
                                                </div>
                                            
                                                <div class="col">
                                                    <label for="nom">Note Nationale: <span class="red">*</span></label>
                                                    <input type="text" id="note-nat" name="note_nat" class="form-control form-input" placeholder="Note Nationale" @if ($hasNotes == 'true') value="{{ $note_regionale }}" @endif required>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="notes">
                                            
                                            <div class="group">
                                                <div role="alert" class="alert alert-warning" style="">
                                                    Il s'agit des notes du bac...
                                                </div>
                                            </div>

                                            <div class="group" id="notes_mat">
                                                <div class="form-group">
                                                    <label for="nom">Note <span id="mat-1"></span><span class="red">*</span></label>
                                                    {{-- TODO: Add Pattern --}}
                                                    <input type="text" id="mat-1-input" name="mat_1" class="form-control form-input" placeholder="" @if ($hasNotes == 'true') value="{{ $note_1 }}" @endif required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom">Note <span id="mat-2"></span><span class="red">*</span></label>
                                                    {{-- TODO: Add Pattern --}}
                                                    <input type="text" id="mat-2-input" name="mat_2" class="form-control form-input" placeholder="" @if ($hasNotes == 'true') value="{{ $note_2 }}" @endif required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom">Note <span id="mat-3"></span><span class="red">*</span></label>
                                                    {{-- TODO: Add Pattern --}}
                                                    <input type="text" id="mat-3-input" name="mat_3" class="form-control form-input" placeholder="" @if ($hasNotes == 'true') value="{{ $note_3 }}" @endif required>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>



                                        <div class="" style="margin-top: 50px">
                                            <button class="btn prevtBtn btn-lg back-button" type="button" id="cursus-previous" >Précedent</button>
                                            <button class="btn btn-primary btn-lg float-right" type="button" id="cursus-step">Suivant</button>
                                        </div>

                                    </div>
                                    
                                </form>  
                            </div> 
                        </div>    
                    </div>
                </div>
            </section>
            <section id="multi-dip-cursus">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="informations">   
                            <div>
                                <form>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <h3 class="title">La candidature en-ligne pour le 2éme cycle et 3éme n'est pas encore disponible.</h3>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div> 
                        </div>    
                    </div>
                </div>
            </section>
        </div>

        <div id="documents-part" class="content" role="tabpanel" aria-labelledby="documents-part-trigger">
            <section id="documents">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="informations">   
                            <form method="POST" action="{{ url('documents') }}" enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Compléter votre dossier candidature</h3>
                                    <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Téléchargement des pièces</h5>
                                </div>
        
                                <div style="font-size: 16px; margin: 8px 0 24px 0;">
                                    <h6 style="font-size: 14px; margin: 8px 0 16px 0;">Afin de compléter votre candidature, vous devez scanner les pièces mentionnées ci-dessous et les télécharger.</h6>
                                    <div class="alert alert-danger" role="alert">
                                        Merci de noter que votre candidature ne sera pas prise en compte si les documents sont mal scannés.
                                    </div>
                                </div>
        
                                <hr>
                                    
                                <div style="margin: 24px 0 24px 0;">
        
                                    <div class="form-group">
                                        <label for="cin" class="">Copie de la CIN ou Passeport</label>
                                        <div class="custom-file">
                                            <input type="file" name="cin_password_file" class="custom-file-input" id="cin-file">
                                            <label class="custom-file-label" id="cin-filename" for="cin">CIN ou Passeport</label>
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="baccalaureat" class="">Baccalauréat</label>
                                        <div class="custom-file">
                                            <input type="file" name="baccalaureat_file" class="custom-file-input" id="baccalaureat-file">
                                            <label class="custom-file-label" id="baccalaureat-filename" for="baccalaureat">Baccalauréat</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="releve_notes" class="">Relevé de notes</label>
                                        <div class="custom-file">
                                            <input type="file" name="releve_notes_file" class="custom-file-input" id="releve-notes-file">
                                            <label class="custom-file-label" id="releve-notes-filename" for="releve_notes">Relevé de notes</label>
                                        </div>
                                    </div>
        
                                </div>
        
                                <div style="margin: 50px 0 0px 0;">
                                    <button class="btn prevtBtn btn-lg  back-button" type="button" id="documents-previous">Précédent</button>
                                    <button class="btn btn-primary nextBtn btn-lg float-right" type="submit" id="documents-step">Confirmer</button>
                                </div>
                            </form>

                        </div>    
                    </div>
                </div>
            </section>
            
        </div>

    </div>

</div>
@endsection


                