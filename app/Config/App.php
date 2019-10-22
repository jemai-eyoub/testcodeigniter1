<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
	public $baseURL = 'http://testcodeigniter1/public';

	public $indexPage = '';

	public $uriProtocol = 'REQUEST_URI';

	public $defaultLocale = 'en';

	public $negotiateLocale = false;

	public $supportedLocales = ['en'];

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| The default timezone that will be used in your application to display
	| dates with the date helper, and can be retrieved through app_timezone()
	|
	*/

	public $appTimezone = 'Africa/Tunis';

	public $charset = 'UTF-8';

	public $forceGlobalSecureRequests = false;

	// Session configuration
	public $sessionDriver            = '\CodeIgniter\Session\Handlers\DatabaseHandler';
	public $sessionSavePath          = 'ci_sessions';
	public $sessionMatchIP           = false;
	public $sessionCookieName        = 'ci_session';
	public $sessionExpiration        = 7200;
	public $sessionTimeToUpdate      = 300;
	public $sessionRegenerateDestroy = false;

	public $cookiePrefix   = '';
	public $cookieDomain   = '';
	public $cookiePath     = '/';
	public $cookieSecure   = false;
	public $cookieHTTPOnly = false;

	public $proxyIPs = '';

	public $CSRFTokenName  = 'csrf_test_name';
	public $CSRFCookieName = 'csrf_cookie_name';
	public $CSRFExpire     = 7200;
	public $CSRFRegenerate = true;
	public $CSRFRedirect   = true;

	public $CSPEnabled = false;

	/*
	|--------------------------------------------------------------------------
	| Debug Toolbar
	|--------------------------------------------------------------------------
	| The Debug Toolbar provides a way to see information about the performance
	| and state of your application during that page display. By default it will
	| NOT be displayed under production environments, and will only display if
	| CI_DEBUG is true, since if it's not, there's not much to display anyway.
	*/
	public $toolbarCollectors = [
		'CodeIgniter\Debug\Toolbar\Collectors\Timers',
		'CodeIgniter\Debug\Toolbar\Collectors\Database',
		'CodeIgniter\Debug\Toolbar\Collectors\Logs',
		'CodeIgniter\Debug\Toolbar\Collectors\Views',
		'CodeIgniter\Debug\Toolbar\Collectors\Cache',
		'CodeIgniter\Debug\Toolbar\Collectors\Files',
		'CodeIgniter\Debug\Toolbar\Collectors\Routes',
		'CodeIgniter\Debug\Toolbar\Collectors\Events',

	];
}
