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
                    <li class="nav-item active menu">
                        <a class="nav-link menu" href="{{ url('/') }}">Acceuil</a>
                    </li>

                    <!-- Bourses - default inactive -->
                    <li class="nav-item menu">
                        <a class="nav-link menu" href="">Bourses</a>
                    </li>

                    <!-- Candidature - default inactive -->
                    <li class="nav-item menu">
                        <a class="nav-link menu" href="">Candidature</a>
                    </li>

                    <!-- Candidature - default disabled -->
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Résultats</a>
                    </li>

                </ul>

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



<!--

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-transparent-70 navbar-position-bottom w-100 pb-0">
            <div class="text-rtl container container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse pb-0" id="navbarMain">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Index.aspx" title="استقبال"><i class="fa fa-home fa-2x"></i> <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDemande" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> استمارة الإحصاء </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownDemande">
                                
                                <a class="dropdown-item" id="Fin_Operation_Depot1" href="#">ملء استمارة الإحصاء</a>
                                <a class="dropdown-item" href="Suivi_Demandes_Ar.aspx">تتبع ملف التجنيد</a>
                                <a class="dropdown-item" href="demande-dispense.aspx">طلب الإعفاء</a>                          
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                معلومات هامة
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownInfo">
                                <a class="dropdown-item" href="guide-recense.aspx">دليل المدعو للخدمة العسكرية</a>
                                <a class="dropdown-item" href="avantages-scociales.aspx">امتيازات لفائدة المجند</a>
                                <a class="dropdown-item" href="service-militaire-spontane.aspx">التطوع لأداء الخدمة العسكرية</a>                                
                                <a class="dropdown-item" href="agenda.aspx">المذكرة</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="programme-formation.aspx">البرنامج والتكوين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Faq.aspx">أسئلة وأجوبة</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDocs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                توثيق
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownDocs">
                                <a class="dropdown-item" href="formulaires.aspx">استمارات</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Textes-lois.aspx">نصوص قانونية</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCom" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                فضاء التواصل
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownCom">
                                <a class="dropdown-item" href="Temoignages.aspx">شهادات</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="mediatheque.aspx">صوت وصورة</a>
                            </div>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </nav>











        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="templatesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Templates
            </a>
            <div class="dropdown-menu dropdown-templates border-0 shadow animate slideIn" aria-labelledby="templatesDropdown">
                <div class="d-lg-flex flex-row">
                    <div class="dropdown-themes-callout d-none d-lg-flex p-5 text-center text-white align-items-center">
                        <div>
                        <h5>Bootstrap Templates</h5>
            <p>Unstyled layouts to help you get started on a project</p>
            <a href="/templates/" class="btn btn-template btn-xl">Browse All Templates <i class="fas fa-angle-right"></i></a>
            </div>
            </div>
            <div class="py-lg-3">
            <a class="dropdown-item font-weight-bold" href="/templates/"><i class="far fa-pencil-ruler fa-fw"></i> Browse All Templates</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Template Categories:</h6>
            <a class="dropdown-item" href="/templates/admin-dashboard/">Admin &amp; Dashboard</a>
            <a class="dropdown-item" href="/templates/landing-pages/">Landing Pages &amp; Headers</a>
            <a class="dropdown-item" href="/templates/general/">General Page Layouts</a>
            <a class="dropdown-item" href="/templates/navigation/">Navigation Layouts</a>
            <a class="dropdown-item" href="/templates/ecommerce/">Ecommerce</a>
            <a class="dropdown-item" href="/templates/blog/">Blog</a>
            </div>
            </div>
            </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Learn
        </a>
        <div class="dropdown-menu border-0 shadow animate slideIn" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/guides/">Guides &amp; Tutorials</a>
        <span class="d-block" tabindex="0" data-toggle="tooltip" data-placement="left" title="" data-container=".sb-navbar" data-original-title="Under Development!">
        <a class="dropdown-item disabled" href="#">Courses <span class="ml-2 badge badge-pill badge-secondary d-lg-none">Under Development!</span></a>
        </span>
        <div class="dropdown-divider"></div>
        <span class="d-block" tabindex="0" data-toggle="tooltip" data-placement="left" title="" data-container=".sb-navbar" data-original-title="Under Development!">
        <a class="dropdown-item disabled" href="#">Books <span class="ml-2 badge badge-pill badge-secondary d-lg-none">Under Development!</span></a>
        </span>
        </div>
        </li>

<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="themesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Themes</a>
                <div class="dropdown-menu dropdown-themes border-0 shadow animate slideIn" aria-labelledby="themesDropdown">
                <div class="d-lg-flex flex-row">
                <div class="dropdown-themes-callout d-none d-lg-flex p-5 text-center text-white align-items-center">
                <div>
                    <h5>Bootstrap Themes</h5>
                <p>Fully designed websites ready to modify and publish</p>
                <a href="/themes/" class="btn btn-theme btn-xl">Browse All Themes <i class="fas fa-angle-right"></i></a>
                </div>
                </div>
                <div class="py-lg-3">
                <a class="dropdown-item font-weight-bold" href="/themes/"><i class="far fa-paint-brush-alt fa-fw"></i> Browse All Themes</a>
                <a class="dropdown-item font-weight-bold" href="/buy-bootstrap-themes/"><i class="far fa-tags fa-fw"></i> Buy Bootstrap Themes</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Theme Categories:</h6>
                <a class="dropdown-item" href="/themes/admin-dashboard/">Admin &amp; Dashboard</a>
                <a class="dropdown-item" href="/themes/landing-pages/">Landing Pages</a>
                <a class="dropdown-item" href="/themes/business-corporate/">Business &amp; Corporate</a>
                <a class="dropdown-item" href="/themes/portfolio-resume/">Portfolio &amp; Resume</a>
                <a class="dropdown-item" href="/themes/blog/">Blog</a>
                </div>
                </div>
                </div>
            </li>

<header>

    <div class="container">

        




        <nav class="navbar navbar-expand-lg navbar-light bg-white mobile">
        </nav>

    </div>

    
    
</header>

<div class="col-lg-2">
                    <a class="nav-link logo" href="#"><img src="assets/images/Logo.png" class="img-fluid"> <span class="sr-only">(current)</span></a>
                </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	
    <div class="container">

    <div class="container">
    <a class="navbar-brand" href="#">
          <img src="http://placehold.it/150x50?text=Logo" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
    
    </div>

</nav>

 <nav class="navbar navbar-expand-lg navbar-light">
            
            <div class="navbar-brand" href="#">
                <div class="logo">
                
                    <div class="header-logo">
                        <a class="navbar-brand" href="url"> 
                            
                        </a>
                    </div>
                    
                    

                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil 
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Programmes de Bourses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Candidature</a>
                    </li>
                    
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> 
                    
                </ul>
            </div>
        </nav> -->