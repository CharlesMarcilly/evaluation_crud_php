<?php
	include 'functionsSql.php';
	include 'functionTable.html.php';

	$action = $_GET["action"];
	
	if ($action == "DELETE") {
		$id = $_GET['id'];
	} 
	else {
		$id = $_GET["id"];
		$titre = $_GET["titre"];
		$genre = $_GET["genre"];
		$auteur = $_GET["auteur"];
		$note = $_GET["note"];	
	}
	

	if ($action == "CREATE") {
		createLivres($titre, $genre, $auteur, $note);

		echo "livre ajouté <br>";
		echo "<a href='../index.php'>Liste des livres</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateLivres($id, $titre, $genre, $auteur, $note);
		echo "livre modifié <br>";
		echo "<a href='../index.php'>Liste des livres</a>";
	}

	if ($action == "DELETE") {
		deleteLivres($id);
		echo "livre supprimé <br>";
		echo "<a href='../index.php'>Liste des livres</a>";
	}
	

	
?>