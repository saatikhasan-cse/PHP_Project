<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Form</title>
</head>
<body>

    <h2>Login Form</h2>

    <form method="POST">
        Username:
        <input type="text" name="username" required>
        <br><br>

        Password:
        <input type="password" name="password" required>
        <br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "atik" && $password == "1234") {
            echo "<h3>Login Successful!</h3>";
        } else {
            echo "<h3>Invalid Username or Password!</h3>";
        }
    }
    ?>

</body>
</html>