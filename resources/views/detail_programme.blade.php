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
    /* font-weight:bold; */
}

.style_body{
    width:90%;
    height:auto;
    display:inline-block;
    float:left;
    background: #fff;
    color: #000;
    top: 50%;
    left: 50%;
    transform: translate(3%,-50%);
    box-sizing: border-box;
    padding-top:0px;
    margin:1%;
}



</style>
@section('content')
    <section class="candidature-section" style="margin-top: 50px" style="height:100%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="height:100%;">
                <div class="content">
                    <div class="row justify-content-center" style="margin-top: 24px;">
                        <div class="col-md-10" style="height:100%;">
                            <div class="formulaire-perso"  style="height:100%;border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   
                                <!-- ------------------------------php------------------------------------------------ -->
                                <?php $prog=App\Programme::where('programme_id','=',$_GET["prog_id"])->first();
                                      $discs=DB::select("select * from disciplines where programme_id=".$prog->programme_id."");
                            
                                ?>
                                <!-- ------------------------------Contenu------------------------------------------------ -->
                                
                                    <div>
                                        <h3 style="font-weight: bold;text-align:center;font-size: 25px; margin: 8px 0 24px 0;" 
                                        class="justify-content-center">Programme de Bourse : {{$prog->titre}}
                                        </h3>
                                    </div>
                                    <hr style="margin-bottom:30px;"/>
                                
                                    <div class="justify-content-center" style="padding-top:1cm;text-align:center;margin-left:0px;height:100%;">
                                    <center>
                                        <!-- ------------------------Présentation du programme-------------------------------- -->
                                        <div class="style_body" style="margin-top:2cm;">
                                            <div class="style_head">
                                                <u> Présentation du programme:</u>
                                            </div>
                                                <div>
                                                    <blockquote style="font-size:13px;padding:0.7cm;text-align:justify;">
                                                    Dans le cadre de la coopération culturelle et scientifique <strong>{{$prog->titre}}</strong>, le Ministère d’Education Nationale, de la Formation Professionnelle, de l’Enseignement Supérieur et de la Recherche Scientifique – Département de l’Enseignement Supérieur et Recherche Scientifique – met à la disposition des étudiants marocains <strong>({{$prog->places_total}})</strong> bourses d’études de <strong>{{$prog->cycle}}</strong> au titre de l’année universitaire <strong>{{$prog->annee_universitaire}}</strong>
                                                    </blockquote>
                                                    </div>
                                                </div>

                                        <!-- ------------------------------end-------------------------- -->
                                        </center>

                                        <center>
                                        <!-- ------------------------Disciplines et Conditions-------------------------------- -->
                                        <div class="style_body" style="margin-top:2cm;">
                                            <div class="style_head">
                                                <u> Disciplines et Conditions : </u>
                                            </div>
                                                <div>
                                                    <blockquote style="font-size:13px;padding:0.7cm;text-align:justify;">
                                                    <table class="table">
                                                                     
                                                                      <thead>
                                                                      <tr>
                                                                              <th>Discipline</th>
                                                                              <th>Nombre de Place</th>
                                                                              <th>Type de Bac Autorisé</th>
                                                                              <th>Seuil d'admission</th>
                                                                      </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                      @foreach($discs as $disc)
                                                                             <?php  $bacs=DB::select("select tb.type,db.seuil_moyenne_general 
                                                                              from disciplines d, discipline_bac db,type_bacalaureats tb 
                                                                              where d.discipline_id=db.discipline_id and db.type_bacalaureat_id=tb.type_bacalaureat_id and d.discipline_id=".$disc->discipline_id."");?>
                                                                          <tr>
                                                                              <td>{{$disc->titre}}</td>
                                                                              <td>{{$disc->nombre_places}}</td>
                                                                              <td>
                                                                                    <u style="text-decoration:none;">
                                                                                        @foreach($bacs as $bac)
                                                                                    <li style="list-style:none;">
                                                                                        {{$bac->type}}
                                                                                    </li> 
                                                                                          @endforeach
                                                                                    </u>
                                                                              </td>
                                                                              <td>
                                                                              <u style="text-decoration:none;">
                                                                                       @foreach($bacs as $bac)
                                                                                    <li style="list-style:none;">
                                                                                        {{$bac->seuil_moyenne_general}}
                                                                                    </li> 
                                                                                    @endforeach
                                                                                    </u>
                                                                              </td>
                                                                          </tr>
                                                                        @endforeach  
                                                                      <tbody>
                                                              </table>
                                                    </blockquote>
                                                    </div>
                                                </div>

                                        <!-- ------------------------------end-------------------------- -->
                                        </center>

                                        <center>
                                        <!-- ------------------------------Procédure de candidature-------------------------- -->

                                        <div class="style_body" style="margin-top:0cm;">
                                            <div class="style_head">
                                                <u> Procédure de candidature:</u>
                                            </div>
                                                <div>
                                                    <blockquote style="font-size:13px;padding:0.7cm;text-align:justify;">
                                                    <ol type="a" style="font-weight:bold;">
                                                        <li> Candidature en ligne : Les candidats intéressés par le présent programme de bourses doivent
                                                                soumettre leurs demandes de candidatures, en ligne, sur le site Internet :
                                                                <span class="text-danger"> http//:...</span>,
                                                                et ce entre le  <span class="text-danger">{{date('d-m-Y', strtotime($prog->date_deb_prog))}}</span> et le <span class="text-danger">{{date('d-m-Y',strtotime($prog->date_fin_prog))}}</span>.
                                                                </font>
                                                        </li>
                                                        <li> Pièces à joindre : Vous êtes invités à renseigner soigneusement le formulaire en ligne et y joindre les copies scannées (en format PDF claire et lisible) des documents suivants :
                                                            <ul>
                                                                <li> Copie du baccalauréat ou d’un diplôme équivalent ;</li>
                                                                <li>	Copie du relevé de notes du Baccalauréat délivré par l’Académie ;</li>
                                                                <li>	Copie de la Carte Nationale d’Identité.</li>
                                                            </ul>
                                                        </li>
                                                        <li> Choix de discipline : 
                                                        Chaque candidat a droit à choisir une (01) seule discipline.
                                                        </li>
                                                    </ol>

                                                    </blockquote>
                                                    </div>
                                                </div>

                                        <!-- ------------------------------end-------------------------- -->
                                        </center>

                                        <center>
                                        <!-- ------------------------Présentation du programme-------------------------------- -->
                                        <div class="style_body" style="margin-top:2cm;">
                                            <div class="style_head">
                                                <u> Présentation du programme:</u>
                                            </div>
                                                <div>
                                                    <blockquote style="font-size:13px;padding:0.7cm;text-align:justify;">

                                                    <ul style="font-weight:bold;">	
                                                                        <li>
                                                                            Toute candidature incomplète, ou effectuée par une autre voie que la procédure en ligne,
                                                                            ne sera pas prise en considération ;
                                                                        </li>
                                                                        <li>
                                                                            Les résultats de la commission de sélection (candidats admis en listes principales et en 
                                                                            listes d’attente), seront diffusées sur le site Internet du Ministère de l’éducation Nationale,
                                                                            de la Formation Professionnelle, de l’Enseignement Supérieur et de la Recherche Scientifique: <br>
                                                                                <a href="http://www.enssup.gov.ma/ar/bourse-de-cooperation" stype="text-decoration:none;width:100px; " target="_blank">
                                                                                http://www.enssup.gov.ma/ar/bourse-de-cooperation</a><br>
                                                                            (Aucun résultat ne sera communiqué par téléphone ou par voie postale) ;
                                                                        </li>
                                                                        <li>
                                                                            En cas d’épuisement des listes d’attente, la Direction de la Coopération et du Partenariat 
                                                                            annoncera au public les procédures de remplacement via site Internet du Ministère ;
                                                                        </li>
                                                                        <li>
                                                                            Les candidats définitivement retenus, par la Commission de sélection, doivent fournir,
                                                                            <span style="font-weight:bold;text-decoration: underline;">lors du retrait de leurs attestations de sélection</span>, les documents suivants :
                                                                        </li>
                                                                             <ul>
                                                                                <li>
                                                                                    Deux (02) copies légalisées des pièces justificatives sus-mentionnées ;
                                                                                </li>
                                                                                <li>	
                                                                                Une déclaration sur l’honneur attestant qu’ils n’ont  été retenus dans aucun établissement marocain 
                                                                                à accès régulé et qu’ils partiront poursuivre des études au Sénégal dans le cadre de la coopération.
                                                                                </li>
                                                                            </ul>
                                                                    </ul>

                                                    </blockquote>
                                                    </div>
                                                </div>

                                        <!-- ------------------------------end-------------------------- -->
                                        </center>



                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
 @endsection
