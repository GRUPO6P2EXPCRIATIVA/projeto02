<?php 
		
include("conexao.php");
		
if(empty($_POST["nome"]) and empty($_POST["cidade"]) and empty($_POST["idade"]) and empty($_POST["relato"])) {echo "";} else {
							
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$idade = $_POST["idade"];
$relato = $_POST["relato"];
											
											
$queryCadastro = mysqli_query($conexao,"INSERT INTO usuario (Usuario_Nome,Usuario_Cidade,Usuario_Idade,Usuario_Relato) VALUES ('$nome','$cidade','$idade','$relato')");
											
		if($queryCadastro) {
			?><script language = "javascript">
				if (window.confirm("Sucesso ao gravar dados, obrigado pelo relato!")) { 
					window.open("formulario.php", "Obrigado pelo relato!");
				}				
				</script><?php
		}		
		else {			
			echo("Error: " . mysqli_error($conexao));
			}
			
		}		
	
		
	?>