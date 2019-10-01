-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2019 a las 21:52:30
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `storelocator`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_listCountries` (IN `_region` VARCHAR(50) CHARSET utf8)  NO SQL
SELECT
idCountry,
countryCode,
nameSpanish, 
nameEnglish,
region
FROM countries
WHERE region = _region$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_listStores` (IN `_region` VARCHAR(50) CHARSET utf8, IN `_country` VARCHAR(50) CHARSET utf8, IN `_store` VARCHAR(50) CHARSET utf8, IN `_category` VARCHAR(50) CHARSET utf8)  NO SQL
SELECT
idStore,
name, 
address,
googleMaps,
city,
region,
typeOfStore1,
typeOfStore2,
typeOfStore3,
typeOfStore4,
category1,
category2,
category3,
category4,
category5,
category6,
zipCode,
businessHours,
URL
FROM stores
WHERE region = _region
OR country = _country
OR typeOfStore1 = _store
OR typeOfStore2 = _store
OR typeOfStore3 = _store
OR typeOfStore4 = _store
OR category1 = _category
OR category2 = _category
OR category3 = _category
OR category4 = _category
OR category5 = _category
OR category6 = _category$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_listStoresByName` (IN `_name` VARCHAR(100))  NO SQL
SELECT
idStore,
name, 
address,
googleMaps,
city,
region,
typeOfStore1,
typeOfStore2,
typeOfStore3,
typeOfStore4,
category1,
category2,
category3,
category4,
category5,
category6,
zipCode,
businessHours,
URL
FROM stores
WHERE name like concat("%", _name, "%")
or city like concat("%", _name, "%")
or country like concat("%", _name, "%")
or region like concat("%", _name, "%")
or zipCode like concat("%", _name, "%")$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `idCountry` int(11) NOT NULL,
  `countryCode` varchar(5) NOT NULL,
  `nameSpanish` varchar(30) NOT NULL,
  `nameEnglish` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`idCountry`, `countryCode`, `nameSpanish`, `nameEnglish`, `region`) VALUES
(1, 'AF', 'Afganistan', 'Afghanistan', 'Asia'),
(2, 'AX', 'Aland', 'Aland', 'Europa'),
(3, 'AL', 'Albania', 'Albania', 'Europa'),
(4, 'DE', 'Alemania', 'Germany', 'Europa'),
(5, 'AD', 'Andorra', 'Andorra', 'Europa'),
(6, 'AO', 'Angola', 'Angola', 'Africa'),
(7, 'AI', 'Anguila', 'Anguilla', 'America'),
(8, 'AG', 'Antigua y Barbuda', 'Antigua and Barbuda', 'America'),
(9, 'AN', 'Antillas Nederlandesas', 'Netherlands Antilles', 'America'),
(10, 'SA', 'Arabia Saudita', 'Saudi Arabia', 'Asia'),
(11, 'DZ', 'Argelia', 'Algeria', 'Africa'),
(12, 'AR', 'Argentina', 'Argentina', 'America'),
(13, 'AM', 'Armenia', 'Armenia', 'Europa'),
(14, 'AW', 'Aruba', 'Aruba', 'America'),
(15, 'AU', 'Australia', 'Australia', 'Oceania'),
(16, 'AT', 'Austria', 'Austria', 'Europa'),
(17, 'AZ', 'Azerbaiyan', 'Azerbaijan', 'Europa'),
(18, 'BS', 'Bahamas', 'Bahamas', 'America'),
(19, 'BH', 'Bahrein', 'Bahrain', 'Asia'),
(20, 'BD', 'Bangladesh', 'Bangladesh', 'Asia'),
(21, 'BB', 'Barbados', 'Barbados', 'America'),
(22, 'BE', 'Belgica', 'Belgium', 'Europa'),
(23, 'BZ', 'Belice', 'Belize', 'America'),
(24, 'BJ', 'Benin', 'Benin', 'Africa'),
(25, 'BM', 'Bermudas', 'Bermuda', 'America'),
(26, 'BY', 'Bielorrusia', 'Belarus', 'Europa'),
(27, 'BO', 'Bolivia', 'Bolivia', 'America'),
(28, 'BQ', 'Bonaire, San Estaquio y Saba', 'Bonaire, Saint Eustatius and S', 'America'),
(29, 'BA', 'Bosnia-Herzegovina', 'Bosnia-Herzegovina', 'Europa'),
(30, 'BW', 'Botsuana', 'Botswana', 'Africa'),
(31, 'BR', 'Brasil', 'Brazil', 'America'),
(32, 'BN', 'Brunei Darussalam', 'Brunei Darussalam', 'Asia'),
(33, 'BG', 'Bulgaria', 'Bulgaria', 'Europa'),
(34, 'BF', 'Burkina Faso', 'Burkina Faso', 'Africa'),
(35, 'BI', 'Burundi', 'Burundi', 'Africa'),
(36, 'BT', 'Butan', 'Bhutan', 'Asia'),
(37, 'CV', 'Cabo Verde', 'Cape Verde', 'Africa'),
(38, 'KH', 'Camboya', 'Cambodia', 'Asia'),
(39, 'CM', 'Camerun', 'Cameroon', 'Africa'),
(40, 'CA', 'Canada', 'Canada', 'America'),
(41, 'CAT', 'Cataluna', 'Catalonia', 'Europa'),
(42, 'TD', 'Chad', 'Chad', 'Africa'),
(43, 'CL', 'Chile', 'Chile', 'America'),
(44, 'CN', 'China (Republica Popular)', 'China (Peoples Republic of)', 'Asia'),
(45, 'CY', 'Chipre', 'Cyprus', 'Asia'),
(46, 'VA', 'Ciudad del Vaticano', 'Vatican City State', 'Europa'),
(47, 'CO', 'Colombia', 'Colombia', 'America'),
(48, 'KM', 'Comoras', 'Comoros', 'Africa'),
(49, 'CG', 'Congo (Republica del)', 'Congo (Republic of the)', 'Africa'),
(50, 'KP', 'Corea (del Norte)', 'Korea (North)', 'Asia'),
(51, 'KO', 'Corea (del Sur)', 'Korea (South)', 'Asia'),
(52, 'CI', 'Costa de Marfil', 'Ivory Coast, C?te d''Ivoire', 'Africa'),
(53, 'CR', 'Costa Rica', 'Costa Rica', 'America'),
(54, 'HR', 'Croacia', 'Croatia', 'Europa'),
(55, 'CU', 'Cuba', 'Cuba', 'America'),
(56, 'CW', 'Curasao', 'Curacao', 'America'),
(57, 'DK', 'Dinamarca', 'Denmark', 'Europa'),
(58, 'DM', 'Dominica', 'Dominica', 'America'),
(59, 'EC', 'Ecuador', 'Ecuador', 'America'),
(60, 'EG', 'Egipto', 'Egypt', 'Africa'),
(61, 'SV', 'El Salvador', 'El Salvador', 'America'),
(62, 'AE', 'Emiratos arabes Unidos', 'United Arab Emirates', 'Asia'),
(63, 'ER', 'Eritrea', 'Eritrea', 'Africa'),
(64, 'SK', 'Eslovaquia', 'Slovakia', 'Europa'),
(65, 'SI', 'Eslovenia', 'Slovenia', 'Europa'),
(66, 'ES', 'Espana', 'Spain', 'Europa'),
(67, 'US', 'Estados Unidos (EEUU)', 'United States of America (USA)', 'America'),
(68, 'EE', 'Estonia', 'Estonia', 'Europa'),
(69, 'ET', 'Etiopia', 'Ethiopia', 'Africa'),
(70, 'PH', 'Filipinas', 'Philippines', 'Asia'),
(71, 'FI', 'Finlandia', 'Finland', 'Europa'),
(72, 'FJ', 'Fiyi', 'Fiji', 'Oceania'),
(73, 'FR', 'Francia', 'France', 'Europa'),
(74, 'GA', 'Gabon', 'Gabon', 'Africa'),
(75, 'GM', 'Gambia', 'Gambia (The)', 'Africa'),
(76, 'GE', 'Georgia', 'Georgia', 'Europa'),
(77, 'GH', 'Ghana', 'Ghana', 'Africa'),
(78, 'GI', 'Gibraltar', 'Gibraltar', 'Europa'),
(79, 'GD', 'Granada', 'Grenada', 'America'),
(80, 'GR', 'Grecia', 'Greece', 'Europa'),
(81, 'GL', 'Groenlandia', 'Greenland', 'America'),
(82, 'GP', 'Guadalupe', 'Guadeloupe', 'America'),
(83, 'GU', 'Guam', 'Guam', 'oceania'),
(84, 'GT', 'Guatemala', 'Guatemala', 'America'),
(85, 'GF', 'Guayana Francesa', 'French Guiana', 'America'),
(86, 'GG', 'Guernesey', 'Guernsey', 'Europa'),
(87, 'GN', 'Guinea', 'Guinea', 'Africa'),
(88, 'GQ', 'Guinea Ecuatorial', 'Equatorial Guinea', 'Africa'),
(89, 'GW', 'Guinea-Bissau', 'Guinea-Bissau', 'Africa'),
(90, 'GY', 'Guyana', 'Guyana', 'America'),
(91, 'HT', 'Haiti', 'Haiti', 'America'),
(92, 'NL', 'Holanda (Paises Bajos)', 'Netherlands (Holland)', 'Europa'),
(93, 'HN', 'Honduras', 'Honduras', 'America'),
(94, 'HK', 'Hong Kong', 'Hong Kong', 'Asia'),
(95, 'HU', 'Hungria', 'Hungary', 'Europa'),
(96, 'IN', 'India', 'India', 'Asia'),
(97, 'ID', 'Indonesia', 'Indonesia', 'Asia'),
(98, 'IR', 'Iran', 'Iran', 'Asia'),
(99, 'IQ', 'Iraq', 'Iraq', 'Asia'),
(100, 'UK', 'Irlanda del Norte', 'Northern Ireland', 'Europa'),
(101, 'IE', 'Irlanda', 'Ireland', 'Europa'),
(102, 'IS', 'Islandia', 'Iceland', 'Europa'),
(103, 'KY', 'Islas Caiman', 'Cayman Islands', 'America'),
(104, 'CC', 'Islas Cocos', 'Cocos/Keeling Islands', 'Asia'),
(105, 'CK', 'Islas Cook', 'Cook Islands', 'Asia'),
(106, 'FO', 'Islas Feroe', 'Faroe Islands', 'Europa'),
(107, 'FK', 'Islas Malvinas', 'Falkland Islands', 'America'),
(108, 'MP', 'Islas Marianas del Norte', 'Northern Mariana Islands', 'Oceania'),
(109, 'MH', 'Islas Marshall', 'Marshall Islands', 'Oceania'),
(110, 'PN', 'Islas Pitcairn', 'Pitcairn Islands', 'Oceania'),
(111, 'SB', 'Islas Salomon', 'Solomon Islands', 'Oceania'),
(112, 'SJ', 'Islas Svalbard y Jan Mayen', 'Svalbard and Jan Mayen Islands', 'europa'),
(113, 'TC', 'Islas Turcas y Caicos', 'Turks and Caicos Islands', 'America'),
(114, 'VG', 'Islas Virgenes Britanicas', 'British Virgin Islands', 'America'),
(115, 'VI', 'Islas Virgenes de los Estados ', 'US Virgin Islands', 'America'),
(116, 'IL', 'Israel', 'Israel', 'Asia'),
(117, 'IT', 'Italia', 'Italy', 'Europa'),
(118, 'JM', 'Jamaica', 'Jamaica', 'America'),
(119, 'JP', 'Japon', 'Japan', 'Asia'),
(120, 'JO', 'Jordania', 'Jordan', 'Asia'),
(121, 'KZ', 'Kazajistan', 'Kazakhstan', 'Asia'),
(122, 'KE', 'Kenia', 'Kenya', 'Africa'),
(123, 'KG', 'Kirguistan', 'Kyrgyzstan', 'Asia'),
(124, 'KI', 'Kiribati', 'Kiribati', 'Oceania'),
(125, 'KV', 'Kosovo', 'Kosovo', 'Europa'),
(126, 'KW', 'Kuwait', 'Kuwait', 'Asia'),
(127, 'LA', 'Laos', 'Laos', 'Asia'),
(128, 'LS', 'Lesoto', 'Lesotho', 'Africa'),
(129, 'LV', 'Letonia', 'Latvia', 'Europa'),
(130, 'LB', 'Libano', 'Lebanon', 'Asia'),
(131, 'LR', 'Liberia', 'Liberia', 'Africa'),
(132, 'LY', 'Libia', 'Libya', 'Africa'),
(133, 'LI', 'Liechtenstein', 'Liechtenstein', 'Europa'),
(134, 'LT', 'Lituania', 'Lithuania', 'Europa'),
(135, 'LU', 'Luxemburgo', 'Luxembourg', 'Europa'),
(136, 'MO', 'Macao', 'Macau', 'Asia'),
(137, 'MK', 'Macedonia (Republica de)', 'Macedonia (Republic of)', 'Europa'),
(138, 'MG', 'Madagascar', 'Madagascar', 'Africa'),
(139, 'MY', 'Malasia', 'Malaysia', 'Asia'),
(140, 'MW', 'Malaui', 'Malawi', 'Africa'),
(141, 'MV', 'Maldivas', 'Maldives', 'Asia'),
(142, 'ML', 'Mali', 'Mali', 'Africa'),
(143, 'MT', 'Malta', 'Malta', 'Europa'),
(144, 'MA', 'Marruecos', 'Morocco', 'Africa'),
(145, 'MQ', 'Martinica', 'Martinique', 'America'),
(146, 'MU', 'Mauricio', 'Mauritius', 'Africa'),
(147, 'MR', 'Mauritania', 'Mauritania', 'Africa'),
(148, 'YT', 'Mayotte', 'Mayotte', 'Europa'),
(149, 'MX', 'Mexico', 'Mexico', 'America'),
(150, 'FM', 'Micronesia (Estados Federados ', 'Micronesia (Federated States o', 'Oceania'),
(151, 'MD', 'Moldavia', 'Moldova', 'Europa'),
(152, 'MC', 'Monaco', 'Monaco', 'Europa'),
(153, 'MN', 'Mongolia', 'Mongolia', 'Asia'),
(154, 'ME', 'Montenegro', 'Montenegro', 'Europa'),
(155, 'MS', 'Montserrat', 'Montserrat', 'America'),
(156, 'MZ', 'Mozambique', 'Mozambique', 'Africa'),
(157, 'MM', 'Myanmar (Birmania)', 'Myanmar', 'Asia'),
(158, 'NA', 'Namibia', 'Namibia', 'Africa'),
(159, 'NR', 'Nauru', 'Nauru', 'Oceania'),
(160, 'NP', 'Nepal', 'Nepal', 'Asia'),
(161, 'NI', 'Nicaragua', 'Nicaragua', 'America'),
(162, 'NE', 'Niger', 'Niger', 'Africa'),
(163, 'NG', 'Nigeria', 'Nigeria', 'Africa'),
(164, 'NU', 'Niue', 'Niue', 'oceania'),
(165, 'NO', 'Noruega', 'Norway', 'Europa'),
(166, 'NC', 'Nueva Caledonia', 'New Caledonia', 'Oceania'),
(167, 'NZ', 'Nueva Zelanda', 'New Zealand', 'Oceania'),
(168, 'OM', 'Oman', 'Oman', 'Asia'),
(169, 'NL', 'Paises Bajos (Holanda)', 'Netherlands (Holland)', 'Europa'),
(170, 'PK', 'Pakistan', 'Pakistan', 'Asia'),
(171, 'PW', 'Palaos', 'Palau', 'Oceania'),
(172, 'PS', 'Palestina', 'Palestinian Territories', 'Asia'),
(173, 'PA', 'Panama', 'Panama', 'America'),
(174, 'PG', 'Papua Nueva Guinea', 'Papua New Guinea', 'Oceania'),
(175, 'PY', 'Paraguay', 'Paraguay', 'America'),
(176, 'PE', 'Peru', 'Peru', 'America'),
(177, 'PF', 'Polinesia Francesa', 'French Polynesia', 'Oceania'),
(178, 'PL', 'Polonia', 'Poland', 'Europa'),
(179, 'PT', 'Portugal', 'Portugal', 'Europa'),
(180, 'PR', 'Puerto Rico', 'Puerto Rico', 'America'),
(181, 'QA', 'Qatar', 'Qatar', 'Asia'),
(182, 'UK', 'Reino Unido (RU)', 'United Kingdom (UK)', 'Europa'),
(183, 'CF', 'Republica Centroafricana', 'Central African Republic', 'Africa'),
(184, 'CZ', 'Republica Checa', 'Czech Republic', 'Europa'),
(185, 'CD', 'Republica Democratica del Cong', 'Democratic Republic of the Con', 'Africa'),
(186, 'DO', 'Republica Dominicana', 'Dominican Republic', 'America'),
(187, 'RE', 'Reunion', 'R?union', 'Africa'),
(188, 'RW', 'Ruanda', 'Rwanda', 'Africa'),
(189, 'RO', 'Rumania', 'Romania', 'Europa'),
(190, 'RU', 'Rusia', 'Russia', 'Europa'),
(191, 'EH', 'Sahara Occidental', 'Western Sahara', 'Africa'),
(192, 'AS', 'Samoa Americana', 'American Samoa', 'Oceania'),
(193, 'WS', 'Samoa del Oeste', 'Western Samoa', 'Oceania'),
(194, 'KN', 'San Cristobal y Nieves', 'Saint Kitts and Nevis', 'America'),
(195, 'SM', 'San Marino', 'San Marino', 'Europa'),
(196, 'SX', 'San Martin (Sint Maarten)', 'Saint Maarten', 'America'),
(197, 'PM', 'San Pedro y Miquelon', 'Saint-Pierre and Miquelon', 'America'),
(198, 'VC', 'San Vicente y las Granadinas', 'Saint Vincent and the Grenadin', 'America'),
(199, 'SH', 'Santa Helena', 'Saint Helena', 'Africa'),
(200, 'LC', 'Santa Lucia', 'Saint Lucia', 'America'),
(201, 'ST', 'Santo Tome y Principe', 'Sao Tome and Principe', 'Africa'),
(202, 'SN', 'Senegal', 'Senegal', 'Africa'),
(203, 'RS', 'Serbia', 'Serbia', 'Europa'),
(204, 'SC', 'Seychelles', 'Seychelles', 'Africa'),
(205, 'SL', 'Sierra Leona', 'Sierra Leone', 'Africa'),
(206, 'SG', 'Singapur', 'Singapore', 'Asia'),
(207, 'SY', 'Siria', 'Syria', 'Asia'),
(208, 'SO', 'Somalia', 'Somalia', 'Africa'),
(209, 'LK', 'Sri Lanka', 'Sri Lanka', 'Asia'),
(210, 'SZ', 'Suazilandia', 'Swaziland', 'Africa'),
(211, 'ZA', 'Sudafrica', 'South Africa', 'Africa'),
(212, 'SD', 'Sudan', 'Sudan', 'Africa'),
(213, 'SS', 'Sudan del Sur', 'South Sudan', 'Africa'),
(214, 'SE', 'Suecia', 'Sweden', 'Europa'),
(215, 'CH', 'Suiza', 'Switzerland', 'Europa'),
(216, 'SR', 'Surinam', 'Suriname', 'America'),
(217, 'TH', 'Tailandia', 'Thailand', 'Asia'),
(218, 'TW', 'Taiwan', 'Taiwan', 'Asia'),
(219, 'TZ', 'Tanzania', 'Tanzania', 'Africa'),
(220, 'TJ', 'Tayikistan', 'Tajikistan', 'Asia'),
(221, 'IO', 'Territorio Britanico en el Oce', 'British Indian Ocean Territory', 'Asia'),
(222, 'TF', 'Territorios Australes Francese', 'French Southern and Antarctic ', 'Europa'),
(223, 'TL', 'Timor Oriental', 'East Timor', 'Asia'),
(224, 'TG', 'Togo', 'Togo', 'Africa'),
(225, 'TK', 'Tokelau', 'Tokelau', 'Oceania'),
(226, 'TO', 'Tonga', 'Tonga', 'Oceania'),
(227, 'TT', 'Trinidad y Tobago', 'Trinidad and Tobago', 'America'),
(228, 'TN', 'Tunez', 'Tunisia', 'Africa'),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'Asia'),
(230, 'TR', 'Turquia', 'Turkey', 'Asia'),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'Oceania'),
(232, 'UA', 'Ucrania', 'Ukraine', 'Europa'),
(233, 'UG', 'Uganda', 'Uganda', 'Africa'),
(234, 'EU', 'Union Europea', 'European Union', 'Europa'),
(235, 'SU', 'Union Sovietica (URSS)', 'Soviet Union (USSR)', 'Europa'),
(236, 'UY', 'Uruguay', 'Uruguay', 'America'),
(237, 'UZ', 'Uzbekistan', 'Uzbekistan', 'Asia'),
(238, 'VU', 'Vanuatu', 'Vanuatu', 'Oceania'),
(239, 'VE', 'Venezuela', 'Venezuela', 'America'),
(240, 'VN', 'Vietnam', 'Vietnam', 'Asia'),
(241, 'WF', 'Wallis y Futuna', 'Wallis and Futuna', 'Oceania'),
(242, 'YE', 'Yemen', 'Yemen', 'Asia'),
(243, 'DJ', 'Yibuti', 'Djibouti', 'Africa'),
(244, 'YU', 'Yugoslavia', 'Yugoslavia', 'Europa'),
(245, 'ZM', 'Zambia', 'Zambia', 'Africa'),
(246, 'ZW', 'Zimbabue', 'Zimbabwe', 'Africa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE `stores` (
  `idStore` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `googleMaps` varchar(350) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `typeOfStore1` varchar(50) DEFAULT NULL,
  `typeOfStore2` varchar(50) DEFAULT NULL,
  `typeOfStore3` varchar(50) DEFAULT NULL,
  `typeOfStore4` varchar(50) DEFAULT NULL,
  `category1` varchar(50) DEFAULT NULL,
  `category2` varchar(30) DEFAULT NULL,
  `category3` varchar(30) DEFAULT NULL,
  `category4` varchar(30) DEFAULT NULL,
  `category5` varchar(30) DEFAULT NULL,
  `category6` varchar(30) DEFAULT NULL,
  `zipCode` varchar(20) NOT NULL,
  `businessHours` varchar(100) DEFAULT NULL,
  `URL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`idStore`, `name`, `address`, `googleMaps`, `city`, `country`, `region`, `typeOfStore1`, `typeOfStore2`, `typeOfStore3`, `typeOfStore4`, `category1`, `category2`, `category3`, `category4`, `category5`, `category6`, `zipCode`, `businessHours`, `URL`) VALUES
