CoinCod
=================

Introduction
------------

CoinCod is unique auction system design to bring users with the same taste together and get their dream products at a best deal.
System can easily be setup by changing config.php according to your local machine setup. 
A couple local server can be use to setup the system. Recommended of the shelf packet local server:
1.XAMPP
2.WAMP
3.MAMP


Enter details which ever place is appropriate for setup: 

$hostname = 'localhost';
$dbname = 'enter your database name';
$username = 'enter your localhost username';
$password = 'enter your localhost password';

Inside of mainPageURL function enter your folder name that stores all your coincod files. You can omit this step if you are running on a live server.

function mainPageURL(){
	$pageURL = 'http';
	if ( isset( $_SERVER["HTTPS"] ) && strtolower( $_SERVER["HTTPS"] ) == "on" ) {
		$pageURL .= "s";
	}
 		$pageURL .= "://";
 	if($_SERVER["SERVER_PORT"] != "80"){
  		$pageURL .= host.":".$_SERVER["SERVER_PORT"];
 	}else{
  		$pageURL .= host;
 	}
 	return $pageURL .= "/enter your folder name";
}



