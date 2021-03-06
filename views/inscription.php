<?php
require '../config.php';
require("header.php");
require("menu.php");
?>
<script type="text/javascript">
    window.onload = function(){
        document.getElementById('prenomUser').focus();
    }
</script>
<div class="probootstrap-bar">
    <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a></a>
</div>
<div class="col-xl-8 col-lg-12 mx-auto">
    <div class="card card-body bg-light">
        <form action="<?= BASE_URL ?>controllers/inscrire_adherent.php" method="post" class="probootstrap-form mb-5">
            <legend class="text-center"><h1>Inscription</h1></legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prenomUser">Prénom</label>
                        <input type="text" class="form-control" id="prenomUser" name="prenomUser" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomUser">Nom</label>
                        <input type="text" class="form-control" id="nomUser" name="nomUser" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" required="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="motDePasse">Mot de passe</label>
                        <input type="password" class="form-control" id="motDePasse" name="motDePasse" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="motDePasse2">Confirmation</label>
                        <input type="password" class="form-control" id="motDePasse2" name="motDePasse2" required="">
                    </div>
                </div>
            </div>
            <!-- sexe input-->
            <div class="row">
                <div class="col-md-6">
                    <label for="sexe">Votre sexe</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" id="homme" name="sexe" value="H" checked required> Homme</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" id="femme" name="sexe"  value="F"> Femme</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" id="autre" name="sexe"  value="A"> Autre</label>
                    </div>
                </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" name='creerUser' class="btn btn-primary btn-lg">Inscription</button>
                    <button type="reset" name='annulerCreerUser' class="btn btn-danger btn-lg">Annuler</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include 'footer.php';
?>




