-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: nattupuram
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `distributors`
--

DROP TABLE IF EXISTS `distributors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distributors` (
  `distributors_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `product` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`distributors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distributors`
--

LOCK TABLES `distributors` WRITE;
/*!40000 ALTER TABLE `distributors` DISABLE KEYS */;
INSERT INTO `distributors` VALUES (1,'test','veema@appinessworld.com','987654321','zsfdfgdrfg','sdfsdgsdfg','oil',NULL,'N','2017-09-21 22:05:31'),(2,'sidhartha','veema@appinessworld.com','987654321','zsfdfgdrfg','sdfsdgsdfg','oil','asasdasdasdasdasd','N','2017-09-21 22:08:30'),(3,'bengaluru','veema@appinessworld.com','987654321','zsfdfgdrfg','sdfsdgsdfg','oil','afADASDASDasd','N','2017-09-21 22:09:01');
/*!40000 ALTER TABLE `distributors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry`
--

LOCK TABLES `enquiry` WRITE;
/*!40000 ALTER TABLE `enquiry` DISABLE KEYS */;
INSERT INTO `enquiry` VALUES (1,'can','','','dtjrfkcyj','N','2017-08-20 00:42:19'),(2,'test',NULL,'zdvxv',NULL,'N','2017-09-21 21:48:57'),(3,'test',NULL,'asdawd',NULL,'N','2017-09-21 21:49:31'),(4,'test','veema@appinessworld.com','asdadsa','awsdawwsdawsd','N','2017-09-21 21:50:18'),(5,'Racchana Kuppuraj','','','sdfsdf','N','2017-10-23 06:45:30');
/*!40000 ALTER TABLE `enquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_benefits`
--

DROP TABLE IF EXISTS `product_benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_benefits` (
  `benefits_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`benefits_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_benefits`
--

LOCK TABLES `product_benefits` WRITE;
/*!40000 ALTER TABLE `product_benefits` DISABLE KEYS */;
INSERT INTO `product_benefits` VALUES (1,1,'Boosts Fertility.','2017-09-22 15:57:02','N'),(2,1,'Skin & Hair Care (Rich Vit-E & Omega-6).','2017-09-22 15:57:15','N'),(3,1,'Strengthen Immune System.','2017-09-22 15:57:27','N'),(4,1,'Prevents from Heart Diseases, Alzheimer\'s disease & Cancer.','2017-09-22 15:57:37','N'),(5,1,'Maintains Cholesterol level.','2017-09-22 15:57:50','N'),(6,1,'Reduces High Blood Pressure.','2017-09-22 15:57:58','N'),(7,1,'Helps to stabilize Blood Sugar .','2017-09-22 15:58:06','N'),(8,1,'Best for Kids healthy development.','2017-09-22 15:58:15','N'),(9,2,'Prevent Diabetes.','2017-09-22 15:57:02','N'),(10,2,'Oil Pulling for Dental Health.','2017-09-22 15:57:15','N'),(11,2,'Strengthens Bones & Prevents Osteoporosis.','2017-09-22 15:57:27','N'),(12,2,'Skin & Hair Care.','2017-09-22 15:57:37','N'),(13,2,'Maintains Cholesterol level and Reduces High Blood Pressure.','2017-09-22 15:57:50','N'),(14,2,'Reduces Hypertension.','2017-09-22 15:57:58','N'),(15,2,'Reduces Anxiety and Depression.','2017-09-22 15:58:06','N'),(16,2,'Rejuvenate Liver, Prevents Respiratory diseases & Kidney damage.','2017-09-22 15:58:15','N'),(17,2,'Best for Kids healthy development.','2017-09-22 15:58:15','N'),(18,3,'Prevent Wrinkles, Sagging Skin, Skin dryness and Flaking.','2017-09-22 15:57:02','N'),(19,3,'Reduces Protein loss in hair and nourishes the hair.','2017-09-22 15:57:15','N'),(20,3,'Treats Pancreatitis and Alzheimer\'s disease.','2017-09-22 15:57:27','N'),(21,3,'Prevents and effectively cures Candida.','2017-09-22 15:57:37','N'),(22,3,'Improve Bone Health.','2017-09-22 15:57:50','N'),(23,3,'Helps in Easy Digestion.','2017-09-22 15:57:58','N'),(24,3,'Strengthens Immune System.','2017-09-22 15:58:06','N'),(25,3,'Prevents diseases affecting Liver and Kidney.','2017-09-22 15:58:15','N'),(26,3,'Effective in Handling damaged tissues and infections.','2017-09-22 15:58:15','N'),(27,3,'Rich in Lauric acid (a compound found in human breast milk) that fights against harmful pathogens.','2017-09-22 15:58:15','N'),(28,3,'Helps to maintain Blood Sugar and Cholesterol.','2017-09-22 15:58:15','N'),(29,3,'Best for Kids healthy development.','2017-09-22 15:58:15','N'),(30,4,'Taking out impurities from our body.','2017-09-22 15:58:15','N'),(31,4,'Stimulates muscle movements, strenghthen the sense organ.','2017-09-22 15:58:15','N'),(32,4,'Rich source of Vitamin A, D and E.','2017-09-22 15:58:15','N'),(33,4,'Lactose Free & contains no salt.','2017-09-22 15:58:15','N'),(34,4,'Better Digestion & helps in Hair growth also.','2017-09-22 15:58:15','N'),(35,4,'Stimulates muscle movements, strenghthen the sense organ.','2017-09-22 15:58:15','N'),(36,4,'Good source of energy and used in many diet styles especially in Paleo Diet.','2017-09-22 15:58:15','N');
/*!40000 ALTER TABLE `product_benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_cart`
--

DROP TABLE IF EXISTS `product_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  `shipping_cost` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_cart`
--

LOCK TABLES `product_cart` WRITE;
/*!40000 ALTER TABLE `product_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_characteristics`
--

DROP TABLE IF EXISTS `product_characteristics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_characteristics` (
  `characteristics_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`characteristics_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_characteristics`
--

LOCK TABLES `product_characteristics` WRITE;
/*!40000 ALTER TABLE `product_characteristics` DISABLE KEYS */;
INSERT INTO `product_characteristics` VALUES (1,1,'Cold pressed groundnut oil has aureolin cobalt yellow with authentic flavor & aroma.','2017-09-22 15:56:18','N'),(2,1,'It has high smoking point. So it is ideal for Indian style of cooking and deep frying.','2017-09-22 15:56:18','N'),(3,1,'For better shelf life, store the oil in cool dark place away from light using clay utensils.','2017-09-22 15:56:33','N'),(4,2,'Cold pressed sesame oil has dark amber yellow color with authentic flavor and aroma.','2017-09-22 15:56:18','N'),(5,2,'It has medium high smoking point and used for most cooking, can take to fairly high temp.','2017-09-22 15:56:18','N'),(6,2,'For better shelf life, store the oil in cool dark place away from light using clay utensils.','2017-09-22 15:56:33','N'),(7,3,'Cold pressed sesame oil has white color with authentic Coconut flavor and aroma.','2017-09-22 15:56:18','N'),(8,3,'It has low smoking point & unsuitable for deep frying but suit for cooking at lower temp.','2017-09-22 15:56:18','N'),(9,3,'For better shelf life, store the oil in cool dark place away from light using clay utensils.','2017-09-22 15:56:33','N'),(10,4,'Don\'t refrigerate and shelf life is 3 months from manufacturing date.','2017-09-22 15:56:33','N');
/*!40000 ALTER TABLE `product_characteristics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_facts`
--

DROP TABLE IF EXISTS `product_facts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_facts` (
  `facts_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `facts_description` text NOT NULL,
  `fact_result` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`facts_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_facts`
--

LOCK TABLES `product_facts` WRITE;
/*!40000 ALTER TABLE `product_facts` DISABLE KEYS */;
INSERT INTO `product_facts` VALUES (1,1,'Energy','884.01','2017-09-22 15:52:19','N'),(2,1,'Protein','0','2017-09-22 15:52:19','N'),(3,1,'Cholestrol','0','2017-09-22 15:52:19','N'),(4,1,'Saturated Fatty Acid','15.97','2017-09-22 15:52:19','N'),(5,1,'Mono Unsaturated','45.94','2017-09-22 15:52:19','N'),(6,1,'Poly Unsaturated','31.95','2017-09-22 15:54:50','N'),(7,1,'Trans Fatty acid','0','2017-09-22 15:54:50','N'),(8,1,'Oryzanol','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(9,1,'TBHQ (Antioxidant)','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(10,2,'Energy','884.19','2017-09-22 15:52:19','N'),(11,2,'Protein','0','2017-09-22 15:52:19','N'),(12,2,'Cholestrol','0','2017-09-22 15:52:19','N'),(13,2,'Saturated Fatty Acid','14.98','2017-09-22 15:52:19','N'),(14,2,'Mono Unsaturated','39.55','2017-09-22 15:52:19','N'),(15,2,'Poly Unsaturated','44.5','2017-09-22 15:54:50','N'),(16,2,'Trans Fatty acid','0','2017-09-22 15:54:50','N'),(17,2,'Oryzanol','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(18,2,'TBHQ (Antioxidant)	','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(19,3,'Energy','883.83','2017-09-22 15:52:19','N'),(20,3,'Protein','0','2017-09-22 15:52:19','N'),(21,3,'Cholestrol','0','2017-09-22 15:52:19','N'),(22,3,'Saturated Fatty Acid','89.86','2017-09-22 15:52:19','N'),(23,3,'Mono Unsaturated','7.98','2017-09-22 15:52:19','N'),(24,3,'Poly Unsaturated','1.99','2017-09-22 15:54:50','N'),(25,3,'Trans Fatty acid','0','2017-09-22 15:54:50','N'),(26,3,'Oryzanol','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(27,3,'TBHQ (Antioxidant)	','BDL* (DL-10.0)','2017-09-22 15:54:50','N'),(28,4,'Fat Content','98.9%','2017-09-22 15:54:50','N'),(29,4,'Energy','920.7kcal','2017-09-22 15:54:50','N'),(30,4,'Protein	','0.15g','2017-09-22 15:54:50','N'),(31,4,'Moisture	','Less than 0.2g','2017-09-22 15:54:50','N');
/*!40000 ALTER TABLE `product_facts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_methods`
--

DROP TABLE IF EXISTS `product_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_methods` (
  `method_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_methods`
--

LOCK TABLES `product_methods` WRITE;
/*!40000 ALTER TABLE `product_methods` DISABLE KEYS */;
INSERT INTO `product_methods` VALUES (1,1,'The exceptional quality of sun dried raw ground nut seeds are placed to Wooden Ghani/ Mara Chekku and pressing produce Oil in bottom.','2017-09-22 15:49:57','N'),(2,1,'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.','2017-09-22 15:49:57','N'),(3,1,'There is no Thermal/Refining process and no additives/chemical/preservatives added.','2017-09-22 15:50:10','N'),(4,2,'The exceptional quality of Sun dried raw sesame seeds plus palm jaggery (Panai Karupatti-to balance bitterness of seeds & to enhance its flavor) are placed to Wooden Ghani / Mara Chekku and pressing produce Oil in bottom.','2017-09-22 15:49:57','N'),(5,2,'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.','2017-09-22 15:49:57','N'),(6,2,'There is no Thermal/Refining process and no additives/chemical/preservatives added.','2017-09-22 15:50:10','N'),(7,3,'The exceptional quality of Sun dried raw Coconut are placed to Wooden Ghani / Mara Chekku and pressing produce Oil in bottom.','2017-09-22 15:49:57','N'),(8,3,'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.','2017-09-22 15:49:57','N'),(9,3,'There is no Thermal/Refining process and no additives/chemical/preservatives added.','2017-09-22 15:50:10','N'),(10,4,'Good for Health.','2017-09-22 15:49:57','N'),(11,4,'Hygienically processed.','2017-09-22 15:49:57','N'),(12,4,'Mouth Watering taste.','2017-09-22 15:50:10','N');
/*!40000 ALTER TABLE `product_methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `delivery_status` enum('Y','N') DEFAULT 'N',
  `sub_total` varchar(45) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shipping_cost` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `order_status` varchar(45) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `payment_status` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_order`
--

LOCK TABLES `product_order` WRITE;
/*!40000 ALTER TABLE `product_order` DISABLE KEYS */;
INSERT INTO `product_order` VALUES (1,NULL,NULL,NULL,'580','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:36:02','N',NULL,'Natural Homemade Ghee','1Liter','2','290'),(2,NULL,NULL,NULL,'435','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:37:37','N',NULL,'Natural Homemade Ghee','HalfLiter','3',' 145'),(3,NULL,NULL,NULL,'290','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:40:08','N',NULL,'Natural Homemade Ghee','1Liter','1','290'),(4,NULL,NULL,NULL,'580','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:41:10','N',NULL,'Natural Homemade Ghee','1Liter','2','290'),(5,NULL,NULL,NULL,'290','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:43:54','N',NULL,'Natural Homemade Ghee','HalfLiter','2',' 145'),(6,7,NULL,NULL,'580','N',NULL,1,NULL,NULL,'Pending','2017-10-23 08:44:22','N',NULL,'Natural Homemade Ghee','1Liter','2','290');
/*!40000 ALTER TABLE `product_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_transaction`
--

DROP TABLE IF EXISTS `product_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `billing_addid` int(11) DEFAULT NULL,
  `shipping_addid` int(11) DEFAULT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  `total_amt` varchar(255) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `shipping_cost` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `transaction_status` varchar(255) DEFAULT NULL,
  `platform_fees` varchar(255) DEFAULT NULL,
  `taxigst` varchar(255) DEFAULT NULL COMMENT 'Tax IGST/ SGST/ CGST',
  `taxmethod` enum('IGST','GST') DEFAULT NULL,
  `taxsgst` varchar(255) DEFAULT NULL,
  `taxcgst` varchar(255) DEFAULT NULL,
  `internet_fee` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `guest_orderid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_transaction`
--

LOCK TABLES `product_transaction` WRITE;
/*!40000 ALTER TABLE `product_transaction` DISABLE KEYS */;
INSERT INTO `product_transaction` VALUES (1,NULL,2,NULL,NULL,'580','2017-10-23 10:12:52','N',NULL,NULL,'Success',NULL,NULL,NULL,NULL,NULL,NULL,'pay_8sbVJgXFNykZyd',NULL,'6'),(2,NULL,3,NULL,NULL,'580','2017-10-23 10:16:18','N',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6'),(3,NULL,4,NULL,NULL,'580','2017-10-23 10:19:06','N',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6'),(4,NULL,5,NULL,NULL,'580','2017-10-23 10:26:59','N',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6'),(5,NULL,6,NULL,NULL,'580','2017-10-23 10:28:04','N',NULL,NULL,'Success',NULL,NULL,NULL,NULL,NULL,NULL,'pay_8sblFYJhxVZS4I',NULL,'6'),(6,NULL,7,NULL,NULL,'580','2017-10-23 10:37:41','N',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6'),(7,NULL,8,NULL,NULL,'580','2017-10-23 10:40:02','N',NULL,NULL,'Success',NULL,NULL,NULL,NULL,NULL,NULL,'pay_8sbxuHwMe1Xydi',NULL,'6');
/*!40000 ALTER TABLE `product_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `main_img` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `review_count` int(11) NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mara Chekku Ground Nut Oil - (Wood/Cold Pressed)','assets/images/product-details/groundnut.jpg','assets/images/product-details/groundnut.jpg','assets/images/product-details/groundnut.jpg','1 Liter, Half Liter','290, 145','This natural Ground Nut Oil extracted by traditional cold press method using Mara Chekku/ Wooden Ghani. Since there is no heat generation in this process, oil is dense and keeps all its own flavor, aroma and nutrients intact.',0,'2017-09-22 15:42:44','N'),(2,'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)','assets/images/product-details/sesame.jpg','assets/images/product-details/sesame.jpg','assets/images/product-details/sesame.jpg','1 Liter, 500 ML, 250 ML','375, 188, 94','This natural Sesame /Gingelly Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.',0,'2017-09-22 15:45:35','N'),(3,'Mara Chekku Coconut Oil - (Wood/Cold Pressed)','assets/images/product-details/coconut.jpg','assets/images/product-details/coconut.jpg','assets/images/product-details/coconut.jpg','1 Liter, 500 ML','275, 138',' This natural Coconut Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.',0,'2017-09-22 15:47:24','N'),(4,'Natural Homemade Ghee','assets/images/product-details/ghee.jpg','assets/images/product-details/ghee.jpg','assets/images/product-details/ghee.jpg','1 Liter, 250 ML','850, 250','100% Natural Homemade cow ghee. The milk used for ghee preparation taken from our own free range dairy farm - Healthy Cows. We Used traditional hand churned method. Zero Chemicals & preservatives added. Above all these makes our ghee to have great aroma, texture and flavor. The taste and quality of the ghee is comparable to our own Grandmother\'s preparation. Made in small batches every week.',0,'2017-09-22 15:48:48','N');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `password` text,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `product_name` varchar(255) DEFAULT NULL,
  `product_img` text,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (1,1,'Veema Rebello','test@test.com','Bangalore','Test Message','N','Natural Homemade Ghee','assets/images/product-details/groundnut.jpg','2017-10-23 06:54:44');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `landmark` text,
  `pincode` varchar(255) NOT NULL,
  `alter_phone` varchar(255) DEFAULT NULL,
  `default` enum('Y','N') NOT NULL DEFAULT 'N',
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guest_orderid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
INSERT INTO `user_address` VALUES (1,NULL,'Test Guest','9008184281','Address1','Address2','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 09:43:28','6'),(2,NULL,'Test Guest','9008184281','Address1','Address2','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:12:52','6'),(3,NULL,'Test Guest','9008184281','Address1','Address2','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:16:18','6'),(4,NULL,'','','','','','','',NULL,'',NULL,'N','N','2017-10-23 10:19:06','6'),(5,NULL,'Testing Guest','9008184281','Address4','Address6','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:26:59','6'),(6,NULL,'Testing Guest','9008184281','Address4','Address6','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:28:04','6'),(7,NULL,'test ','9008184281','Address 1','aadddresss2','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:37:41','6'),(8,NULL,'test','9008184281','addresss22','','Bengaluru','India','Karnataka',NULL,'560095',NULL,'N','N','2017-10-23 10:40:02','6');
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-23 18:41:04
