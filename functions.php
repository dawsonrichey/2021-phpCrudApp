<?php
include 'private.php';


function pdo_connect_mysql() {
    // Use the database credentials defined in private.php
    global $db_host, $db_user, $db_pass, $db_name;
    $DATABASE_HOST = $db_host;
    $DATABASE_USER = $db_user;
    $DATABASE_PASS = $db_pass;
    $DATABASE_NAME = $db_name;
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If the connection fails, stop the script with a generic error message.
    	exit('Failed to connect to database!');
    }
}

function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
        <nav class="navtop">
            <div>
                <h1>Website Title</h1>
                <a href="index.php"><i class="fas fa-home"></i>Home</a>
                <a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
            </div>
        </nav>
EOT;
    }
    function template_footer() {
    echo <<<EOT
        </body>
    </html>
EOT;
    }
    ?>