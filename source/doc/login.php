<?php
    if(isset($_POST["login"]) && !empty($_POST["login"])){
        $user = $_POST["username"];
        $pass = $_POST["pass"];
        if($user == "admin" && $pass == "motogp"){
            echo '<script type="text/javascript">
                    alert("Login Successful!");
                    window.location.href="http://localhost:8012/testcode/Motogp";
                  </script>';
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Username or Password!');window.location.href='<?php echo base_url(); ?>.Admin';</script>";
        }
    }

?>
