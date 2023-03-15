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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Ar Condicionado</title>
</head>
<body>
     <!-- inclusão do header  -->
     <?php include 'header.html';?>
        <!-- fim do header  -->
<main>
    <div class="content">
        <div class="left-side">
            <h1><strong><?php echo $row_produto['descri_produto']?></strong></h1>
            <p><strong>Descrição do Produto:&nbsp;&nbsp;</strong><?php echo $row_produto['resumo_produto'];?></p>
            <p><strong>Instalação:&nbsp;&nbsp;</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, soluta facere ab ipsum fugiat et dicta eos quibusdam debitis beatae impedit cumque accusamus dolorem. Quisquam suscipit ad reiciendis. Perferendis, velit.</p>
        </div>
        <div class="rigth-side">
            <img src="img/<?php echo $row_produto['imagem_produto']?>"> 
        </div>
    </div>
</main>    
</body>
</html>