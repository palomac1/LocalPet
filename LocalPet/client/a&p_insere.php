<?php
// INCLUIR  O ARQUIVO E FAZER A CONEXÃO
include('../conn/connect.php');

if ($_POST) {

    // GUARDA O NOME DA IMAGEM NO BANCO E O ARQUIVO NO DIRETÓRIO
    // if (isset($_POST['enviar'])) {
    $foto   =   $_FILES['imagem_animal'];
    preg_match("/\.(gif|bmp|png|jpg){1}$/i", $foto['name'], $ext);
    $nome_img = md5(uniqid(time())) . $ext[0];
    $tmp_img    =   $foto['tmp_name'];
    $dir_img    =   "../images/" . $nome_img;
    move_uploaded_file($tmp_img, $dir_img);
    // };

    // RECEBER OS DADOS DO FORMULÁRIO
    // ORGANIZAR OS CAMPOS NA MESMA ORDEM
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca_id = $_POST['raca_id'];
    $sexo = $_POST['sexo'];
    $porte = $_POST['porte'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];
    $enfermidades = $_POST['enfermidades'];
    $medicamentos = $_POST['medicamentos'];
    $localizacao = $_POST['localizacao'];
    $telefone = $_POST['telefone'];

    // CONSULTA SQL PARA INSERÇÃO DE DADOS
    $insertSQL = "INSERT INTO animais_ap
                    ( nome, especie, raca_id, sexo, porte, idade, descricao,
                    enfermidades, medicamentos, localizacao, telefone, imagem_animal)
                    VALUES
                    ('$nome', '$especie' ,$raca_id, '$sexo', '$porte', '$idade', '$descricao',
                    '$enfermidades', '$medicamentos', '$localizacao', '$telefone', '$nome_img' )
                    ";
    $resultado = $conn->query($insertSQL);
}

// SELECIONAR OS DADOS DA CHAVE ESTRANGEIRA
$consulta_fk    =   "SELECT * FROM raca ORDER BY nome ASC ";
$lista_fk       =   $conn->query($consulta_fk);
$row_fk         =   $lista_fk->fetch_assoc();
$totalRows_fk   =   ($lista_fk)->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Achados e Perdidos</title>
    <!-- LINKS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- ICON -->
    <link rel="icon" type="image/png" href="../images/favicon.png" />
</head>
<?php include 'header_cli.php'; ?>

<body>
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4 p-4">
            <div class="mb-4 d-flex justify-content-start align-items-center">
                <!-- TÍTULO -->
                <h4>Formulario de Achados e Perdidos</h4>
            </div>
            <div class="mb-1">
                <form id="formulario" method="post" action="a&p_insere.php" enctype="multipart/form-data">
                    <!-- NOME -->
                    <div class="mb-4">
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do animal" required>
                        </div>
                    </div>
                    <!-- ESPECIE -->
                    <div class="mb-4">
                        <label for="especie">Espécie:</label><br>
                        <input type="radio" class="form-check-input" name="especie" value="gato"> Gato
                        <input type="radio" class="form-check-input" name="especie" value="cachorro"> Cachorro
                    </div>
                    <!-- RAÇA -->
                    <div class="mb-4">
                        <label for="raca_id">Raça:</label>
                        <select class="form-select" aria-label="Default select example" name="raca_id" id="raca_id">
                            <option selected>Selecione a raça do animal</option>
                            <!-- Abre estrutura de repetição -->
                            <?php do { ?>
                                <option value="<?php echo $row_fk['id']; ?>">
                                    <?php echo $row_fk['nome']; ?>
                                </option>
                            <?php } while ($row_fk = $lista_fk->fetch_assoc());
                            $rows_fk = mysqli_num_rows($lista_fk);
                            if ($rows_fk > 0) {
                                mysqli_data_seek($lista_fk, 0);
                                $rows_fk = $lista_fk->fetch_assoc();
                            };
                            ?>
                        </select>
                    </div>
                    <!-- SEXO -->
                    <div class="mb-4">
                        <label for="sexo">Sexo:</label><br>
                        <input type="radio" class="form-check-input" name="sexo" value="Macho"> Macho
                        <input type="radio" class="form-check-input" name="sexo" value="Femea"> Fêmea
                    </div>
                    <!-- PORTE -->
                    <div class="mb-4">
                        <label for="porte">Porte:</label><br>
                        <input type="radio" class="form-check-input" name="porte" value="pequeno"> Pequeno
                        <input type="radio" class="form-check-input" name="porte" value="medio"> Médio
                        <input type="radio" class="form-check-input" name="porte" value="grande"> Grande
                    </div>
                    <!-- IDADE -->
                    <div class="mb-4">
                        <label for="idade">Idade:</label><br>
                        <input type="radio" class="form-check-input" name="idade" value="filhote"> Filhote
                        <input type="radio" class="form-check-input" name="idade" value="adulto"> Adulto
                        <input type="radio" class="form-check-input" name="idade" value="idoso"> Idoso
                    </div>
                    <!-- CARACT. FÍSICAS -->
                    <div class="mb-4">
                        <label for="descricao" required>Características Físicas:</label>
                        <textarea name="descricao" id="descricao" class="form-control" placeholder="Ex: manchas, cor do pelo. cor dos olhos, etc."></textarea>
                    </div>
                    <!-- SAÚDE -->
                    <div class="mb-4">
                        <label for="enfermidades">Possui algum problema de saúde e/ou deficiência?</label>
                        <textarea name="enfermidades" id="enfermidades" class="form-control" placeholder="Digite qual se houver"></textarea>
                    </div>
                    <!-- MEDICAÇÃO -->
                    <div class="mb-4">
                        <label for="medicamentos">Toma algum tipo de medicação?</label>
                        <input type="text" class="form-control" name="medicamentos" id="medicamentos" placeholder="Digite qual se houver" required>
                    </div>
                    <!-- LOCALIZAÇAO -->
                    <div class="mb-4">
                        <label for="localizacao" required>Visto por último:</label>
                        <textarea name="localizacao" id="localizacao" class="form-control" placeholder="Ex: Onde foi visto pela última vez, horário"></textarea>
                    </div>
                    <!-- TELEFONE -->
                    <div class="mb-4">
                        <label for="telefone">Telefone para contato:</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <!-- IMAGEM -->
                    <div class="mb-4">
                        <label for="imagem_animal" class="form-label">Imagem do animal:</label>
                        <input class="form-control" type="file" id="imagem_animal" name="imagem_animal">
                    </div>
                    <!-- BOTÃO -->
                    <div class="mb-2">
                        <button type="submit" id="enviar" class="col-12 btn btn-danger justify-content-between ">
                            <span>Enviar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
