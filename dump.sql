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
  ID_Medico INT PRIMARY KEY AUTO_INCREMENT,
  Nome_Medico VARCHAR(100),
  CRM VARCHAR(4),
  CPF_Medico VARCHAR(14),
  Data_Nascimento_Medico DATE, -- Change the data type to DATE
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


INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Smith', '1234', '123.456.789-01', '1980-05-15', 'M', '12345678901', 42, 'Apt. 301', 'Medical Center', '123 Main St', 'dr.smith@email.com', 'AB123456');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Johnson', '5678', '987.654.321-01', '1975-10-20', 'F', '98765432101', 21, 'Suite 102', 'Health Plaza', '456 Oak St', 'dra.johnson@email.com', 'CD987654');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Davis', '9101', '543.210.987-65', '1988-02-08', 'M', '54321098765', 15, 'Floor 3', 'Wellness Tower', '789 Pine St', 'dr.davis@email.com', 'EF543210');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Martinez', '1122', '876.543.210-98', '1985-06-30', 'F', '87654321098', 30, 'Apt. 15', 'Care Center', '567 Elm St', 'dra.martinez@email.com', 'GH876543');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Wilson', '3344', '654.321.098-76', '1990-12-12', 'M', '65432109876', 50, 'Suite 5', 'MediHub', '890 Maple St', 'dr.wilson@email.com', 'IJ654321');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Lee', '5566', '123.987.456-32', '1982-09-25', 'F', '12398745632', 12, 'Floor 7', 'Life Clinic', '345 Oak St', 'dra.lee@email.com', 'KL123987');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Baker', '7788', '789.456.123-54', '1978-04-18', 'M', '78945612354', 25, 'Apt. 10', 'Healthy Living', '678 Pine St', 'dr.baker@email.com', 'MN789456');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Anderson', '9900', '987.654.321-99', '1983-11-08', 'F', '98765432199', 18, 'Suite 20', 'Wellbeing Center', '876 Elm St', 'dra.anderson@email.com', 'OP987654');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Taylor', '1122', '456.789.012-34', '1987-07-22', 'M', '45678901234', 35, 'Apt. 12', 'Healing Haven', '345 Maple St', 'dr.taylor@email.com', 'QR456789');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. White', '3344', '345.678.901-23', '1986-03-14', 'F', '34567890123', 28, 'Floor 4', 'Holistic Health', '456 Oak St', 'dra.white@email.com', 'ST345678');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Adams', '5566', '567.890.123-45', '1984-08-30', 'M', '56789012345', 23, 'Suite 8', 'Wellness Hub', '789 Pine St', 'dr.adams@email.com', 'UV567890');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Turner', '7788', '234.567.890-12', '1979-12-03', 'F', '23456789012', 17, 'Apt. 7', 'Revitalize Clinic', '890 Elm St', 'dra.turner@email.com', 'WX234567');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Hughes', '9900', '345.678.901-34', '1981-05-10', 'M', '34567890134', 40, 'Floor 6', 'Complete Care', '567 Oak St', 'dr.hughes@email.com', 'YZ345678');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dra. Parker', '1122', '456.789.012-56', '1980-11-18', 'F', '45678901256', 32, 'Apt. 25', 'Healing Hands', '678 Pine St', 'dra.parker@email.com', 'AB456789');

INSERT INTO Medico (Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico, Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico)
VALUES ('Dr. Evans', '3344', '567.890.123-67', '1977-07-07', 'M', '56789012367', 27, 'Suite 18', 'Health Haven', '890 Maple St', 'dr.evans@email.com', 'CD567890');





