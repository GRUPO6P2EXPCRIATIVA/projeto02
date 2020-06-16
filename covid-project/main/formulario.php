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
<div class="container contact-form">
            <div class="contact-image">
				<img src="https://abrilsaude.files.wordpress.com/2020/02/virus.png" alt="covid"/>
            </div>
            <form action= "cadastrouser.php" method="POST">
                <h3>Área de relato</h3>
                <div class="form-check">
					<input type="checkbox" class="form-check-input" name="check">
					<label class="form-check-label" for="exampleCheck1">Gostaria que seu relatorio fosse anonimo?</label>
				 </div>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Seu nome" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="cidade" class="form-control" placeholder="Sua cidade e estado" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="idade" class="form-control" placeholder="Sua idade" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="relato" class="form-control" placeholder="Seu relato" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</div>
</body>

</html>