<?php
if (isset($_POST["login"]) && !empty($_POST["login"])) {
    $user = $_POST["username"];
    $pass = $_POST["pass"];

    $servername = "localhost";
    $username = "root";
    $pw = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $pw, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username, pass FROM `test`.`user`;";
    $result = mysqli_query($conn, $sql);

    $log = "0";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["username"] == $user && $row["pass"] == $pass) {
                echo '<script type="text/javascript">
                    alert("Login Successful!");
                    window.location.href="http://localhost:8012/testcode/Motogp";
                  </script>';
            }
            echo "<script type='text/javascript'>alert('Wrong Username or Password!');window.location.href='http://localhost:8012/testcode/Admin';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Wrong Username or Password!');window.location.href='http://localhost:8012/testcode/Admin';</script>";
    }
    $conn->close();

    // if($user == "admin" && $pass == "motogp"){
    //     echo '<script type="text/javascript">
    //             alert("Login Successful!");
    //             window.location.href="http://localhost:8012/testcode/Motogp";
    //           </script>';
    // }
    // else{
    //     echo "<script type='text/javascript'>alert('Wrong Username or Password!');window.location.href='http://localhost:8012/testcode/Admin';</script>";
    // }
}
