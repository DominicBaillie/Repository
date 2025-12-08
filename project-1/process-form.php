<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Payment Information - HammerCorp™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1>HammerCorp™</h1>
		</header>
		<main>

<h1>Your Purchase Information</h1>
<body>
    <main>

        <?php
            $Size = $_GET ["size"];
            $Hammer = $_GET ["hammer"];
            $Color = $_GET ["color"];
            echo('<p>You have ordered a '.$Size.' '.$Color.' '.$Hammer.'.</p>');
        ?>

        <h2>Purchase Information</h2>
        <?php
            $fname = $_GET ["fname"];
            
            $lname = $_GET ["lname"];
            
            $alert = $_GET["alert"];
            
            echo('<p>Thank you, '.$fname.' '.$lname.'</p>');

        ?>
        <?php
            $comments = $_GET ["comments"];
            echo('<p>Additional Comments: '.$comments.'</p>');
        ?>
    </main>
        <footer>
            <p><small>©Hammer Corp. All rights reserved</small></p>
        </footer>
    </body>
</html>