-- Inserts for Paciente table
INSERT INTO Paciente VALUES (1, '1990-01-01', 'Saudável', '12345678901', 'Rua A', 'Endereco A', 123, 'Apto 456', '123.456.789-01', 'AB123456', 'John Doe', 'M', 'john.doe@example.com');
INSERT INTO Paciente VALUES (2, '1985-05-15', 'Doente', '98765432109', 'Rua B', 'Endereco B', 456, 'Casa 789', '987.654.321-09', 'CD987654', 'Jane Doe', 'F', 'jane.doe@example.com');
INSERT INTO Paciente VALUES (3, '1988-08-22', 'Saudável', '11122233344', 'Rua C', 'Endereco C', 789, 'Apto 101', '111.222.333-44', 'EF111222', 'Bob Smith', 'M', 'bob.smith@example.com');
INSERT INTO Paciente VALUES (4, '1995-03-10', 'Doente', '99988877766', 'Rua D', 'Endereco D', 101, 'Casa 202', '999.888.777-66', 'GH999888', 'Alice Johnson', 'F', 'alice.johnson@example.com');
INSERT INTO Paciente VALUES (5, '1980-12-05', 'Saudável', '44455566677', 'Rua E', 'Endereco E', 202, 'Apto 303', '444.555.666-77', 'IJ444555', 'Charlie Brown', 'M', 'charlie.brown@example.com');
INSERT INTO Paciente VALUES (6, '1992-07-18', 'Doente', '33322211100', 'Rua F', 'Endereco F', 303, 'Casa 404', '333.222.111-00', 'KL333222', 'Eva Green', 'F', 'eva.green@example.com');
INSERT INTO Paciente VALUES (7, '1983-09-30', 'Saudável', '77788899900', 'Rua G', 'Endereco G', 404, 'Apto 505', '777.888.999-00', 'MN777888', 'David Miller', 'M', 'david.miller@example.com');
INSERT INTO Paciente VALUES (8, '1998-02-14', 'Doente', '66655544433', 'Rua H', 'Endereco H', 505, 'Casa 606', '666.555.444-33', 'OP666555', 'Fiona White', 'F', 'fiona.white@example.com');
INSERT INTO Paciente VALUES (9, '1987-06-25', 'Saudável', '22233344455', 'Rua I', 'Endereco I', 606, 'Apto 707', '222.333.444-55', 'QR222333', 'George Anderson', 'M', 'george.anderson@example.com');
INSERT INTO Paciente VALUES (10, '1994-11-08', 'Doente', '55544433322', 'Rua J', 'Endereco J', 707, 'Casa 808', '555.444.333-22', 'ST555444', 'Helen Turner', 'F', 'helen.turner@example.com');
INSERT INTO Paciente VALUES (11, '1989-04-03', 'Saudável', '88899900011', 'Rua K', 'Endereco K', 808, 'Apto 909', '888.999.000-11', 'UV888999', 'Jack Brown', 'M', 'jack.brown@example.com');
INSERT INTO Paciente VALUES (12, '1997-01-27', 'Doente', '00011122233', 'Rua L', 'Endereco L', 909, 'Casa 1010', '000.111.222-33', 'WX000111', 'Karen Davis', 'F', 'karen.davis@example.com');
INSERT INTO Paciente VALUES (13, '1986-08-14', 'Saudável', '22233344455', 'Rua M', 'Endereco M', 1010, 'Apto 1111', '222.333.444-55', 'YZ222333', 'Leo White', 'M', 'leo.white@example.com');
INSERT INTO Paciente VALUES (14, '1996-05-20', 'Doente', '55544433322', 'Rua N', 'Endereco N', 1111, 'Casa 1212', '555.444.333-22', 'AB111222', 'Mia Turner', 'F', 'mia.turner@example.com');
INSERT INTO Paciente VALUES (15, '1981-12-10', 'Saudável', '88899900011', 'Rua O', 'Endereco O', 1212, 'Apto 1313', '888.999.000-11', 'CD111222', 'Nathan Brown', 'M', 'nathan.brown@example.com');

-- INSERTS FOR TABLE Enfermeiro
INSERT INTO Enfermeiro VALUES 
(1, 'Nurse Anderson', 'A1234567', '1988-12-03', 'F', '45678901234', 'AB9876543', 'Apt 501', 501, 'Medical Center', '789 Maple St', '98765432101', 'nurse.anderson@example.com'),
(2, 'Nurse Martinez', 'B9876543', '1980-06-18', 'M', '12345678901', 'CD1234567', 'Suite 301', 301, 'Health Clinic', '654 Birch St', '12345678901', 'nurse.martinez@example.com'),
(3, 'Nurse Thompson', 'C6543210', '1992-05-15', 'F', '11122233344', 'EF1112233', 'Suite 102', 102, 'General Hospital', '123 Pine St', '11122233344', 'nurse.thompson@example.com'),
(4, 'Nurse Turner', 'D7890123', '1985-08-20', 'M', '22233344455', 'GH2223344', 'Apt 302', 302, 'Medical Center', '456 Oak St', '22233344455', 'nurse.turner@example.com'),
(5, 'Nurse Garcia', 'E3456789', '1987-03-10', 'F', '55566677788', 'IJ5556677', 'Suite 202', 202, 'Health Clinic', '654 Pine St', '55566677788', 'nurse.garcia@example.com'),
(6, 'Nurse Smith', 'F9012345', '1990-12-15', 'M', '88899900011', 'KL8889900', 'Apt 402', 402, 'General Hospital', '789 Elm St', '88899900011', 'nurse.smith@example.com'),
(7, 'Nurse Brown', 'G5678901', '1983-06-28', 'F', '11122233344', 'MN1112233', 'Suite 502', 502, 'Medical Center', '987 Oak St', '11122233344', 'nurse.brown@example.com'),
(8, 'Nurse Wilson', 'H2345678', '1981-11-03', 'M', '44455566677', 'OP4445566', 'Apt 301', 301, 'Health Clinic', '321 Birch St', '44455566677', 'nurse.wilson@example.com'),
(9, 'Nurse Johnson', 'I8901234', '1995-06-18', 'F', '66677788899', 'QR6667788', 'Suite 401', 401, 'General Hospital', '987 Pine St', '66677788899', 'nurse.johnson@example.com'),
(10, 'Nurse Martinez', 'J4567890', '1987-01-30', 'M', '11122233344', 'ST1112233', 'Apt 501', 501, 'Medical Center', '654 Elm St', '11122233344', 'nurse.martinez@example.com'),
(11, 'Nurse Lee', 'K1234567', '1989-09-15', 'F', '44455566677', 'UV4445566', 'Suite 502', 502, 'Health Clinic', '789 Birch St', '44455566677', 'nurse.lee@example.com'),
(12, 'Nurse Turner', 'L7890123', '1980-04-28', 'M', '77788899900', 'WX7778899', 'Apt 301', 301, 'General Hospital', '123 Pine St', '77788899900', 'nurse.turner@example.com'),
(13, 'Nurse Davis', 'M3456789', '1992-11-15', 'F', '11122233344', 'YZ1112233', 'Suite 402', 402, 'Medical Center', '456 Oak St', '11122233344', 'nurse.davis@example.com'),
(15, 'Nurse Turner', 'O5678901', '1981-11-12', 'F', '77788899900', 'CD7778899', 'Suite 301', 301, 'General Hospital', '654 Pine St', '77788899900', 'nurse.turner@example.com');

