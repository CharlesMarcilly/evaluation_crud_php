<?php
	include './functionsSql.php';
	include './functionTable.html.php';

	$id = $_GET['id'];
	if ($id == 0) {
		$user = getNewLivre();
		$action = "CREATE";
		$libelle = "Créer";
	} else {
		$user = getOneLivre($id);
		$action = "UPDATE";
		$libelle = "Modifier";
	}
	

?>

    <!DOCTYPE html>
    <html lang="fr">
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire utilisateur</title>
        <link rel="stylesheet" href="style.css">
    </header>

        <body>
            <form action="createUpdate.php" method="GET">
            <p>	
                <a href="../index.php" style="text-decoration: none;">Liste des livres</a>

                <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
                <input type="hidden" name="action" value="<?php echo $action;  ?>"/>
                <div>
                    <label for="titre">Titre :</label>
                    <input type="text" id="titre" name="titre" value="<?php echo $user['titre'];  ?>">
                </div>
                <div>
                    <label for="genre">Genre</label>
                    <input type="text" id="genre" name="genre" value="<?php echo $user['genre'];  ?>">
                </div>
                <div>
                    <label for="auteur">Auteur:</label>
                    <input type="text" id="auteur" name="auteur" value="<?php echo $user['auteur'];  ?>">
                </div>
                <div>
                    <label for="note">Note :</label>
                    <input type="text" id="note" name="note" placeholder="<?php echo $user['note'];  ?>">
                </div></br>
                <div class="button">
                    <button type="submit"><?php echo $libelle;  ?></button>
                </div>
            </p>
            </form>
            <br>

            <?php if ($action!="CREATE") { ?>
            <form action="./createUpdate.php" method="get">
                <input type="hidden" name="action" value="DELETE"/>
                <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
                <p>
                <div class="button">
                    <button type="submit">Supprimer</button>
                </div>
                </p>
            </form>
            <?php } ?>

        </body>
    </html>