 <?php 
 session_start();

 define('SITEURl','http://localhost/dbms_sys/');
 define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASS','');
 define('DB_NAME','food-order');
 
 $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASS)or die(mysqli_error()); //database connection yeta bata huncha
        $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error()); //selecting database

  

?>