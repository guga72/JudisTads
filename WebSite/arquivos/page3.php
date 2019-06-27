<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>JudisTads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\css\CssSite.css">
    <link rel="stylesheet" href="..\css\PaginasRestantes.css">
            <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
                include 'conectaDb.php';
                $search_bar = strtolower( $_GET['user'] );

                $query = "SELECT * FROM people WHERE nome = '{$search_bar}';";

                $res = mysqli_query($judistadsDb, $query);
        if (mysqli_num_rows($res) > 0) { 
            while ($row = mysqli_fetch_array($res)) { ?>
                <div>
                    <? 
                        $processos = (string) $row['processos'];
                        $processos = json_decode( $processos, true );

                        if( $processos && is_array( $processos ) ) { ?>
                            <div class="container">
                                <div class="row">
                                    <h1>
                                        Processos do <?= $row['nome'] ?>
                                    </h1>
                            <?php foreach ($processos as $processo ) { ?>
                                <a href="page4.php?description=<?= base64_encode( $processo['descricao'] ) ?>"style="color: #000 !important;">
                                    <div class="col-12">
                                        <h3>
                                            <?= substr( $processo['descricao'], 0, 55 ) . "..." ?>
                                        </h3>
                                    </div>
                                </a>
                            <?php } ?>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
          <? }         
        } else {
            echo "<a href='index.html'>essa pessoa não esta devendo na justiça, tente por Gabriel ou Gustavo</a>";
        }
            ?>
        </div>
</body>