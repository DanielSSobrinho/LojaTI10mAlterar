<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogosModel.php");
?>

<div class="centroform" >
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Digite o nome do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="genjogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Digite o nome do jogo">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Gênero</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
<?php
$generojogo = isset($_POST["genjogo"])? $_POST["genjogo"] : "";  
if($generojogo){
$generojogos = visuGeneroJogo($conn,$generojogo);

?>
    <tr>
      <th scope="row"><?=$generojogos["idjogo"];?></th>
      <td><?=$generojogos["nomejogo"]?></td>
      <td><?=$generojogos["valorjogo"]?></td>
      <td><?=$generojogos["generojogo"]?></td>
      <td>
        <form action="../view/alterarjogo.php" method="POST">
          <input type="hidden" value="<?=$generojogos["idjogo"]?>" name="idjogo">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td>
           <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" codigo="<?=$generojogos["idjogo"]?>" nome="<?=$generojogos["nomejogo"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
         Apagar
        </button>
      </td>
    </tr>
<?php
}
?>   
    
  </tbody>
</table>

</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Jogo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarJogo.php" method="Get">
          <input type="hidden" class="codigo form-control" name="codigojogo">
          <button type="submit" class="btn btn-danger">Confirmar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var deletarJogoModal = document.getElementById('deleteModal');
      deletarJogoModal.addEventListener('show.bs.modal', function(event){
        var button = event.relatedTarget;
        var codigo = button.getAttribute('codigo');
        var nome = button.getAttribute('nome');

        var modalBody = deletarJogoModal.querySelector('.modal-body');
        modalBody.textContent = 'Gostaria de excluir o Jogo ' + nome + ' ?';
        
        var Codigo = deletarJogoModal.querySelector('.modal-footer .codigo');
        Codigo.value = codigo;
      })
</script>

<?php
include_once("../view/footer.php");
?>