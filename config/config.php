<?
 $dblocation = 'localhost';
 $dbuser = 'root';
 $dbpassword = 'root';
 $dbname = 'cow';
 $dbport = 3307;
 
 $dbconnect = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname, $dbport);
 if(!$dbconnect){
	 exit('Error connect DB');
 }
 