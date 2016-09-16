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
define('DB_NAME', 'pechatayby');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k?^&kS0RFPg(igBNAsT1d/_WlMncggyzG$K1vE|3h4)Q0r/O.z!L#iM?Qw]s!+&B');
define('SECURE_AUTH_KEY',  'LlAaeL8(jhJF T5i@O)U{c<{yQEkbYt6rOU _Kh2fqVNgw~B|e={(8xVkPcvJ W{');
define('LOGGED_IN_KEY',    'bG=a;.xIC`mXJ6Zs9_FP]e1e#8zujTnGDuoBo{zkt~Yzh(qdC4Mry4L3?06#sMH8');
define('NONCE_KEY',        '$5y ~I^B(hCC$HRQuc]XWNX`TcGBZ]GJAkv@tO?p=fQPjuXHex|2]-wX~)122rOm');
define('AUTH_SALT',        'xqLZ042(-M~ysc>%UJxVn*{K.mB?i~{7h(T4-bSfoE!Vn%jFhr#CdLn6R>jWO0Zt');
define('SECURE_AUTH_SALT', 'x2m+/P%egRa,tA7p>+7PK]-FyJ|{xf*k-.pN(T(=au|?K>^-P~g]rTJT| 23?kS|');
define('LOGGED_IN_SALT',   '1GZU[!</q-2t:xIKc(o:_$ek;0QS(R6E<>;r-mW0`?r78+*D!OEs6]TdIK7~E_{F');
define('NONCE_SALT',       'aF,,jsb2iIxo~@g/,~h3f1(Fcq-XUqf7p$d+:T*aw4|M9IxL[dhC9}yeO|Pu`z}8');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
