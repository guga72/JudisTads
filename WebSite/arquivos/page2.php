<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>JudisTads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\css\CssSite.css">
    <link rel="stylesheet" href="..\css\PaginasRestantes.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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

        include 'conectaDb.php';
        $search_bar = strtolower( $_GET['search'] );
        $filter_search = $_GET['filter'];

        $query = "SELECT * FROM people WHERE nome = '%{$search_bar}%';";
        
        $res = mysqli_query($judistadsDb, $query);
        if (mysqli_num_rows($res) > 0) { 
            while ($row = mysqli_fetch_array($res)) { ?>
                <div class="container">
                    <div class="row">
                        <a href="page3.php?user=<?=$row['nome']?>" style="color: #000 !important;">
                        <div class="col-xs-1">
                            <img src="../imagens/avatar.jpg" width="50px" height="50px" style="margin-top: 20px;">
                        </div>
                        <div class="col-xs-10">
                            <h1>
                                <?= $row['nome'] ?>
                            </h1>
                        </div>
                        <div class="col-xs-12">
                            <p>O incentivo ao avanço tecnológico, assim como o fenômeno da Internet causa impacto indireto na reavaliação dos níveis de motivação departamental. No entanto, não podemos esquecer que a mobilidade dos capitais internacionais obstaculiza a apreciação da importância do sistema de participação geral. O que temos que ter sempre em mente é que o consenso sobre a necessidade de qualificação ainda não demonstrou convincentemente que vai participar na mudança do remanejamento dos quadros funcionais. Caros amigos, o comprometimento entre as equipes deve passar por modificações independentemente da gestão inovadora da qual fazemos parte. A certificação de metodologias que nos auxiliam a lidar com a expansão dos mercados mundiais desafia a capacidade de equalização dos procedimentos normalmente adotados. </p>
                        </div>
                        </a>
                    </div>
                </div>
            <? }         
        } else {?>
            <a href='index.html' style="color: black !important;">essa pessoa não esta devendo na justiça, tente por Gabriel ou Gustavo</a>
        <?}
        ?>
    </div>
</body>