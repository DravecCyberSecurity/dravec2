<?php

require_once './php/config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');	
    ?>
    <script>
    javascript:alert('Você não está logado!');
    javascript:window.location='../index.html';
    </script>
    <?php
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
  session_unset();     
  session_destroy();   
  header('Location: ../index.html');
}
$_SESSION['LAST_ACTIVITY'] = time(); 

$email=$_SESSION['name'];
$sql = "SELECT name FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $nome = $row['name'];  
    }
} else { 
}
?>
