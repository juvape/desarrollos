-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 19:01:03
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kyc`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarBusinessLocations` (IN `_idBusiness` INT, IN `_Country1` VARCHAR(50) CHARSET utf8, IN `_State1` VARCHAR(50) CHARSET utf8, IN `_City1` VARCHAR(50) CHARSET utf8, IN `_Address1` VARCHAR(100) CHARSET utf8, IN `_storeName1` VARCHAR(50) CHARSET utf8, IN `_ZipCode1` VARCHAR(10) CHARSET utf8, IN `_Country2` VARCHAR(50) CHARSET utf8, IN `_State2` VARCHAR(50) CHARSET utf8, IN `_City2` VARCHAR(50) CHARSET utf8, IN `_Address2` VARCHAR(100) CHARSET utf8, IN `_storeName2` VARCHAR(50) CHARSET utf8, IN `_ZipCode2` VARCHAR(10) CHARSET utf8, IN `_Country3` VARCHAR(50) CHARSET utf8, IN `_State3` VARCHAR(50) CHARSET utf8, IN `_City3` VARCHAR(50) CHARSET utf8, IN `_Address3` VARCHAR(100) CHARSET utf8, IN `_storeName3` VARCHAR(50) CHARSET utf8, IN `_ZipCode3` VARCHAR(10) CHARSET utf8, IN `_Country4` VARCHAR(50) CHARSET utf8, IN `_State4` VARCHAR(50) CHARSET utf8, IN `_City4` VARCHAR(50) CHARSET utf8, IN `_storeName4` VARCHAR(50) CHARSET utf8, IN `_Address4` VARCHAR(100) CHARSET utf8, IN `_ZipCode4` VARCHAR(10) CHARSET utf8, IN `_Country5` VARCHAR(50) CHARSET utf8, IN `_State5` VARCHAR(50) CHARSET utf8, IN `_City5` VARCHAR(50) CHARSET utf8, IN `_storeName5` VARCHAR(50) CHARSET utf8, IN `_Address5` VARCHAR(100) CHARSET utf8, IN `_ZipCode5` VARCHAR(10) CHARSET utf8, IN `_dateUpdated` VARCHAR(20) CHARSET utf8)  BEGIN
	UPDATE 
    	businesslocations SET 
        Country1 = _Country1, 
        State1 = _State1,
        City1 = _City1, 
        Address1 = _Address1, 
        storeName1 = _storeName1, 
        ZipCode1 = _ZipCode1, 
        Country2 = _Country2, 
        State2 = _State2, 
        City2 = _City2, 
        Address2 = _Address2, 
        storeName2 = _storeName2, 
        ZipCode2 = _ZipCode2, 
        Country3 = _Country3, 
        State3 = _State3, 
        City3 = _City3, 
        Address3 = _Address3, 
        storeName3 = _storeName3, 
        ZipCode3 = _ZipCode3, 
        Country4 = _Country4, 
        State4 = _State4, 
        City4 = _City4, 
        storeName4 = _storeName4, 
        Address4 = _Address4, 
        ZipCode4 = _ZipCode4, 
        Country5 = _Country5, 
        State5 = _State5,
        City5 = _City5, 
        storeName5 = _storeName5, 
        Address5 = _Address5, 
        ZipCode5 = _ZipCode5,
        dateUpdated = _dateUpdated
	WHERE idBusiness = _idBusiness;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarInfoForm1` (IN `_companyName` VARCHAR(255) CHARSET utf8, IN `_brandName` VARCHAR(255) CHARSET utf8, IN `_email` VARCHAR(100) CHARSET utf8, IN `_phone` VARCHAR(30) CHARSET utf8, IN `_website` VARCHAR(50) CHARSET utf8, IN `_address` VARCHAR(255) CHARSET utf8, IN `_city` VARCHAR(30) CHARSET utf8, IN `_state` VARCHAR(50) CHARSET utf8, IN `_country` VARCHAR(50) CHARSET utf8, IN `_zipcode` VARCHAR(20) CHARSET utf8, IN `_facebook` VARCHAR(50) CHARSET utf8, IN `_instagram` VARCHAR(50) CHARSET utf8, IN `_twitter` VARCHAR(50) CHARSET utf8, IN `_idCustomer` INT, IN `_dateUpdated` VARCHAR(30) CHARSET utf8)  NO SQL
UPDATE customers
SET companyName = _companyName,
brandName = _brandName,
email = _email,
phone = _phone,
website = _website,
address = _address,
city = _city,
state = _state,
country = _country,
zipcode = _zipcode,
facebook = _facebook,
instagram = _instagram,
twitter = _twitter,
dateUpdated = _dateUpdated
WHERE idCustomer = _idCustomer$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarInfoForm2` (IN `_taxID` VARCHAR(20) CHARSET utf8, IN `_owner` VARCHAR(50) CHARSET utf8, IN `_idNumber` VARCHAR(20) CHARSET utf8, IN `_phone` VARCHAR(30) CHARSET utf8, IN `_billingAddress` VARCHAR(100) CHARSET utf8, IN `_billingCity` VARCHAR(50) CHARSET utf8, IN `_billingState` VARCHAR(50) CHARSET utf8, IN `_billingCountry` VARCHAR(50) CHARSET utf8, IN `_billingZipCode` VARCHAR(20) CHARSET utf8, IN `_dateUpdated` VARCHAR(20) CHARSET utf8, IN `_businessLocations` VARCHAR(20) CHARSET utf8, IN `_idAddresses` INT)  NO SQL
UPDATE adresses
SET taxId = _taxID,
owner = _owner,
idNumber = _idNumber,
phone = _phone,
billingAddress = _billingAddress,
billingCity = _billingCity,
billingState = _billingState,
billingCountry = _billingCountry,
billingZipCode = _billingZipCode,
quantityLocations = _businessLocations,
dateUpdated = _dateUpdated
WHERE idAddresses = _idAddresses$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarInfoForm3` (IN `_currency` VARCHAR(50) CHARSET utf8, IN `_bankName` VARCHAR(80) CHARSET utf8, IN `_branch` VARCHAR(50) CHARSET utf8, IN `_accountNumber` VARCHAR(20) CHARSET utf8, IN `_paymentType` VARCHAR(20) CHARSET utf8, IN `_creditTerms` VARCHAR(20) CHARSET utf8, IN `_reference1Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference1` VARCHAR(20) CHARSET utf8, IN `_emailReference1` VARCHAR(50) CHARSET utf8, IN `_reference2Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference2` VARCHAR(20) CHARSET utf8, IN `_emailReference2` VARCHAR(50) CHARSET utf8, IN `_reference3Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference3` VARCHAR(20) CHARSET utf8, IN `_emailReference3` VARCHAR(50) CHARSET utf8, IN `_buyerName` VARCHAR(100) CHARSET utf8, IN `_buyerPhone` VARCHAR(20) CHARSET utf8, IN `_buyerEmail` VARCHAR(50) CHARSET utf8, IN `_dateUpdated` VARCHAR(30) CHARSET utf8, IN `_idBuyers` INT)  NO SQL
UPDATE buyers
SET currency = _currency,
bankName = _bankName,
branch = _branch,
accountNumber = _accountNumber,
paymentType = _paymentType,
creditTerms = _creditTerms,
reference1Name = _reference1Name,
phoneReference1 = _phoneReference1,
emailReference1 = _emailReference1,
reference2Name = _reference2Name,
phoneReference2 = _phoneReference2,
emailReference2 = _emailReference2,
reference3Name = _reference3Name,
phoneReference3 = _phoneReference3,
emailReference3 = _emailReference3,
buyerName = _buyerName,
buyerPhone = _buyerPhone,
buyerEmail = _buyerEmail,
dateUpdated = _dateUpdated
WHERE idBuyers = _idBuyers$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarInfoForm4` (IN `_typeBusiness` VARCHAR(50) CHARSET utf8, IN `_linesBusiness` VARCHAR(80) CHARSET utf8, IN `_anualSalesFigures` VARCHAR(30) CHARSET utf8, IN `_marketPotentialBrand` VARCHAR(50) CHARSET utf8, IN `_businessLocation` VARCHAR(10) CHARSET utf8, IN `_webSite` VARCHAR(74), IN `_certificateOfExistencek` VARCHAR(100) CHARSET utf8, IN `_taxCertificate` VARCHAR(100) CHARSET utf8, IN `_checkSpecimen` VARCHAR(100) CHARSET utf8, IN `_legalID` VARCHAR(100) CHARSET utf8, IN `_dateUpdated` VARCHAR(20) CHARSET utf8, IN `_idBusiness` INT)  NO SQL
UPDATE business
SET typeBusiness = _typeBusiness,
linesBusiness = _linesBusiness,
anualSalesFigures = _anualSalesFigures,
marketPotentialBrand = _marketPotentialBrand,
businessLocation = _businessLocation,
webSite = _webSite,
certificateOfExistence = _certificateOfExistencek,
taxCertificate = _taxCertificate,
checkSpecimen = _checkSpecimen,
legalID = _legalID,
dateUpdated = _dateUpdated
WHERE idBusiness = _idBusiness$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_actualizarShippingAddress` (IN `_idAddresses` INT, IN `_Country1` VARCHAR(50) CHARSET utf8, IN `_State1` VARCHAR(50) CHARSET utf8, IN `_City1` VARCHAR(50) CHARSET utf8, IN `_Address1` VARCHAR(100) CHARSET utf8, IN `_storeName1` VARCHAR(50) CHARSET utf8, IN `_ZipCode1` VARCHAR(10) CHARSET utf8, IN `_Country2` VARCHAR(50) CHARSET utf8, IN `_State2` VARCHAR(50) CHARSET utf8, IN `_City2` VARCHAR(50) CHARSET utf8, IN `_Address2` VARCHAR(100) CHARSET utf8, IN `_storeName2` VARCHAR(50) CHARSET utf8, IN `_ZipCode2` VARCHAR(10) CHARSET utf8, IN `_Country3` VARCHAR(50) CHARSET utf8, IN `_State3` VARCHAR(50) CHARSET utf8, IN `_City3` VARCHAR(50) CHARSET utf8, IN `_Address3` VARCHAR(100) CHARSET utf8, IN `_storeName3` VARCHAR(50) CHARSET utf8, IN `_ZipCode3` VARCHAR(10) CHARSET utf8, IN `_Country4` VARCHAR(50) CHARSET utf8, IN `_State4` VARCHAR(50) CHARSET utf8, IN `_City4` VARCHAR(50) CHARSET utf8, IN `_storeName4` VARCHAR(50) CHARSET utf8, IN `_Address4` VARCHAR(100) CHARSET utf8, IN `_ZipCode4` VARCHAR(10) CHARSET utf8, IN `_Contry5` VARCHAR(50) CHARSET utf8, IN `_State5` VARCHAR(50) CHARSET utf8, IN `_City5` VARCHAR(50) CHARSET utf8, IN `_storeName5` VARCHAR(50) CHARSET utf8, IN `_Address5` VARCHAR(100) CHARSET utf8, IN `_ZipCode5` VARCHAR(10) CHARSET utf8, IN `_dateUpdated` VARCHAR(20) CHARSET utf8)  BEGIN
	UPDATE shippingaddress 
    SET Country1 = _Country1, 
    State1 = _State1, 
    City1 = _City1, 
    Address1 = _Address1, 
    storeName1 = _storeName1, 
    ZipCode1 = _ZipCode1, 
    Country2 = _Country2, 
    State2 = _State2, 
    City2 = _City2, 
    Address2 = _Address2, 
    storeName2 = _storeName2, 
    ZipCode2 = _ZipCode2, 
    Country3 = _Country3, 
    State3 = _State3, 
    City3 = _City3, 
    Address3 = _Address3, 
    storeName3 = _storeName3, 
    ZipCode3 = _ZipCode3, 
    Country4 = _Country4, 
    State4 = _State4, 
    City4 = _City4, 
    storeName4 = _storeName4,
    Address4 = _Address4, 
    ZipCode4 = _ZipCode4, 
    Contry5 = _Contry5, 
    State5 = _State5, 
    City5 = _City5, 
    storeName5 = _storeName5, 
    Address5 = _Address5, 
    ZipCode5 = _ZipCode5,
    dateUpdated = _dateUpdated
    WHERE idAddresses = _idAddresses;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarIdAddressUsuario` (IN `_username` INT)  NO SQL
