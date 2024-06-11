<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clack (3x)</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="script" href="index.js">
</head>
<body>
<div class="botoes">
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(97, 75, 195); height: 100px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
        <div class="container-fluid" style="background-color:rgb(97, 75, 195);">
          <a class="navbar-brand" style="font-size: 24px; color: #85E6C5;" href="index.php">Clack (3x)</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  style="font-size: 24px; color: #85E6C5" aria-current="page" href="games.php">GamePics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="font-size: 24px; color: #85E6C5" href="equipe.php">Equipe</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="font-size: 24px; color: #85E6C5">
                  Contatos
                </a>
                <ul class="dropdown-menu"  style="font-size: 24px; color: #85E6C5;background-color:rgb(97, 75, 195);">
                  <li><a class="dropdown-item" style="font-size: 24px; color: #85E6C5" href="https://www.linkedin.com/in/lucas-de-fiori-b1a488312/">LinkedIn</a></li>
                  <li><a class="dropdown-item" style="font-size: 24px; color: #85E6C5" href="https://github.com/yFifio">GitHub</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="font-size: 24px; color: #85E6C5;" href="https://api.whatsapp.com/send?phone=5544999043230&text=Ol%C3%A1,%20tudo%20bem?">
                    WhatsApp</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>

      <main>
      <?php

        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            // serapar o parametro por /
            $p = explode("/", $param);
            //print_r($p);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogos") {
            $pagina = "jogos/{$jogo}.php";

        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
       }
    ?>  
      </main>
  <footer>
    <h3>Desenvolvido por Lucas de Fiori Viudes</h3>
    <a href="https://github.com/yFifio">
        <img src="./img/icones/github.webp" alt="GitHub" width="80px" height="80px">
    </a>

    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembre de mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </form>

</footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
</body>
</html>