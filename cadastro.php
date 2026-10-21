<?php  
    include "cabecalho.php";
?>
<form class="row g-3">
  <div class="md:col-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="md:col-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="md:col-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="md:col-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="md:col-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
  </div>
</form>
<?php
    include "rodape.php";
?>