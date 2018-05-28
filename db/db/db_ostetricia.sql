-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 28, 2018 alle 16:47
-- Versione del server: 10.1.32-MariaDB
-- Versione PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ostetricia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'Ostetricia', 'Ostetricia2018_tp');

-- --------------------------------------------------------

--
-- Struttura della tabella `annualita`
--

CREATE TABLE `annualita` (
  `Id` int(11) NOT NULL,
  `Quota` int(11) NOT NULL,
  `Anno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `annualita`
--

INSERT INTO `annualita` (`Id`, `Quota`, `Anno`) VALUES
(1, 0, 2018),
(2, 0, 2017),
(3, 0, 2012),
(4, 0, 2014),
(5, 0, 2015);

-- --------------------------------------------------------

--
-- Struttura della tabella `formazione`
--

CREATE TABLE `formazione` (
  `Id` int(11) NOT NULL,
  `Id_utente` int(11) NOT NULL,
  `Data_rilascio` date NOT NULL,
  `Nome_titolo` varchar(109) NOT NULL,
  `Luogo_consegna` varchar(79) NOT NULL,
  `Comune_consegna` varchar(79) NOT NULL,
  `Provincia_consegna` varchar(79) NOT NULL,
  `Tipo_titolo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `formazione`
--

INSERT INTO `formazione` (`Id`, `Id_utente`, `Data_rilascio`, `Nome_titolo`, `Luogo_consegna`, `Comune_consegna`, `Provincia_consegna`, `Tipo_titolo`) VALUES
(1, 4, '2006-12-01', 'Ostetrica', 'Trapani ', 'Trapani', 'TP', 'Laurea'),
(2, 5, '1997-07-10', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(3, 6, '1996-07-05', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(4, 7, '2009-03-27', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea'),
(5, 8, '1994-06-30', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(6, 9, '2005-11-25', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea'),
(7, 10, '2011-11-30', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Laurea'),
(8, 11, '1990-06-22', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(9, 12, '2002-11-26', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(10, 13, '2015-11-24', 'Ostetrica', 'cagliari', 'cagliari', 'CA', 'Laurea'),
(11, 14, '1994-06-30', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(12, 15, '1983-07-16', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(13, 16, '2001-11-30', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(14, 17, '2015-11-30', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea'),
(15, 18, '2010-11-12', 'Ostetrica', 'Parma', 'Parma', 'PR', 'Laurea'),
(16, 19, '1996-07-05', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(17, 20, '2009-11-28', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea'),
(18, 21, '1989-06-23', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(19, 22, '2013-11-08', 'Ostetrica', 'Padova', 'Padova', 'PD', 'Laurea'),
(20, 23, '1990-06-22', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(21, 24, '2003-11-28', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(22, 25, '2018-03-13', 'Ostetrica', 'Roma Sapienza', 'Roma', 'RO', 'Laurea'),
(23, 25, '1998-07-06', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(24, 26, '1980-09-10', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(25, 27, '1997-07-10', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(26, 28, '1976-07-15', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(27, 29, '1985-07-05', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Diploma'),
(28, 30, '1993-07-02', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(29, 31, '2005-11-25', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Laurea'),
(30, 32, '2005-11-25', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea'),
(31, 33, '1998-07-06', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(32, 34, '2001-11-30', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(33, 35, '1989-06-23', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(34, 36, '1996-07-05', 'Ostetrico', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(35, 37, '2017-11-24', 'Ostetrica', 'Brescia', 'brescia', 'BS', 'Laurea'),
(36, 38, '2005-11-25', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Laurea'),
(37, 39, '2005-11-25', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Laurea'),
(38, 40, '1995-07-07', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Diploma'),
(39, 41, '2003-11-28', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(40, 42, '1990-06-22', 'Ostetrica', 'Trapani', 'Trapani', 'TP', 'Diploma'),
(41, 43, '2004-11-26', 'Ostetrica', 'Palermo', 'Palermo', 'PA', 'Laurea');

-- --------------------------------------------------------

--
-- Struttura della tabella `formazione_post_base`
--

CREATE TABLE `formazione_post_base` (
  `Id` int(11) NOT NULL,
  `Id_utente` int(11) NOT NULL,
  `Data_rilascio` date NOT NULL,
  `Nome_titolo` varchar(109) NOT NULL,
  `Luogo_consegna` varchar(79) NOT NULL,
  `Comune_consegna` varchar(79) NOT NULL,
  `Provincia_consegna` varchar(79) NOT NULL,
  `Tipo_titolo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamenti`
--

CREATE TABLE `pagamenti` (
  `Id` int(11) NOT NULL,
  `Id_annualita` int(11) NOT NULL,
  `Id_utente` int(11) NOT NULL,
  `Importo` int(11) NOT NULL,
  `Data_pagamento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `pagamenti`
--

INSERT INTO `pagamenti` (`Id`, `Id_annualita`, `Id_utente`, `Importo`, `Data_pagamento`) VALUES
(1, 2, 4, 0, '2018-01-20'),
(2, 1, 4, 0, '2018-05-03'),
(3, 3, 4, 0, '2012-05-23'),
(4, 4, 4, 0, '2014-05-01'),
(5, 5, 4, 0, '2015-05-01');

-- --------------------------------------------------------

--
-- Struttura della tabella `provvedimenti_disciplinari`
--

CREATE TABLE `provvedimenti_disciplinari` (
  `Id` int(11) NOT NULL,
  `Id_utente` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Tipo_provvedimento` varchar(200) NOT NULL,
  `Data_inizio` date NOT NULL,
  `Data_fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `titoli_professionali`
--

CREATE TABLE `titoli_professionali` (
  `Id` int(11) NOT NULL,
  `Nome_titolo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `titol_diploma`
--

CREATE TABLE `titol_diploma` (
  `Id` int(11) NOT NULL,
  `Nome_titolo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `trasferimenti`
--

CREATE TABLE `trasferimenti` (
  `Id` int(11) NOT NULL,
  `Data_trasferimento` date NOT NULL,
  `Collegio_partenza` varchar(300) NOT NULL,
  `Collegio_destinazione` varchar(300) NOT NULL,
  `Id_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `Data_Nascita` date NOT NULL,
  `Comune_nascita` varchar(300) NOT NULL,
  `Sesso` varchar(12) NOT NULL,
  `Cittadinanza` varchar(300) NOT NULL,
  `Data_iscrizione` date NOT NULL,
  `Data_disiscrizione` date NOT NULL,
  `Nazione` varchar(100) NOT NULL,
  `Regione` varchar(100) NOT NULL,
  `Citta` varchar(100) NOT NULL,
  `Provincia` varchar(100) NOT NULL,
  `Cap` int(5) NOT NULL,
  `Indirizzo` varchar(100) NOT NULL,
  `Tel_Fisso` bigint(20) NOT NULL,
  `Cellulare` bigint(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Cod_Fiscale` varchar(16) NOT NULL,
  `Numero_iscrizione` int(100) NOT NULL,
  `Pec` varchar(400) NOT NULL,
  `Foto` varchar(999) NOT NULL,
  `Attivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Id`, `Nome`, `Cognome`, `Data_Nascita`, `Comune_nascita`, `Sesso`, `Cittadinanza`, `Data_iscrizione`, `Data_disiscrizione`, `Nazione`, `Regione`, `Citta`, `Provincia`, `Cap`, `Indirizzo`, `Tel_Fisso`, `Cellulare`, `Email`, `Cod_Fiscale`, `Numero_iscrizione`, `Pec`, `Foto`, `Attivo`) VALUES
(4, 'Eleonora', 'Abate', '1984-06-22', 'Castelvetrano', 'Femmina', 'Italiana', '2018-05-21', '0000-00-00', 'italia', 'sicilia', 'Castelvetrano', 'trapani', 91022, 'Via NicolÃ² Garzilli 41', 0, 3280748906, 'eleonora.abate@alice.it', 'LNRBTA84H62C286R', 752, 'eleonora.abate@alice.it', '', 1),
(5, 'Gisella', 'Abate', '1976-06-19', 'Sciacca', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Santa Margherita di Belice', 'Agrigento', 92018, 'Via Traina 19 ', 0, 3381683940, 'gilla76@virgilio.it', 'GSLBTA76H59I533T', 631, 'gilla76@virgilio.it', '', 1),
(6, 'Giuseppe', 'Acabbo', '1968-01-14', 'Trapani', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Termini Imerese', 'Palermo', 90018, 'VIA GUGLIELMO MARCONI 16/A', 0, 3331066290, 'acabbogiuseppe@gmail.com', 'CBBGPP68A14L331H', 605, '', '', 1),
(7, 'Giuseppina', 'Accardi', '1986-08-27', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Santa Ninfa', 'trapani', 91029, 'VIA PLATONE 6', 923565152, 3288934865, 'giusyaccardi@hotmail.it', 'CCRGPP86M67F061N', 777, '', '', 1),
(8, 'Francesca', 'Accardo', '1965-04-28', 'Calatafimi Segesta', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Calatafimi Segesta', 'trapani', 91013, 'N. 2VARO 15', 0, 3280488135, 'francescaacc@libero.it', 'CCRFNC65D68B385T', 560, '', '', 1),
(9, 'Sara', 'Agosta', '1982-09-27', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'XITTA VIA PONTE SALEMI 20', 0, 3453454166, 'sragst@yahoo.it', 'GSTSRA82P67D423L', 698, '', '', 1),
(10, 'Maria', 'Alagna', '1985-01-13', 'Castelvetrano', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Campobello di Mazara', 'trapani', 91021, 'VIA ARNALDO DA BRESCIA 52', 0, 3287304540, 'mariaalagna@hotmail.it', 'LGNMRA85A53C286N', 808, '', '', 1),
(11, 'Evangelista', 'Aleo', '1960-09-24', 'Paceco', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Paceco', 'trapani', 91027, 'VIA LONERO 24', 0, 3395292142, 'angela.aleo@libero.it', 'LAEVGL60P24G208P', 489, 'angela.aleo@libero.it', '', 1),
(12, 'Annalisa', 'Alesi', '1980-08-13', 'Alcamo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA GIOVANBATTISTA FARDELLA 12', 0, 3397591982, 'annalyse80@hotmail.com', 'LSANLS80M53A176Z', 721, '', '', 1),
(13, 'Catherine', 'Alonzo', '1994-01-07', 'Salemi', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Salemi', 'trapani', 91018, 'VIA PAOLO ORSI 11', 0, 3273358129, 'kittyalonzo@hotmail.it', 'LNZCHR94A47H700S', 830, '', '', 1),
(14, 'Maria Antonietta', 'Andolina', '1971-06-21', 'Trapani', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'Emilia Romagna', 'GOSSOLENGO', 'Piacenza', 29020, 'VIA FORNACE 53', 3472380805, 3336760457, 'andolina.mirella@libero.it', 'NDLMNT71H61L331K', 550, '', '', 1),
(15, 'Rosalia', 'Angelo', '1959-10-20', 'Salemi', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Salemi', 'trapani', 91018, 'CONTRADA VADO 170/A', 0, 3393385555, 'a.rosalia@tiscali.it', 'NGLRSL59R60H700C', 365, '', '', 1),
(16, 'Nicola', 'Anselmo', '1974-09-27', 'Erice', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'Lombardia', 'milano', 'MI', 20139, 'VIA GAMBOLOITA 4', 0, 0, 'nicodelmo@tiscali.it', 'NSLNCL74P27D423F', 706, '', '', 1),
(17, 'Enzamaria', 'Arena', '1994-03-05', 'Palermo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Castellammare del Go', 'trapani', 91014, 'C/DA BOCCA DELLA CARRUBA 160', 92433819, 3898394067, 'enzamaria.94@gmail.com', 'RNANMR94C45G273M', 831, 'enzamaria.arena@pec.it', '', 1),
(18, 'Sonia', 'Arena', '1988-07-04', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'Lombardia', 'LEVATA CURTATONE - M', 'Mantova', 46010, 'VIA FRATELLI CERVI 6', 0, 3295857748, 'sonia.arena@hotmail.it', 'RNASNO88L44F061A', 797, '', '', 1),
(19, 'Giuseppe', 'Asta', '1972-05-06', 'Alcamo', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Alcamo', 'trapani', 91011, 'VIA CAPORALE STEFANO GARRISI 1', 0, 3387009521, '', 'STAGPP72E06A176R', 595, '', '', 1),
(20, 'Rosa Anna', 'Avellone', '1985-07-06', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Paceco - Nubia', 'trapani', 91027, 'NUBIA CORTILE VITO BARBERA 20', 0, 0, 'rosaanna.avellone@libero.it', 'VLLRNN85L46D423N', 788, '', '', 1),
(21, 'Sebastiano', 'Avena', '1963-09-18', 'Calatafimi Segesta', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'Lombardia', 'CERNUSCO LOMBARDONE ', 'LECCO', 23870, 'VIA PENSIERO 5', 0, 0, '', 'VNASST63P18B385N', 471, '', '', 1),
(22, 'Veronica', 'Bacile', '1991-02-07', 'Salemi', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Partanna', 'trapani', 91028, 'VIA GIOVANNI PAOLO II 36', 0, 0, 'bacilev@libero.it', 'BCLVNC91B47H700N', 823, '', '', 1),
(23, 'Epifania', 'Barbera', '1969-04-14', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Campobello di Mazara', 'trapani', 91021, 'VIA CALVARIO 29', 924911613, 924912919, 'vitopuccio@libero.it', 'BRBPFN69D54F061L', 484, '', '', 1),
(24, 'Alessandra', 'Barracco', '1972-07-26', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Mazara del Vallo', 'trapani', 91026, 'VIA SALEMI 53', 923949957, 3462160154, 'alessandra.barracco@libero.it', 'BRRLSN72L66F061N', 732, '', '', 1),
(25, 'Stefania', 'Barraco', '1994-05-28', 'Salemi', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Mazara del Vallo', 'trapani', 91026, 'VIA SEBASTIAN BACH 11', 923908175, 3334027724, 'stefaniabarraco1994@libero.it', 'BRRSFN94E68H700X', 843, 'stefaniabarraco1994@postecert.it', '', 1),
(26, 'Giovanna', 'Battaglia', '1957-11-23', 'Castelvetrano', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Castelvetrano', 'trapani', 91022, 'VIA CESARE BATTISTI 38', 0, 0, '', 'BTTGNN57S63C286R', 357, '', '', 1),
(27, 'Antonino', 'Battiata', '1971-05-08', 'Erice', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Valderice', 'trapani', 91019, 'VIA OBERDAN 121/BIS', 0, 0, '', 'BTTNNN71E08D423Q', 614, '', '', 1),
(28, 'Anna Maria', 'Bernardo', '1954-12-25', 'Pantelleria', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Siracusa', 'Siracusa', 96100, 'VIA ALCIBIADE 7', 0, 0, '', 'BRNNMR54T65G315G', 333, '', '', 1),
(29, 'Annita Caterina', 'Bertacca', '1960-01-05', 'Trapani', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Castellammare del Go', 'trapani', 91014, 'VIA LOCARNO 3', 0, 0, '', 'BRTNTC60A45L331K', 725, '', '', 1),
(30, 'Catalda Silvana', 'Bertolino', '1968-11-03', 'Trapani', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA DEI MILLE 80', 923872347, 0, 'bertolinosilvana@live.it', 'BRTCLD68S43L331D', 548, '', '', 1),
(31, 'Maria Luisa', 'Bertolino', '1983-07-21', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Noventa Vicentina', 'Vicenza', 36025, 'VIA ANTICORTE 5 E', 0, 3493773245, 'marialuisa-3@hotmail.it', 'BRTMLS83L61F061F', 705, '', '', 1),
(32, 'Leandra Maria', 'Bianco', '1983-02-27', 'Caracas Venezuela', 'Femmina', 'Venezuelana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Catania', 'Catania', 95123, 'VIA SAN PIETRO CLARENZA 11', 0, 3207705720, 'leandrabianco@virgilio.it', 'BNCLDR83B67Z614S', 702, '', '', 1),
(33, 'Palma Flavia', 'Bica', '1969-12-19', 'Santa Flavia', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA PALMA 45', 0, 3200298012, 'palma.flavia.bica@alice.it', 'BCIPMF69T59I188C', 665, '', '', 1),
(34, 'Romina', 'Bica', '1979-07-12', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Custonaci', 'trapani', 91015, 'VIA ENNA 25', 0, 3202229407, 'rominabica@yahoo.it', 'BCIRMN79L52D423A', 707, '', '', 1),
(35, 'Antonina', 'Biondo', '1967-10-07', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Mazara del Vallo', 'trapani', 91026, 'VIA ALBERTO SAVINO 5', 0, 3282651419, '', 'BNDNNN67R47F061Z', 482, '', '', 1),
(36, 'Francesco', 'Blunda', '1967-12-25', 'Alcamo', 'Maschio', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Alcamo', 'trapani', 91011, 'VIA FRATELLI S.ANNA 121', 0, 3923036360, '', 'BLNFNC67T25A176B', 596, '', '', 1),
(37, 'Sara', 'Bonanno', '1995-03-04', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Mazara del Vallo', 'trapani', 91026, 'VIA LODI 1', 3496040580, 3920081055, 'sarabonnib@gmail.com', 'BNNSRA95C44F061L', 840, '', '', 1),
(38, 'Milena', 'Bonaventura', '1983-09-16', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Erice-Napola', 'trapani', 91016, ' VIA MILANO 107-NAPOLA', 0, 3201958241, 'milenabonaventura@yahoo.it', 'BNVMLN83P56D423O', 717, 'milenabonaventura@yahoo.it', '', 1),
(39, 'Sonia', 'Bonfiglio', '1983-03-19', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Erice Casa Santa', 'trapani', 91016, 'VIA B. QUARTANA 9', 0, 3207160395, '', 'BNFSNO83C59D423W', 742, '', '', 1),
(40, 'Ginetta', 'Bongiorno', '1967-09-24', 'Castelvetrano', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'Lombardia', 'ALMENNO SAN BARTOLOM', 'BG', 24030, 'VIA VERDI 47', 0, 0, '', 'BNGGTT67P64C286H', 583, '', '', 1),
(41, 'Valentina', 'Bono', '1981-06-02', 'Mazara del Vallo', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Gravina di Catania', 'Catania', 95030, 'VIA V. BELLINI 51', 0, 0, '', 'BNOVNT81H42F061M', 734, '', '', 1),
(42, 'Filippa', 'Burgarella', '1968-07-03', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA DELLE OREADI 55', 923538322, 3338361365, 'despar0536@email.it', 'BRGFPP68L43D423K', 495, '', '', 1),
(43, 'Maria Luana', 'Burgarella', '1982-06-17', 'Erice', 'Femmina', 'Italiana', '2018-05-23', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA EVANGELISTA DI BLASI 2', 92324548, 3496094345, '', 'BRGMLN82H57D423M', 747, '', '', 1),
(44, 'Giovanna', 'Cammareri', '1983-09-03', 'Erice', 'Femmina', 'Italiana', '2018-05-28', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'VIA DELL\'ULIVO 43', 0, 3497865374, 'gio83_8@libero.it', 'CMMGNN83P43D423B', 781, '', '', 1),
(45, 'Mario', 'Rossi', '1993-04-11', 'Erice', 'Maschio', 'Italiana', '2017-02-22', '0000-00-00', 'italia', 'sicilia', 'Trapani', 'trapani', 91100, 'Via NicolÃ² Garzilli 41', 923455643, 123456789, 'mariorossi@mario.mario', 'RSSMRA94S11D423N', 1000, 'mariorossi@mario.mario', '', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `annualita`
--
ALTER TABLE `annualita`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `formazione`
--
ALTER TABLE `formazione`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `formazione_post_base`
--
ALTER TABLE `formazione_post_base`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `pagamenti`
--
ALTER TABLE `pagamenti`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `provvedimenti_disciplinari`
--
ALTER TABLE `provvedimenti_disciplinari`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `titoli_professionali`
--
ALTER TABLE `titoli_professionali`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `titol_diploma`
--
ALTER TABLE `titol_diploma`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `trasferimenti`
--
ALTER TABLE `trasferimenti`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `annualita`
--
ALTER TABLE `annualita`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `formazione`
--
ALTER TABLE `formazione`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT per la tabella `formazione_post_base`
--
ALTER TABLE `formazione_post_base`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `pagamenti`
--
ALTER TABLE `pagamenti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `provvedimenti_disciplinari`
--
ALTER TABLE `provvedimenti_disciplinari`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `titoli_professionali`
--
ALTER TABLE `titoli_professionali`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `titol_diploma`
--
ALTER TABLE `titol_diploma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `trasferimenti`
--
ALTER TABLE `trasferimenti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
