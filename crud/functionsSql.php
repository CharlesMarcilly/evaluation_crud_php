<?php 
    function getDatabase()
    {
        try {
            $user = "root";
            $password = "";

            $pdo = new PDO('mysql:host=localhost;dbname=projet_crud', $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e){
            print 'Erreur !:' . $e->getMessage() . "</br>";
            die();
        }
    }

   
    function getAllLivres()
    {
        $connection = getDatabase();
        $request = 'SELECT * FROM livres';
        $rows = $connection->query($request);
        return $rows;
    }

    
    function createLivres($titre, $genre, $auteur, $note)
    {
        try {
            $connection = getDatabase();
            $sql = "INSERT INTO livres (titre, genre, auteur, note)
            VALUES ('$titre', '$genre', '$auteur', '$note')";
            $connection = exec($sql);
        }
        catch (PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }


    function getOneLivre($id)
    {
        $connection = getDatabase();
        $request = "SELECT * FROM livres WHERE id = '$id' " ;
        $stmt = $connection->query($request);
        $row = $stmt->fetchAll();

        if (!empty($row))
        {
            return $row[0];
        }
    }    
    
    
    function updateLivres($id, $titre, $genre, $auteur, $note)
    {
        try {
            $connection = getDatabase();

            $stmt = $connection->prepare("UPDATE livres SET titre=:titre, genre=:genre, auteur=:auteur, note=:note WHERE id=:id");
            $stmt->bindValue(":titre", $titre);
            $stmt->bindValue(":genre", $genre);
            $stmt->bindValue(":auteur", $auteur);
            $stmt->bindValue(":note", $note);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
        }
        catch (PDOException $e)
        {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }
    
 	
    function deleteLivres($id)
    {
        try {
            $connection = getDatabase();
            $request = 'DELETE FROM livres WHERE id = "$id" ';
            $stm = $connection->query($request);

            if (!empty($row))
            {
                return $row[0];
            }
        }
        catch (PDOException $e)
        {
            echo $request . "<br>" . $e->getMessage();
        }
    }

    function getNewLivre() {
		$user['id'] = "";
		$user['titre'] = "";
		$user['genre'] = "";
		$user['auteur'] = "";
		$user['note'] = "";
		
	}

    
?>