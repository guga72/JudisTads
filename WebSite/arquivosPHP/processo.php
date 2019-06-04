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

===================================================================================================================================

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
	} 
?>

===================================================================================================================================

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