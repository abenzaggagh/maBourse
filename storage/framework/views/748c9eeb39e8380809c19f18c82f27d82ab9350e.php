<?php $__env->startSection('content'); ?>
<section>
    <div class="candidature-auth">
        <div class="container">
            <h1>Mon Compte</h1>
            <div class="row">
                
                <div class="col-sm-5">
                    <h2 class="title">Inscrivez-vous</h2>
                    <div class="form">
                        <form role="form" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            <fieldset>
                                <div class="form-group">
                                    <label for="email_register">Adresse e-mail</label>
                                    <input type="email" name="email_register" id="email-register" class="form-control input-lg "  placeholder="Adresse e-mail">
                                    <?php if ($errors->has('email_register')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email_register'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password_register">Mot de passe</label>
                                    <input type="password" name="password_register" id="password-register" class="form-control <?php if ($errors->has('password_register')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_register'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> input-lg" placeholder="Mot de passe" required autocomplete="new-password">
                                    <?php if ($errors->has('password_register')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_register'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirmer votre mot de passe</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirmer votre mot de passe" required autocomplete="new-password">
                                    <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                
                                <div class="form-check">
                                    <label class="form-check-label" style="margin-top: 2px; margin-bottom:12px;">
                                        <input type="checkbox" class="form-check-input" required="">
                                        En cliquant sur Inscription, j'accepte sans réserve 
                                        <a href="" data-toggle="modal" data-target="#conditionsGenerales" style="font-size: 15px; padding: 0;">
                                            <u>les conditions générales d'utilisation</u>
                                        </a>
                                    </label>
                                </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button float-right">
                                        Inscription
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                
                <div class="col-sm-5">
                    <h2 class="title">Déjà inscrit(e)</h2>
                    <div class="form">
                        <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <fieldset>                                
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="email" name="email" id="email" class="form-control input-lg form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Adresse e-mail" required autocomplete="email">
                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(__('lang.email')); ?></strong>
                                        </span> 
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" name="password" id="password" class="form-control input-lg form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Mot de passe" required autocomplete="current-password">
                                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(__('lang.motdepasse')); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-link no-padding" href="#">Mot de passe oublié?</a>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button float-right">Connexion</button>
                                </div>  
                            </fieldset>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="conditionsGenerales" tabindex="-1" role="dialog" aria-labelledby="conditionsGeneralesTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="conditionsGeneralesTitle">Conditions générales d'utilisation</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amine/Developer/Bourse/resources/views/authentication.blade.php ENDPATH**/ ?>