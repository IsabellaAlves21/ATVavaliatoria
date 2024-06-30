<?php
$servername="localhost";
$username= "root";
$password="usbw";
$dbname= "imobiliaria";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imobiliaria</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="container">
    
  <header>
  <nav class="navbar">
        <a class="navbar-home" href="index.php">HOME</a>
        <div class="navbar-listas" id="navbar-listas">
          <ul class="navbar-lista">
            <li class="nav-item">
              <a class="nav-link" href="cadastrar_imoveis.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_imoveis.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Imoveis
              </a>
            </li>

          </ul>
        </div>
      </nav>
      <h1 class="titulo">IMOBILIARIA</h1>
  </header>
  </body>
</html>