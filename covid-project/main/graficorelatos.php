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
<div class="alert alert-success" role="alert"><h1 id="h1home">Dados da Covid-19 no Brasil Fonte: Relatos enviados</h1></div>
<canvas id="line-chart" style="height:40vh; width:80vw">
<script>
new Chart(document.getElementById("line-chart"), {
  type: 'bar',
  data: {
    labels: ["Primeiro relato/FEV","MAR","ABR","MAI","JUN"],
    datasets: [{ 
        data: [1000,5000,10000,18500,25000],
        label: "Casos",
        borderColor: "#3e95cd",
		backgroundColor: "#DCDCDC",
		borderWidth: 3,
        fill: true
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Grafico referente ao casos relatados'
    }
  }
});
</script>
</body>
</html>