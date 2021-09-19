<?php 
$servername  = "localhost";
$username    = "root";
$password    = "";
$dbname      = "login";
$conn        = mysqli_connect ($servername, $username, $password, $dbname);

?>


<?php 

if (isset($_POST['submit'])){
    $userEmail      = $_POST ['email'];
    $userPassword   = $_POST ['password'];

    $sqli          = "INSERT INTO loginfo (email, password) VALUES ('$userEmail', '$userPassword');";


    $queryData   = mysqli_query ($conn, $sqli);

    if ($queryData){
        echo "success log in";
    }
}



?>