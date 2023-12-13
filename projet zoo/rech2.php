<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $a = $_POST['rech_text'];
        $requete="select * from animaux where pseudo='$a'";
        $resultat=mysqli_query($conn,$requete);
        ?>
        <h1>voici les info concernant l'animal :</h1>
            
        <?php $enreg=mysqli_fetch_array($resultat)
        
            ?>  
            <table border=2>
                <tr>
                <td> id_animal : </td>
                <td> id_esp : </td>
                <td> pseudo : </td>
                <td> date naissaance : </td>
                <td> sexe : </td>
                <td> commentaire : </td>
                </tr>
            <tr>
                <td><input value='<?php echo $enreg["id_animal"];?>' readonly></input></td>
                <td><input value='<?php echo $enreg["id_espece"];?>'readonly></input></td>
                <td><input value='<?php echo $enreg["pseudo"];?>'></input></td>
                <td><input value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input value='<?php echo $enreg["commentaire"];?>'></input></td>
        </tr> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>