<?php
include_once("../model/conexao.php");
include_once("../model/jogosModel.php");

$nomejogo = $_POST["nomejogo"];

if(visuNomeJogo($conn,$nomejogo)){
    header("Location:../view/visuNomeJogo.php");
}else{
    header("Location:../view/visuNomeJogo.php");
}
?>