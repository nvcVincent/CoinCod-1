CoinCod
=================

Repository for the Main CoinCod WebApp


Introduction
-----------------

CoinCod is unique auction system design to bring users with the same taste together and get their dream products at a best deal. The system can easily be setup by changing config.php according to your local machine setup. A couple local server can be use to setup the system. Some recommended off the shelf packed local server such as XAMPP, WAMP or MAMP.


Setup
-----------------
First we need to config our php.ini. Locate php.ini. It should be located at /xampp/php/ directory (if you are using MAMP or WAMP the location is slightly different). Browse to line 226 and remove the semi-colon at the beginning of short_open_tag = On so that your php can support short tags.

Next locate config.php. It should be at the root level of your working directory.

Open the config.php with any favorite text editor of your choice to edit which ever part of the config.php for setup: 

	$hostname = 'enter your hostname';	--> if you are on local machine set hostname to 'localhost'
	$dbname = 'enter your database name';
	$username = 'enter your localhost username';
	$password = 'enter your localhost password';

After editing the setup as shown above, you need to edit one last part as shown below before the server will be able to serve all your files correctly.

Note: You can omit this step below if you are running it on a live server.

Inside of mainPageURL function under return $pageURL enter your directory name where you stored all your development files for CoinCod. 

	function mainPageURL(){
		$pageURL = 'http';
		.
		.
		.
		.
		.
 		return $pageURL .= "/enter your directory name";
	}


Finally, download the CoinCod database from Google Drive through your NexVend account. There are a few version of databases hosted, choose the one with the latest modification date.
