<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstackeletro";

//Criando conexão
$conn = mysqli_connect($servername, $username, $password, $database);


//Verificar conexão
if (!$conn){
    die("A conexão ao BD falhou:" .  mysqli_connect_erro());
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fullstackeletro.css" rel="stylesheet">
    <title>Produtos</title>
    <script src="./produtos.js"></script>

</head>

<body >
    <!-- Inicio menu de paginas -->
    <?php
     include_once('menu.html');
    ?>
    <!-- Fim menu de paginas -->

    <h2>Produtos</h2>
    <hr>


    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibir_todos('global')"> Todos os Produtos (16) </li>
            <li onclick="exibir_eletro('geladeira')"> Geladeiras (4) </li>
            <li onclick="exibir_eletro('fogao')"> Fogões (4)</li>
            <li onclick="exibir_eletro('microondas')"> Microondas (3)</li>
            <li onclick="exibir_eletro('lavaroupas')"> Lavadora de Roupas (2)</li>
            <li onclick="exibir_eletro('lavaloucas')"> Lava-Louças (3) </li>
        </ul>
    </section>.


    <!-- Inicio da div de imagens produtos -->
    <section class="produtos">
<?php

    $sql = "select * from produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while ($rows = $result->fetch_assoc()){     

     ?>

     <div class="fotos_produtos" id= "<?php echo $rows["categoria"]; ?>" style="display: block;">
            <img src="<?php echo $rows["imagem"]; ?>" width="120px"
                alt="Geladeira Brastemp Frost Free Side 500 litros" onclick="exibir_produtos(this)">
            <br>
            <div class="descricao"> <?php echo $rows["descricao"]; ?> </div>
            <hr>
            <div class="descricao"> <strike> De R$ <?php echo $rows["preco"]; ?> </strike> </div>
            <div class="preco" > Por R$ <?php echo $rows["precofinal"]; ?> </div>
        </div>

 <?php     
 }    
}else {
echo "Nenhum produto cadastrado";
}

?>
        


    </section>

    <!-- Fim da div de imagens produtos -->
    <br>
    <br>
    <br>

    <div class="pagamento">
        <h4>Formas de Pagamento </h4>

        <br>

        <img src="./_imagens/formasdepagamento.png" alt="Formas de Pagamento">
        <br>
        <br>
        <p class="copy">&copy; Full Stack Eletro </p>
    </div>


</body>

</html>