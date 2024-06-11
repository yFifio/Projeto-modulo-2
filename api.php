<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(
        "id" => 1,
        "title" => "Space Cap Way",
        "description" => "Space Cap é um jogo no estilo Shoot 'em up que o seu objetivo é destruir as naves inimigas",
        "banner01" => "http://localhost/Projeto-modulo-2/img/space cap way/space tumb.png",
        
        "screenShot01" => "http://localhost/Projeto-modulo-2/img/gameplay.jpg",
        
        "jogar"=>"http://localhost/Projeto-modulo-2/jogos/Space Cap Way/Space Cap Way/index.html",
    );
    $game[2] = array(
        "id" => 2,

        "title" => " Goblin Reaper",

        "description" => " é um jogo de aventura e ação inspirado no universo sombrio de Goblin Slayer. Desenvolvido na engine Construct 3 e disponível para PC, o jogo mergulha os jogadores em um mundo repleto de monstros e principalmente o que nosso personagem mais gosta de massacrar, GOBLINS!.
            Os jogadores assumem o papel de um Aventureiro assustador e turbulento GoblinReaper, embarcando em missões para recuperar e proteger os inocentes das investidas dos Goblins e para alimentar sua vontade de vingança e odio",

        "banner01" => "http://localhost/Projeto-modulo-2/img/goblinsreaper/tamb.jpg",
        
        "screenShot01" => "http://localhost/Projeto-modulo-2/img/goblins-gameplay.jpg",

        "jogar"=>"http://localhost/Projeto-modulo-2/jogos/GoblinReaper/index.html",

    );
    $game[3] = array(
        "id" => 3,

        "title" => " Monster Hunter ",

        "description" => " Prepare-se para a emocionante jornada de 'Monster Hunter'! Torne-se o destemido caçador armado com uma poderosa escopeta calibre 12, enfrentando esqueletos e fantasmas em um mundo de plataformas repleto de desafios. Com habilidades afiadas e mira precisa, você enfrentará o terror da noite em níveis desafiadores. Gráficos envolventes e uma trilha sonora arrepiante criarão uma experiência de jogo inesquecível. Aceite o desafio e torne-se o herói que o mundo precisa. 'Monster Hunter' espera por você. Está pronto para a caçada? ",

        "banner01" => "http://localhost/Projeto-modulo-2/img/monster-hunter/tamb.jpg",
        
        "screenShot01" => "http://localhost/Projeto-modulo-2/img/gameplay.jpg",

        "jogar"=>"http://localhost/Projeto-modulo-2/jogos/monsterhunter/index.html",
    );

    echo json_encode($game);

?>

