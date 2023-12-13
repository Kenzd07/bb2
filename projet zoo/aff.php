<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $requete="select * from animaux";
        $resultat=mysqli_query($conn, $requete);
        echo mysqli_num_rows($resultat);
        ?>
        <table border=2>
            <tr>
                <td> id animaux </td>
                <td> id esp </td>
                <td> date naissance </td>
                <td> sexe </td>
                <td> pseudo </td>
                <td> commentaire </td>
            </tr>        
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?>  <tr>
                <td><?php echo $enreg["num"];?></td>
                <td><?php echo $enreg["nom"];?></td>
                <td><?php echo $enreg["adresse"];?></td>
                <td><?php echo $enreg["num_tel"];?></td>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
