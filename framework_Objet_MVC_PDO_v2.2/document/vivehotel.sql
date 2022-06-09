    --
    -- Base de données: 'vivehotel'
    --
    create database if not exists vivehotel default character set utf8 collate utf8_general_ci;
    use vivehotel;
    -- --------------------------------------------------------
    -- Création des tables

    set foreign_key_checks =0;

    DROP TABLE IF EXISTS Profils ;
    CREATE TABLE Profils (
        pro_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        pro_nom  VARCHAR(64) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Profils`(`pro_id`, `pro_nom`) VALUES
    (1, 'CLIENT'), 
    (2, 'GERANT'), 
    (3, 'SRC'), 
    (4, 'ADMIN');

    DROP TABLE IF EXISTS Utilisateurs ;
    CREATE TABLE Utilisateurs (
        uti_id  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        uti_nom VARCHAR(128) NOT NULL,
        uti_prenom VARCHAR(128) NOT NULL,
        uti_email VARCHAR(256) UNIQUE NOT NULL,
        uti_mdp VARCHAR(512) NOT NULL,
        uti_profil INT NOT NULL
    ) ENGINE=InnoDB;


    CREATE TABLE `Departements` (
    dep_id int(11) NOT NULL PRIMARY KEY,
    dep_nom varchar(20) NOT NULL,
    dep_code int(11) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Departements` (`dep_id`, `dep_nom`, `dep_code`) VALUES
    (1, 'Ain', 1),
    (2, 'Aisne', 2),
    (3, 'Allier', 3),
    (4, 'Alpes-de-Haute-Prove', 4),
    (5, 'Hautes-Alpes', 5),
    (6, 'Alpes-Maritimes', 6),
    (7, 'Ardèche', 7),
    (8, 'Ardennes', 8),
    (9, 'Ariège', 9),
    (10, 'Aube', 10),
    (11, 'Aude', 11),
    (12, 'Aveyron', 12),
    (13, 'Bouches-du-Rhône', 13),
    (14, 'Calvados', 14),
    (15, 'Cantal', 15),
    (16, 'Charente', 16),
    (17, 'Charente-Maritime', 17),
    (18, 'Cher', 18),
    (19, 'Corrèze', 19),
    (20, 'Côte-d Or', 21),
    (21, 'Côtes-d Armor', 22),
    (22, 'Creuse', 23),
    (23, 'Dordogne', 24),
    (24, 'Doubs', 25),
    (25, 'Drôme', 26),
    (26, 'Eure', 27),
    (27, 'Eure-et-Loir', 28),
    (28, 'Finistère', 29),
    (29, 'Corse-du-Sud', 2),
    (30, 'Haute-Corse', 2),
    (31, 'Gard', 30),
    (32, 'Haute-Garonne', 31),
    (33, 'Gers', 32),
    (34, 'Gironde', 33),
    (35, 'Hérault', 34),
    (36, 'Ille-et-Vilaine', 35),
    (37, 'Indre', 36),
    (38, 'Indre-et-Loire', 37),
    (39, 'Isère', 38),
    (40, 'Jura', 39),
    (41, 'Landes', 40),
    (42, 'Loir-et-Cher', 41),
    (43, 'Loire', 42),
    (44, 'Haute-Loire', 43),
    (45, 'Loire-Atlantique', 44),
    (46, 'Loiret', 45),
    (47, 'Lot', 46),
    (48, 'Lot-et-Garonne', 47),
    (49, 'Lozère', 48),
    (50, 'Maine-et-Loire', 49),
    (51, 'Manche', 50),
    (52, 'Marne', 51),
    (53, 'Haute-Marne', 52),
    (54, 'Mayenne', 53),
    (55, 'Meurthe-et-Moselle', 54),
    (56, 'Meuse', 55),
    (57, 'Morbihan', 56),
    (58, 'Moselle', 57),
    (59, 'Nièvre', 58),
    (60, 'Nord', 59),
    (61, 'Oise', 60),
    (62, 'Orne', 61),
    (63, 'Pas-de-Calais', 62),
    (64, 'Puy-de-Dôme', 63),
    (65, 'Pyrénées-Atlantiques', 64),
    (66, 'Hautes-Pyrénées', 65),
    (67, 'Pyrénées-Orientales', 66),
    (68, 'Bas-Rhin', 67),
    (69, 'Haut-Rhin', 68),
    (70, 'Rhône', 69),
    (71, 'Haute-Saône', 70),
    (72, 'Saône-et-Loire', 71),
    (73, 'Sarthe', 72),
    (74, 'Savoie', 73),
    (75, 'Haute-Savoie', 74),
    (76, 'Paris', 75),
    (77, 'Seine-Maritime', 76),
    (78, 'Seine-et-Marne', 77),
    (79, 'Yvelines', 78),
    (80, 'Deux-Sèvres', 79),
    (81, 'Somme', 80),
    (82, 'Tarn', 81),
    (83, 'Tarn-et-Garonne', 82),
    (84, 'Var', 83),
    (85, 'Vaucluse', 84),
    (86, 'Vendée', 85),
    (87, 'Vienne', 86),
    (88, 'Haute-Vienne', 87),
    (89, 'Vosges', 88),
    (90, 'Yonne', 89),
    (91, 'Territoire de Belfor', 90),
    (92, 'Essonne', 91),
    (93, 'Hauts-de-Seine', 92),
    (94, 'Seine-Saint-Denis', 93),
    (95, 'Val-de-Marne', 94),
    (96, 'Val-d Oise', 95),
    (99, 'Guyane', 973),
    (100, 'La Réunion', 974),
    (101, 'St-Pierre-et-Miquelo', 975),
    (102, 'Mayotte', 976),
    (103, 'Wallis et Futuna', 986),
    (104, 'Polynésie Française', 987),
    (105, 'Nouvelle Calédonie', 988),
    (106, 'Guadeloupe', 971);

    DROP TABLE IF EXISTS Classes ;
    CREATE TABLE Classes (
        cla_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cla_nom VARCHAR(64) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Classes`(`cla_id`, `cla_nom`) VALUES 
    (1,'2 étoiles'), 
    (2,'3 étoiles'), 
    (3,'4 étoiles'), 
    (4,'5 étoiles'),
    (5,'Palace');  


    DROP TABLE IF EXISTS Hotels ;
    CREATE TABLE Hotels (
        hot_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        hot_classe INT NOT NULL,
        hot_nom VARCHAR(64) NOT NULL,
        hot_adresse VARCHAR(256) NOT NULL,
        hot_departement INT NOT NULL,
        hot_tel VARCHAR(20) NOT NULL,
        hot_gerant INT
    ) ENGINE=InnoDB;

    DROP TABLE IF EXISTS Categories ;
    CREATE TABLE Categories (
        cat_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cat_nom VARCHAR(100) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Categories`(`cat_id`, `cat_nom`) VALUES 
    (1,'Standard'), 
    (2,'Supérieur'), 
    (3,'Luxe'),
    (4,'Suite'); 

    DROP TABLE IF EXISTS Lits ;
    CREATE TABLE Lits (
        lit_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        lit_type VARCHAR(512) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Lits`(`lit_id`, `lit_type`) VALUES 
    (1, '2 Lits simples'),
    (2, 'Lit double standard Queen Size'),
    (3, 'Lit double Confort'), 
    (4, 'Lit double King Size'), 
    (5, '1 lit double et un lit simple');

    DROP TABLE IF EXISTS Chambres ;
    CREATE TABLE Chambres (
        cha_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cha_description VARCHAR(1024),
        cha_categorie INT NOT NULL,
        cha_surface FLOAT,
        cha_lit INT NOT NULL,
        cha_jacouzzi BOOLEAN,
        cha_balcon BOOLEAN,
        cha_wifi BOOLEAN,
        cha_minibar BOOLEAN,
        cha_coffre BOOLEAN
    ) ENGINE=InnoDB;

    DROP TABLE IF EXISTS Statuts ;
    CREATE TABLE Statuts (
        sta_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        sta_nom VARCHAR(32) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Statuts`(`sta_id`, `sta_nom`) VALUES 
    (1,'Initialisée '),
    (2,'Validée  '),
    (3,'En attente '),
    (4,'Annulée  ');

    DROP TABLE IF EXISTS Reservations ;
    CREATE TABLE Reservations (
        res_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY ,
        res_client INT NOT NULL,
        res_date_creation DATETIME,
        res_update DATETIME,
        res_date_debut DATETIME,
        res_date_fin DATETIME,
        res_hotel INT NOT NULL,
        res_chambre INT,
        res_gestionnaire INT,
        res_statut INT NOT NULL
    ) ENGINE=InnoDB;

    DROP TABLE IF EXISTS Services ;
    CREATE TABLE Services (
        ser_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
        ser_nom VARCHAR(64) NOT NULL
    ) ENGINE=InnoDB;

    INSERT INTO `Services`(`ser_id`, `ser_nom`) VALUES 
    (1,'Accessibilité personnes à mobilité réduite'), 
    (2,'Animal domestique accepté'), 
    (3,'Salle de fitness'), 
    (4,'Piscine'), 
    (5,'Wifi/internet'),
    (6,'Parking'),
    (7, 'Garde enfant sur demande'),
    (8,'Thalassothérapie'), 
    (9,'Remise en forme'),
    (10,'Tennis'),   
    (11,'Bien être'), 
    (12,'Petit déjeuner'); 

     DROP TABLE IF EXISTS Offre ;
    CREATE TABLE Offre (
        off_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        off_hotel INT NOT NULL,
        off_services INT NOT NULL,
        off_prix FLOAT
    ) ENGINE=InnoDB;

    DROP TABLE IF EXISTS Choisir ;
    CREATE TABLE Choisir (
        cho_id  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cho_reservation INT NOT NULL,
        cho_services INT NOT NULL, 
        cho_quantite INT, 
        UNIQUE KEY indoservices (cho_services,cho_reservation)
    ) ENGINE=InnoDB;

    DROP TABLE IF EXISTS Tarif ;
    CREATE TABLE Tarif (
        tar_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        tar_classe INT NOT NULL, 
        tar_categorie INT NOT NULL,
        tar_prix FLOAT NOT NULL
    ) ENGINE=InnoDB;

    SET foreign_key_checks =1;


    -- CONTRAINTES
    ALTER TABLE Utilisateurs ADD CONSTRAINT cs1 FOREIGN KEY (uti_profil) REFERENCES Profils (pro_id);
    ALTER TABLE Hotels ADD CONSTRAINT cs2 FOREIGN KEY (hot_departement) REFERENCES Departements (dep_id);
    ALTER TABLE Hotels ADD CONSTRAINT cs3 FOREIGN KEY (hot_classe) REFERENCES Classes (cla_id);
    ALTER TABLE Hotels ADD CONSTRAINT cs4 FOREIGN KEY (hot_gerant) REFERENCES Utilisateurs (uti_id);
    ALTER TABLE Chambres ADD CONSTRAINT cs5 FOREIGN KEY (cha_categorie) REFERENCES Categories (cat_id);
    ALTER TABLE Chambres ADD CONSTRAINT cs6 FOREIGN KEY (cha_lit) REFERENCES Lits (lit_id);
    ALTER TABLE Reservations ADD CONSTRAINT cs7 FOREIGN KEY (res_chambre) REFERENCES Chambres (cha_id);
    ALTER TABLE Reservations ADD CONSTRAINT cs8 FOREIGN KEY (res_hotel) REFERENCES Hotels (hot_id);
    ALTER TABLE Reservations ADD CONSTRAINT cs9 FOREIGN KEY (res_gestionnaire) REFERENCES utilisateurs (uti_id);
    ALTER TABLE Reservations ADD CONSTRAINT cs10 FOREIGN KEY (res_client) REFERENCES Utilisateurs (uti_id);
    ALTER TABLE Reservations ADD CONSTRAINT cs11 FOREIGN KEY (res_statut) REFERENCES Statuts (sta_id);
    ALTER TABLE Offre ADD CONSTRAINT cs12 FOREIGN KEY (off_hotel) REFERENCES Hotels (hot_id);
    ALTER TABLE Offre ADD CONSTRAINT cs13 FOREIGN KEY (off_services) REFERENCES Services (ser_id);
    ALTER TABLE Choisir ADD CONSTRAINT cs14 FOREIGN KEY (cho_services) REFERENCES Services (ser_id);
    ALTER TABLE Choisir ADD CONSTRAINT cs15 FOREIGN KEY (cho_reservation) REFERENCES Reservations (res_id);
    ALTER TABLE Tarif ADD CONSTRAINT cs16 FOREIGN KEY (tar_categorie) REFERENCES Categories (cat_id);
    ALTER TABLE Tarif ADD CONSTRAINT cs17 FOREIGN KEY (tar_classe) REFERENCES Classes (cla_id);