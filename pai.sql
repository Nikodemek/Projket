CREATE TABLE `Uzytkownik` (
	`id_uzytkownika` INT NOT NULL AUTO_INCREMENT,
	`imie` varchar(30) NOT NULL,
	`nazwisko` varchar(50) NOT NULL,
	`login` varchar(10) NOT NULL,
	`haslo` varchar(30) NOT NULL,
	`id_klasy` INT,
	`id_rdz_uzytkownik` INT NOT NULL,
	`status_id` INT NOT NULL,
	PRIMARY KEY (`id_uzytkownika`)
);

CREATE TABLE `Status` (
	`ststus_id` INT NOT NULL AUTO_INCREMENT,
	`opis_status` varchar(30) NOT NULL,
	PRIMARY KEY (`ststus_id`)
);

CREATE TABLE `Rodzaj_uzytkownika` (
	`id_rdz_uzytkownik` INT NOT NULL AUTO_INCREMENT,
	`rodzaj_uzytkownika` varchar(30) NOT NULL,
	PRIMARY KEY (`id_rdz_uzytkownik`)
);

CREATE TABLE `Fiszki` (
	`id_fiszki` INT NOT NULL AUTO_INCREMENT,
	`slowko` varchar(30) NOT NULL,
	`tlumaczenie` varchar(30) NOT NULL,
	`id_zestawu` INT NOT NULL,
	PRIMARY KEY (`id_fiszki`)
);

CREATE TABLE `Zestaw` (
	`id_zestawu` INT NOT NULL AUTO_INCREMENT,
	`nazwa_zestawu` varchar(30) NOT NULL,
	`jezyk` varchar(30) NOT NULL,
	PRIMARY KEY (`id_zestawu`)
);

CREATE TABLE `Jezyk` (
	`jezyk` varchar(30) NOT NULL,
	PRIMARY KEY (`jezyk`)
);

CREATE TABLE `Zestaw_klas` (
	`id_zestawu` INT NOT NULL,
	`id_klasy` INT NOT NULL
);

CREATE TABLE `Klasa` (
	`id_klasy` INT NOT NULL AUTO_INCREMENT,
	`nazwa_klasy` varchar(2) NOT NULL,
	PRIMARY KEY (`id_klasy`)
);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk0` FOREIGN KEY (`id_klasy`) REFERENCES `Klasa`(`id_klasy`);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk1` FOREIGN KEY (`id_rdz_uzytkownik`) REFERENCES `Rodzaj_uzytkownika`(`id_rdz_uzytkownik`);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk2` FOREIGN KEY (`status_id`) REFERENCES `Status`(`ststus_id`);

ALTER TABLE `Fiszki` ADD CONSTRAINT `Fiszki_fk0` FOREIGN KEY (`id_zestawu`) REFERENCES `Zestaw`(`id_zestawu`);

ALTER TABLE `Zestaw` ADD CONSTRAINT `Zestaw_fk0` FOREIGN KEY (`jezyk`) REFERENCES `Jezyk`(`jezyk`);

ALTER TABLE `Zestaw_klas` ADD CONSTRAINT `Zestaw_klas_fk0` FOREIGN KEY (`id_zestawu`) REFERENCES `Zestaw`(`id_zestawu`);

ALTER TABLE `Zestaw_klas` ADD CONSTRAINT `Zestaw_klas_fk1` FOREIGN KEY (`id_klasy`) REFERENCES `Klasa`(`id_klasy`);

