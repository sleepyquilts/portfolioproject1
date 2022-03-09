<?php
// Get the form data
$developer_id = filter_input(INPUT_POST, 'developerID', FILTER_VALIDATE_INT);
$img = filter_input(INPUT_POST, 'imgUrl');

// Validate inputs
if ($developer_id == null || $developer_id == false ||
        $img == null) {
    $error = "Invalid developer data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'UPDATE images
              SET imgURL = :img
              WHERE developerID = :developer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':img', $img);
    $statement->bindValue(':developer_id', $developer_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>