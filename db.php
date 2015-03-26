
<?php
function getDB() {
    $dbhost="localhost";
    $dbuser="root"; // Your own username
    $dbpass="root"; // Your own password
    $dbname="crm";  // Your own database name

    $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConnection;

}