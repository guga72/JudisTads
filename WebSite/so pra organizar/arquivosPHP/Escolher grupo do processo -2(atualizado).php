<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>JudisTads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CssSite.css">
    <link rel="stylesheet" href="PaginasRestantes.css">
</head>
<body>
    <div class="cabecalho">
        <a id="Titulo">JudisTads</a>
        <input class="pesquisa" type="text" id="txtBusca" placeholder="Buscar...">

        <div class="dropdown">
            <button onclick="MostrarDropdown()" class = "oi">Pessoas</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Empresa</a>
                <a href="#">Código do processo</a>
            </div>
        </div>
    </div>

    <div id="resultado">
        <?php
            include 'conectaDb.php';
            $search_bar = $_GET["search"]
            $filter_search = $_GET["filter"]

            if ($filter != null && $filter != "") {
                switch ($filter) {
                    case 'PESSOA':    
                        $cursor = $collection->find({
                            tipo: {$filter_search}
                            nome: {$search_bar}
                        });
                    break;
                    case 'EMPRESA':
                        $cursor = $collection->find({
                            tipo: {$filter_search}
                            nome: {$search_bar}
                        });
                    break;
                    case 'CODIGO':
                        $cursor = $collection->find({
                            tipo: {$filter_search}
                            nome: {$search_bar}
                        });
                    break;
                }
            } else {
                $cursor = $collection->find({nome: {$search_bar}});
            }
            if ($cursor->hasNext()){
                while($cursor->hasNext()) {
                    $groupProcess = $cursor->next();
                    $IdArray = new array();
                    $i = 0;
                    $IdArray[$i] = $groupProcess->Id;
                    echo "<a href = Escolher o processo - 3.php?IdArray="$IdArray[i]"> $groupProcess->nome; . '<br>' . $groupProcess->qtdProcesso . '<br><br>'; </a>"
                    $i++;
                }
            } else {
                echo "não foi encontrado nenhum documento das informações dadas";
            }
        ?>
    </div>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function MostrarDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
            
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.oi')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
            </script>
</body>