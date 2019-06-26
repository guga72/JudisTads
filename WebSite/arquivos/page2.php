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
        <a href="page3.php">clica aqui</a>
    </div>  

    <div id="resultado">
        <?php
            // ini_set('display_errors', 1);
            // ini_set('display_startup_errors', 1);
            // error_reporting(E_ALL);
            // include 'conectaDb.php';
            // $search_bar = $_GET["search"];
            // $filter_search = $_GET["filter"];
            // $where = array('$and' => array(array('tipo' => $filter_search), array('nome'=>$search_bar)));

            // $cursor = $collection->find($where);
//echo "<a href ="".$site."">".$groupProcess->nome."<br>".$groupProcess->qtdProcesso."<br><br></a>"
/*<a href ="<?echo $site;?>"><?$groupProcess->nome?><br><?$groupProcess->qtdProcesso?><br><br></a>*/
            // if ($cursor->hasNext()){
            //     $i = 0;
            //     while($cursor->hasNext()) {
            //         $groupProcess = null;
            //         $groupProcess = $cursor->next();
            //         $IdArray = array();
            //         $IdArray[$i] = $groupProcess->Id;
            //         $site = "page3.php?IdArray=".$IdArray[$i].""; 
            //         //colocar o href aqui
            //         $i++;
            //     }
            // } else {
            //     echo "não foi encontrado nenhum documento das informações inseridas";
            // }
        ?>
    </div>

</body>