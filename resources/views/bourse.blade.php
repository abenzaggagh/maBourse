@extends('layouts.app')
<style>
.style_head{
    width:100%;
    height:50px;
    display:block;
    float:right;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 0%;
    transform: translate(0%,-0%);
    padding: 15px;
    margin-top:0cm;
    text-align:center;
}

.style_body{
    width:41%;
    height:140px;
    display:inline-block;
    float:left;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    transform: translate(3%,-50%);
    box-sizing: border-box;
    padding-top:0px;
    margin:1%;
}


.style_body:hover{
    background: #ccc;
    color: #000;
    border:2px solid rgba(0, 0, 0, 0.5);
}

</style>
@section('content')

<section class="candidature-section" style="margin-top:40px;">
    
    <div class="container">

        <div class="row justify-content-center" style="height:100%;">
            
            <div class="col-md-12">

            <div class="content">
                            <div class="row justify-content-center" style="margin-top: 24px;height:100%;">
                                <div class="col-md-11">
                
                                    <div class="formulaire-perso"  style="height:100%;border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                            <div>
                                             <h3 style="font-weight: bold;text-align:center;font-size: 25px; margin: 8px 0 24px 0;" 
                                             class="justify-content-center text-info">Les programmes en cours
                                             </h3>
                                            </div>
                                            <hr style="margin-bottom:30px;"/>

                                            <div style="padding:2cm;">
                                                <form action="" method="GET">

                                                    <div class="justify-content-center">
                                                        <?php                                                     
                                                        $progs=App\Programme::where('date_fin','>=',now())->get();       
                                                        foreach($progs as $prog){?>
                                                        <div align="center">     
                                                          <div class="style_body" style="margin-right: 63;">
                                                            <div class="style_head">
                                                            {{$prog->titre}}: {{$prog->cycle}}
                                                            </div>
                                                                <div style="cursor:pointer" onClick="location='/detail_programme?prog_id={{$prog->programme_id}}&cycle_id={{$prog->cycle}}'"> 
                                                                    <div>
                                                                        <div>
                                                                        Dépot de dossier : 
                                                                        <br>
                                                                        de {{date('d-m-Y', strtotime($prog->date_deb_prog))}} vers {{date('d-m-Y', strtotime($prog->date_fin_prog))}}                                                        
                                                                        </div>
                                                                    </div>                   
                                                                </div>
                                                            </div>
                                                            </div>
                                                          
                                                    <?php }?>
                                                  </div>
                                               </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
                                                     
</section>

@endsection
