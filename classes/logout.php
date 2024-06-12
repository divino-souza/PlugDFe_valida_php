<?php

if(!isset($_SESSION)){
    session_start();
}

session_destroy();

header("Location: \ProjetoLicense_git\PlugDFe_valida_php\login.php");

?>