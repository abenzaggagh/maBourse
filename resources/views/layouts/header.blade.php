<header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light sb-navbar fixed-top header">
        <div class="container">
            
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ url('/img/logo-header.png') }}" alt="logo" style="width: 500px; height: 90px;">
                <span class="ml-1"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        
            <!-- Buttons -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav mr-auto pt-3 pt-lg-0">

                    <!-- Acceuil - default active -->
                    <li class="nav-item active menu" id="acceuil">
                        <a class="nav-link menu" href="{{ url('/') }}">Acceuil</a>
                    </li>

                    <!-- Bourses - default inactive -->
                    <li class="nav-item menu" id="bourse">
                        <a class="nav-link menu" href="">Bourses</a>
                    </li>

                    <!-- Candidature - default inactive -->
                    <li class="nav-item menu" id="candidature">
                        <a class="nav-link menu" href="{{ url('candidature') }}" onclick="candidatureHeader()">Candidature</a>
                    </li>

                    <!-- Candidature - default disabled -->
                    <li class="nav-item" id="resultats">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Résultats ----- ">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Résultats</a>
                        </span>
                    </li>

                </ul>

                <!-- Languages -->
                <ul class="navbar-nav pb-3 pb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Langue
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownInfo">
                            <a class="dropdown-item" href="">Français</a>
                            <a class="dropdown-item" href="">العربية</a>
                        </div>
                    </li>
                </ul>

            </div>
        
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sb-navbar mobile">
        
    </nav>

</header>


