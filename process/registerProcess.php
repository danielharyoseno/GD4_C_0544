<?php
    if (isset($_POST['register'])) {
    include('../db.php');
    
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $membership = $_POST['membership'];
    
    $check=mysqli_query(
        $con,
        "SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($check)>0){
            echo
            '<script>
                alert("Email Sudah Digunakan");
                window.location = "../page/registerPage.php"
            </script>';
        }
    $query = mysqli_query(
        $con,
        "INSERT INTO users(name,email,password,phonenum,membership) 
            VALUES
                ('$name', '$email', '$password', '$phonenum', '$membership')"
            )
             or die(mysqli_error($con));
     if ($query) {
        echo
        '<script>
            alert("Register Success"); 
                window.location = "../index.php"
         </script>';
    } else {
        echo
        '<script>
            alert("Register Failed");
        </script>';
    }
    } else {
        echo
        '<script>
            window.history.back()
                </script>';
    }
?>
