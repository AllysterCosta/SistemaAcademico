<?php

    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        die("Você não tem permissão para acessar esta pagina, realize login e tente novamente!<br>
        <p><a href=\"index.php\">Login</a></p>");
    }
?>