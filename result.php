<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

    <h2>Student Information</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $department = htmlspecialchars($_POST['department']);
        $student_id = htmlspecialchars($_POST['student_id']);

        echo "Name: " . $name . "<br><br>";
        echo "Email: " . $email . "<br><br>";
        echo "Department: " . $department . "<br><br>";
        echo "Student ID: " . $student_id . "<br><br>";

    } else {
        echo "Please submit the form first.";
    }

    ?>

    <a href="\Web_Programming(PHP)\index.php">Go Back</a>

</body>
</html>