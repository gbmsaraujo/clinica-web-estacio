CREATE SCHEMA clinica_web;

USE clinica_web;

CREATE TABLE IF NOT EXISTS `paciente` (
  `cpf` char(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(1) NOT NULL,
  PRIMARY KEY (`cpf`)
);


CREATE TABLE IF NOT EXISTS `consulta` (
  `id` INT NOT NULL PRIMARY KEY,	
  `cpf_paciente` char(11) NOT NULL,
  `data` date NOT NULL,
  `exame` varchar(50) NOT NULL,
  
  FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`)
  
);


ALTER TABLE clinica_web.paciente 
CHANGE COLUMN login email varchar(50);


INSERT INTO paciente 
VALUES('13975488874','Gabriel Araujo', '1993-02-15', 'M', 'Rua larica', 55, 'Apt 230', 'Riachuelo', 'RJ', 'RJ', 'gabriel.araujo@gmail.com', '123456', 1 );
