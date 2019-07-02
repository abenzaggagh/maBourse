<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
/**************************************************************************************************/

.col-sm-9 {
    min-height: 90%;
}


div.tab-container {
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
  padding-left: 0;
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

table {    
    width: 100%;
    }
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



@-webkit-keyframes pulsate {
 50% { color: #000; }
}
@keyframes  pulsate {
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
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row" style="padding: 35px 0 0 0; background-color: #FFF;">
             
        <!-- Sidebar -->
        <div class="col-sm-3" style="background:#fff;">
            <div class="tab-menu">  
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item active " id="infors">
                        <span class="fas fa-id-card">&nbsp;&nbsp;</span>Mes Infos personnelles
                    </a>
                    <a href="" class="list-group-item  " id="mes-candidatures">
                        <span class="fas fa-file-signature">&nbsp;&nbsp;</span>Mes candidatures
                    </a>
                    <a href="" class="list-group-item  " id="parametres">
                        <span class="fas fa-cog">&nbsp;&nbsp;</span>Paramètres
                    </a>
                    <a href="" class="list-group-item  " id="supports">
                        <span class="fas fa-question-circle">&nbsp;&nbsp;</span>Support
                    </a>

                </div>
                <div>
                    <a href="<?php echo e(url('logout')); ?>" class="list-group-item ">
                    <h4 class="	fas fa-times-circle">&nbsp;&nbsp;</h4>Déconnexion
                    </a>
                </div> 
            </div>
        </div>

        <div class="col-sm-9 tab" style="background:#fff; min-height: 90%;">

            <div class="tab-content active" id="infor"> 
                <div id="informations-personelles" class="content" role="tabpanel" aria-labelledby="informations-personelles-trigger">
                    <div class="row justify-content-center" style="margin-top: 24px;">
                        <div class="col-md-10" style="margin-bottom: 70px;">
            
                            <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                <form style="padding: 16px 32px;">
                                
                                    <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="hidden" id="register" name="register" value="<?php echo e($alreadyRegistered); ?>">
                                    
                                    <input type="hidden" id="niveau_etude" name="niveau_etude" value="<?php echo e($niveau); ?>">

                                    <div>
                                        <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Informations Personnelles</h3>
                                        <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez saisir les informations suivantes</h5>
                                    </div>

                                    <div class="form-group">
                                        <label for="niveau">Dernier Diplôme Obtenu:</label>
                                        <select name="niveau" class="form-control <?php if($niveau != ''): ?> form-input <?php endif; ?>" id="niveau">
                                            <option disabled <?php if($niveau == ''): ?> selected <?php endif; ?>><span>Diplôme</span></option>  
                                            <option value="BAC" <?php if($niveau == 'BAC'): ?> selected <?php endif; ?>><span class="form-input">Baccalauréat</span></option>
                                            <option value="LIC" <?php if($niveau == 'LIC'): ?> selected <?php endif; ?>><span class="form-input">Licence<span></option>
                                            <option value="MAS"<?php if($niveau == 'MAS'): ?> selected <?php endif; ?>><span class="form-input">Master</span></option>
                                            <option value="DOC"<?php if($niveau == 'DOC'): ?> selected <?php endif; ?>><span class="form-input">Doctorat</span></option>
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
                                            <input name="nom" type="text" id="nom" class="form-control form-input" placeholder="Nom" value="<?php echo e($nom); ?>" required>
                                            </div>
                                            <div class="col" style="text-align:right;">
                                                <label for="nom_ar" dir="rtl"  >الاسم العائلي: <span class="red">*</span> </label>
                                                <input name="nom_ar" id="nom_ar" type="text" class="form-control form-input " placeholder="الاسم العائلي" value="<?php echo e($nom_ar); ?>" required dir="rtl">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="prenom" >Prénom: <span class="red">*</span></label>
                                            <input name="prenom" type="text" id="prenom" class="form-control form-input" placeholder="Prénom" value="<?php echo e($prenom); ?>" required>
                                            </div>
                                            <div class="col" style="text-align:right;" >
                                                <label  dir="rtl" for="prenom_ar" >الاسم الشخصي: <span class="red">*</span></label>
                                                <input dir="rtl" name="prenom_ar" id="prenom_ar" type="text" class="form-control form-input" placeholder="الاسم الشخصي" value="<?php echo e($prenom_ar); ?>" required >
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    
                                    <div class="form-group">
                                            <label for="cin">Carte Nationale d'Identité: <span class="red">*</span></label>
                                            <input name="cin" id="cin" type="text" class="form-control form-input" placeholder="eg. A123456" value="<?php echo e($cin); ?>" required>
                                    </div>  
                                    
                                    


                                    
                                                    
                                                

                                    <div class="form-group">
                                        <label for="ce">Identification de l'étudiant: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <select class="custom-select" id="inputGroupSelect02">
                                                    <option selected disabled>Identification de l'étudiant</option>
                                                    <option value="1">Code Massar</option>
                                                    <option value="2">Code d'Inscription</option>
                                                </select>
                                            </div>
                                            <input name="ce" type="text" id="ce" class="form-control form-input" placeholder="eg MXXxxxxxxxxx" value="<?php echo e($ce); ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="sexe">Sexe: <span class="red">*</span></label>
                                        
                                        <div class="row justify-content-center" >
                                            
                                            <div class="col-md-2"></div>
                                        
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="homme" name="sexe" class="custom-control-input" value="H" <?php if($sexe == 'H'): ?> checked <?php endif; ?>>
                                                    <label class="custom-control-label" for="homme">Homme</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="femme" name="sexe" class="custom-control-input" value="F" <?php if($sexe == 'F'): ?> checked <?php endif; ?>>
                                                    <label class="custom-control-label" for="femme" >Femme</label>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                            <label for="date-naissance">Date Naissance: <span class="red">*</span></label>
                                            <input name="dateNaissance" id="naissance" value="<?php echo e($dateNaissance); ?>" type="date" class="form-control form-input">
                                        </div>

                                    <div class="form-group">
                                        <label>Lieu de Naissance: <span class="red">*</span></label>
                                        <div class="row">
                                        
                                            <div class="col">
                                                <label for="ville" class="col-sm-2 col-form-label">Ville: </label>
                                                <div class="col-sm-10">
                                                <input name="villeNaissance" type="text" class="form-control form-input" placeholder="Ville" value="<?php echo e($villeNaissance); ?>" required>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <label for="ville" class="col-sm-2 col-form-label">Pays: </label>
                                                <div class="col-sm-10">
                                                    <input name="paysNaissance" type="text" class="form-control form-input" placeholder="Pays" value="<?php echo e($paysNaissance); ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <label for="disabledTextInput">Adresse E-mail:</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo e($email); ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 1: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_1" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="eg. 0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="<?php echo e($tel_1); ?>" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="date-naissance">Téléphone 2: <span class="red">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+ 212</span>
                                            </div>
                                            <input name="telephone_2" type="tel" class="form-control form-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="0612345678" pattern="[0]{1}[5-6]{1}[0-9]{8}" value="<?php echo e($tel_2); ?>" required>
                                        </div>
                                    </div>

                                    <div class="text-right" style="margin-top: 50px">
                                        <div>
                                            <button class="btn btn-primary nextBtn btn-lg" type="button" id="informations">Sauvegarder</button>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content " id="mes-candidature">
                    <div class="formulaire-perso" class="content">
                        <div id=cand-tab style="padding: 2px;">
                            <h1> Mes candidatures</h1>
                        
                            <div class="row justify-content-center" id="candidatures" style="border:none;" >
                                
                                
                                <div>
                                    <button id="candidater" class="btn btn-primary" >
                                        <span class="fas fa-plus" style="margin-right: 4px">&nbsp;</span>Nouvelle candidature
                                    </button>
                                </div>
                                    
                                <table class="table table-borderless" style="border:none; margin: 25px;">
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

                            <div class="row justify-content-center" id="candida" style="display: none">
                
                                <div class="col-md-12">
            
                                        <div class="bs-stepper">
            
                                            <div class="bs-stepper-header" role="tablist">
                                                
                                                <div class="step" data-target="#bourse">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="bourse" id="bourse-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Programme de Bourse</span>
                                                    </button>
                                                </div>
                                                
                                                <div class="line"></div>
                        
                                                <div class="step" data-target="#formulaire">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="formulaire" id="formulaire-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Formulaire de Candidature</span>
                                                    </button>
                                                </div>
                        
                                                <div class="line"></div>
                        
                                                <div class="step" data-target="#confirmation">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="confirmation" id="confirmation-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label">Confirmation</span>
                                                    </button>
                                                </div>
                        
                                            </div>
                        
                                            <div class="bs-stepper-content">
                                                
                                                <div id="bourse" class="content" role="tabpanel" aria-labelledby="bourse-trigger">
                                                    <div class="row justify-content-center" style="margin-top: 24px;">
                        
                                                        <div class="col-md-11" style="margin-top: 50px">
                                                            
                                                            <div class="formulaire-perso"  style="border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   
                        
                                                                <form>
                                                                    <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                                    <?php if($alreadyHasNotes == TRUE): ?>
                                                                        <input type="hidden" id="has-notes" name="has_notes" value="1">
                                                                    <?php else: ?>
                                                                        <input type="hidden" id="has-notes" name="has_notes" value="0">
                                                                    <?php endif; ?>
                        

                                                                    <div>
                                                                        <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Choix du programme de bourse</h3>
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

                                                                    <hr style="margin: 32px 0 16px 0; padding: 8px;">
                        
                                                                    <div class="form-group">
                                                                        <label for="programmes">Programme</label>
                                                                        <select class="form-control" id="programmes">
                                                                            <option selected disabled>Programme</option>
                                                                                <?php $__currentLoopData = $programmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($programme->programme_id); ?>"><?php echo e($programme->pays); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                                            <br><br><br><br>
                                                                        </div> 
                        
                                                                        <div style="margin: 32px 0 0px 0;">
                                                                            <hr style="margin: 32px 0 16px 0; padding: 8px;">
                        
                                                                            <?php if($alreadyHasNotes == TRUE): ?> 
                                                                            
                                                                                <div class="form-group">
                                                                                    <h3>Mon Cursus: <span class="red">*</span></h3>
                                                                                    <label>Veuillez renseigner les notes obtenues:</label>  
                                                                                    <br>
                                                                                    <div class="form-group">
                                                                                        <label for="niveau">Série de Baccalauréat:</label>
                                                                                    <input type="text" class="form-control form-input" value="<?php echo e($bac->bacalaureat_fr); ?>" disabled>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <label for="annee_obtention">Année d'obtention: <span class="red">*</span></label>
                                                                                            <input type="text" class="form-control form-input" value="<?php echo e($dip->annee_obtention); ?>" disabled>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col">
                                                                                                <label for="nom">Académie d'obtention: <span class="red">*</span></label>
                                                                                                <input type="text" id="academie" name="academie" class="form-control form-input" value="<?php echo e($dip->academie_obtention); ?>" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                            
                                                                                    <div class="form-group">
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <label for="nom">Note Regionale: <span class="red">*</span></label>
                                                                                                <input type="text" id="note-reg" class="form-control form-input" value="<?php echo e($bac->note_regionale); ?>"  disabled>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col">
                                                                                                <label for="nom">Note Nationale: <span class="red">*</span></label>
                                                                                                <input type="text" id="note-nat" class="form-control form-input" value="<?php echo e($bac->note_nationale); ?>" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                            
                                                                                    <div id="notes">
                            
                                                                                        <div class="form-group" id="notes_mat">
                                                                                            <div class="row">
                                                                                                <div class="col">
                                                                                                <label for="nom">Note <span id="mat-1"><?php echo e($bac->mat_1_fr); ?></span><span class="red">*</span></label>
                                                                                                    <input type="text" id="mat-1-input" name="mat-1" class="form-control form-input" value="<?php echo e($bac->note_1); ?>" disabled>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <label for="nom">Note <span id="mat-2"><?php echo e($bac->mat_2_fr); ?></span><span class="red">*</span></label>
                                                                                                    <input type="text" id="mat-2-input" name="mat-2" class="form-control form-input" value="<?php echo e($bac->note_2); ?>" disabled>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <label for="nom">Note <span id="mat-3"><?php echo e($bac->mat_3_fr); ?></span><span class="red">*</span></label>
                                                                                                    <input type="text" id="mat-3-input" name="mat-3" class="form-control form-input" value="<?php echo e($bac->note_3); ?>" disabled>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                            <div class="form-group">
                                                                                                <input type="checkbox" class=""> 
                                                                                                <label class="custom-control-labe">Je confirme avoir pris connaissance des prérequis</label>
                                                                                            </div> 
                                                                                            
                            
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <br>
                                                                            <?php else: ?>
                                                                                <form>
                                                                                    <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                        
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
                                                                                            
                                                                                                <div class="form-group">
                                                                                                    <input type="checkbox" class=""> 
                                                                                                    <label class="custom-control-labe">Je confirme avoir pris connaissance des prérequis</label>
                                                                                                </div> 
                                                                                                
                                
                                                                                        </div>
                                
                                                                                    </div>
                                                                                </form>
                                                                            <?php endif; ?>
                        
                                                                            <div role="alert" class="alert alert-danger" style="display: none">
                                                                                Vous n'avez le droit de postuler à cette disciplne.
                                                                            </div>
                        
                                                                        </div> 
                        
                                                                    </div>    
                        
                                                                    <div style="margin-top: 45px">
                                                                        <button class="btn prevtBtn btn-lg back-button" type="button" id="previous" >Précedent</button>
                                                                        <button class="btn btn-primary nextBtn btn-lg float-right" type="button" id="candidature" onclick="cand()">Poursuivre candidature</button>
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
                                                                        <h3 style="font-weight: bold; font-size: 25px; margin: 8px 0 24px 0;" class="justify-content-center">Compléter votre candidature</h3>
                                                                        <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Téléchargement des pièces</h5>
                                                                    </div>
                        
                                                                    
                                                                    
                                                                    <div style="font-size: 16px; margin: 8px 0 24px 0;">
                                                                        <h6 style="font-size: 14px; margin: 8px 0 16px 0;">Afin de compléter votre candidature, vous devez scanner les pièces mentionnées ci-dessous et les télécharger.</h6>
                                                                        <div class="alert alert-danger" role="alert">
                                                                            Merci de noter que votre candidature ne sera pas prise en compte si les documents sont mal scannés.
                                                                        </div>
                                                                    </div>
                        
                                                                    <hr style="margin: 32px 0 16px 0; padding: 8px;">
                                                                        
                                                                    <div style="margin: 24px 0 24px 0;">
                        
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
                        
                                                                    </div>
                        
                                                                    <div style="margin: 50px 0 0px 0;">
                                                                        <button class="btn btn-primary prevtBtn btn-lg" type="button" onclick="stepperPrevious();">Précédent</button>
                                                                        <button class="btn btn-primary nextBtn btn-lg float-right" type="button" onclick="stepperNext();">Suivant</button>
                                                                    </div>
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
                    </div>
                </div>

            </div>

            

            <div class="tab-content" id="parametre">  
                <div>
                    <h1> Paramètres de compte</h1>
                    <p class="font-weight-light">
                        Modifier vos paramètres de compte
                    </p> 
                </div>
            
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
                
            
                    <div class="form-group">
                        <p class="font-weight-light">
                            Modifier votre mot de passe:
                        </p> 
                        <label for="password_register">Nouveau mot de passe:</label>
                        <input type="password" name="password_register" id="password-register" class="form-control <?php if ($errors->has('password_register')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_register'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> input-lg" placeholder="Mot de passe" required autocomplete="new-password">
                    </div>          
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer votre nouveau mot de Passe:</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirmer votre mot de passe" required autocomplete="new-password">               
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-primary pull-right button"> Modifier Adresse E-mail</button>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amine/Developer/Bourse/resources/views/information.blade.php ENDPATH**/ ?>