<?php
include "../conn/connect.php";

$listaProGeral = $conn->query("select * from animais where id");
$rowProGeral = $listaProGeral->fetch_assoc();
$nRows = $listaProGeral->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Adoção</title>
</head>
<?php include 'header_cli.php'; ?>
<div class="container">
    <!-- BOTÃO -->
    <div class="text-end">
        <a href="adocao_insere.php" type="submit" class="btn btn-danger btn-block">Cadastrar Pet para Adoção</a>
    </div>
    <div class="row">
        <?php do { ?> <!-- Início da estrutura de repetição -->
            <div class="card col-md-4 me-5" style="width: 18rem;">
                <!-- imagem -->
                <img src="../images/<?php echo $rowProGeral['imagem_animal']; ?>" class="img-responsive img-rounded" style="height: 20em;">
                <div class="card-body">
                    <!-- nome -->
                    <h5 class="card-title text-center">
                        <strong><?php echo $rowProGeral['nome']; ?></strong>
                    </h5>
                    <!-- descricao -->
                    <p class="card-text"><?php echo $rowProGeral['descricao']; ?></p>
                    <!-- raça -->
                    <p class="card-text"><?php echo $rowProGeral['sexo']; ?></p>
                    <!-- botao -->
                    <a href="saiba_mais_animais.php?id=<?php echo $rowProGeral['id']; ?>" class="btn btn-danger">Saiba Mais</a>
                </div>
            </div>
        <?php } while ($rowProGeral = $listaProGeral->fetch_assoc()); ?> <!-- Final da estrutura de repetição -->
    </div>
</div>
</html>