SELECT
username
FROM adresses
WHERE username = _username$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarIdUsuario` (IN `_username` INT)  NO SQL
SELECT 
userName
FROM customers
WHERE userName = _username$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarIdUsuarioBusiness` (IN `_usernameBusiness` INT)  NO SQL
SELECT
usernameBusiness
FROM business
WHERE usernameBusiness = _usernameBusiness$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarIdUsuarioBuyers` (IN `_usernameBuyers` INT)  NO SQL
SELECT 
username
FROM buyers
WHERE username = _usernameBuyers$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoAddresses` (IN `_username` INT)  NO SQL
SELECT
idAddresses,
username,
taxId,
typeCompany,
owner,
idNumber,
phone,
billingAddress,
billingCity,
billingState,
billingCountry,
billingZipCode,
quantityLocations,
dateUpdated
FROM adresses
WHERE username = _username$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoBusiness` (IN `_usernameBusiness` INT)  NO SQL
SELECT
idBusiness,
usernameBusiness,
typeBusiness,
linesBusiness,
anualSalesFigures,
marketPotentialBrand,
businessLocation,
webSite,
certificateOfExistence,
taxCertificate,
legalID,
checkSpecimen
FROM business
WHERE usernameBusiness = _usernameBusiness$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoBusinessLocations` (IN `_idBusiness` INT)  NO SQL
SELECT
idBusinessLocations,
idBusiness,
Country1,
State1,
City1,
Address1,
storeName1,
zipCode1,
Country2,
state2,
city2,
Address2,
storeName2,
zipCode2,
Country3,
State3,
City3,
Address3,
storeName3,
zipCode3,
Country4,
State4,
City4,
Address4,
storeName4,
zipCode4,
Country5,
State5,
City5,
Address5,
storeName5,
zipCode5,
dateUpdated
FROM businesslocations
WHERE idBusiness = _idBusiness$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoBuyers` (IN `_usernameBuyers` INT)  NO SQL
SELECT 
idBuyers,
username,
currency,
bankName,
branch,
accountNumber,
paymentType,
creditTerms,
reference1Name,
phoneReference1,
emailReference1,
reference2Name,
phoneReference2,
emailReference2,
reference3Name,
phoneReference3,
emailReference3,
buyerName,
buyerPhone,
buyerEmail
FROM buyers
WHERE username = _usernameBuyers$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoClientes` (IN `_username` INT)  NO SQL
SELECT 
idCustomer,
username,
companyName, 
brandName,
email, 
phone,
website,
address, 
city, 
state,
country,
zipcode,
facebook,
instagram,
twitter
FROM customers
WHERE username = _username$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarInfoShippingAddress` (IN `_idAddress` VARCHAR(10) CHARSET utf8)  NO SQL
SELECT
idShippingAddress,
idAddresses,
Country1,
State1,
City1,
Address1,
storeName1,
ZipCode1,
Country2,
State2,
City2,
Address2,
storeName2,
ZipCode2,
Country3,
State3,
City3,
Address3,
storeName3,
ZipCode3,
Country4,
State4,
City4,
storeName4,
Address4,
ZipCode4,
Contry5,
State5,
City5,
storeName5,
Address5,
ZipCode5
FROM
shippingaddress
WHERE idAddresses = _idAddress$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarUltimoId` ()  NO SQL
SELECT MAX(idAddresses) AS id
FROM adresses$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarUltimoIdBusiness` ()  NO SQL
SELECT MAX(idBusiness) AS id 
FROM business$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarUsuarios` (IN `_email` VARCHAR(255) CHARSET utf8, IN `_password` VARCHAR(255) CHARSET utf8)  NO SQL
SELECT
idUser,
email,
password
FROM users
WHERE email = _email
AND password = _password$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_consultarUsuariosRegistrados` (IN `_email` VARCHAR(255) CHARSET utf8)  NO SQL
SELECT COUNT(email) AS email
FROM users
WHERE email = _email$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarBusinessLocations` (IN `_idBusiness` INT(11), IN `_Country1` VARCHAR(50) CHARSET utf8, IN `_State1` VARCHAR(50) CHARSET utf8, IN `_City1` VARCHAR(50) CHARSET utf8, IN `_Address1` VARCHAR(100) CHARSET utf8, IN `_storeName1` VARCHAR(50) CHARSET utf8, IN `_ZipCode1` VARCHAR(10) CHARSET utf8, IN `_Country2` VARCHAR(50) CHARSET utf8, IN `_State2` VARCHAR(50) CHARSET utf8, IN `_City2` VARCHAR(50) CHARSET utf8, IN `_Address2` VARCHAR(100) CHARSET utf8, IN `_storeName2` VARCHAR(50) CHARSET utf8, IN `_ZipCode2` VARCHAR(10) CHARSET utf8, IN `_Country3` VARCHAR(50) CHARSET utf8, IN `_State3` VARCHAR(50) CHARSET utf8, IN `_City3` VARCHAR(50) CHARSET utf8, IN `_Address3` VARCHAR(100) CHARSET utf8, IN `_storeName3` VARCHAR(50) CHARSET utf8, IN `_ZipCode3` VARCHAR(10) CHARSET utf8, IN `_Country4` VARCHAR(50) CHARSET utf8, IN `_State4` VARCHAR(50) CHARSET utf8, IN `_City4` VARCHAR(50) CHARSET utf8, IN `_storeName4` VARCHAR(50) CHARSET utf8, IN `_Address4` VARCHAR(100) CHARSET utf8, IN `_ZipCode4` VARCHAR(10) CHARSET utf8, IN `_Country5` VARCHAR(50) CHARSET utf8, IN `_State5` VARCHAR(50) CHARSET utf8, IN `_City5` VARCHAR(50) CHARSET utf8, IN `_storeName5` VARCHAR(50) CHARSET utf8, IN `_Address5` VARCHAR(100) CHARSET utf8, IN `_ZipCode5` VARCHAR(10) CHARSET utf8)  BEGIN
	INSERT INTO businesslocations 
    (
        idBusiness, 
        Country1, 
        State1,
        City1, 
        Address1, 
        storeName1, 
        ZipCode1, 
        Country2, 
        State2, 
        City2, 
        Address2, 
        storeName2, 
        ZipCode2, 
        Country3, 
        State3,
        City3, 
        Address3, 
        storeName3, 
        ZipCode3, 
        Country4, 
        State4, 
        City4, 
        storeName4, 
        Address4, 
        ZipCode4, 
        Country5, 
        State5, 
        City5, 
        storeName5, 
        Address5, 
        ZipCode5
    ) 
