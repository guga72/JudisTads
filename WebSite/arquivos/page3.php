<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>JudisTads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\css\CssSite.css">
    <link rel="stylesheet" href="..\css\PaginasRestantes.css">
</head>
<body>
    <a href="index.html"><div class="Titulo2"><h1><strong>JudisTads</strong></h1></div></a>
    <div class="geral">
    <div class="geral">
        <form class="" action="page2.php" method="get">
            <input class="pesquisa" type="text" name="search" id="txtBusca" placeholder="Buscar..." value="">
        <div class="dropdown">
            <div class="oi">
              <select id="dropdown" name="filter">
                <option value="PESSOA">Pessoas</option>
                <option value="EMPRESA">Empresa</option>
                <option value="CODIGO">Código da Empresa</option>
              </select>
              <input class="button" type="submit"></button>
            </div>
          </div>
        </form>
    </div> 
        <!--vai aparecer os processos que a pessoa vai estar envolvido-->
        <div>
            <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                // include 'conectaDbProcessos.php';
                // $IdGroupSelected = $_GET["IdArray"];

                // $cursorProcess = $collectionProcess->find({IdProcess: {$IdGroupSelected}});

                // while($cursorProcess->hasNext()) {
                //     $Process = $cursorProcess->next();
                //     $IdArrayProcess = new array();
                //     $x = 0;
                //     $IdArrayProcess[$x] = $Process->Id;
                //     echo "<a href =o processo em si - 4.php?NumProcess="$IdArrayProcess[$x]"> $Process->NumProcess;.'<br>'</a>"
                //     $i++;
                //     echo $Process->processo;
                //     //comentario para o gustavo: só colocar uma div aqui dentro e limitar a quantidade que aparece e depois estilizar
                // } 
            ?>
        </div>
</body>