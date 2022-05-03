
<?php
session_start();
if (!isset($_SESSION['email']))
{
	header('location:login.php');
}
?>
 <?php
 if(isset($_GET['cart_item_id']))
   {
 $cart_id=$_GET['cart_item_id'];
$servername = "localhost";
$username = "upchaaar_root";
$password = "babloo@098765";
$dbname = "upchaaar_meds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM cart WHERE id=$cart_id";

if ($conn->query($sql) === TRUE) {
    header("location:index.php?status=successfully_deleted_from_cart");
} else {
    header("location:index.php?status=". $conn->error.""); ;
}

$conn->close();
   }
   else
   {
	   header("location:checkout.php");
   }
?> 