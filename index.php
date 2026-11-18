<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="\Web_Programming(PHP)\result.php" method="POST">

        Name:
        <input type="text" name="name" required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        Department:
        <input type="text" name="department" required>
        <br><br>

        Student ID:
        <input type="text" name="student_id" required>
        <br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>