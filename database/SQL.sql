CREATE DATABASE dbcars;
USE dbcars;

CREATE TABLE cars
(
	idcar 		INT AUTO_INCREMENT PRIMARY KEY,
	marca 		VARCHAR(20)		NOT NULL,
	modelo 		VARCHAR(50)		NOT NULL,
	color 		VARCHAR(50)		NOT NULL,
	afab 			CHAR(4)			NOT NULL,
	combustible	VARCHAR(30)		NOT NULL,
	placa 		CHAR(7)			NOT NULL,
	fotografia 	VARCHAR(90)		NULL,
	create_at 	DATETIME 		NOT NULL DEFAULT NOW(),
	update_at	DATETIME 		NULL
)ENGINE = INNODB;

INSERT INTO cars (marca, modelo, color, afab, combustible, placa) 
	VALUES
	('Toyota', 'Corolla', 'blanco', '2021', 'Gasolina Premiun', 'AR5-Q22'),
	('Nissan', 'Sentra', 'anaranjado', '2023', 'Gasolina Premiun', 'QA4-2A1');

SELECT * FROM cars;