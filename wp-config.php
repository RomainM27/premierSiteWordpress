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
define( 'DB_NAME', 'premiersitewordpress' );

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
define( 'AUTH_KEY',         '1S}P-LHcU6sjLm0K|6)Qfp<IS[&mpjI`dMi2o&s~y{/zf/$P({oMvU=Ad;v6xuWH' );
define( 'SECURE_AUTH_KEY',  'Ob8}Z~{PNs1qr*6/C<R; DOtaq|v)RWg|fbQ$Ksre:USFfQ3qf|O!:!dnx=MpgO^' );
define( 'LOGGED_IN_KEY',    'H6TwJm6C]e{YO2LWHRs+tv{`dE}b=+N@@pRJR d|u^N(N8)whO-~&%/:471.jG>-' );
define( 'NONCE_KEY',        'X2!$=$h*ne!Vh^PlXv2>_iJX;zst[lq,mUjbzd}7_nT0+aRC`NIS 0ANrwO5}jM0' );
define( 'AUTH_SALT',        'r@9-$K1c[Xo#|]7$[gkz?U[&U$<#IMt*e*_EI>D&YvB|$#E1*Il,[&xS`nZ$ld[B' );
define( 'SECURE_AUTH_SALT', '-EW:Ps/u[]{[Mjir[(Pk:=Q)2PkV;`(K*@ch]pwkRCU+1t9j>MVxcoFfh2A0@/$N' );
define( 'LOGGED_IN_SALT',   '%~au:}AW=vcfnZo0w$m*?k}TW+4WV20]E_PV.vn$5J[0AUY]P$0oW20dIbcr}2kq' );
define( 'NONCE_SALT',       'N{R!30:Mdv5JWRvDEaf2/tY irI?EQJfg7xA23bwK=GBzMq;X@B7g5.RH^gL2omA' );
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
