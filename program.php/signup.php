<?php session_start(); ?>
<?php include_once 'config.php' ?>
<!-- php code start from here -->



<div class="alertt">
    <?php
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $address = $_POST['address'];



        // $query = mysqli_query($conn, "SELECT * FROM 'mywebsite' WHERE email='$email'");
        // if (mysqli_num_rows($query) > 0) {
        //     echo "This Email id already register";
        // } else {


        if ($password === $cpassword) {
            $sql = "INSERT INTO mywebsite (name,email,password,address) VALUES ('$name','$email','$password','$address')";
            $query_run = mysqli_query($conn, $sql);


            if ($query_run) {
                $_SESSION['success'] = "New Customer Registered Successfully";
                header('location:welcome.php');
            } else {
                $_SESSION['status'] = "New Customer Registered Successfully";
                header('location:welcome.php');
            }
        } else {
            $_SESSION['status'] = "Password and confirm password does't match";
            header('location:welcome.php');
        }
    }
    // }

    ?>
</div>