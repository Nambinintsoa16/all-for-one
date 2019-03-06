<?php
include_once('fonction/class/main.php');
$main=new main();
$dt=new dateTime();
$date=$dt->format("Y-m-d");
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
             
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="?page=">Accueil</a></li>
                    <li><i class="fa fa-cube"></i><a href="#">Menu Livraison</a></li>
                </ol>
            </div>
        </div>
        <div class="row banniere_livraison">
            <div class="col-md-12">
                <img src="../img/livraison910.jpg" alt="" height="400" width="100%"
                    class="bann_image">
            </div>

        </div>
        <div class="row menulivraison" >
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=LivraisonEffectuée">

                    <div class="bloc_menu">
                        <div class="icon_block">
                             <i class="fa fa-truck"></i>
                        </div>
                       
                        <div class="block_nombre">
                            <?php
                                $sql="SELECT `NumFact` FROM `facture` WHERE `datelivre`='".$date."'";
                                $resultfact=$main->fetchAll($sql);
                                if($resultfact){
                                foreach ($resultfact as $resultfact){
                                  $factdouble[]=$resultfact['NumFact'];
                                }
                                $facture=array_unique($factdouble);
                                $nbfacture=count($facture);
                                echo $nbfacture;
                                }else{
                                  $nbfacture=0;
                                  echo $nbfacture;
                                }
                            ?>
                        </div>
                        <div class="block_titre"> Livraison effectuée </div>
                        <div class="plus_info">
                           Plus d'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=LivraisonConfirmée">
                    <div class="bloc_menu1">
                        <div class="icon_block1">
                           <i class="fa fa-truck"></i> 
                        </div>
                        
                        <div class="block_nombre1">
                            <?php
                                  $sql="SELECT * FROM `produit` ";
                                  $count=$main->test($sql);
                                  echo $count;
                            ?>
                        </div>
                        <div class="block_titre1">Livraison confirmée</div>
                        <div class="plus_info1">
                          Plus  d'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <a>

            </div>


            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=LivraisonReporter">
                    <div class="bloc_menu2">
                        <div class="icon_block2">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="block_nombre2">
                            <?PHP
                              $sql="SELECT `id` FROM `client`";
                              $countClient=$main->test($sql);
                              echo  $countClient;
                           ?>
                        </div>

                        <div class="block_titre2">Livraison raportée</div>
                        <div class="plus_info2">
                            Plusd'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <a>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=LivraisonAnnulle">
                    <div class="bloc_menu3">
                        <div class="icon_block3">
                            <i class="fa fa-truck"></i> 
                        </div>
                        <div class="block_nombre3">
                            <?php
                           $sql="SELECT `NumFact` FROM `facture` WHERE `datelivre`='".$date."'";
                           $resultfact=$main->fetchAll($sql);
                           if($resultfact){
                           foreach ($resultfact as $resultfact){
                            $factdouble[]=$resultfact['NumFact'];
                           }
                           $facture=array_unique($factdouble);
                           $nbfacture=count($facture);
                           echo $nbfacture;
                          }else{
                            $nbfacture=0;
                            echo $nbfacture;
                          }
                           ?>
                        </div>
                        <div class="block_titre3"> livraison annulée</div>
                        <div class="plus_info3">
                            Plusd'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>

                    </div>
            </div>

             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=confirmationdelivraisons">
                    <div class="bloc_menu5">
                        <div class="icon_block5">
                            <i class="fa fa-truck"></i> 
                        </div>
                        <div class="block_nombre5">
                            <?php
                           $sql="SELECT `NumFact` FROM `facture` WHERE `datelivre`='".$date."'";
                           $resultfact=$main->fetchAll($sql);
                           if($resultfact){
                           foreach ($resultfact as $resultfact){
                            $factdouble[]=$resultfact['NumFact'];
                           }
                           $facture=array_unique($factdouble);
                           $nbfacture=count($facture);
                           echo $nbfacture;
                          }else{
                            $nbfacture=0;
                            echo $nbfacture;
                          }
                           ?>
                        </div>
                        <div class="block_titre5">Livraison à confirmer</div>
                        <div class="plus_info5">
                            Plusd'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>

                    </div>
            </div>

             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a href="?page=Livresondujour">
                    <div class="bloc_menu4">
                        <div class="icon_block4">
                            <i class="fa fa-calendar"></i> 
                        </div>
                        <div class="block_nombre4">
                            <?php
                           $sql="SELECT `NumFact` FROM `facture` WHERE `datelivre`='".$date."'";
                           $resultfact=$main->fetchAll($sql);
                           if($resultfact){
                           foreach ($resultfact as $resultfact){
                            $factdouble[]=$resultfact['NumFact'];
                           }
                           $facture=array_unique($factdouble);
                           $nbfacture=count($facture);
                           echo $nbfacture;
                          }else{
                            $nbfacture=0;
                            echo $nbfacture;
                          }
                           ?>
                        </div>
                        <div class="block_titre4">Calendrier de livraison</div>
                        <div class="plus_info4">
                            Plusd'info &nbsp; <i class="fa fa-arrow-circle-right"></i>
                        </div>

                    </div>
            </div>

            

            </a>
        </div>
        </div>
       
        