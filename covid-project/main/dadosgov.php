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
<table id="casos" class="table table-dark">
  <thead>
    <h1>Dados da covid no Brasil fonte: Governo Brasileiro</h1>
    <tr>
      <th scope="col">Estado</th>
      <th scope="col">Casos</th>
      <th scope="col">Mortes</th>
      <th scope="col">Data atualizada</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">BRASIL</th>
      <td>828.810</td>
      <td>41.828</td>
      <td>12/06/2020</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AC</th>
      <td>9.225</td>
      <td>254</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">AL</th>
      <td>20.031</td>
      <td>701</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">AP</th>
      <td>15.683</td>
      <td>312</td>
      <td>12/06/2020</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AM</th>
      <td>55.111</td>
      <td>2.429</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">BA</th>
      <td>34.665</td>
      <td>1.039</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">CE</th>
      <td>75.705</td>
      <td>4.788</td>
      <td>12/06/2020</td>
    </tr>
  
  </thead>
  <tbody>
    <tr>
      <th scope="row">DF</th>
      <td>21.396</td>
      <td>282</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">ES</th>
      <td>25.257</td>
      <td>986</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">GO</th>
      <td>7.846</td>
      <td>194</td>
      <td>12/06/2020</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">MA</th>
      <td>57.605</td>
      <td>1.399</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">MT</th>
      <td>5.363</td>
      <td>175</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">MS</th>
      <td>3.001</td>
      <td>28</td>
      <td>12/06/2020</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">MG</th>
      <td>20.106</td>
      <td>446</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">PA</th>
      <td>66.328</td>
      <td>4.132</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">PB</th>
      <td>26.556</td>
      <td>610</td>
      <td>12/06/2020</td>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">PR</th>
      <td>8.605</td>
      <td>294</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">PE</th>
      <td>43.872</td>
      <td>3.694</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">PI</th>
      <td>9.337</td>
      <td>317</td>
      <td>12/06/2020</td>
    </tr>
  
  </thead>
  <tbody>
    <tr>
      <th scope="row">RJ</th>
      <td>77.784</td>
      <td>7.147</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">RN</th>
      <td>13.501</td>
      <td>514</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">RS</th>
      <td>14.384</td>
      <td>337</td>
      <td>12/06/2020</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RO</th>
      <td>11.224</td>
      <td>296</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">RR</th>
      <td>6.712</td>
      <td>192</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td>13.165</td>
      <td>191</td>
      <td>12/06/2020</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">SP</th>
      <td>167.900</td>
      <td>10.368</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">SE</th>
      <td>11.534</td>
      <td>305</td>
      <td>12/06/2020</td>
    </tr>
    <tr>
      <th scope="row">TO</th>
      <td>6.744</td>
      <td>128</td>
      <td>12/06/2020</td>
    </tr>
  </tbody>
</table>
</body>
</html>