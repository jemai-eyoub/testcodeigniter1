<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
	public $baseURL = 'http://testcodeigniter1';

	public $indexPage = '';

	public $uriProtocol = 'REQUEST_URI';

	public $defaultLocale = 'en';

	public $negotiateLocale = false;

	public $supportedLocales = ['en'];

	public $appTimezone = 'Africa/Tunis';

	public $charset = 'UTF-8';

	public $forceGlobalSecureRequests = false;

	public $sessionDriver            = 'database';
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

	public $toolbarCollectors = [
		'CodeIgniter\Debug\Toolbar\Collectors\Timers',
		'CodeIgniter\Debug\Toolbar\Collectors\Database',
		'CodeIgniter\Debug\Toolbar\Collectors\Logs',
		'CodeIgniter\Debug\Toolbar\Collectors\Views',
		'CodeIgniter\Debug\Toolbar\Collectors\Cache',
		'CodeIgniter\Debug\Toolbar\Collectors\Files',
		'CodeIgniter\Debug\Toolbar\Collectors\Routes',
	];
}
