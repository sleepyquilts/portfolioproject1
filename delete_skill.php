<?php
require_once('database.php');

// Get IDs
$skill_id = filter_input(INPUT_POST, 'skillID', FILTER_VALIDATE_INT);
$developer_id = filter_input(INPUT_POST, 'developerID', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($skill_id != false && $developer_id != false) {
    $query = 'DELETE FROM skill
              WHERE skillID = :skill_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':skill_id', $skill_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');