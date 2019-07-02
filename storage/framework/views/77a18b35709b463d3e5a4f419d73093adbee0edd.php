<?php $__env->startSection('content'); ?>
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
                                <?php echo csrf_field(); ?>
                                <input type="hidden" id="has-notes" <?php if($hasNotes == 'true'): ?> value="true" <?php endif; ?>>

                                <div>
                                    <h3 class="justify-content-center title">Informations Personnelles</h3>
                                    <h5 class="subtitle">Veuillez saisir les informations suivantes</h5>
                                </div>

                                <br>
            
                                <div class="form-group">
                                    <label for="niveau">Dernier Diplôme Obtenu</label>
                                    <select name="niveau" class="form-control <?php if($niveau != ''): ?> form-input <?php endif; ?>" id="niveau">
                                        <option disabled selected <?php if($niveau == ''): ?> selected <?php endif; ?>><span>Diplôme</span></option>  
                                        <option value="BAC" <?php if($niveau == 'BAC'): ?> selected <?php endif; ?>><span class="form-input">Baccalauréat</span></option>
                                        <option value="LIC" <?php if($niveau == 'LIC'): ?> selected <?php endif; ?>><span class="form-input">Licence<span></option>
                                        <option value="MAS" <?php if($niveau == 'MAS'): ?> selected <?php endif; ?>><span class="form-input">Master</span></option>
                                        <option value="DOC" <?php if($niveau == 'DOC'): ?> selected <?php endif; ?>><span class="form-input">Doctorat</span></option>
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
                                        <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="<?php echo e($nom); ?>" required>
                                        </div>
                                        <div class="col" style="text-align:right;">
                                            <label for="nom_ar" dir="rtl"  >الاسم العائلي</label>
                                            <input name="nom_ar" id="nom_ar" type="text" class="form-control form-input " placeholder="الاسم العائلي" value="<?php echo e($nom_ar); ?>" required dir="rtl">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="prenom" >Prénom</label>
                                        <input name="prenom" type="text" id="prenom" class="form-control form-input" placeholder="Prénom" value="<?php echo e($prenom); ?>" required>
                                        </div>
                                        <div class="col" style="text-align:right;" >
                                            <label  dir="rtl" for="prenom_ar" >الاسم الشخصي:</label>
                                            <input dir="rtl" name="prenom_ar" id="prenom_ar" type="text" class="form-control form-input" placeholder="الاسم الشخصي" value="<?php echo e($prenom_ar); ?>" required >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="group">
                                    <div class="form-group">
                                        <label for="cin">Carte Nationale d'Identité</label>
                                        <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="<?php echo e($cin); ?>" required>
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label for="ce">
                                            <span>Identification de l'étudiant</span>
                                            <span class="" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                <img src="<?php echo e(url('/img/info.png')); ?>" alt="">
                                            </span>
                                        </label>
                                        
                                        <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg. MXXxxxxxxxxx" value="<?php echo e($ce); ?>">
                                    </div>
            
                                </div>
                                
                                <div class="form-group group">
                                    <label for="sexe">Sexe</label>
                                    
                                    <div class="row justify-content-center">
            
                                        <div class="col">
                                            <div class="row justify-content-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H" <?php if($sexe == 'H'): ?> checked <?php endif; ?> >
                                                    <label class="custom-control-label" for="homme">Homme</label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col">
                                            <div class="row justify-content-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="femme" name="sexe" class="custom-control-input" value="F" <?php if($sexe == 'F'): ?> checked <?php endif; ?>>
                                                    <label class="custom-control-label" for="femme" >Femme</label>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
                                    
                                </div>
            
                                <div class="group">
                                    <div class="form-group">
                                        <label for="date-naissance">Date Naissance</label>
                                        <input name="dateNaissance" id="naissance" value="<?php echo e($date_naissance); ?>" type="date" class="form-control form-input">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="prenom" >Pays de Naissance</label>
                                                <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="<?php echo e($pays_naissance); ?>" required>
                                            </div>
                                            <div class="col" >
                                                <label for="prenom" >Ville de Naissance</label>
                                                <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="<?php echo e($ville_naissance); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
            
                                <div class="form-group group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="text" id="email" class="form-control" placeholder="<?php echo e($email); ?>" disabled>
                                </div>
            
                                <div class="group">
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 1: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_1" type="tel" class="form-control form-input"  placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="<?php echo e($tel_1); ?>" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 2: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_2" type="tel" class="form-control form-input" placeholder="0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="<?php echo e($tel_2); ?>" required>
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
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" id="diplome-type" name="diplome_type">

                                    <div class="form-group">
                                        <h3 class="title">Cursus</h3>
                                        <h5 class="subtitle">Veuillez renseigner vos notes</h5>
                                        
                                        <div class="form-group">
                                            <label for="serie-bac">Série de Baccalauréat:</label>
                                            <select name="serie_bac" class="form-control form-input" id="type-bac">
                                                <option disabled selected>Série de Baccalauréat</option>
                                                <?php $__currentLoopData = $bacs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                    <option value="<?php echo e($bac->type_bacalaureat_id); ?>" <?php if($hasNotes == 'true' && $type_bac_id == $bac->type_bacalaureat_id): ?> selected <?php endif; ?>><?php echo e($bac->bacalaureat_fr); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <input type="text" id="academie" name="academie" class="form-control form-input" placeholder="Académie d'obtention" <?php if($hasNotes == 'true'): ?> value="<?php echo e($academie_obtention); ?>" <?php endif; ?> required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="nom">Note Regionale: <span class="red">*</span></label>
                                                    <input type="text" id="note-reg"  name="note_reg" class="form-control form-input" placeholder="Note Regionale" <?php if($hasNotes == 'true'): ?> value="<?php echo e($note_nationale); ?>" <?php endif; ?> required>
                                                </div>
                                            
                                                <div class="col">
                                                    <label for="nom">Note Nationale: <span class="red">*</span></label>
                                                    <input type="text" id="note-nat" name="note_nat" class="form-control form-input" placeholder="Note Nationale" <?php if($hasNotes == 'true'): ?> value="<?php echo e($note_regionale); ?>" <?php endif; ?> required>
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
                                                    
                                                    <input type="text" id="mat-1-input" name="mat_1" class="form-control form-input" placeholder="" <?php if($hasNotes == 'true'): ?> value="<?php echo e($note_1); ?>" <?php endif; ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom">Note <span id="mat-2"></span><span class="red">*</span></label>
                                                    
                                                    <input type="text" id="mat-2-input" name="mat_2" class="form-control form-input" placeholder="" <?php if($hasNotes == 'true'): ?> value="<?php echo e($note_2); ?>" <?php endif; ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom">Note <span id="mat-3"></span><span class="red">*</span></label>
                                                    
                                                    <input type="text" id="mat-3-input" name="mat_3" class="form-control form-input" placeholder="" <?php if($hasNotes == 'true'): ?> value="<?php echo e($note_3); ?>" <?php endif; ?> required>
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
                            <form method="POST" action="<?php echo e(url('documents')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

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
<?php $__env->stopSection(); ?>


                
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amine/Developer/Bourse/resources/views/stepper.blade.php ENDPATH**/ ?>