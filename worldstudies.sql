-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 04:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldstudies`
--

-- --------------------------------------------------------

--
-- Table structure for table `citta`
--

CREATE TABLE `citta` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `nazione` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `adulto` tinyint(1) NOT NULL,
  `giovane` tinyint(1) NOT NULL,
  `img` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `descrizione` varchar(500) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `citta`
--

INSERT INTO `citta` (`id`, `nome`, `nazione`, `adulto`, `giovane`, `img`, `descrizione`) VALUES
(1, 'Londra', 'Gran Bretagna', 1, 1, 'londra.jpg', 'Londra, capitale dell\'Inghilterra e del Regno Unito, è una città estremamente contemporanea con una storia che risale all\'antica Roma. Nel suo centro sorgono l\'imponente Palazzo del Parlamento, l\'iconica torre dell\'orologio nota come Big Ben e l\'abbazia di Westminster, dove hanno luogo le incoronazioni dei monarchi britannici. Dall\'altra parte del Tamigi, la ruota panoramica London Eye offre la vista spettacolare del distretto culturale del South Bank e dell\'intera città.'),
(2, 'Brighton', 'Gran Bretagna', 1, 1, 'brighton.jpg', 'Brighton è una città balneare inglese. Situata a circa un\'ora in treno a sud di Londra, è una destinazione molto amata per le gite in giornata. La sua ampia spiaggia di ghiaia è caratterizzata da sale giochi ed edifici in stile regency. Il Brighton Pier, nella sezione centrale del lungomare, è stato inaugurato nel 1899 e ora ha di giostre e punti di ristoro. La città è nota anche per la vita notturna, la scena artistica, i negozi e i festival.'),
(3, 'Bournemouth', 'Gran Bretagna', 1, 1, 'bournemouth.jpg', 'Bournemouth è una località balneare sulla costa meridionale dell\'Inghilterra, nota per le spiagge di 11,2 km, l\'architettura vittoriana e la vivace vita notturna in zone come il Triangle. Questa località comprende anche il Bournemouth Pier, centro di attività con percorso a ostacoli, parete di arrampicata e specie di piante di tre continenti'),
(4, 'Cambridge', 'Gran Bretagna', 1, 1, 'cambridge.jpg', 'Cambridge si trova sul fiume Cam, nella parte orientale dell\'Inghilterra, ed è sede della prestigiosa Università di Cambridge, fondata nel 1209. Tra i college universitari si contano il King\'s College, famoso per il coro e l\'imponente cappella gotica, il Trinity College, fondato da Enrico VIII, e il St. John\'s College con la Great Gate risalente al XVI secolo. I musei dell\'università hanno sezioni dedicate ad archeologia e antropologia, esplorazioni polari, scienza e zoologia.'),
(5, 'Oxford', 'Gran Bretagna', 1, 1, 'oxford.jpg', 'Oxford, una città dell\'Inghilterra Centro-meridionale, ruota intorno alle sue prestigiose università, fondate nel XII secolo. L\'architettura dei 38 collegi che riempiono il suo centro medievale spinse il poeta Matthew Arnold ad attribuire a Oxford il soprannome di \"città delle guglie sognanti\".'),
(6, 'Edimburgo', 'Gran Bretagna', 1, 0, 'edimburgo.jpg', 'Edimburgo è una città del Regno Unito. Seconda città più popolosa della Scozia, della quale è capitale, è anche la settima città più popolosa del Paese, con 464990 abitanti al 2014, ne conta 492680 nell\'area dell\'omonima autorità locale e 1339380 per l\'intera area metropolitana.'),
(7, 'Torquay', 'Gran Bretagna', 0, 1, 'torquay.jpg', 'Torquay è una frazione costiera di Torbay, municipalità del Regno Unito nella contea inglese del Devon. Dista circa 30 km a sud di Exeter, capoluogo di contea, e circa 45 km est-nordest di Plymouth. Al censimento del 2011 contava 65 245 abitanti, terzo insediamento urbano più popoloso della contea.'),
(8, 'Dublino', 'Irlanda', 1, 1, 'dublino.jpg', 'Dublino, capitale della Repubblica d\'Irlanda, si trova sulla costa orientale dell\'Irlanda, alla foce del fiume Liffey. I suoi edifici storici più importanti sono il castello di Dublino, risalente al XIII secolo, e l’imponente Cattedrale di San Patrizio, fondata nel 1191. I parchi della città comprendono il paesaggistico St. Stephens Green e l’enorme Phoenix Park, all’interno del quale si trova lo Zoo di Dublino. Il Museo nazionale d\'Irlanda documenta il patrimonio culturale irlandese'),
(9, 'Galway', 'Irlanda', 0, 1, 'galway.jpg', 'Galway, una città portuale sulla costa occidentale dell’Irlanda, sorge nel punto in cui il fiume Corrib sfocia nell’Oceano Atlantico. Il cuore pulsante della città è Eyre Square, una piazza risalente al XVIII secolo, circondata da negozi e pub tradizionali in cui, spesso, si può ascoltare musica folk suonata dal vivo.'),
(10, 'St. Julians', 'Malta', 1, 1, 'stjulians.jpg', 'San Giuliano è una città balneare maltese nota per le spiagge, come quelle della Baia di Balluta, un tratto roccioso con un lungomare e ristoranti. Bar e discoteche sono disposti lungo le strade di Paceville, una zona a sud della spiaggia della Baia di San Giorgio. La Baia di Spinola ospita barche da pesca tradizionali, oltre al Palazzo Spinola, in stile barocco e caratterizzato da un orologio intagliato sulla facciata. Nella Baia di Portomaso si trovano un porto turistico e boutique di lusso.'),
(11, 'Citta Del Capo', 'Sudafrica', 1, 0, 'cittadelcapo.jpg', 'Città del Capo è una città portuale che sorge su una penisola dominata dall\'imponente Table Mountain, sulla costa sud-occidentale del Sudafrica. Un servizio di funivia risale lentamente la montagna fino a raggiungerne la cima, caratterizzata da una forma piatta. Qui si può godere di un ampio panorama sulla città e sul suo vivace porto, con le barche dirette a Robben Island, il famoso carcere dove fu imprigionato Nelson Mandela e che oggi è un museo all\'aperto.'),
(12, 'Sydney', 'Australia', 1, 0, 'sydney.jpg', 'Sydney, capitale del Nuovo Galles del Sud e una delle più grandi città australiane, è conosciuta soprattutto per la Sydney Opera House, una struttura dalla caratteristica forma di vela che sorge vicino al porto. L\'enorme Darling Harbour e il più piccolo Circular Quay, che si trovano vicino all\'Harbour Bridge e ai prestigiosi Royal Botanic Gardens, sono porti molto vivaci, mentre lo Skywalk, la terrazza della Sydney Tower, offre una vista a 360 gradi sulla città e sulla periferia.'),
(13, 'Brisbane', 'Australia', 1, 0, 'brisbane.jpg', 'Brisbane, capitale del Queensland, è una grande città situata sulle sponde del fiume Brisbane. Nel polo culturale concentrato sulla South Bank si trovano il Museo del Queensland e lo Sciencentre, dove si organizzano di frequente mostre interattive. Un\'altra istituzione culturale situata nella stessa zona è la Queensland Gallery of Modern Art, uno dei maggiori musei australiani di arte contemporanea. A dominare la città è il monte Coot-tha, dove sorgono i giardini botanici di Brisbane.'),
(14, 'Gold Coast - Surfers Paradise', 'Australia', 1, 0, 'goldcoast.jpg', 'La Gold Coast è una regione metropolitana a sud di Brisbane, sulla costa orientale dell\'Australia. È famosa per le lunghe spiagge sabbiose, il surf e l’elaborato sistema di canali navigabili e corsi d\'acqua. La città è anche sede di parchi a tema come Dreamworld, Sea World e Wet\'n\'Wild. Nell’entroterra, i sentieri escursionistici attraversano le catene montuose e le valli del Parco Nazionale di Lamington, dove si trovano uccelli rari e la foresta pluviale.'),
(15, 'Perth', 'Australia', 1, 0, 'perth.jpg', 'Perth, capitale dell\'Australia Occidentale, è situata nel punto in cui il fiume Swan incontra la costa sud-occidentale. I suoi sobborghi sono un susseguirsi di spiagge sabbiose e ospitano l\'enorme Kings Park, sulla riva del fiume, e il Botanic Garden sul Mount Eliza, che offre meravigliose vedute della città. Il Perth Cultural Centre è sede delle compagnie statali di ballo e di opera, e occupa un intero distretto, dove si trovano un teatro, gallerie d\'arte e il Western Australian Museum.'),
(16, 'Auckland', 'Nuova zelanda', 1, 0, 'auckland.jpg', 'Auckland, che si sviluppa intorno a 2 grandi porti, è una grande città nel nord della Nuova Zelanda. Sulla centrale Queen Street, la famosa Sky Tower offre una vista panoramica del Viaduct Harbour, dove si trovano grandi yacht, bar e caffè. Auckland Domain, il parco più antico della città, sorge intorno a un vulcano spento e ospita un giardino d\'inverno formale. Vicino al centro, si sviluppa il lungomare di Mission Bay Beach.'),
(17, 'New York', 'Stati Uniti', 1, 0, 'newyork.jpg', 'New York si trova alla foce del fiume Hudson, sull\'Oceano Atlantico, e comprende 5 distretti. Manhattan, il suo cuore pulsante, è considerato uno dei poli commerciali, finanziari e culturali più importanti al mondo. I luoghi più caratteristici della metropoli sono i grattacieli come l\'Empire State Building e l\'estesa zona di Central Park. Il teatro di Broadway è illuminato dai neon di Times Square.'),
(18, 'Miami', 'Stati Uniti', 1, 0, 'miami.jpg', 'Miami è una città internazionale che sorge sul capo sudorientale della Florida. L\'influenza di Cuba si riflette nei bar e nei negozi di sigari che popolano il viale Calle Ocho nel quartiere di Little Havana. Su una fascia di isole al di là delle acque turchesi della Baia di Biscayne sorge invece la città di Miami Beach, dove si trova South Beach. Questo quartiere ricco di stile è famoso per i colorati edifici Art déco, la sabbia bianca, gli alberghi sul mare e i nightclub alla moda.'),
(19, 'San Diego - La Jolla', 'Stati Uniti', 1, 0, 'sandiego.jpg', 'La Jolla è un\'elegante area sul mare nota per la costa rocciosa. I sentieri della Torrey Pines State Natural Reserve si snodano attraverso pinete e canyon di arenaria, mentre in cima alle scogliere sul mare si trovano i 2 campi da golf del celebre Torrey Pines Golf Course. La spiaggia di La Jolla Cove offre una splendida vista sul mare e le pozze di marea di Shell Beach ospitano anemoni e granchi. Eleganti boutique e ristoranti con vista sul mare si affacciano sulle vie del La Jolla Village. '),
(20, 'Los Angeles - Santa Monica', 'Stati Uniti', 1, 0, 'losangeles.jpg', 'Santa Monica è una città costiera a ovest del centro di Los Angeles. La sua spiaggia è orlata da Palisades Park, che offre viste panoramiche dell\'oceano Pacifico. Il Molo di Santa Monica ospita il parco divertimenti Pacific Park, la storica giostra di cavalli Looff Hippodrome e il Santa Monica Pier Aquarium. Accanto al molo si trova Muscle Beach, palestra all\'aperto fondata negli anni \'30. Il Bergamot Station, in centro città, ospita varie gallerie d\'arte.'),
(21, 'Vancouver', 'Canada', 1, 0, 'vancouver.jpg', 'Vancouver, un vivace porto della British Columbia, è tra le città più popolate e multiculturali del Canada. Circondata dalle montagne, la città ospita molti set cinematografici e offre una scena artistica, teatrale e culturale molto animata. La Vancouver Art Gallery è conosciuta per le opere di artisti locali, mentre il Museo di antropologia espone importanti collezioni delle Prime Nazioni.'),
(22, 'Toronto', 'Canada', 1, 0, 'toronto.jpg', 'Toronto, capitale della provincia dell\'Ontario, è una delle principali città canadesi situata lungo le rive del Lago Ontario. Metropoli dinamica, ha un nucleo di grattacieli svettanti su cui domina l\'iconica CN Tower. La città è caratterizzata anche da numerosi spazi verdi, dall\'ovale Queen\'s Park ai 400 acri di High Park, ricco di sentieri, impianti sportivi e zoo.'),
(23, 'Berlino', 'Germania', 1, 1, 'berlino.jpg', 'Berlino, la capitale della Germania, fu fondata nel XIII secolo. Il Memoriale dell\'Olocausto e le parti restanti del muro di Berlino, ricoperte di graffiti, testimoniano la difficile storia della città nel corso del XX secolo. Durante la guerra fredda, la città fu divisa in due parti, e la Porta di Brandeburgo, del XVIII secolo, è diventata il simbolo della sua riunificazione.'),
(24, 'Amburgo', 'Germania', 1, 0, 'amburgo.jpg', 'Amburgo, una delle più importanti città portuali della Germania, è collegata al Mare del Nord grazie al fiume Elba. È attraversata da centinaia di canali, e ospita numerosi parchi. Il Lago Binnenalster, vicino al centro, ospita numerose barche ed è circondato da caffè. Il viale centrale di Jungfernstieg collega la Neustadt (città nuova) con la Alstadt (città vecchia), dove si trovano monumenti come la chiesta di San Michele del XVIII secolo.'),
(25, 'Colonia', 'Germania', 1, 0, 'colonia.jpg', 'Colonia, una città di 2000 anni affacciata sul fiume Reno nella Germania Occidentale, è il centro culturale della regione. Il famoso Duomo di Colonia, esempio di architettura tardo gotica nel centro storico ricostruito, caratterizzato dalle due torri cuspidate è noto anche per il reliquiario dorato medievale e la vista panoramica sul fiume. Il Museo Ludwig adiacente espone arte del XX secolo, inclusi molti capolavori di Picasso. Il Römisch-Germanisches Museum ospita reperti romani.'),
(26, 'Monaco', 'Germania', 1, 1, 'monaco.jpg', 'Monaco, la capitale della Baviera, ospita edifici antichi e numerosi musei. La città è conosciuta per l’annuale Oktoberfest e per le birrerie, tra cui la celebre Hofbräuhaus, fondata nel 1589. In Marienplatz, la piazza centrale dell’Altstadt (città vecchia), si trovano monumenti come il Neues Rathaus, il municipio in stile neogotico con il Glockenspiel, un carillon le cui statuine rappresentano eventi avvenuti nel XVI secolo.'),
(27, 'Freiburg', 'Germania', 1, 0, 'freiburg.jpg', 'Freiburg è un comune tedesco del circondario di Stade, nella Bassa Sassonia, di 1.968 abitanti.'),
(28, 'Lindau', 'Germania', 1, 1, 'lindau.jpg', 'Lindau è una città sul lago di Costanza, noto anche come Bodensee, nella Baviera tedesca. È conosciuta per il centro storico, situato su un\'isola. Nel porto si trovano la statua del Leone bavarese e il faro in pietra di Lindau, che offre una prospettiva sul lago e sulle montagne.'),
(29, 'Badschussenried', 'Germania', 0, 1, 'badschussenried.jpg', 'Bad Schussenried è una città tedesca situata nel land del Baden-Württemberg.'),
(30, 'Lindenberg', 'Germania', 0, 1, 'lindenberg.jpg', 'Lindenberg im Allgäu è una città tedesca di 11 500 abitanti, situata nel land della Baviera.'),
(31, 'Kempten', 'Germania', 0, 1, 'kempten.jpg', 'Kempten è una città extracircondariale di 69 151 abitanti nel distretto governativo bavarese di Svevia, in Germania.'),
(32, 'Augsburg', 'Germania', 0, 1, 'augsburg.jpg', 'Augusta, in Baviera, è una delle città più antiche della Germania. L\'architettura varia nel centro comprende case delle corporazioni medievali, la Cattedrale del XI secolo e l\'abbazia di Sankt Ulrich und Afra. I principali edifici rinascimentali sono la Municipio di Augusta, con la Sala d\'oro. Il Fuggerhaüser è la sede di una ricca dinastia bancaria e il Fuggerei è un complesso di alloggi sociali del XVI secolo.'),
(33, 'Friburgo in Brisgovia', 'Germania', 0, 1, 'friburgoinbrisgovia.jpg', 'Friburgo in Brisgovia, una vivace città universitaria nella Foresta Nera della Germania del sud-ovest, è conosciuta per il suo clima temperato e per la Città Vecchia medievale ricostruita, attraversata da pittoreschi ruscelli (bächle). Negli altopiani circostanti, Schlossberg, destinazione ideale per le escursioni, è collegata a Friburgo da una funicolare. Con una vistosa guglia di 116 m, la Cattedrale di Friburgo, in stile gotico, domina la piazza centrale di Münsterplatz.'),
(34, 'Vienna', 'Austria', 1, 1, 'vienna.jpg', 'Vienna, la capitale dell\'Austria, si trova sulle rive del Danubio, a est del paese. Il suo patrimonio artistico e intellettuale si è formato grazie all\'influenza di personalità come Mozart, Beethoven e Sigmunt Freud, che vissero nella città. Vienna è conosciuta anche per i palazzi imperiali come Schönbrunn, la residenza estiva degli Asburgo. L\'area del MuseumsQuartier ospita edifici storici e contemporanei dove sono esposte opere di Egon Schiele, Gustav Klimt e altri artisti.'),
(35, 'Zurigo ', 'Svizzera tedesca', 1, 0, 'zurigo.jpg', 'La città di Zurigo, centro bancario e finanziario internazionale, si trova all\'estremo nord del Lago di Zurigo, nel nord della Svizzera. La sua storia pre-medievale si riflette nelle pittoresche viuzze dell\'Altstadt, il centro storico, che si sviluppa su entrambe le rive del Limmat. Il fiume è fiancheggiato da passeggiate, come la Limmatquai, che conducono al Rathaus (municipio), risalente al XVII secolo.'),
(36, 'Engelberg', 'Svizzera tedesca', 0, 1, 'engelberg.jpg', 'Engelberg è un comune svizzero di 4 258 abitanti nel Canton Obvaldo'),
(37, 'Parigi', 'Francia', 1, 1, 'parigi.jpg', 'Parigi, capitale della Francia, è una delle città più importanti d\'Europa, centro mondiale di arte, moda, gastronomia e cultura. L\'architettura urbana risalente al XIX secolo è caratterizzata dagli ampi boulevard e dalla Senna. Oltre a monumenti come la Torre Eiffel e la cattedrale gotica di Notre-Dame, del XII secolo, la città è rinomata per i tradizionali caffè e per i negozi di alta moda lungo la Rue du Faubourg Saint-Honoré.'),
(38, 'Antibes', 'Francia', 1, 0, 'antibes.jpg', 'Antibes è una città tra Cannes e Nizza lungo la riviera francese (Costa Azzurra). È nota per il suo centro storico racchiuso dai bastioni del XVI secolo con il Forte Carré a forma di stella. Questa costruzione si affaccia sui lussuosi yacht del porticciolo Port Vauban. Il promontorio di Cap d\'Antibes, coperto dalla vegetazione, separa Antibes da Juan-les-Pins, una località chic con una vita notturna vivace e il festival musicale Jazz à Juan.'),
(39, 'Nizza', 'Francia', 0, 1, 'nizza.jpg', 'Nizza, capoluogo del dipartimento delle Alpi Marittime, è adagiata sulle spiagge di ciottoli della Baia degli Angeli, in Costa Azzurra. Fondata dai greci e frequentata dall\'élite europea durante il XIX secolo, la città è sempre stata luogo di ritrovo di artisti. La carriera di Henri Matisse viene ripercorsa dalla collezione di quadri del Musée Matisse a lui dedicato, mentre il Musée Marc Chagall mette in mostra alcuni dei dipinti religiosi più importanti dell\'artista.'),
(40, 'Cannes', 'Francia', 0, 1, 'cannes.jpg', 'Cannes è una località turistica situata sulla Costa Azzurra e famosa per il festival internazionale del cinema. Sul Boulevard de la Croisette, il viale che si estende lungo la costa, si trovano spiagge di sabbia, boutique esclusive e alberghi di lusso. La città è anche sede del Palazzo dei Festival e dei Congressi, un edificio moderno dotato di tappeto rosso e dell\'Allée des Stars, la Walk of Fame di Cannes.'),
(41, 'Montreux', 'Svizzera francese', 1, 1, 'montreux.jpg', 'Montreux è una tipica cittadina turistica che sorge sulle sponde del Lago di Ginevra. Incastonata tra le pendici dei monti e il lago, è famosa per il microclima temperato e per il Montreux Jazz Festival, che si svolge a luglio.'),
(42, 'Leysin', 'Svizzera francese', 0, 1, 'leysin.jpg', 'Leysin è un comune svizzero di 4 172 abitanti del Canton Vaud, nel distretto di Aigle.'),
(43, 'Barcellona', 'Spagna', 1, 0, 'barcellona.jpg', 'Barcellona, la cosmopolita capitale della regione spagnola della Catalogna, è celebre soprattutto per l\'arte e l\'architettura. La basilica della Sagrada Família e gli altri stravaganti edifici progettati da Antoni Gaudí sono il simbolo della città. Il Museo Picasso e la Fondazione Joan Miró espongono opere d\'arte dei due famosi artisti moderni. Il museo di storia cittadina MUHBA raccoglie numerosi reperti archeologici di epoca romana.'),
(44, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nazione`
--

