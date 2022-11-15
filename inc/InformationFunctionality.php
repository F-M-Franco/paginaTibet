<?php
$selectedPageId=$_GET['selectedPageId'];
$sql= 'SELECT archivo FROM pagina WHERE idPagina='. $selectedPageId;
$result=mysqli_query($conn, $sql);
$fileName=mysqli_fetch_all($result, MYSQLI_ASSOC);
$filePath= '/home/alumno/Desktop/tibet14-11-2022-20221115T105559Z-001/tibet14-11-2022/proyectoTibet/inc/texto/'.$fileName[0]['archivo'];
$filePointer = fopen($filePath, 'r');
$fileContent = fread($filePointer,filesize($filePath));
fclose($filePointer);

?>