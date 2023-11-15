DROP DATABASE IF EXISTS hospital;
create database hospital;

use hospital;

CREATE TABLE users(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL
);

CREATE TABLE Medico (
  ID_Medico INT PRIMARY KEY,
  Nome_Medico VARCHAR(100),
  CRM INT,
  CPF_Medico VARCHAR(14),
  Data_Nascimento_Medico TIMESTAMP,
  Genero_Medico CHAR,
  Telefone_Medico VARCHAR(11),
  Numero_Endereco_Medico INT,
  Complemento_Endereco_Medico VARCHAR(100),
  Nome_Endereco_Medico VARCHAR(100),
  Logradouro_Medico VARCHAR(100),
  E_mail_Medico VARCHAR(100),
  RG_Medico VARCHAR(12)
);

CREATE TABLE Paciente (
  ID_Paciente INT PRIMARY KEY,
  Data_Nascimento_Paciente TIMESTAMP,
  Condicao_Paciente VARCHAR(20),
  Telefone_Emergencia_Paciente VARCHAR(11),
  Logradouro_Paciente VARCHAR(100),
  Nome_Endereco_Paciente VARCHAR(100),
  Numero_Endereco_Paciente INT,
  Complemento_Endereco_Paciente VARCHAR(100),
  CPF_Paciente VARCHAR(14),
  RG_Paciente VARCHAR(12),
  Nome_Paciente VARCHAR(100),
  Genero_Paciente CHAR,
  E_mail_Paciente VARCHAR(100)
);

CREATE TABLE Enfermeiro (
  ID_Enfermeiro INT PRIMARY KEY,
  Nome_Enfermeiro VARCHAR(100),
  CIP VARCHAR(8),
  Data_Nascimento_Enfermeiro TIMESTAMP,
  Genero_Enfermeiro CHAR,
  CPF_Enfermeiro VARCHAR(14),
  RG_Enfermeiro VARCHAR(12),
  Nome_Endereco_Enfermeiro VARCHAR(100),
  Numero_Endereco_Enfermeiro INT,
  Complemento_Endereco_Enfermeiro VARCHAR(100),
  Logradouro_Enfermeiro VARCHAR(100),
  Telefone_Enfermeiro VARCHAR(11),
  E_mail_Enfermeiro VARCHAR(100)
);

CREATE TABLE Tipo (
  ID_tipo INT PRIMARY KEY,
  tipo VARCHAR(50)
);

CREATE TABLE Sala (
  Bloco_Sala CHAR,
  Numero_Sala INT,
  ID_Sala INT PRIMARY KEY,
  fk_Tipo_ID_tipo INT,
  FOREIGN KEY (fk_Tipo_ID_tipo) REFERENCES Tipo (ID_tipo) ON DELETE RESTRICT
);



CREATE TABLE Operacao_Paciente_Enfermeiro_Medico_Sala (
  fk_Paciente_ID_Paciente INT,
  fk_Enfermeiro_ID_Enfermeiro INT,
  fk_Medico_ID_Medico INT,
  fk_Sala_ID_Sala INT
);
 
ALTER TABLE Operacao_Paciente_Enfermeiro_Medico_Sala ADD CONSTRAINT FK_Operacao_Paciente_Enfermeiro_Medico_Sala_1
  FOREIGN KEY (fk_Paciente_ID_Paciente)
  REFERENCES Paciente (ID_Paciente)
  ON DELETE NO ACTION;
 
ALTER TABLE Operacao_Paciente_Enfermeiro_Medico_Sala ADD CONSTRAINT FK_Operacao_Paciente_Enfermeiro_Medico_Sala_2
  FOREIGN KEY (fk_Enfermeiro_ID_Enfermeiro)
  REFERENCES Enfermeiro (ID_Enfermeiro)
  ON DELETE NO ACTION;
 
ALTER TABLE Operacao_Paciente_Enfermeiro_Medico_Sala ADD CONSTRAINT FK_Operacao_Paciente_Enfermeiro_Medico_Sala_3
  FOREIGN KEY (fk_Medico_ID_Medico)
  REFERENCES Medico (ID_Medico)
  ON DELETE NO ACTION;
 
ALTER TABLE Operacao_Paciente_Enfermeiro_Medico_Sala ADD CONSTRAINT FK_Operacao_Paciente_Enfermeiro_Medico_Sala_4
  FOREIGN KEY (fk_Sala_ID_Sala)
  REFERENCES Sala (ID_Sala)
  ON DELETE NO ACTION;

