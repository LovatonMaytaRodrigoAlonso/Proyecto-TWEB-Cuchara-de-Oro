# Proyecto-TWEB-Cuchara-de-Oro
Hola! En este repositorio se almacenará el proyecto de Cuchara de Oro hecho en NetBeans.

SCRIPT DE LA BASE DE DATOS (cuchara_de_oro):

create database cuchara_de_oro;
use cuchara_de_oro;
CREATE TABLE CLIENTE
( 
	CLI_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	CLI_Nombres          varchar(15)  NOT NULL ,
	CLI_Correo           varchar(35)  NOT NULL ,
	CLI_Password       varchar(20)  NOT NULL ,
	CLI_FotoPerfil	varchar(250)
);

CREATE TABLE COMIDA
( 
	COM_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	COM_Nombre           varchar(18)  NOT NULL ,
	COM_Precio           decimal(10,2)  NOT NULL ,
	COM_Categoria        int  NOT NULL ,
	COM_Imagen	varchar(250) NOT NULL 
);

CREATE TABLE PEDIDO
( 
	PED_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	CLI_ID               int  NOT NULL ,
	PED_Fecha            datetime  NOT NULL ,
	PED_Pago			 decimal(10,2) NOT NULL,
	PED_MetodoPago		 varchar(18) NOT NULL,
	PED_Estado           varchar(10)  NOT NULL 
);

CREATE TABLE RECLAMOS
( 
	REC_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	REC_Nombres          varchar(15)  NOT NULL ,
	REC_Apellido_Paterno        varchar(40)  NOT NULL ,
    	REC__Apellido_Materno        varchar(40)  NOT NULL ,
    	REC_Direccion        varchar(50)  NOT NULL ,
    	REC_TipoDoc          varchar(15)  NOT NULL ,
	REC_Doc              int  NOT NULL ,
    	REC_Telefono         int  NOT NULL ,
	REC_Correo           varchar(35)  NOT NULL ,
	REC_BienAdq          int  NOT NULL ,
    	REC_Importe 		 decimal(10,2) NOT NULL,
    	REC_Evidencia		 varchar(250),
    	REC_Comentario		 varchar(100) NOT NULL
);

CREATE TABLE PEDIDO_DETALLES
( 
	DET_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	COM_ID               int NOT NULL ,
	DET_Cantidad		 int NOT NULL ,
	PED_ID               int NOT NULL 
);

CREATE TABLE CATEGORIAS
( 
	CAT_ID               int PRIMARY KEY AUTO_INCREMENT NOT NULL ,
	CAT_Nombre			 varchar(18) NOT NULL
);

ALTER TABLE PEDIDO
	ADD  FOREIGN KEY (CLI_ID) REFERENCES CLIENTE(CLI_ID)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION;

ALTER TABLE PEDIDO_DETALLES
	ADD  FOREIGN KEY (COM_ID) REFERENCES COMIDA(COM_ID)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION;

ALTER TABLE PEDIDO_DETALLES
	ADD  FOREIGN KEY (PED_ID) REFERENCES PEDIDO(PED_ID)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION;
        
ALTER TABLE COMIDA
	ADD  FOREIGN KEY (COM_Categoria) REFERENCES CATEGORIAS(CAT_ID)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION;
        
ALTER TABLE RECLAMOS
	ADD  FOREIGN KEY (REC_BienAdq) REFERENCES CATEGORIAS(CAT_ID)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION;

INSERT INTO CATEGORIAS(CAT_Nombre) VALUES ('Menu');
INSERT INTO CATEGORIAS(CAT_Nombre) VALUES ('Menu Marino');
INSERT INTO CATEGORIAS(CAT_Nombre) VALUES ('Menu Parrilla');
INSERT INTO CATEGORIAS(CAT_Nombre) VALUES ('Bebida');

insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Aji de gallina',10.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Arroz con pollo',11.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Cau cau',10.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Tallarines verdes',10.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Lomo saltado',12.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Seco de carne',15.00,1);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Chicha morada',7.00,4);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Limonada frozen',7.00,4);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Maracuya',7.00,4);
insert into comida(COM_Nombre,COM_Precio,COM_Categoria) values('Inca kola',8.00,4);

INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (11, 'Anticuchos', 12.00, 1);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (12, 'Picante de carne', 15.00, 1);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (13, 'Chanfainita', 18.00, 1);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (14, 'Arroz chaufa de mariscos', 18.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (15, 'Brochetas de langosta y concha', 16.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (16, 'Ceviche de pescado', 20.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (17, 'Chicharrón de pescado', 18.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (18, 'Paela de mariscos', 20.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (19, 'Chicharrón de pota', 18.00, 2);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (20, 'Chuleta de carne', 16.00, 3);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (21, 'Parrilla económica', 20.00, 3);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (22, 'Costillas BBQ', 16.00, 3);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (23, 'Parrilla familiar', 30.00, 3);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (24, 'Parrilla clásica familiar ', 25.00, 3);
INSERT INTO `comida` (`COM_ID`, `COM_Nombre`, `COM_Precio`, `COM_Categoria`) VALUES (25, 'Parrilla para 2', 22.00, 3);

SELECT * FROM comida;

CREATE TABLE suscriptores (
    id INT AUTO_INCREMENT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    correo VARCHAR(255) NOT NULL
);

ALTER TABLE suscriptores
ADD COLUMN CantidadDeVeces INT DEFAULT 1;

ALTER TABLE suscriptores
MODIFY COLUMN id INT AUTO_INCREMENT;

ALTER TABLE suscriptores AUTO_INCREMENT = 1;

TRUNCATE TABLE suscriptores;
