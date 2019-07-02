<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sb-navbar header">
        <div class="row line">   
            <div class="logo">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo e(url('/img/logo-header.png')); ?>" alt="logo" class="logo-img">
                    <span class="ml-1"></span>
                </a>
            </div> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto pt-3 pt-lg-0">
                    <li class="nav-item <?php if(request()->is('/')): ?> active <?php endif; ?> menu" id="acceuil">
                        <a class="nav-link <?php if(request()->is('/')): ?> active <?php endif; ?> menu" href="<?php echo e(url('/')); ?>"><?php echo e(__('lang.accueil')); ?></a>
                    </li>
                    <li class="nav-item <?php if(request()->is('/bourse')): ?> active <?php endif; ?> menu" id="bourse">
                        <a class="nav-link menu <?php if(request()->is('/bourse')): ?> active <?php endif; ?>" href=""><?php echo e(__('lang.bourses')); ?></a>
                    </li>
                    <li class="nav-item menu <?php if(request()->is('/candidature')): ?> active <?php endif; ?>"  id="candidature">
                        <a class="nav-link <?php if(request()->is('/candidature')): ?> active <?php endif; ?> menu" href="<?php echo e(url('candidature')); ?>"><?php echo e(__('lang.candidature')); ?></a>
                    </li>
                    <li class="nav-item" id="resultats">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Résultats">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo e(__('lang.resultats')); ?></a>
                        </span>
                    </li>
                </ul>

                <div class="lang">
                    <ul class="navbar-nav pb-3 pb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('lang.langue')); ?></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownInfo">
                                <a class="dropdown-item" href="<?php echo e(url('/lang/en')); ?>">English</a>
                                <a class="dropdown-item" href="<?php echo e(url('/lang/fr')); ?>">Français</a>
                                <a class="dropdown-item" href="<?php echo e(url('/lang/ar')); ?>">العربية</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        
        </div>
    </nav>
</header>


<?php /**PATH /Users/amine/Developer/Bourse/resources/views/layouts/header.blade.php ENDPATH**/ ?>