-- INSERTS FOR TABLE users
INSERT INTO users (username, password, role) VALUES ('user1', 'password1', 'admin');
INSERT INTO users (username, password, role) VALUES ('user2', 'password2', 'doctor');
INSERT INTO users (username, password, role) VALUES ('user3', 'password3', 'nurse');

-- INSERTS FOR TABLE Medico
INSERT INTO Medico (ID_Medico, Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico) VALUES (1, 'Dr. John Doe', 123456, '123.456.789-00', '1980-01-01 00:00:00', 'M', '1234567890', 123, 'Complemento', 'Nome Endereco', 'Logradouro', 'email@example.com', '12345678');
INSERT INTO Medico (ID_Medico, Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico) VALUES (2, 'Dr. Jane Doe', 654321, '987.654.321-00', '1985-01-01 00:00:00', 'F', '0987654321', 456, 'Complemento', 'Nome Endereco', 'Logradouro', 'email@example.com', '87654321');

-- INSERTS FOR TABLE Paciente
INSERT INTO Paciente (ID_Paciente, Data_Nascimento_Paciente, Condicao_Paciente, Telefone_Emergencia_Paciente, Logradouro_Paciente, Nome_Endereco_Paciente, Numero_Endereco_Paciente, Complemento_Endereco_Paciente, CPF_Paciente, RG_Paciente, Nome_Paciente, Genero_Paciente, E_mail_Paciente) VALUES (1, '1990-01-01 00:00:00', 'Stable', '1234567890', 'Logradouro', 'Nome Endereco', 123, 'Complemento', '123.456.789-00', '12345678', 'John Doe', 'M', 'email@example.com');
INSERT INTO Paciente (ID_Paciente, Data_Nascimento_Paciente, Condicao_Paciente, Telefone_Emergencia_Paciente, Logradouro_Paciente, Nome_Endereco_Paciente, Numero_Endereco_Paciente, Complemento_Endereco_Paciente, CPF_Paciente, RG_Paciente, Nome_Paciente, Genero_Paciente, E_mail_Paciente) VALUES (2, '1995-01-01 00:00:00', 'Critical', '0987654321', 'Logradouro', 'Nome Endereco', 456, 'Complemento', '987.654.321-00', '87654321', 'Jane Doe', 'F', 'email@example.com');

-- INSERTS FOR TABLE Enfermeiro
INSERT INTO Enfermeiro (ID_Enfermeiro, Nome_Enfermeiro, CIP, Data_Nascimento_Enfermeiro, Genero_Enfermeiro, CPF_Enfermeiro, RG_Enfermeiro, Nome_Endereco_Enfermeiro, Numero_Endereco_Enfermeiro, Complemento_Endereco_Enfermeiro, Logradouro_Enfermeiro, Telefone_Enfermeiro, E_mail_Enfermeiro) VALUES (1, 'Nurse John', '123456', '1980-01-01 00:00:00', 'M', '123.456.789-00', '12345678', 'Nome Endereco', 123, 'Complemento', 'Logradouro', '1234567890', 'email@example.com');
INSERT INTO Enfermeiro (ID_Enfermeiro, Nome_Enfermeiro, CIP, Data_Nascimento_Enfermeiro, Genero_Enfermeiro, CPF_Enfermeiro, RG_Enfermeiro, Nome_Endereco_Enfermeiro, Numero_Endereco_Enfermeiro, Complemento_Endereco_Enfermeiro, Logradouro_Enfermeiro, Telefone_Enfermeiro, E_mail_Enfermeiro) VALUES (2, 'Nurse Jane', '654321', '1985-01-01 00:00:00', 'F', '987.654.321-00', '87654321', 'Nome Endereco', 456, 'Complemento', 'Logradouro', '0987654321', 'email@example.com');

-- INSERTS FOR TABLE Tipo
INSERT INTO Tipo (ID_tipo, tipo) VALUES (1, 'Tipo 1');
INSERT INTO Tipo (ID_tipo, tipo) VALUES (2, 'Tipo 2');

-- INSERTS FOR TABLE Sala
INSERT INTO Sala (Bloco_Sala, Numero_Sala, ID_Sala, fk_Tipo_ID_tipo) VALUES ('A', 101, 1, 1);
INSERT INTO Sala (Bloco_Sala, Numero_Sala, ID_Sala, fk_Tipo_ID_tipo) VALUES ('B', 201, 2, 2);

-- INSERTS FOR TABLE Operacao_Paciente_Enfermeiro_Medico_Sala
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (1, 1, 1, 1);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (2, 2, 2, 2);

INSERT INTO users(username, password, role) VALUES ('admin', 'admin', 'admin');