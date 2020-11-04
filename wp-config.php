<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^}&M<G[XF}L{VvoFOrbr|uAfi0i$W#Yp-WC0qkBPB{>%lD`6L(vO_22sxK7dh+V%' );
define( 'SECURE_AUTH_KEY',  '<rk$ULAT=&ap:Z`<mXO`Dq(0.DCm$1Jk7=[n2_|jwhNVA`GP-27!:xP i:y&(Miz' );
define( 'LOGGED_IN_KEY',    '9WW%^%L_z~swcZ&~;n08[N=R  DMPa4Oovj1ul-FRk)9mnl]OibL+@pf)QoPjDwB' );
define( 'NONCE_KEY',        '2T<i`7C({/NzlXN.NM)3<h}X@SV})YI(l}x7<ZgY<j@mdEx;Q%o)y 6[:?u8:xtd' );
define( 'AUTH_SALT',        'H_9P:ugMh|q4HpyJ3pWKkcr4G9k10|o4Z=7{q%P;k,d;`K8A0q)$>e5g:NCzfAJg' );
define( 'SECURE_AUTH_SALT', 'Iz>%G6c>wXX5T}Z(rluu#QNADyw`07$xj{8fwa<Vqa[xBe<lVY:dg>($y!F/klL}' );
define( 'LOGGED_IN_SALT',   'Q&;8yN[RbZ-OUz-BD2GL8)2]:m-$&HfSE!jgt*7q|{C[Qi%*<YY!L/7{-vsN6Z>J' );
define( 'NONCE_SALT',       'g*Cc_P<%n>?usT;[Yn:5/b{95@SaU*V.q:S/``nJQ[S3/FE3AsB|O#A9]BH|s~0X' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
