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

        <div>
            <form action="nomedapohadobagulho.php"> <!-- local aonde vai colocar o nome da pessoa e resumo-->
            

            </form>
        </div>

        <!--vai aparecer os processos que a pessoa vai estar envolvido-->
        <div>
            <?php
                include 'conectaDbProcessos.php';
                $IdGroupSelected = $_GET["IdArray"]

                $cursorProcess = $collectionProcess->find({IdProcess: {$IdGroupSelected}});

                while($cursorProcess->hasNext()) {
                    $Process = $cursorProcess->next();
                    $IdArrayProcess = new array();
                    $x = 0;
                    $IdArrayProcess[$x] = $Process->Id;
                    echo "<a href =o processo em si - 4.php?NumProcess="$IdArrayProcess[$x]"> $Process->NumProcess;.'<br>'</a>"
                    $i++;
                    echo $Process->processo;
                    //comentario para o gustavo: só colocar uma div aqui dentro e limitar a quantidade que aparece e depois estilizar
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