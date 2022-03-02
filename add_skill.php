<?php
// Get the product data
$developer_id = filter_input(INPUT_POST, 'developer', FILTER_VALIDATE_INT);
$skill = filter_input(INPUT_POST, 'skill');

// Validate inputs
if ($developer_id == null || $developer_id == false ||
        $skill == null) {
    $error = "Invalid skill data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO skill
                 (skill, developerID)
              VALUES
                 (:skill, :developer)';
    $statement = $db->prepare($query);
    $statement->bindValue(':skill', $skill);
    $statement->bindValue(':developer', $developer_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('admin.php');
}
?>