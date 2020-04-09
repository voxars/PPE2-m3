#
# MySQL MRBS Intranet M2L : création base et login associé
#
# Notes:
# (1) Le nom de base, le login et mot de passe doivent être identiques à ceux 
#     précisés dans le fichier config.inc.php :
#           $db_database = "mrbs";
#           $db_login = "mrbs";
#           $db_password = "mrbs-intra";

# création de la base de données
DROP DATABASE IF EXISTS `mrbs`;
CREATE DATABASE IF NOT EXISTS `mrbs`
  CHARACTER SET utf8 COLLATE utf8_general_ci;

# création d'un login ayant tous les droits sur la base mrbs et
# affectation à ce login de tous les droits sur la base de données

CREATE USER mrbs@'localhost' IDENTIFIED BY 'mrbs-intra';
GRANT ALL ON mrbs.* TO mrbs@'localhost' ;
