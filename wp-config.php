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
define( 'DB_NAME', 'wimersion' );

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
define( 'AUTH_KEY',         'Q$36;UU`5*T0 T}vvE_qyHM9:4e=~HxAcD7(TJWduWWa_w)1U+==r&ogO9{q*N Q' );
define( 'SECURE_AUTH_KEY',  'h&W[F$XRXpuep.SlTh[2QS,s^dd=4K,%*,Bwz-(c.L)M2>Rt]y`7tW=I?50z]hg2' );
define( 'LOGGED_IN_KEY',    '^!3~Uy:j653wR5S;?FiJ:qp%(UDYK9[sW*Bv2z /W/Vo(1H})4B4NCN;h(RQj,h#' );
define( 'NONCE_KEY',        ',GZ8[[tlWjo&yzMEnWiEOlwX4t4,^W7q2l]@]~iO(wW2j]MW^d!y/ggGn%Ze->w|' );
define( 'AUTH_SALT',        '@p3l4G5Q53`-qsDEzIni3+#q}T_utj5L9N`@=Tza3<e>uQ5 8HgpDAjb%cxUU8S6' );
define( 'SECURE_AUTH_SALT', 'J@TWdb)TOI{_uU|(muBeK`VOt_#>Q:Lj!&}50qL^iREm:A5@/.KVzwoZ/(.S_#9U' );
define( 'LOGGED_IN_SALT',   'lpQ+uTWk6^^fGiYoO2j3R=K_N)qX,1%B99({zpl}Oc;77gzgPQa(,s7lL?GvtsO}' );
define( 'NONCE_SALT',       'pwr8H*PvmAkT=9lOpY;fNpTQ!+I)ASGr13;Tb#Um?-kzLDzI4LoJ<:yX8[eTkb9O' );
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
