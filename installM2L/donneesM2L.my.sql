-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Version du serveur: 5.1.41
-- Version de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `mrbs`
--

--
-- Contenu de la table `mrbs_area`
--

INSERT INTO `mrbs_area` (`id`, `disabled`, `area_name`, `area_admin_email`, `resolution`, `default_duration`, `morningstarts`, `morningstarts_minutes`, `eveningends`, `eveningends_minutes`, `private_enabled`, `private_default`, `private_mandatory`, `private_override`, `min_book_ahead_enabled`, `min_book_ahead_secs`, `max_book_ahead_enabled`, `max_book_ahead_secs`, `custom_html`, `approval_enabled`, `reminders_enabled`, `enable_periods`, `confirmation_enabled`, `confirmed_default`) VALUES
(1, 0, 'Informatique - multimédia', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 19, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1),
(2, 0, 'Salles de réunion', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 23, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1),
(3, 0, 'Salles de réception', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 23, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1);

--
-- Contenu de la table `mrbs_room`
--

INSERT INTO `mrbs_room` (`id`, `disabled`, `area_id`, `room_name`, `sort_key`, `description`, `capacity`, `room_admin_email`, `custom_html`) VALUES
(1, 0, 2, 'Daum', 'Daum', '', 15, '', ''),
(2, 0, 2, 'Corbin', 'Corbin', '', 15, '', ''),
(3, 0, 2, 'Baccarat', 'Baccarat', '', 20, '', ''),
(4, 0, 2, 'Longwy', 'Longwy', '', 12, '', ''),
(5, 0, 1, 'Multimédia', 'Multimédia', '', 25, '', ''),
(6, 0, 3, 'Amphithéâtre', 'Amphithéâtre', '', 200, '', ''),
(7, 0, 2, 'Lamour', 'Lamour', '', 30, '', ''),
(8, 0, 2, 'Grüber', 'Grüber', '', 15, '', ''),
(9, 0, 2, 'Majorelle', 'Majorelle', '', 40, '', ''),
(10, 0, 3, 'Salle de restauration', 'Salle de restauration', 'Salle de restauration', 50, '', ''),
(11, 0, 3, 'Galerie', 'Galerie', '', 80, '', ''),
(12, 0, 1, 'Salle informatique', 'Salle informatique', '', 15, NULL, NULL),
(13, 0, 3, 'Hall d''accueil', 'Hall d''accueil', '', 100, NULL, NULL),
(14, 0, 2, 'Gallé', 'Gallé', '', 15, NULL, NULL);

--
-- Contenu de la table `mrbs_users`
--

