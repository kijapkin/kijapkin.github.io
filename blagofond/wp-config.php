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
define('DB_NAME', 'helpchildren');

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
define('AUTH_KEY',         'ggml0.6?Q3s`_V9R?]q*kBdqlT-z~}l>rT<$d#u/sp]O/>s*=3Lgg..Yc Q:OEuM');
define('SECURE_AUTH_KEY',  ']OL&*OVYk<| !# Qt2.^Eu9<W3uAe:FeknQBJ].Vm<{8h2oJvJ0 @;*_$SD%Sf4C');
define('LOGGED_IN_KEY',    'q@l[AsB*9ixYZ/(z|-#p([5k)apD2CP3pfLb)g}`fU,O+Ike|ty2Xa,zo}#TB<`*');
define('NONCE_KEY',        '!iL%]s:Gmcy9R[3IxN:hV+Z8336aa{a+QfMGv5M6E97/MRsqP2!(:qO={x0NZ9t6');
define('AUTH_SALT',        'qo6j|v9P]DbKrOI|rszq.Mg&f.|_zC$cXcVra#PGPe/G,eDH^wFc|cLK@ -M4ntB');
define('SECURE_AUTH_SALT', ']{(lM-<QRJv6tTR$FLUJu_#SfyJbMSRu=+kUIMNTvj^e z4i*tji1AMINza1ur6v');
define('LOGGED_IN_SALT',   'Bl#ac^Os4q@zO_Xz$j}UdIu*|W4StHSp(#;s[#;f#Cb;#Ug!og@M2^7j_2;f[#Vf');
define('NONCE_SALT',       'NCHQD#j+xoeRr+NtZ?1eYA}-Peb9wt*^r:UUKGZ2[u5fm:T3!~D#yH:[7>:h?$e-');

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
