<?php
if (isset($_POST['submit_login'])) {
    $log = new AdminDB($cnx);
    $admin = $log->isAdmin($_POST['login'], $_POST['password']);
    if (is_null($admin)) {
        $message = "<br/>Donn&eacute;es incorrectes";
    } else {
        $_SESSION['admin'] = 1;
        $_message = "authentifié !";
        ?>
        <meta http-equiv = "refresh": content = "0;url=index.php?page=accueil_admin.php">
        <?php
    }
}
?>
<section id="message"><?php if (isset($message)) print $message; ?></section>
<div class="container" id="inline">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method='post' id="form_auth_">    
        <div class="row">
            <h2 id="etitres"><div class="col-sm-offset-1 txt150 txtGras">Connexion Administrateur<br/><br/></div></h2>
        </div>
        <div class="row">
            <div class="col-sm-4 txtRouge txtGras" style="text-align:right;">Login : </div>
            <div class="col-sm-4"><input type="text" id="login_" name="login" /></div><br/><br/>
        </div>
        <div class="row">
            <div class="col-sm-4 txtRouge txtGras" style="text-align:right;">Mot de passe :</div>
            <div class="col-sm-4"><input type="password" id="password_" name="password" /></div>
        </div>
        <br/><br/>     
            <div>
                <input type="submit" class="btn" name="submit_login" id="submit_login_" value="Login" style="width: 200px; margin-left: 12%"/>
                <input type="button" class="btn" id="Retour" value="Retour" style="width: 200px; margin-left: 12%" onclick="document.location.href='http://localhost/chaussettes_king/index.php?page=accueil.php';" /> 
                
            </div>          
    </form>
