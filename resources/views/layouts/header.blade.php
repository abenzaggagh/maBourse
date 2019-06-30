<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sb-navbar fixed-top header">
        <div class="row line">   
            <div class="logo">
                <a class="navbar-brand" href="/">
                    <img src="{{ url('/img/logo-header.png') }}" alt="logo" class="logo-img">
                    <span class="ml-1"></span>
                </a>
            </div> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto pt-3 pt-lg-0">
                    <li class="nav-item @if (request()->is('/')) active @endif menu" id="acceuil">
                        <a class="nav-link @if (request()->is('/')) active @endif menu" href="{{ url('/') }}">{{ __('lang.accueil') }}</a>
                    </li>
                    <li class="nav-item @if (request()->is('/bourse')) active @endif menu" id="bourse">
                        <a class="nav-link menu @if (request()->is('/bourse')) active @endif" href="">{{ __('lang.bourses') }}</a>
                    </li>
                    <li class="nav-item menu @if (request()->is('/candidature')) active @endif"  id="candidature">
                        <a class="nav-link @if (request()->is('/candidature')) active @endif menu" href="{{ url('candidature') }}">{{ __('lang.candidature') }}</a>
                    </li>
                    <li class="nav-item" id="resultats">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Résultats">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ __('lang.resultats') }}</a>
                        </span>
                    </li>
                </ul>

                <div class="lang">
                    <ul class="navbar-nav pb-3 pb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('lang.langue') }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownInfo">
                                <a class="dropdown-item" href="{{ url('/lang/en') }}">English</a>
                                <a class="dropdown-item" href="{{ url('/lang/fr') }}">Français</a>
                                <a class="dropdown-item" href="{{ url('/lang/ar') }}">العربية</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        
        </div>
    </nav>
</header>

{{-- @if(session()->exists('email'))
    
    <div class="w-100 font-weight-light bg-muted validatemail py-2 px-3 d-flex align-items-center justify-content-between" style="background: #cc3341; font-size: 14px;">
        <div>
            <span class="small mr-2 font-weight-light">Veuillez confirmer votre e-mail</span>
            <span class="badge badge-pill badge-info px-3 py-2 font-weight-light">{{ $email }}</span>
        </div>
        <div>
            <span class="badge badge-pill badge-dark font-weight-light px-3 py-2 sendit">Renvoyer e-mail<font class="d-md-inline d-none"> de confirmation</font></span>
        </div>
    </div>

@endif --}}
