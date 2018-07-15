<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
/**#@+
 * https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         '9e1dfc32556369c6ebc2e74340b71c0c5729b7bb');
define('SECURE_AUTH_KEY',  'cbf9330ccdbd187011b679e301915c611b23fa8f');
define('LOGGED_IN_KEY',    '0c87462811f03051c0f94be56c8c8f44d6bb9587');
define('NONCE_KEY',        '72c0c0040c7748d9438281ff23dfa8429c4d041f');
define('AUTH_SALT',        'bcf40da4ac1bad69e3b4ee05c4163a4a9dc5eeb1');
define('SECURE_AUTH_SALT', '5fedeba3e4d06eeb1fbabd8fb4abd1ff827b7dac');
define('LOGGED_IN_SALT',   '1f5c3702bc36afb8d14cfd1b0093e8979af2f365');
define('NONCE_SALT',       '22b8882c5db7fcff7268be8bd5a9cd1ff7a364b1');
$table_prefix  = 'wp_';
#define('WP_DEBUG', true);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
