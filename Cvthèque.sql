CREATE TABLE `User_signin` (
  `id_user` integer PRIMARY KEY,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `birthday` timestamp,
  `town` varchar(255),
  `country` varchar(255),
  `signin_since` timestamp
);

CREATE TABLE `Company_signin` (
  `id_company` integer PRIMARY KEY,
  `company_name` varchar(255),
  `siren` integer,
  `mail` varchar(255),
  `phone` int,
  `town` varchar(255),
  `postcode` int,
  `country` varchar(255),
  `signin_since` timestamp
);
