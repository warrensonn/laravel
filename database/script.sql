-- Database script creation

-- Database Administration

CREATE DATABASE IF NOT EXISTS flowers ;
GRANT ALL PRIVILEGES ON `flowers`.* TO flowers@localhost;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
USE flowers ;


-- Creation of the database structure

# -----------------------------------------------------------------------------
#       TABLE : Product
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Product
 (
  id INT (3) auto_increment NOT NULL,
  description CHAR(50), 
  price DECIMAL (10,2) NOT NULL,
  image CHAR (50) NULL,  
  quantity INT(3) NOT NULL DEFAULT 4,
  PRIMARY KEY (id) 
 ) ENGINE=InnoDB;


# -----------------------------------------------------------------------------
#       TABLE : Orders
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Orders
 (
   id INT AUTO_INCREMENT NOT NULL,
   dateOrder DATE NULL,
   idCompte INT NOT NULL,
   price INT NOT NULL,
   PRIMARY KEY (id) 
 ) ENGINE=InnoDB;


# -----------------------------------------------------------------------------
#       TABLE : Contains
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Contains
 (
  idOrder INT NOT NULL ,
  idProduct INT (3) NOT NULL, 
  quantity INT (2) NOT NULL,
  PRIMARY KEY (idOrder, idProduct) 
 ) ENGINE=InnoDB;


# -----------------------------------------------------------------------------
#       TABLE INDEX Contains
# -----------------------------------------------------------------------------

CREATE INDEX I_FK_CONTAIN_COMMANDE
    ON Contains (idOrder ASC);

CREATE INDEX I_FK_CONTAIN_PRODUCT
    ON Contains (idProduct ASC);


# -----------------------------------------------------------------------------
#       TABLE : TypeUser
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TypeUser
 (
   id INT (1) NOT NULL,
   libelle CHAR (20) NOT NULL, 
   PRIMARY KEY (id) 
 ) ENGINE=InnoDB; 


# -----------------------------------------------------------------------------
#       TABLE : Compte 
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Compte
 (
  id INT (10) AUTO_INCREMENT NOT NULL,
  name CHAR (50) NOT NULL,
  login CHAR (20) UNIQUE NOT NULL,
  pwd CHAR (255) NOT NULL,
  address CHAR (32) NOT NULL,
  cp CHAR (5) NOT NULL,
  city CHAR (32) NOT NULL,
  mail CHAR(50) NOT NULL,
  idTypeUser INT (1) NOT NULL DEFAULT 2,
  PRIMARY KEY(id)
 ) ENGINE=InnoDB;


# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE Compte
# -----------------------------------------------------------------------------

CREATE INDEX I_FK_COMPTE_TYPEUSER
    ON Compte (idTypeUser ASC);


# -----------------------------------------------------------------------------
#       TABLE REFERENCES CREATION
# -----------------------------------------------------------------------------

ALTER TABLE Orders
  ADD FOREIGN KEY FK_COMMANDE_COMPTE (idcompte)
      REFERENCES Compte (id);

ALTER TABLE Contains
  ADD FOREIGN KEY FK_CONTAIN_ORDER (idOrder)
      REFERENCES Orders (id);

ALTER TABLE Contains
  ADD FOREIGN KEY FK_CONTAIN_PRODUCT (idProduct)
      REFERENCES Product (id);

ALTER TABLE Compte
  ADD FOREIGN KEY FK_COMPTE_TYPEUSER (idTypeUser)
      REFERENCES TypeUser (id);


# -----------------------------------------------------------------------------
#       CREATION DES LIGNES DES TABLES
# -----------------------------------------------------------------------------

INSERT INTO TypeUser VALUES (1, 'administrateur');
INSERT INTO TypeUser VALUES (2, 'client');

INSERT INTO Product VALUES (1, 'Bouquet de roses multicolores' , 58, 'images/flowers/comores.gif', 5);
INSERT INTO Product VALUES (2, 'Bouquet de roses rouges', 50, 'images/flowers/grenadines.gif', 0);
INSERT INTO Product VALUES (3, 'Bouquet de roses jaunes', 78, 'images/flowers/mariejaune.gif', 2);
INSERT INTO Product VALUES (4, 'Bouquet de petites roses jaunes', 48, 'images/flowers/mayotte.gif', 3);
INSERT INTO Product VALUES (5, 'Fuseau de roses multicolores', 63, 'images/flowers/philippines.gif', 3);
INSERT INTO Product VALUES (6, 'Petit bouquet de roses roses', 43, 'images/flowers/pakopoka.gif', 0);
INSERT INTO Product VALUES (7, 'Panier de roses multicolores', 78, 'images/flowers/seychelles.gif', 0);
INSERT INTO Product VALUES (8, 'Panier de fleurs variées', 53, 'images/flowers/aniwa.gif', 2);
INSERT INTO Product VALUES (9, 'Coup de charme jaune', 38, 'images/flowers/kos.gif', 2);
INSERT INTO Product VALUES (10, 'Bel arrangement de fleurs de saison', 68, 'images/flowers/loth.gif', 2);
INSERT INTO Product VALUES (11, 'Coup de charme vert', 41, 'images/flowers/luzon.gif', 2);
INSERT INTO Product VALUES (12, 'Très beau panier de fleurs précieuses', 98, 'images/flowers/makin.gif', 2);
INSERT INTO Product VALUES (13, 'Bel assemblage de fleurs précieuses', 68, 'images/flowers/mosso.gif', 2);
INSERT INTO Product VALUES (14, 'Présentation prestigieuse', 128, 'images/flowers/rawaki.gif', 2);
INSERT INTO Product VALUES (15, 'Plante fleurie', 43,'images/flowers/antharium.gif', 2);
INSERT INTO Product VALUES (16, 'Pot de phalaonopsis', 58, 'images/flowers/galante.gif', 2);
INSERT INTO Product VALUES (17, 'Assemblage paysagé', 103, 'images/flowers/lifou.gif', 2);
INSERT INTO Product VALUES (18, 'Belle coupe de plantes blanches', 128, 'images/flowers/losloque.gif', 2);
INSERT INTO Product VALUES (19, 'Pot de mitonia mauve', 83, 'images/flowers/papouasi.gif', 2);
INSERT INTO Product VALUES (20, 'Pot de phalaonopsis blanc', 58, 'images/flowers/pionosa.gif', 2);
INSERT INTO Product VALUES (21, 'Pot de phalaonopsis rose mauve', 58, 'images/flowers/sabana.gif', 2);

INSERT INTO Compte VALUES (1, 'warren', 'warren', 'warren', '28 route des Vallières', '78125', 'Raizeux', 'warren@gmail.com', 2);
INSERT INTO Compte VALUES (2, 'elsacd', 'elsacdad', 'elsa', '81 route des chataigniers', '78320', 'Levis saint Nom', 'cad.elsa@gmail.com', 1);
INSERT INTO Compte VALUES (3, 'Linag', 'linag75', 'linagcl', '25 route des coins', '75014', 'Paris', 'linag@gmail.com', 2);

INSERT INTO Orders VALUES (1, '2024-03-27', 1, 110);
INSERT INTO Orders VALUES (2, '2024-03-27', 1, 150);
INSERT INTO Orders VALUES (3, '2024-03-27', 3, 170);

INSERT INTO Contains VALUES (1, 12, 2);
INSERT INTO Contains VALUES (1, 3, 1);
INSERT INTO Contains VALUES (2, 7, 1);
INSERT INTO Contains VALUES (2, 5, 3);
INSERT INTO Contains VALUES (3, 8, 2);
INSERT INTO Contains VALUES (3, 11, 4);
