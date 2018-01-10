-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: misioncero
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ambits`
--

DROP TABLE IF EXISTS `ambits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ambits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ambit` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ambits`
--

LOCK TABLES `ambits` WRITE;
/*!40000 ALTER TABLE `ambits` DISABLE KEYS */;
INSERT INTO `ambits` VALUES (1,'Proceso interno'),(2,'Recursos'),(3,'Personas'),(4,'Modelo negocio'),(5,'Comercial'),(6,'Organización'),(7,'Imagen/comunicación'),(8,'Producto'),(9,'Cliente/usuario'),(10,'Otros');
/*!40000 ALTER TABLE `ambits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `challenges`
--

DROP TABLE IF EXISTS `challenges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `challenges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `challenge` varchar(250) DEFAULT NULL,
  `ambit` int(11) DEFAULT NULL,
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `challenges`
--

LOCK TABLES `challenges` WRITE;
/*!40000 ALTER TABLE `challenges` DISABLE KEYS */;
INSERT INTO `challenges` VALUES (1,2,'Acometamos a la hueste manzona',10,2,'2018-01-10 16:11:33'),(2,2,'Blablablá, blablá ¡Blah!',10,2,'2018-01-10 16:11:33'),(3,2,'El problema no es cosa menor, en otras palabras, es cosa mayor',10,2,'2018-01-10 16:11:33'),(4,1,'Agiliscosos giroscopaban los limazones',10,2,'2018-01-10 16:11:33'),(5,1,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',10,2,'2018-01-10 16:11:33'),(6,1,'Los ladros perran y los cantos gallan',10,2,'2018-01-10 16:11:33');
/*!40000 ALTER TABLE `challenges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT NULL,
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'Agiliscosos giroscopaban los limazones',1,'2018-01-10 16:08:09'),(2,1,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',1,'2018-01-10 16:08:10'),(3,1,'Los ladros perran y los cantos gallan',1,'2018-01-10 16:08:10'),(4,2,'Acometamos a la hueste manzona',1,'2018-01-10 16:08:10'),(5,2,'Blablablá, blablá ¡Blah!',1,'2018-01-10 16:08:10'),(6,2,'El problema no es cosa menor, en otras palabras, es cosa mayor',1,'2018-01-10 16:08:10');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feelings`
--

DROP TABLE IF EXISTS `feelings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feelings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feelings`
--

LOCK TABLES `feelings` WRITE;
/*!40000 ALTER TABLE `feelings` DISABLE KEYS */;
INSERT INTO `feelings` VALUES (1,1,'Alegres'),(2,1,'Comprometidos'),(3,1,'Ilusionados'),(4,1,'Optimistas '),(5,1,'Curiosos'),(6,1,'Orgullosos'),(7,1,'Satisfechos'),(8,1,'Tranquilos'),(9,2,'Tristes'),(10,2,'Desmotivados'),(11,2,'Enfadados'),(12,2,'Doloridos'),(13,2,'Miedosos'),(14,2,'Culpables'),(15,2,'Preocupados'),(16,2,'Pesimistas'),(17,1,'Confiados'),(18,1,'Agradecidos'),(19,1,'Pacientes'),(20,1,'Cómodos'),(21,2,'Nerviosos'),(22,2,'Inciertos'),(23,2,'Críticos'),(24,2,'Aburridos');
/*!40000 ALTER TABLE `feelings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feelings_teams`
--

DROP TABLE IF EXISTS `feelings_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feelings_teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feeling_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feelings_teams`
--

LOCK TABLES `feelings_teams` WRITE;
/*!40000 ALTER TABLE `feelings_teams` DISABLE KEYS */;
INSERT INTO `feelings_teams` VALUES (4,1,32),(5,6,32),(6,9,32),(7,10,32),(8,11,32),(9,3,55),(10,4,55),(11,5,55),(12,6,55),(13,11,56),(14,12,56),(15,13,56);
/*!40000 ALTER TABLE `feelings_teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code1` char(6) DEFAULT NULL,
  `code2` char(6) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `teams` int(11) DEFAULT NULL,
  `expiration` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `trouble` varchar(500) DEFAULT NULL,
  `page` int(11) DEFAULT '1',
  `time1` datetime DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  `ludico` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'MBZRG8','JUW9XF','Foo',NULL,'2018-05-09 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(2,'847TNH','K2XTJB','Fa',NULL,'2018-10-04 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(3,'847TNZ','K2XTJZ',NULL,NULL,'2018-10-04 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(4,'12345','34567',NULL,NULL,'2018-10-04 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(5,'847TNA','847TNB',NULL,NULL,'2018-10-04 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(6,'WPKREA','LRCJTK','p',NULL,'2018-12-10 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(7,'BAWYK7','F8LGY4','p',NULL,'2018-12-10 00:00:00',1,'test',71,'2018-01-10 16:54:32',10,'2'),(8,'ABCDEF','GHIJKL','pepe',NULL,'2018-12-10 00:00:00',0,NULL,NULL,NULL,NULL,NULL),(9,'62AHJC','X3C2GN','test',NULL,'2018-02-11 00:00:00',0,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interactions`
--

DROP TABLE IF EXISTS `interactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interactions`
--

LOCK TABLES `interactions` WRITE;
/*!40000 ALTER TABLE `interactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `interactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motions`
--

DROP TABLE IF EXISTS `motions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `feeling` varchar(100) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '1',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motions`
--

LOCK TABLES `motions` WRITE;
/*!40000 ALTER TABLE `motions` DISABLE KEYS */;
INSERT INTO `motions` VALUES (1,1,'Agradecidos','Lo más importante de la vida es no haber muerto',1,0,2,'2018-01-10 16:53:52'),(2,1,'Pacientes','Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',1,0,2,'2018-01-10 16:53:52'),(3,1,'Cómodos','Los ladros perran y los cantos gallan',1,0,4,'2018-01-10 16:53:53'),(4,2,'Culpables','Cuanto peor mejor para todos y cuanto peor para todos mejor',1,0,2,'2018-01-10 16:54:00'),(5,2,'Preocupados','Acometamos a la hueste manzona',1,0,2,'2018-01-10 16:54:00'),(6,2,'Pesimistas','Blablablá, blablá ¡Blah!',1,0,0,'2018-01-10 16:54:00');
/*!40000 ALTER TABLE `motions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `names`
--

DROP TABLE IF EXISTS `names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `names`
--

LOCK TABLES `names` WRITE;
/*!40000 ALTER TABLE `names` DISABLE KEYS */;
INSERT INTO `names` VALUES (1,'Neil Armstrong'),(2,'Roald Amundsen'),(3,'Sacajawea'),(4,'Jacques Cousteau'),(5,'Lara Croft'),(6,'Marco Polo'),(7,'Amelia Earhart'),(8,'Daniel Boone'),(9,'Erik El Rojo'),(10,'Valentina Tereshkova'),(11,'Anne Bancroft'),(12,'Edmund Hillary'),(13,'Phileas Fogg'),(14,'Fernando de Magallanes'),(15,'Jeanne Baret'),(16,'Alexandra David-Néel'),(17,'Ulises'),(18,'Laura Dekker'),(19,'Simbad'),(20,'Howard Carter'),(21,'Amazonas'),(22,'Sherpa');
/*!40000 ALTER TABLE `names` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objects`
--

DROP TABLE IF EXISTS `objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `texto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objects`
--

LOCK TABLES `objects` WRITE;
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` VALUES (1,'ludica1.png',NULL),(2,'ludica2.png',NULL),(3,'ludica3.png',NULL),(4,'ludica4.png',NULL),(5,'ludica5.png',NULL),(6,'ludica6.png',NULL),(7,'ludica7.jpg',NULL),(8,'ludica8.jpg',NULL),(9,'ludica9.jpg',NULL),(10,'ludica10.jpg',NULL),(11,'ludica11.jpg',NULL),(12,'ludica12.jpg',NULL),(13,'ludica13.jpg',NULL),(14,'ludica14.jpg',NULL),(15,'ludica15.jpg',NULL),(16,'ludica16.jpg',NULL),(17,'ludica17.jpg',NULL);
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `painpoints`
--

DROP TABLE IF EXISTS `painpoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `painpoints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `interaction_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `painpoints`
--

LOCK TABLES `painpoints` WRITE;
/*!40000 ALTER TABLE `painpoints` DISABLE KEYS */;
/*!40000 ALTER TABLE `painpoints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppchallenges`
--

DROP TABLE IF EXISTS `ppchallenges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppchallenges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `painpoint_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppchallenges`
--

LOCK TABLES `ppchallenges` WRITE;
/*!40000 ALTER TABLE `ppchallenges` DISABLE KEYS */;
INSERT INTO `ppchallenges` VALUES (1,NULL,1,'Blablablá, blablá ¡Blah!',1,0,3,'2018-01-10 16:38:19'),(2,NULL,1,'Acometamos a la hueste manzona',1,0,2,'2018-01-10 16:38:19'),(3,NULL,1,' Un ulucordio los encrestoriaba y paramovía',1,0,1,'2018-01-10 16:38:19'),(4,NULL,2,'Agiliscosos giroscopaban los limazones',1,0,2,'2018-01-10 16:38:19'),(5,NULL,2,'El problema no es cosa menor, en otras palabras, es cosa mayor',1,0,3,'2018-01-10 16:38:19'),(6,NULL,2,'Lo más importante de la vida es no haber muerto',1,0,1,'2018-01-10 16:38:19');
/*!40000 ALTER TABLE `ppchallenges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `practicals`
--

DROP TABLE IF EXISTS `practicals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `practicals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trouble` varchar(400) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `answer4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `practicals`
--

LOCK TABLES `practicals` WRITE;
/*!40000 ALTER TABLE `practicals` DISABLE KEYS */;
INSERT INTO `practicals` VALUES (1,'<p>Una empresa que fabrica taladradoras quiere reinventarse. El Director General insiste en no limitarse a incrementar las ventas actuales: quiere abrir caminos muy novedosos.</p>\n<p>El DG pregunta al equipo sobre qué reto piensa trabajar:</p>','¿Cómo aumentar las ventas de taladradoras?','¿Cómo generar nuevos ingresos con taladradoras?','¿Cómo encontrar nuevos ingresos en productos de bricolaje?','¿Cómo ofrecer nuevos servicios al consumidor que quiere hacer agujeros?'),(2,'<P>Una empresa de seguros quiere desarrollar nuevos productos y servicios para diferenciarse en el mercado</p>\n<p>Se plantea como posibles retos:</p>','Ideas de nuevos seguros','¿Cómo diferenciarnos de los competidores en seguros?','Ideas para soprender con mis seguros','¿Cómo ofrecer nuevas maneras de cubrir riesgos?'),(3,'<p>Eres el propietario de una agencia de viajes “de las de toda la vida”. Tienes un local en la ciudad y ofreces viajes muy atractivos, tienes buenos precios, pero tu negocio se está resintiendo de la competencia del mundo digital. Necesitas reinventar tu negocio sin cambiar tu canal.</p>\n<p>Se plantea como posibles retos:</p>','¿Cómo no bajar ventas?','Ideas para que el cliente deje de comprar por Internet','Ideas para conseguir sorprender en el escaparate para que la gente entre a preguntar','Ideas para vender experiencias y soluciones: de vender viajes  a vender viajar'),(4,'<p>Como manager en el área de compras, tienes que liderar un equipo para “ahorrar costes en la empresa”. Como este equipo lleva 8 años funcionando y cada vez cuesta más encontrar mejoras, necesitas una manera nueva de enfocar el problema.</p>\n<p>Se plantea como posibles retos:</p>','¿Cómo bajar el precio de compra a mis proveedores?','Ideas para optimizar recursos (no solo recortar)','Ideas para que los proveedores tengan ganas de darme mejores  condiciones','Ideas para que no nos importe comprar al precio que compramos'),(5,'<p>Eres Director de Marketing y Comunicación de una empresa multinacional de productos de gran consumo. Desde la sede central, te acaban de mandar un mail con la nueva estrategia de posicionamiento de tu marca para los próximos 3 años: “queremos que nuestra imagen de marca para nuestros clientes sea comparable a la imagen de Apple para los suyos”. </p>\n<p>Como ves el reto ambicioso y poco concreto','¿Cómo conseguir mejorar la imagen de mi marca para que sea más “Premium”? ','¿Cómo conseguir que mi marca se parezca a Apple?','¿ Cómo conseguir tener una relación con mis clientes comparable a la de Apple con los suyos?','¿Cómo conseguir que mis clientes se conviertan en fans de mi marca?'),(6,'<p>Eres responsable de ventas de máquinas industriales de un área importante del país. El director de ventas acaba de explicar, en la reunión de objetivos, que la empresa lleva un año perdiendo ventas en todo el país y en todos los canales. Ha marcado como objetivo “crecer en ventas para recuperar el nivel de hace 2 años” y ha pedido a cada responsable de área que trabaje con su equipo para enviar','Ideas para recuperar el nivel de ventas de hace 2 años','¿Cómo conseguir volver al beneficio de hace 2 años?','¿Cómo pasar de vender máquinas a vender soluciones a nuestros clientes?','¿Cómo conseguir que nuestros clientes necesiten nuestras máquinas?'),(7,'<p>Como responsable de Recursos Humanos, has ido a varias conferencias y ponencias sobre un tema que preocupa a todos los responsables de esta área en las empresas: ¿qué hacer con esta generación tan rara que tenemos que integrar en la empresa: los millenials?</p>\n<p>Has decidido planteare como posibles retos para atacar el problema:</p>','¿Cómo conseguir que se adapten rápidamente a la empresa?','Ideas para conseguir entenderles','¿Cómo conseguir que se sienten a gusto en la empresa?','¿Cómo conseguir que las diferentes generaciones valoren lo que aportan los millenials y quieran ayud'),(8,'<p>El director general te ha pedido ayudarle en impulsar la innovación en la empresa y en conseguir que la gente pueda reinventarse y proponer soluciones novedosas. Has oído hablar de “intraemprenduría” y en una charla te han convencido que necesitas aprovechar los puntos fuertes de las start ups para conseguirlo </p>\n<p>Te planteas como posibles retos:</p>','¿Cómo transformar la empresa en una start up?','Ideas para identificar a emprendedores que podríamos fichar en la empresa','¿cómo conseguir interactuar con start ups para aprender de ellas?','¿Cómo conseguir integrar algunos valores de las start ups adaptándoles a una gran empresa?');
/*!40000 ALTER TABLE `practicals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puzzles`
--

DROP TABLE IF EXISTS `puzzles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puzzles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puzzle` varchar(2000) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `answer4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puzzles`
--

LOCK TABLES `puzzles` WRITE;
/*!40000 ALTER TABLE `puzzles` DISABLE KEYS */;
INSERT INTO `puzzles` VALUES (1,'¿Quién dijo “La lógica te llevará de la A a la Z; la imaginación te llevará a todas partes”?','Albert Einstein','Steve Jobs','Mickey Mouse','Donald Trump'),(2,'¿Quien es el autor de la frase “Siempre estoy haciendo lo que no puedo hacer, para poder aprender cómo hacerlo”?','Pablo Picasso','Steve Jobs','Julio Iglesias','Henry Ford'),(3,'¿Quién dijo “Pasar la vida cometiendo errores no sólo es más honorable, sino más útil que pasar la vida sin hacer nada”.','Bernard Shaw','Steve Jobs','Kim Kardashian','Thomas Edison'),(4,'Completa la frase: “No se hará nunca un Shakespeare mediante el estudio de …”','Shakespeare','Quijote','La historia de la literatura','Técnicas literarias'),(5,'¿Quién es el autor de la frase “lo probaré todo una vez, incluso el queso Limburger”?','Thomas Edison','Ferran Adrià','Steve Jobs','Mick Jagger'),(6,'¿Quién es el autor de la frase “Los grandes espíritus siempre se han encontrado con la fuerte oposición de las mentes mediocres”? ','Albert Einstein','Winston Churchill','Steve Jobs','Cristiano Ronaldo'),(7,'Completa la frase de Bertrand Russell “El hecho de que una opinión ... no es prueba concluyente de que no sea completamente absurda”:','... la comparta mucha gente','... parezca lógica','... sea del Director General','... contradiga la mía'),(8,'¿Cuál de estos inventos se comercializó primero?','El PC ','El teléfono móvil ','La WWW ','El Post-it '),(9,'¿Cuántos años pasaron entre la invención del adhesivo del Post-it y su comercialización?:','Diez','Ninguno','Cinco','Veinte'),(10,'¿Quién es el autor de la frase “Si tuviese solo una hora para salvar al mundo, dedicaría 55 minutos a definir el problema y 5 minutos en pensar en la solución”','Albert Einstein.','Abraham Lincoln.','Steve Jobs.','James Bond.'),(11,'¿De cuáles de estos objetos NO fue 3M su primer fabricante industrial?','Bolígrafo','Clip de alambre','Cinta adhesiva','Post-it'),(12,'¿Quién dijo la frase “todo lo que puede inventarse, ya se ha inventado”?:','Charles H. Duell','Graham Bell.','Steve Jobs.','Angela Merkel.'),(13,'Termina la frase de Dorothy Parker, “Ser creativo requiere de una mente libre y un ojo...”:','Disciplinado','Bizco','Imaginativo','Tapado'),(14,'Termina la frase de John Steinbeck, “Las ideas son como conejos. Una vez que tienes dos, ...”:','Enseguida te salen una docena','Te lo estropean todo','No sabes cuál es cual','Montas una granja'),(15,'¿Quién dijo la frase “Tanto si crees que puedes hacerlo, como si crees que no, estás en lo cierto”?','Henry Ford','Steve Jobs','Usain Bolt','Marie Curie'),(16,'¿Quién dijo la frase “No he fracasado, he encontrado mil formas que no funcionan”?','Thomas Edison','Guillermo Marconi','Steve Jobs','Mark  Zuckerberg'),(17,'¿Quién dijo la frase “Si tienes suficiente información para hacer un plan de negocio de tu idea, es que ya es demasiado tarde”?','Bill Gates','Steve Jobs','Mark  Zuckerberg','Isabel Pantoja'),(18,'¿Quién dijo la frase “El éxito consiste en ir de fracaso en fracaso sin desesperarse”?','Winston Churchill','José Luis Perales','Bill Gates','Steve Jobs'),(19,'Completa la frase de Mark Twain: “Lo consiguieron porque no sabían …','…que era imposible.”','…hacerlo”','…a dónde tenían que ir”','…que 2+2 son 4”'),(20,'¿Quién es el autor de la frase “Es duro caer, pero es peor no haber intentado nunca subir”?','Theodore Roosevelt','Steve Jobs','Killian Jornet','Spiderman'),(21,'¿Quién es el autor de la frase “Todo parece imposible hasta que se hace”?','Nelson Mandela','Steve Jobs','Ferran Adrià','Leo Messi'),(22,'¿Quién es el autor de la frase “No podemos resolver problemas pensando de la misma manera que cuando los creamos”?','Albert Einstein','Sherlock Holmes','Steve Jobs','Graham Bell'),(23,'Completa el proverbio chino: “El fracaso más grande es…','… nunca haberlo intentado”','… el de los demás”','… cuando te descubren” ','… fracasar”'),(24,'Completa la frase de Abraham Lincoln “La mejor manera de predecir el futuro es…','… inventándolo”','… con una bola de cristal”','… mirando el pasado”','… leer el horóscopo”'),(25,'Completa la frase “Un adulto creativo es … ','….un niño que ha sobrevivido”','… una utopía”','… un niño muy listo”','… un niño que no quiere crecer”'),(26,'Completa la frase de Thomas Berger “\"La ciencia y el arte de … es la fuente de todo conocimiento.','… hacer preguntas','… tener ideas','… preguntar','… saber responder'),(27,'¿Quién es el autor de la frase “Juzga más al hombre por sus preguntas que por sus respuestas”?','Voltaire','Baltasar Garzón','Steve Jobs','Perry Mason'),(28,'Completa la frase del coach británico  Simon Sinek \"La calidad de un líder no se puede juzgar por las respuestas que da, sino...','… por las preguntas que hace','… por cómo las da','… por cuántas personas le siguen en facebook','… por su dominio del power point'),(29,'¿Quién es el autor de la frase “El hombre sabio no es el hombre que proporciona las respuestas correctas, es el que formula las preguntas correctas”','Claude Levi-Strauss','Steve Jobs','Jessica Fletcher','Jorge Javier Vázquez'),(30,'¿Quién dijo “Si hubiera preguntado a mis clientes qué es lo que necesitaban, me hubieran dicho que un caballo más rápido”?','Henry Ford','Steve Jobs','Billy, el Niño','John D. Rockefeller');
/*!40000 ALTER TABLE `puzzles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,'El problema no es cosa menor, en otras palabras, es cosa mayor',1,0,2,'2018-01-10 16:19:32'),(2,1,'Cuanto peor mejor para todos y cuanto peor para todos mejor',1,0,2,'2018-01-10 16:19:32'),(3,1,'Lo más importante de la vida es no haber muerto',1,0,3,'2018-01-10 16:19:32'),(4,2,'Acometamos a la hueste manzona',1,0,3,'2018-01-10 16:19:33'),(5,2,'Los ladros perran y los cantos gallan',1,0,2,'2018-01-10 16:19:33'),(6,2,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',1,0,0,'2018-01-10 16:19:33');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stakes`
--

DROP TABLE IF EXISTS `stakes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stakes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stakes`
--

LOCK TABLES `stakes` WRITE;
/*!40000 ALTER TABLE `stakes` DISABLE KEYS */;
INSERT INTO `stakes` VALUES (1,1,'Blablablá, blablá ¡Blah!',1,0,2,'2018-01-10 16:26:14'),(2,1,'El problema no es cosa menor, en otras palabras, es cosa mayor',1,0,3,'2018-01-10 16:26:14'),(3,1,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',1,0,1,'2018-01-10 16:26:14'),(4,2,' Un ulucordio los encrestoriaba y paramovía',1,0,2,'2018-01-10 16:26:14'),(5,2,'Los ladros perran y los cantos gallan',1,0,2,'2018-01-10 16:26:14'),(6,2,'Acometamos a la hueste manzona',1,0,2,'2018-01-10 16:26:14');
/*!40000 ALTER TABLE `stakes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `members` varchar(2000) DEFAULT NULL,
  `taken` tinyint(4) DEFAULT '0',
  `bikles` int(11) DEFAULT '0',
  `vc` tinyint(4) DEFAULT '0',
  `vq` tinyint(4) DEFAULT '0',
  `vs` tinyint(4) DEFAULT '0',
  `vp` tinyint(4) DEFAULT '0',
  `vm` tinyint(4) DEFAULT '0',
  `vt` tinyint(4) DEFAULT '0',
  `vo` tinyint(4) DEFAULT '0',
  `prac` tinyint(4) DEFAULT NULL,
  `puzz1` tinyint(4) DEFAULT NULL,
  `puzz2` tinyint(4) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,7,1,'Neil Armstrong','aa,bb',1,37,1,1,1,1,1,0,0,2,-1,-1,1),(2,7,2,'Anne Bancroft','cc,dd',1,19,1,1,1,1,1,0,0,-1,-1,-1,NULL);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tops`
--

DROP TABLE IF EXISTS `tops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `amb` tinyint(4) DEFAULT '0',
  `nor` tinyint(4) DEFAULT '0',
  `qui` tinyint(4) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `ambit` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tops`
--

LOCK TABLES `tops` WRITE;
/*!40000 ALTER TABLE `tops` DISABLE KEYS */;
INSERT INTO `tops` VALUES (1,7,'Acometamos a la hueste manzona',1,0,0,0,0,10),(2,7,'Blablablá, blablá ¡Blah!',1,0,0,0,0,10),(3,7,'El problema no es cosa menor, en otras palabras, es cosa mayor',1,0,0,0,0,10),(4,7,'Agiliscosos giroscopaban los limazones',1,0,0,0,0,10),(5,7,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',1,0,0,0,0,10),(6,7,'Lo más importante de la vida es no haber muerto',2,0,0,0,0,0),(7,7,'Acometamos a la hueste manzona',2,0,0,0,0,0),(8,7,'El problema no es cosa menor, en otras palabras, es cosa mayor',2,0,0,0,0,0),(9,7,'Cuanto peor mejor para todos y cuanto peor para todos mejor',2,0,0,0,0,0),(10,7,'Los ladros perran y los cantos gallan',2,0,0,0,0,0),(11,7,'El problema no es cosa menor, en otras palabras, es cosa mayor',3,0,0,0,0,0),(12,7,'Blablablá, blablá ¡Blah!',3,0,0,0,0,0),(13,7,' Un ulucordio los encrestoriaba y paramovía',3,0,0,0,0,0),(14,7,'Los ladros perran y los cantos gallan',3,0,0,0,0,0),(15,7,'Acometamos a la hueste manzona',3,0,0,0,0,0),(16,7,'Blablablá, blablá ¡Blah!',4,0,0,0,0,0),(17,7,'El problema no es cosa menor, en otras palabras, es cosa mayor',4,0,0,0,0,0),(18,7,'Acometamos a la hueste manzona',4,0,0,0,0,0),(19,7,'Agiliscosos giroscopaban los limazones',4,0,0,0,0,0),(20,7,' Un ulucordio los encrestoriaba y paramovía',4,0,0,0,0,0),(21,7,'Los ladros perran y los cantos gallan',5,0,0,0,0,0),(22,7,'Lo más importante de la vida es no haber muerto',5,0,0,0,0,0),(23,7,'Es el problema el que elige el empleado y es el empleado el que quiere que sea el problema',5,0,0,0,0,0),(24,7,'Cuanto peor mejor para todos y cuanto peor para todos mejor',5,0,0,0,0,0),(25,7,'Acometamos a la hueste manzona',5,0,0,0,0,0);
/*!40000 ALTER TABLE `tops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `texto` varchar(2000) DEFAULT NULL,
  `solucion` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'https://www.youtube.com/embed/0PfbrsVexsE','Pide a los Exploradores que cuenten las cartas rojas que el protagonista de nuestro video va a mostrar\n<span class=\"video_stop\">Para el vídeo en el segundo 30”</span>\n','Los Exploradores habrán contado 14 cartas correctamente, pero ganará bikles el equipo que haya visto algo más en el dorso de las cartas!\n\nAlgunas cartas tienen en el dorso un gorila, un gatito, un cachorro, un hombre o una mujer. Es increíble lo que uno puede perderse teniéndolo justo delante! \n\nGanará 2 bikles el equipo que haya detectado algún elemento diferente en el dorso de las cartas\n\nGanará 4 bikles el equipo capaz de enumerar alguno de los elementos que aparecen\n\nReproduce el video completo para finalizar la etapa. '),(2,'https://www.youtube.com/embed/14Nb45CS9og','Pide a los Exploradores que observen con atención el siguiente truco de magia\n<span class=\"video_stop\">Para el vídeo en el segundo 50”</span>\nPregunta a los exploradores si son capaces de enumerar las cosas que han cambiado en la escena entre el inicio y el final del truco \n','Mientras Apollo Robbins hacía el truco de magia casi todos los elementos de la escena han cambiado! \nGanará 2 bikles el equipo capaz de enumerar 1 elemento que ha cambiado \nGanará 4 bikles el equipo capaz de enumerar más de 1 elemento que ha cambiado\nReproduce el video completo para finalizar la etapa. \n'),(3,'https://www.youtube.com/embed/_aSXE_xppME','Pide a los Exploradores que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 53”</span>\nPregunta a los exploradores si han observado algo extraño en la escena.','(Puedes ayudar a los equipos preguntando si les ha parecido que algo de la escena ha cambiado durante la representación)\nMientras nuestro inspector interrogaba a los personajes, casi todos los elementos de la escena han cambiado! \nGanará 2 bikles el equipo que haya detectado que algo del decorado ha cambiado \nGanará 4 bikles el equipo capaz de enumerar elementos que han cambiado\nReproduce el video completo para finalizar la etapa. \n'),(4,'https://www.youtube.com/embed/hWqWL9SH09o','Pide a los Exploradores que cuenten los pases que realiza el equipo blanco\n<span class=\"video_stop\">Para el vídeo en el segundo 26”</span>\n','Los Exploradores habrán contado 13 pases correctamente, pero ganará bikles el equipo que haya visto algo extraño en la escena\nMientras se pasaban la pelota, un oso se ha marcado el baile moonwalking justo en el centro! \nGanará 2 bikles el equipo que haya detectado algún elemento diferente a los jugadores en la escena\nGanará 4 bikles el equipo capaz de describir al oso y a su baile moonwalking\nReproduce el video completo para finalizar la etapa. \n'),(5,'https://www.youtube.com/embed/kd2dQ26DdFQ','Pide a los Exploradores que cuenten los pases que realiza el equipo blanco\n<span class=\"video_stop\">Para el vídeo en el segundo 22”</span>\n','Los Exploradores habrán contado 13 pases correctamente, pero ganará bikles el equipo que haya visto algo extraño en la escena\nMientras se pasaban la pelota, una cheerleader ha pasado por detrás haciendo acrobacias!\nGanará 2 bikles el equipo que haya detectado algún elemento diferente a los jugadores en la escena\nGanará 4 bikles el equipo capaz de describir a la cheerleader y sus acrobacias\nReproduce el video completo para finalizar la etapa. \n'),(6,'https://www.youtube.com/embed/ULDusoZbzdY','Pide a los Exploradores que que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 28”</span>\nPregunta a los exploradores si han observado algo extraño en la escena. \n','La persona que atiende en el mostrador no es la misma al principio y al final de la escena !\nGanará 2 bikles el equipo que haya detectado que algo del decorado ha cambiado \nGanará 4 bikles el equipo que haya detectado que el vendedor ha cambiado\nReproduce el video completo para finalizar la etapa. \n'),(7,'https://www.youtube.com/embed/QgZVLMjhvMQ','Pide a los Exploradores que observen con atención el siguiente truco de magia\n<span class=\"video_stop\">Para el vídeo en el segundo  1’10”</span>\nPregunta a los exploradores si han observado algo extraño en la escena\n','Mientras Apollo Robbins hacía el truco de magia han pasado por detrás un conejo, un oso y un gorila!! \nGanará 2 bikles el equipo que haya detectado algunos personajes extraños en la escena \nGanará 4 bikles el equipo capaz de enumerar algunos de estos personajes\nReproduce el video completo para finalizar la etapa. \n'),(8,'https://www.youtube.com/embed/qpPYdMs97eE','Pide a los Exploradores que que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 40”</span>\nPregunta a los exploradores si han observado algo extraño en la escena. \n','La calle entera ha cambiado completamente! \nGanará 2 bikles el equipo que haya detectado que algo en la calle ha cambiado \nGanará 4 bikles el equipo capaz de enumerar elementos que han cambiado\nReproduce el video completo para finalizar la etapa. \n');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-10 18:14:07
