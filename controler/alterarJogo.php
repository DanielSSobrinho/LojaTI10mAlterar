<?php
include_once("../model/conexao.php");
include_once("../model/jogosModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo)){
echo("Jogo alterado com sucesso.");
}else{
echo("Jogo não alterado.");
}

include_once("../view/footer.php");
?>