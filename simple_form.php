<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form method="POST">
        Name:
        <input type="text" name="name" required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h3>Student Information</h3>";
        echo "Name: $name <br>";
        echo "Email: $email";
    }
    ?>

</body>
</html>