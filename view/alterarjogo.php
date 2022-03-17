<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosModel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$informa = visuCodigoJogo($conn,$idjogo);

?>

<div class="container">
<form class="row g-3" action="../controler/alterarJogo.php" method="post">
    <input type="hidden" name="codigojogo" value="<?=$informa["idjogo"]?>">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" value="<?=$informa["nomejogo"]?>" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Valor</label>
    <input type="text" name="valorjogo" value="<?=$informa["valorjogo"]?>"class="form-control" id="inputValor">
  </div>
  <div class="col-4">
    <label for="inputFone" class="form-label">Gênero</label>
    <input type="text" name="generojogo" value="<?=$informa["generojogo"]?>" class="form-control" id="inputGenero" placeholder="">
  </div>
  <div class="col-4">
    <label for="inputCPF" class="form-label">Quantidade</label>
    <input type="text" name="qtdjogo" value="<?=$informa["qtdjogo"]?>" class="form-control" id="inputQtd" placeholder="">
  </div>
  <div class="col-md-2">
    <label for="inputCEP" class="form-label">Lançamento</label>
    <input type="text" name="datalancamentojogo" value="<?=$informa["datalancamentojogo"]?>" class="form-control" id="inputDataLan">
  </div>
  <div class="col-md-2">
    <label for="inputNum" class="form-label">Studio</label>
    <input type="text" name="studiojogo" value="<?=$informa["studiojogo"]?>" class="form-control" id="inputStudio">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
