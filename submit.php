// Database configuration
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $recipeType = $conn->real_escape_string($_POST['recipeType']);
    $recipeTitle = $conn->real_escape_string($_POST['recipeTitle']);
    $authorName = $conn->real_escape_string($_POST['authorName']);
    $recipeDescription = $conn->real_escape_string($_POST['recipeDescription']);
    $ingredients = $conn->real_escape_string($_POST['ingredients']);
    $instructions = $conn->real_escape_string($_POST['instructions']);
  
    $image_url = NULL;
    if (isset($_FILES['recipeImage']) && $_FILES['recipeImage']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['recipeImage']['tmp_name'];
        $fileName = $_FILES['recipeImage']['name'];
        $uploadFileDir = './uploads/';
        $dest_path = $uploadFileDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $image_url = $fileName;
        } else {
            echo "There was an error uploading the file, please try again.";
            exit;
        }
    }
    $sql = "INSERT INTO uploaded_recipes (recipeType, recipeTitle, authorName, recipeDescription, ingredients, instructions, recipeImage)
            VALUES ('$recipeType', '$recipeTitle', '$authorName', '$recipeDescription', '$ingredients', '$instructions', '$image_url')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
