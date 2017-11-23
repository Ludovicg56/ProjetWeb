<div class="container">
        <div class="row">
            <div class="col-sm-4 erreur">
                TRAITEMENT D'ERREUR
            </div>
        </div>
        <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_commande">

            <div class="row">
                <div class="col-sm-2"><label for="email1">Email</label></div>
                <div class="col-sm-4">
                    <input type="email" id="email1" name="email1" placeholder="aaa@aaa.aa"/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"><label for="email2">Confirmez votre email</label></div>
                <div class="col-sm-4">
                    <input type="email" id="email2" name="email2" placeholder="aaa@aaa.aa"/>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-2"><label for="nom">Nom</label></div>
                <div class="col-sm-4">
                    <input type="text" name="nom" id="nom" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><label for="prenom">Prénom</label></div>
                <div class="col-sm-4">
                    <input type="text" name="prenom" id="prenom" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><label for="telephone">Téléphone</label></div>
                <div class="col-sm-4">
                    <input type="text" name="telephone" id="telephone" placeholder="xxx/xx.xx.xx"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><label for="adresse">Adresse</label></div>
                <div class="col-sm-4">
                    <input type="text" name="adresse" id="adresse" />
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-2"><label for="numero">Numéro</label></div>
                <div class="col-sm-4">
                    <input type="text" name="numero" id="numero" />
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-2"><label for="codepostal">Code postal</label></div>
                <div class="col-sm-4">
                    <input type="text" name="codepostal" id="codepostal" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><label for="localite">Localité</label></div>
                <div class="col-sm-4">
                    <input type="text" name="localite" id="localite" />
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-4">
                    <input type="submit" name="commander" id="commander" value="Finaliser ma commande" class="pull-right"/>&nbsp;           
                    <input type="reset" id="reset" value="Annuler" class="pull-left"/>
                </div>
            </div>
        </form>
    </div>