-- INSERTS FOR TABLE Tipo
INSERT INTO Tipo VALUES 
(1, 'Emergency'),
(2, 'Surgery'),
(3, 'General'),
(4, 'Pediatrics'),
(5, 'Cardiology'),
(6, 'Orthopedics'),
(7, 'Oncology'),
(8, 'Neurology'),
(9, 'Psychiatry'),
(10, 'Gynecology'),
(11, 'Urology'),
(12, 'Dermatology'),
(13, 'Radiology'),
(14, 'Internal Medicine'),
(15, 'Family Medicine');


INSERT INTO Sala VALUES 
('A', 101, 1, 1),
('B', 201, 2, 2),
('C', 301, 3, 3),
('D', 401, 4, 4),
('E', 501, 5, 5),
('F', 601, 6, 6),
('G', 701, 7, 7),
('H', 801, 8, 8),
('I', 901, 9, 9),
('J', 1001, 10, 10),
('K', 1101, 11, 11),
('L', 1201, 12, 12),
('M', 1301, 13, 13),
('N', 1401, 14, 14),
('O', 1501, 15, 15);

-- INSERTS FOR TABLE Operacao_Paciente_Enfermeiro_Medico_Sala
-- Inserts for Operacao_Paciente_Enfermeiro_Medico_Sala table
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (1, 1, 1, 1);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (2, 2, 2, 2);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (3, 3, 3, 3);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (4, 4, 4, 4);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (5, 5, 5, 5);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (6, 6, 6, 6);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (7, 7, 7, 7);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (8, 8, 8, 8);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (9, 9, 9, 9);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (10, 10, 10, 10);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (11, 11, 11, 11);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (12, 12, 12, 12);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (13, 13, 13, 13);
INSERT INTO Operacao_Paciente_Enfermeiro_Medico_Sala (fk_Paciente_ID_Paciente, fk_Enfermeiro_ID_Enfermeiro, fk_Medico_ID_Medico, fk_Sala_ID_Sala) VALUES (15, 15, 15, 15);

-- Inserts for users table
INSERT INTO users (username, password, role) VALUES ('admin', 'admin_password', 'admin');
INSERT INTO users (username, password, role) VALUES ('doctor1', 'doctor1_password', 'doctor');
INSERT INTO users (username, password, role) VALUES ('nurse1', 'nurse1_password', 'nurse');
INSERT INTO users (username, password, role) VALUES ('receptionist1', 'receptionist1_password', 'receptionist');
INSERT INTO users (username, password, role) VALUES ('patient1', 'patient1_password', 'patient');
INSERT INTO users (username, password, role) VALUES ('doctor2', 'doctor2_password', 'doctor');
INSERT INTO users (username, password, role) VALUES ('nurse2', 'nurse2_password', 'nurse');
INSERT INTO users (username, password, role) VALUES ('receptionist2', 'receptionist2_password', 'receptionist');
INSERT INTO users (username, password, role) VALUES ('patient2', 'patient2_password', 'patient');
INSERT INTO users (username, password, role) VALUES ('doctor3', 'doctor3_password', 'doctor');
INSERT INTO users (username, password, role) VALUES ('nurse3', 'nurse3_password', 'nurse');
INSERT INTO users (username, password, role) VALUES ('receptionist3', 'receptionist3_password', 'receptionist');
INSERT INTO users (username, password, role) VALUES ('patient3', 'patient3_password', 'patient');
INSERT INTO users (username, password, role) VALUES ('doctor4', 'doctor4_password', 'doctor');
INSERT INTO users (username, password, role) VALUES ('nurse4', 'nurse4_password', 'nurse');
-- Add more user inserts as needed
