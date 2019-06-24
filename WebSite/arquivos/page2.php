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

    <div id="resultado">
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            //include 'conectaDb.php';
            $search_bar = $_GET["search"];
            $filter_search = $_GET["filter"];

            echo $search_bar;
            echo $filter_search;
            // if ($filter != null && $filter != "") {
            //     switch ($filter) {
            //         case 'PESSOA':    
            //             $cursor = $collection->find({
            //                 tipo: {$filter_search}
            //                 nome: {$search_bar}
            //             });
            //         break;
            //         case 'EMPRESA':
            //             $cursor = $collection->find({
            //                 tipo: {$filter_search}
            //                 nome: {$search_bar}
            //             });
            //         break;
            //         case 'CODIGO':
            //             $cursor = $collection->find({
            //                 tipo: {$filter_search}
            //                 nome: {$search_bar}
            //             });
            //         break;
            //     }
            // }
            // if ($cursor->hasNext()){
            //     while($cursor->hasNext()) {
            //         $groupProcess = $cursor->next();
            //         $IdArray = new array();
            //         $i = 0;
            //         $IdArray[$i] = $groupProcess->Id;
            //         echo "<a href = Escolher o processo - 3.php?IdArray="$IdArray[i]"> $groupProcess->nome; . '<br>' . $groupProcess->qtdProcesso . '<br><br>'; </a>"
            //         $i++;
            //     }
            // } else {
            //     echo "não foi encontrado nenhum documento das informações dadas";
            // }
        ?>
    </div>
</body>