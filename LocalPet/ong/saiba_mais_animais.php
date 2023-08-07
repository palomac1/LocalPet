<?php
// Incluir arquivo para fazer a conexão
include("../conn/connect.php");
$id = $_GET['id'];
// Consulta para trazer os dados e se necessário filtrar
$lista_destaque      =   $conn->query("SELECT * FROM animais WHERE id = $id;");
$row_destaque        =   $lista_destaque->fetch_assoc();
$totalRows_destaque  =   ($lista_destaque)->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Detalhes dos Animais</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="fundofixo">
    <?php include 'header_ong.php'?>
    <div class="container">
        <div class="row">
            <?php do { ?>
                <!-- abre thumbnail/card -->
                <div class="col-sm-12 col-md-12 ">
                    <!-- dimensionamento -->
                    <div class="card">
                        <a href="saiba_mais_animais.php?id=<?php echo $row_destaque['id']; ?>">
                            <img src="../images/<?php echo $row_destaque['imagem_animal']; ?>" alt="" class="rounded mx-auto d-block" style="height: 20em;">
                        </a>
                        <br>
                        <div class="caption text-center">
                            <h3 class="text">
                                <strong><?php echo $row_destaque['nome']; ?></strong>
                            </h3>
                            <p class="text">
                                <strong>Descriçao: <?php echo $row_destaque['especie']; ?></strong>
                            </p>
                            <p class="text">Raça:
                                <?php echo $row_destaque['raca_id']; ?>
                            </p>
                            <p class="text">Sexo:
                                <?php echo $row_destaque['sexo']; ?>
                            </p>
                            <p class="text">Porte:
                                <?php echo $row_destaque['porte']; ?>
                            </p>
                            <p class="text">Idade:
                                <?php echo $row_destaque['idade']; ?>
                            </p>
                            <p class="text">Descrição:
                                <?php echo $row_destaque['descricao']; ?>
                            </p>
                            <p class="text">Enfermidades:
                                <?php echo $row_destaque['enfermidades']; ?>
                            </p>
                            <p class="text">Medicamentos:
                                <?php echo $row_destaque['medicamentos']; ?>
                            </p>
                            <p class="text">Vacinas:
                                <?php echo $row_destaque['vacinas']; ?>
                            </p>
                            <p class="text">Comportamento:
                                <?php echo $row_destaque['comportamento']; ?>
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
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php mysqli_free_result($lista_destaque); ?>