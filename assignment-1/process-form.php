<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Order Information - Pizza Place™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1>Pizza Place™</h1>
		</header>
		<main>
			<h2>Pizza Order Submitted</h2>
    <?php
    

        // Gather Pizza Inputs
        $size = $_GET['size'];
        $dough = $_GET['dough'];
        $cheeses = $_GET['cheese'];
        $sauces = $_GET['sauce'];
        $toppings = $_GET['top'];
        $specialInstructions = isset($_GET['question']) ? $_GET['question'] : 'None';

        // Gather Contact Information
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $address = $_GET['address'];
        $province = $_GET['province'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        
        // Display the submitted information
        echo "<h1>Thank you for your order, $fname $lname!</h1>";
        echo "<h2>Your Pizza Order Summary:</h2>";
        echo "<strong>Size:</strong> $size<br>";
        echo "<strong>Dough Type:</strong> $dough<br>";
        echo "<strong>Cheeses:</strong> $cheeses<br>";
        echo "<strong>Sauce:</strong> $sauces<br>";
        echo "<strong>Toppings:</strong> $toppings<br>";
        foreach ($toppings as $item)
            {
                echo('<li>'.$item.'</li');
            }
        echo "<strong>Special Instructions:</strong> $specialInstructions<br>";

        echo "<h2>Your Contact Information:</h2>";
        echo "<strong>Address:</strong> $address, $province<br>";
        echo "<strong>Phone:</strong> $phone<br>";
        echo "<strong>Email:</strong> $email<br>";

        
    ?>
</html>