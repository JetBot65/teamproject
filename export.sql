-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: mattsrecords
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `Album`
--

DROP TABLE IF EXISTS `Album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Album` (
  `album_id` int(4) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(65) NOT NULL,
  `artist_id` int(4) NOT NULL,
  `songlist` text NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Album`
--

LOCK TABLES `Album` WRITE;
/*!40000 ALTER TABLE `Album` DISABLE KEYS */;
INSERT INTO `Album` VALUES (1,'Abbey Road',1,'Come Together\r\nSomething\r\nMaxwell\'s Silver Hammer\r\nOh! Darling\r\nOctopus\'s Garden\r\nI Want You (She\'s So Heavy)\r\nHere Comes The Sun\r\nBecause\r\nYou Never Give Me Your Money\r\nSun King\r\nMean Mr Mustard\r\nPolythene Pam\r\nShe Came In Through The Bathroom Window\r\nGolden Slumbers\r\nCarry That Weight\r\nThe End\r\nHer Majesty'),(2,'Led Zeppelin IV',2,'Black Dog\r\nRock and Roll\r\nThe Battle of Evermore\r\nStairway to Heaven\r\nMisty Mountain Hop\r\nFour Sticks\r\nGoing to California\r\nWhen the Levee Breaks'),(3,'News Of The World',3,'We Will Rock You\r\nWe Are the Champions	\r\nSheer Heart Attack\r\nAll Dead, All Dead\r\nSpread Your Wings\r\nFight from the Inside\r\nGet Down, Make Love\r\nSleeping on the Sidewalk\r\nWho Needs You\r\nIt\'s Late\r\nMy Melancholy Blues'),(4,'Escape',4,'Don\'t Stop Believin\'\r\nStone in Love\r\nWho\'s Crying Now\r\nKeep On Runnin\'\r\nStill They Ride\r\nEscape\r\nLay It Down\r\nDead or Alive\r\nMother, Father\r\nOpen Arms'),(5,'Abraxas',5,'Singing Winds, Crying Beasts\r\nBlack Magic Woman/Gypsy Queen\r\nOye Como Va\r\nIncident at Neshabur\r\nSe a Cabo\r\nMother\'s Daughter\r\nSamba Pa Ti\r\nHope You\'re Feeling Better'),(6,'Ray of Light',6,'Drowned World/Substitute for Love\r\nSwim\r\nRay of Light\r\nCandy Perfume Girl\r\nSkin\r\nNothing Really Matters\r\nSky Fits Heaven\r\nShanti/Ashtangi\r\nFrozen\r\nThe Power of Good-Bye\r\nTo Have and Not to Hold\r\nLittle Star\r\nMer Girl'),(7,'Goodbye Yellow Brick Road',7,'Funeral for a Friend/Love Lies Bleeding\r\nCandle in the Wind\r\nBennie and the Jets\r\nGoodbye Yellow Brick Road\r\nThis Song Has No Title\r\nGrey Seal\r\nJamaica Jerk-Off\r\nI\'ve Seen That Movie Too\r\nSweet Painted Lady\r\nThe Ballad of Danny Bailey (1909–34)\r\nDirty Little Girl\r\nAll the Girls Love Alice\r\nYour Sister Can\'t Twist (But She Can Rock \'n Roll)\r\nSaturday Night\'s Alright for Fighting\r\nRoy Rogers\r\nSocial Disease\r\nHarmony'),(8,'Bad',8,'Bad\r\nThe Way You Make Me Feel\r\nSpeed Demon\r\nLiberian Girl\r\nJust Good Friends\r\nAnother Part of Me\r\nMan in the Mirror\r\nI Just Can\'t Stop Loving You\r\nDirty Diana\r\nSmooth Criminal'),(9,'Arrival',9,'When I Kissed the Teacher\r\nDancing Queen\r\nMy Love, My Life\r\nDum Dum Diddle\r\nKnowing Me, Knowing You\r\nMoney, Money, Money\r\nThat\'s Me\r\nWhy Did It Have to Be Me?\r\nTiger\r\nArrival'),(10,'Whitney Houston',10,'You Give Good Love\r\nThinking About You\r\nSomeone for Me\r\nSaving All My Love for You\r\nNobody Loves Me Like You Do\r\nHow Will I Know\r\nAll at Once\r\nTake Good Care of My Heart\r\nGreatest Love of All\r\nHold Me'),(11,'Not a Moment Too Soon',11,'It Doesn\'t Get Any Countrier Than This\r\nGive It to Me Strait\r\nWouldn\'t Want It Any Other Way\r\nDown on the Farm\r\nNot a Moment Too Soon\r\nIndian Outlaw\r\nRefried Dreams\r\nDon\'t Take the Girl\r\n40 Days and 40 Nights\r\nAin\'t That Just Like a Dream'),(12,'Always & Forever',12,'Too Gone Too Long\r\nMy House\r\nGood Intentions\r\nWhat\'ll You Do About Me\r\nI Won\'t Need You Anymore (Always and Forever)\r\nForever and Ever, Amen\r\nI Told You So\r\nAnything\r\nThe Truth Is Lyin\' Next to You\r\nTonight We\'re Gonna Tear Down the Walls'),(13,'Johnny Horton',13,'North to Alaska\r\nWhispering Pines\r\nJohnny Reb\r\nThe Mansion You Stole\r\nI\'m Ready, If You\'re Willing\r\nWhen It\'s Springtime in Alaska (It\'s Forty Below)\r\nHonky-Tonk Man\r\nThe Battle of New Orleans\r\nAll for the Love of a Girl\r\nSink the Bismarck\r\nComanche (The Brave Horse)\r\nJim Bridger\r\nJohnny Freedom (Freedomland)'),(14,'9 to 5 & Odd Jobs',14,'9 to 5\r\nHush-a-bye Hard Times\r\nThe House of the Rising Sun\r\nDeportee (Plane Wreck at Los Gatos)\r\nSing for the Common Man\r\nWorking Girl\r\nDetroit City\r\nBut You Know I Love You\r\nDark as a Dungeon\r\nPoor Folks\' Town'),(15,'Revolution',15,'White Liar\r\nOnly Prettier\r\nDead Flowers\r\nMe and Your Cigarettes\r\nMaintain the Pain\r\nAirstream Song\r\nMakin\' Plans\r\nTime to Get a Gun\r\nSomewhere Trouble Don\'t Go\r\nThe House That Built Me\r\nLove Song\r\nHeart Like Mine\r\nSin for a Sin\r\nThat\'s the Way That the World Goes \'Round\r\nVirginia Bluebell'),(16,'The Marshall Mathers LP 2',16,'Bad Guy\r\nParking Lot (skit)\r\nRhyme or Reason\r\nSo Much Better\r\nSurvival\r\nLegacy\r\nAsshole\r\nBerzerk\r\nRap God\r\nBrainless\r\nStronger Than I Was\r\nThe Monster\r\nSo Far...\r\nLove Game\r\nHeadlights\r\nEvil Twin'),(17,'The Predator',17,'The First Day of School (Intro)\r\nWhen Will They Shoot?\r\nI\'m Scared (Insert)\r\nWicked\r\nNow I Gotta Wet \'Cha\r\nThe Predator\r\nIt Was a Good Day\r\nWe Had to Tear This Mothafucka Up\r\nFuck \'Em (Insert)\r\nDirty Mack\r\nDon\'t Trust \'Em\r\nGangsta\'s Fairytale 2\r\nCheck Yo Self\r\nWho Got the Camera?\r\nIntegration (Insert)\r\nSay Hi to the Bad Guy'),(18,'Vol. 2... Hard Knock Life',18,'Intro – Hand It Down\r\nHard Knock Life (Ghetto Anthem)\r\nIf I Should Die\r\nRide or Die\r\nNigga What, Nigga Who (Originator 99)\r\nMoney, Cash, Hoes\r\nA Week Ago\r\nComing of Age (Da Sequel)\r\nCan I Get A...\r\nPaper Chase\r\nReservoir Dogs\r\nIt\'s Like That'),(19,'Raising Hell',19,'Peter Piper\r\nIt\'s Tricky\r\nMy Adidas\r\nWalk This Way\r\nIs It Live\r\nPerfection\r\nHit It Run\r\nRaising Hell\r\nYou Be Illin\'\r\nDumb Girl\r\nSon of Byford\r\nProud to Be Black'),(20,'To Pimp a Butterfly\r\n',20,'Wesley\'s Theory\r\nFor Free? (Interlude)\r\nKing Kunta\r\nInstitutionalized\r\nThese Walls\r\nu\r\nAlright\r\nFor Sale? (Interlude)\r\nMomma\r\nHood Politics\r\nHow Much a Dollar Cost\r\nComplexion (A Zulu Love)\r\nThe Blacker the Berry\r\nYou Ain\'t Gotta Lie (Momma Said)\r\ni\r\nMortal Man\r\n');
/*!40000 ALTER TABLE `Album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Artist`
--

DROP TABLE IF EXISTS `Artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Artist` (
  `artist_id` int(4) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(65) NOT NULL,
  `label_id` int(4) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Artist`
--

LOCK TABLES `Artist` WRITE;
/*!40000 ALTER TABLE `Artist` DISABLE KEYS */;
INSERT INTO `Artist` VALUES (1,'The Beatles',1),(2,'Led Zeppelin',1),(3,'Queen',1),(4,'Journey',1),(5,'Santana',1),(6,'Madonna',2),(7,'Elton John',2),(8,'Michael Jackson',2),(9,'ABBA',2),(10,'Whitney Houston',2),(11,'Tim McGraw',3),(12,'Randy Travis',3),(13,'Johnny Horton',3),(14,'Dolly Parton',3),(15,'Miranda Lambert',3),(16,'Eminem',4),(17,'Ice Cube',4),(18,'Jay-Z',4),(19,'Run DMC',4),(20,'Kendrick Lamar',4);
/*!40000 ALTER TABLE `Artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Matt's_Inventory`
--

DROP TABLE IF EXISTS `Matt's_Inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Matt's_Inventory` (
  `inventory_id` int(4) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `quantity` int(2) NOT NULL,
  `album_id` int(4) NOT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Matt's_Inventory`
--

LOCK TABLES `Matt's_Inventory` WRITE;
/*!40000 ALTER TABLE `Matt's_Inventory` DISABLE KEYS */;
INSERT INTO `Matt's_Inventory` VALUES (1,15.99,15,1),(2,15.99,10,2),(3,9.99,7,3),(4,9.99,5,4),(5,22.99,4,5),(6,22.99,9,6),(7,15.99,15,7),(8,15.99,30,8),(9,9.99,10,9),(10,9.99,3,10),(11,15.99,7,11),(12,9.99,4,12),(13,22.99,6,13),(14,22.99,1,14),(15,9.99,2,15),(16,15.99,14,16),(17,22.99,22,17),(18,15.99,20,18),(19,9.99,10,19),(20,9.99,7,20);
/*!40000 ALTER TABLE `Matt's_Inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Record_Label`
--

DROP TABLE IF EXISTS `Record_Label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Record_Label` (
  `label_id` int(4) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(65) NOT NULL,
  PRIMARY KEY (`label_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Record_Label`
--

LOCK TABLES `Record_Label` WRITE;
/*!40000 ALTER TABLE `Record_Label` DISABLE KEYS */;
INSERT INTO `Record_Label` VALUES (1,'Rock \'n\' Roll Records'),(2,'Pop Productions'),(3,'Country LLC'),(4,'Hip Hop Incorporated');
/*!40000 ALTER TABLE `Record_Label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_cart`
--

DROP TABLE IF EXISTS `temp_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_cart` (
  `tempcart_hidden` int(10) NOT NULL AUTO_INCREMENT,
  `temp_cart_session` char(50) NOT NULL,
  `temp_cart_prodnum` char(5) NOT NULL,
  `temp_cart_quan` int(3) NOT NULL,
  PRIMARY KEY (`tempcart_hidden`),
  KEY `temp_cart_session` (`temp_cart_session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_cart`
--

LOCK TABLES `temp_cart` WRITE;
/*!40000 ALTER TABLE `temp_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_cart_shop`
--

DROP TABLE IF EXISTS `temp_cart_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_cart_shop` (
  `tempcart_hidden` int(10) NOT NULL AUTO_INCREMENT,
  `temp_cart_session` char(50) NOT NULL,
  `temp_cart_prodnum` char(5) NOT NULL,
  `temp_cart_quan` int(3) NOT NULL,
  PRIMARY KEY (`tempcart_hidden`),
  KEY `temp_cart_session` (`temp_cart_session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_cart_shop`
--

LOCK TABLES `temp_cart_shop` WRITE;
/*!40000 ALTER TABLE `temp_cart_shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_cart_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tempcart`
--

DROP TABLE IF EXISTS `tempcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tempcart` (
  `tempcart_hidden` int(10) NOT NULL AUTO_INCREMENT,
  `temp_cart_session` char(50) NOT NULL,
  `temp_cart_prodnum` char(5) NOT NULL,
  `temp_cart_quan` int(3) NOT NULL,
  PRIMARY KEY (`tempcart_hidden`),
  KEY `temp_cart_session` (`temp_cart_session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tempcart`
--

LOCK TABLES `tempcart` WRITE;
/*!40000 ALTER TABLE `tempcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `tempcart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-29 21:33:56
