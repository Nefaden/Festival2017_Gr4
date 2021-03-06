<!DOCTYPE html">
<html lang="fr">
    <head>
        <title>Festival</title>
        <meta http-equiv="Content-Language" content="fr">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/cssGeneral.css" rel="stylesheet" type="text/css">
        <link href="css/cssOnglets.css" rel="stylesheet" type="text/css">
    </head>
    <header>
	<!-- website's header -->
        Festival Folklore du Monde
    </header> 
    <body class='basePage'>
        <!--  Tableau contenant le titre et les menus -->
        <!--<table width="65%" height ="100%" cellpadding="0" cellspacing="0" align="center">-->
            <!-- Titre -->
            <tr> 
            </tr>
            <!-- Menus -->
            <tr> 
                <td>
                    <!-- On inclut le fichier de gestion des onglets ; si on a des 
                    menus traditionnels, il faudra inclure le fichier adéquat -->
                    <?php include("_onglets.inc.php"); ?>

                    <div id='barreMenus'>
                        <ul class='menus'>
                            <?php construireMenu("Accueil", "index.php", 1); ?>
                            <?php construireMenu("Gestion établissements", "cGestionEtablissements.php", 2); ?>
                            <?php construireMenu("Gestion Groupes", "cGestionGroupes.php", 3); ?>
                            <?php construireMenu("Représentations", "cGestionRepresentation.php", 3); ?>
                            <?php construireMenu("Gestion types chambres", "cGestionTypesChambres.php", 4); ?>
                            <?php construireMenu("Offre hébergement", "cOffreHebergement.php", 5); ?>
                            <?php construireMenu("Attribution chambres", "cAttributionChambres.php", 6); ?>
                        </ul>
                    </div>

                </td>
            </tr>
            <!-- Fin des menus -->
            <tr>
                <td class="basePage">
            <br><center><br>


