<header class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	
    <div class="container">
        
        <!--        Hamburger -             -->
        <div id="hamburger">
            
        </div>
        
        <!--        Logo -                  -->
        <div class="logo">

            <!--        Logo - Image        -->
            <a class="navbar-brand" href="{{ url('/') }}"> 
                <img class="logo-image" src="{{ url('img/logo-header.png') }}">
                <span></span>
            </a>

            <!--        Logo - Text         -->
            <div class="logo-text">
                Royaume du Maroc
                <br> Ministère de l'Education Nationale, de la Formation Professionnelle,
                <br> de l'Enseignement Supérieur et de la Recherche Scientifique
            </div>

        </div>
  
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            
            <ul class="navbar-nav">
    
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ url('/') }}">ACCUEIL</a>
                </li>
                    <li class="nav-item"> 
                    <a class="nav-link" href="se_renseigner">BOURSE DE COOPÉRATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="candidater">CANDIDATER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendrier">CALENDRIER</a>
                </li> 
            
            </ul>

        </div>
    
        <div class="languages">
            <div class="language">
                <a href="#">Français</a>
            </div>
            <div class="language">
                <a href="#">العربية</a> 
            </div>
        </div>

    </div>

</header>


