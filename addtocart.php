
<?php
session_start();
if (!isset($_SESSION['email']))
{
	header('location:login.php');
}
?>

<?php
if(isset($_GET['product']))
   {
$product_id=$_GET['product'];
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from products where id='$product_id' ");
$row2 = $query->fetch_assoc();
	 $customer_id=$_GET['customer_id'];
	   $quantity=$_GET['quan'];
	   $name=	$row2['name'];
$category= $row2['category'];
$prescription= $row2['prescription'];
$price= $row2['normal_price'];	
$offer_price= $row2['offer_price'];	
$image= $row2['image'];
   }
?>
<?php
if(isset($_SESSION['email']))
{
	$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
	$query12= $con->query("select product_id && item_quantity from cart where c_id='$customer_id'");
	$info12=$query12->fetch_assoc();
	$quantity_before=$info12['item_quantity'];
	$quan_final=$quantity_before + $quantity;
	if($product_id==$info12['product_id'])
	{
		
		$sql = "UPDATE cart SET item_quantity='$quan_final' WHERE product_id=$product_id";
	   
            if ($con->query($sql) === TRUE) {
                                                header("location:checkout.php");
                                            } 

            else 
			{
    echo "Error updating record: " . $con->error;
            }

		
	
	}
	
	else
	{
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

$sql = "INSERT INTO cart (c_id, product_id, item_quantity,item_name,item_category,item_prescription,item_normal_price,item_offer_price,item_image)
VALUES ('$customer_id', '$product_id', '$quantity', '$name', '$category', '$prescription', '$price', '$offer_price', '$image');";

if ($conn->query($sql) === TRUE) {
   header("location:checkout.php");
} else {
    header("location:index.php?error=something_is_wrong");
}

$conn->close();
	}
	
	
}
 else
   {
	   header("location:index.php");
   }

?>