CREATE TABLE `nazione` (
  `id` int(11) NOT NULL,
  `adulto` tinyint(1) NOT NULL,
  `giovane` tinyint(1) NOT NULL,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `continente` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `descrizione` varchar(500) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `nazione`
--

INSERT INTO `nazione` (`id`, `adulto`, `giovane`, `nome`, `continente`, `img`, `descrizione`) VALUES
(1, 1, 1, 'Gran Bretagna', 'Europa', 'granbretagna.jpg', ''),
(2, 1, 1, 'Irlanda', 'Europa', 'irlanda.jpg', ''),
(3, 1, 1, 'Malta', 'Europa', 'malta.jpg', ''),
(4, 1, 0, 'Sudafrica', 'Africa', 'sudafrica.jpg', ''),
(5, 1, 0, 'Australia', 'Oceania', 'australia.jpg', ''),
(6, 1, 0, 'Nuova Zelanda', 'Oceania', 'nuovazelanda.jpg', ''),
(7, 1, 0, 'Stati Uniti', 'America', 'statiuniti.jpg', ''),
(8, 1, 0, 'Canada', 'America', 'canada.jpg', ''),
(9, 1, 1, 'Germania', 'Europa', 'germania.jpg', ''),
(10, 1, 1, 'Austria', 'Europa', 'austria.jpg', ''),
(11, 1, 1, 'Svizzera Tedesca', 'Europa', 'svizzeratedesca.jpg', ''),
(12, 1, 1, 'Francia', 'Europa', 'francia.jpg', ''),
(13, 1, 1, 'Svizzera Francese', 'Europa', 'svizzerafrancese.jpg', ''),
(14, 1, 0, 'Spagna', 'Europa', 'spagna.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `scuola`
--

CREATE TABLE `scuola` (
  `id` int(11) NOT NULL,
  `adulto` tinyint(1) NOT NULL,
  `giovane` tinyint(1) NOT NULL,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `citta` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `nazione` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `scuola`
--

INSERT INTO `scuola` (`id`, `adulto`, `giovane`, `nome`, `citta`, `nazione`, `img`) VALUES
(1, 1, 0, 'St. Giles International', 'Londra', 'Gran Bretagna', 'StGilesLondra.jpg'),
(2, 1, 0, 'Burlington School', 'Londra', 'Gran Bretagna', 'BurlingtonSchoolLondra.jpg'),
(3, 0, 1, 'Alpadia Language School', 'Londra', 'Gran Bretagna', 'AlpadiaLanguageSchool.jpg'),
(4, 1, 0, 'St. Giles International', 'Brighton ', 'Gran Bretagna', 'StGilesBrighton.jpg'),
(5, 1, 0, 'ETC International College', 'Bournemouth', 'Gran Bretagna', 'ETCBournemouth.jpg'),
(6, 0, 1, 'ETC International College', 'Bournemouth', 'Gran Bretagna', 'ETCBournemouth.jpg'),
(7, 1, 0, 'St. Giles International', 'Cambridge', 'Gran Bretagna', 'StGilesCambridge.jpg'),
(8, 0, 1, 'EC Embassy Summer', 'Cambridge', 'Gran Bretagna', 'ECEmbassyCambridge'),
(9, 1, 0, 'EC Oxford', 'Oxford', 'Gran Bretagna', 'ECOxford.jpg'),
(10, 0, 1, 'EC Embassy Summer', 'Oxford', 'Gran Bretagna', 'ECEmbassyOxford.jpg'),
(11, 1, 0, 'Kaplan International Languages', 'Edimburgo', 'Gran Bretagna', 'KaplanEdimburgo.jpg'),
(12, 0, 1, 'Kaplan International Languages', 'Torquay', 'Gran Bretagna', 'KaplanTorquay.jpg'),
(13, 1, 0, 'Kaplan International Languages', 'Dublino', 'Irlanda', 'KaplanDublino.jpg'),
(14, 0, 1, 'Apollo Language Centre', 'Dublino', 'Irlanda', 'ApolloDublino.jpg'),
(15, 0, 1, 'Atlantic Language', 'Galway', 'Irlanda', 'AtlanticGalway.jpg'),
(16, 1, 0, 'EC Malta', 'St. Julians', 'Malta', 'ECMalta.jpg'),
(17, 0, 1, 'EC Embassy Summer', 'St. Julians', 'Malta', 'ECMalta.jpg'),
(18, 1, 0, 'EC Cape Town', 'Citta Del Capo', 'Sudafrica', 'ECCittaDelCapo.jpg'),
(19, 1, 0, 'Langports Sydney', 'Sydney', 'Australia', 'LangportsSydney.jpg'),
(20, 1, 0, 'Langports Brisbane', 'Brisbane', 'Australia', 'LangportsBrisbane.jpg'),
(21, 1, 0, 'Langports Gold Coast', 'Gold Coast - Surfers Paradise', 'Australia', 'LangportsGoldCoast.jpg'),
(22, 1, 0, 'Milner International College', 'Perth', 'Australia', 'MilnerPerth.jpg'),
(23, 1, 0, 'Languages International', 'Auckland', 'Nuova zelanda', 'LanguagesInternationalNuovaZelanda.jpg'),
(24, 1, 0, 'LSI Languages Studies International', 'New York', 'Stati Uniti', 'LSINewYork.jpg'),
(25, 1, 0, 'EC Miami', 'Miami', 'Stati Uniti', 'ECMiami.jpg'),
(26, 1, 0, 'EC San Diego', 'San Diego - La Jolla', 'Stati Uniti', 'ECSanDiego.jpg'),
(27, 1, 0, 'EC Los Angeles', 'Los Angeles - Santa Monica', 'Stati Uniti', 'ECLosAngeles.jpg'),
(28, 1, 0, 'GLS Deutsch Kurse', 'Berlino', 'Germania', 'GLSBerlino.jpg'),
(29, 1, 0, 'DID Deutsch Institut', 'Berlino', 'Germania', 'DIDBerlino.jpg'),
(30, 1, 0, 'Carl Duisberg Zentrum', 'Berlino', 'Germania', 'CarlDuisbergBerlino.jpg'),
(31, 1, 0, 'Alpadia language School', 'Berlino', 'Germania', 'AlpadiaBerlino.jpg'),
(32, 0, 1, 'DID Deutsch Institut', 'Berlino', 'Germania', 'DIDBerlino.jpg'),
(33, 0, 1, 'Alpadia Language School Wannsee', 'Berlino', 'Germania', 'AlpadiaWannseeBerlino.jpg'),
(34, 1, 0, 'Colon Language Center', 'Amburgo', 'Germania', 'ColonAmburgo.jpg'),
(35, 1, 0, 'Carl Duisberg Zentrum', 'Colonia', 'Germania', 'CarlDuisbergColonia.jpg'),
(36, 1, 0, 'St. Giles International', 'Vancouver', 'Canada', 'StGilesCanada.jpg'),
(37, 1, 0, 'LSI Languages Studies International', 'Toronto', 'Canada', 'LSICanada.jpg'),
(38, 1, 0, 'Carl Duisber Zentrum', 'Monaco', 'Germania', 'CarlDuisbergMonaco.jpg'),
(39, 0, 1, 'Humboldt Institut', 'Monaco', 'Germania', 'HumboldtMonaco.jpg'),
(40, 0, 1, 'DID Deutsch Institut', 'Monaco', 'Germania', 'DIDMonaco.jpg'),
(41, 1, 0, 'Alpadia Language School', 'Freiburg', 'Germania', 'AlpadiaFreiburgGermania.jpg'),
(42, 0, 1, 'Dialoge Bodensee Sprachschule', 'Lindau Am Bodensee', 'Germania', 'DialogeLindau.jpg'),
(43, 1, 0, 'Dialoge Bodensee Sprachschule', 'Lindau Am Bodensee', 'Germania', 'DialogeLindau.jpg'),
(44, 0, 1, 'Humboldt Institut', 'Bad Schussenried', 'Germania', 'HumboldtBad.jpg'),
(45, 0, 1, 'Humboldt Institut', 'Lindenberg', 'Germania', 'HumboldtLindenberg.jpg'),
(46, 0, 1, 'Humboldt Institut', 'Kempten', 'Germania', 'HumboldtKempten.jpg'),
(47, 0, 1, 'DID Deutsch Institut', 'Augsburg', 'Germania', 'DIDAugsburg.jpg'),
(48, 0, 1, 'Alpadia Language Schools', 'Friburgo In Brisgovia', 'Germania', 'AlpadiaFriburgoInBrisgovia.jpg'),
(50, 1, 0, 'Actilingua Academy', 'Vienna', 'Austria', 'ActilinguaVienna.jpg'),
(51, 0, 1, 'DID Deutsch Institut', 'Vienna', 'Austria', 'DIDVienna.jpg'),
(52, 1, 0, 'LSI Languages Studies International', 'Zurigo', 'Svizzera Tedesca', 'LSIZurigo.jpg'),
(53, 0, 1, 'Alpadia languages School', 'Engelberg', 'Svizzera Tedesca', 'AlpadiaEngelberg.jpg'),
(54, 1, 0, 'Accord école de langues', 'Parigi', 'Francia', 'AccordParigi.jpg'),
(55, 0, 1, 'Alpadia language School', 'Parigi', 'Francia', 'AlpadiaParigi.jpg'),
(56, 1, 0, 'Centre International d\'Antibes', 'Antibes', 'Francia', 'CentreAntibes.jpg'),
(57, 0, 1, 'Alpadia Language School', 'Nizza', 'Francia', 'AlpadiaNizza.jpg'),
(58, 0, 1, 'Centre International d\'Antibes', 'Cannes', 'Francia', 'CentreCannes.jpg'),
(59, 0, 1, 'Alpadia languages School', 'Montreux', 'Svizzera Francese', 'AlpadiaMontreux.jpg'),
(60, 1, 0, 'Alpadia languages School', 'Montreux', 'Svizzera Francese', 'AlpadiaMontreux.jpg'),
(61, 0, 1, 'Alpadia languages School', 'Leysin', 'Svizzera Francese', 'AlpadiaLeysin.jpg'),
(62, 1, 0, 'Don Quijote', 'Barcellona', 'Spagna', 'DonQuijoteBarcellona');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nazione`
--
ALTER TABLE `nazione`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scuola`
--
ALTER TABLE `scuola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citta`
--
ALTER TABLE `citta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `nazione`
--
ALTER TABLE `nazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `scuola`
--
ALTER TABLE `scuola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
