create database if not exists MojObrtnik;
use MojObrtnik;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS Naslov;
DROP TABLE IF EXISTS Obrtnik;
DROP TABLE IF EXISTS Storitev;
DROP TABLE IF EXISTS Kategorija;
DROP TABLE IF EXISTS Slika;
DROP TABLE IF EXISTS Ocena;
DROP TABLE IF EXISTS Stanje_Narocila;
DROP TABLE IF EXISTS Narocilo;
DROP TABLE IF EXISTS Uporabnik;
DROP TABLE IF EXISTS Komentar;
SET FOREIGN_KEY_CHECKS = 1;

create table Naslov(
	idNaslov int not null auto_increment primary key,
    Kraj varchar(45) not null,
    Postna_Stevilka int not null,
    Ulica varchar(45) not null,
    Hisna_Stevilka int not null,
    Obrtnik_idObrtnik int not null
);

create table Obrtnik(
	idObrtnik int not null auto_increment primary key,
    Ime varchar(45) not null,
    Priimek varchar(45) not null,
    TRR int not null,
    Email varchar(320) not null,
    Telefon varchar(45) not null,
    Profilna_slika blob,
    Opis varchar(5000),
    Username varchar(45) not null,
    Password varchar(45) not null
);

create table Storitev(
	idStoritev int not null auto_increment primary key,
    Naziv varchar(45) not null,
    Opis varchar(5000),
    Datum_Vpisa date not null,
    Datum_Spremembe date not null,
    Obrtnik_idObrtnik int not null,
    Kategorija_idKategorija int not null
);

create table Kategorija(
	idKategorija int not null auto_increment primary key,
    Naziv varchar(45) not null
);

create table Slika(
	idSlika int not null auto_increment primary key,
    Slika blob not null,
    Storitev_idStoritev int not null
);

create table Ocena(
	idOcena int not null auto_increment primary key,
    Ocena int not null,
    Storitev_idStoritev int not null,
    Uporabnik_idUporabnik int not null
);

create table Komentar(
	idKomentar int not null auto_increment primary key,
    Komentar varchar(1000) not null,
    Storitev_idStoritev int not null,
    Uporabnik_idUporabnik int not null
);

create table Uporabnik(
	idUporabnik int not null auto_increment primary key,
    Ime varchar(45) not null,
    Priimek varchar(45) not null,
    Email varchar(320) not null,
    Profilna_slika blob,
    Telefon varchar(45),
    Username varchar(45) not null,
    Password varchar(45) not null
);

create table Narocilo(
	idNarocilo int not null auto_increment primary key,
    Okvira_cena int not null,
    Datum_narocila date not null,
    Komentar varchar(5000),
    Telefon varchar(45) not null,
    Datum_Zacetka date not null,
    Datum_Konca date not null,
    Uporabnik_idUporabnik int not null,
    Stanje_Narocila_idStanje_Narocila int not null,
    Storitev_idStoritev int not null
);

create table Stanje_Narocila(
	idStanje_Narocila int not null auto_increment primary key,
    Stanje_Narocila varchar(45) not null
);

ALTER TABLE Slika
ADD CONSTRAINT FK_Slika_Storitev
FOREIGN KEY (Storitev_idStoritev) REFERENCES Storitev(idStoritev); 

ALTER TABLE Storitev
ADD CONSTRAINT FK_Storitev_Obrtnik
FOREIGN KEY (Obrtnik_idObrtnik) REFERENCES Obrtnik(idObrtnik); 

ALTER TABLE Storitev
ADD CONSTRAINT FK_Storitev_Kategorija
FOREIGN KEY (Kategorija_idKategorija) REFERENCES Kategorija(idKategorija); 

ALTER TABLE Ocena
ADD CONSTRAINT FK_Ocena_Storitev
FOREIGN KEY (Storitev_idStoritev) REFERENCES Storitev(idStoritev); 

ALTER TABLE Ocena
ADD CONSTRAINT FK_Ocena_Uporabnik
FOREIGN KEY (Uporabnik_idUporabnik) REFERENCES Uporabnik(idUporabnik); 

ALTER TABLE Komentar
ADD CONSTRAINT FK_Komentar_Storitev
FOREIGN KEY (Storitev_idStoritev) REFERENCES Storitev(idStoritev); 

ALTER TABLE Komentar
ADD CONSTRAINT FK_Komentar_Uporabnik
FOREIGN KEY (Uporabnik_idUporabnik) REFERENCES Uporabnik(idUporabnik); 

ALTER TABLE Narocilo
ADD CONSTRAINT FK_Narocilo_Uporabnik
FOREIGN KEY (Uporabnik_idUporabnik) REFERENCES Uporabnik(idUporabnik);

ALTER TABLE Narocilo
ADD CONSTRAINT FK_Narocilo_Stanje_Narocila
FOREIGN KEY (Stanje_Narocila_idStanje_Narocila) REFERENCES Stanje_Narocila(idStanje_Narocila);

ALTER TABLE Narocilo
ADD CONSTRAINT FK_Narocilo_Storitev
FOREIGN KEY (Storitev_idStoritev) REFERENCES Storitev(idStoritev);