(1, 'Maaji Retiro', 'Clle 81 # 12-2 C.C el Retiro local 128', 'https://www.google.com/maps/place/El+Retiro+Shopping+Center/@4.6532357,-74.1355776,12z/data=!4m8!1m2!2m1!1sClle+81+%23+12-2+C.C+el+Retiro+local+128!3m4!1s0x0:0x3c4f9c94ca6d3a9a!8m2!3d4.6659975!4d-74.0542245', 'Bogota', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '110211', 'Monday - Friday 8:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 12:00 PM - 19:00 PM', ''),
(2, 'Maaji Barranquilla', 'Cra 51B # 87-50 C.C Viva Barranquilla local 130', 'https://www.google.com/maps/place/Centro+Comercial+Viva/@11.0048354,-74.8254534,15z/data=!4m8!1m2!2m1!1sCra+51B+%23+87-50+C.C+Viva+Barranquilla+local+130!3m4!1s0x0:0x49e99a8cc8891029!8m2!3d11.0092271!4d-74.820258', 'Barranquilla', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '080001', 'Monday - Friday 10:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 11:00 AM - 20:00 PM', ''),
(3, 'Maaji Cartagena', 'Centro Historico Plaza Santo Domingo Clle nuestra Señora del Carmen # 33-98', 'https://www.google.com/maps/place/Plaza+Santo+Domingo/@10.4242886,-75.554326,17z/data=!4m8!1m2!2m1!1sCentro+Historico+Plaza+Santo+Domingo+Clle+nuestra+Se%3Fora+del+Carmen+%23+33-98!3m4!1s0x0:0x51f25f72fab1a38!8m2!3d10.4242889!4d-75.5521376', 'Cartagena', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '130001', 'Monday - Friday 10:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 11:00 AM - 19:00 PM', ''),
(4, 'Maaji Tesoro', 'Cra 25A # 1A Sur 45 local 1042', 'https://www.google.com/maps/place/El+Tesoro+Parque+Comercial/@6.1969348,-75.5609589,17z/data=!4m8!1m2!2m1!1sCra+25A+%23+1A+Sur+45+local+1042!3m4!1s0x8e46829a65a5d1ab:0xacb563511f221ff3!8m2!3d6.1975427!4d-75.5588351', 'Medellin', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '050021', 'Monday - Friday 10:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 11:00 AM - 20:00 PM', ''),
(5, 'Maaji Cali', 'Cra 100 # 5-169 Sur C.C Unicentro', 'https://www.google.com/maps/place/Centro+Comercial+Unicentro,+Cra.+100+%235-169,+Cali,+Valle+del+Cauca/@3.3739531,-76.5417848,17z/data=!4m13!1m7!3m6!1s0x8e30a17adb2d0005:0x9045af236cd08705!2sCentro+Comercial+Unicentro,+Cra.+100+%235-169,+Cali,+Valle+del+C', 'Cali', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '760001', 'Monday - Friday 10:00 AM - 20:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 11:00 AM - 19:00 PM', ''),
(6, 'Maaji Bocagrande', 'Cra 1 Clle 12-118 local 2-11 Plaza Bocagrande', 'https://www.google.com/maps/place/Plaza+Bocagrande+Centro+Comercial/@10.4084653,-75.560495,15.73z/data=!4m8!1m2!2m1!1sCra+1+Clle+12-118+local+2-11+Plaza+Bocagrande!3m4!1s0x0:0x4854915b1817679d!8m2!3d10.4112097!4d-75.551227', 'Cartagena', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '130001', 'Monday - Friday 10:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 10:00 AM - 20:00 PM ', ''),
(7, 'Maaji Santafe', 'Cra 43 A Sur # 170 local 2047', 'https://www.google.com/maps/place/Centro+Comercial+Santaf%C3%A9/@6.1970672,-75.5765086,17z/data=!4m8!1m2!2m1!1sCra+43+A+Sur+%23+170+local+2047!3m4!1s0x8e4682881ca00127:0xf96762aa39ea4209!8m2!3d6.1962584!4d-75.574054', 'Medellin', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '050021', 'Monday - Friday 10:00 AM - 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 11:00 AM - 20:00 PM', ''),
(8, 'Maaji Bucaramanga', 'Transversal 93 # 34-99 local 221', 'https://www.google.com/maps/place/Cacique+El+Centro+Comercial/@7.0996603,-73.1095528,17z/data=!4m12!1m6!3m5!1s0x8e683f9501983051:0x816d5ea64809e1b0!2sCacique+El+Centro+Comercial!8m2!3d7.0996603!4d-73.1073641!3m4!1s0x8e683f9501983051:0x816d5ea64809e1b0!8m2!3d7.0996603!4d-73.1073641', 'Bucaramanga', 'Colombia', 'America', 'Physical', 'Store', '', '', 'Swim', 'Active', 'Kids', 'Trunks', 'Cover', 'Accessories', '680001', 'Monday - Friday 10:00 AM 21:00 PM, Saturday 10:00 AM - 21:00 PM, Sunday 10:00 AM - 20:00 PM', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`idCountry`);

--
-- Indices de la tabla `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`idStore`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `idCountry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT de la tabla `stores`
--
ALTER TABLE `stores`
  MODIFY `idStore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
