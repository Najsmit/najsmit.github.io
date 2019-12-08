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
define( 'DB_NAME', '' );


/** Имя пользователя MySQL */
define( 'DB_USER', '' );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );


/** Имя сервера MySQL */
define( 'DB_HOST', '' );


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
define( 'AUTH_KEY',         ':vGaf~@S2NX*i^F_$hDAlGOf`f/N`l6RF=t$gH_CfWc&m4pu-9W9<7(}*Smq?R%x' );

define( 'SECURE_AUTH_KEY',  ',Qo`gqP(3zd$Tm[Dvt@cC*g/@_B2a-Koao tA`u8gomezoLj6WvD&wKeds=,PCO%' );

define( 'LOGGED_IN_KEY',    '[(jYdD:1?^N4m=xg<I,]M#OpHh1Hn&TEG{$i6i=>u8iNjpqCIQyq|2oiM><hr}X5' );

define( 'NONCE_KEY',        ',!x {BjvYnF2B9cq`ow1,1.]zxLe#Z$qd<|Gn;4eQ$yR2F|s:Bx2s$K}lEInvSN-' );

define( 'AUTH_SALT',        '5l6v|n5];9Y1)mNjizQN|Q9N:HU/h]On&YY%6jXj29csYFG:j5Xl;bsZ^^~v:Ds&' );

define( 'SECURE_AUTH_SALT', 'N|i@xc|b>J#t.Y{.=>_|8y[<+M~{MsASF;IZ!C_XQ}6J4ErcYscp06`Q)1#=EgLO' );

define( 'LOGGED_IN_SALT',   ']8ECj<[n>W{,-j^uv `1EZC}-yr;PpIcHkt0}MN}?ZlZP:_2Dv!X8Sq+8T?!R9sI' );

define( 'NONCE_SALT',       '*$`[3w5,d4l&}2E;Zb&Xi)TMl=GD}X4KbTAWdFfeoAu>q-eicx$WVq:9x0Mlk7W$' );


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
