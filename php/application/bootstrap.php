<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
/*if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}*/
Kohana::$environment = ($_SERVER['SERVER_NAME'] !== 'localhost') ? Kohana::PRODUCTION : Kohana::DEVELOPMENT;

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/php',
    'errors' => true,
    'index_file' => false
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

Cookie::$salt = 1;

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('get_setting', 'settings/getSetting/<setting>')
    ->defaults(array(
    'controller' => 'settings',
    'action' => 'getSetting'
));

Route::set('coctails_by_component', 'coctails/getCoctailsByComponent/<id>')
    ->defaults(array(
    'controller' => 'coctails',
    'action' => 'getCoctailsByComponent'
));

Route::set('clean_profit', 'transactions/getCleanProfit/<user_id>')
    ->defaults(array(
        'controller' => 'transactions',
        'action' => 'getCleanProfit'
    ));

Route::set('orders_by_user', 'orders/getOrders(/<type>)(/<user_id>)(/<limit>/<page>/<start>)')
    ->defaults(array(
    'controller' => 'orders',
    'action' => 'getOrders',
    'start' => isset($_POST['start']) ? $_POST['start'] : 0,
    'limit' => isset($_POST['limit']) ? $_POST['limit'] : 100,
    'page' => isset($_POST['page']) ? $_POST['page'] : 0,
    'type' => isset($_POST['type']) ? $_POST['type'] : 0,
    'user_id' => isset($_POST['user_id']) ? $_POST['user_id'] : null,
));

Route::set('default', '<controller>/<action>(/<tail>)')
    ->defaults(array(
        'nick' => isset($_POST['nick']) ? $_POST['nick'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'ids' => isset($_POST['ids']) ? $_POST['ids'] : '',
        'name' => isset($_POST['name']) ? $_POST['name'] : '',
        'capacity' => isset($_POST['capacity']) ? $_POST['capacity'] : '',
        'price' => isset($_POST['price']) ? $_POST['price'] : '',
        'owner' => isset($_POST['owner']) ? $_POST['owner'] : '',
        'strength' => isset($_POST['strength']) ? $_POST['strength'] : 0,
        'components' =>  isset($_POST['components']) ? $_POST['components'] : '',
        'recipe' => isset($_POST['recipe']) ? $_POST['recipe'] : '',
        'prozent' => isset($_POST['prozent']) ? $_POST['prozent'] : '',
        'newData' => isset($_POST['newData']) ? $_POST['newData'] : '',
        'client' => isset($_POST['client']) ? $_POST['client'] : '',
        'coctail' => isset($_POST['coctail']) ? $_POST['coctail'] : '',
        'quantity' =>  isset($_POST['quantity']) ? $_POST['quantity'] : '',
        'discount' => isset($_POST['discount']) ? $_POST['discount'] : '',
        'priority' => isset($_POST['priority']) ? $_POST['priority'] : '',
        'status' => isset($_POST['status']) ? $_POST['status'] : '',
        'forced' => isset($_POST['forced']) ? $_POST['forced'] : '',
        't_type' => isset($_POST['t_type']) ? $_POST['t_type'] : '',
        'to' => isset($_POST['to']) ? $_POST['to'] : '',
        'start' => isset($_POST['start']) ? $_POST['start'] : 0,
        'limit' => isset($_POST['limit']) ? $_POST['limit'] : 100,
        'page' => isset($_POST['page']) ? $_POST['page'] : 0,
        'profile_id' => isset($_POST['profile_id']) ? $_POST['profile_id'] : -1
    ));