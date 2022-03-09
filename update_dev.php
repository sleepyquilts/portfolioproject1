<?php
// Get the form data
$developer_id = filter_input(INPUT_POST, 'developerID', FILTER_VALIDATE_INT);
$developer_name = filter_input(INPUT_POST, 'developer-name');
$bio = filter_input(INPUT_POST, 'biography');
$job = filter_input(INPUT_POST, 'jobRoll');

// Validate inputs
if ($developer_id == null || $developer_id == false ||
        $developer_name == null) {
    $error = "Invalid developer data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'UPDATE developer
              SET developerName = :developer_name, biography = :bio, jobRoll = :job
              WHERE developerID = :developer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':developer_name', $developer_name);
    $statement->bindValue(':bio', $bio);
    $statement->bindValue(':job', $job);
    $statement->bindValue(':developer_id', $developer_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>