<html>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $requete="select * from animaux";
        $resultat=mysqli_query($conn,$requete);
        echo mysqli_num_rows($resultat);
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
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?><tr>
                <td><input value='<?php echo $enreg["id_animal"];?>' readonly></input></td>
                <td><input value='<?php echo $enreg["id_espece"];?>'readonly></input></td>
                <td><input value='<?php echo $enreg["pseudo"];?>'></input></td>
                <td><input value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input value='<?php echo $enreg["commentaire"];?>'></input></td>
        </tr> 
                    <td><?php echo "<a href= 'modif2.php?id_animal=".$enreg['id_animal']."''>selectionner</a>";?></td>
                </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
