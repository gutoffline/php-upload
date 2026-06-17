<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$pasta_destino = "arquivos/";

$foto = $pasta_destino . $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'] , $foto );

echo "<pre>";
print_r($_FILES['foto']);

?>