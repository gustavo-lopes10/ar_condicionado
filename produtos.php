<?php
include 'conn/connect.php';
$produto = $_GET['id_produto'];
$lista = $conn->query("select * from tbprodutos where id_produto = '$produto'");
$row_produto = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ar Condicionado</title>
</head>
<body>
     <!-- inclusão do header  -->
     <?php include 'header.html';?>
        <!-- fim do header  -->
<main>
    <div>
        <h3 class="titulo_produto"><strong><?php echo $row_produto['descri_produto']?></strong></h3>
    </div>
    <div class="produto_bloco">
        <img src="img/<?php echo $row_produto['imagem_produto']?>">
            <h3 class="texto_produto">
                <?php echo $row_produto['resumo_produto']; ?>
            </h3> 
        <div class="em_linha">
            <h3 class="preco">Valor do Produto - <?php echo "R$ ".number_format($row_produto['valor_produto'],2,) ?></h3>
            <button class="botao_produto" role="button">
                Comprar
            </button>
        </div>
    </div>
</main>    
</body>
</html>