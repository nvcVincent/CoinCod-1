CoinCod
=================

Introduction
--------------
CoinCod is unique auction system design to bring users with the same taste together and get their dream products at a best deal.
System can easily be setup by changing config.php according to your local machine setup. 
A couple local server can be use to setup the system. Below are recommended off the shelf packed local server:
1. XAMPP
2. WAMP
3. MAMP

Setup
--------------

Enter details which ever place is appropriate for setup: 

$hostname = '__enter your hostname__';      --> if you are on local use '__localhost__'
$dbname = '__enter your database name__';
$username = '__enter your localhost username__';
$password = '__enter your localhost password__';

Note: You can omit this step if you are running on a live server.

Inside of mainPageURL function enter your folder name that stores all your coincod files. 

function mainPageURL(){
	$pageURL = 'http';
	:
	:
	:
 	return $pageURL .= "/__enter your folder name__";
}



