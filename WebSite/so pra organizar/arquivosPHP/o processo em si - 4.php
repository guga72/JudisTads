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
        <!-- colocar o pdf-->
        <div>
            <?php
                include 'conectaDbProcessos.php';
                $IdProcessSelected = $_GET["NumProcess"]

                $cursorProcess = $collectionProcess->find({Id: {$IdProcessSelected}});

                if($cursorProcess->hasNext()) {
                    $Process = $cursorProcess->next();
                    echo $Process->NumProcess;'<br>'
                    echo $Process->processo;
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