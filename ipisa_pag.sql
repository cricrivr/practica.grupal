-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: ipisa_pag
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `id_alum` int NOT NULL AUTO_INCREMENT,
  `a_gradu` int DEFAULT NULL,
  `insti` varchar(40) DEFAULT NULL,
  `curso` varchar(40) DEFAULT NULL,
  `matricula` varchar(40) DEFAULT NULL,
  `cedula` varchar(30) DEFAULT NULL,
  `carrera_tec` varchar(40) DEFAULT NULL,
  `tec_basic` varchar(40) DEFAULT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `fecha_nac` varchar(30) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `sector` varchar(30) DEFAULT NULL,
  `seccion` varchar(30) DEFAULT NULL,
  `municipio` varchar(40) DEFAULT NULL,
  `provincia` varchar(40) DEFAULT NULL,
  `pais_nac` varchar(40) DEFAULT NULL,
  `tel_res` varchar(20) DEFAULT NULL,
  `tel_movil` varchar(20) DEFAULT NULL,
  `lic_conducir` varchar(15) DEFAULT NULL,
  `vehiculop` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contra` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_alum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `buscar_vacantes`
--

DROP TABLE IF EXISTS `buscar_vacantes`;
/*!50001 DROP VIEW IF EXISTS `buscar_vacantes`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `buscar_vacantes` AS SELECT 
 1 AS `ID`,
 1 AS `empresa`,
 1 AS `nombre del puesto`,
 1 AS `funcion del puesto`,
 1 AS `sueldo`,
 1 AS `tipo contrato`,
 1 AS `correo curriculum`,
 1 AS `persona de contacto`,
 1 AS `telefono`,
 1 AS `horario`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(100) NOT NULL,
  `RNC` varchar(16) NOT NULL,
  `identidad` tinyint(1) NOT NULL DEFAULT '0',
  `dep_formacion` tinyint(1) NOT NULL DEFAULT '0',
  `alcance` tinyint(1) NOT NULL DEFAULT '0',
  `act_economica` varchar(250) NOT NULL,
  `indrustria` tinyint(1) NOT NULL DEFAULT '0',
  `tamaño` varchar(25) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `pais_operador` varchar(100) NOT NULL,
  `tel_principal` varchar(13) NOT NULL,
  `tel_directo` varchar(13) NOT NULL,
  `email` varchar(230) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `telf_cont` varchar(13) NOT NULL,
  `ext` varchar(7) NOT NULL DEFAULT '',
  `correo` varchar(230) NOT NULL,
  `tel_Completo` varchar(25) GENERATED ALWAYS AS (concat(`telf_cont`,_utf8mb4'+',`ext`)) VIRTUAL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nom_empresa`, `RNC`, `identidad`, `dep_formacion`, `alcance`, `act_economica`, `indrustria`, `tamaño`, `direccion`, `sector`, `seccion`, `municipio`, `provincia`, `pais_operador`, `tel_principal`, `tel_directo`, `email`, `contraseña`, `telf_cont`, `ext`, `correo`) VALUES (1,'empresa1','9872310912',0,0,0,'buena',0,'grande','direccion1','sector1','seccion1','municipio1','provincia 1','Republica Dominicana','8099812781','8092718872','email@mail.com','12345678','809928091','','correo@corre.com'),(2,'ipii','56789',0,1,1,'jxxkkakabxjkavaxjmabjhv',1,'grande','av. circunvalacion','matanza','palo amarillo','Baitoa','Santiago','Republica Dominicana','8097756744','8095453356','carrera@gmail.com','2456','8096565454','11','carr@gmail.com'),(3,'mpbibli','7843',1,0,0,'sjakjdhqidj;ojlasjka',1,'grande','Baitoa, merce','merce','mercedes','Baitoa','Santiago','Republica Dominicana','8095534598','8093689787','carvajal@gmail.com','1235','8095426478','12','vajal@gmail.com'),(4,'carval','73828',1,0,1,'dcgiuediashnxjkauiq',1,'grande','Baitoa, calle duarte','calle duarte','duarte','Baitoa','Santiago','Republica Dominicana','8096783455','8094654524','ytat@gmail.com','784','8297546557','34','yitt@gmail.com'),(5,'celucel','28723',1,1,0,'ysdgcyuaxba cc',0,'grande','Baitoa, mirabal','lopez','mirabal','Baitoa','Santiago','Republica Dominicana','8093432536','8097653245','shui@gmail.com','6673','8298756447','21','uiii@gmail.com'),(6,'Tantiz','17837',0,1,1,'vgashxfquyvxa',0,'peque','Baitoa, jagua, san luis','jagua','san luis','Baitoa','Santiago','Republica Dominicana','8297786545','8095796755','calle@gemail.com','3673','8092651517','12','llelle@gmail.com'),(7,'Ollie','23341',1,1,1,'jhvasyucajsvjja',1,'peque','Baitoa, km 5','km 5','sol','Baitoa','Santiago','Republica Dominicana','8298567565','8098565454','santi@gmail.com','6343','8295675877','11','sansan@gmail.com'),(8,'EJEMPLO','23341',0,0,0,'NOSE NOSE NOSE',0,'GRANDE','no baitoa','sector2','los roques','no 1','santiago','Republica Dominicana','8298567225','8298522465','nose@hotmail.com','982128','8298511115','01','outllok@microst.com');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VACANTES`
--

DROP TABLE IF EXISTS `VACANTES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `VACANTES` (
  `id_vacante` int NOT NULL AUTO_INCREMENT,
  `id_empresa` int NOT NULL,
  `nom_puesto` varchar(100) NOT NULL,
  `funcion_puesto` varchar(300) NOT NULL,
  `sueldo` int NOT NULL,
  `tipo_contrato` tinyint(1) NOT NULL DEFAULT '0',
  `correo_curriculum` varchar(230) NOT NULL,
  `persona_contacto` varchar(30) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  `horario` varchar(50) GENERATED ALWAYS AS (concat(`hora_entrada`,_utf8mb4'-',`hora_salida`)) VIRTUAL,
  PRIMARY KEY (`id_vacante`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VACANTES`
--

LOCK TABLES `VACANTES` WRITE;
/*!40000 ALTER TABLE `VACANTES` DISABLE KEYS */;
INSERT INTO `VACANTES` (`id_vacante`, `id_empresa`, `nom_puesto`, `funcion_puesto`, `sueldo`, `tipo_contrato`, `correo_curriculum`, `persona_contacto`, `telefono`, `hora_entrada`, `hora_salida`) VALUES (1,2,'$puesto','$funcion',0,0,'$correo','$persona','$telefono','09:00:00','13:00:00'),(4,1,'admin','administrar',800,0,'correo@correo.com','persona','8097269812','10:00:00','17:00:00');
/*!40000 ALTER TABLE `VACANTES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `buscar_vacantes`
--

/*!50001 DROP VIEW IF EXISTS `buscar_vacantes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `buscar_vacantes` AS select `vacantes`.`id_vacante` AS `ID`,`empresa`.`nom_empresa` AS `empresa`,`vacantes`.`nom_puesto` AS `nombre del puesto`,`vacantes`.`funcion_puesto` AS `funcion del puesto`,`vacantes`.`sueldo` AS `sueldo`,`vacantes`.`tipo_contrato` AS `tipo contrato`,`vacantes`.`correo_curriculum` AS `correo curriculum`,`vacantes`.`persona_contacto` AS `persona de contacto`,`vacantes`.`telefono` AS `telefono`,`vacantes`.`horario` AS `horario` from (`vacantes` join `empresa` on((`empresa`.`id` = `vacantes`.`id_empresa`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29 13:12:05
