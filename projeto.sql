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
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,	
  `cpf_paciente` char(11) NOT NULL,
  `data` date NOT NULL,
  `exame` varchar(50) NOT NULL,
  
  FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`) ON DELETE CASCADE 
  
);

-- Este usuário está registrado como adiministrador (nivel = 2) , faça login ele para acessar a pagina de admin. Os demais usuários cadastrados serão cadastrados como usuários normais (nivel = 1)
 
INSERT INTO paciente 
VALUES('13975488874','ADMIN', '1993-02-15', 'M', 'Rua larica', 55, 'Apt 230', 'Riachuelo', 'RJ', 'RJ', 'admin@gmail.com', '123', 2 );
