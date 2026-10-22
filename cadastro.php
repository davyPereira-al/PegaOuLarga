<?php  
    include "cabecalho.php";
?>
<div class="caixa-cad">
  <form class="row g-3">
    <div class="md:col-6">
      <label for="inputName4" class="form-label">Nome</label>
      <input type="text" class="form-control" id="inputName4">
    </div>
    <div class="md:col-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="md:col-6">
      <label for="inputPassword4" class="form-label">Senha</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="md:col-6">
      <label for="inputDate4" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="inputDate4">
    </div>
    <div class="md:col-6">
      <label for="inputCity" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="md:col-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-control">
      <option selected>Escolha...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-12">
    </div>
    <div class="col-12">
      <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
    </div>
  </form>
</div>
  <?php
    include "rodape.php";
    ?>