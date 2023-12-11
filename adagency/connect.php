
	<!--$email = $_POST['email'];
	$number = $_POST['number'];
	$ad_type = $_POST['ad_type '];
	$product_type = $_POST['product_type'];
	$product_name = $_POST['product_name'];
	$time_or_length = $_POST['time_or_length'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer_request(email, number, ad_type, product_type, product_name, time_or_length) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sisssi", $email, $number, $ad_type, $email, $product_type, $product_name, $time_or_length);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>

    $email = $_POST['email'];
    $number = $_POST['number'];
    $ad_type = $_POST['ad_type'];
    $product_type = $_POST['product_type'];
    $product_name = $_POST['product_name'];
    $time_or_length = $_POST['time_or_length'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'project');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO customer_request (email, number, ad_type, product_type, product_name, time_or_length) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $email, $number, $ad_type, $product_type, $product_name, $time_or_length);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>-->
<?php
if(isset($_POST['username'], $_POST['email'], $_POST['number'], $_POST['ad_type'], $_POST['product_type'], $_POST['product_name'], $_POST['time_or_length'], $_POST['End_date'] )) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $ad_type = $_POST['ad_type'];
    $product_type = $_POST['product_type'];
    $product_name = $_POST['product_name'];
    $time_or_length = $_POST['time_or_length'];
    $End_date = $_POST['End_date'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'project');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } 
	  else{
        $stmt = $conn->prepare("INSERT INTO customer_request (username,email, number, ad_type, product_type, product_name, time_or_length,End_date) VALUES (?,?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("ssisssss", $username,$email, $number, $ad_type, $product_type, $product_name, $time_or_length,$End_date);
        $execval = $stmt->execute();
        if ($execval) {
            echo "Your requirements are saved";
            header('location: index2.php');
        } else {
            echo "Error: " . $conn->error;
        }
        $stmt->close();
        $conn->close();
    }
} 
/*else {
    echo "All fields are required.";
}*/
?>

