<?php session_start(); ?>

<link rel="stylesheet" href="css/index.css">


<form method="POST">
    <div class="loig">
        <h2>Welcome to Digital Marketing</h2>
        <h4>login here using your email and password</h4>

        <label for="name">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email"><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password.."><br><br>

        <input type="submit" name="login" value="Login"><br><br><br>

        <!-- <input type="submit" id="help" name="help" value="Help"> -->
        <!-- <input type="submit" id="reset" name="reset" value="Forget Password"> -->

        <label for="sign_up" class="forget">
            Forget Your Password No Worry !
            <a href="forgetpass.php"><span class="fas fa-user"></span>Click Here</a>
        </label>

    </div>
</form>



<!-- checking the email and password -->

<!-- alerting -->
<div class="log">
    <?php
    include_once 'config.php';

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        // sql to login 
        $sql = "SELECT * FROM mywebsite WHERE email = '$email' and password = '$password'";
        $store = $conn->query($sql);
        if ($store->num_rows) {

            $_SESSION['login'] = True;
            header('Location:welcome.php');
            // or die();
            exit();
        } else {
            echo "Error for loging, Please try again" . $conn->error;
        }
    }


    ?>

</div>