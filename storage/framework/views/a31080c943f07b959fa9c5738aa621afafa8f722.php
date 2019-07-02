<?php $__env->startSection('content'); ?>

<section class="candidature-section">
    <div class="candidature-auth">
        <div class="container">
            
            <h1>Candidature</h1>
            
            <div class="row">

                <!-- Register -->
                <div class="col-sm-6">

                    <h3>
                    Créez un compte pour démarrer votre candidature. <br> Vous pouvez sauvegarder à tout moment et y revenir plus tard pour continuer votre demande. 
                    Vous recevrez des mises à jour concernant votre candidature sur votre adresse e-mail.
                    </h3>

                    <div class="form">
                    
                        <form role="form" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>

                            <fieldset>
                                
                                <div class="form-group">
                                    <label for="email_register">Addresse E-mail:</label>
                                    <input type="email" name="email_register" id="email-register" class="form-control input-lg "  placeholder="Addresse E-mail">
                                    
                                        <span class="invalid-feedback" role="alert">
                                            
                                        </span>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="password_register">Mot de passe:</label>
                                    <input type="password" name="password_register" id="password-register" class="form-control <?php if ($errors->has('password_register')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_register'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> input-lg" placeholder="Mot de passe" required autocomplete="new-password">
                                    
                                        <span class="invalid-feedback" role="alert">
                                            
                                        </span>
                                    
                                </div>
                                    <div class="form-group">
                                    <label for="password_confirmation">Confirmer votre mot de Passe:</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirmer votre mot de passe" required autocomplete="new-password">
                                    
                                        <span class="invalid-feedback" role="alert">
                                            
                                        </span>
                                    
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" style="margin-top: 2px; margin-bottom:12px;">
                                        <input type="checkbox" class="form-check-input" required>
                                        En cliquant sur Inscrivez-vous, vous acceptez <a href="#" style="font-size: 15px; padding: 0;"><u>notre politique et nos conditions</u></a>.
                                    </label>
                                    </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button">
                                        Inscription
                                    </button>
                                </div>

                            </fieldset>
                        </form>

                    </div>

                </div>

                <div class="col-sm-1"></div>
                
                <!-- Login -->
                <div class="col-sm-5">
                    
                    <h3 class="font-weight-light">Vous avez déjà enregistré en ligne votre candidature au Bourse.</h3>
                    
                    <br>

                    <div class="form">

                        <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            
                            <fieldset>
                                
                                <div class="form-group">
                                    <label for="email">Addresse E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control input-lg form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Addresse E-mail" required autocomplete="email">
                                
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
                                    <label for="password">Mot de passe:</label>
                                    <input type="password" name="password" id="password" class="form-control input-lg form-control <?php if($incorrectPassword == 'true'): ?> is-invalid <?php endif; ?>" placeholder="Mot de passe" required autocomplete="current-password">

                                    <?php if($incorrectPassword == 'true'): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(__('lang.motdepasse')); ?></strong>
                                        </span>
                                    <?php endif; ?>

                                </div>

                                <div class="form-group">
                                    <a class="btn btn-link" href="#">Mot de passe oublié?</a>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary button">
                                        Connexion
                                    </button>
                                </div>
                                        
                            </fieldset>
                            
                        </form>	
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amine/Developer/Bourse/resources/views/candidature.blade.php ENDPATH**/ ?>