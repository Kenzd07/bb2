<html>
<head>
<title>Liste des animaux</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('connexion.php'); // appel du script de connexion

  // gestion des cas particuliers
  // le champ peut comporter un guillemet qui va gêner MySQL
  $nom=addslashes($_POST["nom_enclo"]);
  $capacite=addslashes($_POST["capacite_max"]);
  $taille= addslashes($_POST["taille_enclo"]);
  $eau = $_POST['yes'];
  $res = $_POST['responsable'];
  
 

  $requete = "UPDATE enclos SET id_enclos = ".$_POST["id_enclos"].", nom_enclo='".$nom."', capacite_max='".$capacite."', eau='".$eau."', taille_enclo='".$taille."', responsable='".$res."' WHERE id_enclos=".$_POST["id_enclos"].";";

 $resultat= mysqli_query($conn, $requete);
 if ( ! $resultat)
 {      echo "<h1>echec de la requête $requete</h1>";
        echo  mysql_error();
 }
 else
     if ( mysqli_affected_rows ($conn ) )
          echo "<h1>mise a jour effectuée</h1>";
 echo '<h3><a href="menudir.php">RETOUR au menu</a></h3>';
mysqli_close($conn);
?>
</body>
</html>