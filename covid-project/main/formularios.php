<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CoronaAlive</title>
	<link rel="icon" href="images/icon-virus.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">CoronaAlive</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Início <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="formulario.php">Área de relato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Notícias</a>
      </li>

    </ul>
  </div>
</nav>
<div class="dropdown" id="droprelatos">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Selecione o estado
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">AC</a>
    <a class="dropdown-item" href="#">AL</a>
    <a class="dropdown-item" href="#">AP</a>
    <a class="dropdown-item" href="#">AM</a>
    <a class="dropdown-item" href="#">BA</a>
    <a class="dropdown-item" href="#">CE</a>
      <a class="dropdown-item" href="#">DF</a>
    <a class="dropdown-item" href="#">ES</a>
    <a class="dropdown-item" href="#">GO</a>
    <a class="dropdown-item" href="#">MA</a>
    <a class="dropdown-item" href="#">MT</a>
    <a class="dropdown-item" href="#">MS</a>
      <a class="dropdown-item" href="#">MG</a>
    <a class="dropdown-item" href="#">PA</a>
    <a class="dropdown-item" href="#">PB</a>
    <a class="dropdown-item" href="#">PR</a>
    <a class="dropdown-item" href="#">PE</a>
    <a class="dropdown-item" href="#">PI</a>
      <a class="dropdown-item" href="#">RJ</a>
    <a class="dropdown-item" href="#">RN</a>
    <a class="dropdown-item" href="#">RS</a>
    <a class="dropdown-item" href="#">RO</a>
    <a class="dropdown-item" href="#">RR</a>
    <a class="dropdown-item" href="#">SC</a>
     <a class="dropdown-item" href="#">SP</a>
    <a class="dropdown-item" href="#">SE</a>
    <a class="dropdown-item" href="#">TO</a>
  </div>
</div>
<div id="borda">
	<div class="container">
		<div class="p-3 mb-2 bg-info text-white"><h4>Relatos do estado: PR</h4></div>
			<?php
				$queryrelato = mysqli_query($conexao, "SELECT * FROM usuario");
				while($exiberelato= mysqli_fetch_array($queryrelato)){
			?>
			<div class="p-3 mb-2 bg-info text-black"><h5><?php echo substr($exiberelato["Usuario_Nome"],0,200)?>, <?php echo substr($exiberelato["Usuario_Cidade"],0,200)?>, <?php echo substr($exiberelato["Usuario_Idade"],0,200)?></h5></div>
				<p><?php echo substr($exiberelato["Usuario_Relato"],0,300)?></p>
			<?php } ?>
</div>
</div>
</body>
</html>