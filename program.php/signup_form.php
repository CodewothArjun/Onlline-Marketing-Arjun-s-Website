<?php session_start(); ?>
<?php include_once 'config.php'; ?>

<link rel="stylesheet" href="css/signup.css">
<form action="signup.php" method="POST">
    <div class="signup">
        <h2>Welcome to Digital Marketing</h2>
        <h4>From here you can register new customer.</h4>

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name ">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Your Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password.." required>

        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword" placeholder="Cpassword.." required>

        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter Your Address ">

        <input type="submit" name="signup" value="Register new user">


    </div>
</form>

