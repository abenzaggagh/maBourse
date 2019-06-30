@extends('layouts.app')

@section('content')
<section id="home" class="home">
    <div class="">

        <!-- Intro Section -->
        <section class="intro-section">
            <div class="container">
            
            

            </div>

        </section>

        <section class="intro2-section">
                <div class="container">
                
                
        
                </div>
        
            </section>

        <!-- Cards Section -->
        <section class="card-section">
            <!-- Cards -->
            <div class="container">
                <!-- Row -->
                <div class="row mt-lg-1 mb-lg-1 card-light">
                    <!-- Bourse -->
                    <div class="col-lg-4">
                        <div class="card mb-4 radius-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="#" class="btn btn-md btn-red rounded-circle" title="">
                                        <img class="img-fluid card-icon" src="{{ url('/img/card-icon-bourse.png') }}" alt="">
                                    </a>
                                    <h5 class="card-title text-center title-bold font-familiy-arab-univers">Bourse en Cours</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, 
                                        consectetur adipiscing elit.
                                        Vestibulum fringilla facilisis mattis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Candidater -->
                    <div class="col-lg-4">
                        <div class="card mb-4 radius-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="{{ url('/candidature') }}" class="btn btn-md btn-red rounded-circle" title="Candidature en Ligne">
                                        <img class="img-fluid card-icon" src="{{ url('/img/card-icon-candidature.png') }}" alt="Candidature en Ligne"></a>
                                    <h5 class="card-title text-center title-bold font-familiy-arab-univers">Candidature en Ligne</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, 
                                        consectetur adipiscing elit.
                                        Vestibulum fringilla facilisis mattis.
                                    </p>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                    <!-- Informations -->
                    <div class="col-lg-4">
                        <div class="card mb-4 radius-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="#" class="btn btn-md btn-red rounded-circle" title="Informations Importantes">
                                        <img class="img-fluid card-icon" src="{{ url('/img/card-icon-information.png') }}" alt="Informations Importantes"></a>
                                    <h5 class="card-title text-center title-bold font-familiy-arab-univers">Informations Importantes</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, 
                                        consectetur adipiscing elit.
                                        Vestibulum fringilla facilisis mattis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
        </section> 
        
    </div>
</section>
@endsection



            
            

    