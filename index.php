 
 <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>PegaOuLarga</title>
  </head>

  <body>
<?php
include "cabecalho.php";  
?>

<!-- carrossel de apresentação -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagens/Logo.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="Imagens/troca01.png" class="d-block w-100" alt="...">
    </div>
  <!-- Imagens do carrossel -->
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

   <?php
   include "rodape.php"
   ?>
  </body>

  </html>