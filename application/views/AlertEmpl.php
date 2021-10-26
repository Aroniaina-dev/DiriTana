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
            <h5 class="card-title">Are you sure quit us?</h5>
            <p class="card-text"><?php echo $liste['nomEmployee'];echo " ";echo $liste['prenomEmployee'];?></p>
            <form class="news" action=<?php echo base_url('Login/validDeleteEmpl/'); ?> method="POST">
                <input type="hidden" name="idEmployee" value="<?php echo $liste['idEmployee'];?>" >
                    <input type="hidden" name="nomEmployee" value="<?php echo $liste['nomEmployee'];?>" >
                    <input type="hidden" name="prenomEmployee" value="<?php echo $liste['prenomEmployee'];?>" >
                    <input type="hidden" name="fonctionEmployee" value="<?php echo $liste['fonctionEmployee'];?>" >
                    <input type="hidden" name="contactEmployee" value="<?php echo $liste['contactEmployee'];?>" >
                    <input type="hidden" name="mailEmployee" value="<?php echo $liste['mailEmployee'];?>" >
                    <input type="hidden" name="experience" value="<?php echo $liste['experience'];?>" >
                    <button type="submit" name="" class="btn btn-danger">YES</button>
                </form>
                <form class="news" action=<?php echo base_url('Login/emplRehetra/'); ?> method="POST" style="margin-top:10px;">
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