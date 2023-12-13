<html>
    <?php
    @include('connexion.php');
    $code=$_GET['id_personnel'];
    $sq1 = "DELETE from personnels where id_personnel = '$code'";
    mysqli_query($conn,$sq1);

    header('location:affsuppemp.php');

    exit;

    mysql_close($conn);

    ?>
</html>    