<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lieu Test</title>
    </head>
    <body>
        <?php
        use modele\metier\Lieu;
        require_once __DIR__ . '/../includes/autoload.php';
        echo "<h2>Test unitaire de la classe métier Lieu</h2>";
        $unLieu = new Lieu('1', 'SALLE DU PANIER FLEURI', 'Rue de Bonneville', '450');
        var_dump($objet);
        ?>
    </body>
</html>
