		define('DB_NAME', 'my-dbname-here');
		define('DB_USER', 'db-user-name');
		define('DB_PASSWORD', 'db-user-passwrd');


define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         ' ');
define('SECURE_AUTH_KEY',  ' ');
define('LOGGED_IN_KEY',    ' ');
define('NONCE_KEY',        ' ');
define('AUTH_SALT',        ' ');
define('SECURE_AUTH_SALT', ' ');
define('LOGGED_IN_SALT',   ' ');
define('NONCE_SALT',       '');

$table_prefix  = 'wp_';

	
define('DS_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', DS_REQUEST_URL);
define('WP_HOME', DS_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
