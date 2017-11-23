<h2 id="titre">Bienvenue</h2>
<?php
$info = new InfoClientdb($cnx);
$texte = $info->getInfoClient("accueil");
//var_dump($texte);

?>

<div class="row">
    <div class="col-sm-8">
        <div id="gt_carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./admin/images/gt_dia1.jpg" alt="dial">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./admin/images/gt_birthday.jpg" alt="anniversaire">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./admin/images/gt_etalage.jpg" alt="etalage">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./admin/images/gt_tasse_cake.jpg" alt="tasse cake">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./admin/images/gt_tea_time.jpg" alt="tea time">
                </div>
            </div>
            <a class="carousel-control-prev" href="#gt_carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#gt_carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <?php
        print $texte[0]->TEXTE;
        ?>
    </div>
</div>