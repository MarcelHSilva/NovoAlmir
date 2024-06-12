<?php


include_once 'conexao.php';
include_once './MODEL/Bibliotecarios.php';
$sql = "Select * from bibliotecario";
$con = Conexao::conectar();
$dados = $con->query($sql);

$lstBbt = [];

foreach($dados as $linha){
    $bbt = new \MODEL\Bibliotecarios();
    $bbt->setId($linha['id']);
    $bbt->setNome($linha['nome']);
    $bbt->setTelefone($linha['telefone']);
    $lstBbt[] = $bbt;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title> Bibliotecarios usando Model</title>
</head>
<body>
    <h1>Bibliotecarios</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        <?php foreach($lstBbt as $bbt){?>
        <tr>
            <td><?php echo $bbt->getId();?></td>
            <td><?php echo $bbt->getNome();?></td>
            <td><?php echo $bbt->getTelefone();?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>