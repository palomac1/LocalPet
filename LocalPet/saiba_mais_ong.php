<?php
// Incluir arquivo para fazer a conexão
include("conn/connect.php");
$id = $_GET['id'];
// Consulta para trazer os dados e se necessário filtrar
$lista_destaque      =   $conn->query("SELECT * FROM ongs WHERE id = $id;");
$row_destaque        =   $lista_destaque->fetch_assoc();
$totalRows_destaque  =   ($lista_destaque)->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Detalhes ONGs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="fundofixo">
    <?php include 'header.php'?>
    <div class="container">
        <div class="row">
            <?php do { ?>
                <!-- abre thumbnail/card -->
                <div class="col-sm-12 col-md-12 ">
                    <!-- dimensionamento -->
                    <div class="card">
                        <a href="saiba_mais_ong.php?id=<?php echo $row_destaque['id']; ?>">
                            <img src="images/<?php echo $row_destaque['imagem_ong']; ?>" alt="" class="rounded mx-auto d-block" style="height: 20em;">
                        </a>
                        <br>
                        <div class="caption text-center">
                            <h3 class="text">
                                <strong><?php echo $row_destaque['nome']; ?></strong>
                            </h3>
                            <p class="text">
                                <strong><?php echo $row_destaque['descricao']; ?></strong>
                            </p>
                            <h5>Endereço:</h5>
                            <p class="text">Logradouro:
                                <?php echo $row_destaque['logradouro']; ?>
                            </p>
                            <p class="text">Número:
                                <?php echo $row_destaque['num']; ?>
                            </p>
                            <p class="text">Bairro:
                                <?php echo $row_destaque['bairro']; ?>
                            </p>
                            <p class="text">Telefone:
                                <?php echo $row_destaque['telefone']; ?>
                            </p>
                        </div><!-- fecha caption -->
                    </div><!-- fecha thumbnail -->
                </div><!-- fecha dimensionamento -->
                <!-- fecha thumbnail/card -->
            <?php } while ($row_destaque = $lista_destaque->fetch_assoc()); ?>
            <!-- fecha a estrutura de repetição -->

        </div><!-- fecha row -->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php mysqli_free_result($lista_destaque); ?>
