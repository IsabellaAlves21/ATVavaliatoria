<?php
//conectar com o banco
$servername="marazul.mywire.org";
$username="imobiliaria";
$password="zbSbMdmRjmCMNP4J";
$dbname="imobiliaria";
 
$conn=mysqli_connect($servername, $username,$password, $dbname);
//verificar a conexão
if(!$conn){
    die ("erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
    //Recuperar as informações do banco
    $sql = "SELECT *FROM imoveis";
    $resultado = mysqli_query($conn,$sql);
?>
 
 
 
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imobiliaria</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
 <h1 class="titulo"> Imobiliaria</h1>
 <?php include 'cabecalho.php';?>
 <h1>Imoveis</h1>
 <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th>Tipo</th>
    <th>Transação</th>
    <th>Descrição</th>
    <th>Endereço</th>
    <th>Preço</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM imoveis";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='tipo dados'>" . $row["tipo"] . "</td>";
                echo "<td class='transacao dados'>" . $row["transacao"] . "</td>";
                echo "<td class='descricao dados'>" . $row["descricao"] . "</td>";
                echo "<td class='endereco dados'>" . $row["endereco"] . "</td>";
                echo "<td class='preco dados'>R$ " . $row["preco"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum imóvel cadastrado.</td></tr>";
        }
        ?>
        </tbody>
 
    </table>
 
 
 </div>
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
<?php
mysqli_close($conn);
?>