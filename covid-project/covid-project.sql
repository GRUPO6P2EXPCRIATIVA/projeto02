-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.16-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para covidproject
CREATE DATABASE IF NOT EXISTS `covidproject` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `covidproject`;

-- Copiando estrutura para tabela covidproject.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Usuario_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario_Anonimo` int(11) NOT NULL DEFAULT 0,
  `Usuario_Nome` varchar(50) NOT NULL,
  `Usuario_Cidade` varchar(50) DEFAULT NULL,
  `Usuario_Idade` int(11) NOT NULL,
  `Usuario_Relato` varchar(300) NOT NULL,
  PRIMARY KEY (`Usuario_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela covidproject.usuario: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`Usuario_Codigo`, `Usuario_Anonimo`, `Usuario_Nome`, `Usuario_Cidade`, `Usuario_Idade`, `Usuario_Relato`) VALUES
	(1, 0, 'Ricardo Xavier de Souza', 'Lages', 41, 'Já enfrentei de tudo: de afogamento a acidente de carro. Mas nada se compara à Covid-19, no dia em que recebi alta, perguntei à médica o motivo da minha internação. Quando ela disse Covid, caí no choro e agradeci a Deus por estar vivo.'),
	(2, 0, 'Anna Poloni', 'Curitiba', 33, 'As pessoas não estão levando a doença a sério. Não entendem os perigos que estão correndo e quanto estão expondo as pessoas que amam. Ainda não há vacina nem tratamento.');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
