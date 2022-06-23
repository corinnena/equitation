<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'equitation' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-qW(6VN^@Pxpl xhLfo9HF8!`t/D1%hU&?Et!nta>u29fRszgX]h0)0%}_6mhYTo' );
define( 'SECURE_AUTH_KEY',  '6!ofLB;l3a i#O+I88N?3zauNRs8 *h3wN$3%~MDlG+[ 7W766rUfDHU~:]>7ZS^' );
define( 'LOGGED_IN_KEY',    '*nj>u5X[svX{ A9XCv.(o[u0*hH-rE;}W=vRA~z|_Kwn1;+t.iG9ylN.w?d}CVR2' );
define( 'NONCE_KEY',        '(.(pYaETIV2e>Y}. tV;]Rbv8~q*fW593Ljc(8&k#{EJ`[T SDxVjm?)H%&ytIN ' );
define( 'AUTH_SALT',        'yQ4l7s[OSmzxgzW4Hk}i[`65.^PZ2m;z2<=bBz0O8J&~c8:DB#&NV}9*``,l!{t)' );
define( 'SECURE_AUTH_SALT', 'DUEQ@mPD_.sEr2UA=]OiFkp qxGZ: auD]-2LX=]RtCpSDXU8kE<=Px(f45iU*#8' );
define( 'LOGGED_IN_SALT',   '?N6GbPIKp8!`skMN_f$]#DQR,uyH=Xy)=xWW}VtjW:.y8aKK#m}X5j.B7Q}ui$9 ' );
define( 'NONCE_SALT',       'N}#(BC|dz.lr!joA/!D0LaR}RkwdF(^=FnP gaTcCIlIL^s|N`i(A;C2P.LN#oMs' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'equi_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
