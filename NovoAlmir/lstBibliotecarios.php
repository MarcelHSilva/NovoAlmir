<?php
include 'conexao.php';
$sql = "select * from bibliotecario;";
$con = Conexao::conectar();
$lstBbt = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecários</title>
</head>
<body>
    <h1>Bibliotecários</h1>
    <table class="striped">
       <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
       </tr>
      <?php foreach ($lstBbt as $bbt) { ?>
      <tr>
        <td><?php echo $bbt['id']; ?></td>
        <td><?php echo $bbt['nome']; ?></td>
        <td><?php echo $bbt['telefone']; ?></td> 
      </tr>
      <?php } ?>
    </table>
</body>
</html>
