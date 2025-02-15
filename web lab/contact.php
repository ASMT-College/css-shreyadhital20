<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $desc = trim($_POST["desc"]);

   
    if (empty($name)) {
        $errors['name'] = "Name must not be empty.";
    } elseif (strlen($name) < 4) {
        $errors['name'] = "Name must be at least 4 characters long.";
    }

  
    if (empty($age)) {
        $errors['age'] = "Age must not be empty.";
    } elseif (!is_numeric($age)) {
        $errors['age'] = "Age must be a valid number.";
    } elseif ($age < 18) {
        $errors['age'] = "Age must be over 18 years.";
    }

   
    if (empty($desc)) {
        $errors['desc'] = "Description is required.";
    }

   
    if (!empty($errors)) {
        foreach ($errors as $field => $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Form submitted successfully!</p>";

    }
}

?>