VALUES 
(_idBusiness, _Country1, _State1, _City1, _Address1, _storeName1, _ZipCode1, _Country2, _State2, _City2, _Address2, _storeName2, _ZipCode2, _Country3, _State3, _City3, _Address3, _storeName3, _ZipCode3, _Country4, _State4, _City4, _storeName4, _Address4, _ZipCode4, _Country5, _State5, _City5, _storeName5, _Address5, _ZipCode5
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarInfoForm1` (IN `_companyName` VARCHAR(255) CHARSET utf8, IN `_brandName` VARCHAR(255) CHARSET utf8, IN `_email` VARCHAR(255) CHARSET utf8, IN `_phone` VARCHAR(30) CHARSET utf8, IN `_website` VARCHAR(100) CHARSET utf8, IN `_address` VARCHAR(255) CHARSET utf8, IN `_city` VARCHAR(80) CHARSET utf8, IN `_state` VARCHAR(80) CHARSET utf8, IN `_country` VARCHAR(80) CHARSET utf8, IN `_zipcode` VARCHAR(30) CHARSET utf8, IN `_facebook` VARCHAR(100) CHARSET utf8, IN `_instagram` VARCHAR(100) CHARSET utf8, IN `_twitter` VARCHAR(100) CHARSET utf8, IN `_userName` INT)  NO SQL
INSERT INTO customers (idCustomer, companyName, brandName, email, phone, website, address, city, state, country, zipcode, facebook, instagram, twitter, userName)
VALUES
(
	null, 
    _companyName,
    _brandName,
    _email,
    _phone,
    _website,
    _address,
    _city,
    _state,
    _country,
    _zipcode,
    _facebook,
    _instagram,
    _twitter, 
    _userName
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarInfoForm2` (IN `_taxID` VARCHAR(20) CHARSET utf8, IN `_typeCompany` VARCHAR(30) CHARSET utf8, IN `_owner` VARCHAR(100) CHARSET utf8, IN `_idNumber` VARCHAR(30) CHARSET utf8, IN `_phone` VARCHAR(30) CHARSET utf8, IN `_billingAddress` VARCHAR(100) CHARSET utf8, IN `_billingCity` VARCHAR(50) CHARSET utf8, IN `_billingState` VARCHAR(50) CHARSET utf8, IN `_billingCountry` VARCHAR(50) CHARSET utf8, IN `_billingZipCode` VARCHAR(20) CHARSET utf8, IN `_businessLocations` VARCHAR(10) CHARSET utf8, IN `_username` INT)  NO SQL
INSERT INTO adresses (idAddresses, taxId, typeCompany, owner, idNumber, phone, billingAddress, billingCity, billingState, billingCountry, billingZipCode, quantityLocations, username
)
VALUES
(
	null,
    _taxID,
    _typeCompany,
    _owner,
    _idNumber,
    _phone,
    _billingAddress,
    _billingCity,
    _billingState,
    _billingCountry,
    _billingZipCode,
    _businessLocations,
    _username
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarInfoForm3` (IN `_currency` VARCHAR(50) CHARSET utf8, IN `_bankName` VARCHAR(80) CHARSET utf8, IN `_branch` VARCHAR(50) CHARSET utf8, IN `_accountNumber` VARCHAR(20) CHARSET utf8, IN `_paymentType` VARCHAR(20) CHARSET utf8, IN `_creditTerms` VARCHAR(10) CHARSET utf8, IN `_reference1Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference1` VARCHAR(20) CHARSET utf8, IN `_emailReference1` VARCHAR(50) CHARSET utf8, IN `_reference2Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference2` VARCHAR(20) CHARSET utf8, IN `_emailReference2` VARCHAR(50) CHARSET utf8, IN `_reference3Name` VARCHAR(100) CHARSET utf8, IN `_phoneReference3` VARCHAR(20) CHARSET utf8, IN `_emailReference3` VARCHAR(50) CHARSET utf8, IN `_buyerName` VARCHAR(100) CHARSET utf8, IN `_buyerPhone` VARCHAR(20) CHARSET utf8, IN `_buyerEmail` VARCHAR(50) CHARSET utf8, IN `_usernameBuyers` INT)  NO SQL
INSERT INTO buyers (idBuyers, currency, bankName, branch, accountNumber, paymentType, creditTerms, reference1Name, phoneReference1, emailReference1, reference2Name, phoneReference2, emailReference2, reference3Name, phoneReference3, emailReference3, buyerName, buyerPhone, buyerEmail, username)
VALUES
(
	null,
    _currency,
    _bankName,
    _branch,
    _accountNumber,
    _paymentType,
	_creditTerms,
    _reference1Name,
    _phoneReference1,
    _emailReference1,
    _reference2Name,
    _phoneReference2,
    _emailReference2,
    _reference3Name,
    _phoneReference3,
    _emailReference3,
    _buyerName,
    _buyerPhone,
    _buyerEmail,
    _usernameBuyers
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarInfoForm4` (IN `_typeBusiness` VARCHAR(50) CHARSET utf8, IN `_linesBusiness` VARCHAR(80) CHARSET utf8, IN `_anualSalesFigures` VARCHAR(30) CHARSET utf8, IN `_marketPotentialBrand` VARCHAR(50) CHARSET utf8, IN `_businessLocation` VARCHAR(10) CHARSET utf8, IN `_webSite` VARCHAR(74) CHARSET utf8, IN `_certificateOfExistence` VARCHAR(100) CHARSET utf8, IN `_taxCertificate` VARCHAR(100) CHARSET utf8, IN `_checkSpecimen` VARCHAR(100) CHARSET utf8, IN `_legalID` VARCHAR(100) CHARSET utf8, IN `_usernameBusiness` INT)  NO SQL
INSERT INTO business 
(
    idBusiness, 
    typeBusiness, 
    linesBusiness, 
    anualSalesFigures, 
    marketPotentialBrand, 
    businessLocation, 
    webSite, 
    certificateOfExistence, 
    taxCertificate, 
    checkSpecimen, 
    legalID, 
    usernameBusiness
)
VALUES
(
	null,
    _typeBusiness,
    _linesBusiness,
    _anualSalesFigures,
    _marketPotentialBrand,
    _businessLocation,
    _webSite,
    _certificateOfExistence,
    _taxCertificate,
    _checkSpecimen,
    _legalID,
    _usernameBusiness
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarShippingAddress` (IN `_idAddresses` INT(11), IN `_Country1` VARCHAR(50) CHARSET utf8, IN `_State1` VARCHAR(50) CHARSET utf8, IN `_City1` VARCHAR(50) CHARSET utf8, IN `_Address1` VARCHAR(100) CHARSET utf8, IN `_storeName1` VARCHAR(50) CHARSET utf8, IN `_ZipCode1` VARCHAR(10) CHARSET utf8, IN `_Country2` VARCHAR(50) CHARSET utf8, IN `_State2` VARCHAR(50) CHARSET utf8, IN `_City2` VARCHAR(50) CHARSET utf8, IN `_Address2` VARCHAR(100) CHARSET utf8, IN `_storeName2` VARCHAR(50) CHARSET utf8, IN `_ZipCode2` VARCHAR(10) CHARSET utf8, IN `_Country3` VARCHAR(50) CHARSET utf8, IN `_State3` VARCHAR(50) CHARSET utf8, IN `_City3` VARCHAR(50) CHARSET utf8, IN `_Address3` VARCHAR(100) CHARSET utf8, IN `_storeName3` VARCHAR(50) CHARSET utf8, IN `_ZipCode3` VARCHAR(10) CHARSET utf8, IN `_Country4` VARCHAR(50) CHARSET utf8, IN `_State4` VARCHAR(50) CHARSET utf8, IN `_City4` VARCHAR(50) CHARSET utf8, IN `_storeName4` VARCHAR(50) CHARSET utf8, IN `_Address4` VARCHAR(100) CHARSET utf8, IN `_ZipCode4` VARCHAR(10) CHARSET utf8, IN `_Contry5` VARCHAR(50) CHARSET utf8, IN `_State5` VARCHAR(50) CHARSET utf8, IN `_City5` VARCHAR(50) CHARSET utf8, IN `_storeName5` VARCHAR(50) CHARSET utf8, IN `_Address5` VARCHAR(100) CHARSET utf8, IN `_ZipCode5` VARCHAR(10) CHARSET utf8)  BEGIN
	INSERT INTO shippingaddress (idAddresses, Country1, State1, City1, Address1, storeName1, ZipCode1, Country2, State2, City2, Address2, storeName2, ZipCode2, Country3, State3, City3, Address3, storeName3, ZipCode3, Country4, State4, City4, storeName4, Address4, ZipCode4, Contry5, State5, City5, storeName5, Address5, ZipCode5) VALUES (_idAddresses, _Country1, _State1, _City1, _Address1, _storeName1, _ZipCode1, _Country2, _State2, _City2, _Address2, _storeName2, _ZipCode2, _Country3, _State3, _City3, _Address3, _storeName3, _ZipCode3, _Country4, _State4, _City4, _storeName4, _Address4, _ZipCode4, _Contry5, _State5, _City5, _storeName5, _Address5, _ZipCode5);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_guardarUsuario` (IN `_email` VARCHAR(255) CHARSET utf8, IN `_password` VARCHAR(255) CHARSET utf8)  NO SQL
INSERT INTO users (idUser, email, password)
VALUES
(
	null,
    _email,
    _password
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_listarPaises` ()  NO SQL
SELECT
idCountry,
codeCountry,
nameSpanish,
nameEnglish,
state
FROM country
ORDER BY nameEnglish ASC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adresses`
--

CREATE TABLE `adresses` (
  `idAddresses` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `taxId` varchar(20) NOT NULL,
  `typeCompany` varchar(50) DEFAULT NULL,
  `owner` varchar(100) NOT NULL,
  `idNumber` varchar(20) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `billingAddress` varchar(100) NOT NULL,
  `billingCity` varchar(50) NOT NULL,
  `billingState` varchar(50) NOT NULL,
  `billingCountry` varchar(50) NOT NULL,
  `billingZipCode` varchar(20) NOT NULL,
  `quantityLocations` varchar(10) DEFAULT NULL,
  `dateUpdated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business`
--

CREATE TABLE `business` (
  `idBusiness` int(11) NOT NULL,
  `usernameBusiness` int(11) NOT NULL,
  `typeBusiness` varchar(50) NOT NULL,
  `linesBusiness` varchar(80) NOT NULL,
  `anualSalesFigures` varchar(30) NOT NULL,
  `marketPotentialBrand` varchar(50) NOT NULL,
  `businessLocation` varchar(10) DEFAULT NULL,
  `webSite` varchar(74) DEFAULT NULL,
  `certificateOfExistence` varchar(100) NOT NULL,
  `taxCertificate` varchar(100) NOT NULL,
  `checkSpecimen` varchar(100) NOT NULL,
  `legalID` varchar(100) NOT NULL,
  `dateUpdated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `businesslocations`
--

CREATE TABLE `businesslocations` (
  `idBusinessLocations` int(11) NOT NULL,
  `idBusiness` int(11) DEFAULT NULL,
  `Country1` varchar(50) DEFAULT NULL,
  `State1` varchar(50) DEFAULT NULL,
  `City1` varchar(50) DEFAULT NULL,
  `Address1` varchar(100) DEFAULT NULL,
  `storeName1` varchar(30) DEFAULT NULL,
  `zipCode1` varchar(10) DEFAULT NULL,
  `Country2` varchar(50) DEFAULT NULL,
  `state2` varchar(50) DEFAULT NULL,
  `city2` varchar(50) DEFAULT NULL,
  `Address2` varchar(100) DEFAULT NULL,
  `storeName2` varchar(30) DEFAULT NULL,
  `zipCode2` varchar(10) DEFAULT NULL,
  `Country3` varchar(50) DEFAULT NULL,
  `State3` varchar(50) DEFAULT NULL,
  `City3` varchar(50) DEFAULT NULL,
  `Address3` varchar(100) DEFAULT NULL,
  `storeName3` varchar(30) DEFAULT NULL,
  `zipCode3` varchar(10) DEFAULT NULL,
  `Country4` varchar(50) DEFAULT NULL,
  `State4` varchar(50) DEFAULT NULL,
  `City4` varchar(50) DEFAULT NULL,
  `Address4` varchar(100) DEFAULT NULL,
  `storeName4` varchar(30) DEFAULT NULL,
  `zipCode4` varchar(10) DEFAULT NULL,
  `Country5` varchar(50) DEFAULT NULL,
  `State5` varchar(50) DEFAULT NULL,
  `City5` varchar(50) DEFAULT NULL,
  `Address5` varchar(100) DEFAULT NULL,
  `storeName5` varchar(30) DEFAULT NULL,
  `zipCode5` varchar(10) DEFAULT NULL,
  `dateUpdated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buyers`
--

CREATE TABLE `buyers` (
  `idBuyers` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `bankName` varchar(80) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `accountNumber` varchar(20) NOT NULL,
  `paymentType` varchar(20) NOT NULL,
  `creditTerms` varchar(20) NOT NULL,
  `reference1Name` varchar(100) NOT NULL,
  `phoneReference1` varchar(20) NOT NULL,
  `emailReference1` varchar(50) NOT NULL,
  `reference2Name` varchar(100) NOT NULL,
  `phoneReference2` varchar(20) NOT NULL,
  `emailReference2` varchar(50) NOT NULL,
  `reference3Name` varchar(100) DEFAULT NULL,
  `phoneReference3` varchar(20) DEFAULT NULL,
  `emailReference3` varchar(50) DEFAULT NULL,
  `buyerName` varchar(100) NOT NULL,
  `buyerPhone` varchar(20) NOT NULL,
  `buyerEmail` varchar(50) NOT NULL,
  `dateUpdated` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `idCountry` int(11) NOT NULL,
  `codeCountry` varchar(50) NOT NULL,
  `nameSpanish` varchar(80) NOT NULL,
  `nameEnglish` varchar(50) NOT NULL,
  `state` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`idCountry`, `codeCountry`, `nameSpanish`, `nameEnglish`, `state`) VALUES
(1, 'AF', 'Afganistan', 'Afghanistan', 'Asia'),
(2, 'AX', 'Aland', 'Aland', 'Europe'),
(3, 'AL', 'Albania', 'Albania', 'Europe'),
(4, 'DE', 'Alemania', 'Germany', 'Europe'),
(5, 'AD', 'Andorra', 'Andorra', 'Europe'),
(6, 'AO', 'Angola', 'Angola', 'Africa'),
(7, 'AI', 'Anguila', 'Anguilla', 'America'),
(8, 'AG', 'Antigua y Barbuda', 'Antigua and Barbuda', 'America'),
(9, 'AN', 'Antillas Nederlandesas', 'Netherlands Antilles', 'America'),
(10, 'SA', 'Arabia Saudita', 'Saudi Arabia', 'Asia'),
(11, 'DZ', 'Argelia', 'Algeria', 'Africa'),
(12, 'AR', 'Argentina', 'Argentina', 'America'),
(13, 'AM', 'Armenia', 'Armenia', 'Europe'),
(14, 'AW', 'Aruba', 'Aruba', 'America'),
(15, 'AU', 'Australia', 'Australia', 'Oceania'),
(16, 'AT', 'Austria', 'Austria', 'Europe'),
(17, 'AZ', 'Azerbaiyan', 'Azerbaijan', 'Europe'),
(18, 'BS', 'Bahamas', 'Bahamas', 'America'),
(19, 'BH', 'Bahrein', 'Bahrain', 'Asia'),
(20, 'BD', 'Bangladesh', 'Bangladesh', 'Asia'),
(21, 'BB', 'Barbados', 'Barbados', 'America'),
(22, 'BE', 'Belgica', 'Belgium', 'Europe'),
(23, 'BZ', 'Belice', 'Belize', 'America'),
(24, 'BJ', 'Benin', 'Benin', 'Africa'),
(25, 'BM', 'Bermudas', 'Bermuda', 'America'),
(26, 'BY', 'Bielorrusia', 'Belarus', 'Europe'),
(27, 'BO', 'Bolivia', 'Bolivia', 'America'),
(28, 'BQ', 'Bonaire, San Estaquio y Saba', 'Bonaire, Saint Eustatius and Saba', 'America'),
(29, 'BA', 'Bosnia-Herzegovina', 'Bosnia-Herzegovina', 'Europe'),
(30, 'BW', 'Botsuana', 'Botswana', 'Africa'),
(31, 'BR', 'Brasil', 'Brazil', 'America'),
(32, 'BN', 'Brunei Darussalam', 'Brunei Darussalam', 'Asia'),
(33, 'BG', 'Bulgaria', 'Bulgaria', 'Europe'),
(34, 'BF', 'Burkina Faso', 'Burkina Faso', 'Africa'),
(35, 'BI', 'Burundi', 'Burundi', 'Africa'),
(36, 'BT', 'Butan', 'Bhutan', 'Asia'),
(37, 'CV', 'Cabo Verde', 'Cape Verde', 'Africa'),
(38, 'KH', 'Camboya', 'Cambodia', 'Asia'),
(39, 'CM', 'Camerun', 'Cameroon', 'Africa'),
(40, 'CA', 'Canada', 'Canada', 'America'),
(41, 'CAT', 'Cataluna', 'Catalonia', 'Europe'),
(42, 'TD', 'Chad', 'Chad', 'Africa'),
(43, 'CL', 'Chile', 'Chile', 'America'),
(44, 'CN', 'China (Republica Popular)', 'China (Peoples Republic of)', 'Asia'),
(45, 'CY', 'Chipre', 'Cyprus', 'Asia'),
(46, 'VA', 'Ciudad del Vaticano', 'Vatican City State', 'Europe'),
(47, 'CO', 'Colombia', 'Colombia', 'America'),
(48, 'KM', 'Comoras', 'Comoros', 'Africa'),
(49, 'CG', 'Congo (Republica del)', 'Congo (Republic of the)', 'Africa'),
(50, 'KP', 'Corea (del Norte)', 'Korea (North)', 'Asia'),
(51, 'KO', 'Corea (del Sur)', 'Korea (South)', 'Asia'),
(52, 'CI', 'Costa de Marfil', 'Ivory Coast, C?te d''Ivoire', 'Africa'),
(53, 'CR', 'Costa Rica', 'Costa Rica', 'America'),
(54, 'HR', 'Croacia', 'Croatia', 'Europe'),
(55, 'CU', 'Cuba', 'Cuba', 'America'),
(56, 'CW', 'Curasao', 'Cura??o', 'America'),
(57, 'DK', 'Dinamarca', 'Denmark', 'Europe'),
(58, 'DM', 'Dominica', 'Dominica', 'America'),
(59, 'EC', 'Ecuador', 'Ecuador', 'America'),
(60, 'EG', 'Egipto', 'Egypt', 'Africa'),
(61, 'SV', 'El Salvador', 'El Salvador', 'America'),
(62, 'AE', 'Emiratos arabes Unidos', 'United Arab Emirates', 'Asia'),
(63, 'ER', 'Eritrea', 'Eritrea', 'Africa'),
(64, 'SK', 'Eslovaquia', 'Slovakia', 'Europe'),
(65, 'SI', 'Eslovenia', 'Slovenia', 'Europe'),
(66, 'ES', 'Espana', 'Spain', 'Europe'),
(67, 'US', 'Estados Unidos (EEUU)', 'United States of America (USA)', 'America'),
(68, 'EE', 'Estonia', 'Estonia', 'Europe'),
(69, 'ET', 'Etiopia', 'Ethiopia', 'Africa'),
(70, 'PH', 'Filipinas', 'Philippines', 'Asia'),
(71, 'FI', 'Finlandia', 'Finland', 'Europe'),
(72, 'FJ', 'Fiyi', 'Fiji', 'Oceania'),
(73, 'FR', 'Francia', 'France', 'Europe'),
(74, 'GA', 'Gabon', 'Gabon', 'Africa'),
(75, 'GM', 'Gambia', 'Gambia (The)', 'Africa'),
(76, 'GE', 'Georgia', 'Georgia', 'Europe'),
(77, 'GH', 'Ghana', 'Ghana', 'Africa'),
(78, 'GI', 'Gibraltar', 'Gibraltar', 'Europe'),
(79, 'GD', 'Granada', 'Grenada', 'America'),
(80, 'GR', 'Grecia', 'Greece', 'Europe'),
(81, 'GL', 'Groenlandia', 'Greenland', 'America'),
(82, 'GP', 'Guadalupe', 'Guadeloupe', 'America'),
(83, 'GU', 'Guam', 'Guam', 'oceania'),
(84, 'GT', 'Guatemala', 'Guatemala', 'America'),
(85, 'GF', 'Guayana Francesa', 'French Guiana', 'America'),
(86, 'GG', 'Guernesey', 'Guernsey', 'Europe'),
(87, 'GN', 'Guinea', 'Guinea', 'Africa'),
(88, 'GQ', 'Guinea Ecuatorial', 'Equatorial Guinea', 'Africa'),
(89, 'GW', 'Guinea-Bissau', 'Guinea-Bissau', 'Africa'),
(90, 'GY', 'Guyana', 'Guyana', 'America'),
(91, 'HT', 'Haiti', 'Haiti', 'America'),
(92, 'NL', 'Holanda (Paises Bajos)', 'Netherlands (Holland)', 'Europe'),
(93, 'HN', 'Honduras', 'Honduras', 'America'),
(94, 'HK', 'Hong Kong', 'Hong Kong', 'Asia'),
(95, 'HU', 'Hungria', 'Hungary', 'Europe'),
(96, 'IN', 'India', 'India', 'Asia'),
(97, 'ID', 'Indonesia', 'Indonesia', 'Asia'),
(98, 'IR', 'Iran', 'Iran', 'Asia'),
(99, 'IQ', 'Iraq', 'Iraq', 'Asia'),
(100, 'UK', 'Irlanda del Norte', 'Northern Ireland', 'Europe'),
(101, 'IE', 'Irlanda', 'Ireland', 'Europe'),
(102, 'IS', 'Islandia', 'Iceland', 'Europe'),
(103, 'KY', 'Islas Caiman', 'Cayman Islands', 'America'),
(104, 'CC', 'Islas Cocos', 'Cocos/Keeling Islands', 'Asia'),
(105, 'CK', 'Islas Cook', 'Cook Islands', 'Asia'),
(106, 'FO', 'Islas Feroe', 'Faroe Islands', 'Europe'),
(107, 'FK', 'Islas Malvinas', 'Falkland Islands', 'America'),
(108, 'MP', 'Islas Marianas del Norte', 'Northern Mariana Islands', 'Oceania'),
(109, 'MH', 'Islas Marshall', 'Marshall Islands', 'Oceania'),
(110, 'PN', 'Islas Pitcairn', 'Pitcairn Islands', 'Oceania'),
(111, 'SB', 'Islas Salomon', 'Solomon Islands', 'Oceania'),
(112, 'SJ', 'Islas Svalbard y Jan Mayen', 'Svalbard and Jan Mayen Islands', 'Europe'),
(113, 'TC', 'Islas Turcas y Caicos', 'Turks and Caicos Islands', 'America'),
(114, 'VG', 'Islas Virgenes Britanicas', 'British Virgin Islands', 'America'),
(115, 'VI', 'Islas Virgenes de los Estados Unidos', 'US Virgin Islands', 'America'),
(116, 'IL', 'Israel', 'Israel', 'Asia'),
(117, 'IT', 'Italia', 'Italy', 'Europe'),
(118, 'JM', 'Jamaica', 'Jamaica', 'America'),
(119, 'JP', 'Japon', 'Japan', 'Asia'),
(120, 'JO', 'Jordania', 'Jordan', 'Asia'),
(121, 'KZ', 'Kazajistan', 'Kazakhstan', 'Asia'),
(122, 'KE', 'Kenia', 'Kenya', 'Africa'),
(123, 'KG', 'Kirguistan', 'Kyrgyzstan', 'Asia'),
(124, 'KI', 'Kiribati', 'Kiribati', 'Oceania'),
(125, 'KV', 'Kosovo', 'Kosovo', 'Europe'),
(126, 'KW', 'Kuwait', 'Kuwait', 'Asia'),
(127, 'LA', 'Laos', 'Laos', 'Asia'),
(128, 'LS', 'Lesoto', 'Lesotho', 'Africa'),
(129, 'LV', 'Letonia', 'Latvia', 'Europe'),
(130, 'LB', 'Libano', 'Lebanon', 'Asia'),
(131, 'LR', 'Liberia', 'Liberia', 'Africa'),
(132, 'LY', 'Libia', 'Libya', 'Africa'),
(133, 'LI', 'Liechtenstein', 'Liechtenstein', 'Europe'),
(134, 'LT', 'Lituania', 'Lithuania', 'Europe'),
(135, 'LU', 'Luxemburgo', 'Luxembourg', 'Europe'),
(136, 'MO', 'Macao', 'Macau', 'Asia'),
(137, 'MK', 'Macedonia (Republica de)', 'Macedonia (Republic of)', 'Europe'),
(138, 'MG', 'Madagascar', 'Madagascar', 'Africa'),
(139, 'MY', 'Malasia', 'Malaysia', 'Asia'),
(140, 'MW', 'Malaui', 'Malawi', 'Africa'),
(141, 'MV', 'Maldivas', 'Maldives', 'Asia'),
(142, 'ML', 'Mali', 'Mali', 'Africa'),
(143, 'MT', 'Malta', 'Malta', 'Europe'),
(144, 'MA', 'Marruecos', 'Morocco', 'Africa'),
(145, 'MQ', 'Martinica', 'Martinique', 'America'),
(146, 'MU', 'Mauricio', 'Mauritius', 'Africa'),
(147, 'MR', 'Mauritania', 'Mauritania', 'Africa'),
(148, 'YT', 'Mayotte', 'Mayotte', 'Europe'),
(149, 'MX', 'Mexico', 'Mexico', 'America'),
(150, 'FM', 'Micronesia (Estados Federados de)', 'Micronesia (Federated States of)', 'Oceania'),
(151, 'MD', 'Moldavia', 'Moldova', 'Europe'),
(152, 'MC', 'Monaco', 'Monaco', 'Europe'),
(153, 'MN', 'Mongolia', 'Mongolia', 'Asia'),
(154, 'ME', 'Montenegro', 'Montenegro', 'Europe'),
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
(165, 'NO', 'Noruega', 'Norway', 'Europe'),
(166, 'NC', 'Nueva Caledonia', 'New Caledonia', 'Oceania'),
(167, 'NZ', 'Nueva Zelanda', 'New Zealand', 'Oceania'),
(168, 'OM', 'Oman', 'Oman', 'Asia'),
(169, 'NL', 'Paises Bajos (Holanda)', 'Netherlands (Holland)', 'Europe'),
(170, 'PK', 'Pakistan', 'Pakistan', 'Asia'),
(171, 'PW', 'Palaos', 'Palau', 'Oceania'),
(172, 'PS', 'Palestina', 'Palestinian Territories', 'Asia'),
(173, 'PA', 'Panama', 'Panama', 'America'),
(174, 'PG', 'Papua Nueva Guinea', 'Papua New Guinea', 'Oceania'),
(175, 'PY', 'Paraguay', 'Paraguay', 'America'),
(176, 'PE', 'Peru', 'Peru', 'America'),
(177, 'PF', 'Polinesia Francesa', 'French Polynesia', 'Oceania'),
(178, 'PL', 'Polonia', 'Poland', 'Europe'),
(179, 'PT', 'Portugal', 'Portugal', 'Europe'),
(180, 'PR', 'Puerto Rico', 'Puerto Rico', 'America'),
(181, 'QA', 'Qatar', 'Qatar', 'Asia'),
(182, 'UK', 'Reino Unido (RU)', 'United Kingdom (UK)', 'Europe'),
(183, 'CF', 'Republica Centroafricana', 'Central African Republic', 'Africa'),
(184, 'CZ', 'Republica Checa', 'Czech Republic', 'Europe'),
(185, 'CD', 'Republica Democratica del Congo', 'Democratic Republic of the Congo', 'Africa'),
(186, 'DO', 'Republica Dominicana', 'Dominican Republic', 'America'),
(187, 'RE', 'Reunion', 'R?union', 'Africa'),
(188, 'RW', 'Ruanda', 'Rwanda', 'Africa'),
(189, 'RO', 'Rumania', 'Romania', 'Europe'),
(190, 'RU', 'Rusia', 'Russia', 'Europe'),
(191, 'EH', 'Sahara Occidental', 'Western Sahara', 'Africa'),
(192, 'AS', 'Samoa Americana', 'American Samoa', 'Oceania'),
(193, 'WS', 'Samoa del Oeste', 'Western Samoa', 'Oceania'),
(194, 'KN', 'San Cristobal y Nieves', 'Saint Kitts and Nevis', 'America'),
(195, 'SM', 'San Marino', 'San Marino', 'Europe'),
(196, 'SX', 'San Martin (Sint Maarten)', 'Saint Maarten', 'America'),
(197, 'PM', 'San Pedro y Miquelon', 'Saint-Pierre and Miquelon', 'America'),
(198, 'VC', 'San Vicente y las Granadinas', 'Saint Vincent and the Grenadines', 'America'),
(199, 'SH', 'Santa Helena', 'Saint Helena', 'Africa'),
(200, 'LC', 'Santa Lucia', 'Saint Lucia', 'America'),
(201, 'ST', 'Santo Tome y Principe', 'S?o Tom? and Pr?ncipe', 'Africa'),
(202, 'SN', 'Senegal', 'Senegal', 'Africa'),
(203, 'RS', 'Serbia', 'Serbia', 'Europe'),
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
(214, 'SE', 'Suecia', 'Sweden', 'Europe'),
(215, 'CH', 'Suiza', 'Switzerland', 'Europe'),
(216, 'SR', 'Surinam', 'Suriname', 'America'),
(217, 'TH', 'Tailandia', 'Thailand', 'Asia'),
(218, 'TW', 'Taiwan', 'Taiwan', 'Asia'),
(219, 'TZ', 'Tanzania', 'Tanzania', 'Africa'),
(220, 'TJ', 'Tayikistan', 'Tajikistan', 'Asia'),
(221, 'IO', 'Territorio Britanico en el Oceano indico', 'British Indian Ocean Territory', 'Asia'),
(222, 'TF', 'Territorios Australes Franceses', 'French Southern and Antarctic Lands', 'Europe'),
(223, 'TL', 'Timor Oriental', 'East Timor', 'Asia'),
(224, 'TG', 'Togo', 'Togo', 'Africa'),
(225, 'TK', 'Tokelau', 'Tokelau', 'Oceania'),
(226, 'TO', 'Tonga', 'Tonga', 'Oceania'),
(227, 'TT', 'Trinidad y Tobago', 'Trinidad and Tobago', 'America'),
(228, 'TN', 'Tunez', 'Tunisia', 'Africa'),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'Asia'),
(230, 'TR', 'Turquia', 'Turkey', 'Asia'),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'Oceania'),
(232, 'UA', 'Ucrania', 'Ukraine', 'Europe'),
(233, 'UG', 'Uganda', 'Uganda', 'Africa'),
(234, 'EU', 'Union Europea', 'European Union', 'Europe'),
(235, 'SU', 'Union Sovietica (URSS)', 'Soviet Union (USSR)', 'Europe'),
(236, 'UY', 'Uruguay', 'Uruguay', 'America'),
(237, 'UZ', 'Uzbekistan', 'Uzbekistan', 'Asia'),
(238, 'VU', 'Vanuatu', 'Vanuatu', 'Oceania'),
(239, 'VE', 'Venezuela', 'Venezuela', 'America'),
(240, 'VN', 'Vietnam', 'Vietnam', 'Asia'),
(241, 'WF', 'Wallis y Futuna', 'Wallis and Futuna', 'Oceania'),
(242, 'YE', 'Yemen', 'Yemen', 'Asia'),
(243, 'DJ', 'Yibuti', 'Djibouti', 'Africa'),
(244, 'YU', 'Yugoslavia', 'Yugoslavia', 'Europe'),
(245, 'ZM', 'Zambia', 'Zambia', 'Africa'),
(246, 'ZW', 'Zimbabue', 'Zimbabwe', 'Africa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `idCustomer` int(11) NOT NULL,
  `userName` int(11) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `website` varchar(80) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `dateUpdated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippingaddress`
--

CREATE TABLE `shippingaddress` (
  `idShippingAddress` int(11) NOT NULL,
  `idAddresses` int(11) NOT NULL,
  `Country1` varchar(50) NOT NULL,
  `State1` varchar(50) NOT NULL,
  `City1` varchar(50) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `storeName1` varchar(50) NOT NULL,
  `ZipCode1` varchar(10) NOT NULL,
  `Country2` varchar(50) NOT NULL,
  `State2` varchar(50) NOT NULL,
  `City2` varchar(50) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `storeName2` varchar(50) NOT NULL,
  `ZipCode2` varchar(10) NOT NULL,
  `Country3` varchar(50) NOT NULL,
  `State3` varchar(50) NOT NULL,
  `City3` varchar(50) NOT NULL,
  `Address3` varchar(100) NOT NULL,
  `storeName3` varchar(50) NOT NULL,
  `ZipCode3` varchar(10) NOT NULL,
  `Country4` varchar(50) NOT NULL,
  `State4` varchar(50) NOT NULL,
  `City4` varchar(50) NOT NULL,
  `storeName4` varchar(50) NOT NULL,
  `Address4` varchar(100) NOT NULL,
  `ZipCode4` varchar(10) NOT NULL,
  `Contry5` varchar(50) NOT NULL,
  `State5` varchar(50) NOT NULL,
  `City5` varchar(50) NOT NULL,
  `storeName5` varchar(50) NOT NULL,
  `Address5` varchar(100) NOT NULL,
  `ZipCode5` varchar(10) NOT NULL,
  `dateUpdated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`idAddresses`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`idBusiness`),
  ADD KEY `usernameBusiness` (`usernameBusiness`);

--
-- Indices de la tabla `businesslocations`
--
ALTER TABLE `businesslocations`
  ADD PRIMARY KEY (`idBusinessLocations`),
  ADD KEY `fk_businessLocations_id_business_idBusiness` (`idBusiness`);

--
-- Indices de la tabla `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`idBuyers`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idCountry`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idCustomer`),
  ADD KEY `userName` (`userName`);

--
-- Indices de la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD PRIMARY KEY (`idShippingAddress`),
  ADD KEY `fk_shippingAddress_idAddress_address_idAdresses` (`idAddresses`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adresses`
--
ALTER TABLE `adresses`
  MODIFY `idAddresses` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `business`
--
ALTER TABLE `business`
  MODIFY `idBusiness` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `businesslocations`
--
ALTER TABLE `businesslocations`
  MODIFY `idBusinessLocations` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `buyers`
--
ALTER TABLE `buyers`
  MODIFY `idBuyers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `idCountry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `idShippingAddress` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `fk_addresses_username_IdUser_Users` FOREIGN KEY (`username`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `fk_business_usernameBusiness_idUser_Users` FOREIGN KEY (`usernameBusiness`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `businesslocations`
--
ALTER TABLE `businesslocations`
  ADD CONSTRAINT `businesslocations_ibfk_1` FOREIGN KEY (`idBusiness`) REFERENCES `business` (`idBusiness`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `fk_buyers_Username_idUser_Users` FOREIGN KEY (`username`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_idUsername_Users` FOREIGN KEY (`userName`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD CONSTRAINT `shippingaddress_ibfk_1` FOREIGN KEY (`idAddresses`) REFERENCES `adresses` (`idAddresses`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
