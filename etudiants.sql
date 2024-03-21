

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `ville_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etudiants_email_unique` (`email`),
  ADD KEY `etudiants_ville_id_foreign` (`ville_id`);

ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE SET NULL;
COMMIT;



INSERT INTO `etudiants` (`id`, `nom`, `adresse`, `telephone`, `email`, `date_de_naissance`, `ville_id`, `created_at`, `updated_at`) VALUES
(2, 'Jedediah Pfeffer', '58008 Justine Ford\nMertzview, PA 80430-5345', '256.771.1957', 'nannie99@example.org', '2016-11-06', 15, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(3, 'Joel Hane', '344 Yundt Keys Apt. 378\nEichmannville, OR 67575-0175', '347.289.6198', 'andreanne08@example.net', '1985-08-07', 10, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(4, 'Josianne Huels', '7481 Freddy Plaza\nEast Danmouth, LA 17008', '(802) 505-3440', 'gayle38@example.net', '2022-02-23', 10, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(5, 'Garnett Corkery', '473 Ethan Ridges\nSouth Boshire, CT 10598-2924', '1-831-502-2521', 'colleen19@example.com', '2017-10-28', 3, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(6, 'Daren Romaguera', '82981 Randi Lakes\nNew Rupert, TN 35393', '859-461-0332', 'schaden.autumn@example.org', '1988-12-17', 8, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(7, 'Velda Tremblay', '928 Schowalter Causeway Apt. 381Eusebiofort, AK 99531-7810', '765.495.9170', 'jaylen85@example.net', '1993-03-02', 13, '2024-02-21 02:13:22', '2024-02-23 20:47:48'),
(8, 'Oren Torp', '348 Drew Dam\nSouth Charlieland, IA 93844-0432', '+1 (718) 975-4463', 'conner13@example.net', '1999-09-02', 11, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(9, 'Foster Kling', '220 Lori Harbors\nSouth Vincenzastad, RI 54222', '+1.269.347.8944', 'yhalvorson@example.com', '1999-07-06', 13, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(10, 'Miss Destiney Bernhard V', '746 Callie Glen\nPort Hankmouth, OR 42872', '667-670-3840', 'mina40@example.org', '1999-12-06', 6, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(11, 'Tavares Dickens', '38743 Patrick Stream\nEast Myrna, RI 79677-9581', '+16292606085', 'kaela68@example.org', '2008-11-21', 14, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(12, 'Kirk Sipes', '87092 Schmitt Street Apt. 378\nStoltenbergchester, AZ 06018', '+1-870-859-3296', 'philpert@example.com', '2016-02-19', 8, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(13, 'Marques Lakin', '35134 Fadel Circles\nGoldnerland, HI 47789-6543', '667-301-3019', 'jackie11@example.net', '2014-11-05', 2, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(14, 'Arielle Dooley PhD', '658 Feest Curve Apt. 217\nPort Svenport, NC 49789', '+1-838-449-2709', 'edgardo.kirlin@example.com', '1990-08-07', 5, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(15, 'Ramon Fadel Jr.', '926 Kilback Ridge Suite 969\nVidaburgh, IA 71801-4347', '956-477-1983', 'malvina.vandervort@example.com', '1977-03-05', 2, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(16, 'Cecil Koepp PhD', '432 Schmitt Junction\nPort Caroline, CA 29759-9532', '+1 (412) 358-4188', 'elroy.bergnaum@example.net', '1985-04-24', 12, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(17, 'Gregory Durgan PhD', '1621 Thomas Coves Apt. 723\nCollinsside, NE 45605-1326', '813.896.7998', 'jaunita12@example.org', '1999-03-23', 3, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(18, 'Janessa Fritsch', '61454 Hartmann Mall\nKubhaven, DC 00577-9033', '920.217.4317', 'jairo.gislason@example.org', '2021-05-16', 1, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(19, 'Prof. Pansy Spinka Jr.', '77782 Monahan Lake Apt. 662\nLake Moriahfort, DE 45955', '+1 (308) 548-0785', 'filomena.kirlin@example.com', '1976-07-30', 2, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(20, 'Brain Lehner', '2597 Armand Prairie\nHermistonhaven, NV 19792-1317', '+1.972.497.0007', 'octavia.orn@example.org', '1983-10-29', 4, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(21, 'Mr. Gayle Batz PhD', '7611 Brisa Bypass\nHelenside, NH 37655-8454', '1-731-679-2576', 'casimir18@example.net', '2007-07-11', 6, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(22, 'Una McClure', '4403 Gerlach Crest\nEast Liamton, FL 92620-5280', '+1 (478) 870-9593', 'hackett.kaitlin@example.org', '2002-09-07', 9, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(23, 'Noe Hudson IV', '18536 Koby Lake Suite 950\nPort Evelynmouth, ME 91699', '208.458.7745', 'kemmer.chester@example.com', '2004-07-29', 7, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(24, 'Mr. Dorian Pfannerstill', '63653 Denesik Island\nMervinfurt, MS 76136-4280', '+1.830.329.7715', 'kallie25@example.com', '1999-05-21', 14, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(25, 'Ursula Goldner', '939 Mittie Rapids\nFernside, MI 98622-6925', '+1 (325) 774-7257', 'satterfield.emmitt@example.net', '1991-09-25', 2, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(26, 'Prince Zemlak', '11491 Emilie Streets Apt. 835\nJuniorview, KY 98619', '+1-336-475-4609', 'mann.katrine@example.net', '1996-06-25', 10, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(27, 'Howard Murazik', '79800 Bosco Ford\nLegrosland, VA 80466-0207', '515.949.7525', 'natalie63@example.org', '1993-04-30', 4, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(28, 'Miss Rossie Conn', '55340 Wiley Crest Apt. 279\nFerryland, WA 42374-0336', '+19716142641', 'vemmerich@example.net', '2005-11-04', 11, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(29, 'Jerrod Morissette', '278 Tyrique Locks Apt. 195\nNew Drakeside, MT 74786', '209-471-8330', 'dubuque.autumn@example.com', '2011-11-10', 4, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(30, 'Prof. Abner Brekke MD', '16230 Ashlynn Turnpike\nEast Anaview, MO 94973-1001', '+1.845.891.2435', 'kraig89@example.net', '1979-11-26', 1, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(31, 'Ken Lubowitz', '153 Nya Spurs\nNew Reedport, AR 64538-6553', '534-470-1419', 'brown.jade@example.org', '2007-02-03', 10, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(32, 'Miss Daniella Kshlerin', '64450 Corwin Rest Apt. 755\nSouth Kenyon, OK 05647', '425.683.0268', 'dare.eudora@example.org', '1994-10-14', 4, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(33, 'Tremaine Walter', '311 Cronin Road\nMaggiomouth, ME 00820-3945', '(463) 999-4999', 'shegmann@example.com', '1987-05-03', 9, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(34, 'Betty Huel', '80879 Ezra Key Suite 117\nKleinberg, SC 96326', '+1-469-916-5181', 'sprohaska@example.org', '1992-03-16', 7, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(35, 'Dr. Pink McLaughlin V', '1278 Leanna Fork\nLake Keara, KS 50543', '+1-947-446-2836', 'kshlerin.barney@example.com', '2017-07-29', 5, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(36, 'Helen Dickens', '2865 Hermann Dam\nNew Margarett, CA 13513', '+1-615-881-5708', 'effie29@example.org', '1998-04-20', 9, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(37, 'Abby Balistreri DDS', '41189 Kuhic Key\nSwaniawskishire, DC 75437-7046', '(865) 931-4540', 'jarvis.adams@example.com', '1973-04-14', 5, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(38, 'Alva Rodriguez', '69417 Koch Road\nSouth Edmund, VT 15122-2272', '+1 (325) 779-1572', 'maverick.trantow@example.net', '2006-12-25', 9, '2024-02-21 02:13:22', '2024-02-21 02:13:22'),
(39, 'Kallie Volkman', '901 Fadel Radial\nKalebland, KY 66479-2268', '+1.347.944.8798', 'rutherford.mozelle@example.net', '2015-09-24', 11, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(40, 'Miss Mariana McDermott', '813 Lang Orchard\nKertzmannhaven, VA 09983-3924', '848.466.2296', 'fdaugherty@example.org', '2019-05-16', 13, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(41, 'Laurie Kemmer', '5580 Conn Dam Apt. 632\nNorth Anissa, AL 82295', '+1-971-248-5920', 'jaylen.hackett@example.com', '2008-02-18', 7, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(42, 'Aurore Beer', '3024 Cartwright Point\nEast Zander, LA 89136', '+1-276-608-9073', 'tkoch@example.net', '1987-07-20', 4, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(43, 'Autumn McLaughlin', '48153 Turner Locks Apt. 086\nAlyshafurt, OR 27247', '+1.947.315.1682', 'bnolan@example.com', '2010-05-01', 15, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(44, 'Luigi Yundt', '58402 Travis Throughway Apt. 732\nLake Jay, PA 12175', '954-672-3033', 'marlene.crona@example.org', '2010-09-03', 15, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(45, 'Brant Hegmann I', '948 Zulauf Mews Apt. 348\nWest Magdalenburgh, NE 45685-3590', '+12835287535', 'corwin.pietro@example.org', '2017-07-26', 15, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(46, 'Darrin Senger', '929 Leannon Avenue\nLake Jake, AZ 21857-0361', '+1-678-551-4830', 'kunde.bennie@example.com', '2016-02-16', 1, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(47, 'Prof. Dayton Donnelly MD', '91088 Breitenberg Ports Apt. 013\nJoseview, VT 36810-7177', '+17747706569', 'kiley05@example.net', '1996-01-30', 4, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(48, 'Dejah Aufderhar', '291 Elton Trail\nBashirianmouth, ID 22317-1588', '541.784.7971', 'ieichmann@example.net', '1990-10-17', 6, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(49, 'Dorian Becker', '525 Annabell Circle Apt. 562\nJohnstonchester, DE 13453-5822', '(225) 980-9173', 'jan93@example.net', '2015-05-08', 12, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(50, 'Jeff Welch', '2023 Glover Terrace\nPort Litzyberg, MN 61388', '+1.361.455.0523', 'danyka86@example.org', '2018-06-19', 4, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(51, 'Elvera Bergstrom', '6599 Eichmann Oval\nKirkview, MO 64180-6330', '1-786-468-3262', 'feeney.buddy@example.com', '1975-12-15', 8, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(52, 'Jaleel Carroll', '6402 Schultz Falls\nPort Cloydville, CO 53178-4581', '(386) 499-3398', 'braeden.olson@example.org', '1999-11-10', 5, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(53, 'Vern Rowe Jr.', '520 Natasha Courts\nSouth Fabiola, RI 27501-3601', '1-231-677-2235', 'okling@example.com', '1970-04-01', 12, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(54, 'Mustafa Rutherford', '167 Lessie Ridges\nWest Loniemouth, LA 48323-7221', '220.361.5250', 'idubuque@example.com', '2019-09-22', 4, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(55, 'Ashtyn Kunde I', '738 Morar Mall\nDouglasmouth, CA 88443', '540-953-8793', 'beier.santiago@example.org', '1970-04-07', 13, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(56, 'Prof. Thea Jast', '2400 Cruickshank Camp Suite 547\nRoxanefurt, MD 61824-4104', '512.759.5928', 'hettie.herzog@example.org', '1996-06-02', 8, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(57, 'Hollis Sanford IV', '41888 Satterfield Plains\nMcKenzietown, OR 51879', '+13153844558', 'austin96@example.com', '2001-02-07', 11, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(58, 'Jarrett Douglas', '7446 Towne Way\nSchillermouth, OK 19775', '1-651-983-4374', 'nolan.constantin@example.net', '1999-12-30', 4, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(59, 'Eunice Ratke', '96164 Esteban Stravenue\nLake Hollis, ME 00244-9566', '+1-920-459-3549', 'friesen.calista@example.org', '2004-02-26', 8, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(60, 'Ms. Veronica Schamberger', '469 Catharine Creek\nKovacekburgh, OK 31292', '+1.480.418.9546', 'nitzsche.isaac@example.org', '1992-04-16', 1, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(61, 'Carmine Friesen', '397 Swift Lake\nOkunevamouth, AR 33948-9803', '+1 (712) 747-2507', 'marianne.schoen@example.com', '1979-04-11', 2, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(62, 'Mrs. Lynn Buckridge', '136 Rowe Field Suite 398\nGermanfurt, OR 76348', '+1 (815) 658-3637', 'hdooley@example.net', '1977-07-28', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(63, 'Dr. Breanne Huel', '17394 Haven Courts Suite 926\nLake Cliffordstad, NJ 80194', '1-480-984-5588', 'fklocko@example.com', '1999-09-01', 10, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(64, 'Emory Vandervort DDS', '59359 Norval Harbor Suite 807\nWest Alex, MI 45127', '475.863.8829', 'orion27@example.net', '2000-08-02', 15, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(65, 'Dr. Jimmie Kling III', '4015 Lizzie Street Apt. 125\nKuhlmanhaven, MO 66511', '(775) 684-5835', 'wrodriguez@example.com', '2002-02-02', 5, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(66, 'Leilani Miller', '7576 Upton Expressway\nNew Kayla, LA 56012-4508', '+1.534.878.3422', 'emile.aufderhar@example.net', '2023-02-24', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(67, 'Melody Ziemann DDS', '2145 Feest Squares\nEast Ahmad, IL 10779', '534.941.3891', 'rozella.stroman@example.com', '1997-02-06', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(68, 'Guiseppe Reynolds', '44574 Rodriguez Circles\nNew Arvidport, DE 43726', '(781) 347-5055', 'sofia72@example.net', '1991-12-20', 8, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(69, 'Rosalyn Johns', '44110 Angelo Skyway\nPort Nathenmouth, MN 34036-5938', '(413) 701-8828', 'gilberto.christiansen@example.com', '1972-02-05', 10, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(70, 'Adaline Hauck DVM', '33517 Labadie Wall\nLake Lenoreview, RI 70942', '+14079490673', 'bcrooks@example.com', '1997-01-07', 7, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(71, 'Kurtis Bayer', '8599 Reese Fords Suite 930\nNew Nathanaelport, NH 86580', '320.784.3756', 'hettie.konopelski@example.net', '2008-03-02', 5, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(72, 'Prof. Delfina Kub', '470 Lincoln Mission Suite 616\nSchinnermouth, AZ 84281-3059', '325.315.1154', 'ludie81@example.net', '1984-11-12', 9, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(73, 'Nova Leuschke', '55036 Langworth Causeway\nEast Eleonoreborough, MS 11878-9823', '+13136482143', 'ally.feil@example.com', '1988-08-28', 14, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(74, 'Gustave Grady', '859 Ryan Trail\nHertaborough, MO 65967', '+1-262-868-2283', 'dickens.magdalena@example.org', '2003-04-13', 9, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(75, 'Beth Kunde', '886 Vidal Lodge Apt. 186\nSouth Greg, NC 64472-5337', '+1-989-265-9410', 'caesar54@example.org', '1994-05-15', 5, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(76, 'Miss Jeanne Reilly Sr.', '652 Pollich Summit Apt. 322\nLake Leann, MO 45273-5651', '+14127034599', 'owillms@example.net', '2014-11-29', 15, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(77, 'Lucinda D\'Amore PhD', '136 Braun Lodge Apt. 561\nSouth Eleonorefort, DC 34146', '+1 (220) 547-2332', 'okemmer@example.com', '1977-11-01', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(78, 'Beulah Schneider', '2287 Vincenza Ferry\nFletafurt, DE 98984', '+19075695627', 'rleuschke@example.com', '1999-11-13', 6, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(79, 'Penelope Blick', '448 Catalina Island Apt. 197\nEmmetthaven, NY 36610-3390', '857.706.5383', 'izaiah80@example.com', '1979-09-28', 5, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(80, 'Jeffery Spinka', '668 Considine Turnpike\nFerryborough, ND 46066', '1-575-649-4786', 'alexandrea.batz@example.com', '1985-01-23', 1, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(81, 'Antonietta Mueller DVM', '111 Bins Ridge\nShannonmouth, NM 77869', '1-341-570-0848', 'janie.lindgren@example.org', '1991-06-06', 11, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(82, 'Miss Laney Walter', '9324 Robel Crossing Apt. 920\nConsueloberg, UT 35543-3494', '1-225-570-6732', 'peyton.beahan@example.com', '1997-01-07', 14, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(83, 'Christop Mohr V', '95531 Roger Motorway Suite 315\nKerlukeville, CT 18281', '+1.562.516.9799', 'gorczany.newell@example.org', '1977-04-06', 10, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(84, 'Filomena Dicki DVM', '7552 Hank Passage\nBoscochester, MD 68961', '(678) 709-8874', 'nathaniel.considine@example.net', '2001-03-15', 12, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(85, 'Prof. Serenity Jacobi MD', '1543 Richard Bridge\nEast Marcelina, MT 67190', '747-800-0317', 'davis.eldred@example.net', '1986-04-28', 11, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(86, 'Francisco Gleichner', '659 Toni Harbor\nPort Monserrat, AZ 80748-5959', '+1-940-552-2023', 'jaylin.schuppe@example.org', '1984-02-09', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(87, 'Prof. Lexus Gleason MD', '73239 Klocko Vista Apt. 238\nNew Myles, ID 17381-1332', '(413) 562-9927', 'berge.stuart@example.org', '1970-12-29', 12, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(88, 'Geovanni Runolfsson', '63759 Gust Village\nWest Deloresside, WA 73175', '1-860-766-3860', 'lemke.kevin@example.com', '2018-04-14', 10, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(89, 'Dr. Brycen Batz V', '6406 Bogan Loop Apt. 324\nSwaniawskibury, PA 27435', '(770) 440-7566', 'dare.lexi@example.org', '2010-01-01', 3, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(90, 'Clarabelle Steuber', '5707 Lupe Fort Apt. 492\nNew Brookton, OR 65202-0102', '1-564-897-1051', 'tyree.vandervort@example.com', '2021-11-10', 12, '2024-02-21 02:13:23', '2024-02-21 02:13:23'),
(91, 'Ms. Stephany Streich IV', '2027 Kutch ForkSmithton, NJ 56253', '352.591.4577i908', 'vschaefer@example.org', '1971-11-25', 1, '2024-02-21 02:13:23', '2024-02-28 00:21:47'),
(107, 'Paul Dawson', '6806 boul. Monk', '4388224300', 'pwdawson90@gmail.com', '2024-02-02', 5, '2024-02-28 00:25:13', '2024-02-28 00:25:13');



