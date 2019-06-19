@extends('layouts.app')

@section('content')

<div class="wrapper">
    <div class="container">
        
        <h1>Candidature</h1>
        
        <div class="row">

            <div class="col-sm-6">
                <h3>Lorem ipsum dolor sit amet, vim eu sint solum, cu sea alii senserit, meis inermis mei ne. Laudem prompta qui ut, soleat molestie percipit vis ne, cu pro inani sonet. Ut vis docendi placerat, ut rebum tacimates mel.</h3>
                <h2>Nouveau Candidat</h2>
                <div class="form">
                
                    <form role="form" method="post" action="">
                        <fieldset>							
                            
                        <!-- <p class="text-uppercase pull-center"> SIGN UP.</p>	 -->
                            
                            <div class="form-group">
                                <label for="email">Addresse Email:</label>
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de Passe:</label>
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de Passe">
                            </div>
                                <div class="form-group">
                                <label for="password">Confirmer Mot de Passe:</label>
                                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Confirmer Mot de Passe">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" style="margin-top: 2px; margin-bottom:12px;">
                                    <input type="checkbox" class="form-check-input">
                                    En cliquant sur Inscrivez-vous, vous acceptez notre politique et nos conditions
                                </label>
                                </div>
                            <div>
                                <input type="submit" class="btn btn-lg btn-primary button" value="Inscription">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-sm-1"></div>
            
            <div class="col-sm-5">
                
                
            <h3 class="font-weight-light">Lorem ipsum dolor sit amet, vim eu sint solum, cu sea alii senserit, meis inermis mei ne.</h3>
                <h2>Nouveau Candidat</h2>
                <div class="form">

                    <form role="form">
                        <fieldset>							
                            <!-- <p class="text-uppercase"> Lorem ipsum dolor sit amet, vim eu sint solum: </p>	 -->
                                
                            <div class="form-group">
                                <label for="email">Addresse Email:</label>
                                <input type="email" name="username" id="username" class="form-control input-lg" placeholder="Addresse Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de Passe:</label>
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de Passe">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-lg btn-primary button" value="Connexion">
                            </div>
                                    
                        </fieldset>
                    </form>	
                </div>
            </div>

        </div>
        
    </div>
</div>


@endsection