<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "recipe_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

$sql = $search ? "SELECT * FROM recipes WHERE title LIKE '%$search%'" : "SELECT * FROM recipes";

$result = $conn->query($sql);

$recipes = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $recipes[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description'],
            'ingredients' => $row['ingredients'],
            'instructions' => $row['instructions'],
           
        );
    }
}

echo json_encode($recipes);

$conn->close();
?>
