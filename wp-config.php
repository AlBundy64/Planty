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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1]~rF|FHIJEv:[ETkaySRsQ>QZ%FCZ`5{iLqEYDHBpV!3~Wxe<!R{ptb}2>fx~Gg' );
define( 'SECURE_AUTH_KEY',  'aVoH96yST;I;--=L^axDn%|%r)xMo}F(s &3Y>:;WHGk%%{8Hr]$8I7{/s].g&!|' );
define( 'LOGGED_IN_KEY',    '0~3]?RP]g,m:fs0lJCzvlSxwhq?N0AtpfU,Z9ab=7[Um1PB|(a6OmJ*,?v{Th&t>' );
define( 'NONCE_KEY',        ')2@z>ZkVed&0s?kP]Ck-*Qw:,;B^7i1C2FXAg`}2e;v$8 M)$5k7||;$?t_0{;1h' );
define( 'AUTH_SALT',        'fHwIC@u~#Nc8=J5v-jDsbH@W~(S}=%7%9K4(YWeI9>1Bkkb$!yd*S,q/5D.3.E6^' );
define( 'SECURE_AUTH_SALT', 'a]S2qmch]KDK$b(t$k]O%J<kXEM-n$A2%oe8^e4Ykq+1=HZmPZ$F5hI1d.^0#[F|' );
define( 'LOGGED_IN_SALT',   'I-~gc1YA+5CW^V2=T5.frCt]z7Y.$:tDGO)h~mYdE# ?cPb,v8we~.n@Qb@.][pC' );
define( 'NONCE_SALT',       '37L{l:g_xOx/L)S*+|d>:_-sZ^D7J<zA%8o OGh,n)~(;.iLz3e8Qg,.E:,,/}&9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
