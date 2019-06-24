@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
           <section class="candidature-section" style="margin-top: 50px">
               <div class="container">
                 <div class="row justify-content-center" style="">
                     <div class="col-md-12">
                        <div class="content">
                            <div class="row justify-content-center" style="margin-top: 24px;">
                                <div class="col-md-10">
                                    <div class="formulaire-perso"  style="height:100%;border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   
                                      <!-- ------------------------------php------------------------------------------------ -->
                                      <?php $prog=App\Programme::where('id','=',$_GET["id_prog"])->first();
                                        $cycle=DB::select("select * from cycles where id in(select id_cycle from programme_cycles where id_programme in(select id from programmes where id=".$_GET["id_prog"]."))");
                                        
                                        $discs=DB::select("select * from disciplines where id_programme in(select id from programmes) and id_programme=".$_GET["id_prog"]   ."");


                                      ?>


                                      <!-- ------------------------------Contenu------------------------------------------------ -->
                                     
                                            <div>
                                                <h3 style="font-weight: bold;text-align:center;font-size: 25px; margin: 8px 0 24px 0;" 
                                                class="justify-content-center">Programme de Bourse : {{$prog->intitule_programme_fr}}
                                                </h3>
                                            </div>
                                            <hr style="margin-bottom:30px;"/>

                                                <form action="" method="Get">
                                                    <div class="justify-content-center">
                                                        <label for="programme">Programme :  "{{$prog->intitule_programme_fr}}"</label><br>
                                                       
                                                       <div class="panel panel-info">
                                                           <div class="panel-heading">Présentation du programme</div>
                                                           <div class="panel-body">
                                                               <blockquote style="font-size:13px;padding:0.7cm;text-align:justify;">
                                                               @foreach ($cycle as $cl)
                                                               Dans le cadre de la coopération culturelle et scientifique <strong>{{$prog->intitule_programme_fr}}</strong>, le Ministère d’Education Nationale, de la Formation Professionnelle, de l’Enseignement Supérieur et de la Recherche Scientifique – Département de l’Enseignement Supérieur et Recherche Scientifique – met à la disposition des étudiants marocains <strong>({{$prog->nbre_bourse}})</strong> bourses d’études de <strong>{{$cl->intitule_cycle_fr}}</strong> au titre de l’année universitaire <strong>{{$prog->annee_universitaire}}</strong>
                                                               @endforeach
                                                               </blockquote>
                                                               </div>
                                                            </div>
                                                        


                                                        <div class="panel panel-info">
                                                           <div class="panel-heading">Disciplines et Conditions</div>
                                                               <div class="panel-body">
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
                                                                              <tr>
                                                                                  <td>{{$disc->intitule_discipline_fr}}</td>
                                                                                  <td>{{$disc->nbre_place}}</td>
                                                                                  <!-- <td></td>
                                                                                  <td></td> -->
                                                                              </tr>
                                                                              @endforeach
                                                                          <tbody>
                                                                  </table>


                                                               </blockquote>
                                                            </div>
                                                        </div>
                                                        


                                                        <div class="panel panel-info">
                                                           <div class="panel-heading">Procédure de candidature</div>
                                                           <div class="panel-body">
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
                                                        

                                                        <div class="panel panel-info">
                                                           <div class="panel-heading">Traitement des candidatures</div>
                                                               <div class="panel-body">
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


                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </section>
 @endsection
