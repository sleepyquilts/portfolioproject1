<?php
// Get the education data
$developer_id = filter_input(INPUT_POST, 'developerID', FILTER_VALIDATE_INT);
$school = filter_input(INPUT_POST, 'school');
$major = filter_input(INPUT_POST, 'major');

// Validate inputs
if ($developer_id == null || $developer_id == false ||
        $school == null) {
    $error = "Invalid skill data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the edu to the database  
    $query = 'INSERT INTO education
                 (school, major, developerID)
              VALUES
                 (:school, :major, :developer)';
    $statement = $db->prepare($query);
    $statement->bindValue(':school', $school);
        $statement->bindValue(':major', $major);
    $statement->bindValue(':developer', $developer_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Index page
    include('index.php');
}
?>