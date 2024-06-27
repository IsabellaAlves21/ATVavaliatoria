<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername="localhost";
$username= "root";
$password="usbw";
$dbname= "imobiliaria";

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
      echo "Novo registro criado com sucesso";
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
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<h2>Cadastrar Novo Imóvel</h2>
<form  method="post">
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
<button type="submit">Cadastrar</button>
</form>
 
</body>
</html>