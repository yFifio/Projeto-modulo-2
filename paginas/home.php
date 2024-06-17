
<div class="conteiner-global">
  
<div class="center">
        <h1>Jogos</h1>
    </div>


    
</div class="container text-center">

  <div class="card-flex row row-cols-md-1 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4 " >
    <?php

    $dadosApi = file_get_contents("http://localhost/Projeto-modulo-2-main/api.php");
    $dadosApi = json_decode($dadosApi);

    foreach ($dadosApi as $dados) {
        ?>
        
        <div class="col">
    <div class="card ">
      <img src="<?php echo $dados-> banner?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $dados-> title?></h5>
        <p class="card-text"><?php echo $dados-> description?></p>
        <a href="<?= $dados->jogar ?>" class="btn btn-primary">Jogar</a>
      </div>
      </div> 
      </div>
        <?php
    }
    ?>
    
  </div>