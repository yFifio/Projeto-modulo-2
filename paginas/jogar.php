<?php 
    $id = $p[1] ?? NULL;
    $dadosApi = file_get_contents("ttp://localhost/Projeto-modulo-2-main/api.php");

    $dadosApi = json_decode($dadosApi);

    $dados = $dadosApi->$id;
    ?>
<div class="conteiner-global">
<div class = "jogos-center">
    <!-- <iframe src="<?php echo $dados-> jogar?>" width="500" height="600" frameborder="0"></iframe> -->
    <a href="<?php echo $dados-> jogar?>" class="btn btn-primary">Jogos Em tela cheia</a>
    </div>  
  
</div>
