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

if (isset($_POST['nome']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = "insert into comentarios (nome, mensagem) values ('$nome', '$mensagem')";
    $result = $conn->query($sql);
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fullstackeletro.css" rel="stylesheet">
    <title>Contato - Full Stack Eletro </title>

</head>

<body>


    <body>
        <!-- Inicio menu de paginas -->
        <?php
     include_once('menu.html');
    ?>
        <!-- Fim menu de paginas -->

        <h2>Contato</h2>
        <hr>

        <!-- Inicio contatos-->
        <section contato>
            <div class="email">

                <img src="./_imagens/e_mail.png" alt=" E-mail fullstackeletro.com">
                <p class="email"> E-mail
                    eletrofullstack.com </p>
            </div>

            <div class="whatsapp">

                <img src="./_imagens/whatsapp.jpg">
                <p class="whatsapp">Whatsapp (032) 9999-3333 </p>
            </div>
        </section>
        <!--Fim contatos-->



        <!--Inicio do formulario-->
        <form method="post" action="" >
        <h4>Nome: </h4> 
        <input type="text" name="nome" id="nome" placeholder="Nome" style="width: 400px">        
            <h4>Mensagem: </h4>        
            <textarea type="text" name="mensagem" placeholder="Escreva sua mensagem" style="width: 400px" cols="30" rows="10"></textarea>  
            <br>
            <input type="submit" name="submit" value="Enviar">                 
               </form>
        <!--Fim do formulario-->   

        <?php

$sql = "select * from comentarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($rows = $result->fetch_assoc()){
echo "Data: ", $rows['data'], "<br>";
echo "Nome: ", $rows['nome'], "<br>";
echo "Mensagem: ", $rows['mensagem'], "<br>";
echo "<hr>";




}
}else{
echo "Mensagem não inserida";
} 

 ?>




        <div class="pagamento1">
            <h4>Formas de Pagamento </h4>

            <br>

            <img src="./_imagens/formasdepagamento.png" alt="Formas de Pagamento">
            <br>
            <br>
            <p class="copy">&copy; Full Stack Eletro </p>
        </div>

    </body>

</html>