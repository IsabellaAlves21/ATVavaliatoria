<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername="marazul.mywire.org";
$username="imobiliaria";
$password="zbSbMdmRjmCMNP4J";
$dbname="imobiliaria";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}


  $tipo = $_POST['tipo'];
  $transacao = $_POST['transacao'];
  $descricao = $_POST['descricao'];
  $endereco = $_POST['endereco'];
  $preco = $_POST['preco'];
 
  $sql = "INSERT INTO imoveis (tipo, transacao, descricao, endereco,preco) VALUES ('$tipo', '$transacao', '$descricao', '$endereco ','$preco ')";

  if (mysqli_query($conn, $sql)) {
      echo "<span>Novo registro criado com sucesso</span>";
  } else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Fechar conexão com o banco de dados
  mysqli_close($conn);
}
?>

<?php include 'cabecalho.php';?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMOBILIARIA</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="container">
<form  class="formulario_cadastro" method="post">
<h2 class="cadastrar_titulo">Cadastrar Novo Imóvel</h2>
<label for="tipo">Tipo de Imóvel:</label>
<select id="tipo" name="tipo">
<option value="casa">Casa</option>
<option value="apartamento">Apartamento</option>
<option value="terreno">Terreno</option>
<!-- Adicione mais opções conforme necessário -->
</select><br><br>
<label for="transacao">Transação:</label>
<select id="transacao" name="transacao">
<option value="alugar">Alugar</option>
<option value="vender">Vender</option>
</select><br><br>
<label for="descricao">Descrição:</label><br>
<textarea id="descricao" name="descricao" rows="4" cols="50"></textarea><br><br>
<label for="endereco">Endereço:</label>
<input type="text" id="endereco" name="endereco"><br><br>
<label for="preco">Preço:</label>
<input type="text" id="preco" name="preco"><br><br>
<button  class="btn-enviar btn3"type="submit">Cadastrar</button>
</form>
<footer>
        <div class="footer-container">
            <div class="footer-left">
                <h3>Imobiliaria</h3>
                <p>&copy; 2024 Imobiliaria. Todos os direitos reservados.</p>
            </div>
            <div class="footer-center">
                <h4>Contatos</h4>
                <p>Email: contato@imobiliaria.com</p>
                <p>Telefone: (11) 1234-5678</p>
                <p>Endereço: Rua Exemplo, 123, Cidade, Estado</p>
            </div>
            <div class="footer-right">
                <h4>Redes Sociais</h4>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>
</body>
</html>
</body>
</html>