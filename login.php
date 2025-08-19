<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['eml'];
        $password = $_POST['pass'];

        $sql = "select * from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: welcom.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid email or password!!")
                    </script>';
        }     
    }
    ?>
    