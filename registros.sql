-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 16:52:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `ape_paterno` varchar(40) DEFAULT NULL,
  `ape_materno` varchar(40) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `matricula` varchar(40) DEFAULT NULL,
  `email_per` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_ss` varchar(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_procesos` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `ape_paterno`, `ape_materno`, `nombres`, `tel`, `matricula`, `email_per`, `email`, `no_ss`, `direccion`, `id_procesos`, `id_carrera`) VALUES
(2, 'Landa', 'Vivas', 'Joshua', '9983041741', '201800361', 'joshualv46@gmail.com', '201800361@estudiantes.upqroo.edu.mx', '53160040555', 'Calle Río Grijalva, Mzn. 11 Lt. 1 No. 19 Fracc. Andalucía', 1, 1),
(3, 'Perez', 'Villarreal', 'Julio Eduardo', '9988603300', '201800082', 'julio9988952669@gmail.com', '201800082@estudiantes.upqroo.edu.mx', '27160035104', 'Hdas real del caribe Hdas de uman casa 1690 A', 3, 4),
(4, 'Camarena', 'Cervantes', 'Jonathan Israel', '9981400563', '201800044', 'jonathan.israel.2000@hotmail.com', '201800044@estudiantes.upqroo.edu.mx', '13160096932', 'CLL Quinta los Arcos SM 202', 3, 4),
(6, 'Arias', 'Magaña', 'Laura Karina', '9982441599', '201700251', 'arias.150310@gmail.com', '201700251@estudiantes.upqroo.edu.mx', '26169909921', 'REG.216 M50 L 1 CASA 1289 FRACC. GALAXIAS LA GUADALUPANA', 3, 7),
(7, 'Cuevas', 'Moreno', 'Doroty Oliva', '9983402971', '201800259', 'totiss1999@gmail.com', '201800259@estudiantes.upqroo.edu.mx', '71169960953', 'Carretera Federal Cancún-Mérida, Km 300, Fraccionamiento las Palmas, calle Palma Real, s/n.', 3, 7),
(8, 'Pérez', 'Medina', 'Alejandra del Carmen', '9982416533', '201800016', 'aleperezmedina05@gmail.com', '201800026@estudiantes.upqroo.edu.mx', '17170032431', 'Calle 52 Región 510 Manzana 57 Lote 06', 1, 2),
(9, 'Canul', 'Canul', 'Daniela Denise', '9983194399', '201700374', 'denise.1202099@gmail.com', '201700374@estudiantes.upqroo.edu.mx', '21169976574', 'Col. Milagro av. México con Paraguay', 2, 1),
(17, 'Hernández', 'López', 'Eduardo Daniel', '9988651216', '201800356', 'Lalo_daniel09@hotmail.com', '201800356@estudiantes.upqroo.edu.mx', '71169972669', 'Reg. 520, Mz 38, lt1.', 3, 1),
(20, 'CHABLE', 'CIAU', 'ARIANA NOEMI', '9984852333', '201700268', 'arianachableciau@gmail.com', '201700268@estudiantes.upqroo.edu.mx', '24169928371', 'Región 236 Mz. 20 Lt. 30 Calle 124 A', 3, 1),
(21, 'CHABLE', 'CIAU', 'ARIANA NOEMI', '9984852333', '201700268', 'arianachableciau@gmail.com', '201700268@estudiantes.upqroo.edu.mx', '24169928371', 'Región 236 Mz. 20 Lt. 30 Calle 124 A', 3, 7),
(22, 'Hernández', 'Hernández', 'Daniel', '9983150735', '201800061', 'danielhdezhdez001@gmail.com', '201800061@estudiantes.upqroo.edu.mx', '16130081314', 'SM259 M62 L1 No59, calle Palma Mexicana', 3, 4),
(23, 'Nava', 'Castro', 'Nycte-Ha', '9982311783', '201700038', 'nycte.ha13@gmail.com', '201700038@estudiantes.upqroo.edu.mx', '44169927934', '#10 Porto carrara, Villa marino', 3, 2),
(24, 'Peraza', 'Sulub', 'Brenda Lisette', '9985028452', '201800024', 'brendixd.2000@gmail.com', '201800024@estudiantes.upqroo.edu.mx', '53160075114', 'Cerrada siricote, Prado Norte', 3, 2),
(25, 'Leon', 'Cuapio', 'Raquel', '9982597476', '201800293', 'daraluna322@gmail.com', '201800293@estudiantes.upqroo.edu.mx', '31169889701', 'Reg. 232 Mz 38 Lt 16, Calle 68', 3, 7),
(26, 'Calvo', 'Jimenez', 'Mariana Guadalupe', '9984192082', '201800250', 'mariguadalupe476@gmail.com', '201800250@estudiantes.upqroo.edu.mx', '53160053418', 'Reg. 238 Mz.10 Lt. 16 Calle. 53', 3, 7),
(29, 'PALOMO', 'ECHAVARRIA', 'MIGUEL ALEXANDER', '9981797450', '201700095', 'alexander.palomo0310@gmail.com', '201700095@estudiantes.upqroo.edu.mx', '84108904586', 'CALLE 100 MANZANA 93 LOTE13 REGION 227', 3, 4),
(30, 'Balam', 'Martinez', 'Jose Rodrigo', '9842050305', '201800236', 'rbalam759@gmail.com', '201800236@estudiantes.upqroo.edu.mx', '55169840406', 'Calle 14 entre 85 y 90 colonia ejido', 3, 7),
(35, 'Perez', 'Maza', 'Arumy Crystal', '9981559515', '201900030', 'perezmaza05@gmail.com', '201900030@estudiantes.upqroo.edu.mx', '71169990331', 'Calle Lamania M81 L1 No.24  supmza 247 Fraccionamiento Azul Bonampak', 2, 2),
(37, 'Quijada', 'Canto', 'Paola Alejandra', '9983992105', '201800317', 'palejandraquicanto@hotmail.com', '201800317@estudiantes.upqroo.edu.mx', '53160076211', 'Sm 107 Mz 18 Lt 4 fraccionamiento paraiso Maya', 3, 7),
(38, 'Morales', 'Damian', 'Erick', '9983030392', '201700092', 'guppy.elk69@gmail.com', '201700092@estudiantes.upqroo.edu.mx', '23169760354', 'FRACC REAL LAS QUINTAS,PUMZA 202, QUINTAS LAS BARRANCAS, MZA 6, LT 4, N1', 3, 4),
(41, 'Martinez', 'Mendez', 'Alam Axel', '9983962404', '201800073', 'mendxel@gmail.com', '201800073@estudiantes.upqroo.edu.mx', '17139961555', 'Fraccionamiento Paseos Kabah Mz 1 Lt4 Sm223 #25', 3, 4),
(42, 'Martinez', 'Mendez', 'Alam Axel', '9983962404', '201800073', 'mendxel@gmail.com', '201800073@estudiantes.upqroo.edu.mx', '17139961555', 'Fraccionamiento Paseos Kabah Mz 1 Lt4 Sm223 #25', 3, 4),
(43, 'Martinez', 'Mendez', 'Alam Axel', '9983962404', '201800073', 'mendxel@gmail.com', '201800073@estudiantes.upqroo.edu.mx', '17139961555', 'Fraccionamiento Paseos Kabah Mz 1 Lt4 Sm223 #25', 3, 4),
(44, 'Martinez', 'Mendez', 'Alam Axel', '9983962404', '201800073', 'mendxel@gmail.com', '201800073@estudiantes.upqroo.edu.mx', '17139961555', 'Fraccionamiento Paseos Kabah Mz 1 Lt4 Sm223 #25', 3, 4),
(49, 'GUTIERREZ', 'GUTIERREZ', 'LIZBETH MAYREN', '9984957503', '201800176', 'lizbethgutierrez5253@gmail.com', 'lizbethgutierrez5253@gmail.com', '31169929655', '5A DEL MANGO M1 L2 54, SPMZA 247 VILLAS OTOCH 77516.', 1, 6),
(50, 'Perez', 'Sarabia', 'Victor', '9981971788', '201800120', 'victorperezsarabia22@gmail.com', '201800120@estudiantes.upqroo.edu.mx', '17130066008', 'Paraiso maya region 107 manzana 3 lote 6', 1, 3),
(52, 'López', 'Vidal', 'Luis Gerardo', '9984995563', '201800186', 'jerrys3rl2469@gmail.com', '201800186@estudiantes.upqroo.edu.mx', '71169978914', 'SM 247 M2 L3 CALLE 4TA PRIV EL MANGO VILLAS OTOCH', 3, 6),
(53, 'Perez', 'Medina', 'Alejandra del Carmen', '9982416533', '201800026', 'perezmedinale@gmail.com', '201800026@estudiantes.upqroo.edu.mx', '17170032431', 'Región 510 Manzana 57 Lote 06 Calle 52 Cecilio Chi', 1, 2),
(54, 'YAH', 'CUEVAS', 'LEYDI NAYARINA', '9981528565', '202000472', 'yah.leydi@gmail.com', '202000472@upqroo.edu.mx', '82129415475', 'CALLE 34 REG 103 MZA 28 LT 15', 2, 3),
(55, 'Caamal', 'Cauich', 'Francisco de Jesús', '9984241105', '201700120', 'caamalfrancisco18@gmail.com', '201700120@estudiantes.upqroo.edu.mx', '71169951127', 'Reg 217 Mza 48 Lt 1 #1306', 3, 3),
(57, 'Caamal', 'Cauich', 'Francisco de Jesús', '9984241105', '201700120', 'caamalfrancisco18@gmail.com', '201700120@estudiantes.upqroo.edu.mx', '71169951127', 'Reg 217 Mza 48 Lt 1 #1306', 3, 3),
(58, 'Caamal', 'Cauich', 'Francisco de Jesús', '9984241105', '201700120', 'caamalfrancisco18@gmail.com', '201700120@estudiantes.upqroo.edu.mx', '71169951127', 'Reg 217 Mza 48 Lt 1 #1306', 3, 3),
(59, 'Martinez', 'Mendez', 'Alam Axel', '9983962404', '201800073', 'mendxel@gmail.com', '201800073@estudiantes.upqroo.edu.mx', '17139961555', 'Jose Antiono Torres mz1 Lt4 sm223 #25', 3, 4),
(62, 'Pérez', 'Medina', 'Alejandra del Carmen', '9982416533', '201800026', 'perezmedinale@gmail.com', '201800026@ESTUDIANTES.UPQROO.EDU.MX', '17170032431', 'Reg. 510 Mza. 57 Lt. 06 Calle 52', 1, 2),
(63, 'SOBERANIS', 'CAAMAL', 'NATALIA GUADALUPE', '9982313530', '201700154', 'natalia.gsc15@gmail.com', '201700154@estudiantes.upqroo.edu.mx', '55169895434', 'SM 104 MZA 49 LT 1 CALLE RUBÍ NO. 103', 3, 3),
(64, 'Sosa', 'Tejero', 'Brando Angel', '9982434397', '201700044', 'sosabrandol9@gmail.com', '201700044@estudiantes.upqroo.edu.mx', '72169900965', 'Reg. 102 Mzn.22 Lt.28 Calle. 18', 3, 2),
(65, 'PEREZ', 'CEBALLOS', 'LIZETH ALEJANDRA', '9983673660', '202000430', 'lizethceballos5@gmail.com', '202000430@estudiantes.upqroo.edu.mx', '46170247525', 'galaxia la guadalupana region 211 manzana 58 lote 1 casa 1337', 1, 6),
(66, 'Martinez', 'Perez', 'Montserrat', '9983705015', '202000421', 'monmartinez230@gmail.com', '202000421@estudiantes.upqroo.edu.mx', '55169874595', 'SM 254 Mz 40 LT 03 CASA 208 CD Arenisca y Resid. La joya', 1, 6),
(67, 'Cuevas', 'Moreno', 'Dorory Oliva', '9983402971', '201800259', 'totiss1999@gmail.com', '201800259@estudiantes.upqroo.edu.mx', '71169960953', 'Carretera federal Cancun-Mérida Km301, fraccionamiento las palmas, calle palma real, s/n', 3, 7),
(71, 'Ramirez', 'Larrea', 'Uriel', '9983765558', '202000032', 'urielblik@gmail.com', '202000032@estudiantes.upqroo.edu.mx', '44170234502', 'Av. Pedregal, Calle Granate, Supermanzana 6E, 77503', 1, 2),
(74, 'Perez', 'Maza', 'Arumy Crystal', '9981559515', '201900030', 'perezmaza05@gmail.com', '201900030@estudiantes.upqroo.edu.mx', '71169990331', 'Calle Lamania M81 L1 No.24  supmza 247 Fraccionamiento Azul Bonampak', 2, 2),
(75, 'Villegas', 'Hernández', 'Zayri', '9981068567', '201700361', 'villegas-hernandez@live.com.mx', '201700361@estudiantes.upqroo.edu.mx', '49169675508', 'C 80 Mz 12 L1 EDIF 1 No. Int 203 SUPMZA 77 Corales 77', 3, 7),
(76, 'Magaña', 'González', 'Darwin Joel', '9983367794', '202000023', 'darwinmx32@gmail.com', 'darwinmx32@gmail.com', '46170258530', 'SM 217, M 48, L1, Priv. Río Santana, NoExt 1273, Col. La Guadalupana, CP 77518', 1, 2),
(77, 'Magaña', 'González', 'Darwin Joel', '9983367794', '202000023', 'darwinmx32@gmail.com', 'darwinmx32@gmail.com', '46170258530', 'SM 217, M 48, L1, Priv. Río Santana, NoExt 1273, Col. La Guadalupana, CP 77518', 1, 2),
(79, 'Hernández', 'López', 'Eduardo Daniel', '9988651216', '201800356', 'Eduardo_Hernandez1519@hotmail.com', '201800356@estudiantes.upqroo.edu.mx', '71169972669', 'Reg. 520, mz 38, lt 1, Villas del Jordán', 3, 1),
(81, 'Frias', 'Canul', 'victor', '9981350115', '201800171', 'friasv191@gmail.com', '201800171@estudiantes.upqroo.edu.mx', '25159578571', 'sm215 mz6 lt3 casa 6 calle francisco villa colonia los héroes', 2, 5),
(83, 'Chuc', 'Cohuo', 'Alex Joel', '9985251203', '201800156', 'achuc8468@gmail.com', '201800156@estudiantes.upqroo.edu.mx', '08180078878', 'SM249,M533,L1 AV.LAK. C.P77500', 2, 6),
(84, 'López', 'Chan', 'Leydi Griseldi', '9984046964', '201800363', 'leydi.lopez.g@hotmail.com', '201800363@estudiantes.upqroo.edu.mx', '34169951109', 'Reg:103, Mza:42, Lt:4', 3, 1),
(88, 'Alonso', 'Borges', 'Mauricio Rafael', '9841329438', '202000001', 'mauricioal2405@gmail.com', '202000001@estudiantes.upqroo.edu.mx', '71169945707', 'SM514 M9 L1 Paseo Loltum 41A Fracc Paseos del Caribe CP 77535', 1, 2),
(89, 'Nah', 'Dzul', 'Alexis Argenis', '9983957294', '201800021', 'alexisargenis555@gmail.com', '201800021@estudiantes.upqroo.edu.mx', '2160068710', 'Haciendas Del Caribe, Av: Ixtepec, Circuito De Ixtlán, Mz: 82. Lt: 3 N°:1619-B Sm: 200', 3, 2),
(91, 'Mendoza', 'Dzul', 'Abigail Guadalupe', '9983366610', '201700316', 'abigailgpe9904@gmail.com', '201700316@estudiantes.upqroo.edu.mx', '71169982528', 'Alejandría, calle fuentes de nicea casa 26.', 3, 7),
(93, 'SOBERANIS', 'CAAMAL', 'NATALIA GUADALUPE', '9982313530', '201700154', 'natalia.gsc15@gmail.com', '201700154@upqroo.edu.mx', '55169895434', 'SM104 MZA49 LT1 CALLE RUBÍ No.103 LINDA VISTA', 3, 3),
(95, 'Rivero', 'Canché', 'María Deniss Michel', '9911066138', '201800031', 'maria510-rc@hotmail.com', '201800031@estudiantes.upqroo.edu.mx', '71169994747', 'Región 510, Mza. 49, Lt. 8. Colonia Cecilio Chi, Cancún, Q. Roo.', 3, 2),
(96, 'Kinil', 'Kumul', 'Esteban', '9984175338', '202000017', 'estebankinilkumul7@gmail.com', '202000017@estudiantes.upqroo.edu.mx', '35139975300', 'Sm 104 Mz 34 L 1-08 Fraccionamiento Paraíso Maya', 1, 2),
(97, 'Puc', 'Osorio', 'Henri Gerardo', '9985251097', '202000031', 'gpucosorio@gmail.com', '202000031@estudiantes.edu.upqroo.mx', '50159763858', 'Fracc. Vista Real Av. Monte Gibraltar Smz 252 Mz 26 Lt3 #44 C.P 77518', 1, 2),
(98, 'Tome', 'Molina', 'Erick Yahir', '9983924233', '201900037', 'erickyahir2609010310@gmail.com', '201900037@estudiantes.upqroo.edu.mx', '10160144399', 'Jacarandas 02, Villas del Mar Plus', 2, 2),
(101, 'Cetzal', 'Hernández', 'Abner', '9988303598', '201800048', 'cetzalhernandez023@gmail.com', '201800048@estudiantes.upqroo.edu.mx', '2160046906', 'C. TIERRA BLANCA, MZA 60, LT 08, SM 242-COL LA MORENA', 3, 4),
(103, 'BALAM', 'CHIMAL', 'LUIS ARMANDO', '9981401482', '201900367', 'ffmcancun@gmail.com', 'ffmcancun@gmail.com', '82119243515', 'reg 516 mz 31 lt 20', 2, 4),
(104, 'Arias', 'Magaña', 'Laura Karina', '9982441599', '201700251', 'arias.150310@gmail.com', '201700251@estudiantes.upqroo.edu.mx', '26169909921', 'Reg. 216 Mz 50 L 1 casa 1289 Galaxias la guadalupana', 3, 7),
(105, 'Martínez', 'Canche', 'Neysi Rubi', '9911097694', '202000053', 'rubimartinezc2702@gmail.com', '202000053@estudiantes.upqroo.edu.mx', '44200260014', 'AV 50. M 49. L8. SUPMZA 510. Cecilio Chi, Benito Juarez, Quintana Roo', 1, 2),
(106, 'Mas', 'de Leon', 'Lizbeth Alejandra', '9981265907', '201800299', 'LizMas2870@gmail.com', '201800299@estudiantes.upqroo.edu.mx', '06139961640', 'Av. Rancho Viejo, Mza 03 Lt 13 colonia San Martin Caballero', 3, 7),
(107, 'Pérez', 'Medina', 'Alejandra del Carmen', '9982416533', '201800026', 'perezmedinale@gmail.com', '201800026@estudiantes.upqroo.edu.mx', '17170032431', 'Calle 52 Región 510 Manzana 57 Lote 06', 1, 2),
(108, 'Salomon', 'Leon', 'Karla Vianey', '9984646027', '201700103', 'kavisale99@gmail.com', '201700103@estudiantes.upqroo.edu.mx', '02159963327', 'Villa Alicante 5', 3, 4),
(109, 'Gonzalez', 'Araujo', 'Pedro Jesus', '9981316578', '201800057', 'pedro-pister@hotmail.com', '201800057@estudiantes.upqrooo.edu.mx', '71169968774', 'reg 103 calle 30 mz 50 lt 27', 3, 4),
(110, 'Gonzalez', 'Araujo', 'Pedro Jesus', '9981316578', '201800555', 'pedro-pister@hotmail.com', '201800057@estudiantes.upqrooo.edu.mx', '71169968774', 'reg 103 calle 30 mz 50 lt 27', 3, 4),
(114, 'brenda karen', 'barrera', 'salinas', '9984921345', '201800239', 'brendaesaucb@gmail.com', '201800239@estudiantes.upqroo.edu.mx', '11169623789', 'sm260 mz13 lt6-03 edif.m5', 3, 7),
(117, 'Rodríguez', 'Álvarez', 'Julio César', '9982130470', '201400084', 'julio9191rodriguez@gmail.com', '201400084@estudiantes.upqroo.edu.mx', '82099110734', 'Sm 255 Mz 46 Lt 3 ED 3 Dep C Paseos Nikte', 2, 2),
(119, 'REYES', 'PIERCE', 'JOHANN', '9981792684', '201700100', 'johannreyespierce@gmail.com', '20017_id@estuduantes.upqroo.edu.mx', '46169734673', 'C. 119, Cecilio Chi, 510, 77534 Cancún, Q.R.', 3, 4),
(120, 'Hernandez', 'Poot', 'Yerli Yasuri', '9984018211', '201800360', 'yerlih16420@gmail.com', '201800360@estudiantes.upqro.edu.mx', '3160046516', 'Rg 94 Mz 81 L 4 Calle 111 con 52 Av.Talleres', 3, 1),
(127, 'Calvo', 'Jimenez', 'Mariana Guadalupe', '9984192082', '201800250', 'mariguadalupe476@gmail.com', '201800250@estudiantes.upqroo.edu.mx', '53160053418', 'Reg.238 Mz.10 Lt.16 calle 53', 3, 7),
(128, 'Alcocer', 'May', 'Cinthia Michelle', '9983204109', '201800226', 'Cynthiaalcocer9@gmail.com', '201800226@estudiantes.upqroo.edu.mx', '53160049838', 'Sm 521 mz1 lt70 B calle Bahía fraccionamiento villas cancun', 3, 7),
(130, 'Moreno', 'Lanz', 'Fanny Jazmin', '9983371809', '201700319', 'fmorenolanz@gmail.com', '201700319@estudiantes.upqroo.edu.mx', '71169984748', 'Calle francisco May, fracc. Los héroes spmz 224', 3, 7),
(131, 'Canul', 'Gómez', 'Verónica', '9983009969', '201700067', 'vero.canul01@gmail.com', '201700067@estudiantes.upqroo.edu.mx', '71169952877', 'CTO.HDA DE IXTAFIAYUCA MZ82 LT4 1633B REG200 HDA REAL EL CARIBE', 2, 4),
(132, 'Ortiz', 'Martinez', 'Francisco Daniel', '9987041645', '201800081', 'fco.daniel@live.com.mx', '201800081@estudiantes.upqroo.edu.mx', '05169933784', 'Sm 249 Mz 11 Lt 1 No 17', 3, 4),
(133, 'Gomez', 'Roblero', 'Sayma Marieli', '9981194162', '202000047', 'saymagr02@gmail.com', '202000047@estudiantes.upqroo.edu.mx', '44200260006', 'Sm 68, M 7 Calle 27 y calle 4 Lt 29, Cancún, Q.R.', 1, 2),
(135, 'Cruz', 'Aguilar', 'Edwin Alejandro', '9983510606', '201800050', 'edwin.cruz.aguilar@hotmail.com', '201800050@estudiantes.upqroo.edu.mx', '05160083027', 'Sm 200, Mz 96, Lt 2, #1633-A, Haciendas del caribe, Benito Juárez, Quintana Roo.', 3, 4),
(138, 'Miranda', 'Ortega', 'Eduardo Israel', '9981007675', '201900071', 'zodiacolalo@gmail.com', '201900071@estudiantes.upqroo.edu.mx', '55169877259', 'Av. 135, 77567 Mz39 Lt1 N.11 Jardines del Sur 3 Q.R. México', 2, 4),
(139, 'García', 'Pérez', 'Jhoana Maricruz', '9989393843', '201800353', 'jhoanagarciaperez17@gmail.com', '201800353@estudiantes.upqroo.edu.mx', '25160063092', 'Smza.248 Mza. 12 Lot.1 Casa 60 Villas del Mar I', 3, 1),
(140, 'Garcia', 'Alarcon', 'Francisco Eduardo', '2291180852', '201900258', 'paco.francisco.eduardo@gmail.com', 'paco.francisco.eduardo@gmail.com', '27190190929', 'RETORNO LAS CALANDRIAS, REGION 91', 1, 1),
(141, 'JIMENEZ', 'GUTIERREZ', 'VICTOR', '9981117318', '201700086', 'victorjxzg@gmail.com', '201700086@estudiantes.upqroo.edu.mx', '71169975126', 'EJIDO 36KM. ESCÁRCEGA, CAMPECHE', 2, 4),
(143, 'Soler', 'Zetina', 'Moisés', '9983989646', '20900365', 'moises0991@gmail.com', 'moises0991@gmail.com', '5189908873', 'Colonia pedregal calle cantera M 783', 2, 4),
(144, 'Palma', 'Pérez', 'Manuel Enrique', '9981984143', '201800118', 'palmaperezmepp@gmail.com', '201800118@estudiantes.upqroo.edu.mx', '82119344651', 'sm 260 mz 10 lt 6-1 Frcc. Prado Norte', 3, 3),
(145, 'Flores', 'Martínez', 'Diego', '9982631928', '201800352', 'Diego_kukulcan@hotmail.com', '201800352@estudiantes.upqroo.edu.mx', '82139556201', 'SM.201, Mz 82, Lt 1, Hacienda real del caribe, calle Hacienda los pinos', 3, 1),
(146, 'CORDOVA', 'ALVAREZ', 'GERARDO', '9985527582', '201900052', 'gerardocordova15@gmail.com', '201900052@estudiantes.upqroo.edu.mx', '54160086457', 'Smz 241 mz 4 lt10 col loma bonita', 2, 4),
(147, 'Piña', 'Montalvo', 'Andre Alberto', '9981817213', '201700332', 'andyalberto99@gmail.com', '201700332@estudiantes.upqroo.edu.mx', '3169998808', 'calle 36, manzana 72 lote 12 supermanzana 101', 3, 7),
(148, 'Ramirez', 'Larrea', 'Uriel', '9983765558', '202000032', 'urielblik@gmail.com', '202000032@estudiantes.upqroo.edu.mx', '44170234502', 'Av. Pedregal, Calle Granate, Supermanzana 6E, 77503', 1, 2),
(149, 'bacab', 'Javier', 'David Joel', '9981376939', '201700371', 'joelgg99@hotmail.com', '201700371|@estudiantes.upqroo.edu.mx', '2169902000', 'reg 227 mz93 lt8', 2, 1),
(150, 'Jimenez', 'Canul', 'Elizabeth Diosceline', '9981370545', '20170386', 'elizabethjimenezcanul@gmail.com', '201700386@estudiantes.upqroo.edu.mx', '33169947653', 'Región 228 manzana 49 lote 19', 3, 1),
(151, 'Hernandez', 'Poot', 'Yerli Yasuri', '9984018211', '201800360', 'yerlih16420@gmail.com', '201800360@estudiantes.upqroo.edu.mx', '3160046516', 'Rg 94 Mz 81 L 4 Calle 111 con 52 Av.Talleres', 3, 1),
(152, 'Gonzalez', 'Zavala', 'Carlos', '9983063571', '201700382', 'carlosgonzalezzav@gmail.com', '201700382@estudiantes.upqroo.edu.mx', '67169801171', 'Reg 200 Mza 102 Lt 2 Hdas Caribe', 3, 1),
(153, 'Castillo', 'Pat', 'Ana Laura', '9981146635', '201800346', 'anna.caspat@gmail.com', '201800346@estudiantes.upqroo.edu.mx', '17160060434', 'Av. 20 de Noviembre Rg. 239 Mz. 25 Lt. 8', 3, 1),
(154, 'Rivadeneira', 'Lobo', 'Frida', '9983817281', '201800367', 'frdrivadeneira.lobo@gmail.com', '201800367@estudiantes.upqroo.edu.mx', '02160042426', 'Región 229 Mz. 53 Lt. 1', 3, 1),
(155, 'Rivero', 'Canché', 'María Deniss Michel', '9911066138', '201800031', 'maria510-rc@hotmail.com', '201800031@estudiantes.upqroo.edu.mx', '71169994747', 'Región 510, Mza. 49, Lt. 8. Colonia Cecilio Chi, Cancún, Q. Roo.', 3, 2),
(156, 'Martínez', 'Araujo', 'Katia Jhoana', '9982390728', '201800364', 'kjhoana.araujo@gmail.com', '201800364@estudiantes.upqroo.edu.mx', '02160032500', 'Sm 215, Mza 104, Lote 2, Casa 8, Fracc. Los Héroes', 3, 1),
(157, 'Cortes', 'Estrada', 'Sarai Guadalupe', '9981457593', '201800349', 'sarycortes@hotmail.com', '201800349@estudiantes.upqroo.edu.mx', '55169851437', 'Priv. Nogales Mza 51 Lt 6 N27-A SMz 260 Fracc. Ciudad Natura', 2, 1),
(158, 'Gallegos', 'Cabrera', 'Jannya', '9984010419', '201800172', 'jannyagallegos@gmail.com', '201800172@estudiantes.upqroo.edu.mx', '25160034184', 'SM 217, M46, L2, La Guadalupana, 1272', 3, 6),
(159, 'GUTIERREZ', 'GUTIERREZ', 'LIZBETH MAYREN', '9984957503', '201800176', 'lizbethgutierrez5253@gmail.com', '201800176@estudiantes.upqroo.edu.mx', '31169929655', 'C 5A PRIV DEL MANGO M 1 L 2 54 SPMZA 247 VILLAS OTOCH 77516', 3, 6),
(160, 'Perez', 'Ceballos', 'Lizeth Alejandra', '9983673660', '202000430', 'lizethceballos5@gmail.com', '202000430@estudiantes.upqroo.edu.mx', '46170247525', 'REGIÓN 211 MANZANA 58 LOTE 1 CASA 1337 CALLE 84, GALAXIA LA GUADALUPANA, GALAXIA LA GUADALUPANA', 1, 6),
(161, 'Ramos', 'Balam', 'Ariana Guadalupe', '9984042904', '202000432', 'arianaramosbalam2002@gmail.com', '202000432@estudiante.upqroo.edu.mx', '2180278216', 'calle 12, manzana 7, edificio 1410, departamento A', 1, 6),
(162, 'Salguero', 'Solorzano', 'Karla Guadalupe', '9984961033', '202000435', 'karlareyessolorzano5@gmail.com', '202000435@estudiantes.upqroo.edu.mx', '85160292851', 'Villas otoch calle 6ta privada el abedul 77516', 1, 5),
(163, 'Cosgalla', 'Canul', 'Kathia del Rosario', '9983967244', '202000395', 'cosgallacanulkathia@gmail.com', '202000395@estudiantes.upqroo.edu.mx', '56160012326', 'Reg 233 Mz 26 Lote 25 Calle 86', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_def`
--

CREATE TABLE `alumno_def` (
  `id` int(11) NOT NULL,
  `grupo` varchar(55) DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_terminacion` time DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_proceso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno_def`
--

INSERT INTO `alumno_def` (`id`, `grupo`, `cuatrimestre`, `fecha_inicio`, `hora_inicio`, `hora_terminacion`, `fecha_terminacion`, `id_periodo`, `id_proceso`) VALUES
(5, '20AM', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(6, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(7, 'Is11', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(8, 'IS-22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(9, '14', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(10, 'IS21', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(11, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(13, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(14, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(15, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(16, '28AM', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(17, '28AM', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(18, '2B', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(19, 'IBIO4A', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(22, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(23, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(24, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(25, '06B', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(26, '18AM', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(27, 'IFM-11A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(28, 'AM', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(29, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(30, '5A', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(31, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(32, 'IB11A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(33, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(34, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(35, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(36, '18AM', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(38, 'AM', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(39, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(40, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(41, 'Grupo 10', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(42, 'IF', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(43, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(44, 'LG-75 A.T.M', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(45, 'LAGE-75AM', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(46, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(47, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(48, '5 to A', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(49, 'AM', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(50, 'IS22', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(52, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(53, 'LAGE-75AM', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(54, 'LAGE-75AM', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(55, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(56, '5AM', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(57, 'LAGE', NULL, NULL, NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_academico`
--

CREATE TABLE `asesor_academico` (
  `id` int(11) NOT NULL,
  `ape_paterno_aa` varchar(40) DEFAULT NULL,
  `ape_materno_aa` varchar(40) DEFAULT NULL,
  `nombres_aa` varchar(100) DEFAULT NULL,
  `tel_lada_aa` varchar(10) DEFAULT NULL,
  `tel_num_aa` varchar(10) DEFAULT NULL,
  `email_aa` varchar(40) DEFAULT NULL,
  `id_cargo_aa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor_academico`
--

INSERT INTO `asesor_academico` (`id`, `ape_paterno_aa`, `ape_materno_aa`, `nombres_aa`, `tel_lada_aa`, `tel_num_aa`, `email_aa`, `id_cargo_aa`) VALUES
(2, 'Cuevas', 'Torres', 'Argely', NULL, '9982601722', 'argely.cuevas@upqroo.edu.mx', 2),
(3, 'Flores', 'Barrera', 'Manuel Alejandro', NULL, '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(4, 'Flores', 'Barrera', 'Manuel Alejandro', NULL, '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(6, 'Lopez', 'Cortes', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(7, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(8, 'Cuevas', 'Torres', 'Argely Guadalupe', NULL, '9982601722', 'ing.biomedica@upqroo.edu.mx', 2),
(16, 'López', 'Ancona', 'Gerardo Ismael', NULL, '9999976892', 'g.lopez@docentes.upqroo.edu.mx', 8),
(19, 'LÓPEZ', 'CORTEZ', 'ADRIANA', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(20, 'LÓPEZ', 'CORTEZ', 'ADRIANA', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(21, 'Flores', 'Barrera', 'Manuel Alejandro', NULL, '9981399555', 'mfloresupqroo@gmail.com', 2),
(22, 'Castañeda', 'Gutíerrez', 'Gerardo Emmanuel', NULL, '9982218000', 'gcastaneda@upqroo.edu.mx', 2),
(23, 'Castañeda', 'Gutíerrez', 'Gerardo Emmanuel', NULL, '9982218000', 'gcastaneda@upqroo.edu.mx', 2),
(24, 'López', 'Cortes', 'Adriana', NULL, '2411248324', 'adriana.lopez@upqroo.edu.mx', 1),
(27, 'FLORES', 'BARRERA', 'MANUEL ALEJANDRO', NULL, '9981399555', 'manuel.flores@upqroo.edu.mx', 1),
(28, 'López', 'Córtes', 'Adriana', NULL, '2411248327', 'lic.terapiafisica@upqroo.edu.mx', 1),
(33, 'Castañeda', 'Gutierrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(35, 'López', 'Cortés', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(36, 'Flores', 'Barrera', 'Manuel Alejandro', NULL, '9981399555', 'mfloresupqroo@gmail.com', 2),
(43, 'ORTEGA', 'ESPINOSA', 'VIRIDIANA ALHELI', NULL, '9981003112', 'v.ortega@docentes.upqroo.edu.mx', 1),
(44, 'Audelo', 'Garcia', 'Juan Manuel', '052', '9982831859', 'jaudelo@upqroo.edu.mx', 3),
(46, 'Ortega', 'Espinosa', 'Viridiana Alhelí', NULL, '9981003112', 'v.ortega@docentes.upqroo.edu.mx', 1),
(47, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(48, 'Audelo', 'García', 'Juan Manuel', '052', '9982831859', 'jaudelo@upqroo.edu.mx', 3),
(50, 'Audelo', 'Garcia', 'Juan Manuel', '052', '9982831859', 'jaudelo@upqroo.edu.mx', 3),
(51, 'Flores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'mfloresupqroo@gmail.com', 2),
(54, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(55, 'AUDELO', 'GARCIA', 'JUAN MANUEL', '052', '9982831859', 'jaudelo@upqroo.edu.mx', 8),
(56, 'Díaz', 'Hernández', 'Job Alí', '052', '9988429553', 'job.diaz@upqroo.edu.mx', 5),
(57, 'CARBALLO', 'PUC', 'OSCAR ARTURO', '052', '4731215230', 'o.carballo@upqroo.edu.mx', 8),
(58, 'Carballo', 'Puc', 'Oscar Arturo', '052', '4731215230', 'o.carballo@upqroo.edu.mx', 3),
(59, 'Lopez', 'Cortes', 'Adriana', '241', '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(63, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(66, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(67, 'López', 'Cortes', 'Adriana', '052', '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(68, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(69, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(71, 'López', 'Ancona', 'Gerardo Ismael', NULL, '9999976892', 'g.lopez@docentes.upqroo.edu.mx', 8),
(73, 'Gallegos', 'Basto', 'Luis Alberto', '052', '9982144143', 'lic.gestion@upqroo.edu.mx', 1),
(75, 'Gallegos', 'Basto', 'Luis Alberto', '052', '9982144143', 'lic.gestion@upqroo.edu.mx', 1),
(76, 'López', 'Ancona', 'Gerardo Ismael', '052', '9999976892', 'G.LOPEZ@docentes.upqroo.edu.mx', 3),
(80, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '052', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(81, 'Díaz', 'Hernández', 'Job Alí', '998', '9988429553', 'job.diaz@upqroo.edu.mx', 5),
(83, 'López', 'Cortés', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(85, 'AUDELO', 'GARCÍA', 'JUAN MANUEL', '052', '9982831859', 'jaudelo@upqroo.edu.mx', 8),
(87, 'Díaz', 'Hernández', 'Job Alí', NULL, '9988429553', 'job.diaz@upqroo.edu.mx', 5),
(88, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982218000', 'gcastaneda@upqroo.edu.mx', 2),
(89, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(90, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(93, 'Flores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(95, 'de la Rosa', 'López', 'Manuel', '052', '9381455690', 'manuel.delarosa@upqroo.edu.mx', 3),
(96, 'López', 'Córtes', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(97, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(98, 'López', 'Cortés', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(99, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', NULL, '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(100, 'Flores', 'Barrera', 'Manuel Alejandro', NULL, '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(101, 'Flores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(102, 'Flores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'manuel.flores@upqroo.edu.mx', 2),
(106, 'López', 'Cortés', 'Adriana', NULL, '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(109, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(111, 'FLORES', 'BARRERA', 'MANUEL ALEJANDRO', '052', '9981399555', 'mfloresupqroo@gmail.com', 2),
(112, 'Flores', 'Larios', 'Josué Alberto', NULL, '9992399603', 'j.flores@docentes.upqroo.edu.mx', 2),
(119, 'Lopez', 'Cortez', 'Adriana', '052', '2411248327', 'lic.terapiafisica@upqroo.edu.mx', 1),
(120, 'López', 'Cortez', 'Adriana', '052', '2411248327', 'lic.terapiafisica@upqroo.edu.mx', 1),
(122, 'Lopez', 'Cortez', 'Adriana', '052', '2411248327', 'lic.terapiafisica@upqroo.edu.mx', 1),
(123, 'De la Rosa', 'López', 'Manuel', NULL, '9381455690', 'manuel.delarosa@upqroo.edu.mx', 3),
(124, 'Flores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'manuel.flores@uproo.edu.mx', 2),
(125, 'Borbolla', 'Vazquez', 'Jessica', '052', '9984091464', 'jessica.borbolla@upqroo.edu.mx', 6),
(127, 'FLores', 'Barrera', 'Manuel Alejandro', '052', '9981399555', 'mfloresupqroo@gmail.com', 2),
(130, 'De la Rosa', 'López', 'Manuel', '052', '9381455690', 'manuel.delarosa@upqroo.edu.mx', 3),
(131, 'Lopez', 'Ancona', 'Gerardo Ismael', '052', '9999976892', 'G.LOPEZ@docentes.upqroo.edu.mx', 3),
(132, 'Cuevas', 'Torres', 'Argely Guadalupe', '521', '9982601722', 'argely.cuevas@upqroo.edu.mx', 2),
(133, 'DE LA ROSA', 'LOPEZ', 'MANUEL', NULL, '9381455690', 'manuel.delarosa@upqroo.edu.mx', 3),
(135, 'De la Rosa', 'López', 'Manuel', NULL, '9381455690', 'manuel.delarosa@upqroo.edu.mx', 3),
(136, 'Audelo', 'García', 'Juan Manuel', NULL, '9982402735', 'jaudelo@upqroo.edu.mx', 3),
(137, 'Cuevas', 'Torres', 'Argely', '998', '9982601722', 'ing.biomedica@upqroo.edu.mx', 2),
(138, 'De La Rosa', 'Lopez', 'Manuel', NULL, '9381455690', 'manuel.delarosa@upqroo.edu.mx', 2),
(139, 'Lopez', 'Cortes', 'Adriana', '052', '2411248327', 'adriana.lopez@upqroo.edu.mx', 1),
(140, 'Castañeda', 'Gutiérrez', 'Gerardo Emmanuel', '998', '9982831859', 'gcastaneda@upqroo.edu.mx', 2),
(141, 'Cuevas', 'Torres', 'Argely Guadalupe', NULL, '9982601722', 'ing.biomedica@upqroo.edu.mx', 2),
(142, 'Flores', 'Larios', 'Josué Alberto', '052', '9992399603', 'j.flores@docentes.upqroo.edu.mx', 2),
(143, 'Flores', 'Larios', 'Josué Alberto', NULL, '9992399603', 'j.flores@docentes.upqroo.edu.mx', 2),
(144, 'Flores', 'Larios', 'Josue Alberto', '052', '9992399603', 'josue.alberto.flores@gmail.com', 2),
(145, 'López', 'Ancona', 'Gerardo Ismael', NULL, '9999976892', 'g.lopez@docentes.upqroo.edu.mx', 2),
(146, 'Cuevas', 'Torres', 'Argely Guadalupe', '052', '9982601722', 'ing.biomedica@upqroo.edu.mx', 2),
(147, 'Díaz', 'Hernández', 'Job Alí', NULL, '9988429553', 'job.diaz@upqroo.edu.mx', 5),
(148, 'López', 'Ancona', 'Gerardo Ismael', '052', '9999976892', 'G.LOPEZ@docentes.upqroo.edu.mx', 2),
(149, 'Cuevas', 'Torres', 'Argely Guadalupe', NULL, '9982601722', 'ing.biomedica@upqroo.edu.mx', 2),
(150, 'Ortega', 'Espinosa', 'Viridiana Alheli', '521', '9981003112', 'v.ortega@docentes.upqroo.edu.mx', 3),
(151, 'ORTEGA', 'ESPINOSA', 'VIRIDIANA ALHELI', '052', '9981003112', 'v.ortega@docentes.upqroo.edu.mx', 1),
(152, 'Carballo', 'Puc', 'Oscar Arturo', '473', '4731215230', 'o.carballo@upqroo.edu.mx', 8),
(153, 'Carballo', 'Puc', 'Oscar', '473', '4731215230', 'o.carballo@upqroo.edu.mx', 3),
(154, 'Carballo', 'Puc', 'Oscar Arturo', '473', '4731215230', 'o.carballo@upqroo.edu.mx', 3),
(155, 'Carballo', 'Puc', 'Oscar Arturo', NULL, '4731215230', 'o.carballo@upqroo.edu.mx', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_empresarial`
--

CREATE TABLE `asesor_empresarial` (
  `id` int(11) NOT NULL,
  `ape_paterno_ae` varchar(40) DEFAULT NULL,
  `ape_materno_ae` varchar(40) DEFAULT NULL,
  `nombres_ae` varchar(100) DEFAULT NULL,
  `tel_lada_ae` varchar(10) DEFAULT NULL,
  `tel_num_ae` varchar(10) DEFAULT NULL,
  `email_ae` varchar(40) DEFAULT NULL,
  `id_cargo_ae` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor_empresarial`
--

INSERT INTO `asesor_empresarial` (`id`, `ape_paterno_ae`, `ape_materno_ae`, `nombres_ae`, `tel_lada_ae`, `tel_num_ae`, `email_ae`, `id_cargo_ae`) VALUES
(2, 'Carrillo', 'Diaz', 'Juan Arturo', NULL, '9982148673', 'sip58@hotmail.com', 2),
(3, 'Chan', 'Arjona', 'Roger Alberto', NULL, '9982900929', 'roger@wisphub.net', 2),
(4, 'Olmos', 'Lobato', 'Sara Alejandrina', NULL, '5519482317', 'solmos@xcaret.com', 2),
(6, 'Cueller', 'Valverde', 'Monserrat', NULL, '9988849285', 'rehabilitacion_terapias@hotmail.com', 1),
(7, 'Cahum', 'Chan', 'Emily Guadalupe', NULL, '9842920983', 'biologia.molecular@centroquimico.com.mx', 2),
(8, 'Carrillo', 'Diaz', 'Juan Arturo', NULL, '9982148673', 'sip58@hotmail.com', 2),
(16, 'Carrillo', 'Diaz', 'Juan Arturo', NULL, '9982148673', 'Sip58@hotmail.com', 8),
(19, 'CERVERA', 'TUR', 'JOSÉ ALEJANDRO', NULL, '9981670782', 'acervera-fisiatria@hotmail.com', 1),
(20, 'CERVERA', 'TUR', 'JOSÉ ALEJANDRO', NULL, '9981670782', 'acervera-fisiatria@hotmail.com', 1),
(21, 'Dajlala', 'Perez', 'Gisel', NULL, '9988970724', 'quiorti@gmail.com', 2),
(22, 'Olivares', 'Galeana', 'Bry\'an Adán', NULL, '7442217446', 'bryanolivares@irega.com.mx', 2),
(23, 'Oliveros', 'Galeana', 'Bry\'an Adan', NULL, '7442217446', 'bryanoliveros@irega.com.mx', 2),
(24, 'Martínez', 'Espinosa', 'Cristina', NULL, '9988876744', 'kynesiumucl@gmail.com', 1),
(25, 'Cervera', 'Tur', 'Jose Alejandro', NULL, '9981670782', 'acervera-fisiatria@hotmail.com', 1),
(28, 'ACOSTA', 'GONZALEZ', 'GILBERTO', NULL, '9982113008', 'gilberto.acosta@cicy.mx', 1),
(29, 'Betanzos', 'Méndez', 'Claudia Karina', NULL, '9842466007', 'heilenmedplaya@gmail.com', 1),
(34, 'Berriozabal', 'Islas', 'Christian Said', NULL, '7711985590', 'christian.berriozabal@upqroo.edu.mx', 2),
(36, 'Martínez', 'Espinosa', 'Cristina', NULL, '9988876744', 'cristinahealth@hotmail.com', 1),
(37, 'Trujano', 'Soya', 'Miguel Angel', NULL, '9981361711', 'mtrujano@savas.com.mx', 2),
(44, 'MEDINA', 'ARGAEZ', 'CECILIA', NULL, '9988685460', 'c.medina@sensiraresorts.com', 1),
(45, 'Davila', 'Madrid', 'Danielle Camargo', '052', '9983053586', 'danicamargo.imjuve@gmail.com', 3),
(47, 'García', 'Gómez', 'Lorée', NULL, '9999914490', 'loree.garcia@grupodg.net', 1),
(48, 'Cahum', 'Chan', 'Emily Guadalupe', NULL, '9842920983', 'biologia.molecular@centroquimico.com.mx', 2),
(49, 'Trevisan', 'Gonzalez', 'María del Pilar', '052', '9988899230', 'mtrevisa@vector.com.mx', 3),
(51, 'Chable', 'Ciau', 'Jazmin', '052', '9989801291', 'xk.jazminchable@gmail.com', 3),
(52, 'Chuc', 'Garcia', 'Edgar Alfredo', '052', '9988810100', 'echud@royalresorts.com', 2),
(55, 'Cahum', 'Chan', 'Emily Guadalupe', NULL, '9842920983', 'biologia.molecular@centroquimico.com.mx', 2),
(56, 'ENCALADA', 'GONZÁLEZ', 'MACARIO JESÚS', '052', '9988454058', 'mencalada@jetway.mx', 8),
(57, 'Caballero', 'Vázquez', 'José Adán', '052', '9982113008', 'docencia@cicy.mx', 5),
(58, 'TZUC', 'BALAM', 'JOSE MARIO ALBERTO', '052', '9984873136', 'biblioteca@upqroo.edu.mx', 8),
(59, 'Cocom', 'Avila', 'Jose Andres', '052', '9982028439', 'contabilidad@vgpconstrucciones.com', 3),
(60, 'Cuellar', 'Valverde', 'Monserrat', '998', '9988849285', 'rehabilitacion_terapias@hotmail.com', 1),
(64, 'Ávila', 'Muñoz', 'Susana Guadalupe', '998', '9984174461', 'susana@laboratoriolimed.com', 2),
(67, 'Nava', 'Jimenez', 'Iris Aurora', NULL, '9982831859', 'inava@upqroo.edu.mx', 2),
(68, 'López', 'Martín', 'Rubén', '052', '9982149435', 'rubenlopezfisio@hotmail.com', 1),
(69, 'Ávila', 'Muñoz', 'Susana Guadalupe', NULL, '9984174461', 'susana@laboratoriolimed.com', 2),
(70, 'Ávila', 'Muñoz', 'Susana Guadalupe', '052', '9984174461', 'susana@laboratoriolimed.com', 2),
(72, 'Carrillo', 'Diaz', 'Juan Arturo', NULL, '9982148673', 'Sip58@hotmail.com', 8),
(74, 'kumul', 'Pool', 'Suemy Maily', '052', '9981264678', 'asistenterh@beachscape.com.mx', 1),
(76, 'Balam', 'Sabido', 'Leidy Beatriz', '998', '9985528046', 'caphum951@soriana.com', 1),
(77, 'García', 'Quinto', 'Virginia', '052', '9981362989', 'vgarcia@hospitalgalenia.com', 3),
(81, 'Trejo', 'Polanco', 'Xiomara Veronica', '052', '9988452984', 'quimicaurinaria@centroquimico.com.mx', 1),
(82, 'Caballero', 'Vázquez', 'José Adán', '998', '9982113008', 'adan.caballero@cicy.mx', 5),
(84, 'López', 'Martín', 'Rubén', NULL, '9982149435', 'rubenlopezfisio@hotmail.com', 1),
(86, 'ENCALADA', 'GONZÁLEZ', 'MACARIO JESÚS', '052', '9988454058', 'mencalada@jetway.mx', 1),
(88, 'Flores', 'Trejo', 'Anahí de Jesús', NULL, '9842920983', 'alimentos2@centroquimico.com.mx', 2),
(89, 'Xool', 'Gonzalez', 'Pedro Abraham', '998', '9981653983', 'operaciones@grupolesaa.com.mx', 2),
(90, 'Xool', 'Gonzalez', 'Pedro Abraham', '998', '9981653983', 'operaciones@grupolesaa.com.mx', 2),
(91, 'Ross', 'Pérez', 'Jorge Antonio', '998', '9981527866', 'laboratoriocancun@conquimex.com.mx', 2),
(94, 'Esquivel', 'Briceño', 'Carlos Roberto', '052', '9985543503', 'ing.software@upqroo.edu.mx', 2),
(96, 'HEREDIA', 'MORALES', 'JESUS ALEJANDRO', '052', '5580717812', 'jesus.heredia@beumer.com', 2),
(97, 'Cortes', 'Tziu', 'Karla Daniela', NULL, '9981904742', 'karlac1909@gmail.com', 1),
(98, 'Tomas', 'Sánchez', 'Mario', NULL, '9842920982', 'Coordinador.huaya@centroquimico.com.mx', 1),
(99, 'Cortes', 'Tziu', 'Karla Daniela', NULL, '9981904742', 'karlac1909@gmail.com', 1),
(100, 'Cahum', 'Chan', 'Emily Guadalupe', NULL, '9842920983', 'biologia.molecular@centroquimico.com.mx', 2),
(101, 'Ontiveros', 'Aguilar', 'Ulises', NULL, '9982180712', 'uontiveros@fibrax.mx', 2),
(102, 'Esquivel', 'Briceño', 'Carlos Roberto', '052', '9982831859', 'ing.software@upqroo.edu.mx', 2),
(103, 'Esquivel', 'Briseño', 'Carlos Roberto', '052', '9982831859', 'ing.software@upqroo.edu.mx', 2),
(107, 'karla daniela', 'cortes', 'tziu', NULL, '9981904742', 'karlac1909@gmail.com', 1),
(110, 'Corona', 'Cardenas', 'Kathia Denisse', '561', '5616377643', 'kcorona@royalresorts.com', 2),
(112, 'ESTRADA', 'GUTHRIE', 'SOFIA ITZEL', '052', '9983525507', 'estradasofia15@gmail.com', 1),
(113, 'Torres', 'Hernandez', 'Ana Isabel', NULL, '9993185327', 'anth.biomed@gmail.com', 2),
(120, 'Cervera', 'Tur', 'Jose Alejandro', '052', '9981670782', 'acervera-fisiatria@hotmail.com', 5),
(121, 'Cervera', 'Tur', 'José Alejandro', '052', '9981670782', 'acervera-fisiatria@hotmail.com', 5),
(123, 'Cervera', 'Tur', 'Jose Alejandro', '052', '9981670782', 'acervera-fisiatria@hotmail.com', 5),
(124, 'Diaz', 'Góngora', 'Jorge Carlos', NULL, '9988705089', 'j.diaz@dappertechnologies.com', 2),
(125, 'Esquivel', 'Briceño', 'Carlos Roberto', '052', '9985543503', 'ing.software@upqroo.edu.mx', 3),
(126, 'Díaz', 'Hernández', 'Job Alí', '052', '9981429553', 'job.diaz@upqroo.edu.mx', 5),
(128, 'Puc', 'Torres', 'José Moisés', '052', '9983306600', 'mtorres@ozelot.it', 2),
(131, 'Ordoñez', 'López', 'Juan Carlos', '052', '9988456120', 'transportadoracolebi@gmail.com', 1),
(132, 'Sánchez', 'Fajardo', 'Ketzel', '052', '9981889268', 'ksanchez@hospitalgalenia.com', 2),
(133, 'Torres', 'Hernández', 'Ana isabel', '521', '9993185327', 'anatorres@gmail.com', 2),
(134, 'RIVERA', 'TAPIA', 'JUAN CARLOS', NULL, '9812073186', 'divisionisc@itsescarcega.edu.mx', 2),
(136, 'Ramírez', 'Pérez', 'David', NULL, '9381191266', 'david@tecnodalpha.com', 1),
(137, 'Gamboa', 'Sánchez', 'Consuelo Adriana', NULL, '9999009423', 'consuelogamboa@humble.mx', 3),
(138, 'Carrillo', 'Díaz', 'Arturo', '998', '9982148673', 'sip58@hotmail.com', 2),
(139, 'Resendiz', 'Lopez', 'Jonathan Ivan', NULL, '9981207375', 'contabilidad@shoppingmallcancun.com', 1),
(140, 'Lopez', 'Martin', 'Ruben', '052', '9982179435', 'rubenlopez@hotmail.com', 1),
(141, 'Ávila', 'Muñoz', 'Susana Guadalupe', '998', '9984174461', 'susana@laboratoriolimed.com', 2),
(142, 'Carrillo', 'Díaz', 'Juan Arturo', NULL, '9982148673', 'sip58@hotmail.com', 2),
(143, 'Carrillo', 'Diaz', 'Juan Arturo', '052', '9982148673', 'sip58@hotmaio.com', 2),
(144, 'Torres', 'Hernandez', 'Ana Isabel', NULL, '9993185327', 'anth.biomed@gmail.com', 2),
(145, 'Rivero', 'Castillo', 'Carlos', '052', '9982241187', 'rivero.c.930@gmail.com', 1),
(146, 'Solis', 'Un', 'Obed Levi', NULL, '9992580054', 'obed.solis@emedical.mx', 2),
(147, 'Carrillo', 'Díaz', 'Arturo', '052', '9982148673', 'sip58@hotmail.com', 2),
(148, 'Flores', 'Trejo', 'Anahí de Jesús', NULL, '9842920983', 'alimentos2@centroquimico.com.mx', 2),
(149, 'Solís', 'Un', 'Obed Levi', '052', '9992580054', 'obed.solis@emedical.mx', 2),
(150, 'Carrillo', 'Díaz', 'Juan Arturo', NULL, '9982754514', 'sip.58@hotmail.com', 2),
(151, 'Baena', 'García', 'Raúl', '521', '4772492728', 'rbaena@palaceresorts.com', 1),
(152, 'MEDINA', 'ARGAEZ', 'CECILIA', '052', '9988685460', 'c.medina@sensiraresorts.com', 1),
(153, 'Tzuc', 'Balam', 'José Mario Alberto', '998', '9984873136', 'biblioteca@upqroo.edu.mx', 1),
(154, 'Bermudez', 'Melendez', 'Ignacio', '998', '9981817232', 'ignacio.bermudez@upqroo.edu.mx', 5),
(155, 'Bermúdez', 'Meléndez', 'Ignacio', '998', '9981817232', 'ignacio.bermudez@upqroo.edu.mx', 5),
(156, 'Uc', 'Rojas', 'Zuemy Azel', NULL, '9988812800', 'ventanillaunicabj@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_empresarial_def`
--

CREATE TABLE `asesor_empresarial_def` (
  `id` int(11) NOT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor_empresarial_def`
--

INSERT INTO `asesor_empresarial_def` (`id`, `puesto`, `departamento`) VALUES
(5, 'DIRECTOR DEL PE ING. EN SOFTWARE', NULL),
(6, 'Coordinador de la carrera de Ingeniería en Software', NULL),
(7, 'ENCARGADO DE DESARROLLO Y DISEÑO', NULL),
(8, 'Encargado de la IT', NULL),
(9, 'LÍDER DEPTO. PROGRAMACION', NULL),
(10, 'Director del PE Ing.en Software', NULL),
(11, 'Director', NULL),
(13, 'Jefatura de Biomédica', NULL),
(14, 'Jefatura de Medicina Nuclear', NULL),
(15, 'Ing.Biomédico', NULL),
(16, 'Socio', NULL),
(17, 'Lider de proyecto', NULL),
(18, 'Residential Site O&M Manager', NULL),
(19, 'Químico de Biología Molecular', NULL),
(20, 'Jefe del departamento de Tecnologia e ingenieria biomedica', NULL),
(21, 'Proyec Manager', NULL),
(22, 'Director ing.biomedico', NULL),
(23, 'Director Administrativo', NULL),
(24, 'Ing.Biomédico', NULL),
(25, 'Supervisora de Ingeniería Biomedica', NULL),
(26, 'Jefe de laboratorio', NULL),
(27, 'Director de Recursos Humanos', NULL),
(28, 'Director Comercial', NULL),
(29, 'Jefe de biomédica', NULL),
(30, 'Coordinador de unidad', NULL),
(31, 'Director de Operaciones', NULL),
(32, 'Subgerente de Microbiología Sanitaria', NULL),
(33, 'Jefe', NULL),
(34, 'Gerente de biomédica', NULL),
(35, 'JEFE DE DIVICIÓN DE INGENIERIA EN SISTEMAS COMPUTACIONALES', NULL),
(36, 'Dir. Del P.E. Ing. en Biotecnología', NULL),
(38, 'Director General', NULL),
(39, 'Director empresarial', NULL),
(40, 'jefe de recursos humanos', NULL),
(41, 'Auxiliar de RR.HH', NULL),
(42, 'TITULAR DE LA UNIDAD DE ORIENTACION Y BIENESTAR JUVENIL DEL IMJUVE', NULL),
(43, 'Jefe del departamento de desarrollo web.', NULL),
(44, 'Contador General', NULL),
(45, 'Encargado de biblioteca', NULL),
(46, 'Quality Assurance & Training', NULL),
(47, 'Gerente de aplicaciones de negocio', NULL),
(48, 'Profesor investigador', NULL),
(49, 'Gerente de refacciones', NULL),
(50, 'INVESTIGADOR CATEDRAS', NULL),
(52, 'Director de la Unidad de Ciencias del Agua.', NULL),
(53, 'Asesor de la Lic. en Terapia física', NULL),
(54, 'Asesor de la licenciatura en Terapia Física', NULL),
(55, 'Investigador Asociado C', NULL),
(56, 'Directora', NULL),
(57, 'COORDINADORA DE CAPACITACION', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_horaria`
--

CREATE TABLE `carga_horaria` (
  `id` int(11) NOT NULL,
  `nombre_c_h` varchar(50) DEFAULT NULL,
  `estado_c_h` int(1) DEFAULT NULL,
  `observaciones_c_h` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Lic.'),
(2, 'Ing.'),
(3, 'Mtro.'),
(4, 'Arq.'),
(5, 'Dr.'),
(6, 'Dra.'),
(7, 'C.P.T.'),
(8, 'Profr'),
(9, 'Profra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Ing. Biomédica'),
(2, 'Ing. Biotecnología'),
(3, 'Ing. Financiera'),
(4, 'Ing. Software'),
(5, 'Lic. Admon Y Gestion De PyMes'),
(6, 'Lic. Gestion Empresarial'),
(7, 'Lic. Terapia Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_aceptacion`
--

CREATE TABLE `carta_aceptacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carta_aceptacion`
--

INSERT INTO `carta_aceptacion` (`id`, `nombre`, `estado`, `observaciones`, `updated_at`) VALUES
(2, 'victorcarta de aceptacion.pdf', 1, NULL, '2022-04-09 19:35:20'),
(3, 'Johann reyesF02-Carta de Aceptación.pdf', 1, NULL, NULL),
(4, 'Yerli YasuriCarta de Aceptación.pdf', 2, NULL, '2022-04-22 00:20:38'),
(10, '201700103Salomon_F02.pdf', 2, NULL, '2022-04-22 00:22:26'),
(11, '202000001doc00379220220421103952.pdf', 1, NULL, NULL),
(12, '201400084doc00381820220421111911.pdf', 1, NULL, NULL),
(13, '201700374Carta de aceptacion.pdf', 1, NULL, NULL),
(14, '201800361CartaAceptacion.pdf', 2, NULL, '2022-04-22 00:22:53'),
(15, '202000031Carta de aceptación.pdf', 1, NULL, NULL),
(16, '201700386aceptación carta.pdf', 2, NULL, '2022-04-22 00:23:08'),
(17, '201700371CARTA_DE_ACEPTACION', 1, NULL, NULL),
(18, '201800352IMG_20220421_182929.pdf', 2, NULL, '2022-04-22 00:23:32'),
(19, '202000047Carta aceptación estancia (1).pdf', 1, NULL, NULL),
(20, '202000017Carta de aceptación Esteban Kinil.pdf', 1, NULL, NULL),
(21, '202000032Carta de aceptación.pdf', 1, NULL, NULL),
(22, '202000023Carta de aceptación (2).pdf', 1, NULL, NULL),
(23, '201900037Carta aceptación F02.pdf', 1, NULL, NULL),
(24, '201900367CA.pdf', 1, NULL, NULL),
(25, '201700067Carta de aceptación.pdf', 1, NULL, NULL),
(26, '201700086Carta de Aceptación.pdf', 1, NULL, NULL),
(28, '201700382CartaDeAceptacion.pdf', 1, NULL, NULL),
(29, '201800360Carta de Aceptación.pdf', 1, NULL, NULL),
(30, 'Abner CetzalF02.pdf', 2, NULL, '2022-04-22 20:17:55'),
(32, '201800346carta aceptacion-Ana Castillo.pdf', 1, NULL, NULL),
(33, 'Moisés Soler Zetinadoc00383920220422154205.pdf', 1, NULL, NULL),
(34, '201800118Carta de aceptación..pdf', 1, NULL, NULL),
(35, '201800081f02.pdf', 1, NULL, NULL),
(38, '202000053Carta aceptación .pdf', 1, NULL, NULL),
(39, '201800031Carta aceptación (2).pdf', 1, NULL, NULL),
(40, '201800356Carta de aceptación.pdf', 1, NULL, NULL),
(41, '201800367Carta de aceptación-201800367.pdf', 1, NULL, NULL),
(42, '20190003004_CA_Lop_Rod_Ra.pdf', 1, NULL, NULL),
(43, '201800363carta de aceptación de estadía.pdf', 1, NULL, NULL),
(44, '201800349Carta de aceptación.pdf', 1, NULL, NULL),
(45, '201900052F-02_Carta_Aceptacion_Estancia.pdf', 1, NULL, NULL),
(46, '201800364Carta aceptacion - 201800364.pdf', 1, NULL, NULL),
(47, '201800236Carta de aceptación.pdf', 1, NULL, NULL),
(49, '201700361doc00385120220425093756.pdf', 1, NULL, NULL),
(50, '201700316doc00384820220425093626.pdf', 1, NULL, NULL),
(51, '201800156doc00386120220425101201.pdf', 1, NULL, NULL),
(52, '201700332carta de aceptacion estadias.pdf', 1, NULL, NULL),
(53, '201800226doc00387020220425111017.pdf', 1, NULL, NULL),
(54, 'Luis Gerardo López VidalCarta de aceptación .pdf', 1, NULL, NULL),
(55, '201700319doc00387420220425111805.pdf', 1, NULL, NULL),
(56, '201800250aceptacion (2).pdf', 1, NULL, NULL),
(57, '201800172doc00388120220425113923.pdf', 1, NULL, NULL),
(58, '201800176doc00388820220425120252.pdf', 1, NULL, NULL),
(59, '201700268carta aceptación 201700268_5.pdf', 1, NULL, NULL),
(61, 'Montse15Carta de Aceptacion mont.PDF', 1, NULL, NULL),
(62, '201800082F02.pdf', 1, NULL, NULL),
(64, '202000430Carta de aceptación.pdf', 1, NULL, NULL),
(65, '201800239doc00390320220425131154.pdf', 1, NULL, NULL),
(66, '201800050CRUZ ACEPTACION.pdf', 1, NULL, NULL),
(67, '201800073CartaAceptacion.pdf', 1, NULL, NULL),
(68, '201800317CARTA DE ACEPTACIÓN.pdf', 1, NULL, NULL),
(69, '201800259carta de aceptacion.pdf', 1, NULL, NULL),
(71, '201800299Carta de aceptación de estadías..pdf', 1, NULL, NULL),
(73, '201700092F-02_Carta_Aceptacion_Estadia.pdf', 1, NULL, NULL),
(74, '201700251Carta de aceptación.pdf', 1, NULL, NULL),
(76, '201800293102388', 1, NULL, NULL),
(77, '20180002104_Nah_Dzu_Al.pdf.pdf', 1, NULL, NULL),
(78, '201800353Carta Aceptación_Jhoana García .pdf', 1, NULL, NULL),
(79, '202000395presentacion katy 1.pdf', 1, NULL, NULL),
(80, '202000435Carta de aceptación a la empresa.pdf', 1, NULL, NULL),
(81, '202000432Carta de presentación.pdf', 1, NULL, NULL),
(82, '201900258carta aceptación.pdf', 1, NULL, NULL),
(84, '201700044Carta de aceptación.pdf', 1, NULL, NULL),
(85, '201800044Carta de Aceptación.pdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_liberacion`
--

CREATE TABLE `carta_liberacion` (
  `id` int(11) NOT NULL,
  `nombre_c_l` varchar(50) DEFAULT NULL,
  `estado_c_l` int(1) DEFAULT NULL,
  `observaciones_c_l` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carta_liberacion`
--

INSERT INTO `carta_liberacion` (`id`, `nombre_c_l`, `estado_c_l`, `observaciones_c_l`, `updated_at`) VALUES
(2, 'Johann reyesF-05_Carta_de_Liberacion.pdf', 1, NULL, NULL),
(3, '201700103doc00379320220421104011.pdf', 1, NULL, NULL),
(4, '202000001doc00379520220421104058.pdf', 1, NULL, NULL),
(5, '201400084carta de terminacion.pdf', 1, NULL, NULL),
(6, '201700374carta de liberacion.pdf', 1, NULL, NULL),
(7, '201800361CartaLiberacion.pdf', 1, NULL, NULL),
(8, '202000031Carta de liberación.pdf', 1, NULL, NULL),
(9, '201700371CARTA_DE_LIBERACION', 1, NULL, NULL),
(10, '201800352IMG_20220421_182708.pdf', 1, NULL, NULL),
(11, '202000017Carta de liberación Esteban Kinil.pdf', 1, NULL, NULL),
(12, '202000032Carta de liberación.pdf', 1, NULL, NULL),
(13, '202000023Carta de liberación.pdf', 1, NULL, NULL),
(14, '202000047CARTA DE LIBERACIÓN.pdf', 1, NULL, NULL),
(15, '201900037Carta de liberación F05.pdf', 1, NULL, NULL),
(16, '201900367CL.pdf', 1, NULL, NULL),
(17, '201700067Carta de Liberación.pdf', 1, NULL, NULL),
(18, '201700386CamScanner 04-22-2022 10.40.pdf', 1, NULL, NULL),
(19, '201800360Carta de liberación.pdf', 1, NULL, NULL),
(20, '201700382Carta_De_liberacion.pdf', 1, NULL, NULL),
(21, 'Abner CetzalF05.pdf', 1, NULL, NULL),
(22, 'Abner CetzalF05.pdf', 2, NULL, '2022-04-22 20:22:16'),
(23, '201700332CamScanner 04-22-2022 13.21.pdf', 1, NULL, NULL),
(24, 'Moisés Soler Zetinadoc00384120220422154237.pdf', 1, NULL, NULL),
(25, '201800118Carta de liberación estadía..pdf', 1, NULL, NULL),
(26, '201800081f05.pdf', 1, NULL, NULL),
(27, '201800356Carta de liberación.pdf', 1, NULL, NULL),
(28, '201800367Carta de liberación-201800367.pdf', 1, NULL, NULL),
(29, '201800031CARTA DE LIBERACIÓN DE ESTADÍA.pdf', 1, NULL, NULL),
(30, '201700086Carta de Liberación.pdf', 1, NULL, NULL),
(31, '20190003006_CL_Lop_Rod_Ra.pdf', 1, NULL, NULL),
(32, '201800363Carta de liberación.pdf', 1, NULL, NULL),
(34, '201800349Carta de liberación.pdf', 1, NULL, NULL),
(35, '201900052F-05_Carta_de_liberacion_Estancia.pdf', 1, NULL, NULL),
(36, '201800346Carta de liberación - Ana Castillo.pdf', 1, NULL, NULL),
(38, '201800364Carta de liberación - 201800364.pdf', 1, NULL, NULL),
(39, '201800236Carta de liberación.pdf', 1, NULL, NULL),
(42, '201700316doc00385920220425101032.pdf', 1, NULL, NULL),
(43, '201700361doc00386020220425101049 (1).pdf', 1, NULL, NULL),
(44, 'victorcarta de finalizacion.pdf', 1, NULL, NULL),
(45, '201800156doc00386220220425101217.pdf', 1, NULL, NULL),
(46, '201800226doc00386820220425110947.pdf', 1, NULL, NULL),
(47, 'Luis Gerardo López VidalCarta de liberación .pdf', 1, NULL, NULL),
(48, '201700319doc00387620220425111845.pdf', 1, NULL, NULL),
(49, '201800250doc00387920220425112217.pdf', 1, NULL, NULL),
(50, '201800172doc00388320220425114006.pdf', 1, NULL, NULL),
(51, '201800120LIBERACION F-05 VICTOR PEREZ SARABIA.pdf', 1, NULL, NULL),
(52, '201800176doc00388820220425120252.pdf', 1, NULL, NULL),
(53, '201700268carta liberación 201700268_4.pdf', 1, NULL, NULL),
(54, 'Montse15Firma hoja liberación_OscarCarballo.PDF', 1, NULL, NULL),
(55, '201800082F05.pdf', 1, NULL, NULL),
(56, '202000430Carta de liberacion de estancia 1..pdf', 1, NULL, NULL),
(57, '201800239doc00390220220425131146.pdf', 1, NULL, NULL),
(58, '201800050CRUZ LIBERACIOn.pdf', 1, NULL, NULL),
(59, '201800073CartaLiberacion.pdf', 1, NULL, NULL),
(60, '201800317CARTA DE LIBERACION.pdf', 1, NULL, NULL),
(61, '201800259carta de liberacion.pdf', 1, NULL, NULL),
(62, '201700092F-05_Carta_de_liberacion_Estadia.pdf', 1, NULL, NULL),
(63, '201800293CARTA DE LIBERACION.pdf', 1, NULL, NULL),
(64, '202000053Carta liberación.pdf', 1, NULL, NULL),
(65, '201700095PALOMO ECHAVARRIA LIBERACION.pdf', 1, NULL, NULL),
(66, '201700251Carta de liberación.pdf', 1, NULL, NULL),
(67, '201800299Carta de liberación de estadías .pdf', 1, NULL, NULL),
(68, '201800353Libreracion_Jhoana García .pdf', 1, NULL, NULL),
(69, '202000395liberacion katy 1.pdf', 1, NULL, NULL),
(70, '202000435Carta de liberación de Estancias K.pdf', 1, NULL, NULL),
(72, '202000432Carta de liberación de Estancias A.pdf', 1, NULL, NULL),
(73, '201900258carta liberación estancia.pdf', 1, NULL, NULL),
(74, '201700044Carta de liberación.pdf', 1, NULL, NULL),
(77, '201800044Carta de liberación .pdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_presentacion`
--

CREATE TABLE `carta_presentacion` (
  `id` int(11) NOT NULL,
  `nombre_c_p` varchar(50) DEFAULT NULL,
  `estado_c_p` int(1) DEFAULT NULL,
  `observaciones_c_p` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_responsiva`
--

CREATE TABLE `carta_responsiva` (
  `id` int(11) NOT NULL,
  `nombre_c_r` varchar(50) DEFAULT NULL,
  `estado_c_r` int(1) DEFAULT NULL,
  `observaciones_c_r` varchar(255) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cedula_registro`
--

CREATE TABLE `cedula_registro` (
  `id` int(11) NOT NULL,
  `nombre_c_r` varchar(50) DEFAULT NULL,
  `estado_c_r` int(1) DEFAULT NULL,
  `observaciones_c_r` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cedula_registro`
--

INSERT INTO `cedula_registro` (`id`, `nombre_c_r`, `estado_c_r`, `observaciones_c_r`, `updated_at`) VALUES
(15, '201800555F-03_Cedula_Registro_Estadia (1).pdf', 2, NULL, '2022-03-24 02:50:21'),
(18, 'victorcedula de registro.pdf', 1, 'No puedo ver tu pdf', '2022-04-09 19:35:23'),
(20, 'Yerli YasuriCédula de Registro.pdf', 1, NULL, NULL),
(22, 'Abner CetzalABNER CEDULA_signed.pdf', 2, NULL, '2022-04-22 20:25:21'),
(23, '201700092F-03_Cedula_Registro_Estadia.pdf', 1, NULL, NULL),
(24, 'Johann reyesF-03_Cedula_Registro_Estadia.pdf', 1, NULL, NULL),
(25, '201700103SALOMON REGISTRO.pdf', 1, NULL, NULL),
(26, '202000001doc00379120220421103728.pdf', 1, NULL, NULL),
(27, '201400084cedula de registro.pdf', 1, NULL, NULL),
(28, '201700374cedula de registro.pdf', 1, NULL, NULL),
(29, '201800361CedulaRegistro.pdf', 1, NULL, NULL),
(31, '202000031Cédula de registro.pdf', 1, NULL, NULL),
(32, '201800352IMG_20220421_182951 (1).pdf', 1, NULL, NULL),
(33, '202000047Cedula Sayma_signed.pdf', 1, NULL, NULL),
(34, '202000017Cedula de registro Esteban Kinil .pdf', 1, NULL, NULL),
(35, '202000023Cedula de registro.pdf', 1, NULL, NULL),
(36, '201900037Cédula de registro F03.pdf', 1, NULL, NULL),
(37, '201900367CR.pdf', 1, NULL, NULL),
(38, '202000032Cédula de registro.pdf', 1, NULL, NULL),
(39, '201700371CEDULA_DE_REGISTRO.pdf', 1, NULL, NULL),
(40, '201700067Cédula de Registro.pdf', 1, NULL, NULL),
(41, '201700386cedula.pdf', 1, NULL, NULL),
(42, '201800360Cédula de registro.pdf', 1, NULL, NULL),
(43, '201700382ceduladeregistro.pdf', 1, NULL, NULL),
(44, '201700332CamScanner 04-22-2022 13.24.pdf', 1, NULL, NULL),
(45, 'Moisés Soler Zetinadoc00384220220422154250.pdf', 1, NULL, NULL),
(46, '201800118Cedula de registro de estadía..pdf', 1, NULL, NULL),
(47, '201800081f03.pdf', 1, NULL, NULL),
(48, '201800346Cedula de Registro-Ana Castillo.pdf', 1, NULL, NULL),
(49, '202000053Cédula de registro.pdf', 1, NULL, NULL),
(50, '201800031CEDULA DE REGISTRO.pdf', 1, NULL, NULL),
(52, '201800356Cédula de registro 1.pdf', 1, NULL, NULL),
(53, '201800367Cédula de registro-201800367.pdf', 1, NULL, NULL),
(54, '20190003002_CR_Lop_Rod_Ra.pdf', 1, NULL, NULL),
(55, '201800363Cedula de registro de estadía.pdf', 1, NULL, NULL),
(57, '201900052F-03_Cedula_Registro_Estancia.pdf', 1, NULL, NULL),
(59, '201800364Cédula registro - 201800364.pdf', 1, NULL, NULL),
(60, '201800364Cédula registro - 201800364.pdf', 1, NULL, NULL),
(61, '201800349cedula 2.pdf', 1, NULL, NULL),
(62, '201800236Cedula de registro.pdf', 1, NULL, NULL),
(64, '201700361doc00385220220425093822.pdf', 1, NULL, NULL),
(65, '201700316doc00384920220425093650.pdf', 1, NULL, NULL),
(66, '201800226doc00386920220425111000.pdf', 1, NULL, NULL),
(67, 'Luis Gerardo López VidalCédula de registro .pdf', 1, NULL, NULL),
(68, '201800156doc00387120220425111544.pdf', 1, NULL, NULL),
(69, '201800250doc00387720220425112019.pdf', 1, NULL, NULL),
(70, '201700319doc00388020220425112336.pdf', 1, NULL, NULL),
(71, '201800172F-03_Cedula_Registro_Estadia.pdf', 1, NULL, NULL),
(72, '201800176doc00388620220425120222.pdf', 1, NULL, NULL),
(73, '201700268cédula de registro 201700268_3.pdf', 1, NULL, NULL),
(74, 'Montse15CÉDULA DE REGISTRO.pdf', 1, NULL, NULL),
(75, '201800082F03.pdf', 1, NULL, NULL),
(76, '201800239doc00390120220425131138.pdf', 1, NULL, NULL),
(77, '201800050CRUZ REGISTRO.pdf', 1, NULL, NULL),
(78, '202000430Cedula de registro de estancia..pdf', 1, NULL, NULL),
(79, '201800073CedulaRegistro.pdf', 1, NULL, NULL),
(80, '201800317cédula de registro.pdf', 1, NULL, NULL),
(81, '201800259cedula de registro.pdf', 1, NULL, NULL),
(83, '201800293cédula de registro.pdf', 1, NULL, NULL),
(84, '201700095PALOMO ECHAVARRIA REGISTRO.pdf', 1, NULL, NULL),
(85, '201700251cédula de registro de estadía.pdf', 1, NULL, NULL),
(86, '201800299cédula de registro.pdf', 1, NULL, NULL),
(87, '20180002102_Nah_Dzu_Al.pdf.pdf', 1, NULL, NULL),
(88, '201800353Cédula De Registro_Jhoana García .pdf', 1, NULL, NULL),
(89, '202000435F-03_Cedula_Registro_Estancia_Karla.pdf', 1, NULL, NULL),
(90, '202000432Cédula de registro.pdf', 1, NULL, NULL),
(91, '201700086Cédula de Registro.pdf', 1, NULL, NULL),
(93, '201900258cédula de registro _firmada.pdf', 1, NULL, NULL),
(94, '201700044Cédula de registro.pdf', 1, NULL, NULL),
(95, '201800044Cédula de registro.pdf', 1, NULL, NULL),
(96, '202000395cedula de registro katy.pdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancia_derecho`
--

CREATE TABLE `constancia_derecho` (
  `id` int(11) NOT NULL,
  `nombre_c_d` varchar(50) DEFAULT NULL,
  `estado_c_d` int(1) DEFAULT NULL,
  `observaciones_c_d` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_proyecto`
--

CREATE TABLE `definicion_proyecto` (
  `id` int(11) NOT NULL,
  `nombre_d_p` varchar(50) DEFAULT NULL,
  `estado_d_p` int(1) DEFAULT NULL,
  `observaciones_d_p` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `definicion_proyecto`
--

INSERT INTO `definicion_proyecto` (`id`, `nombre_d_p`, `estado_d_p`, `observaciones_d_p`, `updated_at`) VALUES
(4, '201700103SALOMON PROYECTO.pdf', 1, NULL, NULL),
(5, '201800361DefiniciónProyectó.pdf', 1, NULL, NULL),
(6, '201700371DEFINICIÓN_DE_PROYECTO.pdf', 1, NULL, NULL),
(7, '201700386definición de proyecto.pdf', 1, NULL, NULL),
(8, '201700382definicióndeproyecto.pdf', 1, NULL, NULL),
(9, '201800360Definición de Proyecto.pdf', 1, NULL, NULL),
(10, 'Abner CetzalF04.pdf', 2, NULL, '2022-04-22 20:20:49'),
(11, 'Moisés Soler Zetinadoc00384020220422154221.pdf', 1, NULL, NULL),
(12, '201900037Definición de proyecto F04.pdf', 1, NULL, NULL),
(13, '201800118Definición de proyecto..pdf', 1, NULL, NULL),
(14, '201800081f04.pdf', 1, NULL, NULL),
(15, '201800346Definicion de proyecto-Ana Castillo.pdf', 1, NULL, NULL),
(16, '201700067Definición de Proyecto.pdf', 1, NULL, NULL),
(17, '201800367Definición de proyecto-201800367.pdf', 1, NULL, NULL),
(19, '201800031Definición de proyecto (2).pdf', 1, NULL, NULL),
(20, '201800352IMG_20220421_182652.pdf', 1, NULL, NULL),
(21, '201800356Definición de proyecto.pdf', 1, NULL, NULL),
(22, '201700086Definición de Proyecto.pdf', 1, NULL, NULL),
(24, '20190003003_DP_Lop_Rod_Ra.pdf', 1, NULL, NULL),
(25, '201800363Definición de proyecto de estadía.pdf', 1, NULL, NULL),
(27, '201800364Definicion de proyecto - 201800364.pdf', 1, NULL, NULL),
(28, '201800349Definición del proyecto.pdf', 1, NULL, NULL),
(29, 'victorF-04_Definicion_de_Proyecto_Estancia.pdf', 1, NULL, NULL),
(30, '201800156F-04_Definicion_de_Proyecto_Estancia.pdf', 1, NULL, NULL),
(32, 'Montse15ESTANCIA_FORMATO_DE_PROYECTO  (1).PDF', 1, NULL, NULL),
(33, '201800082F04.pdf', 1, NULL, NULL),
(34, '202000430Definición del proyecto.pdf', 1, NULL, NULL),
(36, '201800050CRUZ PROYECTO.pdf', 1, NULL, NULL),
(37, '201800073doc00390720220425160144.pdf', 1, NULL, NULL),
(38, '201700092F-04_Definicion_de_Proyecto_Estadia.pdf', 1, NULL, NULL),
(39, '202000053Definición de proyecto.pdf', 1, NULL, NULL),
(40, '201700095PALOMO ECHAVARRIA PROYECTO.pdf', 1, NULL, NULL),
(41, '20180002103_Nah_Dzu_Al.pdf.pdf', 1, NULL, NULL),
(42, '20180002103_Nah_Dzu_Al.pdf.pdf', 1, NULL, NULL),
(43, '201800353Definición De Proyecto_Jhoana García .pdf', 1, NULL, NULL),
(44, '202000432Definición del proyecto (1).pdf', 1, NULL, NULL),
(45, '202000435Definición del proyecto..pdf', 1, NULL, NULL),
(47, '201900258definición de proyecto _firmada.pdf', 1, NULL, NULL),
(48, '201700044Definición de proyecto.pdf', 1, NULL, NULL),
(49, '201800044CAMARENA CERVANTES PROYECTO.pdf', 1, NULL, NULL),
(50, '202000395definicon proyecto katy.pdf', 1, NULL, NULL),
(51, '201800176DEFINICION DEL PROYECTO.pdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_def`
--

CREATE TABLE `detalle_def` (
  `id` int(11) NOT NULL,
  `actividades` text DEFAULT NULL,
  `resultados` text DEFAULT NULL,
  `evidencia` text DEFAULT NULL,
  `instrumentos` text DEFAULT NULL,
  `asignaturas` text DEFAULT NULL,
  `topicos` text DEFAULT NULL,
  `estrategias` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_def`
--

INSERT INTO `detalle_def` (`id`, `actividades`, `resultados`, `evidencia`, `instrumentos`, `asignaturas`, `topicos`, `estrategias`) VALUES
(5, 'DESARROLLO WEB, COLABORACION REMOTA', 'MEJORA DE CONOCIMIENTO RESPECTO AL DESARROLLO WEB', 'FUNCIONALIDADES IMPLEMENTADAS EN LA PLATAFORMA', 'JUNTA DE VALIDACION', 'PROGRAMACION WEB, ESTRUCTURA DE DATOS, PROGRAMACION CLIENTE-SERVIDOR,\r\nSEGURIDAD DE LA INFORMACION', 'My SQL, PHP, PROGRAMACION WEB,\r\nBOOTSTRAP,AJAX, CSS, JAVASCRIPT, JSON', 'CURSOS, DOCUMENTACION OFICIAL, FOROS'),
(6, 'Desarrollo y diseño de aplicaciones de escritorio, uso del lenguaje Python', 'Aprendizaje acerca del uso de nuevos lenguajes de programación para el desarrollo de aplicaiones de escritorio', 'Capturas de pantalla', 'Reuniones semanales', 'Base de Datos, programacion para aplicaciones de escritorio, estructura de datos, seguridad de la informacion, diseño de interfaces.', 'SQL, Python, GitHub.', 'Cursos online, documentación ofical, videotutoriales de youtube, foros web.'),
(7, 'Desarrollo de procedimientos almacenados en MySql ,creación de una API ,anejo de solicitudes de clientes', 'Desarrollar Conocimientos en base de datos relacionados ,framewords, C# y Visual Studio', 'capturas de pantalla y mockups', 'Junta de evaluación de trabajo en base a objetivos', 'base de datos. Programación  de objetos\r\ninterfaces graficas\"', 'C# , MySql', 'Video tutoriales ,foros ,ejemplos en Internet ,cursos en Linea'),
(8, 'Investigación de nuevas tecnologías y herramientas para el trabajo en conjunto de las flutter', 'Desarrollar una aplicación usando herramientas multiplataforma, con la ayuda de flutter.', 'Documentación', 'Pruebas manuales donde gente externa hace pruebas', 'Poo, cliente servidor, arquitectura de software, moviles, ing. requerimientos y asistida.', 'JAVA, Flutter, DART, React native, gitlab, visual studio', 'Cursos udemy, videotutoriales para trabajo de programas en conjunto y investigación.'),
(9, 'Desarrollo de procedimientos\r\nalmacenados en SQL, creación de una API\r\ny manejo de solicitudes de cliente', 'Desarrollar conocimientos en bases de\r\ndatos relacionales, frameworks node js y\r\nangula', 'Presentación de avances y\r\ndocumentación', 'Juntas de evaluación\r\nde trabajo en base a\r\nobjetivos', 'Programación web, base de datos, programación\r\ncliente-servidor', 'CSS, HTML, JavaScript', 'Videos tutoriales, foros, ejemplos en\r\ninternet, cursos en línea.'),
(10, 'Aplicar lo aprendido de\r\n programación web , diseño de\r\n interfaces para el desarrollo del\r\n frontend de un sitio web', 'Desarrollar conocimiento en \r\nframeworks, plugins y librerías', 'Página web, mockups', 'Juntas de avances hechos en la semana', 'Programación web, Diseño de\r\n Interfaces,Programacion cliente servidor,calidad\r\n de software, pruebas de software', 'Programación web, Diseño de Interfaces,\r\n Responsividad, Mejora de experiencia de usuario, Plugins, librería, frameworks, Modelo\r\n Vista controlador, uso DomPDF', 'Videotutoriales, libros, manuales, foros'),
(11, 'Investigación y recopilación de información para la realización de un sistema integral funcional.', 'Desarrollo y procesos para la realización de prototipos con integración de tecnologías.', 'Memorias', 'Rúbrica de Calificación', 'Electrónica y bases de datos, Ingeniería Clínica.', 'Correcto funcionamientos de sistema electrónico y bases de datos.', 'Desarrollo de sistema integral para la motorización del Área de Imagenología.'),
(13, 'Administración Hospitalaria-Estándares de calidad-Inventario de equipo médico-Órdenes de servicio-Reportes de mantenimiento-Certificaciones', 'Analisis estadistico de los tiempos de \r\nrespuesta de los mantenimientos haciendo uso de un llenado de ordenes de servicio y reportes de mantenimiento con base al inventario de equipo médico', 'Memoria de estadía profesional', 'Rúbrica de calificación', 'Programación Orientada a Objetos, Administración Hospitalaria, Ingeniería Clínica, Mantenimiento de equipos médicos, Telemedicina', 'Programación en visual studio, Estándares de \r\ncalidad, Procesos de gestión, Ordenes de servicios y reportes de mantenimiento, Creación y redacción de proyecto', 'Certificaciones con las que cuenta el Hospital Galenia.'),
(14, 'Administración Hospitalaria-Estandares de calidad-Inventario de equipo médico-Órdenes de servicio-Reportes de mantenimiento-Certificaciones.', 'Analisis estadistico de los tiempos de respuesta de los mantenimientos haciendo uso de un llenado de ordenes de servicio y reportes de mantenimiento con base al inventario de equipo médico.', 'Memoria de estadía profesional.', 'Rúbrica de calificación.', 'Programación Orientada a Objetos, Administración Hospitalaria, Ingeniería Clínica, Mantenimiento de equipos médicos, Telemedicina.', 'Programación en visual studio, Estándares de calidad, Procesos de gestión, Ordenes de servicios y reportes de mantenimiento, Creación y redacción de proyecto.', 'Certificaciones con las que cuenta el Hospital Galenia.'),
(15, 'Reportes, recopilación de información, investigaciones, lecturas y apuntes relevantes, MP, MC, rutinas de inspección', 'Lineamientos y politicas de proceso del deparatamento de ingeniería biomédica', 'Memoria de Estadía', 'Encuesta de empleadores', 'Seguridad y Normas, Ing. Clinica, Elctronica.', 'Normas, estandares y lineamientos para la realización del manual de procedimientos.', 'Reporte de actividades, investigación y lectura sobre los parametros que debe contener el manual.'),
(16, 'Análisis de datos y diseño de\r\ninterfaces.', 'Experimentar el mundo\r\nempresarial, aprender a\r\ntrabajar en equipo.', 'Código, Página Web.', 'Requerimientos y \r\nrubrica', 'Multimedia, Mantenimiento de\r\nSoftware, Inglés Vlll', 'Desarrollo Web, Diagramas de BD,\r\nRelación Cliente-Servidor', 'Cursos para utilización de Angular.\r\nCursos de Base de Datos.'),
(17, 'Dar mantenimiento a sistemas existentes en tanto a diseño como funcionalidad', 'Al termino de sus estancias el estudiante habrá desarrollado sus habilidades para trabajar en equipo, implementar soluciones a fallas en sistemas, además de desarrollar la comunicación asertiva, y lógica de programación.', 'Captura de pantalla de diagrama UML, \r\nAnálisis de requerimientos', 'Plataforma Trello', 'Se pretende que el estudiante haga uso de \r\nconocimientos en POO, calidad del software, \r\nprogramación cliente/servidor, programación \r\nweb, estructura de datos, etc.', 'Aplicación de metodologías de desarrollo scrum, obtención de requerimientos de usuario, maquetado y funcionalidades de sistemas, reingeniería del software', 'Medición de avances en tareas asignadas, \r\nrepaso por tecnologías empleadas, uso de \r\ntecnologías vigentes'),
(18, 'Desarrollo e Implementación', 'Creación y Configuración', 'Manuales de Operación', 'Cursos', 'Cliente Servidor', 'Mantenimiento y Servicios', 'Resolución'),
(19, 'Elaboración del apartado sobre la historia, taxonomia, estructura y zoonosis del SARS- CoV- 2', 'Establecer los antecedentes sobre el SARS- CoV- 2 para su integración en el manual de extracción de', 'Bitácora y reporte escrito', 'Guía de observaciones', 'Fundamentos de microbiología', 'Virus, categorías taxonómicas y clasificación C. Baltimore', 'Aprendizaje basado en el manejo de base de datos bibliográficos'),
(20, 'Mantenimientos preventivos, recorridos, gestion de equipos medicos dentro del hospital', 'Saber realizar mantenimientos preventivos, saber la gestion de los equipos medicos dentro del hospital', 'Reporte en Word Anexo fotos', 'Reporte de Estancias II', 'Mantenimiento de Equipos Medicos, Electronica analoga y digital', 'Ingeniería Clínica', 'Recorridos, Mantenimientos y visitas a otras clínicas'),
(21, 'Aplicar lo aprendido de la programación web,diseño de interfaces para el desarrollo del frontend y backend', 'Desarrollar conocimiento en Django,python,Api rest,web service', 'Sitio web', 'Juntas de avances hechos en la semana', 'Base de datos,Poo,Programación web,Diseño de interfaces,Estructura de datos', 'Django,python,programación web', 'Videos,Libros,Documentación,Foros'),
(22, 'Mantenimiento y capacitación', 'gestión clínica', 'Reporte y fotografia', 'Evaluaciones y diapositivas', 'ING.clinica,fisiología,seguridad y normas, introducción biomedica', 'Desarrollo de capacitaciones', 'Reporte de actividades'),
(23, 'Investigacion sobre los equipos', 'Identificacion de cada equipo por manual', 'Carpetado y archivado para su prolongacion', 'Reporte final de actividades', 'Ingeniería clínica \r\nInstrumentación biomédica \r\nSeguridad y normas', 'Investigación, inventariado, manejo de alta y baja de equipo \r\nConocimiento sobre equipos básicos para medición y normas especialidad', 'Aprendizaje basado en proyectos e instrumentación'),
(24, 'Reportes, recopilación de información, investigaciones, lecturas y apuntes relevantes, MP, MC, rutinas de inspección', 'Lineamientos y politicas de proceso del deparatamento de ingeniería biomédica', 'Memoria de Estadía', 'Encuesta de empleadores', 'Seguridad y Normas, Ing. Clinica, Elctronica.', 'Normas, estandares y lineamientos para la realización del manual de procedimientos.', 'Reporte de actividades, investigación y lectura sobre los parametros que debe contener el manual.'),
(25, 'Recorrido, mtto a equipo medico, inventario, realización de formatos', 'Aprendí a hacer recorrido, check list, mtto. a ciertos equipos médicos, y todo el procedimiento de ingeniería clínica.', 'Reporte de actividades con evidencia fotográfica', 'Rubrica', 'Ingeniería clínica, principios de electrónica, suministros de energía eléctrica,mtto equipo medico ,administración hospitalaria', 'Mantenimiento a equipo médico, administración hospitalaria e ingeniería clínica', 'Capacitación primera semana, recorrido por el hospital, mantenimiento a equipo, investigación'),
(26, '•Consulta de la normatividad vigente\r\n•Investiga las técnicas aplicadas en la detección de Salmonella spp. en alimentos\r\n•Aplica técnicas de enriquecimiento de la muestra para su incubación\r\n•Aplica técnicas analíticas de confirmación para Salmonella', '•Conocer el fundamento del proceso analítico\r\n•Conocer las técnicas aplicables en la detección de Salmonella spp. en alimentos\r\n•Realizar procesos analíticos siguiendo protocolos estandarizados\r\n•Realizar pruebas de confirmación bioquímica', '•Resúmen de la norma \r\n•Investigación documental \r\n•Bitácora de laboratorio\r\n•Bitácora de laboratorio\r\n•Bitácora de laboratorio', '•Rúbrica de evaluación\r\n•Rúbrica de evaluación\r\n•Rubrica de revisión de bitácora de laboratorio\r\n•Rubrica de revisión de bitácora de laboratorio\r\n•Rubrica de revisión de bitácora de laboratorio', '•Química analítica\r\n•Microbiología\r\n•Bioquímica', '•Concentraciones del medio \r\n•Observación de colonias bacterianas\r\n•Identificación de bacterias por medio de la\r\n degradación de azúcares', '•Prácticas de laboratorio\r\n•Instrucción programada y aprendizaje\r\n basado en problema\r\n•Mapa mental'),
(27, 'Datos del trabajador, manejo del sistema TISA y aplicación de retención diaria del ISR.', 'Elaboración de los cálculos de las cuotas obrero IMSS, timbrado de nóminas y cálculo correcto del ISR.', 'Hoja de Excel donde se muestren los cálculos, fotografías del manejo del software administrativo TISA y  hoja de Excel de estimaciones de obra.', 'Primera revisión, segunda revisión y trabajo final.', 'Derecho Financiero, Control de Riesgos e Innovación y Creatividad.', 'Marco jurídico para elaborar los cálculos del ISR y curso de acción para la aplicación del programa TISA.', 'Establecer los porcentajes para el cálculo y control de actividades del software administrativo.'),
(28, 'Lectura de manuales, mantenimientos preventivos, capacitaciones, check list.', 'Uso y manejo de analizadores y  simuladores de pacientes, diagnóstico de equipo médico, actividades dentro del DIB.', 'Memoria', 'Rúbrica', 'Electrónica analógica, electrónica y digital; mantenimiento de equipos médicos; sistemas de gestión en salud; instrumentación biomédica; suministro de energía eléctrica; mediciones eléctricas; seguridad y normas.', 'Gestión de equipo médico; mantenimiento preventivo y correctivo; normas de seguridad y calidad eléctrica; normas de bioseguridad; aplicación de señales biomédicas; circuitos eléctricos y fuentes eléctricas.', 'Capacitación; lectura de manuales de equipos médicos e instrumentación biomédica; uso y aplicación de instrumentos biomédicos; creación de material didáctico, visual y auditivo.'),
(29, 'Investigación', 'Gestión y registro eficaz de los activos de una institución de salud.', 'Pruebas fotográficas y sistema de inventario de uso exclusivos para el departamento de ingeniería biomédica.', 'Exposición de avances, implementación del sistema.', 'Ingeniería clínica, base de datos, bioinstrumentación, administración hospitalaria, herramientas ofimáticas, mantenimiento de equipos médicos.', 'Manejo de software, inventario, accesorios, refacciones, consumibles, gestión.', 'Conteos, anotaciones, fotografías, consultas, diapositivas.'),
(30, 'Determinar el tipo de muestras\r\nManejo de recolección y separación de muestras 		\r\nDiferenciar los diferentes datos en los etiquetados  de muestras 		\r\nVelocidad en rpm y tiempo de centrifugación de tubos		\r\nDuración y tiempo de almacenamiento', 'Identificar y preparar los materiales de equipo   			\r\nMedir y evaluar los diferentes parámetros de velocidad\r\nRegistrar los datos en etiquetados 		\r\nEstablecer los tiempo de almacenamiento 	\r\nIdentificar cualés son los tipos de muestras de orina', 'Investigación de  los tipos recolección \r\nInvestigación  en centrifugación en tubos	\r\nPráctica de separación de muestras 		\r\nReporte de duración  en refrigeración de muestras\r\nInvestigación sobre los datos de identificación que llevan las etiquetas', 'Rúbrica  de tipos de recolección \r\nLista de contejo de la investigación en centrifugación \r\nGuía de observación de práctica \r\nLista de contejo del reporte de duración de refrigeración\r\nRúbrica sobre investigación sobre los datos de identificación', 'Análisis de bioproductos 			\r\nFundamentos de microbiología			\r\nMicrobiología avanzada			\r\nBiocatálisis', 'Recolección de muestras 				\r\nDatos de etiquetados de muestras 				\r\nPreparación de materiales y equipo de recolección 				\r\nUso de reactivos para el almacenamiento de los análisis clínicos', 'Prácticas de laboratorio'),
(31, 'Manejo del lenguaje Angular con Firebase', 'Conexión de firebase, Saber herramientas de Angular', 'Reporte de Evaluación', 'Consultas y Pruebas de la Caja Blanca', 'POO, Programación Concurrente, Base de Datos', 'Autenticación base datos, PHP, JavaScript', 'Curos Udemy, videotutoriales para trabajo de programas en conjunto, investigación y asesoramiento.'),
(32, 'Revisión bibliográfica de la guía para evaluar el desempeño de medios de cultivo', 'Determinar el desempeño de medios de cultivo', 'Investigación de guía para evaluar medios de cultivo', 'Bitácora', 'Química analítica', 'Estequiometria para la preparación de medios de cultivo', 'Preparación de medios de cultivo'),
(33, 'Investigación', 'Gestión y registro eficaz de activos en la institución', 'Pruebas fotográficas, sistema de inventario de uso exclusivo por el departamento de ingeniería biomédica', 'Exposición de avances.', 'Ingeniería clínica, base de datos, bioinstrumentación, administración hospitalaria, herramientas ofimáticas, mantenimiento de equipos médicos', 'Manejo de software, inventarios, accesorios, refacciones, consumibles, gestión', 'Conteo, anotaciones, fotografías, consultas, dispositivas.'),
(34, 'Investigación, desarrollo de planes de mantenimiento y documentación.', 'Correcto uso y cuidado de los ventiladores mecánicos', 'Memoria de estadía profesional', 'Rubrica de evaluación.', 'Ing. Clínica, electrónica y mantenimiento de equipos médicos.', 'Ventilación mecánica, gestión de equipos médicos, programas de mantenimientos, programas de capacitación, principios de ventilación.', 'Fotografías, recursos gráficos, presentaciones, contenido multimedia.'),
(35, 'Desarrollo backend con Spring Boot, Spring Security. DBA con PostgreSql, frontend con Angular.', 'Desarrollo de base de datos, backend, frontend.', 'Reporte del análisis y repositorios del proyecto.', 'Pruebas de funcionamiento.', 'Programación web, Base de datos, Ingeniería de requerimientos.', 'Desarrollo backend con Spring Boot, Spring Security.', 'Coursos, Tutoriales y Documentación.'),
(36, 'Evaluación del estado del hábitat', 'Identificar los tipos de hábitats en los que se desenvuelven los reptiles.', 'Reporte escrito de investigación de los hábitats existentes en la Península de Yucatán.', 'Rúbrica reporte escrito de investigación de los hábitats existentes en la Península de Yucatán.', 'Biotecnología agropecuaria.\r\nBiotecnología ambiental.\r\nBiología.', 'División de desarrollo rural, medio ambiente y administración de riesgos por desastres.', 'Identificar las razones por las cuáles las especies de reptiles son más escasas, en qué tipo de ambiente prefieren estar y por qué.'),
(38, 'Lectura de manuales, mantenimientos preventivos, capacitaciones, check - list.', 'Uso y manejo de analizadores y simuladores de pacientes, diagnostico de equipo médico, actividades dentro de un DIB.', 'Memoria.', 'Rúbrica.', 'Electrónica analógica, de potencia y digital, mantenimiento de equipos médicos, sistemas de gestión en salud, instrumentación biomédica, suministro de energía eléctrica, mediciones eléctricas, seguridad y normas.', 'Gestión de equipo médico, mantenimiento preventivo y correctivo, normas de seguridad y calidad eléctrica, normas de bioseguridad,  aplicación señales biomédicas, circuitos eléctricos y fuentes eléctricas.', 'Capacitación, lectura de manuales de equipos médicos e instrumentación biomédica, uso y aplicación de instrumentos biomédicos, creación de material didáctico visual y auditivo.'),
(39, 'Mantenimientos preventivos, reportes de mantenimiento, entrada de equipos, actualización de la ficha de mantenimiento.', 'El alumno conoce y comprende los diferentes procesos que se llevan a cabo para la realización de actividades, como el ingreso de equipo, mantenimientos, etc.', 'Evidencias fotográficas', 'Preguntas de manera verbal', 'Instrumentación biomédica, biomédica clínica, mantenimiento preventivo a equipo médico.', 'Electrónica', 'Método de preguntas, aprendizaje colaborativo, estrategia de comprensión de manuales de usuario y servicio, observación.'),
(40, 'análisis y gestión de estrategias para la solución de problemas', 'resolución de problemas mediante la implementacion   de un sistema de seguridad en un área de trabajo', 'documento del proyecto', 'presentación del proyecto presentado', 'formulación de proyectos, metodología de la investigación, habilidades cognitivas y creatividad, calidad.', 'diagnostico empresarial (Dario rodriguez)\r\nestrategia empresarial ( Rodero, jose Antonio)', 'encuesta, encuesta, recolección de datos, diagrama de árbol.'),
(41, 'Estructuracion de procesos y mejoras', 'Contribucion a los estructuracion de los procesos y mejorqmientos esquematizados de la empresa', 'Diseño del manual', 'Reportes de actividades y revision.', 'Tecnologias de la investigacion aplicadas a los negocios, comportamiento y desarrollo empresarial, habilidades gerenciales', 'Escobar (2013) Recursos HUmanos \r\nChiavenato (2009) Seleccion del personal\r\nChiavenato (2009) Reclutamiento del personal', 'Realizaciln de diagrama de flujo, estructuras del diseño de los procesos y el desarrollo'),
(42, '1-Análisis de valores internos. 2-Planeación de estrategias de difusión. 3-Feedback interno y externo.', '1-Reconocer los valores del ser. 2-Desarrollar técnicas digitales. 3-Conocer las emociones de los jóvenes.', '1-Esquema/diagrama de valores internos. 2-Campaña en redes sociales. 3-Retroalimentación.', '1 etapa 2da etapa y entrega de trabajo final.', '1-Valores del ser 2-Inteligencia emocional 3-Desarrollo interpersonal', 'Análisis emocional-La inteligencia emocional en la empresa- Valores universales.- La comunicación (importancia y alcances)- Estrategias de comunicación.', 'Aplicar asertividad en las situaciones frecuentes-Enfrentarse constructivamente ante la crítica.'),
(43, '• Trabajo colaborativo en equipo.                   •Análisis e implementación.                •Documentador		\r\n', '\"•Desempeñar actividades cooperativas dentro del\r\nequipo y entre otros equipos. •Desarrollo de codigo\r\nsiguiendo el modelo planteado. •Llevar un registro y\r\ndocumentacion de la mejor foma y en tiempo.\"			\r\n', '\"•Pagina en dominio.\r\n•Pruebas positivas del modulo.\r\n•Modulo finalizado y Documentación.\r\n\"		\r\n', '•Evaluación\r\n', '\"•Estructura de datos.\r\n•Programación web.\r\n•Mantenimiento de software\r\n•Programacion cliente servidor\r\n•Calidad de software\r\n\"			\r\n', '\"•Recursividiad, estructuras lineales. •Programación del\r\nlado del cliente, programacion del lado del servidor.\r\n•Gestion y organización. •Análisis de Vulnerabilidades.\r\n•Usabilidad y Accesibilidad. •Experiencia de usuario.\r\n•Diseño Centrado en el Usuario. •Metodologías Ágiles de\r\nDesarrollo. •Métricas de Calidad. •Pruebas de Calidad.\"				\r\n', '•Asesorias e investigación.	\r\n'),
(44, 'archivar documentos del personal dados de alta en el IMSS, formatear celdas.', 'Identificar a los trabajadores dados de alta entre el IMSS, conocimiento de los contratos.', 'Reporte general semanal en la oficina', '1ra y 2da revisión, entrega final del trabajo', 'Gestión administrativo, legislación laboral, expresión oral y escrita, Tics y Talento Humano', 'Alicia Barnard, Alejandro Delgado, Juan Voutssas(2014) los archivos digitales.\r\nGob (2020) MANUAL INSTITUCIONAL DE ARCHIVOS ADMINISTRATIVOS', 'Recolección de datos y estudios de los documentos.'),
(45, 'Manual de descripción y perfil de puesto del encargado de biblioteca.', 'Localización de libros y control de inventario.', 'Manual de descripción y perfil de puesto.', 'Reporte final de estancias, documentación y presentación final del proyecto.', 'Gestión del talento humano, planeación estratégica, metodología de la investigación.', 'ISO 9001 (2015)- SISTEMAS DE GESTIÓN DE CALIDAD. CHIAVENATO, (2011)- ADMINISTRACIÓN DE RECURSOS HUMANOS.', 'Asesorías en función de actividades bibliotecarias.'),
(46, 'Gestión de proyectos, manejo de la información, creación de base de datos', 'Trabajo con microsoft, base de datos, diseño y creación de pagina web, agregación de API', 'Plataforma web', 'Documentación de proyectos', 'programación web, Base de datos, Cliente y servidor, sistemas operativos y arquitectura orientada a servicios(SOA)', 'Backend, Frontend, base de datos, paquetería office, diseño de interfaces de usuarios, diccionario de datos, modelo de entidad y relación.', 'Interfaz amigable, Facilitación de manejo y búsqueda de la información'),
(47, 'Desarrollo profesional plataforma dispositivo movil', 'Creación de plataforma eficiente, implementación de Store Procedure y testeo', 'Documentacion mockup, prototipos y plataforma finalizada', 'Aplicación Movil', 'Programación móvil, Base de datos, Diseño de interfaces, JavaScript, Análisis de requerimientos.', 'SQL server, JS, APIS, Json, VisualBasic, Postman, Git, Tracer, Base de Datos', 'Libros, Foros, Documentación, Internet y asesoramiento del tutor asignado.'),
(48, 'Técnicas de muestreo, procesamiento de muestras en el laboratorio, análisis de resultados.', 'El alumno será capaz de preparar medios de identificación, aplicar técnicas analíticas.', 'Bitácora de trabajo, prácticas en laboratorio, bitácora y reporte de resultados.', 'Bitácora de muestreo, trabajo en el laboratorio y reporte final.', 'Química analítica, microbiología y microbiología avanzada.', 'Recolección y preservación de muestras, preparación de reactivos para el análisis de agua, realización de pruebas de calidad del agua, aplicación de técnicas analíticas.', 'Instrucción programada, investigación documental.'),
(49, '1.Análisis del inventario, 2.Desarrollo de estrategias, 3.Categorización de productos, 4.Obtención de resultados', '1.Registro de inventario\r\n2.Toma de decisiones\r\n3. Gestión del inventario\r\n4. Análisis de resultados', '1.Registro del inventario\r\n2.Registros de inventarios de periodos anteriores y actuales\r\n3. Estrategias\r\n4.Explicación de resultados', '1.Observación de campo\r\n2.Observación directa\r\n3.Documento del proyecto\r\n4.Explicación del proyecto', '1.Sustentabilidad\r\n2.Emprendimiento\r\n3.Formulación de proyecto\r\n4.Logística administrativa\r\n5.Consultoría', 'Cruz Fernández, A. (2017). Gestión de inventarios. UF0476.IC Editorial. https://elibro.net/es/lc/bidigecest/titulos/59186, Guerrero Salas, H. (2009).Inventarios: manejo y control.Ecoe Ediciones.https://elibro.net/es/lc/bidigecest/titulos/69078', '1.Recolección de datos\r\n2.Análisis de la información\r\n3.Hoja de verificación\r\n4. Gráfico de Gantt'),
(50, 'Desarroolo web, Desarrollo de\r\naplicaciones moviles, Desarrollo de base\r\nde datos', 'Desarrollo de aplciaciones moviles,\r\nDiseño de base dedatos, Diseño de\r\npaginas web', 'Aplicación movil', 'Evaluacion', 'Programacion web, Programacion orientaba a\r\nobjetos, desarrollo de aplicaciones\r\nmoviles,Estrucutura de datos', 'Programacion web, desarrollo de apliaciones\r\nmoviles, Diseño de Intersaces, clases,objetos UML', 'Videotutoriales. Lstura de manuales'),
(52, 'Investigación bibliografíca \r\nOrganización de muestreo\r\nRecabación de los datos biométricos de los peces\r\nUsar la herramienta de Excel para interpretación de los datos \r\nRealización de un documento de memoria de tesis.', 'Identificar trabajos sobre M atlanticus\r\nEmplear métodos de organización para análisis de muestras\r\nUsar herramientas para la colecta de datos biométricos\r\nUsar herramientas informáticas para recabación de datos\r\nEstructurar la memoria de tesis', 'Reporte de investigación documental\r\nMuestras organizadas listas para analizar\r\nBase datos de los datos biométricos obtenidos\r\nBase de datos biometricos y de genero\r\nDocumento de investigación', 'Rúbrica de cumplimiento\r\nLista de cotejo \r\nLista de cotejo \r\nLista de cotejo \r\nRúbrica de cumplimiento', 'Biología\r\nQuímica Analítica\r\nControl Estadístico', 'Identificación de especies y recolección de sus\r\ndatos biométricos\r\nClasificación, análisis y estudio de las muestras\r\nUso de gráficos de control para la interpretación de datos', 'Análisis de los peces muestra para la\r\nidentificación de la especie y sus datos\r\nbiométricos\r\nOrganización de las muestras y análisis\r\nde las mismas\r\nUso de gráficos en Excel para interpretación de los datos recabados'),
(53, 'Administrar el registro de cada profesor de cada metria durante el periodo', 'Función de la organización del formato maya curricular', 'Organización, control y toma de decisiones', '1ra revisión, 2da revisión, 3ra revisión y entrega', 'Metodología de la investigación, planeación estratégica en las organizaciones, proceso administrativo', 'organización empresarial, dirección, planeación estratégica y desarrollo humano', 'Lluvia de ideas, conferencias en clase, técnicas de aprendizaje'),
(54, 'Analizar, organizar, trabajar con office, trabajar en equipo, hacer formulas, reforzar el método científico y el proceso administrativo.', 'Funciones básicas de Excel, desarrollo del formato de un inventario, elaboración de un diagnostico empresarial y elaboración de un plan estratégico tipo foda, descripción de problemas y soluciones para la operación empresarial.', 'Desarrollo, diseño  y organización de un inventario.', '1ra revisión, 2da revisión, 3ra revisión y entrega final del trabajo.', 'Metodología de la investigación, introducción a la administración, proceso administrativo, sistemas de información en las organizaciones, marco legal, habilidades cognitivas y de creatividad y contabilidad.', 'Habilidades básicas de pensamiento, organización, programación y dirección empresarial, planeación estrategia diseño y desarrollo empresarial, Excel.', 'Técnicas de aprendizaje: Lluvia de ideas gruoo de estudio en pares, conferencia en clase. Resguardo individual de bienes inventaríales y listado de materiales consumibles y refacciones.'),
(55, 'Uso de base de datos y bibliográficas para la identificación de otolitos.\r\n\r\nUtilizar adecudamente los equipos de laboratorio.', 'Identificar otolitos de especies ícticas.\r\n\r\nUtilizar instrumentos ópticos (Microscopio, lupa de mesa, etc.)', 'Reunión y discusión de los resultados.\r\n \r\nPráctica de campo', 'Rubrica de laboratorio.\r\n\r\n\r\nBitácora de laboratorio.', 'Biotecnología Agropecuaria\r\nBiotecnología Ambiental\r\nBioseguridad e Higiene', 'Anatomía y fisiología de peces.\r\nBioindicadores y Biomarcadores.\r\nManual de Buenas Prácticas', 'Práctica de laboratorio\r\nExposición del tema.\r\nPráctica de campo.'),
(56, 'Conocimiento sobre el proceso del área de entregas y documentación obligatoria', 'Conocer las principales funciones de área de entregas', 'Manual de procedimientos del área de entregas', 'Documentos Word y Excel en su caso', 'Planeación estratégica de las organizaciones \r\nMetodología de la investigación', 'Estructura de un manual \r\nEstructuración de las funciones y formatos', 'Manual de procedimientos del IMDAI físico y digital'),
(57, '1. Clasificación de las nóminas, 2. Control del reloj checador de los colaboradores del departamento, 3. Organización de los documentos digitales, 4. Elaboración de requisiones de productos, 5. Resolución de conflictos.', '1.Uso eficiente del software de nómina, 2.Facilidad en la búsqueda de archivos, 3. Memorizar los datos que requieren en cada software, 4. Creación de propuestas, 5. Integración del proyecto.', '1.Capturas, 2.Informe de práctica, 3.Registro del software de facturas, 4. Información documental, 5.Formato de excel.', '1. Observación directa, 2.Prueba escrita, 3. Argumentos del proyecto.', '1. Administración de redes empresariales, 2. Consultoria, 3. Gestión y evaluación de proyectos, 4. Emprendimiento, 5. Negociación y toma de decisiones empresariales, 6. Sustentabilidad.', 'Archivo General de la Nación. (2015). Recomendaciones  para proyectos de digitalización. México, DC. \r\nArchivo General de la Nación. (2018). Digitalización.', '1. Situaciones laborales, 2. Gráfica de Gantt, 3. Analizar información, 4.Aprendizaje colaborativo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `id_c_horaria` int(11) DEFAULT NULL,
  `id_c_derecho` int(11) DEFAULT NULL,
  `id_c_responsiva` int(11) DEFAULT NULL,
  `id_c_presentacion` int(11) DEFAULT NULL,
  `id_c_aceptacion` int(11) DEFAULT NULL,
  `id_c_registro` int(11) DEFAULT NULL,
  `id_d_proyecto` int(11) DEFAULT NULL,
  `id_c_liberacion` int(11) DEFAULT NULL,
  `id_proceso` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `id_c_horaria`, `id_c_derecho`, `id_c_responsiva`, `id_c_presentacion`, `id_c_aceptacion`, `id_c_registro`, `id_d_proyecto`, `id_c_liberacion`, `id_proceso`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-05-01 14:49:00'),
(4, NULL, NULL, NULL, NULL, 51, 68, 30, 45, 1, '2022-04-25 16:19:17'),
(5, NULL, NULL, NULL, NULL, 4, 20, NULL, NULL, 3, '2022-04-07 16:03:18'),
(6, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, 3, '2022-03-23 18:14:29'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-04-08 18:28:50'),
(8, NULL, NULL, NULL, NULL, 2, 18, 29, 44, 1, '2022-04-25 16:17:54'),
(9, NULL, NULL, NULL, NULL, 3, 24, NULL, 2, 3, '2022-04-20 15:09:26'),
(10, NULL, NULL, NULL, NULL, 73, 23, 38, 62, 3, '2022-04-25 22:00:53'),
(11, NULL, NULL, NULL, NULL, 78, 88, 43, 68, 3, '2022-04-26 15:04:48'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2022-04-08 19:31:20'),
(13, NULL, NULL, NULL, NULL, 30, 22, 10, 22, 3, '2022-04-22 19:18:25'),
(14, NULL, NULL, NULL, NULL, 33, 45, 11, 24, 1, '2022-04-22 21:12:50'),
(15, NULL, NULL, NULL, NULL, 10, 25, 4, 3, 3, '2022-04-21 15:43:52'),
(16, NULL, NULL, NULL, NULL, 11, 26, NULL, 4, 1, '2022-04-21 15:51:12'),
(17, NULL, NULL, NULL, NULL, 12, 27, NULL, 5, 1, '2022-04-21 16:20:03'),
(18, NULL, NULL, NULL, NULL, 13, 28, NULL, 6, 1, '2022-04-21 16:37:20'),
(19, NULL, NULL, NULL, NULL, 14, 29, 5, 7, 3, '2022-04-21 18:50:08'),
(20, NULL, NULL, NULL, NULL, 15, 31, NULL, 8, 1, '2022-04-21 20:34:56'),
(21, NULL, NULL, NULL, NULL, 16, 41, 7, 18, 3, '2022-04-22 16:00:47'),
(22, NULL, NULL, NULL, NULL, 17, 39, 6, 9, 1, '2022-04-22 14:19:01'),
(23, NULL, NULL, NULL, NULL, 18, 32, 20, 10, 3, '2022-04-23 01:30:19'),
(24, NULL, NULL, NULL, NULL, 19, 33, NULL, 14, 1, '2022-04-22 02:48:05'),
(25, NULL, NULL, NULL, NULL, 20, 34, NULL, 11, 1, '2022-04-22 02:03:20'),
(26, NULL, NULL, NULL, NULL, 21, 38, NULL, 12, 1, '2022-04-22 03:39:15'),
(27, NULL, NULL, NULL, NULL, 22, 35, NULL, 13, 1, '2022-04-22 02:33:18'),
(28, NULL, NULL, NULL, NULL, 23, 36, 12, 15, 1, '2022-04-22 21:33:51'),
(29, NULL, NULL, NULL, NULL, 24, 37, NULL, 16, 1, '2022-04-22 03:25:20'),
(30, NULL, NULL, NULL, NULL, 25, 40, 16, 17, 1, '2022-04-23 01:04:50'),
(31, NULL, NULL, NULL, NULL, 26, 91, 22, 30, 1, '2022-04-26 22:55:44'),
(32, NULL, NULL, NULL, NULL, 29, 42, 9, 19, 3, '2022-04-22 16:47:09'),
(33, NULL, NULL, NULL, NULL, 28, 43, 8, 20, 3, '2022-04-22 16:45:20'),
(34, NULL, NULL, NULL, NULL, 52, 44, NULL, 23, 3, '2022-04-25 15:42:08'),
(35, NULL, NULL, NULL, NULL, 32, 48, 15, 36, 3, '2022-04-23 21:25:18'),
(36, NULL, NULL, NULL, NULL, 34, 46, 13, 25, 3, '2022-04-22 22:31:59'),
(37, NULL, NULL, NULL, NULL, 35, 47, 14, 26, 3, '2022-04-22 22:42:57'),
(38, NULL, NULL, NULL, NULL, 38, 49, 39, 64, 1, '2022-04-25 22:50:50'),
(40, NULL, NULL, NULL, NULL, 39, 50, 19, 29, 3, '2022-04-23 01:29:36'),
(41, NULL, NULL, NULL, NULL, 40, 52, 21, 27, 3, '2022-04-23 01:54:18'),
(42, NULL, NULL, NULL, NULL, 41, 53, 17, 28, 3, '2022-04-23 01:06:58'),
(43, NULL, NULL, NULL, NULL, 42, 54, 24, 31, 1, '2022-04-23 03:25:15'),
(44, NULL, NULL, NULL, NULL, 43, 55, 25, 32, 3, '2022-04-23 03:37:32'),
(45, NULL, NULL, NULL, NULL, 44, 61, 28, 34, 1, '2022-04-25 06:13:43'),
(46, NULL, NULL, NULL, NULL, 45, 57, NULL, 35, 1, '2022-04-23 16:20:10'),
(47, NULL, NULL, NULL, NULL, 66, 77, 36, 58, 3, '2022-04-25 18:29:12'),
(48, NULL, NULL, NULL, NULL, 46, 60, 27, 38, 3, '2022-04-25 05:53:04'),
(49, NULL, NULL, NULL, NULL, 47, 62, NULL, 39, 3, '2022-04-25 14:05:24'),
(50, NULL, NULL, NULL, NULL, 50, 65, NULL, 42, 3, '2022-04-25 15:14:35'),
(51, NULL, NULL, NULL, NULL, 49, 64, NULL, 43, 3, '2022-04-25 15:17:58'),
(52, NULL, NULL, NULL, NULL, 53, 66, NULL, 46, 3, '2022-04-25 16:15:01'),
(53, NULL, NULL, NULL, NULL, 54, 67, NULL, 47, 3, '2022-04-25 16:19:01'),
(54, NULL, NULL, NULL, NULL, 55, 70, NULL, 48, 3, '2022-04-25 16:25:31'),
(55, NULL, NULL, NULL, NULL, 56, 69, NULL, 49, 3, '2022-04-25 16:24:53'),
(56, NULL, NULL, NULL, NULL, 57, 71, NULL, 50, 3, '2022-04-25 16:55:53'),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 51, 1, NULL),
(58, NULL, NULL, NULL, NULL, 58, 72, 51, 52, 3, '2022-04-28 20:12:34'),
(59, NULL, NULL, NULL, NULL, 59, 73, NULL, 53, 3, '2022-04-25 17:29:16'),
(60, NULL, NULL, NULL, NULL, 61, 74, 32, 54, 1, '2022-04-25 17:57:03'),
(61, NULL, NULL, NULL, NULL, 62, 75, 33, 55, 3, '2022-04-25 18:11:24'),
(62, NULL, NULL, NULL, NULL, 64, 78, 34, 56, 1, '2022-04-25 18:43:23'),
(63, NULL, NULL, NULL, NULL, 65, 76, NULL, 57, 3, '2022-04-25 18:27:02'),
(64, NULL, NULL, NULL, NULL, 67, 79, 37, 59, 3, '2022-04-25 21:05:21'),
(65, NULL, NULL, NULL, NULL, 68, 80, NULL, 60, 3, '2022-04-25 20:31:38'),
(66, NULL, NULL, NULL, NULL, 69, 81, NULL, 61, 3, '2022-04-25 20:56:40'),
(67, NULL, NULL, NULL, NULL, 77, 87, 42, NULL, 3, '2022-04-26 05:32:09'),
(68, NULL, NULL, NULL, NULL, 71, 86, NULL, 67, 3, '2022-04-25 22:48:43'),
(69, NULL, NULL, NULL, NULL, 74, 85, NULL, 66, 3, '2022-04-25 22:45:16'),
(70, NULL, NULL, NULL, NULL, NULL, 84, 40, 65, 3, '2022-04-25 23:01:46'),
(71, NULL, NULL, NULL, NULL, 76, 83, NULL, 63, 3, '2022-04-25 22:27:09'),
(72, NULL, NULL, NULL, NULL, 79, 96, 50, 69, 1, '2022-04-28 16:44:22'),
(73, NULL, NULL, NULL, NULL, 80, 89, 45, 70, 1, '2022-04-26 20:19:39'),
(74, NULL, NULL, NULL, NULL, 81, 90, 44, 72, 1, '2022-04-26 21:00:45'),
(75, NULL, NULL, NULL, NULL, 82, 93, 47, 73, 1, '2022-04-26 23:53:06'),
(76, NULL, NULL, NULL, NULL, 84, 94, 48, 74, 3, '2022-04-27 17:34:45'),
(77, NULL, NULL, NULL, NULL, 85, 95, 49, 77, 3, '2022-04-27 21:36:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre_emp` varchar(255) DEFAULT NULL,
  `giro` varchar(40) DEFAULT NULL,
  `direccion_emp` varchar(255) DEFAULT NULL,
  `ape_paterno_rh` varchar(40) DEFAULT NULL,
  `ape_materno_rh` varchar(40) DEFAULT NULL,
  `nombres_rh` varchar(100) DEFAULT NULL,
  `tel_lada` varchar(10) DEFAULT NULL,
  `tel_num` varchar(10) DEFAULT NULL,
  `tel_ext` varchar(10) DEFAULT NULL,
  `email_emp` varchar(40) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre_emp`, `giro`, `direccion_emp`, `ape_paterno_rh`, `ape_materno_rh`, `nombres_rh`, `tel_lada`, `tel_num`, `tel_ext`, `email_emp`, `id_tipo`) VALUES
(2, 'Biomedica SA de CV', 'Servicios Biomedicos', 'Calle Murillo #26, Villas del Arte', 'Rivera', 'Ortaz', 'Marthe Rivera', NULL, '9982149191', '001', 'marthabeatrir@hotmail.com', 1),
(3, 'Wisphub', 'Servicios', 'Calle Manantial, mz 1 Col el Pedregal', 'Garcia', 'Dzib', 'Lizeth de los angeles', NULL, '9831761868', NULL, 'lizeth@wisphub.net', 2),
(4, 'Xcaret', 'Turismo', 'Kukulcan Km 9 Punta Zona Hotelera', 'RAMIREZ', 'MIRANDA', 'LAURA IXCHEL', NULL, '5540260031', NULL, 'lramirezm@xcaret.com', 4),
(6, 'Centro de Rehabilitación Física Cancún', 'servicios de salud', 'AV.LA LUNA SM.506 MZ.5 LT.4 DEP.A CANCÚN', 'Uch', 'Batm', 'María Geny', NULL, '9988849285', NULL, 'rehabilitacion_terapias@hotmail.com', 2),
(7, 'Centro Químico', 'Servicios', 'SM 25 Manzana 15 Lote 7-8 Avenida Cobá', 'Primo', 'Barragán', 'Rocío del Carmen', NULL, '9842920983', NULL, 'a.capitalhumano@centroquimico.com.mx', 4),
(8, 'Amerimed Hospital Cancún', 'Servicios', 'MURRILLO MZ 75 N°16 LOTE 28 SMZ 321', 'Rivera', 'Ordaz', 'Martha Beatriz', '52', '9983707025', NULL, 'sip58@hotmail.com', 4),
(16, 'Ingenieria biomédica de Quintana Roo', 'Servicios', 'Av. Tulum sur no.260 Manzanas 4, 5.', 'Rivera', 'Ordaz', 'Martha Beatriz', NULL, '9983707025', NULL, 'marthabeatrir@hotmail.com', 1),
(19, 'FISIO SPORTS CANCÚN', 'Servicios', 'AV. CANCUN CASA #45 MZA. 1 SPMZ 524.', 'CERVERA', 'TUR', 'JOSÉ ALEJANDRO', '52', '2678677', '001', 'acervera-fisiatria@hotmail.com', 1),
(20, 'FISIO SPORTS CANCÚN', 'Servicios', 'AV. CANCUN CASA #45 MZA. 1 SPMZ 524.', 'CERVERA', 'TUR', 'JOSÉ ALEJANDRO', '52', '2678677', '001', 'acervera-fisiatria@hotmail.com', 1),
(21, 'Quiorti S.A de C.V', 'Comercial', 'Reg. 100 M19 L19', 'Moreno', 'Quijano', 'Sandra', NULL, '9988970724', NULL, 'quiorti@gmail.com', 3),
(22, 'IREGA Cancún', 'Salud', 'Av.Tulum, Av.Nizuc, Santa Maria Sike', 'Cortés', 'Bracho', 'Manuel', NULL, '9988021515', '102', 'recursoshumanos@iregacancun.com.mx', 2),
(23, 'IREGA Cancún', 'Salud', 'Av.Tulum, Av. Nizuc, Santa Maria Sike', 'Cortés', 'Bracho', 'Manuel', NULL, '9988021515', '102', 'recursoshumanos@iregacancun.com.mx', 2),
(24, 'Kynesium Terapia Física y Rehabilitación', 'Terapia Fisica', 'Av. Coba Lt 25-01 Mz 13 Sm 22', 'Martínez', 'Espinosa', 'Cristina', NULL, '9988876744', NULL, 'kynesiumucl@gmail.com', 1),
(25, 'Fisio Sports Cancun', 'servicios terapeuticos', 'Av. cancun casa#54 Mza.1 Sm.524', 'N/A', 'N/A', 'N/A', NULL, '9981670782', NULL, 'acervera-fisiatria@hotmail.com', 2),
(28, 'CICY', 'SERVICIOS', 'Calle 8, No. 39, Mz. 29, S.M. 64', 'ACOSTA', 'GONZALEZ', 'GILBERTO', '998', '2113008', '120', 'gilberto.acosta@cicy.mx', 1),
(29, 'Heilen med fisio sport', 'Terapeutico', 'carretera federal Cancun-Tulum 3 sur', 'Avila', 'Sansores', 'Neidy', NULL, '9841481453', NULL, 'heilenmedplaya@gmail.com', 3),
(34, 'Universidad Politécnica de Quintana Roo', 'Educación', 'Av Arco Bincentenario M11 L1119-33 Sm255', 'Chi', 'Keb', 'Georgina', '+52', '9982831859', '141', 'georgina.chi@upqroo.edu.mx', 3),
(36, 'Kinesium Terapia Física y Rehabilitación', 'Terapia Física', 'Av. Coba Lt 25- 01 Mz  13 sm 22', 'Martínez', 'Espinosa', 'Cristina', '52', '9988876744', NULL, 'cristinahealth@hotmail.com', 1),
(37, 'SAVAS', 'Programacion web y moviles', 'Calle Robalo, 77500 Cancún, Q.R', 'Trujano', 'Soya', 'Miguel Angel', NULL, '9981361711', NULL, 'mtrujano@savas.com.mx', 1),
(44, 'SENSIRA RESORT & SPA RIVIERA MAYA', 'HOTELERIA', 'CARRETERA CANCUN - TULUM KM 27.5, BAHIA DE PETEMPICH', 'MEDINA', 'ARGAEZ', 'CECILIA', NULL, '9988685460', '311', 'c.medina@sensiraresorts.com', 4),
(45, 'IMJUVE', 'GUBERNAMENTAL', 'Plaza Centro, Av. Nader, smz 5, mza 5 lote 8', 'Caporali', 'Santos', 'Geser Manuel', '052', '9981894213', NULL, 'gesercaporali.imjuve@gmail.com', 3),
(47, 'Promotora DG S. de R.L. de C.V.', 'Automotriz', 'Av. Tulum Esq. Sayil Lt. 1 Mz. 7 SM. 7', 'Rodríguez', 'Villarreal', 'Rubén Israel', NULL, '9982607043', NULL, 'ruben.rodriguez@grupodg.net', 4),
(48, 'Centro Químico', 'Servicios', 'SM 25 Manzana 15 Lote 7-8 Avenida Cobá con Guanábana, Local 4', 'Primo', 'Barragán', 'Rocío del Carmen', NULL, '9842920983', NULL, 'a.capitalhumano@centroquimico.com.mx', 4),
(49, 'Vector Casa de Bolsa SA de CV', 'CASAS DE BOLSA', 'AV. SAYIL SM 6 MZ 5 LT 2 INT.1008 EDIFICIO SPECTRUM', 'Trevisan', 'Gonzalez', 'María del Pilar', '052', '9988899230', '450', 'mtrevisa@vector.com.mx', 4),
(51, 'Xk net SA de CV', 'Servicios', 'Smza 258 lote 3, Arcos del Isla Paraíso', 'Huchin', 'Soberanis', 'Guadalupe Patricia', '052', '5586503692', '108', 'patricia.huchin@xknet.mx', 3),
(52, 'Royal Resort', 'Turistico, Hotelero', 'Boulevard Kukulcan Km.17 Hotel The Royal Islander, Zona Hotelera', 'Montalvo', 'Gonzales', 'Manuel Alfonso', '998', '8810100', '647', 'matrejo@royalresorts.com', 4),
(55, 'Centro Químico', 'Servicios', 'SM 25 Manzana 15 Lote 7-8 Avenida Cobá con Guanábana, Local 4', 'Primo', 'Barragán', 'Rocío del Carmen', NULL, '9842920983', NULL, 'a.capitalhumano@centroquimico.com.mx', 4),
(56, 'SERVICIOS PORTUARIOS SERPAC S.A DE C.V.', 'SERVICIOS TRANSPORTE MARÍTIMO', 'SM 84 MZA 7 LT 1 CALLE 45', 'JIMENEZ', 'PEDRAZA', 'MALITZIN', '052', '9981361781', '000', 'mjimenez@jetway.com.mx', 3),
(57, 'Centro de Investigación Científica de Yucatán, A. C', 'Centro Publico', 'Calle 43 No.130 por 32 y 34 Col. Chuburná de Hidalgo C.P. 97205 Mérida, Yucatán, México.', 'Zepeda', 'Hernández', 'Cecilia', '999', '9428330', '294', 'docencia@cicy.mx', 4),
(58, 'UNIVERSIDAD POLITÉCNICA DE QUINTANA ROO', 'EDUCACION', 'Av. Arco Bicentenario, Mza. 11, Lote 1119-33, SM. 255. Cancún, Quintana Roo, México. C.P. 77500', 'CHI', 'KEB', 'GEORGINA', '998', '2831859', '141', 'rec.humanos@upqroo.edu.mx', 3),
(59, 'VGP CONSTRUCCIONES S DE RL CV', 'Constructora', 'SM248 MZ126 L1 CASA 01. CP MAR DEL NORTE SM 248 PONIENTE F C.P. 77500 CANCUN Q.R.', 'Marinez', 'Garcia', 'Nallely', '998', '2724634', '105', 'nmartinez@vgpconstrucciones.com', 4),
(60, 'Centro de Rehabilitación Física Cancún', 'Servicios de salud', 'AV. LA LUNA SM. 506 MZ. 5 LT. 4 DEP. A', 'Uch', 'Batun', 'María Geny', '998', '9988849285', NULL, 'rehabilitacion_terapias@hotmail.com', 2),
(64, 'Laboratorio de Análisis Clínicos Limed', 'Servicios', 'Laboratorio Limed, Avenida Nader 21 Supermanzana 2A, Cancún Quintana Roo77500, México', 'Trujeque', 'Canché', 'Aracelly', '998', '9988842399', NULL, 'aracelly@laboratoriolimed.com', 3),
(67, 'Universidad Politécnica de Quintana Roo', 'Educación', 'Av Arco Bincentenario M11 L1119-33 Sm255', 'Chi', 'Keb', 'Georgina', NULL, '9982831859', '141', 'georgina.chi@upqroo.edu.mx', 3),
(68, 'Rehabilitación Cancún Clínica', 'Terapia Física / Rehabilitación', 'Calle Nichehabin y Punta Conoco', 'López', 'Martín', 'Rubén', '052', '9982149435', NULL, 'rubenlopezfisio@hotmail.com', 2),
(69, 'Laboratorio de Análisis Clínicos Limed', 'Servicios', 'Laboratorio Limed, Avenida Nader 21, Supermanzana 2A, Cancún, Quintana Roo 77500, México', 'Trujeque', 'Canché', 'Aracelly', NULL, '9988842399', NULL, 'aracelly@laboratoriolimed.com', 3),
(70, 'Laboratorio de Análisis Clínicos Limed', 'Servicios', 'Laboratorio Limed, Avenida Nader 21, Supermanzana 2A, Cancún, Quintana Roo 77500, México', 'Trujeque', 'Canché', 'Aracelly', '052', '9988842399', NULL, 'aracelly@laboratoriolimed.com', 3),
(72, 'Ingenieria biomédica de Quintana Roo', 'Servicios', 'Av. Tulum sur no.260 Manzanas 4, 5 y 9, 7, 77500 Cancún, Q.R.', 'Rivera', 'Ordaz', 'Martha Beatriz', NULL, '9983707025', NULL, 'marthabeatrir@hotmail.com', 1),
(74, 'Beachscape Kin-Ha Villas & Suites', 'Hospedaje', 'Km. 8.5, Blvd. Kukulcan, Punta Cancun, Zona Hotelera, 77500 Cancún, Q.R.', 'Villaseñor', 'Ramirez', 'Ivonne M.', '052', '9981264678', NULL, 'rh@beachscape.com.mx', 3),
(76, 'Tiendas Soriana S.A DE C.V', 'Comercial', 'Av. Costa Maya 228, 228, 77516, Cancún Q..R', 'Balam', 'Sabido', 'Leidy Beatriz', '998', '9985528046', '998', 'caphum951@soriana.com', 3),
(77, 'Hospital Galenia', 'Salud', 'Av. Tulum, Lote 1, Mza. 1, SM. 12 Esq. Nizuc Fracc. Sta. María Siké', 'Jaimes', 'Recinos', 'Mónica', '052', '9988915200', '605', 'jrhumanos@hospitalgalenia.com', 4),
(81, 'Centro Quimico', 'Servicios', 'Av. Huayacan, Smz. 310, Mz. 141, Lt. 59, Fraccionamiento Residencial Palmaris, 77560 Cancun; Q.R', 'Barragan', 'Primo', 'Rocio Del Carmen', '052', '9983130544', '240', 'rh@centroquimico.com.mx', 3),
(82, 'Centro De Investigación Científica De Yucatán, A. C.', 'Educativo', 'Calle 8 No. 39 L1, Mz 2, Sm 64 C.P. 77857, Cancún, Quintana Roo, México', 'De Gante', 'Ayora', 'Fanny Margarita', '998', '9982113008', '117', 'fanny.degante@cicy.mx', 3),
(84, 'Rehabilitación Cancún clínica', 'Terapia física', 'Calle nicchehabin y punta conoco', 'López', 'Martín', 'Rubén', NULL, '9982149435', NULL, 'rubenlopezfisio@hotmail.com', 2),
(86, 'SERVICIOS PORTUARIOS SERPAC S.A DE C.V', 'SERVICIOS', 'SM84 MZA7 LT1 CALLE 45', 'JIMENEZ', 'PEDRAZA', 'MALITZIN', '052', '9981361781', '000', 'mjimenez@jetway.com.mx', 3),
(88, 'Centro Químico', 'Servicios', 'Av Huayacán, Sm 310, Mz 141, Lt 59, Fracc Residencial Palmaris, Cancún Q. Roo', 'Barragán', 'Prieto', 'Rocío del Carmen', '998', '3130544', '240', 'rh@centroquimico.com.mx', 3),
(89, 'Grupo LESAA', 'Laboratorio de microbiología', 'A. Francisco I. Madero mz 107 l 12 Local 4', 'Xool', 'Gonzalez', 'Pedro Abraham', '998', '9981653983', NULL, 'operaciones@grupolesaa.com.mx', 1),
(90, 'Grupo LESAA', 'Laboratorio de Aguas y Alimentos', 'A. Francisco I. Madero Mz 107 Lt12 Int. Local 4', 'Xool', 'González', 'Pedro Abraham', '998', '9981653983', NULL, 'operaciones@grupolesaa.com.mx', 1),
(91, 'Conquimex S.C.', 'Servicos', 'Av. 149 Mz. 10 Lt. 2 Reg. 103', 'Gallegos', 'Cabra', 'Adán Francisco', '998', '9983660516', '000', 'adan.gallegos@conquimex.com.mx', 2),
(94, 'Universidad Politécnica de Quintana Roo', 'Educativo', 'Av. Arco Bicentenario, Cancún, Quintana Roo. Manzana. 11, Lote 1119-33 Sm 255, C.P 77500', 'Chi', 'Keb', 'Georgina', '052', '9982831859', '141', 'gerorgina.chi@upqroo.edu.mx', 4),
(96, 'BEUMER GROUP', 'TECNOLOGIA Y AUTOMATIZACION', 'AV. SANTA FE 170 7-03-06 CP 01219 Ciudad de México ALVARO OBREGON', 'GONZALEZ', 'LOPEZ', 'DIEGO ISRAEL', '052', '5534446692', NULL, 'diego.gonzalez2@beumer.com', 2),
(97, 'Ossis Ortho Sport Clinic', 'Servicios', 'Av. Huayacán Sm 311 L01 calle Ciricote', 'Cortes', 'Tziu', 'Karla Daniela', NULL, '9983107772', NULL, 'ossisclinic@gmail.com', 3),
(98, 'Centro Químico', 'Laboratorio', 'Av Huyacán, Smz 310. Mzn 141, Lt 59', 'Primo', 'Barragan', 'Rocio del Carmen', '984', '2920', '982', 'rh@centroquimico.com.mx', 3),
(99, 'Ossis Ortho Sport Clinic', 'Servicios', 'Av. Huayacan Sm 311 L 01 Calle Ciricote', 'Cortes', 'Tziu', 'Karla Daniela', NULL, '9983107772', NULL, 'ossisclinic@gmail.com', 3),
(100, 'Centro Químico', 'Servicios', 'SM 25 Manzana 15 Lote 7-8 Avenida Cobá con Guanábana, Local 4', 'Primo', 'Barragán', 'Rocío del Carmen', NULL, '9842920983', NULL, 'a.capitalhumano@centroquimico.com.mx', 4),
(101, 'FX DESARROLLO ALTERNATIVO', 'Servicios de investigación', 'Calle Copan Manzana 1 Lote 46, Supermanzana 19, 77505, Cancún, Quintana Roo', 'Cazan', 'Barrera', 'Johana', NULL, '9982969857', '701', 'reclutamiento@fibrax.mx', 3),
(102, 'Universidad Politécnica de Quintana Roo', 'Educación', 'reg 103 calle 30 mz 50 lt 27', 'Chi', 'Keb', 'Georgina', '052', '9982831859', '141', 'georgina.chi@upqroo.edu.mx', 3),
(103, 'Universidad Politécnica de Quintana Roo', 'Educación', 'Av Arco Bincentenario M11 L1119-33 Sm255', 'Chi', 'Keb', 'Georgina', '052', '9982831859', '141', 'pedro-pister@hotmail.com', 3),
(107, 'Ossis Ortho Sport Clinic', 'servicios', 'sm311 lt 1-01 Calle Ciricote', 'karla daniela', 'cortes', 'tziu', NULL, '9981904742', NULL, 'karlac1909@gmail.com', 3),
(110, 'Royal Resorts', 'Turistico', 'Boulevard Kukulkan Secc A km 13.5 entre plaza kukulkan y hotel ritz, lote 32, zona hotelera, 77500, Benito Juárez, Cancún Quintana Roo, México.', 'Montalvo', 'González', 'Manuel Alfonso', '998', '9988810100', '657', 'mmontalvo@royalresorts.com', 4),
(112, 'GRUPO CONSULTORES MBS DEL CARIBE S.A. DE C.V.', 'COMERCIAL', 'REGION 95 GALAXIA ISLA MANZANA 133 LOTE 01 CALLE 6 EDIFICIO 8', 'VIVAS', 'ESPITIA', 'EMERITA', '998', '2898323', NULL, 'grupombsdelcaribe@gmail.com', 1),
(113, 'Física Medica y Seguridad Radiológica', 'Ventas al por mayoreo', 'Calle 70  Local C  col Cd Caucel, Mérida', 'Mendrano', 'Nahuat', 'Salma Viridiana', NULL, '9992807565', NULL, 'reclutamientofimser@gmail.com', 1),
(120, 'Fisio sports Cancun', 'Terapia Fisica', 'Av.cancun(de las torres) casa #54 mza.1 s.m. 524 residencia santa fe', 'N/A', 'N/A', 'N/A', '052', '9981670782', NULL, 'acervera-fisiatria@hotmail.com', 2),
(121, 'Fisiosport Cancún', 'Terapia física', 'Av. Cancún casa 45 mza.1 SM524. C.P.77536 Residencial Santa Fe.', 'N/A', 'N/A', 'N/A', '052', '9981670782', NULL, 'acervera-fisiatria@hotmail.com', 2),
(123, 'Fisio sports Cancun', 'Terapia Fisica', 'Av.cancun(de las torres) casa #54 mza.1 s.m. 524 residencia santa fe', 'N/A', 'N/A', 'N/A', '052', '9981670782', NULL, 'acervera-fisiatria@hotmail.com', 2),
(124, 'Dapper Technologies', 'Desarrollo de Software', 'S.M.56,MZ.03,L.01,CALLE CALAYMUL No.15 Cancún,Quintana Roo,Mexico', 'Vázquez', 'Montoya', 'Cinthia Griselle', NULL, '9981651936', NULL, 'c.montoya@dappertechnologies.com', 1),
(125, 'Universidad Politécnica de Quintana Roo', 'Educativo', 'Av. Arco Bicentenario, Cancún, Quintana Roo. Manzana. 11, Lote 1119-33 Sm 255, C.P 77500', 'Chi', 'Keb', 'Georgina', '052', '9982831859', '141', 'georgina.chi@upqroo.edu.mx', 4),
(126, 'Universidad Politécnica de Quintana Roo', 'Educativo', 'Av. Arco Bincentenario, Mza. 11, Lote 1119-33 Sm 255, Cancún, Q.R.', 'Chi', 'Keb', 'Georgina', '052', '9982831859', '118', 'georgina.chi@upqroo.edu.mx', 3),
(128, 'Ozelot Technologies', 'Desarrollo e implementación de TI\'s', 'Av. Antonio Enríquez Sabina, MZA. 28 LT. 1 REG 518, entre Av. Ricardo Flores Magón y Lic. Pedro Joaquín Codwell, CP. 77536, Cancun, Q. Roo.', 'Petul', 'Chávez', 'Elizabeth', '052', '9981841388', NULL, 'epetul@ozelot.it', 1),
(131, 'COLEBI SA. DE C.V.', 'Turístico', 'Paseos Akumal Mz24 Lt41 Fracc. Paseos del Caribe Región 514 C.P. 77535 Cancún Q.R. México', 'Kuri', 'Ortega', 'Vanessa Alondra', '052', '9983964149', '123', 'trans_colebi@hotmail.com', 1),
(132, 'Hospital Galenia', 'Salud', 'Smza.255, Mza.11, Lote 1119-33, Cancún', 'Jaimes', 'Recinos', 'Mónica', '052', '9988915200', '605', 'jrhumanos@hospitalgalenia.com', 4),
(133, 'GRUPO MEDIO PLAYAMED', 'Mantenimiento', 'RETORNO LAS CALANDRIAS, REGION 91', 'Baeza', 'Avilés', 'Andrea Guadalupe', '521', '9992807565', NULL, 'Reclutamientofimser@gmail.com', 3),
(134, 'INSTITUTO TECNOLÓGICO SUPERIOR DE ESCÁRCEGA', 'INSTITUCIÓN EDUCATIVA', '85 SN UNIDAD ESFUERZO Y TRABAJO, ESCÁRCEGA, CAMPECHE', 'CASTILLO', 'VALENZUELA', 'MARTIN DE LA CRUZ', NULL, '9827318469', NULL, 'vinculacion@itsescarcega.edu.mx', 3),
(136, 'Tecnología Digital Alpha', 'Desarrolladora de plataformas digitales', 'MZA 29, LT2, SELVAMAR, PLAYA DEL CARMEN', 'Alcazar', 'Castañeda', 'Senyaze Gabriela', NULL, '9842052850', NULL, 'salcazar@tecnodalpha.com', 2),
(137, 'INMO TR S.A. de C.V.', 'Construcción', 'SM 044 M 5 L 12 C. Aurora, Resid. Alborada, C.P. 77506', 'Gamboa', 'Sánchez', 'Consuelo Adriana', NULL, '9999009423', NULL, 'consuelogamboa@humble.mx', 3),
(138, 'Ingeniería biomédica Q. Roo', 'Servicios', 'Murillo #26 Lote 28 Mz-75 Smz. 321 Fracc. Villas del arte 77560', 'Rivera', 'Ordaz', 'Martha Beatriz', '998', '2149191', '000', 'sip58@hotmail.com', 2),
(139, 'International Jewelry Center & Outlet Shopping Mall', 'Producto y articulos', 'Blvd. Kukulcan S/N, Zona Hotelera, 77500 Cancún, Q.R.', 'Arias', 'Brindis', 'Jesica Cristel', NULL, '9981890097', NULL, 'rh@shoppingmallcancun.com', 3),
(140, 'rehabilitación cancun clínica', 'terapia física /rehabilitación', 'calle nichehabin y punta conoco', 'Lopez', 'Martin', 'Ruben', '052', '9982149435', NULL, 'rubenlopezfisio@hotmail.com', 2),
(141, 'Laboratorio de Análisis Clínicos Limed', 'Servicios', 'Laboratorio Limed, Avenida Nader 21 Supermanzana 2A, Cancún Quintana Roo77500, México', 'Trujeque', 'Canché', 'Aracelly', '998', '9988842399', NULL, 'aracelly@laboratoriolimed.com', 3),
(142, 'Ingenieria Biomédica', 'Servicios', 'Murrillo mz 75 n°16 lote 28 smz321', 'Riviera', 'Ordaz', 'Martha Beatriz', NULL, '9983707025', NULL, 'sip58@hotmail.com', 1),
(143, 'Ingeniería Biomédica', 'Mantenimiento y Gestión De Equipo Médico', 'Murillo No.26 Lote 28 Mza 75 Smz 321 Fracc.villas del arte', 'Rivera', 'Ordaz', 'Martha Beatriz', '052', '9982149191', '052', 'marthabeatriz@hotmail.com', 1),
(144, 'Fisica Medica y Seguridad Radiologica', 'Ventas al por mayoreo', 'Calle 70  Local C  col Cd Caucel, Mérida', 'Mendrano', 'Nahuat', 'Salma Viridiana', NULL, '9992807565', NULL, 'reclutamientofimser@gmail.com', 1),
(145, 'Clínica Karla', 'Mantenimiento', 'Mza 20 Lt 13 Col Pto Juarez Cancun', 'Rivero', 'Castillo', 'Carlos', '052', '9982241187', NULL, 'rivero.c.930@gmail.com', 3),
(146, 'EmedicalMX', 'Soporte de ingeniería', 'Reg. 97, Av. Tepich, Mza. 3 Lt. 70, #70 entre Av. Chichén Itza, Av. Andrés Q. Roo, Privada Residencial Cantabria', 'Solis', 'Un', 'Addy Zurisadai', '999', '1603403', NULL, 'admon@emedical.mx', 2),
(147, 'Ingeniería biomédica Q.Roo', 'Servicios', 'Murillo #26 Lote 28 Mz-75 smz.-321 Fracc. Villas del arte 77560 Cancún, México', 'Rivera', 'Ordaz', 'Martha Beatriz', '998', '2149191', '303', 'sip58@hotmail.com', 1),
(148, 'Centro Químico', 'Servicios', 'Av. Huayacán, Sm. 310, Mz. 141, Lt. 59, Fracc. Residencial Palmaris, Cancún, Q. Roo', 'Barragán', 'Prieto', 'Rocío del Carmen', '998', '3130544', '240', 'rh@centroquimico.com.mx', 3),
(149, 'E-MEDICAL MX', 'Soporte de Ingeniería', 'Región 97, Mza 3, Lote 70, Casa #70, Av. Tepich, Residencial Cantabria, entre Av. Chichen Itzá y Av. Andrés Quintana Roo, C.P. 77530', 'Solís', 'Un', 'Addy Zurisadai', '052', '9991603403', NULL, 'admon@emedical.mx', 2),
(150, 'Ingeniería Biomédica', 'Servicios', 'Murillo No. 26 Lt 28 Mz 75 SMz321 Fracc. Villas del arte', 'Carrillo', 'Díaz', 'Juan Arturo', NULL, '9982754514', NULL, 'sip.58@hotmail.com', 1),
(151, 'Palace Resorts', 'Servicios', 'KM 21, Carr. Tulum - Cancún, Puerto Morelos, Q.R.', 'Sandoval', 'Pech', 'Viviana', '521', '9981932010', '826', 'vsandoval@palaceresorts.com', 4),
(152, 'SENSIRA RESORT & SPA. RIVIERA MAYA', 'HOTELERIA', 'CARRETERA CANCUN - TULUM KM 27.5, BAHIA PETEMPICH', 'MEDINA', 'ARGAEZ', 'CECILIA', '998', '9988685460', '311', 'c.medina@sensiraresrts.com', 4),
(153, 'UNIVERSIDAD POLICTECNICA DE QUINTANA ROO', 'Educación', 'Av. Arco Bicentenario, Mza. 11, Lote 1119-33, SM. 255. Cancún, Quintana Roo, México. C.P. 77500', 'Chi', 'Keb', 'Georgina', '998', '9982831859', '141', 'rec.humanos@upqroo.edu.mx', 3),
(154, 'Clinica de terapia fisica', 'servicos educativos publicos', 'Av. arco bincentenario, mza. 11, lote 1119-33, sm 255, 77500', 'Chi', 'Keb', 'Georgina', '998', '9982831859', '141', 'rec.humanos@upqroo.edu.mx', 2),
(155, 'UPQROO', 'Servicios educativos públicos', 'Av. Arco Bincentenario, Mza. 11, Lote 1119-33 Sm 255. Cancún, Quintana Roo. C.P 77500', 'Chi', 'Keb', 'Georgina', '998', '2831859', '141', 'rec.humanos@upqroo.edu.mx', 4),
(156, 'Instituto Municipal de Desarrollo Administrativo e Innovación (IMDAI)', 'Dependencia de gobierno municipal', 'Sm 02 Mz 1 Lote 11 Andador 3 Local 1 Av.Nader', 'Luevano', 'Cataño', 'Mario Esteban', NULL, '9988812800', NULL, 'ventanillaunicabj@gmail.com', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas_del_proyecto`
--

CREATE TABLE `etapas_del_proyecto` (
  `id` int(11) NOT NULL,
  `descripcion_etapas` text DEFAULT NULL,
  `semana_inicial` date DEFAULT NULL,
  `semana_final` date DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `descripcion_competencias` text DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etapas_del_proyecto`
--

INSERT INTO `etapas_del_proyecto` (`id`, `descripcion_etapas`, `semana_inicial`, `semana_final`, `horas`, `descripcion_competencias`, `numero`) VALUES
(61, 'Análisis previo del sistema, análisis de requerimientos, establecimiento de tiempos y diseño de mockups', '2022-01-12', '2022-01-31', 80, 'Fase inicial del desarrollo', 1),
(62, 'Cambio de servidor', '2022-02-01', '2022-02-08', 30, 'Traslado del proyecto del antiguo servidor al nuevo servidor', 2),
(63, 'Desarrollo, pruebas y correcciones en entorno local', '2022-02-09', '2022-03-14', 280, 'Etapa de desarrollo local', 3),
(64, 'Implementación, corrección de errores y validación en entorno de producción', '2022-02-22', '2022-03-31', 135, 'implementación y validación de funcionalidades en servidor de producción', 4),
(65, 'Soporte técnico a usuarios', '2022-02-01', '2022-04-26', 75, 'Soporte a usuarios ante cualquier dificultad o error respecto al uso de la plataforma', 5),
(66, NULL, NULL, NULL, NULL, NULL, 6),
(67, NULL, NULL, NULL, NULL, NULL, 7),
(68, NULL, NULL, NULL, NULL, NULL, 8),
(69, NULL, NULL, NULL, NULL, NULL, 9),
(70, NULL, NULL, NULL, NULL, NULL, 10),
(71, NULL, NULL, NULL, NULL, NULL, 11),
(72, NULL, NULL, NULL, NULL, NULL, 12),
(73, NULL, NULL, NULL, NULL, NULL, 13),
(74, NULL, NULL, NULL, NULL, NULL, 14),
(75, NULL, NULL, NULL, NULL, NULL, 15),
(76, 'Reunion con el responsable del proyecto', '2022-01-03', '2022-01-07', 16, 'Reunion con el responsable del proyecto', 1),
(77, 'Recoleccion de requisitos', '2022-01-03', '2022-01-07', 30, 'Reunion con los trabajadores para la recoleccion de requisitos que tendra el software', 2),
(78, 'Especificación de requerimientos', '2022-01-03', '2022-01-07', 16, 'Realizar la especificación de requerimientos', 3),
(79, 'Elaboración del cronograma', '2022-01-10', '2022-01-14', 2, 'Elaboración del cronograma', 4),
(80, 'Diseño de los Wireframes', '2022-01-10', '2022-01-21', 20, 'Realizar el diseño de los Wireframes', 5),
(81, 'Diseño de la Base de Datos', '2022-01-24', '2022-01-28', 2, 'Elaboracion del diagrama para el diseño de la Base de Datos', 6),
(82, 'Diseño de tablas de la BD', '2022-02-01', '2022-02-04', 2, 'Creación de las tablas de la Base de Datos', 7),
(83, 'Elaboración de scripts de manipulación de la BD', '2022-02-07', '2022-02-11', 8, 'Desarrollo de scripts para la manipulación de la BD', 8),
(84, 'Creación de clases para el manejo y el acceso a la BD', '2022-02-14', '2022-02-25', 10, 'Desarrollo de clases para el manejo y el acceso a la BD con el sistema', 9),
(85, 'Codificación de la aplicación', '2022-03-01', '2022-04-01', 100, 'Codificación de clases para el manejo de la logica de la aplicación', 10),
(86, 'Desarrollo de la interfaz grafica', '2022-03-07', '2022-04-01', 100, 'Desarrollo de la interfaz grafica de usuario', 11),
(87, 'Correcciones de diseño', '2022-03-01', '2022-04-01', 80, 'Correciones en los errores de diseño del sistema', 12),
(88, 'Correcciones de bugs', '2022-03-17', '2022-04-01', 90, 'Correcciones de bugs', 13),
(89, 'Pruebas del sistema', '2022-03-17', '2022-04-01', 90, 'Realización de pruebas del sistema', 14),
(90, 'Mantenimiento del sistema', '2022-04-01', '2022-04-15', 70, 'Realizar el mantenimiento al sistema', 15),
(91, 'Análisis de requerimientos y Procesos', '2022-01-10', '2022-01-12', 40, 'Estudio de los proceso internos actuales en la empresa para crear un plan de optimización de los mismos', 1),
(92, 'Modelo y creación de base de datos', '2022-01-13', '2022-01-18', 80, 'Modelado de base de datos relacional ,creación de esta y desarrollo de procesos almacenados para las distintas funcionalidades del sistema', 2),
(93, 'Diseño de las interfaces graficas para el usuario', '2022-01-19', '2022-01-20', 40, 'Creación de propuestas de diseños  apoyado en mockups, para las distintas plantillas', 3),
(94, 'Creación de FrontEnd Plataforma de escritorio', '2022-01-21', '2022-02-04', 160, 'Creación de la parte visual del proyecto , con base a la propuesta de  diseño anteriormente expuesta', 4),
(95, 'Creación de BackEnd Plataforma de escritorio', '2022-02-21', '2022-02-28', 180, 'Desarrollo de las funciones ,peticiones relacionadas para la aplicacion , así como las respuestas  y las conexiones  de la base de datos con la aplicacion', 5),
(96, 'Pruebas unitarias y de seguridad', '2022-03-01', '2022-03-03', 40, 'Proceso de pruebas internas asyncronas a pruebas por parte del usuario para conocer la experiencia y solucionar problemas', 6),
(97, 'Corrección de errores', '2022-03-04', '2022-03-10', 80, 'Después de la recolección de errores ,se trabajaran en ellos para el correcto funcionamiento de la aplicacion', 7),
(98, 'Despliegue de plataforma', '2022-03-11', '2022-03-18', 20, 'Adaptación del entorno ,migración del entorno de pruebas a producción', 8),
(99, NULL, NULL, NULL, NULL, NULL, 9),
(100, NULL, NULL, NULL, NULL, NULL, 10),
(101, NULL, NULL, NULL, NULL, NULL, 11),
(102, NULL, NULL, NULL, NULL, NULL, 12),
(103, NULL, NULL, NULL, NULL, NULL, 13),
(104, NULL, NULL, NULL, NULL, NULL, 14),
(105, NULL, NULL, NULL, NULL, NULL, 15),
(106, 'Definición de modelo de negocio', '2022-01-14', '2022-01-27', 90, 'se realizaron las primeras reuniones tanto con el encargado del área de sistemas como con el director de estrategia grupo SAVAS para garantizar la viabilidad del proyecto', 1),
(107, 'Ingeniería de requerimientos', '2022-01-28', '2022-02-23', 171, 'se procedió al modelado del sistema. Esto es, la refinación de los requisitos obtenidos del Administrador, creación del diagrama de casos de uso y diseño de prototipos de la interfaz.', 2),
(108, 'desarrollo', '2022-02-23', '2022-04-07', 288, 'Desarrollar de esta aplicación usando herramientas multiplataforma. En concreto, elegí flutter debido a ser una tecnología muy reciente y estar respaldada por Google, la cual lo promocionaba como un Framework', 3),
(109, 'pruebas de la aplicación', '2022-04-08', '2022-04-20', 51, 'se definió el plan de pruebas de la aplicación y se escribieron las pruebas unitarias y de interfaz correspondientes.', 4),
(110, NULL, NULL, NULL, NULL, NULL, 5),
(111, NULL, NULL, NULL, NULL, NULL, 6),
(112, NULL, NULL, NULL, NULL, NULL, 7),
(113, NULL, NULL, NULL, NULL, NULL, 8),
(114, NULL, NULL, NULL, NULL, NULL, 9),
(115, NULL, NULL, NULL, NULL, NULL, 10),
(116, NULL, NULL, NULL, NULL, NULL, 11),
(117, NULL, NULL, NULL, NULL, NULL, 12),
(118, NULL, NULL, NULL, NULL, NULL, 13),
(119, NULL, NULL, NULL, NULL, NULL, 14),
(120, NULL, NULL, NULL, NULL, NULL, 15),
(121, 'Análisis de Requerimientos', '2022-01-03', '2022-01-07', 40, 'Estudio de los proceso internos actuales en la empresa\r\npara crear un plan de optimización de los mismos.', 1),
(122, 'Modelado y creación de base de datos', '2022-01-11', '2022-01-21', 80, 'Modelado de base de datos relacional, creación de esta y\r\ndesarrollo de procesos almacenados para las distintas\r\nfuncionalidades del sistema', 2),
(123, 'Diseño de la interfaz de usuario', '2022-01-24', '2022-01-26', 20, 'Creación de propuesta de diseño, apoyado en mockups,\r\npara las distintas pantallas del usuario', 3),
(124, 'Desarrollo del FrontEnd plataforma web', '2022-01-26', '2022-02-16', 120, 'Creación de la parte visual del proyecto, con base a la\r\npropuesta de diseño anteriormente expuesta', 4),
(125, 'Desarrollo Backend plataforma web', '2022-02-16', '2022-03-16', 160, 'Desarrollo de las funciones, peticiones realizadas por la\r\naplicación, así como las respuestas y la conexión de la base\r\nde datos con la aplicación', 5),
(126, 'Implementación de seguridad', '2022-03-16', '2022-03-30', 80, 'Implementación de diferentes medidas de seguridad con el\r\nfin de proteger información y procesos de la empresa.', 6),
(127, 'Pruebas unitarias y de usuario', '2022-03-30', '2022-04-06', 40, 'Proceso de pruebas internas asíncronas a pruebas por\r\nparte del usuario para conocer la experiencia y solucionar\r\nproblemas', 7),
(128, 'Corrección de errores', '2022-04-06', '2022-04-13', 40, 'Después de la recopilación de errores, se trabajarán en\r\nellos para el correcto funcionamiento de la aplicación', 8),
(129, 'Despliegue de la plataforma', '2022-04-13', '2022-04-15', 20, 'Adaptación del entorno, migración del entorno de pruebas\r\na producción', 9),
(130, NULL, NULL, NULL, NULL, NULL, 10),
(131, NULL, NULL, NULL, NULL, NULL, 11),
(132, NULL, NULL, NULL, NULL, NULL, 12),
(133, NULL, NULL, NULL, NULL, NULL, 13),
(134, NULL, NULL, NULL, NULL, NULL, 14),
(135, NULL, NULL, NULL, NULL, NULL, 15),
(136, 'Realizar análisis de requisitos', '2022-01-12', '2022-01-19', 40, 'Se tuvo una entrevista con el cliente y se anotaron los requisitos que se requieren\r\npara la elaboración de este proyecto', 1),
(137, 'Estudiar laravel y escoger \r\ntecnologías', '2022-01-20', '2022-01-26', 40, 'Estudiar laravel y se escogió los frameworks, plugins, librerías para el sitio web', 2),
(138, 'Creación de el mockup', '2022-01-27', '2022-01-02', 40, 'Realizar los mockups de el sitio web', 3),
(139, 'Comenzar el login y pagina principal', '2022-02-03', '2022-02-09', 40, 'Comenzar la codificación del sitio web, el login, y pagina de inicio', 4),
(140, 'Desarrollar interfaz grafica\r\n del alumno', '2022-02-10', '2022-02-23', 100, 'Realizar la interfaz del alumno, donde este podrá llenar y descargar, también podrá\r\n subir los documentos para su revisión', 5),
(141, 'Desarrollar las funciones del \r\nalumno', '2022-02-24', '2022-03-09', 100, 'Desarrollo de las funciones antes mencionadas', 6),
(142, 'Desarrollar interfaz grafica\r\n del administrador', '2022-03-10', '2022-03-23', 100, 'Realizar la interfaz del administrador, donde este podrá ver los documentos subidos \r\npor el usuario y los alumnos registrados', 7),
(143, 'Desarrollar las funciones del \r\nadministrador', '2022-03-24', '2022-04-07', 100, 'Desarrollar funciones para que el usuario pueda aceptar, agregar observaciones y ver pdf, ver alumnos eliminar alumnos, etc.', 8),
(144, 'Pruebas y realizar documentación', '2022-04-08', '2022-04-15', 40, 'Reealizar pruebas y la documentacion de todo el dessarrollo', 9),
(145, NULL, NULL, NULL, NULL, NULL, 10),
(146, NULL, NULL, NULL, NULL, NULL, 11),
(147, NULL, NULL, NULL, NULL, NULL, 12),
(148, NULL, NULL, NULL, NULL, NULL, 13),
(149, NULL, NULL, NULL, NULL, NULL, 14),
(150, NULL, NULL, NULL, NULL, NULL, 15),
(151, 'Planificación del Proyecto', '2022-01-20', '2022-02-05', 160, 'Realización de investigación para la planificación de una correcta gestión del proyecto (Hipótesis, Justificación, Cronograma, Diagrama de funcionamiento, Materiales, Presupuesto).', 1),
(152, 'Desarrollos del Sistema', '2022-02-08', '2022-02-26', 160, 'Compra de componentes, Desarrollo de App Web y base de datos, diseño de circuito.', 2),
(153, 'Integración de sistemas', '2022-03-01', '2022-03-26', 160, 'Funcionamiento correcto de servicios web(App Web y base de datos), Fabricación de tarjeta electrónica, pruebas de funcionalidad, integración de App Web con circuito electrónico.', 3),
(154, 'Pruebas de Funcionamiento', '2022-03-29', '2022-04-20', 160, 'Pruebas de medición de los sensores, registros de datos, pruebas de prototipo en laboratorio y en el Hospital.', 4),
(155, NULL, NULL, NULL, NULL, NULL, 5),
(156, NULL, NULL, NULL, NULL, NULL, 6),
(157, NULL, NULL, NULL, NULL, NULL, 7),
(158, NULL, NULL, NULL, NULL, NULL, 8),
(159, NULL, NULL, NULL, NULL, NULL, 9),
(160, NULL, NULL, NULL, NULL, NULL, 10),
(161, NULL, NULL, NULL, NULL, NULL, 11),
(162, NULL, NULL, NULL, NULL, NULL, 12),
(163, NULL, NULL, NULL, NULL, NULL, 13),
(164, NULL, NULL, NULL, NULL, NULL, 14),
(165, NULL, NULL, NULL, NULL, NULL, 15),
(181, 'Realizar un analisis de las necesidades del departamento para \r\ndeterminar los puntos de mejora', '2022-01-19', '2022-01-26', 36, 'Capacidad de interpretación de datos reales. Trabajo en \r\nequipo', 1),
(182, 'Crear propuesta', '2022-01-26', '2022-01-02', 36, 'Conocimiento del proceso de elaboración de un  documento oficial para presentar un proyecto. Trabajo en equipo', 2),
(183, 'Creación de formularios para recabar datos', '2022-02-02', '2022-02-09', 36, 'Fácil manejo y uso de la plataforma de Formularios de Google. Trabajo en equipo', 3),
(184, 'Presentación oficial de la propuesta a los departamentos involucrados', '2022-02-09', '2022-02-16', 36, 'Competencia sobre la presentación personal, manejo de lenguaje formal y uso de aplicaciones para la presentación del proyecto. Trabajo en equipo', 4),
(185, 'Capacitación del uso de formularios', '2022-02-16', '2022-02-23', 36, 'Técnica de fácil uso de la palabra y transmisión a oyentes. Trabajo en equipo', 5),
(186, 'Implementación de los formularios', '2022-02-23', '2022-02-02', 36, 'Conocimientos sobre la aplicación de la plataforma de \"Google Forms\". Trabajo en equipo', 6),
(187, 'Diseño de las vistas del software de PICR', '2022-03-02', '2022-03-09', 36, 'Desenvolvimiento en el uso de la plataforma \"Balsamiq\". Trabajo en equipo', 7),
(188, 'Programación de PICR en Visual Studio', '2022-02-16', '2022-03-23', 180, 'Uso y manejo de Visual Studio y conocimientos de programación en lenguaje c#. Trabajo en equipo', 8),
(189, 'Presentación de PICR a los departamentos involucrados', '2022-03-23', '2022-03-30', 36, 'Competencia sobre la presentación personal, manejo de lenguaje formal y uso de aplicaciones para la presentación del proyecto. Trabajo en equipo', 9),
(190, 'Mejoramiento de errores previos', '2022-03-30', '2022-04-13', 72, 'Uso y manejo de Visual Studio y conocimientos de programación en lenguaje c#. Trabajo en equipo', 10),
(191, 'Presentación de correcciones', '2022-04-13', '2022-04-20', 36, 'Competencia sobre la presentación personal, manejo de lenguaje formal y uso de aplicaciones para la presentación de correcciones. Trabajo en equipo', 11),
(192, 'Capacitación para el uso de PICR', '2022-04-20', '2022-04-27', 36, 'Técnica de fácil uso de la palabra y transmisión a oyentes. Trabajo en equipo', 12),
(193, 'Implementación del programa PICR en el Hospital Galenia', '2022-05-04', '2022-05-11', 36, 'Conocimientos sobre Visual Studio. Trabajo en equipo', 13),
(194, 'Evaluación y desenvolvimiento del software PICR en las diferentes  áreas', '2022-05-04', '2022-05-18', 72, 'Capacidad de evaluar el desenvolvimiento satisfactorio del programa. Trabajo en equipo', 14),
(195, NULL, NULL, NULL, NULL, NULL, 15),
(196, 'Realizar un analisis del departamento para determinar los puntos de mejora', '2022-01-17', '2022-01-24', 30, 'Capacidad de interpretar datos reales y trabajo en equipo.', 1),
(197, 'Creación de propuesta', '2022-01-24', '2022-01-31', 30, 'Conocimiento del proceso de elaboración de un documento oficial para presentar un proyecto y trabajo en equipo.', 2),
(198, 'Creación de formularios para la recabacion de datos', '2022-01-31', '2022-02-07', 30, 'Utilizar herramientas de google con relación a registro de datos  en tiempo real y trabajo en equipo.', 3),
(199, 'Presentación oficial de la propuesta a los departamentos', '2022-02-07', '2022-02-14', 30, 'Manejo de herramientas de presentación digital, comunicación formal y trabajo en equipo.', 4),
(200, 'Capacitación del uso de los formularios', '2022-02-14', '2022-02-21', 30, 'Fácil lenguaje de comunicación en el uso y manejo de formularios de google y trabajo en equipo.', 5),
(201, 'Implementación de formularios', '2022-02-21', '2022-02-28', 30, 'Ejecución y verificación de registros de datos de los formularios y trabajar en equipo.', 6),
(202, 'Diseño de las vistas del software de PICR', '2022-02-28', '2022-03-07', 30, 'Manejo de aplicaciones de diseño de interfaz digital y trabajo en equipo.', 7),
(203, 'Programación de PICR', '2022-02-14', '2022-03-21', 150, 'Utilización del software de Visual Studio, programación en lenguaje perteneciente a Visual y trabajo en equipo.', 8),
(204, 'Presentación de PICR', '2022-03-21', '2022-03-28', 30, 'Fácil lenguaje de comunicación en el uso y manejo del programa digital y trabajo en equipo.', 9),
(205, 'Mejoramiento de errores previos', '2022-03-28', '2022-04-11', 60, 'Corregir los datos erroneos marcados y trabajo en equipo.', 10),
(206, 'Presentación de correcciones', '2022-04-11', '2022-04-18', 30, 'Fácil lenguaje de comunicación en el uso y manejo del programa digital presentando las mejoras y trabajo en equipo.', 11),
(207, 'Capacitación para el uso de PICR', '2022-04-18', '2022-04-25', 30, 'Fácil lenguaje de comunicación en el uso y manejo del programa digital y trabajo en equipo.', 12),
(208, 'Implementación del programa PICR', '2022-04-25', '2022-05-02', 30, 'Ejecución y verificación de registros de datos del programa digital y trabajo en equipo.', 13),
(209, 'Evaluación del sistema', '2022-05-02', '2022-05-16', 60, 'Capacidad de evaluar el desenvolvimiento satisfactorio del programa y trabajo en equipo.', 14),
(210, NULL, NULL, NULL, NULL, NULL, 15),
(211, 'Inducción y Capacitación', '2022-01-17', '2022-01-21', 36, 'El alumno tendrá los conocimientos necesarios y la información relevante de la empresa.', 1),
(212, 'Recorrido del hospital e introducción a los equipos médicos', '2022-01-24', '2022-01-31', 36, 'El alumno tendrá la capacidad de reconocer los diferentes equipos  y las área del hospital así como la manera correcta de portar el equipo necesario para ingresar.', 2),
(213, 'Definición del proyecto', '2022-02-01', '2022-02-04', 24, 'El alumno definirá el proyecyo según las necesidades del hospital y el departamento de Ing. Biomédica', 3),
(214, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-02-01', '2022-02-18', 45, 'El alumno será capaz de realizar mantemientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 4),
(215, 'Recopilación de la información', '2022-02-07', '2022-02-11', 30, 'El alumno deberá realizar una investigación profunda que será de ayuda para la realización del manual de procedimientos.', 5),
(216, 'Selección de la información', '2022-02-14', '2022-02-18', 25, 'El alumno será capaz y deberá seleccionar la información relevante que servirá de apoyo y consulta.', 6),
(217, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-02-21', '2022-03-11', 45, 'El alumno será capaz de realizar mantemientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 7),
(218, 'Realización del machote para elaboración del manual', '2022-03-01', '2022-03-04', 36, 'El alumno realizará un borrador del manual de procedimientos que se usará como guía para su elaboración definitiva.', 8),
(219, 'Realización del manual', '2022-03-07', '2022-03-25', 98, 'El alumno será capaz de realizar el manual de procedimientos con los conocimientos previamente obtenidos.', 9),
(220, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-03-14', '2022-03-31', 45, 'El alumno será capaz de realizar mantemientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 10),
(221, 'Presentación del manual de procedimientos', '2022-03-28', '2022-03-31', 36, 'El alumno presentará el manual de procedimientos para realizar una explicación detallada de este.', 11),
(222, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-04-01', '2022-04-23', 45, 'El alumno será capaz de realizar mantemientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 12),
(223, 'Correcciones del manual', '2022-04-01', '2022-04-08', 24, 'El almuno deberá realizar las correcciones pertinentes si así se requiere.', 13),
(224, 'Presentación y puesta en marcha', '2022-04-01', '2022-04-15', 45, 'El alumno realizará una segunda presentación del manual de procedimientos final  y se determinará la puesta en marcha.', 14),
(225, 'Evaluación del desempeño del manual', '2022-04-11', '2022-04-23', 30, 'Se evaluará el desempeño del manual de procedimientos.', 15),
(226, 'Planificación', '2022-02-10', '2022-02-24', 13, 'Analizar la necesidad y planificar la forma en que se \r\nbrindará una propuesta de solución.', 1),
(227, 'Arquitectura', '2022-02-25', '2022-03-10', 13, 'Diseñar la forma de la estructura del proyecto\r\nanalizando las tecnologías de programación.', 2),
(228, 'Diseño de Vistas', '2022-03-11', '2022-03-24', 13, 'Crear las bases de las vistas para el usuario\r\nfinal.', 3),
(229, 'Codificación', '2022-03-25', '2022-04-07', 13, 'Desarrollar el proyecto.', 4),
(230, 'Pruebas', '2022-04-08', '2022-04-14', 16, 'Probar y verificar el proyecto creando test para\r\nla corrección de errores.', 5),
(231, NULL, NULL, NULL, NULL, NULL, 6),
(232, NULL, NULL, NULL, NULL, NULL, 7),
(233, NULL, NULL, NULL, NULL, NULL, 8),
(234, NULL, NULL, NULL, NULL, NULL, 9),
(235, NULL, NULL, NULL, NULL, NULL, 10),
(236, NULL, NULL, NULL, NULL, NULL, 11),
(237, NULL, NULL, NULL, NULL, NULL, 12),
(238, NULL, NULL, NULL, NULL, NULL, 13),
(239, NULL, NULL, NULL, NULL, NULL, 14),
(240, NULL, NULL, NULL, NULL, NULL, 15),
(241, 'Evaluación de sistemas de servicio social (SISPP) y tutorías (SAES), de los cuales pueden acceder el personal administrativo y estudiantes de la universidad del caribe;', '2022-01-24', '2022-02-14', 48, '*Analisis del funcionamiento de sistemas.\r\n*Extracción de requisitos funcionales y no funcionales.\r\n*Creación de documentación respecto a requerimientos de \r\nusuario y requerimientos de software (de acuerdo a estándar \r\nIEEE 830)', 1),
(242, 'Planificación y trazado de la estructura interna que debe tener cada uno de los sistemas, módulos; los cuales se escriben en la siguiente etapa.', '2022-02-15', '2022-03-07', 66, '*Desarrollo de diagramas UML', 2),
(243, 'Diseño de prototipos con el objetivo de homologar las interfaces; lo cual conlleva el rediseño de pestañas: home, empresas, area de desempeño, estudiantes.', '2022-03-08', '2022-03-31', 96, 'Maquetación de sistemas con uso de Bootstrap y SASS.', 3),
(244, NULL, NULL, NULL, NULL, NULL, 4),
(245, NULL, NULL, NULL, NULL, NULL, 5),
(246, NULL, NULL, NULL, NULL, NULL, 6),
(247, NULL, NULL, NULL, NULL, NULL, 7),
(248, NULL, NULL, NULL, NULL, NULL, 8),
(249, NULL, NULL, NULL, NULL, NULL, 9),
(250, NULL, NULL, NULL, NULL, NULL, 10),
(251, NULL, NULL, NULL, NULL, NULL, 11),
(252, NULL, NULL, NULL, NULL, NULL, 12),
(253, NULL, NULL, NULL, NULL, NULL, 13),
(254, NULL, NULL, NULL, NULL, NULL, 14),
(255, NULL, NULL, NULL, NULL, NULL, 15),
(256, 'Recopilación de información', '2022-02-15', '2022-02-22', 21, 'Se realizara la lista de descripción de los componentes y el cronograma\r\nde desarrollo.', 1),
(257, 'Elaboración de evaluación', '2022-02-24', '2022-02-28', 15, 'Se realizara el levantamiento de servicios de Maquinas Virtuales y\r\npruebas de funcionamiento en la red local de la empresa', 2),
(258, 'Análisis de resultado', '2022-03-03', '2022-03-07', 18, 'Se analizar la infraestructura y monitoreo de VMware en el entorno de\r\nproducción.', 3),
(259, 'Elaboración de manual', '2022-03-09', '2022-03-14', 18, 'Se realizara manuales de uso y mantenimiento así como el procedimiento\r\nde apagado y encendido de los equipos físico y virtuales.', 4),
(260, 'Crear y proporcionar usuarios', '2022-03-16', '2022-04-28', 36, 'Se realizara usuarios administrador y usuario de lecturas con el fin de\r\ncontrolar los accesos.', 5),
(261, 'Implementación de manual', '2022-03-30', '2022-04-02', 12, 'Se entregan manuales, planos, y topología a la empresa del uso y\r\noperación', 6),
(262, NULL, NULL, NULL, NULL, NULL, 7),
(263, NULL, NULL, NULL, NULL, NULL, 8),
(264, NULL, NULL, NULL, NULL, NULL, 9),
(265, NULL, NULL, NULL, NULL, NULL, 10),
(266, NULL, NULL, NULL, NULL, NULL, 11),
(267, NULL, NULL, NULL, NULL, NULL, 12),
(268, NULL, NULL, NULL, NULL, NULL, 13),
(269, NULL, NULL, NULL, NULL, NULL, 14),
(270, NULL, NULL, NULL, NULL, NULL, 15),
(271, 'Investigación del origen y características del SARS - CoV- 2', '2022-01-17', '2022-02-18', 40, 'Interpretar bioprocesos, considerando tendencias de logros y hallazgos biotecnológicos, análisis de procesos productivos, uso de metodologías y técnicas básicas de laboratorio, así como la normatividad vigente, para garantizar la calidad de los biopr', 1),
(272, 'Descripción del mecanismo de infección, enzimas virales y ciclo vital del SARS - CoV- 2', '2022-02-21', '2022-03-25', 40, 'Interpretar bioprocesos, considerando tendencias de logros y hallazgos biotecnológicos, análisis de procesos productivos, uso de metodologías y técnicas básicas de laboratorio, así como la normatividad vigente, para garantizar la calidad de los biopr', 2),
(273, 'Descripción  del impacto, importancia y repercusiones del SARS - CoV- 2 a la ciencia en México', '2022-03-28', '2022-04-22', 40, 'Interpretar bioprocesos, considerando tendencias de logros y hallazgos biotecnológicos, análisis de procesos productivos, uso de metodologías y técnicas básicas de laboratorio, así como la normatividad vigente, para garantizar la calidad de los biopr', 3),
(274, NULL, NULL, NULL, NULL, NULL, 4),
(275, NULL, NULL, NULL, NULL, NULL, 5),
(276, NULL, NULL, NULL, NULL, NULL, 6),
(277, NULL, NULL, NULL, NULL, NULL, 7),
(278, NULL, NULL, NULL, NULL, NULL, 8),
(279, NULL, NULL, NULL, NULL, NULL, 9),
(280, NULL, NULL, NULL, NULL, NULL, 10),
(281, NULL, NULL, NULL, NULL, NULL, 11),
(282, NULL, NULL, NULL, NULL, NULL, 12),
(283, NULL, NULL, NULL, NULL, NULL, 13),
(284, NULL, NULL, NULL, NULL, NULL, 14),
(285, NULL, NULL, NULL, NULL, NULL, 15),
(286, 'Recorrido en el Hospital', '2022-01-15', '2022-03-15', 120, 'Realizar recorridos del hospital para verificar que todas las áreas se encuentren en orden', 1),
(287, 'Capacitacion de Ventilador Neonatal', '2022-02-01', '2022-02-03', 15, 'Capacitacion dada por un provedor', 2),
(288, 'Mantenimiento de camillas', '2022-02-07', '2022-02-11', 15, 'Mantenimiento de camillas de acuerdo al inventario de IB', 3),
(289, 'Mantenimiento de camas', '2022-02-14', '2022-02-18', 19, 'Mantenimiento preventivo de camas de acuerdo al inventario de IB', 4),
(290, 'Matenimineto monitor de signos vitales', '2022-02-14', '2022-02-21', 30, 'Mantenimiento preventivo de MSV de acuerdo al inventario de IB', 5),
(291, 'Capacitación electrocardiograma', '2022-03-22', '2022-02-28', 30, 'Realizar capacitacion al equipo de enfermería del equipo de electrocardiograma', 6),
(292, NULL, NULL, NULL, NULL, NULL, 7),
(293, NULL, NULL, NULL, NULL, NULL, 8),
(294, NULL, NULL, NULL, NULL, NULL, 9),
(295, NULL, NULL, NULL, NULL, NULL, 10),
(296, NULL, NULL, NULL, NULL, NULL, 11),
(297, NULL, NULL, NULL, NULL, NULL, 12),
(298, NULL, NULL, NULL, NULL, NULL, 13),
(299, NULL, NULL, NULL, NULL, NULL, 14),
(300, NULL, NULL, NULL, NULL, NULL, 15),
(301, 'Análisis de requerimientos del Sistema AdminOLT', '2022-02-02', '2022-02-15', 90, 'Analizar los requerimientos necesarios para la creación de la web y diseño de la pagina y sus secciones', 1),
(302, 'Creación de la Facturación Electrónica', '2022-02-16', '2022-03-05', 189, 'Creación del todo el sistema de facturación electrónica al sitio web', 2),
(303, 'Pruebas de las tareas y la web en general', '2022-03-07', '2022-03-31', 141, 'Realizar pruebas antes de que se integre a producción', 3),
(304, 'Integración a Producción', '2022-04-01', '2022-04-21', 135, 'Se sube a producción para que las empresas puedan usar la nueva integración', 4),
(305, 'Documentación para la finalización', '2022-04-22', '2022-04-28', 45, 'Desarrollar los manuales de usuario y técnico de la web', 5),
(306, NULL, NULL, NULL, NULL, NULL, 6),
(307, NULL, NULL, NULL, NULL, NULL, 7),
(308, NULL, NULL, NULL, NULL, NULL, 8),
(309, NULL, NULL, NULL, NULL, NULL, 9),
(310, NULL, NULL, NULL, NULL, NULL, 10),
(311, NULL, NULL, NULL, NULL, NULL, 11),
(312, NULL, NULL, NULL, NULL, NULL, 12),
(313, NULL, NULL, NULL, NULL, NULL, 13),
(314, NULL, NULL, NULL, NULL, NULL, 14),
(315, NULL, NULL, NULL, NULL, NULL, 15),
(316, 'Programa de capacitación', '2022-01-24', '2022-02-04', 50, 'Se adquieren conocimientos de las funciones que desarrolla el área biomedica', 1),
(317, 'Gestión de equipo medico', '2022-02-07', '2022-02-28', 100, 'Que el personal médico aprenda  a identificar los equipos propios y acomodatos', 2),
(318, 'Capacitación de desfibrilacion', '2022-03-01', '2022-03-11', 100, 'Conocer las partes del desfibrilacion', 3),
(319, 'Capacitación de autoclave', '2022-03-14', '2022-03-31', 200, 'Se conozcan las partes del autoclave y su funcionamiento', 4),
(320, 'Capacitación de torre laparoscopia y mesa quirúrgica', '2022-04-01', '2022-04-15', 150, 'Conocer los movimientos, configuración y aditamentos del equipo', 5),
(321, NULL, NULL, NULL, NULL, NULL, 6),
(322, NULL, NULL, NULL, NULL, NULL, 7),
(323, NULL, NULL, NULL, NULL, NULL, 8),
(324, NULL, NULL, NULL, NULL, NULL, 9),
(325, NULL, NULL, NULL, NULL, NULL, 10),
(326, NULL, NULL, NULL, NULL, NULL, 11),
(327, NULL, NULL, NULL, NULL, NULL, 12),
(328, NULL, NULL, NULL, NULL, NULL, 13),
(329, NULL, NULL, NULL, NULL, NULL, 14),
(330, NULL, NULL, NULL, NULL, NULL, 15),
(331, 'Investigacion sobre los temas adecuados para la gestion de inventario', '2022-01-12', '2022-02-04', 95, 'Investigar y analizar los temas para la correcta gestión', 1),
(332, 'Inventario de los equipos en las instalaciones', '2022-02-07', '2022-03-01', 142, 'Estructurar la cantidad de equipos por áreas del hospital', 2),
(333, 'Investigacion de los equipos conforme a sus normas', '2022-03-23', '2022-04-01', 95, 'Descripción detallada de dicho equipo a investigar, número de serie, marca, etc', 3),
(334, 'Implementacion de los materiales requeridos para la correcta administración', '2022-04-03', '2022-04-15', 142, 'Conseguir los materiales para la impregnar la investigacion en papeleo de elementos de archivado', 4),
(335, 'Entrega de inventario archivado e implementado de etiquetado', '2022-04-15', '2022-04-26', 126, 'Hacer entrega del producto final de gestionamiento de los equipos', 5),
(336, NULL, NULL, NULL, NULL, NULL, 6),
(337, NULL, NULL, NULL, NULL, NULL, 7),
(338, NULL, NULL, NULL, NULL, NULL, 8),
(339, NULL, NULL, NULL, NULL, NULL, 9),
(340, NULL, NULL, NULL, NULL, NULL, 10),
(341, NULL, NULL, NULL, NULL, NULL, 11),
(342, NULL, NULL, NULL, NULL, NULL, 12),
(343, NULL, NULL, NULL, NULL, NULL, 13),
(344, NULL, NULL, NULL, NULL, NULL, 14),
(345, NULL, NULL, NULL, NULL, NULL, 15),
(346, 'Inducción y Capacitación', '2022-01-17', '2022-01-21', 36, 'El alumno tendrá los conocimientos necesarios y la información relevante de la empresa.', 1),
(347, 'Recorrido del hospital e introducción a los equipos médicos', '2022-01-24', '2022-01-31', 36, 'El alumno tendrá la capacidad de reconocer los diferentes equipos y las áreas del hospital así como la manera correcta de portar el equipo necesario para ingresar.', 2),
(348, 'Definición del proyecto', '2022-02-01', '2022-02-04', 24, 'El alumno definirá el proyecto según las necesidades del hospital y el departamento de Ing. Biomédica', 3),
(349, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-02-01', '2022-02-18', 45, 'El alumno será capaz de realizar mantenimientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 4),
(350, 'Recopilación de la información', '2022-02-07', '2022-02-11', 30, 'El alumno deberá realizar una investigación profunda que será de ayuda para la realización del manual de procedimientos.', 5),
(351, 'Selección de la información', '2022-02-14', '2022-02-18', 25, 'El alumno será capaz y deberá seleccionar la información relevante que servirá de apoyo y consulta.', 6),
(352, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-02-21', '2022-03-11', 45, 'El alumno será capaz de realizar mantenimientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 7),
(353, 'Realización del machote para elaboración del manual', '2022-03-01', '2022-03-04', 36, 'El alumno realizará un borrador del manual de procedimientos que se usará como guía para su elaboración definitiva.', 8),
(354, 'Realización del manual', '2022-03-07', '2022-03-25', 98, 'El alumno será capaz de realizar el manual de procedimientos con los conocimientos previamente obtenidos.', 9),
(355, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-03-14', '2022-03-31', 45, 'El alumno será capaz de realizar mantenimientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 10),
(356, 'Presentación del manual de procedimientos', '2022-03-28', '2022-03-31', 36, 'El alumno presentará el manual de procedimientos para realizar una explicación detallada de este.', 11),
(357, 'Actividades extras (Mantenimientos, recorridos rutinarios, pruebas, documentación, etc. )', '2022-04-01', '2022-04-23', 45, 'El alumno será capaz de realizar mantenimientos preventivos y correctivos baja supervisión, además de realizar la documentación necesaria de evidencia.', 12),
(358, 'Correcciones del manual', '2022-04-01', '2022-04-08', 24, 'El alumno deberá realizar las correcciones pertinentes si así se requiere.', 13),
(359, 'Presentación y puesta en marcha', '2022-04-01', '2022-04-15', 45, 'El alumno realizará una segunda presentación del manual de procedimientos final y se determinará la puesta en marcha.', 14),
(360, 'Evaluación del desempeño del manual', '2022-04-11', '2022-04-23', 30, 'Se evaluará el desempeño del manual de procedimientos.', 15),
(361, 'Integración', '2022-01-24', '2022-04-28', 26, 'Capacitación sobre los equipos médicos más comunes en el hospital, errores comunes, limpieza y  mantenimiento.', 1),
(362, 'Investigación fichas técnicas, y áreas de hospital', '2022-01-31', '2022-02-04', 16, 'Obtención de fichas técnicas de los equipos médicos del hospital, investigación sobre normas de las distintas áreas del hospital, así como familiarización con las mismas.', 2),
(363, 'Mantenimiento preventivo a equipo médico', '2022-02-07', '2022-02-11', 22, 'En esta semana se realiza mantenimiento preventivo a diversos equipos médicos, así como un correctivo a un ventilador mecánico.', 3),
(364, 'Realización de etiqueta de mantenimiento', '2022-02-14', '2022-02-18', 16, 'Se realiza el formato de las etiquetas de mantenimiento , así como la investigación para la impresión de las mismas.', 4),
(365, 'Realización del formato de vales de salida, y baja', '2022-02-21', '2022-02-26', 16, 'Se realiza el formato que se utilizará en las proximas salidas y dadas de baja de equipo médico.', 5),
(366, 'Realización de formato de entrada , mtto. a camillas', '2022-02-28', '2022-03-04', 16, 'Se realiza el formato de entrada de equipo medico, asi como la reparación de diversas camillas, y estar a cargo por una tarde sobre la gestión de la salida de una camilla', 6),
(367, 'check list a Maquina de anestesia sin supervisión aparente', '2022-03-07', '2022-03-11', 12, 'chequeo de una maquina de anestesia sin la ayuda de mi asesor externo, concluyendo con un buen trabajo y evaluación exitosa por parte de mi supervisora', 7),
(368, NULL, NULL, NULL, 0, NULL, 8),
(369, NULL, NULL, NULL, NULL, NULL, 9),
(370, NULL, NULL, NULL, NULL, NULL, 10),
(371, NULL, NULL, NULL, NULL, NULL, 11),
(372, NULL, NULL, NULL, NULL, NULL, 12),
(373, NULL, NULL, NULL, NULL, NULL, 13),
(374, NULL, NULL, NULL, NULL, NULL, 14),
(375, NULL, NULL, NULL, NULL, NULL, 15),
(376, 'Investigación de la NOM-210-SSA1-2014 Apéndice A', '2022-01-17', '2022-01-28', 30, '1.2. Planear bioprocesos a escala ensayo, mediante técnicas analíticas oficiales, manuales, técnicas básicas de laboratorio y microbiología , manejo de los recursos, así como la normatividad aplicable, para obtener bioproductos de calidad', 1),
(377, 'Investigación de las tecnicas de análisis y procesamiento de la\r\nmuestra', '2022-01-31', '2022-02-11', 30, '2. Coordinar bioprocesos, con base en la utilización de insumos químicos y biológicos, material y equipo de laboratorio, técnicas de modelado, escalamiento y análisis instrumental, me todos de control y de desarrollo de personal', 2),
(378, 'Etapas de enriquecimiento bacteriano en la muestra', '2022-02-14', '2022-02-25', 30, '2. Coordinar bioprocesos, con base en la utilización de insumos químicos y biológicos, material y equipo de laboratorio, técnicas de modelado, escalamiento y análisis instrumental, me todos de control y de desarrollo de personal', 3),
(379, 'Etapas de confirmación y pruebas bioquímicas', '2022-02-28', '2022-03-11', 30, '1.2. Planear bioprocesos a escala ensayo, mediante técnicas analíticas oficiales, manuales, técnicas básicas de laboratorio y microbiología , manejo de los recursos, así como la normatividad aplicable, para obtener bioproductos de calidad', 4),
(380, 'Interpretación de los resultados', '2022-03-14', '2022-03-25', 30, '2.2. Controlar bioprocesos, a través de técnicas de análisis, monitoreo y diagnóstico, me todos estadísticos, parámetros e indicadores de control, así como procesos de calidad, técnicas de detección y desarrollo de la capacitación', 5),
(381, NULL, NULL, NULL, NULL, NULL, 6),
(382, NULL, NULL, NULL, NULL, NULL, 7),
(383, NULL, NULL, NULL, NULL, NULL, 8),
(384, NULL, NULL, NULL, NULL, NULL, 9),
(385, NULL, NULL, NULL, NULL, NULL, 10),
(386, NULL, NULL, NULL, NULL, NULL, 11),
(387, NULL, NULL, NULL, NULL, NULL, 12),
(388, NULL, NULL, NULL, NULL, NULL, 13),
(389, NULL, NULL, NULL, NULL, NULL, 14),
(390, NULL, NULL, NULL, NULL, NULL, 15),
(391, 'Cálculo de cuotas obreras IMSS.', '2022-01-17', '2022-01-29', 96, 'El alumno obtiene los conocimientos del proceso de elaboración de cuotas obreras IMSS.', 1),
(392, 'Cálculo de cuotas patronales INFONAVIT.', '2022-01-31', '2022-02-12', 88, 'El alumno tiene las habilidades para analizar y desarrollar las cuotas patronales INFONAVIT.', 2),
(393, 'Cálculo de nómina semanal de trabajadores brutas.', '2022-02-14', '2022-03-05', 144, 'El alumno cuenta con los conocimientos y habilidades para elaborar una nómina de trabajadores semanal bruta.', 3),
(394, 'Cálculo de honorarios ISR.', '2022-03-07', '2022-03-19', 96, 'El alumno tiene el conocimiento para realizar el cálculo de honorarios ISR.', 4),
(395, 'Cálculo de finiquitos y liquidaciones.', '2022-03-22', '2022-04-02', 88, 'El alumno cuenta con los conocimientos para desarrollar el cálculo de los finiquitos y liquidación de cada trabajador.', 5),
(396, 'Cálculo de estimaciones de obra.', '2022-04-04', '2022-04-22', 88, 'El alumno cuenta con los conocimientos y las habilidades para desarrollar el cálculo de estimaciones de obra.', 6),
(397, NULL, NULL, NULL, NULL, NULL, 7),
(398, NULL, NULL, NULL, NULL, NULL, 8),
(399, NULL, NULL, NULL, NULL, NULL, 9),
(400, NULL, NULL, NULL, NULL, NULL, 10),
(401, NULL, NULL, NULL, NULL, NULL, 11),
(402, NULL, NULL, NULL, NULL, NULL, 12),
(403, NULL, NULL, NULL, NULL, NULL, 13),
(404, NULL, NULL, NULL, NULL, NULL, 14),
(405, NULL, NULL, NULL, NULL, NULL, 15),
(406, 'Revisión de equipos de instrumentación biomédica FLUKE.', '2022-01-06', '2022-01-13', 40, 'Aplicación de revisiones de equipamiento médico e instrumentación biomédica (Check list).', 1),
(407, 'Realización de ordenes de servicio para salida y entrega de equipos FLUKE.', '2022-01-14', '2022-01-28', 80, 'Realización de documentos administrativos en la práctica biomédica (ordenes de servicio).', 2),
(408, 'Programación para la salida, uso y entrega de equipos .médicos.', '2022-01-31', '2022-02-07', 40, 'Aplicación de instrumentos organizacionales para la programación de actividades.', 3),
(409, 'Creación de material didáctico.', '2022-02-08', '2022-03-08', 160, 'Plasmar información en materia de equipamiento médico e instrumentación biomédica en material de apoyo visual y auditivo.', 4),
(410, 'Aplicación de aprendizaje continuo.', '2022-03-09', '2022-04-13', 240, 'Impartición de capacitaciones en uso y manejo de equipamiento médico e instrumentación biomédica.', 5),
(411, 'Entrega de base de datos material didáctico.', '2022-04-14', '2022-04-21', 40, 'Realización y entrega de base de datos de material didáctico.', 6),
(412, NULL, NULL, NULL, NULL, NULL, 7),
(413, NULL, NULL, NULL, NULL, NULL, 8),
(414, NULL, NULL, NULL, NULL, NULL, 9),
(415, NULL, NULL, NULL, NULL, NULL, 10),
(416, NULL, NULL, NULL, NULL, NULL, 11),
(417, NULL, NULL, NULL, NULL, NULL, 12),
(418, NULL, NULL, NULL, NULL, NULL, 13),
(419, NULL, NULL, NULL, NULL, NULL, 14),
(420, NULL, NULL, NULL, NULL, NULL, 15),
(421, 'Análisis de necesidades del área', '2022-01-13', '2022-01-20', 30, 'Observación de las funciones y desempeño del personal de cada área.', 1),
(422, 'Elección del proyecto', '2022-04-21', '2022-01-27', 30, 'Elaboración de las estrategias a seguir para solucionar la problemática.', 2),
(423, 'Conteo de accesorios, refacciones y consumibles médicos de cada área de la institución médica.', '2022-01-31', '2022-03-28', 270, 'Obtención y gestión de datos técnicos.', 3),
(424, 'Diseñar y estructurar el inventario médico de la institución en software oportuno.', '2022-01-31', '2022-03-28', 270, 'Manejo de software y diseño de herramientas oportunas.', 4),
(425, 'Realizar pruebas de funcionalidad.', '2022-04-04', '2022-04-18', 60, 'Elaboración de mantenimientos preventivos.', 5),
(426, 'Entrega final', '2022-04-25', '2022-04-26', 60, 'Exposición final y evaluación del proyecto.', 6),
(427, NULL, NULL, NULL, NULL, NULL, 7),
(428, NULL, NULL, NULL, NULL, NULL, 8),
(429, NULL, NULL, NULL, NULL, NULL, 9),
(430, NULL, NULL, NULL, NULL, NULL, 10),
(431, NULL, NULL, NULL, NULL, NULL, 11),
(432, NULL, NULL, NULL, NULL, NULL, 12),
(433, NULL, NULL, NULL, NULL, NULL, 13),
(434, NULL, NULL, NULL, NULL, NULL, 14),
(435, NULL, NULL, NULL, NULL, NULL, 15),
(436, 'Identificación de los diferentes tubos de recolección de muestra', '2022-01-15', '2022-01-29', 29, 'Desarrollar proyectos biotecnológicos, a través de los recursos disponibles, la transferencia de tecnología,  técnicas y equipamiento de análisis en biología molecular, ingeniería genética, microbiología, metodologías de modelos de bioprocesos', 1),
(437, 'Centrifugación  de muestras de análisis clínicos', '2022-02-03', '2022-02-17', 26, 'Desarrollar proyectos biotecnológicos, a través de los recursos disponibles, la transferencia de tecnología,  técnicas y equipamiento de análisis en biología molecular, ingeniería genética, microbiología, metodologías de modelos de bioprocesos', 2),
(438, 'Etiquetado de muestras', '2022-02-19', '2022-03-03', 22, 'Desarrollar proyectos biotecnológicos, a través de los recursos disponibles, la transferencia de tecnología,  técnicas y equipamiento de análisis en biología molecular, ingeniería genética, microbiología, metodologías de modelos de bioprocesos', 3),
(439, 'Refrigeración y almacenamiento de muestras', '2022-03-05', '2022-03-19', 29, 'Desarrollar proyectos biotecnológicos, a través de los recursos disponibles, la transferencia de tecnología,  técnicas y equipamiento de análisis en biología molecular, ingeniería genética, microbiología, metodologías de modelos de bioprocesos', 4),
(440, 'Separación de muestras de orina', '2022-03-24', '2022-03-31', 15, 'Desarrollar proyectos biotecnológicos, a través de los recursos disponibles, la transferencia de tecnología,  técnicas y equipamiento de análisis en biología molecular, ingeniería genética, microbiología, metodologías de modelos de bioprocesos', 5),
(441, NULL, NULL, NULL, NULL, NULL, 6),
(442, NULL, NULL, NULL, NULL, NULL, 7),
(443, NULL, NULL, NULL, NULL, NULL, 8),
(444, NULL, NULL, NULL, NULL, NULL, 9),
(445, NULL, NULL, NULL, NULL, NULL, 10),
(446, NULL, NULL, NULL, NULL, NULL, 11),
(447, NULL, NULL, NULL, NULL, NULL, 12),
(448, NULL, NULL, NULL, NULL, NULL, 13),
(449, NULL, NULL, NULL, NULL, NULL, 14),
(450, NULL, NULL, NULL, NULL, NULL, 15),
(451, 'Análisis', '2022-01-13', '2022-01-14', 20, 'Consta de comprender el proceso actual de la empresa para así definir sus necesidades mediante un detalle de requisitos y metodología de desarrollo.', 1),
(452, 'Propuesta', '2022-01-17', '2022-01-21', 20, 'Realizar una idea que satisfaga la necesidades brindando herramienta para facilitar los procesos que generan un conflicto.', 2),
(453, 'Conexión de firebase con Análisis de Angular, Análisis base de datos', '2022-01-24', '2022-01-28', 20, 'Analizar y definir los requerimientos del proyecto y conectar la base de datos', 3),
(454, 'Creación de las funciones', '2022-02-14', '2022-02-04', 20, 'Utilizar un entorno controlado para el desarrollo de la consultas.', 4),
(455, 'Desarrollo', '2022-02-21', '2022-02-25', 20, 'Realizar la maquetación y codificación mediante diagramas, vistas para así mantener un diseño que brinde una ayuda al usuario final.', 5),
(456, 'Pruebas', '2022-02-28', '2022-03-04', 20, 'Poner a disposición de uso el sistema para que la empresa comience a trabajar de manera cotidiana en el.', 6),
(457, NULL, NULL, NULL, NULL, NULL, 7),
(458, NULL, NULL, NULL, NULL, NULL, 8),
(459, NULL, NULL, NULL, NULL, NULL, 9),
(460, NULL, NULL, NULL, NULL, NULL, 10),
(461, NULL, NULL, NULL, NULL, NULL, 11),
(462, NULL, NULL, NULL, NULL, NULL, 12),
(463, NULL, NULL, NULL, NULL, NULL, 13),
(464, NULL, NULL, NULL, NULL, NULL, 14),
(465, NULL, NULL, NULL, NULL, NULL, 15),
(466, 'Revisión bibliográfica', '2022-01-12', '2022-01-22', 50, 'Análisis e interpretación del manual para la evaluación del desempeño de medios de cultivo', 1),
(467, 'Preparación de medios de cultivo', '2022-01-24', '2022-01-31', 50, 'Cálculos estequiométricos para la preparación de medios de cultivo (sólidos, líquidos) y su esterilización (si es su caso)', 2),
(468, 'Evaluación para medios sólidos para pruebas cuantitativas', '2022-02-01', '2022-02-14', 100, 'Desarrollo de la técnica para la evaluación de medios de cultivo aplicando cálculos para determinar los coeficientes de productividad y selectividad e interpretar resultados', 3),
(469, 'Evaluación para medios sólidos para pruebas cualitativas', '2022-02-15', '2022-02-28', 100, 'Desarrollo de la técnica para la evaluación  de medios de cultivo sólidos e interpretación de resultados', 4),
(470, 'Evaluación para medios líquidos por el método cualitativo y cuantitativo', '2022-03-01', '2022-03-19', 100, 'Desarrollo de la técnica para la evaluación del desempeño de caldos selectivos o no selectivos', 5),
(471, 'Evaluación del desempeño de medios utilizados en los métodos de V. chlorerae', '2022-03-21', '2022-04-02', 100, 'Desarrollo de la técnica para la evaluación del desempeño de medios para el aislamiento de V. chlorerae', 6),
(472, 'Evaluación del desempeño de diluyentes', '2022-04-04', '2022-04-20', 100, 'Desarrollo de diluciones y cálculos para determinar la capacidad', 7),
(473, NULL, NULL, NULL, NULL, NULL, 8),
(474, NULL, NULL, NULL, NULL, NULL, 9),
(475, NULL, NULL, NULL, NULL, NULL, 10),
(476, NULL, NULL, NULL, NULL, NULL, 11),
(477, NULL, NULL, NULL, NULL, NULL, 12),
(478, NULL, NULL, NULL, NULL, NULL, 13),
(479, NULL, NULL, NULL, NULL, NULL, 14),
(480, NULL, NULL, NULL, NULL, NULL, 15),
(481, 'Análisis del área', '2022-01-09', '2022-01-16', 30, 'Observación de funciones del personal de cada área', 1),
(482, 'Elección proyecto', '2022-01-16', '2022-01-30', 30, 'Elaboración de estrategias para solucionar la problemática', 2),
(483, 'Conteo de activos médicos', '2022-01-16', '2022-01-30', 270, 'Obtención y gestión de datos', 3),
(484, 'Diseño del inventario', '2022-01-30', '2022-03-20', 270, 'Manejo de software y herramientas', 4),
(485, 'Pruebas de funcionamiento', '2022-03-20', '2022-04-10', 60, 'Elaboración de mantenimientos preventivos', 5),
(486, 'Entrega final', '2022-04-10', '2022-04-24', 60, 'Exposición final y evaluación de proyecto', 6),
(487, NULL, NULL, NULL, NULL, NULL, 7),
(488, NULL, NULL, NULL, NULL, NULL, 8),
(489, NULL, NULL, NULL, NULL, NULL, 9),
(490, NULL, NULL, NULL, NULL, NULL, 10),
(491, NULL, NULL, NULL, NULL, NULL, 11),
(492, NULL, NULL, NULL, NULL, NULL, 12),
(493, NULL, NULL, NULL, NULL, NULL, 13),
(494, NULL, NULL, NULL, NULL, NULL, 14),
(495, NULL, NULL, NULL, NULL, NULL, 15),
(496, 'Análisis de equipos médicos', '2022-01-17', '2022-01-24', 40, 'Se realiza un estudio del inventario de equipos médicos activos con los que cuenta el hospital y se seleccionan aquellos con mayor importancia o frecuencia de uso.', 1),
(497, 'Capacitación', '2022-01-24', '2022-02-28', 160, 'El personal biomédico se da a la tarea de investigar y capacitarse de forma completa en el manejo de ventiladores mecánicos, para poder generar un programa de capacitación.', 2),
(498, 'Planeación del programa de capacitación (Usuario)', '2022-02-28', '2022-03-28', 160, 'Se planean y plantean estrategias para el desarrollo de un eficaz programa de capacitación dirigido al personal de enfermería.', 3),
(499, 'Capacitación', '2022-03-28', '2022-04-25', 160, 'Se imparte el programa de capacitación planeado con anterioridad en busca de una mejor operación de los ventiladores mecánicos.', 4),
(500, 'Evaluación y retroalimentación', '2022-04-18', '2022-04-26', 40, 'Se evalúan distintos aspectos como la determinación del aprendizaje logrado, el desempeño del ponente para realizar las sesiones, actividades, etc.', 5),
(501, NULL, NULL, NULL, NULL, NULL, 6),
(502, NULL, NULL, NULL, NULL, NULL, 7),
(503, NULL, NULL, NULL, NULL, NULL, 8),
(504, NULL, NULL, NULL, NULL, NULL, 9),
(505, NULL, NULL, NULL, NULL, NULL, 10),
(506, NULL, NULL, NULL, NULL, NULL, 11),
(507, NULL, NULL, NULL, NULL, NULL, 12),
(508, NULL, NULL, NULL, NULL, NULL, 13),
(509, NULL, NULL, NULL, NULL, NULL, 14),
(510, NULL, NULL, NULL, NULL, NULL, 15),
(511, 'ANÁLISIS DE REQUERIMIENTOS', '2022-02-07', '2022-02-11', 30, 'Analizar y definir los requerimientos del proyecto.', 1),
(512, 'ANÁLISIS Y DESARROLLO DE BASE DE DATOS', '2022-02-14', '2022-02-18', 30, 'Trabajar con el motor de Base de dato, crear la relaciones requerida y aplicar normalización.', 2),
(513, 'DESARROLLO DE BACKEND', '2022-02-21', '2022-02-25', 30, 'Desarrollo del servicio web, generar la lógica de negocio, seguridad y aplicar normalización.', 3),
(514, 'DESARROLLO DE FRONTEND', '2022-02-14', '2022-02-18', 10, 'Desarrollo de la aplicación web, manejo de aplicaciones SPA.', 4),
(515, 'CORRECCIÓN DE ERRORES', '2022-03-01', '2022-03-04', 10, 'Realizar las correcciones y pruebas necesarios para generar la solución de software.', 5),
(516, NULL, NULL, NULL, NULL, NULL, 6),
(517, NULL, NULL, NULL, NULL, NULL, 7),
(518, NULL, NULL, NULL, NULL, NULL, 8),
(519, NULL, NULL, NULL, NULL, NULL, 9),
(520, NULL, NULL, NULL, NULL, NULL, 10),
(521, NULL, NULL, NULL, NULL, NULL, 11),
(522, NULL, NULL, NULL, NULL, NULL, 12),
(523, NULL, NULL, NULL, NULL, NULL, 13),
(524, NULL, NULL, NULL, NULL, NULL, 14),
(525, NULL, NULL, NULL, NULL, NULL, 15);
INSERT INTO `etapas_del_proyecto` (`id`, `descripcion_etapas`, `semana_inicial`, `semana_final`, `horas`, `descripcion_competencias`, `numero`) VALUES
(526, 'Análisis y evaluación del estado del hábitat de las especies, así como su papel como bioindicadores.', '2022-01-24', '2022-01-28', 15, 'Consta de comprender la situación por la que están pasando las especies y diseñar un plan para su identificación', 1),
(527, 'Elaboración del programa de actividades para determinar los puntos a abarcar en el estudio.', '2022-01-31', '2022-02-11', 30, 'Se propone el cronograma de actividades a desarrollar durante la estancia, como muestrear distintas zonas', 2),
(528, 'Desarrollo del protocolo y aplicación del muestreo en zonas urbanas. periurbanas y selva.', '2022-02-14', '2022-02-25', 30, 'El asesor empresarial nos explica lo que se debe de saber sobre los reptiles y cómo muestrear para poder salir al campo', 3),
(529, 'Realización de pruebas físicas de las especies observadas y capturadas para su posterior almacenaje y evidencia.', '2022-02-28', '2022-03-11', 30, 'En cada muestreo se toman fotografías de cada especie encontrada para más tarde poder identificarlas', 4),
(530, 'Implementación del proyecto y exposición en una mesa jurídica por parte del COQCYT Y CONACYT.', '2022-03-14', '2022-03-25', 30, 'Poner a disposición un listado de especies de reptiles de la península de Yucatán', 5),
(531, NULL, NULL, NULL, NULL, NULL, 6),
(532, NULL, NULL, NULL, NULL, NULL, 7),
(533, NULL, NULL, NULL, NULL, NULL, 8),
(534, NULL, NULL, NULL, NULL, NULL, 9),
(535, NULL, NULL, NULL, NULL, NULL, 10),
(536, NULL, NULL, NULL, NULL, NULL, 11),
(537, NULL, NULL, NULL, NULL, NULL, 12),
(538, NULL, NULL, NULL, NULL, NULL, 13),
(539, NULL, NULL, NULL, NULL, NULL, 14),
(540, NULL, NULL, NULL, NULL, NULL, 15),
(556, 'Revisión de equipos de instrumentación biomédica FLUKE.', '2022-01-06', '2022-01-13', 40, 'Aplicación de revisiones de equipamiento médico e instrumentación biomédica (Check -  list).', 1),
(557, 'Realización de ordenes de servicio para salida y entrega de equipos FLUKE.', '2022-01-14', '2022-01-27', 80, 'Realización de documentos administrativos en la práctica biomédica (ordenes de servicio).', 2),
(558, 'Programación para la salida, uso y entrega de equipos FLUKE.', '2022-01-28', '2022-01-03', 40, 'Aplicación de instrumentos organizacionales para la programación de actividades.', 3),
(559, 'Creación de material didáctico.', '2022-02-04', '2022-03-03', 160, 'Plasmar información en materia de equipamiento médico y de instrumentación biomédica en material de apoyo visual y auditivo.', 4),
(560, 'Aplicación del aprendizaje continuo.', '2022-03-04', '2022-04-14', 240, 'Impartición de capacitaciones en uso y manejo de equipamiento médico e instrumentación biomédica.', 5),
(561, 'Entrega de base de datos de material didáctico.', '2022-04-15', '2022-04-21', 40, 'Realización y entrega de base de datos del material didáctico.', 6),
(562, NULL, NULL, NULL, NULL, NULL, 7),
(563, NULL, NULL, NULL, NULL, NULL, 8),
(564, NULL, NULL, NULL, NULL, NULL, 9),
(565, NULL, NULL, NULL, NULL, NULL, 10),
(566, NULL, NULL, NULL, NULL, NULL, 11),
(567, NULL, NULL, NULL, NULL, NULL, 12),
(568, NULL, NULL, NULL, NULL, NULL, 13),
(569, NULL, NULL, NULL, NULL, NULL, 14),
(570, NULL, NULL, NULL, NULL, NULL, 15),
(571, 'Realización de recorridos de las áreas del hospital', '2022-02-04', '2022-04-05', 2, 'Se realiza recorridos verificando que los carros rojos estén en buen estado y que tenga todos sus equipos y dispositivos completos y de igual modo que estén en buenas condiciones y funcionen correctamente.', 1),
(572, 'Mantenimiento preventivo a camilla', '2022-02-15', '2022-02-15', 4, 'Se realiza mantenimiento preventivo a camilla verificando la integridad del equipo y su funcionamiento. Se efectúa limpieza del equipo, se actualiza la ficha de mantenimiento y se regresa el dispositivo a su área.', 2),
(573, 'Mantenimiento preventivo a desfibrilador', '2022-03-03', '2022-03-03', 3, 'Se realiza mantenimiento preventivo a desfibrilador verificando la integridad del equipo y su funcionamiento. Se efectúa limpieza del equipo, se actualiza la ficha de mantenimiento y se regresa el equipo a su área.', 3),
(574, 'Mantenimiento preventivo a cuna térmica', '2022-03-17', '2022-03-17', 4, 'Se realiza mantenimiento preventivo a cuna térmica verificando la integridad del equipo y su funcionamiento. Se efectúa limpieza del equipo, se actualiza la ficha de mantenimiento y se regresa el equipo a su área.', 4),
(575, 'Mantenimiento preventivo a ventilador mecánico', '2022-03-29', '2022-03-29', 5, 'Se realiza mantenimiento preventivo a ventilador mecánico verificando la integridad del equipo y su funcionamiento. Se efectúa limpieza del equipo, se actualiza la ficha de mantenimiento y se regresa el equipo a su área.', 5),
(576, 'Mantenimiento preventivo a equipo de ultrasonido', '2022-04-02', '2022-04-02', 3, 'Se realiza mantenimiento preventivo a equipo de ultrasonido verificando la integridad del equipo y su funcionamiento. Se efectúa limpieza del equipo, se actualiza la ficha de mantenimiento y se regresa el equipo a su área.', 6),
(577, NULL, NULL, NULL, NULL, NULL, 7),
(578, NULL, NULL, NULL, NULL, NULL, 8),
(579, NULL, NULL, NULL, NULL, NULL, 9),
(580, NULL, NULL, NULL, NULL, NULL, 10),
(581, NULL, NULL, NULL, NULL, NULL, 11),
(582, NULL, NULL, NULL, NULL, NULL, 12),
(583, NULL, NULL, NULL, NULL, NULL, 13),
(584, NULL, NULL, NULL, NULL, NULL, 14),
(585, NULL, NULL, NULL, NULL, NULL, 15),
(586, 'identificar problemática', '2022-01-19', '2022-02-22', 30, 'se llevara a cabo la detección de la problemática presente dentro del departamento', 1),
(587, 'recolección y análisis de información para abordar a fondo el problema detectado', '2022-02-01', '2022-02-05', 15, 'se recabara información precisa que permitirá la comprensión y delimitan del problema detectado', 2),
(588, 'asignación de metodología', '2022-02-07', '2022-02-12', 15, 'se desatollara una metodología que permitirá analizar la problemática a fondo', 3),
(589, 'desarrollo de estrategias para la solución de problema', '2022-02-14', '2022-02-26', 30, 'se aplicara un plan de acción que permitirá tratar y solucionar el problema', 4),
(590, 'resultados y terminación de proyecto', '2022-02-28', '2022-03-12', 30, 'se verificara el resultado obtenido', 5),
(591, NULL, NULL, NULL, NULL, NULL, 6),
(592, NULL, NULL, NULL, NULL, NULL, 7),
(593, NULL, NULL, NULL, NULL, NULL, 8),
(594, NULL, NULL, NULL, NULL, NULL, 9),
(595, NULL, NULL, NULL, NULL, NULL, 10),
(596, NULL, NULL, NULL, NULL, NULL, 11),
(597, NULL, NULL, NULL, NULL, NULL, 12),
(598, NULL, NULL, NULL, NULL, NULL, 13),
(599, NULL, NULL, NULL, NULL, NULL, 14),
(600, NULL, NULL, NULL, NULL, NULL, 15),
(601, 'Identificacion de datos e informacion de la empresa , conocer la magnitud de la organizacion y tener primercontacto con el asesor empresarial', '2022-01-28', '2022-02-04', 30, 'Conocer la filosofia institucional de la empresa, los antecedentes y la estructura organizacoonal.', 1),
(602, 'Metodos de investigacion para las areas de oportunidad de la empresa', '2022-03-07', '2022-02-11', 25, 'Analisis de la organizacion y investigacion de los posibles problemas y su propuesta de solucion.', 2),
(603, 'Determinarlos procesos con relacion a como se trabaja en la empresa para poder realizar un diseño estructurado', '2022-02-14', '2022-02-18', 25, 'Tener conocimiento establecido para las diferentes funciones dentro de los procesos y la determinacion para mejorarla', 3),
(604, 'Propuesta de un diseño de manual de reclutamiento, seleccion, contratacion e induccion del talento humano', '2022-02-21', '2022-02-25', 25, 'La justificacion de la propuesta y compartir ideas para la mejora deblos procesos.', 4),
(605, 'Modificaciones y correcciones del diseño presentado del manual', '2022-02-28', '2022-03-03', 15, 'Editar el diseño del manual con el fin de mejorar el desarrollo de los procedimientos y de su comprension.', 5),
(606, NULL, NULL, NULL, NULL, NULL, 6),
(607, NULL, NULL, NULL, NULL, NULL, 7),
(608, NULL, NULL, NULL, NULL, NULL, 8),
(609, NULL, NULL, NULL, NULL, NULL, 9),
(610, NULL, NULL, NULL, NULL, NULL, 10),
(611, NULL, NULL, NULL, NULL, NULL, 11),
(612, NULL, NULL, NULL, NULL, NULL, 12),
(613, NULL, NULL, NULL, NULL, NULL, 13),
(614, NULL, NULL, NULL, NULL, NULL, 14),
(615, NULL, NULL, NULL, NULL, NULL, 15),
(616, 'Inducción al instituto municipal de la juventud(misión, visión, valores, historia, objetivos)', '2022-01-24', '2022-01-28', 20, 'El alumno se enfocara en conocer los valores  y la estructura interna de la empresa así como del personal.', 1),
(617, 'Realizar un concentrado de los eventos planeados en el año 2022 y compararlo con los realizados en el año 2011', '2022-01-31', '2022-02-04', 20, 'El alumno se enfocará en revisar el historial para ver deficiencias emocionales del personal a la hora de impartir los eventos.', 2),
(618, 'Revisión y planteamiento de las estrategias de difusión digital  realizadas en los eventos de 2021. (forma, fondo, objetivos, alcance)', '2022-02-07', '2022-02-11', 20, 'El alumno desarrollara estrategias en canales digitales  usando relaciones interpersonales con la sociedad.', 3),
(619, 'Propuestas de mejora para los eventos realizados en 2022', '2022-02-14', '2022-02-18', 20, 'El alumno recopilará la información puntual y precisa mediante feedbacks.', 4),
(620, 'Presentación, adecuación y pruebas piloto de la estrategias mejoradas del 2021 para 2022.', '2022-02-21', '2022-02-25', 20, 'El alumno realizará una prueba piloto, enfocándose en el bienestar social.', 5),
(621, 'Presentación de la versión final del programa \"estrategias de difusión digital\"', '2022-02-28', '2022-03-04', 20, 'El alumno presentará el proyecto final con el objetivo de crear relaciones interpersonales con los jóvenes (13-29) años promoviendo los valores internos de la empresa.', 6),
(622, NULL, NULL, NULL, NULL, NULL, 7),
(623, NULL, NULL, NULL, NULL, NULL, 8),
(624, NULL, NULL, NULL, NULL, NULL, 9),
(625, NULL, NULL, NULL, NULL, NULL, 10),
(626, NULL, NULL, NULL, NULL, NULL, 11),
(627, NULL, NULL, NULL, NULL, NULL, 12),
(628, NULL, NULL, NULL, NULL, NULL, 13),
(629, NULL, NULL, NULL, NULL, NULL, 14),
(630, NULL, NULL, NULL, NULL, NULL, 15),
(631, '• Implementar la capa de dominio de entidades para el mapeo de la base de datos en el gestor SQL Server y en el caso de las vistas, los ViewModels y Response, por medio de clases.				\r\n', '2022-02-10', '2022-02-24', 80, 'El alumno posee el dominio sobre la tecnologia que utiliza y es capaz de mapear la base de datos correspondiente.		\r\n', 4),
(632, '• Desarrollar el Login del sistema, usando la herramienta USERMANAGER de .NET para la autorización del usuario, y que proporciona una mejor seguridad a la hora de manipular la información de la base de datos.				\r\n', '2022-02-25', '2022-03-09', 110, 'El alumno comprende la logica de un sistema login y tiene las habilidades para implementarlo.		\r\n', 5),
(633, '', NULL, NULL, NULL, NULL, 14),
(634, NULL, NULL, NULL, NULL, NULL, 12),
(635, NULL, NULL, NULL, NULL, NULL, 10),
(636, NULL, NULL, NULL, NULL, NULL, 9),
(637, NULL, NULL, NULL, NULL, NULL, 7),
(638, NULL, NULL, NULL, NULL, NULL, 8),
(639, '• Desarrollar los CRUD de los módulos (Elaboración, validación y generación de oficios de comisión de personal académico; Elaboración, registro y control de emisión de constancias; Calendario de eventos institucionales; Calendario de ceremonias interculturales) de lado del cliente, por medio de componentes. 				\r\n', '2022-03-10', '2022-04-10', 315, 'El alumno posee los conocimientos y habilidades para desarrollo Back end y tiene las aptitudes para implementarlo.		\r\n', 6),
(640, NULL, NULL, NULL, NULL, NULL, 13),
(641, NULL, NULL, NULL, NULL, NULL, 11),
(642, '• Definir los módulos, sus especificaciones y limitaciones para el sistema, por medio de la información proporcionada por la empresa.				\r\n				\r\n				\r\n', '2022-01-12', '2022-01-19', 15, 'El alumno es capaz de realizar un Análisis s de requerimientos eficaz, proponer un modelo de trabajo adecuado y establecer una optima estrategia de trabajo.		\r\n		\r\n		\r\n', 1),
(643, '• Diseñar la maquetación del sistema, con la finalidad de tener una interfaz limpia y sencilla para que los usuarios puedan realizar los procesos de manera eficaz. 				\r\n', '2022-01-20', '2022-01-29', 30, 'El alumno posee los conocimientos y habilidades para desarrollo Front end y tiene las aptitudes para implementarlo.		\r\n', 2),
(644, '• Adaptar e implementar la base de datos del sistema proporcionando una mejor visión de las entidades y de las propiedades, por medio de un diccionario de datos y del diagrama relacional. 				\r\n', '2022-01-30', '2022-02-09', 50, 'El alumno es capaz de realizar un correcto Análisis de base de datos y posee los conocimiento para implementarla.		\r\n', 3),
(645, NULL, NULL, NULL, NULL, NULL, 15),
(646, 'Reconocimiento de los contratista', '2022-01-03', '2022-01-14', 20, 'Identificar a los contratistas y a sus trabajadores', 1),
(647, 'verificar la documentación de los empleados', '2022-01-17', '2022-01-28', 20, 'Revisar que todos los empleados tengan la documentación completa', 2),
(648, 'recopilar información', '2022-01-31', '2022-02-04', 20, 'Solicitar documentos faltantes de los trabajadores', 3),
(649, 'organizar las carpetas de expedientes', '2022-02-07', '2022-02-11', 20, 'Poner divisiones en las carpetas con los nombres de los contratistas en orden alfabético', 4),
(650, 'escanear los documentos de los empleados', '2022-02-18', '2022-02-22', 20, 'Crear una base de datos compartidos con los empleados del área administrativa', 5),
(651, 'presentar la documentación completa y ordenada', '2022-02-23', '2022-02-25', 20, 'Explicar la organización de la carpeta física y digital', 6),
(652, NULL, NULL, NULL, NULL, NULL, 7),
(653, NULL, NULL, NULL, NULL, NULL, 8),
(654, NULL, NULL, NULL, NULL, NULL, 9),
(655, NULL, NULL, NULL, NULL, NULL, 10),
(656, NULL, NULL, NULL, NULL, NULL, 11),
(657, NULL, NULL, NULL, NULL, NULL, 12),
(658, NULL, NULL, NULL, NULL, NULL, 13),
(659, NULL, NULL, NULL, NULL, NULL, 14),
(660, NULL, NULL, NULL, NULL, NULL, 15),
(661, 'Presentación de la empresa y el departamento en general, así como el reconocimiento y recopilación de información', '2022-01-21', '2022-02-01', 24, 'Recolectar información de la empresa y el departamento.', 1),
(662, 'Definición y análisis del problema y previa elaboración del diagnostico de la empresa.', '2022-02-01', '2022-02-04', 16, 'Especificar los factores iniciales del problema y estudiar su alcance del proyecto.', 2),
(663, 'Elaboración de la primera parte del proyecto (diagnóstico de la empresa)', '2022-02-08', '2022-02-11', 16, 'Se definirán los principios del desarrollo del proyecto tomando en cuenta objetivos generales y específicos.', 3),
(664, 'Elaboración de la segunda parte del proyecto (planteamiento del problema)', '2022-02-14', '2022-02-18', 20, 'Empezar con el manual de descripción y perfil de puesto de acuerdo a los avances de la investigación.', 4),
(665, 'Elaboración de la ultima parte del proyecto y análisis de resultados.', '2022-02-21', '2022-02-25', 20, 'Evaluar y analizar el trabajo, utilizando las correcciones previas mencionadas por los asesores.', 5),
(666, 'Aprobación y presentación final del proyecto.', '2022-02-28', '2022-03-07', 24, 'Correcciones del proyecto en general de acuerdo a los solicitado y realizar una presentación final.', 6),
(667, NULL, NULL, NULL, NULL, NULL, 7),
(668, NULL, NULL, NULL, NULL, NULL, 8),
(669, NULL, NULL, NULL, NULL, NULL, 9),
(670, NULL, NULL, NULL, NULL, NULL, 10),
(671, NULL, NULL, NULL, NULL, NULL, 11),
(672, NULL, NULL, NULL, NULL, NULL, 12),
(673, NULL, NULL, NULL, NULL, NULL, 13),
(674, NULL, NULL, NULL, NULL, NULL, 14),
(675, NULL, NULL, NULL, NULL, NULL, 15),
(676, 'Analisis de requerimientos del proyecto', '2022-02-01', '2022-02-01', 60, 'Analizar los objetivos y requerimientos del programa, de igual manera la creación de bocetos para la pagina', 1),
(677, 'Creación de la Base de Datos', '2022-02-07', '2022-02-12', 60, 'Crear diccionario de datos y modelo de entidad y relación', 2),
(678, 'Creación de la pagina web', '2022-02-14', '2022-02-28', 100, 'Crear la pagina web y ajustar el diseño solicitado', 3),
(679, 'Creación de tablas', '2022-03-01', '2022-03-12', 100, 'Realizar la tablas en la pagina web conectando a la base de datos, agregando las funciones: Update, Create, Delete de igual manera agregar un buscador', 4),
(680, 'Creación de la API', '2022-02-14', '2022-03-19', 100, 'Crear una api en el que se descargaran las listas(Tablas) en un archivo de Excel', 5),
(681, 'Pruebas y cambios', '2022-03-21', '2022-04-09', 180, 'Analizar el programa y realizar los cambios', 6),
(682, NULL, NULL, NULL, NULL, NULL, 7),
(683, NULL, NULL, NULL, NULL, NULL, 8),
(684, NULL, NULL, NULL, NULL, NULL, 9),
(685, NULL, NULL, NULL, NULL, NULL, 10),
(686, NULL, NULL, NULL, NULL, NULL, 11),
(687, NULL, NULL, NULL, NULL, NULL, 12),
(688, NULL, NULL, NULL, NULL, NULL, 13),
(689, NULL, NULL, NULL, NULL, NULL, 14),
(690, NULL, NULL, NULL, NULL, NULL, 15),
(691, 'Analizar requerimiento y definir de herramientas a usar para su desarrollo', '2022-01-03', '2022-01-09', 40, 'Analizar los requerimientos y determinar las herramientas a usar en el desarrollo del módulo', 1),
(692, 'Crear bocetos y prototipos', '2022-01-10', '2022-02-01', 160, 'Elaboración de bocetos, prototipos', 2),
(693, 'Realizar la parte grafica(front-end)', '2022-02-02', '2022-02-21', 140, 'Programar la interfaz grafica', 3),
(694, 'Codificar funciones', '2022-02-22', '2022-03-19', 100, 'Desarrollo de la interfaz gráfica', 4),
(695, 'Testear y pruebas del módulo', '2022-03-20', '2022-03-26', 120, 'Testeo general para la detección de posibles errores', 5),
(696, 'Realizar la correccion de errores del módulo', '2022-03-27', '2022-04-26', 40, 'Corrección de posibles errores encontrados en el testeo, para el buen funcionamiento del modulo', 6),
(697, NULL, NULL, NULL, NULL, NULL, 7),
(698, NULL, NULL, NULL, NULL, NULL, 8),
(699, NULL, NULL, NULL, NULL, NULL, 9),
(700, NULL, NULL, NULL, NULL, NULL, 10),
(701, NULL, NULL, NULL, NULL, NULL, 11),
(702, NULL, NULL, NULL, NULL, NULL, 12),
(703, NULL, NULL, NULL, NULL, NULL, 13),
(704, NULL, NULL, NULL, NULL, NULL, 14),
(705, NULL, NULL, NULL, NULL, NULL, 15),
(706, 'Investigación documental.', '2022-02-13', '2022-02-18', 24, 'Recopilar y seleccionar información a través de la lectura de documentos, libros, revistas y artículos de investigación científica.', 1),
(707, 'Toma de muestra en 5 cenotes urbanos en Cancún Quintana Roo.', '2022-02-20', '2022-02-25', 8, 'Realizar toma de muestras adecuadas mediante técnicas manuales y de conservación con el uso de protocolos para muestras bacteriológicas y transportación.', 2),
(708, 'Análisis en el laboratorio de las muestras colectadas que incluirá: 1. preparación de medios de cultivo 2. Esterilización 3. Sembrado de las muestras.', '2022-02-28', '2022-03-18', 39, 'Utilizar adecuadamente el equipo de laboratorio microbiológico como autoclave, incubadora, etc. Seguimiento de la normatividad con el uso de protocolos (NOM-042). Manejo adecuado de técnicas básicas de laboratorio y microbiología.', 3),
(709, 'Análisis e interpretación de los datos obtenidos.', '2022-03-19', '2022-03-25', 15, 'Interpretar datos de resultados obtenidos con el manejo de recursos y técnicas analíticas necesarias para el seguimiento de calidad de agua con base a la norma mexicana NOM-042.', 4),
(710, 'Generación de reporte final.', '2022-03-27', '2022-03-31', 34, 'Redactar adecuadamente un reporte de investigación final.', 5),
(711, NULL, NULL, NULL, NULL, NULL, 6),
(712, NULL, NULL, NULL, NULL, NULL, 7),
(713, NULL, NULL, NULL, NULL, NULL, 8),
(714, NULL, NULL, NULL, NULL, NULL, 9),
(715, NULL, NULL, NULL, NULL, NULL, 10),
(716, NULL, NULL, NULL, NULL, NULL, 11),
(717, NULL, NULL, NULL, NULL, NULL, 12),
(718, NULL, NULL, NULL, NULL, NULL, 13),
(719, NULL, NULL, NULL, NULL, NULL, 14),
(720, NULL, NULL, NULL, NULL, NULL, 15),
(721, 'Análisis del control del inventario', '2022-01-20', '2022-02-05', 120, '1.Identificar la cantidad de artículos\r\n2.Clasificar el número de artículos\r\n3.Definir la ubicación de los artículos en el almacén', 1),
(722, 'Métodos de identificación de mejora para el control del inventario', '2022-02-08', '2022-02-26', 120, '1.Analizar el proceso actual de control de inventario\r\n2.Recopilar registros de inventarios anteriores\r\n3. Comparar los registros de inventarios con los del periodo actual para identificar la estrategia apropiada a utilizar', 2),
(723, 'Establecimiento de tres principales clasificaciones fundamentadas en la alta rotación de venta por temporada o de pedido especial', '2022-03-01', '2022-03-19', 120, '1.Determinar los criterios para las categorías principales\r\n2.Estructurar las clasificaciones para el nuevo control de inventario\r\n3.Explicar el criterio de selección de las tres principales clasificación que se estarán utilizando', 3),
(724, 'Determinación del periodo en el cual se realizarán los inventarios', '2022-03-22', '2022-04-02', 96, '1.Distinguir los artículos con mayor y menor rotación de demanda\r\n2.Designar la frecuencia de compra de los artículos\r\n3.Deducir el tiempo de realización de inventario en relación de la frecuencia de compra', 4),
(725, 'Contraste de datos recolectados de los inventarios anteriores con los actuales y obtención de resultados', '2022-04-04', '2022-04-22', 144, '1.Implementar el proceso administrativo para el control de inventario\r\n2.Recolectar datos obtenido\r\n3.Evaluar los resultados obtenidos al aplicar el proceso administrativo', 5),
(726, NULL, NULL, NULL, NULL, NULL, 6),
(727, NULL, NULL, NULL, NULL, NULL, 7),
(728, NULL, NULL, NULL, NULL, NULL, 8),
(729, NULL, NULL, NULL, NULL, NULL, 9),
(730, NULL, NULL, NULL, NULL, NULL, 10),
(731, NULL, NULL, NULL, NULL, NULL, 11),
(732, NULL, NULL, NULL, NULL, NULL, 12),
(733, NULL, NULL, NULL, NULL, NULL, 13),
(734, NULL, NULL, NULL, NULL, NULL, 14),
(735, NULL, NULL, NULL, NULL, NULL, 15),
(736, 'Analisis de requisitos de la aplicación con asesor empresarial,\r\ndiseño de la aplicación', '2022-04-17', '2022-01-25', 50, 'Analizar los requerimientos de la aplicación para\r\nconocimiento de los datos requeridos', 1),
(737, 'Diseño e implementacion de base de datos', '2022-01-26', '2022-02-11', 100, 'Diseñar y contruir la basede datos para el guardado de la\r\ninformacion', 2),
(738, 'Implementacion de la aplicación movil', '2022-02-14', '2022-03-04', 200, 'Implementar la aplicación movil de acuerdo a los requisitos\r\nproporcionados por la instutucion,', 3),
(739, 'Contruccion de pagima web para consulta de informacion de\r\ncenotes', '2022-03-07', '2022-04-08', 200, 'Desarrollar pagina web para presentar informacion de los\r\ncenotes registrados', 4),
(740, 'Realizacion de pruebas de la aplicacion', '2022-04-11', '2022-04-22', 50, 'Realizacion de pruebas de la aplicación', 5),
(741, NULL, NULL, NULL, NULL, NULL, 6),
(742, NULL, NULL, NULL, NULL, NULL, 7),
(743, NULL, NULL, NULL, NULL, NULL, 8),
(744, NULL, NULL, NULL, NULL, NULL, 9),
(745, NULL, NULL, NULL, NULL, NULL, 10),
(746, NULL, NULL, NULL, NULL, NULL, 11),
(747, NULL, NULL, NULL, NULL, NULL, 12),
(748, NULL, NULL, NULL, NULL, NULL, 13),
(749, NULL, NULL, NULL, NULL, NULL, 14),
(750, NULL, NULL, NULL, NULL, NULL, 15),
(766, 'Revisión bibliográfica referente a estudios realizados de la especie (Megalops atlanticus)', '2022-01-12', '2022-02-01', 120, '1. Valorar los bioprocesos a través del análisis e interpretación de parámetros e indicadores de calidad técnicas de laboratorio escala ensayo metodologías pertinentes normatividad y legislación vigentes para contribuir al desarrollo de bioproductos', 1),
(767, 'Organización y recolección de muestras para su análisis.', '2022-02-02', '2022-02-22', 120, '1.2. Planear bioprocesos a escala ensayo, mediante técnicas analíticas oficiales, manuales, técnicas básicas de laboratorio y microbiología, manejo de los recursos, asi como la normatividad aplicable aplicable, para obtener bioproductos de calidad', 2),
(768, 'Colecta de datos biométricos a través de disección, medición y pesado de muestras (Lt, Le, Pt, Pe, P estomacal, P del contenido) Y análisis del contenido estomacal generación de base de datos', '2022-02-23', '2022-03-15', 120, '2. Coordinar bioprocesos, con base en la utilización de insumos químicos y biológicos, material y equipo de laboratorio, técnicas de modelado, escalamiento y análisis instrumental, métodos de control y de desarrollo de personal', 3),
(769, 'Procesamiento de los datos recabados en Excel, con graficas y análisis estadísticos.', '2022-03-16', '2022-04-05', 120, '2.1. Desarrollar bioprocesos, mediante metodologías de administración de recursos humanos y materiales, técnicas de escalamiento y modelado, parámetros e indicadores de control, así como la normatividad y legislación vigentes', 4),
(770, 'Análisis y redacción de resultados para la adecuación de documento final(memoria de tesis).', '2022-04-06', '2022-04-26', 120, '2.2. Controlar bioprocesos, a través de técnicas de análisis, monitoreo y diagnóstico, métodos estadísticos, parámetros e indicadores de control, así como procesos de calidad, técnicas de detección y desarrollo de la capacitación', 5),
(771, NULL, NULL, NULL, NULL, NULL, 6),
(772, NULL, NULL, NULL, NULL, NULL, 7),
(773, NULL, NULL, NULL, NULL, NULL, 8),
(774, NULL, NULL, NULL, NULL, NULL, 9),
(775, NULL, NULL, NULL, NULL, NULL, 10),
(776, NULL, NULL, NULL, NULL, NULL, 11),
(777, NULL, NULL, NULL, NULL, NULL, 12),
(778, NULL, NULL, NULL, NULL, NULL, 13),
(779, NULL, NULL, NULL, NULL, NULL, 14),
(780, NULL, NULL, NULL, NULL, NULL, 15),
(781, 'Identificación, definición de un problema de investigación', '2022-01-26', '2022-01-28', 5, 'Identificar el problema administrativo de los recursos humanos de la clinica de terapia fisica', 1),
(782, 'Identificar los elementos de la clinica considera como empresa', '2022-01-31', '2022-02-04', 9, 'Identificar y formular el maya curricular de la clínica de terapia fisica', 2),
(783, 'Formulación de un problema bibliografica', '2022-02-07', '2022-02-11', 6, 'Clasificar los datos obtenidos', 3),
(784, 'Gestionar los recursos necesarios interactuando los aspectos humanos y para la operación de la clinica', '2022-02-14', '2022-02-18', 9, 'Clasificar los datos obtenidos', 4),
(785, 'Hipótesis, presentación del área de recursos humanos para la realización del personal asignado a la Lic. de terapia fisica', '2022-02-21', '2022-02-25', 9, 'Agrupar la asignación de cada profesor por materia', 5),
(786, 'Realizar un diagnostico situacional, para determinar las causas del problema principal', '2022-02-28', '2022-03-04', 10, 'Formar la estructura de la maya curricular e identificar el problema del funcionamiento de recursos humanos', 6),
(787, 'Maya curricular, para determinar la asignación de los profesores y sus expedientes', '2022-02-07', '2022-02-11', 12, 'Definir el roll de recursos humanos y recursos materiales, los cuales se involucran en el funcionamiento de la empresa', 7),
(788, 'Clasificar a los profesores de materias practicas y teoricas', '2022-02-14', '2022-02-18', 12, 'Definir el puesto de cada docente', 8),
(789, 'Planteamiento de las hipótesis', '2022-02-23', '2022-02-25', 8, 'Analizar las supociones de las causas del problema', 9),
(790, 'Redactación y definición de las propuestas', '2022-02-28', '2022-03-30', 12, 'Describir las definiciones plateadas', 10),
(791, 'Retroalimentación del proyecto', '2022-04-01', '2022-04-08', 12, 'Retroalimentación', 11),
(792, 'Realizar la discusión del problema detectado y las propuestas de mejoramiento', '2022-03-18', '2022-03-22', 12, 'Poner en marcha las propuestas para el mejoramiento', 12),
(793, 'Presentación final del proyecto', '2022-04-25', '2022-04-25', 4, 'Explicar el procedimiento para determinar la estructura del proyecto y la propuestas de mejora', 13),
(794, NULL, NULL, NULL, 0, NULL, 14),
(795, NULL, NULL, NULL, 0, NULL, 15),
(796, 'Identificar la clínica de terapia física  de la upqroo para determinar el problema de investigación.', '2022-01-26', '2022-01-28', 5, 'Reconocer el funcionamiento de la clínica de terapia física.', 1),
(797, 'Identificar los elementos de la clínica de terapia física para formular el problema de la investigación', '2022-01-31', '2022-02-11', 15, 'Identificar los recursos materiales necesarios de la clínica de terapia física.', 2),
(798, 'Revisar del área de recursos materiales para la realización del inventario de la clínica de terapia física', '2022-02-14', '2022-02-25', 18, 'Clasificar los materiales existentes de la clínica entre mobiliario y equipo.', 3),
(799, 'Registrar los  datos recabados.', '2022-02-28', '2022-03-25', 42, 'Agrupar los datos y ordenarlos para formar la estructura del inventario, el etiquetado, los manuales d funcionamiento, las pólizas de seguros y de garantía,  la capacitación en', 4),
(800, 'Acomodar el mobiliario y equipo al área que se les fue asignada.', '2022-03-28', '2022-04-01', 24, 'Ordenar el mobiliario y equipo en el área designada con ayuda del plano.', 5),
(801, 'Presentar el inventario, explicar su funcionamiento por áreas y verificar su funcionamiento (Equipos electrónicos).', '2022-04-04', '2022-04-25', 16, 'Definir el rol de los recursos materiales y su vinculo con los recursos humanos y los recursos fina involucrados para integrar el funcionamiento de la empresa publica correspondiente.', 6),
(802, NULL, NULL, NULL, NULL, NULL, 7),
(803, NULL, NULL, NULL, NULL, NULL, 8),
(804, NULL, NULL, NULL, NULL, NULL, 9),
(805, NULL, NULL, NULL, NULL, NULL, 10),
(806, NULL, NULL, NULL, NULL, NULL, 11),
(807, NULL, NULL, NULL, NULL, NULL, 12),
(808, NULL, NULL, NULL, NULL, NULL, 13),
(809, NULL, NULL, NULL, NULL, NULL, 14),
(810, NULL, NULL, NULL, NULL, NULL, 15),
(811, 'Revisión bibliográfica sobre el tema de investigación e inicio de memoria de estadía.', '2022-01-25', '2022-02-18', 110, 'Planeación mediante técnicas analíticas, manuales y\r\nmetodologías de aprovechamiento.', 1),
(812, 'Entrenamiento de laboratorio para identificación morfológica de otolitos', '2022-02-21', '2022-03-11', 120, 'Análisis e interpretación de técnicas de laboratorio', 2),
(813, 'Trabajo de laboratorio para la separación e identificación de pares de otolitos por familia.', '2022-03-14', '2022-04-06', 150, 'Coordinar procesos, con base en la utilización de insumos biológicos, material y equipo de laboratorio, me todos de control para utilizar recursos humanos y naturales.', 3),
(814, 'Trabajo de gabinete para conformar memoria de estadía .', '2022-04-07', '2022-04-15', 130, 'Desarrollo de análisis, manejo de bases de datos, estrategias de vinculación y divulgación científica', 4),
(815, 'Revisión y entrega de memoria final.', '2022-04-18', '2022-04-21', 90, 'Desarrollo de modelamientos y actividades académicas.', 5),
(816, NULL, NULL, NULL, NULL, NULL, 6),
(817, NULL, NULL, NULL, NULL, NULL, 7),
(818, NULL, NULL, NULL, NULL, NULL, 8),
(819, NULL, NULL, NULL, NULL, NULL, 9),
(820, NULL, NULL, NULL, NULL, NULL, 10),
(821, NULL, NULL, NULL, NULL, NULL, 11),
(822, NULL, NULL, NULL, NULL, NULL, 12),
(823, NULL, NULL, NULL, NULL, NULL, 13),
(824, NULL, NULL, NULL, NULL, NULL, 14),
(825, NULL, NULL, NULL, NULL, NULL, 15),
(826, 'Conocer el área donde se generara el manual de procedimientos', '2022-01-17', '2022-01-28', 24, 'Realizar un plan de trabajo donde se abarque el contenido del manual', 1),
(827, 'Identificar los procesos que se desarrollan en el área de estudio', '2022-01-31', '2022-02-11', 24, 'Saber las diversas actividades que se realizan en las instalaciones', 2),
(828, 'Seleccionar los procesos que se encuentran estancados e implementar mejoras', '2022-02-14', '2022-02-25', 24, 'Proponer las mejoras que coadyuden a la agilización de los procesos', 3),
(829, 'Realizar propuestas de mejora al encargado', '2022-02-28', '2022-03-04', 24, 'Presentar las propuestas finales al IMDAI', 4),
(830, 'Presentación del rediseño del manual ya existente', '2022-03-07', '2022-03-11', 24, 'Exhibir el contenido y mejoras de procedimientos de Ventanilla Única', 5),
(831, NULL, NULL, NULL, NULL, NULL, 6),
(832, NULL, NULL, NULL, NULL, NULL, 7),
(833, NULL, NULL, NULL, NULL, NULL, 8),
(834, NULL, NULL, NULL, NULL, NULL, 9),
(835, NULL, NULL, NULL, NULL, NULL, 10),
(836, NULL, NULL, NULL, NULL, NULL, 11),
(837, NULL, NULL, NULL, NULL, NULL, 12),
(838, NULL, NULL, NULL, NULL, NULL, 13),
(839, NULL, NULL, NULL, NULL, NULL, 14),
(840, NULL, NULL, NULL, NULL, NULL, 15),
(841, 'Análisis de los archivos digitales.', '2022-01-18', '2022-02-05', 120, '1. Examinar los procesos de cada documento, 2. Diferenciar las actividades, 3. Simplificar el mapa de los procesos.', 1),
(842, 'Revisión de el tratamiento que tienen los documentos.', '2022-02-07', '2022-02-26', 120, 'Generalizar los formatos de cada sistema, 2. Informar sobre el cumplimiento de los software, 3. Esquematizar las fuentes del sistema.', 2),
(843, 'Combinación de las actividades que gestionan los documentos.', '2022-02-28', '2022-03-19', 120, '1. Diseñar las normas de protección de los documentos, 2. Innovar estrategias para una calidad excelente.', 3),
(844, 'Justificación de estándares para la seguridad de los archivos.', '2022-03-21', '2022-04-09', 120, '1. Seleccionar los archivos, 2. Integrar diferentes archivos, 3. Deducir  cada documento con especificaciones.', 4),
(845, 'Aplicación de el control y administración de los documento digitales.', '2022-04-11', '2022-04-22', 120, '1.Implementar la  información, 2. Desempeñar el rendimiento, 3. Ejecutar el manejo de el software.', 5),
(846, NULL, NULL, NULL, NULL, NULL, 6),
(847, NULL, NULL, NULL, NULL, NULL, 7),
(848, NULL, NULL, NULL, NULL, NULL, 8),
(849, NULL, NULL, NULL, NULL, NULL, 9),
(850, NULL, NULL, NULL, NULL, NULL, 10),
(851, NULL, NULL, NULL, NULL, NULL, 11),
(852, NULL, NULL, NULL, NULL, NULL, 12),
(853, NULL, NULL, NULL, NULL, NULL, 13),
(854, NULL, NULL, NULL, NULL, NULL, 14),
(855, NULL, NULL, NULL, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_asesor_emp` int(11) DEFAULT NULL,
  `id_asesor_aca` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `id_alumno`, `id_empresa`, `id_asesor_emp`, `id_asesor_aca`, `id_proyecto`, `status`) VALUES
(2, 2, 2, 2, 2, 2, 1),
(3, 3, 3, 3, 3, 3, 1),
(4, 4, 4, 4, 4, 4, 1),
(6, 7, 6, 6, 6, 7, 1),
(7, 8, 7, 7, 7, 8, 1),
(8, 9, 8, 8, 8, 9, 1),
(16, 17, 16, 16, 16, 17, 1),
(19, 20, 19, 19, 19, 20, 1),
(20, 21, 20, 20, 20, 21, 1),
(21, 22, 21, 21, 21, 22, 1),
(22, 23, 22, 22, 22, 23, 1),
(23, 24, 23, 23, 23, 24, 1),
(24, 25, 24, 24, 24, 25, 1),
(27, 29, 28, 28, 27, 29, 1),
(28, 30, 29, 29, 28, 30, 1),
(33, 35, 34, 34, 33, 35, 1),
(35, 37, 36, 36, 35, 37, 1),
(36, 38, 37, 37, 36, 38, 1),
(43, 49, 44, 44, 43, 49, 1),
(44, 50, 45, 45, 44, 50, 1),
(46, 52, 47, 47, 46, 52, 1),
(47, 53, 48, 48, 47, 53, 1),
(48, 54, 49, 49, 48, 54, 1),
(50, 58, 51, 51, 50, 58, 1),
(51, 59, 52, 52, 51, 59, 1),
(54, 62, 55, 55, 54, 62, 1),
(55, 63, 56, 56, 55, 63, 1),
(56, 64, 57, 57, 56, 64, 1),
(57, 65, 58, 58, 57, 65, 1),
(58, 66, 59, 59, 58, 66, 1),
(59, 67, 60, 60, 59, 67, 1),
(63, 71, 64, 64, 63, 71, 1),
(66, 74, 67, 67, 66, 74, 1),
(67, 75, 68, 68, 67, 75, 1),
(68, 76, 69, 69, 68, 76, 1),
(69, 77, 70, 70, 69, 77, 1),
(71, 79, 72, 72, 71, 79, 1),
(73, 81, 74, 74, 73, 81, 1),
(75, 83, 76, 76, 75, 83, 1),
(76, 84, 77, 77, 76, 84, 1),
(80, 88, 81, 81, 80, 88, 1),
(81, 89, 82, 82, 81, 89, 1),
(83, 91, 84, 84, 83, 91, 1),
(85, 93, 86, 86, 85, 93, 1),
(87, 95, 88, 88, 87, 95, 1),
(88, 96, 89, 89, 88, 96, 1),
(89, 97, 90, 90, 89, 97, 1),
(90, 98, 91, 91, 90, 98, 1),
(93, 101, 94, 94, 93, 101, 1),
(95, 103, 96, 96, 95, 103, 1),
(96, 104, 97, 97, 96, 104, 1),
(97, 105, 98, 98, 97, 105, 1),
(98, 106, 99, 99, 98, 106, 1),
(99, 107, 100, 100, 99, 107, 1),
(100, 108, 101, 101, 100, 108, 1),
(101, 109, 102, 102, 101, 109, 1),
(102, 110, 103, 103, 102, 110, 1),
(106, 114, 107, 107, 106, 114, 1),
(109, 117, 110, 110, 109, 117, 1),
(111, 119, 112, 112, 111, 119, 1),
(112, 120, 113, 113, 112, 120, 1),
(119, 127, 120, 120, 119, 127, 1),
(120, 128, 121, 121, 120, 128, 1),
(122, 130, 123, 123, 122, 130, 1),
(123, 131, 124, 124, 123, 131, 1),
(124, 132, 125, 125, 124, 132, 1),
(125, 133, 126, 126, 125, 133, 1),
(127, 135, 128, 128, 127, 135, 1),
(130, 138, 131, 131, 130, 138, 1),
(131, 139, 132, 132, 131, 139, 1),
(132, 140, 133, 133, 132, 140, 1),
(133, 141, 134, 134, 133, 141, 1),
(135, 143, 136, 136, 135, 143, 1),
(136, 144, 137, 137, 136, 144, 1),
(137, 145, 138, 138, 137, 145, 1),
(138, 146, 139, 139, 138, 146, 1),
(139, 147, 140, 140, 139, 147, 1),
(140, 148, 141, 141, 140, 148, 1),
(141, 149, 142, 142, 141, 149, 1),
(142, 150, 143, 143, 142, 150, 1),
(143, 151, 144, 144, 143, 151, 1),
(144, 152, 145, 145, 144, 152, 1),
(145, 153, 146, 146, 145, 153, 1),
(146, 154, 147, 147, 146, 154, 1),
(147, 155, 148, 148, 147, 155, 1),
(148, 156, 149, 149, 148, 156, 1),
(149, 157, 150, 150, 149, 157, 1),
(150, 158, 151, 151, 150, 158, 1),
(151, 159, 152, 152, 151, 159, 1),
(152, 160, 153, 153, 152, 160, 1),
(153, 161, 154, 154, 153, 161, 1),
(154, 162, 155, 155, 154, 162, 1),
(155, 163, 156, 156, 155, 163, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_def`
--

CREATE TABLE `formulario_def` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_asesor_emp` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_detalle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario_def`
--

INSERT INTO `formulario_def` (`id`, `id_alumno`, `id_asesor_emp`, `id_proyecto`, `id_detalle`) VALUES
(5, 5, 5, 5, 5),
(6, 6, 6, 6, 6),
(7, 7, 7, 7, 7),
(8, 8, 8, 8, 8),
(9, 9, 9, 9, 9),
(10, 10, 10, 10, 10),
(11, 11, 11, 11, 11),
(13, 13, 13, 13, 13),
(14, 14, 14, 14, 14),
(15, 15, 15, 15, 15),
(16, 16, 16, 16, 16),
(17, 17, 17, 17, 17),
(18, 18, 18, 18, 18),
(19, 19, 19, 19, 19),
(20, 20, 20, 20, 20),
(21, 21, 21, 21, 21),
(22, 22, 22, 22, 22),
(23, 23, 23, 23, 23),
(24, 24, 24, 24, 24),
(25, 25, 25, 25, 25),
(26, 26, 26, 26, 26),
(27, 27, 27, 27, 27),
(28, 28, 28, 28, 28),
(29, 29, 29, 29, 29),
(30, 30, 30, 30, 30),
(31, 31, 31, 31, 31),
(32, 32, 32, 32, 32),
(33, 33, 33, 33, 33),
(34, 34, 34, 34, 34),
(35, 35, 35, 35, 35),
(36, 36, 36, 36, 36),
(38, 38, 38, 38, 38),
(39, 39, 39, 39, 39),
(40, 40, 40, 40, 40),
(41, 41, 41, 41, 41),
(42, 42, 42, 42, 42),
(43, 43, 43, 43, 43),
(44, 44, 44, 44, 44),
(45, 45, 45, 45, 45),
(46, 46, 46, 46, 46),
(47, 47, 47, 47, 47),
(48, 48, 48, 48, 48),
(49, 49, 49, 49, 49),
(50, 50, 50, 50, 50),
(52, 52, 52, 52, 52),
(53, 53, 53, 53, 53),
(54, 54, 54, 54, 54),
(55, 55, 55, 55, 55),
(56, 56, 56, 56, 56),
(57, 57, 57, 57, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id_procesos` int(11) NOT NULL,
  `nombre_proceso` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id_procesos`, `nombre_proceso`) VALUES
(1, 'Estancías 1'),
(2, 'Estancías 2'),
(3, 'Estadía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre_proyecto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre_proyecto`) VALUES
(2, 'Monitoreo Remoto de Unidad Imagenología'),
(3, 'Integracion Facturacion Electronica SAT'),
(4, 'Plataforma control y manejodeinformación'),
(6, 'no aplica'),
(7, 'No aplica'),
(8, 'Origen y características del SARS-CoV-2'),
(9, 'Bitácora de mantenimientos'),
(17, 'Programa de mantenimiento y capacitación'),
(20, 'NO APLICA'),
(21, 'NO APLICA'),
(22, 'SOFTWARE PARA COTIZACIONES'),
(23, 'Diseño e implementación de un sistema'),
(24, 'Recomendaciones de buena practica para'),
(25, 'No aplica'),
(26, 'N/A'),
(29, 'REGISTRO DE CENOTES'),
(30, 'No'),
(35, 'Diversidad de reptiles'),
(37, 'No aplica'),
(38, 'SNOKI-APP'),
(41, 'Mantenimiento Genesis'),
(42, 'Mantenimiento Genesis'),
(43, 'Mantenimiento Genesis'),
(44, 'Mantenimiento Genesis'),
(49, 'DESARROLLO DE PROCESOS DE LOS DOCUMENTOS DIGITALES EN EL DEPARTAMENTO DE COCINA.'),
(50, 'Estrategias de Difusión Digital'),
(52, 'Generación de un proceso administrativo que maximice el control en Grupo DG'),
(53, 'Análisis del origen, características y zoonosis del SARS - CoV- 2'),
(54, 'Plan Financiero de Ingresos y gastos Vector Casa de Bolsa SA de CV'),
(55, 'CONSTRUCCIÓN DE ESCENARIO FINANCIERO PARA PAGO DE IMPUESTO (IVA)'),
(57, 'CONSTRUCCIÓN DE ESCENARIO FINANCIERO PARA PAGO DE IMPUESTO (IVA)'),
(58, 'CONSTRUCCIÓN DE ESCENARIO FINANCIERO PARA PAGO DE IMPUESTO (IVA)'),
(59, 'Royal Uno'),
(62, 'Análisis del origen, características y zoonosis del SARS - CoV- 2'),
(63, 'ELABORACIÓN Y CONTROL DE PRESUPUESTOS SEMANALES DE SERVICIOS PORTUARIOS SERPAC S.A DE C.V.'),
(64, 'Catálogo de otolitos de la colección de peces del laboratorio de Ecología y Biodiversidad de Organismos Acuáticos (LEBOA)'),
(65, 'MANUAL DE DESCRIPCIÓN Y PERFIL DE PUESTOS DEL ENCARGADO DE BIBLIOTECA'),
(66, 'Proceso y control de documentación para los expedientes laborales.'),
(67, 'No aplica'),
(71, 'Identificación del efecto de inhibición de los antibióticos sobre las bacterias.'),
(74, 'Efecto de la transformación del hábitat sobre la diversidad de especies de reptiles en la Península de Yucatán, México.'),
(75, 'Reporte clinico'),
(76, 'Aplicación de antibiogramas contra bacterias patógenas de pacientes infectados.'),
(77, 'Aplicación de antibiogramas contra bacterias patógenas de pacientes infectados.'),
(79, 'Programa de capacitación para el uso de ventiladores mecánicos'),
(81, 'Diseño de un manual de reclutamiento, selección, contratación e inducción del talento humano en el hotel Beachscape.'),
(83, 'Implementación de un sistema de seguridad en el trabajo en la empresa Tiendas Soriana S.A DE C.V , Sucursal 951, Niños Héroes'),
(84, 'Diseño de una Herramienta Digital para Optimizar el Tiempo de Respuesta de las Solicitudes de Mantenimiento de Equipo Médico'),
(88, 'Determinación de parámetros fisicoquimicos y microbiológicos en muestras líquidas y sólidas en seres humanos'),
(89, 'Relación longitud-peso y análisis de contenido estomacal del pez Sábalo (Megalops atlanticus) en el Área Natural Protegida “Laguna Manatí”, Quintana Roo.'),
(91, 'Reporte clínico'),
(93, 'ELABORACIÓN Y CONTROL DE PRESUPUESTOS SEMANALES DE SERVICIOS PORTUARIOS SERPAC S.A DE C.V'),
(95, 'Implementación del procedimiento para la evaluación del desempeño de medios de cultivo'),
(96, 'Metodología por medio de la técnica de filtración por membrana para determinar coliformes totales y coliformes fecales.'),
(97, 'Metodología por medio de la técnica de filtración por membrana para determinar coliformes totales y coliformes fecales.'),
(98, 'Detección de Salmonella spp. en muestras de alimentos conforme a lo establecido en la NOM 210-SSA1- 2014 Apéndice Normativo A, realizando pruebas bioquímicas para la diferenciación de las especies'),
(101, 'Sistema de auditoria para determinar las cuotas obrero patronales'),
(103, 'ARMADO DE RACK Y SERVIDORES PARA MAQUINAS VIRTUALES.'),
(104, 'No aplica'),
(105, 'Empleo de las diferentes técnicas para la preparación de muestras para el análisis clínico'),
(106, 'No aplica.'),
(107, 'Análisis del origen, características y zoonosis del SARS - CoV- 2'),
(108, 'Fibrax WebApp'),
(109, 'Desarrollo de plataforma para el proceso de estancias y estadías'),
(110, 'Desarrollo de plataforma para el proceso de estancias y estadías'),
(114, 'NO APLICA'),
(117, 'Análisis de calidad en productos y procesos para la obtención del distintivo cristal en los distintos hoteles y restaurantes de la cadena Royal Resorts.'),
(119, 'Sistema de almacenes'),
(120, 'Manual de procedimientos'),
(127, 'N/A'),
(128, 'N/A'),
(130, 'N/A'),
(131, '(CMS) Sistema de Manejo de Contenido'),
(132, 'Mantenimiento de la Feria Virtual de Quintana Roo'),
(133, 'Determinación e identificación de coliformes fecales y totales, y enterococos en 5 cenotes de Cancún Quintana Roo.'),
(135, 'Desarrollar modulo del sistema UIMQROO.'),
(138, 'Seguimiento a Página Web de COLEBI'),
(139, 'DISEÑO DE UNA HERRAMIENTA DIGITAL PARA OPTIMIZAR EL TIEMPO DE RESPUESTA DE LAS SOLICITUDES DE MANTENIMIENTO DE EQUIPO MÉDICO.'),
(140, 'Realización de formatos útiles para el departamento de biomédica'),
(141, 'APP ITSE'),
(143, 'Plataforma digital \"Control Escolar inteligente\"'),
(144, 'Elaborar y establecer el proceso para la elaboración de las nóminas de la empresa INMO TR S.A. de C.V.'),
(145, 'Diseño del control de inventario de accesorios, refacciones y consumibles médicos del hospital Amerimed Cancún'),
(146, 'Plataforma de Recursos Humanos'),
(147, 'reporte clinico'),
(148, 'Identificación del efecto de inhibición de los antibióticos sobre las bacterias.'),
(149, 'Bitácora de Mantenimientos'),
(150, 'Gestión clínica y capacitación de equipos medicos'),
(151, 'Manual de procedimientos'),
(152, 'Gestion de inventario de equipo medico'),
(153, 'Programa de capacitación en el manejo de equipo médico e instrumentación biomédica.'),
(154, 'Diseño del control de inventario de accesorios, refacciones y consumibles médicos del Hospital Amerimed Cancún.'),
(155, 'Implementación del procedimiento para la evaluación del desempeño de medios de cultivo'),
(156, 'Programa de capacitación en el manejo de equipo médico e instrumentación biomédica.'),
(157, 'Bitácora de fallas de los equipos médicos'),
(158, 'Preparación de cursos de capacitación a los supervisores en Palace Resorts Cancún para evitar la rotación del personal en el siguiente trimestre.'),
(159, 'DESARROLLO DE PROCESOS DE LOS DOCUMENTOS DIGITALES EN EL DEPARTAMENTO DE COCINA.'),
(160, 'Manual de Descripción y Perfil de puesto del Encargado de Biblioteca de la UPQROO'),
(161, 'Organización y funcionamiento de la clínica de terapia física de la universidad politecnica de quintana roo'),
(162, 'Desarrollar la infraestructura, mobiliario y equipo de la clínica de terapia física de la UPQROO'),
(163, 'Manual de procedimientos en el Área de Ventanilla Única de Tramites y Servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_def`
--

CREATE TABLE `proyecto_def` (
  `id` int(11) NOT NULL,
  `objetivos_proyecto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto_def`
--

INSERT INTO `proyecto_def` (`id`, `objetivos_proyecto`) VALUES
(5, 'Realizar las correspondientes actividades de mantenimiento a la plataforma'),
(6, 'Desarrollar una aplicación para la elaboración determinar las cuotas obrero patronales'),
(7, 'Elaborar un proyecto de mejora en el área encargada de gestión de almacenes'),
(8, 'Desarrollar de esta aplicación usando herramientas multiplataforma'),
(9, 'Desarrollar una plataforma que contenga funcionalidades necesarias para los procesos de la empresa.'),
(10, 'desarrollar una sitio web para que se mejore el manejo de los documentos de estancia / estadía'),
(11, 'Sistema Integral con el fin de monitoria una unidad de Imagenología de forma remota.'),
(13, 'Control de tiempo de respuesta a atención para mejora de eficacia y coordinación entre departamentos'),
(14, 'Control de tiempo de respuesta a atención para mejora de eficacia y coordinación entre departamentos'),
(15, 'Establecer lineamientos y politicas de operación para el departamento de ingenieria biomedica'),
(16, 'Dar seguimiento al proyecto \"Página Web Autoadministrable\" para aumentar el alcance de servicios.'),
(17, 'Permitir la toma de decisiones, y agilizar los procesos mediante el nuevo software'),
(18, 'CONFIGURACION DE USO DE MAQUINAS VIRTUALES PARA MONTAJE DE SOFTWARE'),
(19, 'Identificar el origen, caracterización y zoonosis del SARS - CoV- 2 para su documentación en el manu'),
(20, 'Aprender y desarrollar las actividades del biomedico dentro del hospital'),
(21, 'Generar facturas electronicas las empresas para sus clientes'),
(22, 'Desarrollar un proceso de capacitación para el personal y gestión clínica'),
(23, 'Brindar adecuada gestion de cada equipo medico'),
(24, 'Establecer lineamientos y politicas de operación para el departamento de ingenieria biomedica'),
(25, 'Realizar los formatos para el departamento de ingeniería biomedica'),
(26, 'Aplicar la normatividad vigente en el proceso de detección de Salmonella spp. en muestras'),
(27, 'Establecer el proceso para la elaboración de las nóminas de la empresa INMO TR S.A. de C.V.'),
(28, 'Fomentar las buenas prácticas del manejo de equipamiento médico e instrumentación biomédica.'),
(29, 'Desarrollar un inventario de insumos médicos a través de una herramienta informática  de gestión.'),
(30, 'Analizar e interpretar los diferentes medios de identificación en preparación y manejo de muestras'),
(31, 'Manejo del lenguaje Angular con Firebase y Angular Material'),
(32, 'Determinar la capacidad de los medios de cultivo para el crecimiento de microorganismos patógenos'),
(33, 'Diseñar un inventario de insumos médicos que optimice la gestión de estos.'),
(34, 'Implementar un programa de capacitación dirigido al personal de enfermería'),
(35, 'DESARROLLO DE UNA SOLUCIÓN DE SOFTWARE'),
(36, 'Identificar la importancia del cambio climático en  los ectotermos'),
(38, 'Fomentar buen manejo de equipamiento médico e instrumentación biomédica.'),
(39, 'Identificar y comprender las diferentes fallas que pueden presentar los equipos médicos'),
(40, 'Identificar y minimizar los accidentes en el trabajo'),
(41, 'Establecer lineamientos, estructuras y acciones.'),
(42, 'ESTABLECER UN MAYOR ALCANCE EN LOS EVENTOS REALIZADOS POR EL INTITUTO MUNICIPAL DE LA JUVENTUD'),
(43, 'Desarrollar un sistema WEB administrativo para digitalización de trámites y procesos.'),
(44, 'Ordenar Alfabéticamente los contratistas con sus respectivos empleados.'),
(45, 'Elaborar un manual de descripciòn y perfil de puesto del Encargado de Biblioteca'),
(46, 'Facilitar el manejo y la búsqueda de la información solicitada'),
(47, 'Un mejor servicio a los clientes que visiten las instalaciones del hotel royal uno'),
(48, 'Colectar muestras de 5 cenotes de Cancún Quintana Roo. Identificar coliformes'),
(49, 'Generar acciones para un proceso administrativo que maximice el control del inventario en grupo DG'),
(50, 'Registrar cenotes y guardar sus caracteristicas para su estudido y conservación.'),
(52, 'DeterminareltipodecrecimientoylacomposiciónalimenticiadelsábaloMegalopsatlanticusenunalagunacostera'),
(53, 'Gestionar un diagnostico situacional para determinar las causas del problema de la clinica de T.F'),
(54, 'Gestionar los recursos materiales necesarios para la operación de la clínica de terapia física.'),
(55, 'Distinguir el patrón homogéneo en la forma de los otolitos de una misma famila.'),
(56, 'Rediseñar un manual que ayude a conocer el proceso de operación del Área de Ventanilla Única'),
(57, 'OPTIMIZAR UN PLAN DE ACCIÓN PARA LA DIGITALIZACION DE DOCUMENTOS EN EL DEPARTAMENTO DE COCINA.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id`, `id_usuario`, `id_formulario`) VALUES
(2, 62, 2),
(3, 79, 3),
(4, 73, 4),
(7, 97, 7),
(8, 53, 8),
(16, 59, 16),
(20, 10, 20),
(21, 76, 21),
(22, 48, 22),
(23, 49, 23),
(24, 12, 24),
(27, 81, 27),
(28, 7, 28),
(35, 86, 35),
(36, 80, 36),
(43, 111, 43),
(44, 21, 44),
(46, 105, 46),
(47, 112, 47),
(48, 85, 48),
(50, 95, 50),
(51, 77, 51),
(54, 116, 54),
(55, 114, 55),
(56, 46, 56),
(57, 118, 57),
(58, 119, 58),
(59, 11, 59),
(66, 43, 66),
(67, 18, 67),
(68, 37, 68),
(69, 37, 69),
(71, 59, 71),
(73, 123, 73),
(75, 113, 75),
(76, 63, 76),
(80, 31, 80),
(81, 47, 81),
(83, 14, 83),
(85, 126, 85),
(87, 104, 87),
(88, 35, 88),
(89, 40, 89),
(90, 44, 90),
(93, 107, 93),
(95, 66, 95),
(96, 6, 96),
(97, 38, 97),
(98, 13, 98),
(99, 131, 99),
(100, 130, 100),
(101, 75, 101),
(106, 8, 106),
(109, 135, 109),
(111, 121, 111),
(112, 109, 112),
(119, 9, 119),
(120, 5, 120),
(122, 15, 122),
(123, 72, 123),
(124, 78, 124),
(125, 34, 125),
(127, 74, 127),
(130, 128, 130),
(131, 57, 131),
(132, 138, 132),
(133, 140, 133),
(135, 93, 135),
(136, 30, 136),
(137, 56, 137),
(138, 142, 138),
(139, 16, 139),
(140, 41, 140),
(141, 52, 141),
(142, 61, 142),
(143, 60, 143),
(144, 58, 144),
(145, 55, 145),
(146, 65, 146),
(147, 84, 147),
(148, 64, 148),
(149, 144, 149),
(150, 147, 150),
(151, 146, 151),
(152, 124, 152),
(153, 151, 153),
(154, 150, 154),
(155, 120, 155);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_def`
--

CREATE TABLE `respuesta_def` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta_def`
--

INSERT INTO `respuesta_def` (`id`, `id_usuario`, `id_formulario`) VALUES
(5, 78, 5),
(6, 107, 6),
(7, 121, 7),
(8, 80, 8),
(9, 130, 9),
(10, 75, 10),
(11, 62, 11),
(13, 57, 13),
(14, 63, 14),
(15, 109, 15),
(16, 128, 16),
(17, 93, 17),
(18, 66, 18),
(19, 131, 19),
(20, 52, 20),
(21, 79, 21),
(22, 61, 22),
(23, 58, 23),
(24, 60, 24),
(25, 138, 25),
(26, 44, 26),
(27, 30, 27),
(28, 55, 28),
(29, 65, 29),
(30, 38, 30),
(31, 72, 31),
(32, 84, 32),
(33, 56, 33),
(34, 59, 34),
(35, 140, 35),
(36, 43, 36),
(38, 64, 38),
(39, 144, 39),
(40, 113, 40),
(41, 123, 41),
(42, 21, 42),
(43, 74, 43),
(44, 119, 44),
(45, 124, 45),
(46, 73, 46),
(47, 77, 47),
(48, 34, 48),
(49, 105, 49),
(50, 81, 50),
(52, 47, 52),
(53, 151, 53),
(54, 150, 54),
(55, 46, 55),
(56, 120, 56),
(57, 146, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_doc`
--

CREATE TABLE `respuesta_doc` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_documentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta_doc`
--

INSERT INTO `respuesta_doc` (`id`, `id_usuario`, `id_documentos`) VALUES
(1, 75, 1),
(4, 113, 4),
(5, 109, 5),
(7, 128, 7),
(8, 123, 8),
(9, 121, 9),
(10, 80, 10),
(11, 57, 11),
(12, 136, 12),
(13, 107, 13),
(14, 93, 14),
(15, 130, 15),
(16, 31, 16),
(17, 135, 17),
(18, 53, 18),
(19, 62, 19),
(20, 40, 20),
(21, 61, 21),
(22, 52, 22),
(23, 56, 23),
(24, 34, 24),
(25, 35, 25),
(26, 41, 26),
(27, 37, 27),
(28, 44, 28),
(29, 66, 29),
(30, 72, 30),
(31, 140, 31),
(32, 60, 32),
(33, 58, 33),
(34, 16, 34),
(35, 55, 35),
(36, 30, 36),
(37, 78, 37),
(38, 38, 38),
(40, 84, 40),
(41, 59, 41),
(42, 65, 42),
(43, 43, 43),
(44, 63, 44),
(45, 144, 45),
(46, 142, 46),
(47, 74, 47),
(48, 64, 48),
(49, 7, 49),
(50, 14, 50),
(51, 18, 51),
(52, 5, 52),
(53, 105, 53),
(54, 15, 54),
(55, 9, 55),
(56, 147, 56),
(57, 21, 57),
(58, 146, 58),
(59, 10, 59),
(60, 119, 60),
(61, 79, 61),
(62, 124, 62),
(63, 8, 63),
(64, 77, 64),
(65, 86, 65),
(66, 11, 66),
(67, 47, 67),
(68, 13, 68),
(69, 6, 69),
(70, 81, 70),
(71, 12, 71),
(72, 120, 72),
(73, 150, 73),
(74, 151, 74),
(75, 138, 75),
(76, 46, 76),
(77, 73, 77);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_etapa`
--

CREATE TABLE `respuesta_etapa` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_etapa_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta_etapa`
--

INSERT INTO `respuesta_etapa` (`id`, `id_usuario`, `id_etapa_proyecto`) VALUES
(61, 78, 61),
(62, 78, 62),
(63, 78, 63),
(64, 78, 64),
(65, 78, 65),
(66, 78, 66),
(67, 78, 67),
(68, 78, 68),
(69, 78, 69),
(70, 78, 70),
(71, 78, 71),
(72, 78, 72),
(73, 78, 73),
(74, 78, 74),
(75, 78, 75),
(76, 107, 76),
(77, 107, 77),
(78, 107, 78),
(79, 107, 79),
(80, 107, 80),
(81, 107, 81),
(82, 107, 82),
(83, 107, 83),
(84, 107, 84),
(85, 107, 85),
(86, 107, 86),
(87, 107, 87),
(88, 107, 88),
(89, 107, 89),
(90, 107, 90),
(91, 121, 91),
(92, 121, 92),
(93, 121, 93),
(94, 121, 94),
(95, 121, 95),
(96, 121, 96),
(97, 121, 97),
(98, 121, 98),
(99, 121, 99),
(100, 121, 100),
(101, 121, 101),
(102, 121, 102),
(103, 121, 103),
(104, 121, 104),
(105, 121, 105),
(106, 80, 106),
(107, 80, 107),
(108, 80, 108),
(109, 80, 109),
(110, 80, 110),
(111, 80, 111),
(112, 80, 112),
(113, 80, 113),
(114, 80, 114),
(115, 80, 115),
(116, 80, 116),
(117, 80, 117),
(118, 80, 118),
(119, 80, 119),
(120, 80, 120),
(121, 130, 121),
(122, 130, 122),
(123, 130, 123),
(124, 130, 124),
(125, 130, 125),
(126, 130, 126),
(127, 130, 127),
(128, 130, 128),
(129, 130, 129),
(130, 130, 130),
(131, 130, 131),
(132, 130, 132),
(133, 130, 133),
(134, 130, 134),
(135, 130, 135),
(136, 75, 136),
(137, 75, 137),
(138, 75, 138),
(139, 75, 139),
(140, 75, 140),
(141, 75, 141),
(142, 75, 142),
(143, 75, 143),
(144, 75, 144),
(145, 75, 145),
(146, 75, 146),
(147, 75, 147),
(148, 75, 148),
(149, 75, 149),
(150, 75, 150),
(151, 62, 151),
(152, 62, 152),
(153, 62, 153),
(154, 62, 154),
(155, 62, 155),
(156, 62, 156),
(157, 62, 157),
(158, 62, 158),
(159, 62, 159),
(160, 62, 160),
(161, 62, 161),
(162, 62, 162),
(163, 62, 163),
(164, 62, 164),
(165, 62, 165),
(181, 57, 181),
(182, 57, 182),
(183, 57, 183),
(184, 57, 184),
(185, 57, 185),
(186, 57, 186),
(187, 57, 187),
(188, 57, 188),
(189, 57, 189),
(190, 57, 190),
(191, 57, 191),
(192, 57, 192),
(193, 57, 193),
(194, 57, 194),
(195, 57, 195),
(196, 63, 196),
(197, 63, 197),
(198, 63, 198),
(199, 63, 199),
(200, 63, 200),
(201, 63, 201),
(202, 63, 202),
(203, 63, 203),
(204, 63, 204),
(205, 63, 205),
(206, 63, 206),
(207, 63, 207),
(208, 63, 208),
(209, 63, 209),
(210, 63, 210),
(211, 109, 211),
(212, 109, 212),
(213, 109, 213),
(214, 109, 214),
(215, 109, 215),
(216, 109, 216),
(217, 109, 217),
(218, 109, 218),
(219, 109, 219),
(220, 109, 220),
(221, 109, 221),
(222, 109, 222),
(223, 109, 223),
(224, 109, 224),
(225, 109, 225),
(226, 128, 226),
(227, 128, 227),
(228, 128, 228),
(229, 128, 229),
(230, 128, 230),
(231, 128, 231),
(232, 128, 232),
(233, 128, 233),
(234, 128, 234),
(235, 128, 235),
(236, 128, 236),
(237, 128, 237),
(238, 128, 238),
(239, 128, 239),
(240, 128, 240),
(241, 93, 241),
(242, 93, 242),
(243, 93, 243),
(244, 93, 244),
(245, 93, 245),
(246, 93, 246),
(247, 93, 247),
(248, 93, 248),
(249, 93, 249),
(250, 93, 250),
(251, 93, 251),
(252, 93, 252),
(253, 93, 253),
(254, 93, 254),
(255, 93, 255),
(256, 66, 256),
(257, 66, 257),
(258, 66, 258),
(259, 66, 259),
(260, 66, 260),
(261, 66, 261),
(262, 66, 262),
(263, 66, 263),
(264, 66, 264),
(265, 66, 265),
(266, 66, 266),
(267, 66, 267),
(268, 66, 268),
(269, 66, 269),
(270, 66, 270),
(271, 131, 271),
(272, 131, 272),
(273, 131, 273),
(274, 131, 274),
(275, 131, 275),
(276, 131, 276),
(277, 131, 277),
(278, 131, 278),
(279, 131, 279),
(280, 131, 280),
(281, 131, 281),
(282, 131, 282),
(283, 131, 283),
(284, 131, 284),
(285, 131, 285),
(286, 52, 286),
(287, 52, 287),
(288, 52, 288),
(289, 52, 289),
(290, 52, 290),
(291, 52, 291),
(292, 52, 292),
(293, 52, 293),
(294, 52, 294),
(295, 52, 295),
(296, 52, 296),
(297, 52, 297),
(298, 52, 298),
(299, 52, 299),
(300, 52, 300),
(301, 79, 301),
(302, 79, 302),
(303, 79, 303),
(304, 79, 304),
(305, 79, 305),
(306, 79, 306),
(307, 79, 307),
(308, 79, 308),
(309, 79, 309),
(310, 79, 310),
(311, 79, 311),
(312, 79, 312),
(313, 79, 313),
(314, 79, 314),
(315, 79, 315),
(316, 61, 316),
(317, 61, 317),
(318, 61, 318),
(319, 61, 319),
(320, 61, 320),
(321, 61, 321),
(322, 61, 322),
(323, 61, 323),
(324, 61, 324),
(325, 61, 325),
(326, 61, 326),
(327, 61, 327),
(328, 61, 328),
(329, 61, 329),
(330, 61, 330),
(331, 58, 331),
(332, 58, 332),
(333, 58, 333),
(334, 58, 334),
(335, 58, 335),
(336, 58, 336),
(337, 58, 337),
(338, 58, 338),
(339, 58, 339),
(340, 58, 340),
(341, 58, 341),
(342, 58, 342),
(343, 58, 343),
(344, 58, 344),
(345, 58, 345),
(346, 60, 346),
(347, 60, 347),
(348, 60, 348),
(349, 60, 349),
(350, 60, 350),
(351, 60, 351),
(352, 60, 352),
(353, 60, 353),
(354, 60, 354),
(355, 60, 355),
(356, 60, 356),
(357, 60, 357),
(358, 60, 358),
(359, 60, 359),
(360, 60, 360),
(361, 138, 361),
(362, 138, 362),
(363, 138, 363),
(364, 138, 364),
(365, 138, 365),
(366, 138, 366),
(367, 138, 367),
(368, 138, 368),
(369, 138, 369),
(370, 138, 370),
(371, 138, 371),
(372, 138, 372),
(373, 138, 373),
(374, 138, 374),
(375, 138, 375),
(376, 44, 376),
(377, 44, 377),
(378, 44, 378),
(379, 44, 379),
(380, 44, 380),
(381, 44, 381),
(382, 44, 382),
(383, 44, 383),
(384, 44, 384),
(385, 44, 385),
(386, 44, 386),
(387, 44, 387),
(388, 44, 388),
(389, 44, 389),
(390, 44, 390),
(391, 30, 391),
(392, 30, 392),
(393, 30, 393),
(394, 30, 394),
(395, 30, 395),
(396, 30, 396),
(397, 30, 397),
(398, 30, 398),
(399, 30, 399),
(400, 30, 400),
(401, 30, 401),
(402, 30, 402),
(403, 30, 403),
(404, 30, 404),
(405, 30, 405),
(406, 55, 406),
(407, 55, 407),
(408, 55, 408),
(409, 55, 409),
(410, 55, 410),
(411, 55, 411),
(412, 55, 412),
(413, 55, 413),
(414, 55, 414),
(415, 55, 415),
(416, 55, 416),
(417, 55, 417),
(418, 55, 418),
(419, 55, 419),
(420, 55, 420),
(421, 65, 421),
(422, 65, 422),
(423, 65, 423),
(424, 65, 424),
(425, 65, 425),
(426, 65, 426),
(427, 65, 427),
(428, 65, 428),
(429, 65, 429),
(430, 65, 430),
(431, 65, 431),
(432, 65, 432),
(433, 65, 433),
(434, 65, 434),
(435, 65, 435),
(436, 38, 436),
(437, 38, 437),
(438, 38, 438),
(439, 38, 439),
(440, 38, 440),
(441, 38, 441),
(442, 38, 442),
(443, 38, 443),
(444, 38, 444),
(445, 38, 445),
(446, 38, 446),
(447, 38, 447),
(448, 38, 448),
(449, 38, 449),
(450, 38, 450),
(451, 72, 451),
(452, 72, 452),
(453, 72, 453),
(454, 72, 454),
(455, 72, 455),
(456, 72, 456),
(457, 72, 457),
(458, 72, 458),
(459, 72, 459),
(460, 72, 460),
(461, 72, 461),
(462, 72, 462),
(463, 72, 463),
(464, 72, 464),
(465, 72, 465),
(466, 84, 466),
(467, 84, 467),
(468, 84, 468),
(469, 84, 469),
(470, 84, 470),
(471, 84, 471),
(472, 84, 472),
(473, 84, 473),
(474, 84, 474),
(475, 84, 475),
(476, 84, 476),
(477, 84, 477),
(478, 84, 478),
(479, 84, 479),
(480, 84, 480),
(481, 56, 481),
(482, 56, 482),
(483, 56, 483),
(484, 56, 484),
(485, 56, 485),
(486, 56, 486),
(487, 56, 487),
(488, 56, 488),
(489, 56, 489),
(490, 56, 490),
(491, 56, 491),
(492, 56, 492),
(493, 56, 493),
(494, 56, 494),
(495, 56, 495),
(496, 59, 496),
(497, 59, 497),
(498, 59, 498),
(499, 59, 499),
(500, 59, 500),
(501, 59, 501),
(502, 59, 502),
(503, 59, 503),
(504, 59, 504),
(505, 59, 505),
(506, 59, 506),
(507, 59, 507),
(508, 59, 508),
(509, 59, 509),
(510, 59, 510),
(511, 140, 511),
(512, 140, 512),
(513, 140, 513),
(514, 140, 514),
(515, 140, 515),
(516, 140, 516),
(517, 140, 517),
(518, 140, 518),
(519, 140, 519),
(520, 140, 520),
(521, 140, 521),
(522, 140, 522),
(523, 140, 523),
(524, 140, 524),
(525, 140, 525),
(526, 43, 526),
(527, 43, 527),
(528, 43, 528),
(529, 43, 529),
(530, 43, 530),
(531, 43, 531),
(532, 43, 532),
(533, 43, 533),
(534, 43, 534),
(535, 43, 535),
(536, 43, 536),
(537, 43, 537),
(538, 43, 538),
(539, 43, 539),
(540, 43, 540),
(556, 64, 556),
(557, 64, 557),
(558, 64, 558),
(559, 64, 559),
(560, 64, 560),
(561, 64, 561),
(562, 64, 562),
(563, 64, 563),
(564, 64, 564),
(565, 64, 565),
(566, 64, 566),
(567, 64, 567),
(568, 64, 568),
(569, 64, 569),
(570, 64, 570),
(571, 144, 571),
(572, 144, 572),
(573, 144, 573),
(574, 144, 574),
(575, 144, 575),
(576, 144, 576),
(577, 144, 577),
(578, 144, 578),
(579, 144, 579),
(580, 144, 580),
(581, 144, 581),
(582, 144, 582),
(583, 144, 583),
(584, 144, 584),
(585, 144, 585),
(586, 113, 586),
(587, 113, 587),
(588, 113, 588),
(589, 113, 589),
(590, 113, 590),
(591, 113, 591),
(592, 113, 592),
(593, 113, 593),
(594, 113, 594),
(595, 113, 595),
(596, 113, 596),
(597, 113, 597),
(598, 113, 598),
(599, 113, 599),
(600, 113, 600),
(601, 123, 601),
(602, 123, 602),
(603, 123, 603),
(604, 123, 604),
(605, 123, 605),
(606, 123, 606),
(607, 123, 607),
(608, 123, 608),
(609, 123, 609),
(610, 123, 610),
(611, 123, 611),
(612, 123, 612),
(613, 123, 613),
(614, 123, 614),
(615, 123, 615),
(616, 21, 616),
(617, 21, 617),
(618, 21, 618),
(619, 21, 619),
(620, 21, 620),
(621, 21, 621),
(622, 21, 622),
(623, 21, 623),
(624, 21, 624),
(625, 21, 625),
(626, 21, 626),
(627, 21, 627),
(628, 21, 628),
(629, 21, 629),
(630, 21, 630),
(631, 74, 631),
(632, 74, 632),
(633, 74, 633),
(634, 74, 634),
(635, 74, 635),
(636, 74, 636),
(637, 74, 637),
(638, 74, 638),
(639, 74, 639),
(640, 74, 640),
(641, 74, 641),
(642, 74, 642),
(643, 74, 643),
(644, 74, 644),
(645, 74, 645),
(646, 119, 646),
(647, 119, 647),
(648, 119, 648),
(649, 119, 649),
(650, 119, 650),
(651, 119, 651),
(652, 119, 652),
(653, 119, 653),
(654, 119, 654),
(655, 119, 655),
(656, 119, 656),
(657, 119, 657),
(658, 119, 658),
(659, 119, 659),
(660, 119, 660),
(661, 124, 661),
(662, 124, 662),
(663, 124, 663),
(664, 124, 664),
(665, 124, 665),
(666, 124, 666),
(667, 124, 667),
(668, 124, 668),
(669, 124, 669),
(670, 124, 670),
(671, 124, 671),
(672, 124, 672),
(673, 124, 673),
(674, 124, 674),
(675, 124, 675),
(676, 73, 676),
(677, 73, 677),
(678, 73, 678),
(679, 73, 679),
(680, 73, 680),
(681, 73, 681),
(682, 73, 682),
(683, 73, 683),
(684, 73, 684),
(685, 73, 685),
(686, 73, 686),
(687, 73, 687),
(688, 73, 688),
(689, 73, 689),
(690, 73, 690),
(691, 77, 691),
(692, 77, 692),
(693, 77, 693),
(694, 77, 694),
(695, 77, 695),
(696, 77, 696),
(697, 77, 697),
(698, 77, 698),
(699, 77, 699),
(700, 77, 700),
(701, 77, 701),
(702, 77, 702),
(703, 77, 703),
(704, 77, 704),
(705, 77, 705),
(706, 34, 706),
(707, 34, 707),
(708, 34, 708),
(709, 34, 709),
(710, 34, 710),
(711, 34, 711),
(712, 34, 712),
(713, 34, 713),
(714, 34, 714),
(715, 34, 715),
(716, 34, 716),
(717, 34, 717),
(718, 34, 718),
(719, 34, 719),
(720, 34, 720),
(721, 105, 721),
(722, 105, 722),
(723, 105, 723),
(724, 105, 724),
(725, 105, 725),
(726, 105, 726),
(727, 105, 727),
(728, 105, 728),
(729, 105, 729),
(730, 105, 730),
(731, 105, 731),
(732, 105, 732),
(733, 105, 733),
(734, 105, 734),
(735, 105, 735),
(736, 81, 736),
(737, 81, 737),
(738, 81, 738),
(739, 81, 739),
(740, 81, 740),
(741, 81, 741),
(742, 81, 742),
(743, 81, 743),
(744, 81, 744),
(745, 81, 745),
(746, 81, 746),
(747, 81, 747),
(748, 81, 748),
(749, 81, 749),
(750, 81, 750),
(766, 47, 766),
(767, 47, 767),
(768, 47, 768),
(769, 47, 769),
(770, 47, 770),
(771, 47, 771),
(772, 47, 772),
(773, 47, 773),
(774, 47, 774),
(775, 47, 775),
(776, 47, 776),
(777, 47, 777),
(778, 47, 778),
(779, 47, 779),
(780, 47, 780),
(781, 151, 781),
(782, 151, 782),
(783, 151, 783),
(784, 151, 784),
(785, 151, 785),
(786, 151, 786),
(787, 151, 787),
(788, 151, 788),
(789, 151, 789),
(790, 151, 790),
(791, 151, 791),
(792, 151, 792),
(793, 151, 793),
(794, 151, 794),
(795, 151, 795),
(796, 150, 796),
(797, 150, 797),
(798, 150, 798),
(799, 150, 799),
(800, 150, 800),
(801, 150, 801),
(802, 150, 802),
(803, 150, 803),
(804, 150, 804),
(805, 150, 805),
(806, 150, 806),
(807, 150, 807),
(808, 150, 808),
(809, 150, 809),
(810, 150, 810),
(811, 46, 811),
(812, 46, 812),
(813, 46, 813),
(814, 46, 814),
(815, 46, 815),
(816, 46, 816),
(817, 46, 817),
(818, 46, 818),
(819, 46, 819),
(820, 46, 820),
(821, 46, 821),
(822, 46, 822),
(823, 46, 823),
(824, 46, 824),
(825, 46, 825),
(826, 120, 826),
(827, 120, 827),
(828, 120, 828),
(829, 120, 829),
(830, 120, 830),
(831, 120, 831),
(832, 120, 832),
(833, 120, 833),
(834, 120, 834),
(835, 120, 835),
(836, 120, 836),
(837, 120, 837),
(838, 120, 838),
(839, 120, 839),
(840, 120, 840),
(841, 146, 841),
(842, 146, 842),
(843, 146, 843),
(844, 146, 844),
(845, 146, 845),
(846, 146, 846),
(847, 146, 847),
(848, 146, 848),
(849, 146, 849),
(850, 146, 850),
(851, 146, 851),
(852, 146, 852),
(853, 146, 853),
(854, 146, 854),
(855, 146, 855);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nombre_tipo`) VALUES
(1, 'Micro'),
(2, 'Pequeña'),
(3, 'Mediana'),
(4, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id` int(11) NOT NULL,
  `nombre_u` varchar(100) DEFAULT NULL,
  `cargo_u` varchar(100) DEFAULT NULL,
  `firma` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id`, `nombre_u`, `cargo_u`, `firma`, `updated_at`) VALUES
(1, 'Lic. Mario David Asencio Pérez', 'Encargado de la Dirección de Vinculación, Difusión y Extensión Universitaria', 'firma de Dir. Vinculación.png', '2022-04-27 15:33:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Patricio', '201800065@estudiantes.upqroo.edu.mx', NULL, '$2y$10$mpx8RKVbxp0sMQ0XO80eCusIS0b8nQ0MMAqpDT915nCTsXc9jimrC', '', NULL, '2022-01-14 03:08:39', '2022-04-01 08:52:37', NULL),
(4, '201800068', '201800068@estudiantes.upqroo.edu.mx', NULL, '$2y$10$.R6zdTiYPzw5iOxNXKFc/Od7Z1Zjw/J3C.nuaSHO6ekhN.B1lKJLe', '', NULL, '2022-01-14 03:39:48', '2022-04-26 21:23:15', NULL),
(5, '201800226', '201800226@estudiantes.upqroo.edu.mx', NULL, '$2y$10$GH4/D8zz4HIQ3O73nfp63OWyMCKSdlQYKCHP6ICTuLKotPFHlftey', '', NULL, '2022-01-15 12:38:14', '2022-01-15 12:38:14', NULL),
(6, '201700251', '201700251@estudiantes.upqroo.edu.mx', NULL, '$2y$10$3r8R7A9AtvRJLSvWaInvDefQFPWOd.jj8MT0wl5JVe8.aN9y.Q49W', '', NULL, '2022-01-15 12:42:00', '2022-01-15 12:42:00', NULL),
(7, '201800236', '201800236@estudiantes.upqroo.edu.mx', NULL, '$2y$10$JMWyvolNowjCXF9XOD3F5OdLRCDvxVhInUXa1hu2GgLCaE3ACad2G', '', NULL, '2022-01-15 12:45:51', '2022-01-15 12:45:51', NULL),
(8, '201800239', '201800239@estudiantes.upqroo.edu.mx', NULL, '$2y$10$jGzmwRDgimKeAobxkIC8C.I6TeVj.ErK39bMAHRBnCMTd52Ofdxd6', '', NULL, '2022-01-15 12:48:34', '2022-01-15 12:48:34', NULL),
(9, '201800250', '201800250@estudiantes.upqroo.edu.mx', NULL, '$2y$10$5ql4BQOHLCLMqTSCzvXMlObjao6OKazMdcFKnUJYTLXK6Hw8H6Ki6', '', NULL, '2022-01-15 12:51:14', '2022-01-15 12:51:14', NULL),
(10, '201700268', '201800268@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PoWmOnJNhxc27UIst6x9z.Ekfrg6VQI68RI/kjJpzfWYYTnmrzRge', '', NULL, '2022-01-15 12:53:40', '2022-01-15 12:53:40', NULL),
(11, '201800259', '201800259@estudiantes.upqroo.edu.mx', NULL, '$2y$10$Tt2MmCS.NdsZsrN8/BZkk.B8MowWOW/801mlaCXHl.GFZKd.iRaN.', '', NULL, '2022-01-15 12:55:36', '2022-01-15 12:55:36', NULL),
(12, '201800293', '201800293@estudiantes.upqroo.edu.mx', NULL, '$2y$10$P6cVeqIIW4pqTf9XHlvASuzy1iA.LTl9Yp55dLmJdeSnCK4Lkcs.W', '', NULL, '2022-01-15 12:57:12', '2022-01-15 12:57:12', NULL),
(13, '201800299', '201800299@estudiantes.upqroo.edu.mx', NULL, '$2y$10$8EK2IG140.fWPOeTmL7L6OAGBReFLUt.Oeuhi3O49jETyRs8verny', '', NULL, '2022-01-15 12:58:18', '2022-01-15 12:58:18', NULL),
(14, '201700316', '201700316@estudiantes.upqroo.edu.mx', NULL, '$2y$10$EyrsUjRqG.r8Yy8xZUEYgeNtkMrKVEFw1O767xSmWQFIgJMPOENCW', '', NULL, '2022-01-15 13:02:21', '2022-01-15 13:02:21', NULL),
(15, '201700319', '201700319@estudiantes.upqroo.edu.mx', NULL, '$2y$10$zCJYHUGofMUovRVKVABK6e/lB3.q4tLB/BkEUK5Ek.c./9KGtX6LO', '', NULL, '2022-01-15 13:04:34', '2022-01-15 13:04:34', NULL),
(16, '201700332', '201700332@estudiantes.upqroo.edu.mx', NULL, '$2y$10$X4fcXrxzMGuUpwXMlT7sbuMdRUkbfvarYIZzv/TTVZAldTOmS8EaC', '', NULL, '2022-01-15 13:06:20', '2022-01-15 13:06:20', NULL),
(18, '201700361', '201700361@estudiantes.upqroo.edu.mx', NULL, '$2y$10$q1kTWuFjUd8d8zn1X7X3ius.7JnSYbx8X22OgvnGuPXDCkzEsiNB.', '', NULL, '2022-01-15 13:09:30', '2022-01-15 13:09:30', NULL),
(19, '202000346', '202000346@estudiantes.upqroo.edu.mx', NULL, '$2y$10$.HdH2uKxB38pygKVCbbTWeAFIv1B884lPYHO2SUjwc6MEKuA0lR.W', '', NULL, '2022-01-15 13:12:58', '2022-01-15 13:12:58', NULL),
(20, '202000358', '202000358@estudiantes.upqroo.edu.mx', NULL, '$2y$10$NqRtv03i8gGFWGuHeEe/VODo40eZmBkAAXg6OlbOIUGLh8eXAD0Lm', '', NULL, '2022-01-15 13:14:32', '2022-01-15 13:14:32', NULL),
(21, '201800120', '201800120@estudiantes.upqroo.edu.mx', NULL, '$2y$10$YcDblyNX8JK/cf0M7h4Gzu5yNFmkcbJ.0w8qRYfIf2X/F2jALSUHC', '', NULL, '2022-01-15 13:16:40', '2022-01-15 13:16:40', NULL),
(22, '201900093', '201900093@estudiantes.upqroo.edu.mx', NULL, '$2y$10$.A9DnbminydgUlRSC9rfk.ymXF9gLbaT3Cj4KoFHXcMC90GJfIrq2', '', NULL, '2022-01-15 13:18:50', '2022-01-15 13:18:50', NULL),
(24, '201900103', '201900103@estudiantes.upqroo.edu.mx', NULL, '$2y$10$ihjZejjAUAaOXQyouG3mceQBIp3UB1TwrcUjEXJYr0XlrCKXk2v86', '', NULL, '2022-01-15 13:22:36', '2022-01-15 13:22:36', NULL),
(25, '201900115', '201900115@estudiantes.upqroo.edu.mx', NULL, '$2y$10$pPA5Wdb1qBkgqWw8P8CpEuzVJtiHpWv3sR3ClrhIFz43XcvlVhnXu', '', NULL, '2022-01-15 13:24:48', '2022-01-15 13:24:48', NULL),
(26, '201900123', '201900123@estudiantes.upqroo.edu.mx', NULL, '$2y$10$i.2yVA/xTI4NrhikVWlxcuJh3KpDPAVQnwdQJBi02un0jiuRYcmCi', '', NULL, '2022-01-15 13:27:37', '2022-01-15 13:27:37', NULL),
(27, '201900126', '201900126@estudiantes.upqroo.edu.mx', NULL, '$2y$10$WUiVMUqHb0caktXe6o6eTuLFjoYIzdmBveWZxvD9JeM043u8A/hAy', '', NULL, '2022-01-15 13:29:16', '2022-01-15 13:29:16', NULL),
(29, '201700127', '201700127@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PLHb8hKNyi14RijwodFOY.cJ38HOfEk/MLSPxsv8a5U9YQkqUdlwa', '', NULL, '2022-01-15 13:33:59', '2022-01-15 13:33:59', NULL),
(30, '201800118', '201800118@estudiantes.upqroo.edu.mx', NULL, '$2y$10$coqxn.kGblZp3TGwTfK7X.ls2HKiHDsT7kYIQbjn5u2QlkpQRObfG', '', NULL, '2022-01-15 13:35:42', '2022-01-15 13:35:42', NULL),
(31, '202000001', '202000001@estudiantes.upqroo.edu.mx', NULL, '$2y$10$yguL5oe1q2.hepVOkNBHX.fc/D4v9.PiakhMRjx64LTrfTazolThm', '', NULL, '2022-01-15 13:37:51', '2022-01-15 13:37:51', NULL),
(32, '202000002', '202000002@estudiantes.upqroo.edu.mx', NULL, '$2y$10$C6Kl.aGDBYSFbGkkhYBNGOgfgojSLKdvNHDc6Q/0atZcHKIXkZZRK', '', NULL, '2022-01-15 13:40:39', '2022-01-15 13:40:39', NULL),
(33, '202000007', '202000007@estudiantes.upqroo.edu.mx', NULL, '$2y$10$Konfd5xgfET3j/Cv6/BlKeYs.sEcTzPneiSP4VIHySzEPtpBUOh7i', '', NULL, '2022-01-15 13:42:53', '2022-01-15 13:42:53', NULL),
(34, '202000047', '202000047@estudiantes.upqroo.edu.mx', NULL, '$2y$10$u8HRDZWKGxy65o0NZ7V7L.BAsT2/i8rNK/JUao1xcttW8Ejn2CeU6', '', NULL, '2022-01-15 13:44:02', '2022-01-15 13:44:02', NULL),
(35, '202000017', '202000017@estudiantes.upqroo.edu.mx', NULL, '$2y$10$HBpTkJIH8YyUOdMVIRdlLOaXIVwlBGfwVyibMRzjZAeRoSCddJQNm', '', NULL, '2022-01-15 20:47:31', '2022-01-15 20:47:31', NULL),
(36, '202000052', '202000052@estudiantes.upqroo.edu.mx', NULL, '$2y$10$7P0laIWBAv8betEg.VNdwuwhwbXQF4jsf68PPg5dH/VG.z6MB4CP.', '', NULL, '2022-01-15 20:49:08', '2022-01-15 20:49:08', NULL),
(37, '202000023', '202000023@estudiantes.upqroo.edu.mx', NULL, '$2y$10$V4KkwDPoDab3viUaIBfYv.mB1l34VVC6OGk1kuM.yu2PE/NejXc4G', '', NULL, '2022-01-15 20:51:01', '2022-01-15 20:51:01', NULL),
(38, '202000053', '202000053@estudiantes.upqroo.edu.mx', NULL, '$2y$10$1UeXSp1TU7kx2wOXZSsDyODMZqv/WGSHbcP/h4fuvF2cUULVjifF6', '', NULL, '2022-01-15 20:52:54', '2022-01-15 20:52:54', NULL),
(39, '202000448', '202000448@estudiantes.upqroo.edu.mx', NULL, '$2y$10$7D/anfztPNhmXG8P/iguyeMrV3TF0.J7pqe5.7VD8ev/sk58ee6Vu', '', NULL, '2022-01-15 20:54:24', '2022-01-15 20:54:24', NULL),
(40, '202000031', '202000031@estudiantes.upqroo.edu.mx', NULL, '$2y$10$UQ9Wb1MNLuJNm.kMsmOYMOopFSNyKJKI9IhxX.CzF02qqnlBsZzQe', '', NULL, '2022-01-15 20:56:04', '2022-01-15 20:56:04', NULL),
(41, '202000032', '202000032@estudiantes.upqroo.edu.mx', NULL, '$2y$10$R5Xo9doqEUyNZPeeGB/5CufF4n1K6EHFjHPaT4LyBGuqqn4syh7Ju', '', NULL, '2022-01-15 20:57:24', '2022-01-15 20:57:24', NULL),
(42, '201900015', '201900015@estudiantes.upqroo.edu.mx', NULL, '$2y$10$cMj1EZ84uGtjyXayt1zZUOs/FFVOvfdBV1t4lvSwhRVzkNgYbOALa', '', NULL, '2022-01-15 20:59:04', '2022-01-15 20:59:04', NULL),
(43, '201900030', '201900030@estudiantes.upqroo.edu.mx', NULL, '$2y$10$DvyBZOnqi9Hzw8BUwuImfu4KI85uNKIfhAZdZ46WgYliS5C9BEiHi', '', NULL, '2022-01-15 21:01:02', '2022-01-15 21:01:02', NULL),
(44, '201900037', '201900037@estudiantes.upqroo.edu.mx', NULL, '$2y$10$EXrtCgPgZpGleV2b4JL6s.siZgOpM8lfxVtrEY.1vPNPiWMqpfHFi', '', NULL, '2022-01-15 21:02:19', '2022-01-15 21:02:19', NULL),
(45, '201700084', '201700084@estudiantes.upqroo.edu.mx', NULL, '$2y$10$vcYKa3PDWLk1oMqNHrJtz.Y05jYhwUzAz8O4IzEBi6AR6Fo9kDSYK', '', NULL, '2022-01-15 21:04:23', '2022-01-15 21:04:23', NULL),
(46, '201700044', '201700044@estudiantes.upqroo.edu.mx', NULL, '$2y$10$XWBCOx1NbB5/ZVXzWzzG9.82Yx1k.Z3V.i/zexcKHu7TqtRO8iIF6', '', NULL, '2022-01-15 21:05:39', '2022-04-27 20:26:42', NULL),
(47, '201800021', '201800021@estudiantes.upqroo.edu.mx', NULL, '$2y$10$DbO0ASZ0J/Aa/7oJqFP4/eEM7GUgVOobszFVlViRnZfq67DjRH8Za', '', NULL, '2022-01-15 21:08:47', '2022-01-15 21:08:47', NULL),
(48, '201700038', '201700038@estudiantes.upqroo.edu.mx', NULL, '$2y$10$RWZxoF./iNRm6ypXPZh/o.fl0iI5dXtWZZlyiDRFmXP4wTlhMtyzK', '', NULL, '2022-01-15 21:10:13', '2022-01-15 21:10:13', NULL),
(49, '201800024', '201800024@estudiantes.upqroo.edu.mx', NULL, '$2y$10$jh9pHiERDaFwZSzmJdk9r.d8LgFhbQQHbLdkOPhEzMa0Y29t8Gv7q', '', NULL, '2022-01-15 21:11:57', '2022-01-15 21:11:57', NULL),
(51, '201800344', '201800344@estudiantes.upqroo.edu.mx', NULL, '$2y$10$vYvQjnMyXkNV64kCfz7Qeu2c.tDG.D5BAdMhIrx5jOGUg36T5tcHm', '', NULL, '2022-01-15 21:14:37', '2022-01-15 21:14:37', NULL),
(52, '201700371', '201700371@estudiantes.upqroo.edu.mx', NULL, '$2y$10$HiCpHBNa.LudOz/r7pil4uYQkjofde3xb8RutDRWoa5UNnoRcFuBG', '', NULL, '2022-01-15 21:16:34', '2022-01-15 21:16:34', NULL),
(53, '201700374', '201700374@estudiantes.upqroo.edu.mx', NULL, '$2y$10$WZz7g.YGSbPQTbbc.mnDT.7lzEPA2JZEwk2CfaQHgPShmyMRT10uu', '', NULL, '2022-01-15 21:17:56', '2022-01-15 21:17:56', NULL),
(54, '201900285', '201900285@estudiantes.upqroo.edu.mx', NULL, '$2y$10$M.SiZO4pXvHvMFvshp/2duXAe3DKD3fcj7ZRv6xSOt17W1e8XF5K2', '', NULL, '2022-01-15 21:19:34', '2022-01-15 21:19:34', NULL),
(55, '201800346', '201800346@estudiantes.upqroo.edu.mx', NULL, '$2y$10$15qZuUWtBGFppYg84ndrieVnW2ZGDlKCka3Z87NDzsfiHUAkbR48e', '', NULL, '2022-01-15 21:21:12', '2022-01-15 21:21:12', NULL),
(56, '201800352', '201800352@estudiantes.upqroo.edu.mx', NULL, '$2y$10$u0NEXclz9DGutla49N78LetWWX65/1uaQoF8wJ6ix7z2fiiHzmIQq', '', NULL, '2022-01-15 21:25:55', '2022-01-15 21:25:55', NULL),
(57, '201800353', '201800353@estudiantes.upqroo.edu.mx', NULL, '$2y$10$xW1CNq6zFNApaX3FTi7da.EY5oJDixbVkx2zVhyCBE/ALLrSx8FGu', '', NULL, '2022-01-15 21:27:04', '2022-01-15 21:27:04', NULL),
(58, '201700382', '201700382@estudiantes.upqroo.edu.mx', NULL, '$2y$10$eX7cVSGy.VDyA/ZKgW1fVOP5Q.Ld7ELe0SLI116iLENmZrOK2MTj2', '', NULL, '2022-01-15 21:28:33', '2022-01-15 21:28:33', NULL),
(59, '201800356', '201800356@estudiantes.upqroo.edu.mx', NULL, '$2y$10$aJ7fvliTC9R2aGxPqS2AheTdw5CHHwnRr76dIruDLLU/OyLueKISq', '', NULL, '2022-01-15 21:30:12', '2022-01-15 21:30:12', NULL),
(60, '201800360', '201800360@estudiantes.upqroo.edu.mx', NULL, '$2y$10$u/wjgUfy6ANzRsLj.xztTePDok39BLdyN5a1MtuUCJltvBKOov6lC', '', NULL, '2022-01-15 21:31:58', '2022-04-21 23:56:36', NULL),
(61, '201700386', '201700386@estudiantes.upqroo.edu.mx', NULL, '$2y$10$QQaei6mlZSLk6o3/SZsSle14vAP4V0H.D4iqRNQ6Lu2Y1vWXRiAWe', '', NULL, '2022-01-15 21:33:14', '2022-01-15 21:33:14', NULL),
(62, '201800361', '201800361@estudiantes.upqroo.edu.mx', NULL, '$2y$10$YJzvbbR8m2tc5urTL/Vn6.ckUrEr2T3LYITOkkH4Tl0M6yM.9sE1G', '', NULL, '2022-01-15 21:34:35', '2022-01-15 21:34:35', NULL),
(63, '201800363', '201800363@estudiantes.upqroo.edu.mx', NULL, '$2y$10$gEZYBY5L7krnLT5VpgOtguBjz9nWG6BC.t2pKn3D6FnGtegM8nKiW', '', NULL, '2022-01-15 21:35:33', '2022-01-15 21:35:33', NULL),
(64, '201800364', '201800364@estudiantes.upqroo.edu.mx', NULL, '$2y$10$Bf9YOtdHXuvCqviE/3IPDePuj4QSfouiVUF9rCiM7XjKNzHZnzXmi', '', NULL, '2022-01-15 22:10:16', '2022-01-15 22:10:16', NULL),
(65, '201800367', '201800367@estudiantes.upqroo.edu.mx', NULL, '$2y$10$RuYrmsGCxNrgQfjvE.ii1.fmSVuDwecS7jdem7tN58DO2GVFFqm96', '', NULL, '2022-01-15 22:11:00', '2022-01-15 22:11:00', NULL),
(66, '201900367', '201900367@estudiantes.upqroo.edu.mx', NULL, '$2y$10$gkxOYRJSxIAyTGF5BYVStOSsNGCy7kaEDSrJ74LydklGTZsUD2S7a', '', NULL, '2022-01-15 22:11:32', '2022-01-15 22:11:32', NULL),
(67, '201900050', '201900050@estudiantes.upqroo.edu.mx', NULL, '$2y$10$P1J4ohWpYk2Y6q7oKuP4UecIaBdWpdNG3kPaVCap8CNaaYFN.i4NK', '', NULL, '2022-01-15 22:12:37', '2022-01-15 22:12:37', NULL),
(68, '201800087', '201800087@estudiantes.upqroo.edu.mx', NULL, '$2y$10$a8/RFT2uYpvdj.NP43zWnefkyo.QBtcdYPZv1iVqdSqy8p.DR9nk2', '', NULL, '2022-01-15 22:13:26', '2022-01-15 22:13:26', NULL),
(69, 'Carlos Roberto Esquivel', 'ing.software@upqroo.edu.mx', NULL, '$2y$10$Gc3NRCS303QSauZgi7rbguwOyj4jyZs41vOYnY1Xg.k1kUr6cIwLW', '', NULL, '2022-01-15 23:42:55', '2022-01-15 23:42:55', NULL),
(72, '201700067', '201700067@estudiantes.upqroo.edu.mx', NULL, '$2y$10$/38.sBpiJefZA2iKs..Jt.wfiQ/MeF7WabdnA1IW4P83Q24CCwToa', '', NULL, '2022-01-15 23:47:27', '2022-01-15 23:47:27', NULL),
(73, '201800044', '201800044@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PhV3LcVHgDiuf3sRvkfdjO4Ju/ItZY5S4zH8R47d.MdzT0CWMXuPO', '', NULL, '2022-01-15 23:49:28', '2022-01-15 23:49:28', NULL),
(74, '201800050', '201800050@estudiantes.upqroo.edu.mx', NULL, '$2y$10$oR0bIsO205EYDZtFBDryKOjP3INukN1i58JY3hTyqU1ifCY68EGUO', '', NULL, '2022-01-15 23:49:59', '2022-01-15 23:49:59', NULL),
(75, '201800057', '201800057@estudiantes.upqroo.edu.mx', NULL, '$2y$10$9CUXaxT.VroVxDrk6WFXXudWrlrQfeyqo5XZ7s6WEsU58shQEna9e', '', NULL, '2022-01-15 23:50:32', '2022-01-15 23:50:32', NULL),
(76, '201800061', '201800061@estudiantes.upqroo.edu.mx', NULL, '$2y$10$OPmWZGJgScXjRMpKD.4BB.qZUcFs180riEwJj2ttQdyx./KpYW6J2', '', NULL, '2022-01-15 23:51:08', '2022-01-15 23:51:08', NULL),
(77, '201800073', '201800073@estudiantes.upqroo.edu.mx', NULL, '$2y$10$VYVWP/YLcY7fAavJch3v2uMy6pS9if9zq5uN61wO/sW6U52lzQYx2', '', NULL, '2022-01-15 23:51:39', '2022-01-15 23:51:39', NULL),
(78, '201800081', '201800081@estudiantes.upqroo.edu.mx', NULL, '$2y$10$5v8bpCJL8m3PiEDNhLgz0u2vCuhEEA49sID.gXzA1abx6gArgSPQK', '', NULL, '2022-01-15 23:52:13', '2022-01-15 23:52:13', NULL),
(79, '201800082', '201800082@estudiantes.upqroo.edu.mx', NULL, '$2y$10$.rxa2wWGH0J3.FPP6/D7DeCPAP2fxC39nSF/p4F2if26RMffDiwYW', '', NULL, '2022-01-15 23:52:46', '2022-01-15 23:52:46', NULL),
(80, '201700092', '201700092@estudiantes.upqroo.edu.mx', NULL, '$2y$10$0D5dFXBpTWRBOteOGf7x7e2mHTOwkmTk5Q8.hMRaM52d/oNAoNDwq', '', NULL, '2022-01-15 23:53:26', '2022-01-15 23:53:26', NULL),
(81, '201700095', '201700095@estudiantes.upqroo.edu.mx', NULL, '$2y$10$k7t0gS4QtuwpXUVbhLeBzuAc5clXCgvYyHjJA6VPKRYuW9Etx/.NO', '', NULL, '2022-01-15 23:53:58', '2022-01-15 23:53:58', NULL),
(82, 'Josmar', 'yosmarherrerax23@gmail.com', NULL, '$2y$10$UPkB1ofbe/nuYOvIVsbGw.6XILlDy3qKD6qHUwXLVzSeAEwkI0ozy', '', NULL, '2022-01-17 06:36:13', '2022-01-17 06:36:13', NULL),
(83, '201900101', '201900101@estudiantes.upqroo.edu.mx', NULL, '$2y$10$4rCq.La4b.EE2KqrnOkZt.zbYrV1bY1b4959mwNcNRWTJHkJ5bZlO', '', NULL, '2022-01-17 06:59:29', '2022-01-17 06:59:29', NULL),
(84, '201800031', '201800031@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PpIpbqDyoZVHEbFMGkFYcuieFW.aekPzP8/mWg7xcs7227tJRj6pW', '', NULL, '2022-01-17 07:01:04', '2022-01-17 07:01:04', NULL),
(85, '202000472', '202000472@estudiantes.upqroo.edu.mx', NULL, '$2y$10$cHqFCkiFSGToFtvvQ4OlWO5Xcsk2YWGC12Bz.9bXd2WhvrwwVfaiK', '', NULL, '2022-01-17 07:02:37', '2022-01-17 07:02:37', NULL),
(86, '201800317', '201800317@estudiantes.upqroo.edu.mx', NULL, '$2y$10$lPz2FKzunCF5LeTxIT9BBe50jqFpMrxNJ23bU8rMCpKe9oLseup/6', '', NULL, '2022-01-17 07:11:19', '2022-01-17 07:11:19', NULL),
(87, 'admin', 'admin@test.com', NULL, '$2y$10$aRLx9bf7oJCHUhhbiGhCvuwYXJZfAMby593QxjpEWsKWfBkOPVcda', 'admin', NULL, '2022-01-21 03:55:51', '2022-01-21 03:55:51', NULL),
(89, 'abraham', 'abraham@test.com', NULL, '$2y$10$W2QuyE7ZAGtVAHVvSgysneoRgSu6Iy2crnq.F0N/WLVlt8TFi4Jqq', 'admin', NULL, '2022-01-24 08:56:32', '2022-01-24 08:56:32', NULL),
(90, 'hugo', 'hugo@test.com', NULL, '$2y$10$usL8Q1Mj0EPX/bIkLQNJx.HRsrRwnFE1sauv.5TcoTYwyu4cPHO7K', 'admin', NULL, '2022-01-24 09:11:07', '2022-01-24 09:11:07', NULL),
(91, 'Luis', 'luis@test.com', NULL, '$2y$10$EPn8Bms7S2chPGwoxfkLb.RlQEOy7EANMyXeJPUyh8dfDEfD54eXq', 'admin', NULL, '2022-01-31 01:42:02', '2022-01-31 01:42:02', NULL),
(92, 'Luis', 'luis@test.com', NULL, '$2y$10$ng194vo4KEtUNDyj24naruz9uZjf1YQtUDECXqXAfYo34vP2G/GnW', 'admin', NULL, '2022-01-31 01:44:18', '2022-01-31 01:44:18', NULL),
(93, 'Moisés Soler Zetina', '201900365@estudiantes.upqroo.edu.mx', NULL, '$2y$10$nCHkwmuPurGy0IOdW977t.S/yZcSJFhThIVRIlgTaioIdFr2oMOHG', 'Estudiante', NULL, '2022-02-09 18:55:09', '2022-02-09 18:55:09', NULL),
(94, 'FRANCISCO CAAMAL', '201700120@estudiantes.upqroo.edu.mx', NULL, '$2y$10$lKRZCFxbPaCUvCNpiYMje.g2W6OSJApJLrJho2qZYsq39//oXMLMK', 'ESTUDIANTES', NULL, '2022-02-10 01:57:20', '2022-02-10 01:57:20', NULL),
(95, '201700120', '201700120@estudiantes.upqroo.edu.mx', NULL, '$2y$10$e5k1Zy4gGHEJ1seAVeARfOw.GFhU9fqmzLj87IOH.1PubtUukFTvu', 'ESTUDIANTES', NULL, '2022-02-10 02:08:22', '2022-02-10 02:08:22', NULL),
(96, 'Alejandra del Carmen Perez Medina', '201800026@estudiantes.upqroo.edu.mx', NULL, '$2y$10$kA0VE5/zjtE8hM4eR2fvIuWgiz33PHzwfpH1bu58W4BfmGRMBPpvK', 'Estudiante', NULL, '2022-02-10 06:04:19', '2022-02-10 06:04:19', NULL),
(97, 'ALEJANDRA DEL CARMEN PEREZ MEDINA', 'aleperezmedina05@gmail.com', NULL, '$2y$10$Wjl.Ep0Cdagv52NBb5zzR.iOEGED9rbBq04JHIzQs0g0pMxMBxMIa', 'ESTUDIANTE', NULL, '2022-02-10 06:14:32', '2022-02-10 06:14:32', NULL),
(98, 'ALEJANDRA DEL CARMEN PEREZ MEDINA', '201800026@estudiantes.upqroo.edu.mx', NULL, '$2y$10$MPxbZLIjG5qnJDYqZdGLVubVXkcquWH7fZUbLtfLs4Mz0bwZyPOd6', 'ESTUDIANTE', NULL, '2022-02-10 07:01:34', '2022-02-10 07:01:34', NULL),
(99, 'Henri Gerardo Puc Osorio', '202000031@estudiantes.edu.upqroo.mx', NULL, '$2y$10$Fq13.b0Hr4DkvNBtaJS2E.Idpq3l8T7B9qCmqpyUu5nuF.cNtuSGC', 'Estudiante', NULL, '2022-02-10 08:32:25', '2022-02-10 08:32:25', NULL),
(100, 'SERGIO ENRIQUE DZIB DELGADO', 'sergioenriquedd@gmail.com', NULL, '$2y$10$XuFAVXLuYOrHeM80vmmCJOKO9LWquZsoYVPURmjDVewbDK1a3AJ5y', 'ALUMNO', NULL, '2022-02-10 10:23:28', '2022-02-10 10:23:28', NULL),
(101, 'Henri Gerardo Puc Osorio', '202000031@estudiantes.edu.upqroo.mx', NULL, '$2y$10$kNPPwxtMXc9ODHZfjBipPuzmKw8i4scEDyHGzWsFn5G8nbZVp2KAu', 'Estudiante', NULL, '2022-02-10 22:14:25', '2022-02-10 22:14:25', NULL),
(102, 'NATALIA GUADALUPE SOBERANIS CAAMAL', '201700154@estudiantes.upqroo.edu.mx', NULL, '$2y$10$9GtCnlVVlTxP.ktZKz2MMuNWvgCpPicdCQMAYQWq.GM2d2TpeQTIG', 'ESTUDIANTE', NULL, '2022-02-10 22:16:42', '2022-02-10 22:16:42', NULL),
(103, 'Henri Gerardo Puc Osorio', '202000031@estudiantes.edu.upqroo.mx', NULL, '$2y$10$HcWdzQAGAEta.8kPWLfppOdYQyap04H5l2XiC7hGZujL2iGkK9DUu', 'Estudiante', NULL, '2022-02-11 00:57:53', '2022-02-11 00:57:53', NULL),
(104, 'María Deniss Michel Rivero Canché', 'maria510-rc@hotmail.com', NULL, '$2y$10$v1prMgHsKdl21g3.qsqzXe7cELhCkP.uLyV17VNUxgGnOnXV8R4ra', 'Deniss Rivero', NULL, '2022-02-11 05:17:22', '2022-02-11 05:17:22', NULL),
(105, 'Luis Gerardo López Vidal', '201800186@estudiantes.upqroo.edu.mx', NULL, '$2y$10$Qa3rxyEgt42VKBxWiS8uvuhUoP2uX0IeBcHst20amP9lnW/xPUdQq', 'Estudiante', NULL, '2022-02-11 06:05:18', '2022-02-11 06:05:18', NULL),
(106, 'SERGIO ENRIQUE DZIB DELGADO', '201700414@estudiantes.upqroo.edu.mx', NULL, '$2y$10$WKJiSdeB7rrS4wtNdy4U/uSBkV2fAMIf.dzEWZkbgxb6nOa2dNjmq', 'Alumno', NULL, '2022-02-12 01:23:28', '2022-02-12 01:23:28', NULL),
(107, 'Abner Cetzal', '201800048@estudiantes.upqroo.edu.mx', NULL, '$2y$10$.2yLJf8TWfZ5dsK3v0vgSOCnEgR5VIOYuWJFCSBkwWDCwLr1uDpOe', 'Estudiante', NULL, '2022-02-15 02:18:09', '2022-02-15 02:18:09', NULL),
(108, 'SERGIO ENRIQUE DZIB DELGADO', '201700414@estudiantes.upqroo.edu.mx', NULL, '$2y$10$6ZGflkzFpNM1uKPblOSvIeGFORB0UDSAfRNqco/0rtqoy/OXEObfm', 'Alumno', NULL, '2022-02-15 04:18:14', '2022-02-15 04:18:14', NULL),
(109, 'Yerli Yasuri', '201800360@estudiantes.upqro.edu.mx', NULL, '$2y$10$d3iYB7rkM2GeoFD3LYY/f.50DEzIKwLN4w/hLSGuzZ4rp190jK.HC', 'Estudiante', NULL, '2022-02-16 03:10:46', '2022-04-21 23:57:55', NULL),
(110, 'Jannya', '201800172@estudiantes.upqroo.edu.mx', NULL, '$2y$10$kMNd6Uywsxm68NHPowY9kOgrhiv093e2xIbZ3U/d6PMEy9UMcH3Rq', 'Estudiante', NULL, '2022-02-17 20:28:39', '2022-02-17 20:28:39', NULL),
(111, 'MAYREN', '201800176@estudiantes.upqroo.edu.mx', NULL, '$2y$10$4tstFkPGqF6uRzuo4SmLou6KFhrhXgcp3eRiqsUiB5253aGgrvbLS', 'GUTIERREZ', NULL, '2022-02-21 03:29:38', '2022-02-21 03:29:38', NULL),
(112, 'ALEJANDRA DEL CARMEN PEREZ MEDINA', '201800026@estudiantes.upqroo.edu.mx', NULL, '$2y$10$jKGY.OeCZgXXADYREW7Fb.ZF3ygpXsDoEsnM1dgvgR9lMuFCYjdEm', 'ESTUDIANTE', NULL, '2022-02-21 22:08:27', '2022-02-21 22:08:27', NULL),
(113, '201800156', '201800156@estudiantes.upqroo.edu.mx', NULL, '$2y$10$zyMliVcaaz/I5ACVgAQ6fuqoRmCZKQmwU99keIIvItDOljUSmcInO', 'Estudiante', NULL, '2022-02-23 05:47:51', '2022-02-23 05:47:51', NULL),
(114, 'NATALIA SOBERANIS CAAMAL', '201700154@estudiantes.upqroo.edu.mx', NULL, '$2y$10$M99G9RJc0lzUO1uSqF8zg.bqOpbI3QZpT9Q1wtXLUY27wvjvLDLIS', 'ESTUDIANTE', NULL, '2022-03-01 23:38:30', '2022-03-01 23:38:30', NULL),
(115, 'Alejandra del Carmen', '201800026@estudiantes.upqroo.edu.mx', NULL, '$2y$10$aPdJtaqD6nJO1o5jxVNhi.w.cygJyXyUl1.T1BHDJBXUbxvbY.spu', 'Pérez Medina', NULL, '2022-03-01 23:44:05', '2022-03-01 23:44:05', NULL),
(116, 'ALEJANDRA DEL CARMEN PEREZ MEDINA', '201800026@ESTUDIANTES.UPQROO.EDU.MX', NULL, '$2y$10$ZFE92EEb8maBd4QPEO8NL.PiGhirF3D6gQ0EPRyVTvu2O1oDEw9oa', 'ESTUDIANTE', NULL, '2022-03-01 23:49:45', '2022-03-01 23:49:45', NULL),
(118, 'LIZETH01', '202000430@estudiantes.upqroo.edu.mx', NULL, '$2y$10$QlC.VetDDfwCtXLbPfjZoOvJJPay3bgRpbGWUFMUO6blCF7xy0y/a', 'ESTUDIANTE', NULL, '2022-03-02 20:39:03', '2022-03-02 20:39:03', NULL),
(119, 'Montse15', '202000421@estudiantes.upqroo.edu.mx', NULL, '$2y$10$ylHerZCI92UNJ8DmkMIg8e6dqYKCaf/ISSkWRUy6CfoPiNtULBKfO', 'ESTUDIANTE', NULL, '2022-03-02 20:59:15', '2022-03-02 20:59:15', NULL),
(120, '202000395', '202000395@estudiantes.upqroo.edu.mx', NULL, '$2y$10$EZAbFpJ19facPrIvt223l.VPLhtTKCuYYCW6zQAqnkH8UedPOFESS', 'ESTUDIANTE', NULL, '2022-03-02 21:59:18', '2022-04-26 19:59:04', NULL),
(121, 'Johann reyes', 'johannreyespierce@gmail.com', NULL, '$2y$10$p8.8ppQPud6dsUAUKC0hruLv9.Qx4jRN3bl1jucA4984pOmHawMsy', 'Estudiante', NULL, '2022-03-03 01:14:24', '2022-03-03 01:14:24', NULL),
(122, 'RODOLFO SALINAS', '202000038@estudiantes.upqroo.edu.mx', NULL, '$2y$10$uv3MJlYVI1VdxVY4tbHQceLzzzM3ZsqIMHGxnWxBQKEIzCgl5eZ.e', 'Estudiante', NULL, '2022-03-04 02:39:58', '2022-03-04 02:39:58', NULL),
(123, 'victor', '201800171@estudiantes.upqroo.edu.mx', NULL, '$2y$10$P5EGihZOzTZi83gnx3xtReCMlBuaCMOELr/RbhZcRTkfqgcBkOKCS', 'estudiante', NULL, '2022-03-04 23:32:29', '2022-03-04 23:32:29', NULL),
(124, '202000430', '202000430@estudiantes.upqroo.edu.mx', NULL, '$2y$10$uqoX/TQjAOrDwAFdmqU/auVw31qiC.bDyo4CzkrK1uIS9vSpaKDae', 'Estudiante', NULL, '2022-03-09 03:49:38', '2022-03-09 03:49:38', NULL),
(125, 'ALEJANDRA DEL CARMEN PEREZ MEDINA', '201800026@estudiantes.upqroo.edu.mx', NULL, '$2y$10$SecD8u1XtQFxnta0.z5r8uxLfx7/qcHeRBubf4kRZgnbp/Np6vmT6', 'ESTUDIANTE', NULL, '2022-03-09 06:47:37', '2022-03-09 06:47:37', NULL),
(126, 'NATALIA GUADALUPE SOBERANIS CAAMAL', 'natalia.gsc15@gmail.com', NULL, '$2y$10$RraL3zqp5bKxmpHLSvgRvOcymyYglq82VsptvEg6RX2tS8mx6XaaW', 'ESTUDIANTE', NULL, '2022-03-11 02:14:16', '2022-03-11 02:14:16', NULL),
(128, '201900071', '201900071@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PMa4Z9lBPuGTZMYnhNRhAO52ojY4ZfpEBYtznawI9Awx6Ear5CHRa', 'alumno', NULL, '2022-03-22 23:27:55', '2022-03-22 23:27:55', NULL),
(130, '201700103', '201700103@estudiantes.upqrooo.edu.mx', NULL, '$2y$10$5fMaEP/fzNvxCX84eBbUruW69ZjHPL3BRcHOcqbTk0E9D8vYlzdQe', 'alumno', NULL, '2022-03-18 09:10:00', '2022-03-18 09:10:00', NULL),
(131, '201800026', '201800026@estudiantes.upqrooo.edu.mx', NULL, '$2y$10$rlqqrOo/Bc9q7Y/ZbkX16epxG.d4/BL/fgP3s0t7I.FQ7wfNwaGTK', 'alumno', NULL, '2022-03-19 05:48:50', '2022-03-19 05:48:50', NULL),
(135, '201400084', '201400084@estudiantes.upqroo.edu.mx', NULL, '$2y$10$mhkm3gw0kqAGz.O.u6T5eujNMNoHahaS9DDzxaWpPRtUL6z74tDCC', 'alumno', NULL, '2022-03-28 23:58:38', '2022-03-28 23:58:38', NULL),
(136, '202200057', '202200057@estudiantes.upqroo.edu.mx', NULL, '$2y$10$cVKcmwm9bpCafrWNlbuMbOVy.g8BX3cNvVykljN63BPB81hpmoI6a', 'alumno', NULL, '2022-04-01 08:59:45', '2022-04-26 03:27:16', '2022-04-25 22:27:16'),
(137, '202100057', '202100057@estudiantes.upqroo.edu.mx', NULL, '$2y$10$PepBK2ySIHN5Pbxk.rd6zupSogbJov2uvqsr94RNMPRovbjkUkBcC', 'alumno', NULL, '2022-04-01 09:00:45', '2022-04-01 09:00:45', NULL),
(138, '201900258', '201900258@estudiantes.upqroo.edu.mx', NULL, '$2y$10$zLCKglL/cUnCLL3/jWpDouCWhDYGw8vOT7W/xMO80taPVp3lZTvIm', 'alumno', NULL, '2022-04-07 23:07:52', '2022-04-07 23:07:52', NULL),
(139, '201800087', '201800087@estudiantes.upqroo.edu.mx', NULL, '$2y$10$k5sh3lnNvX9Q2.y76g9fH.YY2/5AoNCY7zw/8v7u.4Id85bugNxx2', 'alumno', NULL, '2022-04-09 00:08:08', '2022-04-09 00:08:08', NULL),
(140, '201700086', '201700086@estudiantes.upqroo.edu.mx', NULL, '$2y$10$IWDc2/TuWqrd0d.8FX10cu8.7LuMPs9xEcgC/2EERvBD.UXj2ybNy', 'alumno', NULL, '2022-04-09 15:23:19', '2022-04-09 15:23:19', NULL),
(141, '201700086', '201700086@estudiantes.upqroo.edu.mx', NULL, '$2y$10$/BguUrMnQV8zw2iY3nmbc.s1XeZkrcVVnbKE4W1SDcso0Dcg1nl0q', 'alumno', NULL, '2022-04-20 23:12:47', '2022-04-20 23:12:47', NULL),
(142, '201900052', '201900052@estudiantes.upqroo.edu.mx', NULL, '$2y$10$MqG8HRnGtRe5.rYbskT8eOsiNltkjP8pYn37XCGfCm09ap9DDw4O2', 'alumno', NULL, '2022-04-22 05:49:40', '2022-04-22 05:49:40', NULL),
(143, '201800040', '201800040@estudiantes.upqroo.edu.mx', NULL, '$2y$10$p.vgEhdRDYP6t44TONsV1uBe6C/U0gu2Wx3eICemhvn7kAz70Cmau', 'alumno', NULL, '2022-04-22 21:18:06', '2022-04-22 21:18:06', NULL),
(144, '201800349', '201800349@estudiantes.upqroo.edu.mx', NULL, '$2y$10$n5LKo7PJebXsF4KHqCenMe0zayWgSKtMtSUPkoww9wlekMwY4ZW..', 'alumno', NULL, '2022-04-22 21:42:50', '2022-04-22 21:42:50', NULL),
(145, '201800073', '20180073@estudiantes.upqroo.edu.mx', NULL, '$2y$10$gwP/R.8Pr4kD5wwljBqpU.Sdui3QO/RnwANneaBhPI/qb2JWzu/Wy', 'alumno', NULL, '2022-04-22 23:49:09', '2022-04-22 23:49:09', NULL),
(146, '201800176', '201800176@estudiantes.upqroo.edu.mx', NULL, '$2y$10$H6VG1ZUYPXiiobWMQRXIK.wVRaWH9VfCIa7SK6pvyGtbvrmJ8t.um', 'alumno', NULL, '2022-04-25 21:33:51', '2022-04-25 21:33:51', NULL),
(147, '201800172', '201800172@estudiantes.upqroo.edu.mx', NULL, '$2y$10$bsI/4TWDkh.A4Qs0fYgpUu8iCswHSczPBlLqVuB3qR2W0qgMpHcla', 'alumno', NULL, '2022-04-25 21:36:19', '2022-04-25 21:36:19', NULL),
(148, '20200421', '202000421@estudiantes.upqroo.edu.mx', NULL, '$2y$10$Vm2TmwL/TEwzTth7FH2BSOXuxHrlDnpnDHqctkHzh.35WMB29C9wG', 'alumno', NULL, '2022-04-25 21:39:55', '2022-04-25 21:42:31', '2022-04-25 16:42:31'),
(150, '202000435', '202000435@estudiantes.upqroo.edu.mx', NULL, '$2y$10$pVdYtuYlC73.El7Wtsux7egdEBVD45OoNejoeZpqH54g.2zjDab3i', 'alumno', NULL, '2022-04-26 23:43:20', '2022-04-26 23:43:20', NULL),
(151, '202000432', '202000432@estudiante.upqroo.edu.mx', NULL, '$2y$10$rNJE7kUVeEZisgrQjUVhu.gYY/UUoZr2hQDF02lLt9hYulnwJ5FNa', 'alumno', NULL, '2022-04-26 23:49:19', '2022-04-26 23:49:19', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Proceso` (`id_procesos`),
  ADD KEY `ID_Carrera` (`id_carrera`);

--
-- Indices de la tabla `alumno_def`
--
ALTER TABLE `alumno_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Cargo` (`id_cargo_aa`);

--
-- Indices de la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Cargo` (`id_cargo_ae`);

--
-- Indices de la tabla `asesor_empresarial_def`
--
ALTER TABLE `asesor_empresarial_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `carta_aceptacion`
--
ALTER TABLE `carta_aceptacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_liberacion`
--
ALTER TABLE `carta_liberacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_presentacion`
--
ALTER TABLE `carta_presentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_responsiva`
--
ALTER TABLE `carta_responsiva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cedula_registro`
--
ALTER TABLE `cedula_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `constancia_derecho`
--
ALTER TABLE `constancia_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `definicion_proyecto`
--
ALTER TABLE `definicion_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_def`
--
ALTER TABLE `detalle_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_c_aceptacion` (`id_c_aceptacion`),
  ADD KEY `id_c_registro` (`id_c_registro`),
  ADD KEY `id_d_proyecto` (`id_d_proyecto`),
  ADD KEY `id_c_liberacion` (`id_c_liberacion`),
  ADD KEY `id_proceso` (`id_proceso`),
  ADD KEY `id_c_horaria` (`id_c_horaria`),
  ADD KEY `id_c_derecho` (`id_c_derecho`),
  ADD KEY `id_c_responsiva` (`id_c_responsiva`),
  ADD KEY `id_c_presentacion` (`id_c_presentacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Tipo` (`id_tipo`);

--
-- Indices de la tabla `etapas_del_proyecto`
--
ALTER TABLE `etapas_del_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Alumno` (`id_alumno`),
  ADD KEY `ID_Empresa` (`id_empresa`),
  ADD KEY `ID_Asesor_Emp` (`id_asesor_emp`),
  ADD KEY `ID_Asesor_Aca` (`id_asesor_aca`),
  ADD KEY `ID_Proyecto` (`id_proyecto`);

--
-- Indices de la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_asesor_emp` (`id_asesor_emp`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_detalle` (`id_detalle`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id_procesos`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto_def`
--
ALTER TABLE `proyecto_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Usuario` (`id_usuario`),
  ADD KEY `ID_Formulario` (`id_formulario`);

--
-- Indices de la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_formulario` (`id_formulario`);

--
-- Indices de la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_documentos` (`id_documentos`);

--
-- Indices de la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_etapa_proyecto` (`id_etapa_proyecto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de la tabla `alumno_def`
--
ALTER TABLE `alumno_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `asesor_empresarial_def`
--
ALTER TABLE `asesor_empresarial_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `carta_aceptacion`
--
ALTER TABLE `carta_aceptacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `carta_liberacion`
--
ALTER TABLE `carta_liberacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `carta_presentacion`
--
ALTER TABLE `carta_presentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carta_responsiva`
--
ALTER TABLE `carta_responsiva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cedula_registro`
--
ALTER TABLE `cedula_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `constancia_derecho`
--
ALTER TABLE `constancia_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `definicion_proyecto`
--
ALTER TABLE `definicion_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `detalle_def`
--
ALTER TABLE `detalle_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `etapas_del_proyecto`
--
ALTER TABLE `etapas_del_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=856;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id_procesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de la tabla `proyecto_def`
--
ALTER TABLE `proyecto_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=856;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_procesos`) REFERENCES `procesos` (`id_procesos`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`);

--
-- Filtros para la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD CONSTRAINT `asesor_academico_ibfk_1` FOREIGN KEY (`id_cargo_aa`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  ADD CONSTRAINT `asesor_empresarial_ibfk_2` FOREIGN KEY (`id_cargo_ae`) REFERENCES `cargo` (`id_cargo`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`id_c_aceptacion`) REFERENCES `carta_aceptacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`id_c_registro`) REFERENCES `cedula_registro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_3` FOREIGN KEY (`id_d_proyecto`) REFERENCES `definicion_proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_4` FOREIGN KEY (`id_c_liberacion`) REFERENCES `carta_liberacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_5` FOREIGN KEY (`id_c_horaria`) REFERENCES `carga_horaria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_6` FOREIGN KEY (`id_c_derecho`) REFERENCES `constancia_derecho` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_7` FOREIGN KEY (`id_c_responsiva`) REFERENCES `carta_responsiva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_8` FOREIGN KEY (`id_c_presentacion`) REFERENCES `carta_presentacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`);

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`id_asesor_aca`) REFERENCES `asesor_academico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_4` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_5` FOREIGN KEY (`id_asesor_emp`) REFERENCES `asesor_empresarial` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  ADD CONSTRAINT `formulario_def_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_2` FOREIGN KEY (`id_asesor_emp`) REFERENCES `asesor_empresarial_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_3` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_4` FOREIGN KEY (`id_detalle`) REFERENCES `detalle_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_formulario`) REFERENCES `formulario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  ADD CONSTRAINT `respuesta_def_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_def_ibfk_2` FOREIGN KEY (`id_formulario`) REFERENCES `formulario_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  ADD CONSTRAINT `respuesta_doc_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_doc_ibfk_2` FOREIGN KEY (`id_documentos`) REFERENCES `documentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  ADD CONSTRAINT `respuesta_etapa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_etapa_ibfk_2` FOREIGN KEY (`id_etapa_proyecto`) REFERENCES `etapas_del_proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
