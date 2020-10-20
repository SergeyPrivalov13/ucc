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
define( 'DB_NAME', 'uralconstructioncompany' );

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
define( 'AUTH_KEY',         'W7tw|1kJO>P$*?Xpp+ds1* }bMET@qymQ7JkY9Jqd|$*M4dBo*t[KK2>&npkj-J`' );
define( 'SECURE_AUTH_KEY',  'Bx.Y>{.Mw6}Ssw&dW^%):/|XL}-^n`;]5b%<f=nhi=hMvp,2N-$A-RbMIea6@^i6' );
define( 'LOGGED_IN_KEY',    'YbXRGTR@6QOV04GWqX9tr70A)UV[|f~tBUR8mN*u)CHeqedsUJ>a?[4K>yYB84k0' );
define( 'NONCE_KEY',        'Vz6YV@iB%M:TwSfM6dmdf}eE7DpxcC_TCfRCQv%j;H!=8BHxM/@jV4HY^ZKwmX0l' );
define( 'AUTH_SALT',        'Qv|_Nt<=,>Fx8(P)v1?4!.ph-B=/=Mkq,em+D1tK:tKsEZoToquiUAvI.Ng&{^/H' );
define( 'SECURE_AUTH_SALT', '%JhB!Hk(tPPwE8}?%18dR>u]}I4BSuSYOSUuq+V>L}J:YbAb00aVlS)Qb8_32~EB' );
define( 'LOGGED_IN_SALT',   'pXV>#2dc|uFfw VO9_sg6]zLLi*rlq|q3C6b^QynOQWG6COCAkb;E6Xz)3XQ+=Ij' );
define( 'NONCE_SALT',       '~VmknvwlL;V_69,xf2.arNh?ZJI@.dK=PSb[4PT48idGe{}%u4r>n&;[k)E{,s?O' );

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
