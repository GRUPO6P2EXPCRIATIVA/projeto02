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
      <li class="nav-item">
        <a class="nav-link" href="formulario.php">Área de relato</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="noticias.php">Notícias</a>
      </li>

    </ul>
  </div>
</nav>
<div class="container">
	<div class="alert alert-success" role="alert"><h4 id="h1home">Com mais de 327 mortes, SP bate recorde de óbitos e de novos casos confirmados de Covid-19</h4></div>
	 <p class="text-inline">Em meio a um processo de abertura econômica e redução das regras de distanciamento social, o Estado de São Paulo voltou a bater recorde de mortes e casos nas últimas 24 horas.<br>
	 O número de óbitos chegou a 327, elevando o total para 7.994 registros. O total de infecções subiu de 111.296 para 118.295, aumento de 6.999 pacientes de segunda para terça-feira.</p>
	 <img src="https://politica.estadao.com.br/blogs/radar-politico/wp-content/uploads/sites/39/2020/06/jose-henrique-germann_020620201610.jpg" alt="Foto: Governo de São Paulo" width="430" height="300">
	 <p>Mais informações em <a href="https://saude.estadao.com.br/noticias/geral,com-mais-327-mortes-sao-paulo-bate-recorde-obitos-e-de-novos-casos-de-covid-19,70003322189" target="_blank">Estadão</a> Fonte: Governo do Estado de SP</p>
</div>
<div class="container">
	<div class="alert alert-success" role="alert"><h4 id="h1home">Coronavírus: Prefeitura de Curitiba faz alerta por isolamento: 'Tivemos um caso que a senhora positiva estava no mercado'</h4></div>
	 <p class="text-inline">Com aumento no número de casos e mortes, a Prefeitura de Curitiba fez um apelo para que as pessoas respeitem as medidas impostas para prevenção ao contágio do novo coronavírus.<br>
	 A secretária municipal da Saúde, Márcia Huçulak, ainda alertou, durante uma live nesta sexta-feira (12), para o perigo ainda maior do descumprimento do isolamento social pelas pessoas confirmadas com a doença.</p>
	 <img src="https://s2.glbimg.com/NxI6i0ogmGSWq1e49zHhF_LxTsY=/0x0:1280x854/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/d/q/hCqbEzR6WVPIxptn7yEQ/unidade-sentinela-anhangabau-teste-coronavirus-63-1280x854.jpg" alt="Foto: Governo de São Paulo" width="430" height="300">
	 <p>Mais informações em <a href="https://g1.globo.com/pr/parana/noticia/2020/06/12/prefeitura-de-curitiba-faz-alerta-por-isolamento-tivemos-um-caso-que-a-senhora-positiva-estava-no-mercado.ghtml" target="_blank">G1-Globo</a> Fonte: Governo do Estado do PR</p>
</div>
</body>
</html>