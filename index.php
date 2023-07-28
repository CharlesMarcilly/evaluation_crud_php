<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet CRUD PHP</title>

</head>

    <body>
        <?php 
        include "./crud/functionsSql.php";
        include "./crud/functionTable.html.php";

        $headers = getHeaderTable();
        $livres = getAllLivres();
        displayTable($livres, $headers);
        ?>

        <!-- <a href=userForm.php?id=0>Créer un livre</a>  -->
        <a href='./crud/userForm.php'>Ajouter des livres</a>;

    </body>
    </html>