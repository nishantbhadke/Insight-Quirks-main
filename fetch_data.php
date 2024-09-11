<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iq";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("SELECT title, author, date, author_image, content FROM articles");
    $stmt->execute();

    // Fetch all results
    $articles = $stmt->fetchAll();
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