INSERT INTO `mrbs_users` (`id`, `level`, `name`, `password`, `email`) VALUES
(1, 2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin.mrbs@lorraine-sport.net'),
(2, 0, 'cheminl', 'b89f7a5ff3e3a225d572dac38b2a67f7', 'chemin.lorette@lorraine-sport.net'),
(3, 0, 'fortetp', 'b89f7a5ff3e3a225d572dac38b2a67f7', 'fortet.patrick@lorraine-sport.net'),
(4, 0, 'dreauv', 'b89f7a5ff3e3a225d572dac38b2a67f7', 'dreau.valerie@lorraine-sport.net'),
(5,2,'antoineq','21232f297a57a5a743894a0e4a801fc3','antoine.quentin@lorraine-sport.net') ,
(6,2,'aubinv','21232f297a57a5a743894a0e4a801fc3','aubin.veronique@lorraine-sport.net') ,
(7,2,'ackermanns','21232f297a57a5a743894a0e4a801fc3','ackermann.solange@lorraine-sport.net') ,
(8,1,'guesdonm','b89f7a5ff3e3a225d572dac38b2a67f7','guesdon.martin@lorraine-sport.net') ,
(9,1,'grenierf','b89f7a5ff3e3a225d572dac38b2a67f7','grenier.francoise@lorraine-sport.net') ,
(10,1,'giboired','b89f7a5ff3e3a225d572dac38b2a67f7','giboire.david@lorraine-sport.net') ,
(11,1,'guillemetm','b89f7a5ff3e3a225d572dac38b2a67f7','guillemet.martin@lorraine-sport.net') ,
(12,1,'guilletm','b89f7a5ff3e3a225d572dac38b2a67f7','guillet.maud@lorraine-sport.net') ,
(13,1,'gilbertj','b89f7a5ff3e3a225d572dac38b2a67f7','gilbert.jordan@lorraine-sport.net') ,
(14,1,'grelichef','b89f7a5ff3e3a225d572dac38b2a67f7','greliche.franck@lorraine-sport.net') ,
(15,1,'garniert','b89f7a5ff3e3a225d572dac38b2a67f7','garnier.theo@lorraine-sport.net') ,
(16,1,'gaigar','b89f7a5ff3e3a225d572dac38b2a67f7','gaiga.renan@lorraine-sport.net') ,
(17,1,'glavork','b89f7a5ff3e3a225d572dac38b2a67f7','glavor.kevin@lorraine-sport.net'),
(18,0,'lunavote','b89f7a5ff3e3a225d572dac38b2a67f7','lunavot.eric@lorraine-sport.net') ,
(19,0,'borsellinoj','b89f7a5ff3e3a225d572dac38b2a67f7','borsellino.jean-marc@lorraine-sport.net') ,
(20,0,'daumyn','b89f7a5ff3e3a225d572dac38b2a67f7','daumy.nicolas@lorraine-sport.net') ,
(21,0,'chambonp','b89f7a5ff3e3a225d572dac38b2a67f7','chambon.patrick@lorraine-sport.net') ,
(22,0,'lecadetc','b89f7a5ff3e3a225d572dac38b2a67f7','lecadet.cecile@lorraine-sport.net') ,
(23,0,'vannierl','b89f7a5ff3e3a225d572dac38b2a67f7','vannier.louis@lorraine-sport.net') ,
(24,0,'minets','b89f7a5ff3e3a225d572dac38b2a67f7','minet.sabrina@lorraine-sport.net') ,
(25,0,'bourgeoiss','b89f7a5ff3e3a225d572dac38b2a67f7','bourgeois.simon@lorraine-sport.net') ,
(26,0,'charleta','b89f7a5ff3e3a225d572dac38b2a67f7','charlet.aurelie@lorraine-sport.net') ,
(27,0,'pirotl','b89f7a5ff3e3a225d572dac38b2a67f7','pirot.lea@lorraine-sport.net') ,
(28,0,'michauxa','b89f7a5ff3e3a225d572dac38b2a67f7','michaux.alexandre@lorraine-sport.net') ,
(29,0,'cullerierj','b89f7a5ff3e3a225d572dac38b2a67f7','cullerier.jerome@lorraine-sport.net') ,
(30,0,'monnetm','b89f7a5ff3e3a225d572dac38b2a67f7','monnet.michel@lorraine-sport.net') ,
(31,0,'bergerv','b89f7a5ff3e3a225d572dac38b2a67f7','berger.vanessa@lorraine-sport.net') ,
(32,0,'duquennel','b89f7a5ff3e3a225d572dac38b2a67f7','duquenne.luc@lorraine-sport.net') ,
(33,0,'vassalm','b89f7a5ff3e3a225d572dac38b2a67f7','vassal.marc@lorraine-sport.net') ,
(34,0,'samsonm','b89f7a5ff3e3a225d572dac38b2a67f7','samson.maryline@lorraine-sport.net') ,
(35,0,'vassale','b89f7a5ff3e3a225d572dac38b2a67f7','vassal.elizabeth@lorraine-sport.net') ,
(36,0,'dubuism','b89f7a5ff3e3a225d572dac38b2a67f7','dubuis.marie@lorraine-sport.net') ,
(37,0,'briseuxs','b89f7a5ff3e3a225d572dac38b2a67f7','briseux.serge@lorraine-sport.net') ,
(38,0,'zambonie','b89f7a5ff3e3a225d572dac38b2a67f7','zamboni.estelle@lorraine-sport.net') ,
(39,0,'vernonc','b89f7a5ff3e3a225d572dac38b2a67f7','vernon.christian@lorraine-sport.net') ,
(40,0,'micherouxe','b89f7a5ff3e3a225d572dac38b2a67f7','micheroux.emmanuel@lorraine-sport.net') ,
(41,0,'philippej','b89f7a5ff3e3a225d572dac38b2a67f7','philippe.jocelyne@lorraine-sport.net') ,
(42,0,'brisseaup','b89f7a5ff3e3a225d572dac38b2a67f7','brisseau.pierre-jean@lorraine-sport.net') ,
(43,0,'meneure','b89f7a5ff3e3a225d572dac38b2a67f7','meneur.emmanuel@lorraine-sport.net') ,
(44,0,'martelh','b89f7a5ff3e3a225d572dac38b2a67f7','martel.herve@lorraine-sport.net') ,
(45,0,'fernandesf','b89f7a5ff3e3a225d572dac38b2a67f7','fernandes.fabrice@lorraine-sport.net') ,
(46,0,'loubata','b89f7a5ff3e3a225d572dac38b2a67f7','loubat.agnes@lorraine-sport.net') ,
(47,0,'mogest','b89f7a5ff3e3a225d572dac38b2a67f7','moges.thierry@lorraine-sport.net') ,
(48,0,'bulicm','b89f7a5ff3e3a225d572dac38b2a67f7','bulic.marc@lorraine-sport.net') ,
(49,0,'coulombelt','b89f7a5ff3e3a225d572dac38b2a67f7','coulombel.thomas@lorraine-sport.net') ,
(50,0,'noirotm','b89f7a5ff3e3a225d572dac38b2a67f7','noirot.maxime@lorraine-sport.net') ,
(51,0,'martinageo','b89f7a5ff3e3a225d572dac38b2a67f7','martinage.ophelie@lorraine-sport.net') ,
(52,0,'corvaisierk','b89f7a5ff3e3a225d572dac38b2a67f7','corvaisier.kevin@lorraine-sport.net') ,
(53,0,'danetc','b89f7a5ff3e3a225d572dac38b2a67f7','danet.christophe@lorraine-sport.net') ,
(54,0,'antoineq','b89f7a5ff3e3a225d572dac38b2a67f7','antoine.quentin@lorraine-sport.net') ,
(55,0,'ouing','b89f7a5ff3e3a225d572dac38b2a67f7','ouin.georges@lorraine-sport.net') ,
(56,0,'mabilaisl','b89f7a5ff3e3a225d572dac38b2a67f7','mabilais.liliane@lorraine-sport.net') ,
(57,0,'charbonnelt','b89f7a5ff3e3a225d572dac38b2a67f7','charbonnel.tanguy@lorraine-sport.net') ,
(58,0,'droaly','b89f7a5ff3e3a225d572dac38b2a67f7','droal.yves@lorraine-sport.net') ,
(59,0,'rocherf','b89f7a5ff3e3a225d572dac38b2a67f7','rocher.fabienne@lorraine-sport.net') ,
(60,0,'triballata','b89f7a5ff3e3a225d572dac38b2a67f7','triballat.amelie@lorraine-sport.net') ,
(61,0,'martih','b89f7a5ff3e3a225d572dac38b2a67f7','marti.herve@lorraine-sport.net') ,
(62,0,'vollej','b89f7a5ff3e3a225d572dac38b2a67f7','volle.jocelyn@lorraine-sport.net') ,
(63,0,'hubertx','b89f7a5ff3e3a225d572dac38b2a67f7','hubert.xavier@lorraine-sport.net') ,
(64,0,'lieutierv','b89f7a5ff3e3a225d572dac38b2a67f7','lieutier.vianney@lorraine-sport.net') ,
(65,0,'cabalf','b89f7a5ff3e3a225d572dac38b2a67f7','cabal.frederick@lorraine-sport.net') ,
(66,0,'kriegerc','b89f7a5ff3e3a225d572dac38b2a67f7','krieger.christian@lorraine-sport.net') ,
(67,0,'fischerh','b89f7a5ff3e3a225d572dac38b2a67f7','fischer.helene@lorraine-sport.net') ,
(68,0,'descatb','b89f7a5ff3e3a225d572dac38b2a67f7','descat.bastien@lorraine-sport.net') ,
(69,0,'humbertf','b89f7a5ff3e3a225d572dac38b2a67f7','humbert.felix@lorraine-sport.net') ,
(70,0,'landrieux','b89f7a5ff3e3a225d572dac38b2a67f7','landrieu.xavier@lorraine-sport.net') ,
(71,0,'delpeyroua','b89f7a5ff3e3a225d572dac38b2a67f7','delpeyrou.andre@lorraine-sport.net') ,
(72,0,'rodierd','b89f7a5ff3e3a225d572dac38b2a67f7','rodier.denis@lorraine-sport.net') ,
(73,0,'boyers','b89f7a5ff3e3a225d572dac38b2a67f7','boyer.suzanne@lorraine-sport.net') ,
(74,0,'chassonn','b89f7a5ff3e3a225d572dac38b2a67f7','chasson.nicole@lorraine-sport.net') ,
(75,0,'cuenotb','b89f7a5ff3e3a225d572dac38b2a67f7','cuenot.bruno@lorraine-sport.net') ,
(76,0,'pitonu','b89f7a5ff3e3a225d572dac38b2a67f7','piton.ursule@lorraine-sport.net') ,
(77,0,'gariny','b89f7a5ff3e3a225d572dac38b2a67f7','garin.yvette@lorraine-sport.net') ,
(78,0,'salioum','b89f7a5ff3e3a225d572dac38b2a67f7','saliou.marcel@lorraine-sport.net') ,
(79,0,'rigalg','b89f7a5ff3e3a225d572dac38b2a67f7','rigal.guenole@lorraine-sport.net') ,
(80,0,'pelhatel','b89f7a5ff3e3a225d572dac38b2a67f7','pelhate.loic@lorraine-sport.net') ,
(81,0,'skweresp','b89f7a5ff3e3a225d572dac38b2a67f7','skweres.paul@lorraine-sport.net') ,
(82,0,'haviso','b89f7a5ff3e3a225d572dac38b2a67f7','havis.odette@lorraine-sport.net') ,
(83,0,'rigalj','b89f7a5ff3e3a225d572dac38b2a67f7','rigal.jonathan@lorraine-sport.net') ,
(84,0,'cochetr','b89f7a5ff3e3a225d572dac38b2a67f7','cochet.remi@lorraine-sport.net') ,
(85,0,'blinm','b89f7a5ff3e3a225d572dac38b2a67f7','blin.morgane@lorraine-sport.net') ,
(86,0,'mazurierv','b89f7a5ff3e3a225d572dac38b2a67f7','mazurier.vincent@lorraine-sport.net') ,
(87,0,'robichets','b89f7a5ff3e3a225d572dac38b2a67f7','robichet.sylvain@lorraine-sport.net') ,
(88,0,'brouillatf','b89f7a5ff3e3a225d572dac38b2a67f7','brouillat.francois@lorraine-sport.net') ,
(89,0,'legerg','b89f7a5ff3e3a225d572dac38b2a67f7','leger.geraldine@lorraine-sport.net') ,
(90,0,'despresv','b89f7a5ff3e3a225d572dac38b2a67f7','despres.viviane@lorraine-sport.net') ,
(91,0,'bretonj','b89f7a5ff3e3a225d572dac38b2a67f7','breton.jean@lorraine-sport.net') ,
(92,0,'duboisl','b89f7a5ff3e3a225d572dac38b2a67f7','dubois.laurence@lorraine-sport.net') ,
(93,0,'mousquetj','b89f7a5ff3e3a225d572dac38b2a67f7','mousquet.jean@lorraine-sport.net') ,
(94,0,'robuttep','b89f7a5ff3e3a225d572dac38b2a67f7','robutte.philippe@lorraine-sport.net') ,
(95,0,'lecailleo','b89f7a5ff3e3a225d572dac38b2a67f7','lecaille.oriane@lorraine-sport.net') ,
(96,0,'veriteb','b89f7a5ff3e3a225d572dac38b2a67f7','verite.brendan@lorraine-sport.net') ,
(97,0,'dauthieub','b89f7a5ff3e3a225d572dac38b2a67f7','dauthieu.bryan@lorraine-sport.net') ,
(98,0,'blancj','b89f7a5ff3e3a225d572dac38b2a67f7','blanc.jean-marc@lorraine-sport.net') ,
(99,0,'dongelingeri','b89f7a5ff3e3a225d572dac38b2a67f7','dongelinger.irene@lorraine-sport.net') ,
(100,0,'hochetg','b89f7a5ff3e3a225d572dac38b2a67f7','hochet.guy@lorraine-sport.net') ,
(101,0,'lecorree','b89f7a5ff3e3a225d572dac38b2a67f7','lecorre.emile@lorraine-sport.net') ,
(102,0,'sacheta','b89f7a5ff3e3a225d572dac38b2a67f7','sachet.armelle@lorraine-sport.net') ,
(103,0,'bavelardp','b89f7a5ff3e3a225d572dac38b2a67f7','bavelard.paul@lorraine-sport.net') ,
(104,0,'panagetr','b89f7a5ff3e3a225d572dac38b2a67f7','panaget.remi@lorraine-sport.net') ,
(105,0,'aubinv','b89f7a5ff3e3a225d572dac38b2a67f7','aubin.veronique@lorraine-sport.net') ,
(106,0,'ackermanns','b89f7a5ff3e3a225d572dac38b2a67f7','ackermann.solange@lorraine-sport.net') ,
(107,0,'hainryd','b89f7a5ff3e3a225d572dac38b2a67f7','hainry.david@lorraine-sport.net') ,
(108,0,'trouchetc','b89f7a5ff3e3a225d572dac38b2a67f7','trouchet.carinne@lorraine-sport.net') ,
(109,0,'bertelles','b89f7a5ff3e3a225d572dac38b2a67f7','bertelle.sophie@lorraine-sport.net') ,
(110,0,'pannetierc','b89f7a5ff3e3a225d572dac38b2a67f7','pannetier.celine@lorraine-sport.net') ,
(111,0,'poulainm','b89f7a5ff3e3a225d572dac38b2a67f7','poulain.marie-ange@lorraine-sport.net') ,
(112,0,'stervinour','b89f7a5ff3e3a225d572dac38b2a67f7','stervinou.romain@lorraine-sport.net');
