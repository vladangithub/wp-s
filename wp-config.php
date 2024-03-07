<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-s' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G`dcz*([uC#q=P?H!r<k_xO?8R2MNRvx$;2t7K+Hbx.Q@tZ)]Y`Fo,BPZ;D#Amf9' );
define( 'SECURE_AUTH_KEY',  'UhbmSDQF(7auzk?dR]$#J7NR AbltoD.,|e<&ZMuO$g8.bU[0VI}uI3DnGL^8AQA' );
define( 'LOGGED_IN_KEY',    '>;@*jqW(o`m9tr}$YF4BUG3>PP9;W+V)<ba$L.i&t,qi&cO)7Tl$?+Iz79SyR[C5' );
define( 'NONCE_KEY',        '!D#drk1&/>`VMK:3Bi!9e<u5=}_0+5jy^/pfy}u4&JAG;syrPBoTRis>*7mt*I8L' );
define( 'AUTH_SALT',        'AwT?W|Z_L=z?k$<uKR&nB6v6kLK!qN~&Yq`ji${,lLh$`*;}D2:Srd,Z>Ry[=OEi' );
define( 'SECURE_AUTH_SALT', 'L<i!`@[iTmk(>I$OmRV (u9yQ<4}{%~]|_*AFTTBkI[dUNi|~lmc+1C<9Sub 3C#' );
define( 'LOGGED_IN_SALT',   'ZO[4LD*SDBk0O&)BvTwQu{dx@o&5I!R;0,|G_gQwxUsQK R>(XG3/sEHcM#n0/*p' );
define( 'NONCE_SALT',       '0o=X8jv;M*1VK.fhoj/W#MQl)5*1cbgK*_u,/:pyx!a9qC<>pMA^b40 0EIbp>)G' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wps_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
