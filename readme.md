miniMVC-PHP - A minimum php MVC application.
===============================================

DESCRIPTION
---------------
* This a minimum PHP MVC application, it's very helpfull to learn and full understand the MVC structure in PHP.
* It's really small which is only 7 files.

REQUIREMENTS
---------------
* PHP 5.3.0 or >
* Apache mod_rewrite and .htaccess override enabled.

SETUP
---------------
* Just copy the codes to you website folder, that's it.
* For example, if you use the local server program such as wamp, just copy the codes to 'www/miniMVC-PHP/1/', then you can access this app by the url 'localhost/miniMVC-PHP/1' in chrome/firefox/safari or other browers.
*Please noted that you have to modify the '.htaccess' file in 'RewriteBase' section to match the real path what you used.


FILE STRUCTURE
---------------

	app/ 				- Customer application. 
		controllers/	- Contains controllers
			Home.php 	- The default controller Home
		models/ 		- Contains models
			User.php 	- A 'User' model
		views/ 			- Contains templates
			Home/		- Controller path
				index.php 		- a template
		.htaccess 		- Setting this folder is forbidden to access
	sys/ 				- Contains core files
		.htaccess 		- Setting this folder is forbidden to access
		App.php 		- Initial the app and dispatch the URL.
		Autoload.php  	- Autoload function
		Controller.php 	- The controller class
	.htaccess 				- Rewrites the url.
	index.php 				- The "boot strapping" script
	README.md 				- You're reading it.
