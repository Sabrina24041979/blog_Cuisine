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
define( 'DB_NAME', 'wp-dev' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{O6#OvVfJf1UXZ,FAeic]Z@y8&N8VvvkZy~;bH{eZf@>NJLi1A!3Vk@1dOT@,kDx' );
define( 'SECURE_AUTH_KEY',  'Et(LLe0%8FQGVQkj +7FM-!1#d]{V1p#W@6J.GnExl`z2?Q0i,&SK/:(hx~QZe7I' );
define( 'LOGGED_IN_KEY',    'pX4>f]N]<$XI?Z,.5|5w9>w!xH?Xp$Ah&$[rQR|&{OK<]Kz}sT4sx_HyS:%_~Cd`' );
define( 'NONCE_KEY',        '0mzK~.Qv:WcXZtl=ZqU%{ uD.? eb=s]tt]7cEF5ZM8OY;f.b&~Sip]5LI3IM*/F' );
define( 'AUTH_SALT',        'Hq#Jjl^ID&,4unW9{1dWX|S:*d%&O`B-{p~IF+XbML`%ftuhc7%@a+cG.}BY<Jb)' );
define( 'SECURE_AUTH_SALT', '* ~E&SP%P_V3EeLi5Pe@0lV/p@qeIHaxcN{4>%/zJdg= }DN>g$O~:)8nUbr?[_E' );
define( 'LOGGED_IN_SALT',   'jEclCEDPo]=8Bmh^>^${w5/$6z6u6O(M+W5*-`:oRv@b|YJ5n!nNk(dFbl]K ~4l' );
define( 'NONCE_SALT',       '+^T-d7Tff#XnBKWNdm&28F[CGm`iL/VW`gJX}:Js|0 }^e)|y[F-IL*_l,Jxv7zg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'hy8tpafm';

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
define('DISALLOW_FILE_EDIT',true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
