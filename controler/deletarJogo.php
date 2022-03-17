<?php
include_once("../model/conexao.php");
include_once("../model/jogosModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarJogo($conn,$codigojogo)){
echo("Jogo excluído com sucesso.");
}else{
echo("Jogo não excluído.");
}

include_once("../view/footer.php");
?>