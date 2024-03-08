<?php
session_start();

include "db_connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        echo '<script>alert("Username is required");</script>';
        header("Location: http://localhost/CST5/FinalProject/login.html");
        exit();

    } else if (empty($pass)) {

        $message = "Password is required";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: http://localhost/CST5/FinalProject/login.php");
        exit();

    } else {

        $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo '<script>alert("Logged in!");</script>';
                $_SESSION['username'] = $row['username'];
                header("Location: http://localhost/CST5/FinalProject/index.php");

                exit();

            } else {

                echo '<script>alert("Incorrect Username or Password");</script>';
                header("Location: http://localhost/CST5/FinalProject/login.html?error=Incorect User name or password");


            }

        } else {

            echo '<script>alert("Incorrect Username or Password");</script>';
            header("Location: http://localhost/CST5/FinalProject/login.html?error=Incorect User name or password");


        }

    }

} else {

    header("Location: http://localhost/CST5/FinalProject/index.html");

    exit();

}

?>

