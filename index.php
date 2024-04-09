<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Agenda da Empresa</h1>
    <img src="nexus.jpg">
    <button type="button">Consultar Agenda</button>
    <p>Nome:Telefone</p>
    <p id="agenda">
        <?php
     include 'consulta.php';


    ?>
    </p>

    <p>Produzido Por: Daniel Vital Araújo</p>
</body>
</html>