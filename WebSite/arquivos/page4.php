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
    <!-- colocar o pdf-->
        <div>
            <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

            ?>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 style="text-align: justify; font-family: verdana;">
                            <?= $_GET['description'] ? base64_decode( $_GET['description'] ) : "Não há descrição do processo para mostrar..." ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
</body>