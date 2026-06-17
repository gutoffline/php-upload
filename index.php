<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Upload</title>
</head>
<body>
    <h1>Exemplo de Upload</h1>
    <form method="post" action="upload-de-arquivo.php" enctype="multipart/form-data">
        Nome: <input name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        Foto de Perfil: <input type="file" name="foto" accept="image/*"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>