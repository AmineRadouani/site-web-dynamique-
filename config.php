<!-- config.php -->
<?php
$host = '127.0.0.1:4306';
$db_name = 'newsletter_db';
$username = 'root';
$password = '';

try {
    $conn = mysqli_connect($host,$username,$password,$db_name);
} 
catch(mysqli_sql_exception) {
    echo "your connection to the database has been failled. try again <br>";
}
  if(!$conn){ die("erreur".mysqli_connect_error());
}

?>



