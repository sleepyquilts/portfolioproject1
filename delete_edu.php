<?php
require_once('database.php');

// Get IDs
$edu_id = filter_input(INPUT_POST, 'eduID', FILTER_VALIDATE_INT);
$developer_id = filter_input(INPUT_POST, 'developerID', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($edu_id != false && $developer_id != false) {
    $query = 'DELETE FROM education
              WHERE educationID = :edu_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':edu_id', $edu_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');