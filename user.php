<?php
if (isset($_GET['name']) && isset($_GET['sirname']) && isset($_GET['number'])) {
    $name = $_GET['name'];
    $sirname = $_GET['sirname'];
    $number = $_GET['number'];
    
    // Now you can use $name, $sirname, and $number to display the details or perform any other actions.
    
    echo "Name: " . $name . "<br>";
    echo "Sirname: " . $sirname . "<br>";
    echo "Number: " . $number . "<br>";
} else {
    echo "No data received.";
}
?>
