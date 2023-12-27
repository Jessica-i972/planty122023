<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty_bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd|;>MTwOk{yw&>eMx0o.aw6B^.<Tb3T,WM]{W<o7{F#>MSXTfcKROnaE@zk.h[8M' );
define( 'SECURE_AUTH_KEY',  '4JAb!-I>D10xQF5j.}0I4zszpUQ>Y=5]rheOlqxnj^sq|[K8nlW0=Wr;af$cdRqI' );
define( 'LOGGED_IN_KEY',    'ko|q+yB4Re_SoGC~h][2kVjaiJ-)XU1w/u(T0Jv1Ga]LKfhMRV ctquQf+ sBnA:' );
define( 'NONCE_KEY',        '9RpE.$1@7!|&PfO(U2/$Hs2Iex~UDroJ7,Suos0&y/x_~7%0$9.0&@(#`1P)Nxog' );
define( 'AUTH_SALT',        'n}au$PMl7<|(8?>},&~!2zhr_~Ha8OzR!v/TQ8`p,;uRf{a2/4[$YQx/#o2CwXAo' );
define( 'SECURE_AUTH_SALT', 'UC7D74Z.bkKC.2x}+cS1yGyOU+Ay|{g/=}=mm|U0P<*?x@qxvVc/.YMSSh.0m#$G' );
define( 'LOGGED_IN_SALT',   'fYC,ye1x;&j(M@/FiONr)PCuAQQ/5!bA}0~^-U)K(HiI~9YQog:=d@Vq<>3PRYu0' );
define( 'NONCE_SALT',       's,>QV$=Ji[7:*le%Y(S[s],fX>/2H+F~J}?,{)p.BM>m+*=KwZ7(YowF?jv)Con!' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'pl_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
