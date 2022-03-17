<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3" action="../controler/inserirJogo.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor Jogo</label>
    <input type="text" name="valorjogo"class="form-control" id="inputValor">
  </div>
  <div class="col-4">
    <label for="inputGenero" class="form-label">Gênero Jogo</label>
    <input type="text" name="generojogo" class="form-control" id="inputGenero" placeholder="">
  </div>
  <div class="col-4">
    <label for="inputQtd" class="form-label">Quantidade de Jogos</label>
    <input type="text" name="qtdjogo" class="form-control" id="inputQtd" placeholder="">
  </div>
  <div class="col-md-2">
    <label for="inputDataLan" class="form-label">Data de Lançamento</label>
    <input type="text" name="datalancamentojogo" class="form-control" id="inputDataLan">
  </div>
  <div class="col-md-2">
    <label for="inputStudio" class="form-label">Studio do Jogo</label>
    <input type="text" name="studiojogo" class="form-control" id="inputStudio">
  </div>
 

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceite os termos de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
