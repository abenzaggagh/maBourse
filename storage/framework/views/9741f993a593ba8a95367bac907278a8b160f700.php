<?php $__env->startSection('content'); ?>
<style>
.style{
    height:auto;
    display:row;
    margin:10px;
    border-radius: 8px;
     -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);
     -moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);
     box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);
}
</style>
<section class="candidature-section" style="margin-top: 40px">
    
    <div class="container">

        <div class="row justify-content-center" style="">
            
            <div class="col-md-12">

            <div class="content">
                            <div class="row justify-content-center" style="margin-top: 24px;">
                                <div class="col-md-10">
                
                                    <div class="formulaire-perso"  style="height:100%;border-radius: 8px; -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);">   

                                            <div>
                                             <h3 style="font-weight: bold;text-align:center;font-size: 25px; margin: 8px 0 24px 0;" 
                                             class="justify-content-center text-info">Les programmes en cours
                                             </h3>
                                                <!-- <h5 style="font-size: 18px; margin: 8px 0 24px 0;">Veuillez remplir ...</h5> -->
                                            </div>
                                            <hr style="margin-bottom:30px;"/>
                                            <!-- <label for="programme">Programme de Bourse en cours</label><br> -->

                                            <div style="padding:1cm;">
                                                <form action="" method="GET">

                                                    <div class="justify-content-center">
                                                        <?php                                                     
                                                        $progs=App\Programme::where('date_fin_prog','>=',now())->get();       
                                                        foreach($progs as $prog){?>
                                                        <div class="col-md-5">
                                                            <div class="panel panel-info style">
                                                            
                                                            <div class="panel-heading style" style="text-align:center;font-weight:bold;"> <?php echo e($prog->intitule_programme_fr); ?></div>
                                                                <div class="panel-body style" style="cursor:pointer" onClick="location='/detail_programme?id_prog=<?php echo e($prog->id); ?>'"> 
                                                                    <div class="row">
                                                                        <div class="col align-self-end">
                                                                        Dépot de dossier : 
                                                                        <br>
                                                                        de <?php echo e(date('d-m-Y', strtotime($prog->date_deb_prog))); ?> vers <?php echo e(date('d-m-Y', strtotime($prog->date_fin_prog))); ?>                                                        
                                                                        </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amine/Developer/Bourse/resources/views//bourse.blade.php ENDPATH**/ ?>