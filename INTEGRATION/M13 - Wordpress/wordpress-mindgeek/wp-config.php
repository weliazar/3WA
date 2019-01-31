<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mindgeek');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mindgeek');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8ga_3`1hPg51}=;W1g1kvKMyCcp:=X!H_>AG~ %A9)x~aU9qArrU)Hb|FbWI~ rW');
define('SECURE_AUTH_KEY',  '@;6faC#J{n@yC+LRWxAH80RmJ=</g<Oc?oDbVA4|9jOOfJJ>mZ(_?vGU$X1]#4Jm');
define('LOGGED_IN_KEY',    'zs51D:g*6]yUaG{8L|!o;;TB}J<HckjF$kGc w<_*zi{Y |Mi Y,h>TwWsK^RJ?o');
define('NONCE_KEY',        '4&d8QgI]*!V)^KRY6[;iutIQ6wZIC)_4mjQ)qyp0|yD0@4+P,F9brO9c/e#bcBe2');
define('AUTH_SALT',        ',CfSy-9*4z`Vt-1Q&f4oN!s-|>Sl,J+PH*iN(/Q<($68X ?t=}-)Yo[mwqodyDpw');
define('SECURE_AUTH_SALT', '$.QNG9fP{V7#zKG+u`W/uy77k:b&bM`O@ *ity>s>`sx.Xtn|1SC!yRtW_#k_IP#');
define('LOGGED_IN_SALT',   '.#)9oKY`ia0|V8 + B}vJ&da8Bv:RfHe310|w$q?fy_HB+7Po0GX_d&|p7K@-Og&');
define('NONCE_SALT',       'u3Oz#2$(ou>#mk}QBksfrr@)DL6bb&7?nZY#H|S*{}U-qKH!r86m0at1CHPM(lKL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'jed6y_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
