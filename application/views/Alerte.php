<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Dossier/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/Teste/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <title>DIRI_TANA</title>
    </head>
<body>
    <div class="card text-center">
        <div class="card-header">
            Alerte Suppression
        </div>
        <div class="card-body">
            <h5 class="card-title">Are you sure to add into archive</h5>
            <p class="card-text"><?php echo $liste['nomCooperative'];?>??</p>
                <form class="news" action=<?php echo base_url('Login/validDelete/'); ?> method="POST">
                    <input type="hidden" name="idCooperative" value="<?php echo $liste['idCooperative'];?>" >
                    <input type="hidden" name="nomCooperative" value="<?php echo $liste['nomCooperative'];?>" >
                    <input type="hidden" name="ce" value="<?php echo $liste['CE'];?>" >
                    <input type="hidden" name="de" value="<?php echo $liste['DE'];?>" >
                    <input type="hidden" name="dc" value="<?php echo $liste['DC'];?>" >
                    <input type="hidden" name="mandat" value="<?php echo $liste['mandat'];?>" >
                    <input type="hidden" name="dateAJour" value="<?php echo $liste['dateAJour'];?>" >
                    <input type="hidden" name="nomPresident" value="<?php echo $liste['nomPresident'];?>" >
                    <input type="hidden" name="membre" value="<?php echo $liste['membre'];?>" >
                    <input type="hidden" name="homme" value="<?php echo $liste['homme'];?>" >
                    <input type="hidden" name="femme" value="<?php echo $liste['femme'];?>" >
                    <input type="hidden" name="contact" value="<?php echo $liste['contact'];?>" >
                    <input type="hidden" name="branche" value="<?php echo $liste['branche'];?>" >
                    <input type="hidden" name="filiere" value="<?php echo $liste['filiere'];?>" >
                    <input type="hidden" name="addrescooperative" value="<?php echo $liste['addrescooperative'];?>" >
                    <input type="hidden" name="fokotany" value="<?php echo $liste['fokotany'];?>" >
                    <input type="hidden" name="commune" value="<?php echo $liste['commune'];?>" >
                    <input type="hidden" name="distric" value="<?php echo $liste['distric'];?>" >
                    <input type="hidden" name="province" value="<?php echo $liste['province'];?>" >
                    <input type="hidden" name="region" value="<?php echo $liste['region'];?>" >
                    <input type="hidden" name="date2018" value="<?php echo $liste['date2018'];?>" >
                    <button type="submit" name="" class="btn btn-danger">YES</button>
                </form>
                <form class="news" action=<?php echo base_url('Login/Cooperative/'); ?> method="POST" style="margin-top: 10px;">
                    <button type="submit" class="btn btn-primary">NO</button>
                </form>
        </div>
        <div class="card-footer text-muted">
            DIRI_TANA
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Dossier/javascript.js'); ?>"></script>
</html>