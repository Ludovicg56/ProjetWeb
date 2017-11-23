<!--on a besoin des classes Type_gateauDB et Type_gateau-->
<?php
$types = new Type_gateauDB($cnx);
$tabTypes = $types->getType_gateau();
$nbrTypes = count($tabTypes);

//traitement du formulaire de choix du type
if (isset($_GET['choix_type'])) {
    $cake = new Vue_GateauxDB($cnx);
    $liste = $cake->getVue_gateauxType($_GET['id_gt_type_gateau']);
    $nbrCakes = count($liste);
}
?>

<div class="container">
    <form action ="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="row">
            <div class="col-sm-1">
                <span class="txtGras">Thème </span>
            </div>
            <div class="col-sm-3">
                <select name="id_gt_type_gateau" id="id_gt_type_gateau">
                    <option value=""></option>
                    <?php
                    for ($i = 0; $i < $nbrTypes; $i++) {
                        ?>
                        <option value="<?php print $tabTypes[$i]->ID_GT_TYPE_GATEAU; ?>"><?php print $tabTypes[$i]->TYPE_GATEAU; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <input class="btn-primary" type="submit" name="choix_type" value="Choisir"/>
            </div>
        </div>
    </form>
</div>

</br>


<div class="container">
    <?php
    if (isset($liste)) {   //si on a séléctionné qqc dans la liste
        if ($nbrCakes > 0) {   // si il existe qqc dans la bd en rapport avec ce que l'on a choisi dans la liste
            ?>
            <div class="row">
                <div class="col-sm-12 txtGras txt180">
                    <?php
                    print $liste[0]['TYPE_GATEAU'];
                    ?>
                </div>                             
            </div>
            <?php
            for ($i = 0; $i < $nbrCakes; $i++) {
                ?>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="admin/images/<?php print $liste[$i]['IMAGE'] ?>" alt="ERREUR IMAGE" />
                    </div>
                    <div class="col-sm-4 text-center">                        
                        <br/>
                        <div class="row">
                            <div class="col-sm-12 text-danger txtRouge">
                                <span class="txt150">
                                    <?php
                                    print $liste[$i]['NOM_GATEAU'];
                                    ?>
                                </span>
                            </div>                             
                        </div>
                        <div class="row">
                            <div class="col-sm-12 txtGras">
                                <br/>
                                <?php
                                    print $liste[$i]['PRIX_UNITAIRE'];
                                ?>
                            </div>                             
                        </div>
                        <div class="row">
                            <div class="col-sm-12 txtGras">
                                <br/>
                                <a href="index.php?page=commander$id=<?php print $liste[$i]['ID_GT_GATEAU'] ?>"/>
                                Commander
                                <br/>
                            </div>                             
                        </div>
                    </div>
                    <?php
                }     //  fin du for ($i=0;$i<nbrCakes;i++)
                ?>
            </div>        
            <div class="col-sm-12">Aucun gâteau ne correspond à votre choix.</div>
            (9)
            <?php
        } //fin if nbrCakes >0
    } //fin if(isset($liste))
    ?>
</div>
