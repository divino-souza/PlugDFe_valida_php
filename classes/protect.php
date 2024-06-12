<?php 

if(!isset ($_SESSION)){
    session_start();
}

if(!isset ($_SESSION['id'])){
    die("Sem acesso a essa pagina, não esta logado. <p><a href=\"\ProjetoLicense_git\PlugDFe_valida_php\login.php\">Entrar</a/p>");
}

?>