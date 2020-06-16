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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/home">CoronaAlive</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/home">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/formulario">Área de relato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/noticias">Notícias</a>
      </li>

    </ul>
  </div>
</nav>
<table id="casos" class="table table-dark">
  <thead>
    <h1>Dados da covid no Brasil fonte: Relatos</h1>
    <tr>
      <th scope="col">Estado</th>
      <th scope="col">Casos</th>
      <th scope="col">Mortes</th>
      <th scope="col">Data atualizada</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RS</th>
      <td>14.384</td>
      <td>337</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  
  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  
  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>200</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">SP</th>
      <td>100</td>
      <td>100</td>
      <td>100</td>
    </tr>
  </tbody>
</table>
</body>
</html>