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
define('DB_NAME', 'p9_openclassrooms');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'Annaelle');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Tam47koo.');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'JkaCfZYCk~[b7h~wii}|78(W:>0[@cNvTvic,}^u.aXQMWbA|,lKk5vW.K~LRR&+');
define('SECURE_AUTH_KEY',  'C0{ cP=B_kO]E:;}WohXJ.*WS1tiOY2;Tlk7BVTa-VmZh`fA>V0.MO,}y=>mcys+');
define('LOGGED_IN_KEY',    'orAc7W8$Y-P8=5~=k^.S}8~f#I%I16T8DHfgN 7+6=t1#K_2 {*}exox{NI%?*Oq');
define('NONCE_KEY',        '(p|e trKGGVlP7kXOy=0]n1qEJQ,Y$as-5w_}MAZ,pmu7o2n/:eqm%Qz#}rW+0Pd');
define('AUTH_SALT',        '2V3Q#5Cj|$mhPVFz`s@^iHE3IwdbL4?dNW8N^IsU5uM,2_M_FXBSnNMxEu+K!pO|');
define('SECURE_AUTH_SALT', 'aHr1P^IM`_D={ B&XN*]gP=8S tdx2_Fug6R0sfxJ$.ftX<`bPWuUzvJe]SYnVZI');
define('LOGGED_IN_SALT',   '%sCk-p*$-(@UZ.|0c>k k6g4+C-!{(F6ao9PI5GGL%J$Mq7<)r~m@#g4><g{Pgq-');
define('NONCE_SALT',       '!%d5cW(EpZ}Fa@w/SCb)g4pzt&p<<sgfpk<=3&L o%viE$XMVGA3&k0?`+iIOR^M');
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
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

@ini_set('upload_max_filesize', '500M');
@ini_set('post_max_size', '500M');
@ini_set('memory_limit', '500M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
