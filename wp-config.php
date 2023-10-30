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
define( 'DB_NAME', 'itfine' );

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
define( 'AUTH_KEY',         '3;=zoY !SF_%s`;`,7:h().O<4t5ndT8&2lwpjJ#?$f (*wid|B/%ylxDA^4ppbL' );
define( 'SECURE_AUTH_KEY',  '#aq[_FxhL=oZydZD],hL=kJ]nr-`p5GwJrPR6Ok%c:^^PNC^)-vh<}S1~bV-QK<$' );
define( 'LOGGED_IN_KEY',    '10a}u<I&>%Me.g,CPDImpR26xx@)lS,HOs}S%9[z@EWa$~fMTqofWdUV0D%4 rKn' );
define( 'NONCE_KEY',        'mN1l&cx#Bd({0w{0Ojla=]NX<Wy2(MW^ROawOsPVq-L[((E6`Sz=2tz}KV7ZOTi|' );
define( 'AUTH_SALT',        '.tB$^`Q#eLYG-g.+L`h C}.[OcfSk&KdgZ_1+S@?1&L?+W5?1va4VP3K0?:M,36Y' );
define( 'SECURE_AUTH_SALT', 'Nk$SF+=mANlw}1$i278M(Sc$5T[=%XJi)5(8lvX0Z_-N}zGq_VDXs3KnoyTF#)1*' );
define( 'LOGGED_IN_SALT',   '!&X6c&@nJ^N>nXn&L;Uq%5/6BAyQudJbza`T7lV,D8(V3t>vV+L4x1wrbq-m{zDs' );
define( 'NONCE_SALT',       '0az/C{>_:#DeZ/qHsoP,9z6Uy.3jM`e),)-3K_fO|Om%VsvEee<DJ^}_tk06@n:Q' );

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
