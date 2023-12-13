<?php
    session_start();
    
    echo 'la session est ouverte pour :';
    echo $_SESSION["nom"];

?>