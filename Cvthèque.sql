CREATE TABLE `company_signin` (
  `id_company` int(100) PRIMARY KEY NOT NULL,
  `company_name` varchar(255) DEFAULT null,
  `siren` bigint(100) DEFAULT null,
  `mail` varchar(255) DEFAULT null,
  `password` varchar(60) DEFAULT null,
  `phone` int(10) DEFAULT null,
  `town` varchar(255) DEFAULT null,
  `postcode` int(11) DEFAULT null,
  `country` varchar(255) DEFAULT null,
  `signin_since` timestamp NOT NULL DEFAULT (current_timestamp())
);

CREATE TABLE `user_signin` (
  `id_user` int(100) PRIMARY KEY NOT NULL,
  `first_name` varchar(255) DEFAULT null,
  `last_name` varchar(255) DEFAULT null,
  `mail` varchar(255) DEFAULT null,
  `password` varchar(60) DEFAULT null,
  `phone` int(10) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT (current_timestamp()),
  `town` varchar(255) DEFAULT null,
  `postcode` int(100) NOT NULL,
  `country` varchar(255) DEFAULT null,
  `signin_since` timestamp NOT NULL DEFAULT (current_timestamp())
);

CREATE TABLE `admin_signin` (
  `id_admin` int(10) PRIMARY KEY NOT NULL,
  `identifiant` varchar(255) DEFAULT null,
  `password` varchar(60) DEFAULT null
);
