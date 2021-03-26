<?php
if (isset($_POST["login"]) && !empty($_POST["login"])) {

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Easy set variables
    */

    // DB table to use
    $table = 'coach';

    // Table's primary key
    $primaryKey = 'id';

    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case simple
    // indexes
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'name',  'dt' => 1 ),
        array( 'db' => 'rnum', 'dt' => 2 ),
        array( 'db' => 'age', 'dt' => 3 ),       
    );

    // SQL server connection information
    $sql_details = array(
        'user' => 'root',
        'pass' => '',
        'db'   => 'test',
        'host' => 'localhost'
    );


    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * If you just want to use the basic configuration for DataTables with PHP
    * server-side, there is no need to edit below this line.
    */

    require( 'ssp.class.php' );

    echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );


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
                    window.location.href="http://localhost:8012/testcode/category/motogp";
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
