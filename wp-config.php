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
define('DB_NAME', 'mywordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'igor');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '`lmS$,hHv+]7R.BhzwQEcKo4}zTS<6&3,t|Ksio:cKBmb#Ll61`s_W.Zx9E6pE$v');
define('SECURE_AUTH_KEY',  'xVv=9sNc1-Po<vaaF}hg[kvu`tq(ry3-5r6M$Aw.[n`tjEy5 {]`;ip-#nx@o)@>');
define('LOGGED_IN_KEY',    'BhM5dgO2$^>I09{`/mVZoADo,S$Oe`5)JL* F6J|{&4EHe_,G!#YkfN|XWL_Szyb');
define('NONCE_KEY',        'nh6NI3*[1U47 WbZglN}k(k>u>y0 ]RKUTC`5+3N63Ob1|&QX%nx)M[vh,dW+Sf,');
define('AUTH_SALT',        'z}r#_Q2+>- qd+R<R~2j4)LE=4TrdY4QRV^wd`$+v|!2h72<h<+SHdLlCX+tRuxa');
define('SECURE_AUTH_SALT', '&UOPEnujOFGPVpBcO9VAMOO/3pRUtY}?h%-wY=,_NY{!LXX$nEj5}NXP,huJ4`qI');
define('LOGGED_IN_SALT',   ';0+lV[2^kT2+_/Hoij4f@ms)@C0cglCF{,,(N:D7=hh;{g[T2da,*e7d]at3p:#q');
define('NONCE_SALT',       't^~XikQCOjov88mC6A_vM1u RO+@Nv(>W+]| Ch{Xau#e<bmnYE4G+$l;D,[F jY');

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
