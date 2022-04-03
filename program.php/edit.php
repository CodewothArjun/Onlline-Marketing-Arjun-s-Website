<?php session_start(); ?>
<?php include_once 'config.php'; ?>

<link rel="stylesheet" href="css/signup.css">

<form action="" method="POST">
    <div class="signup">
        <h2>Welcome to Update Page</h2>
        <h4>From here you can update your information.</h4>

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

        <input type="submit" name="edit" value="Update">

    </div>
</form>

<?php
if (isset($_POST['edit'])) {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];

    if ($password === $cpassword) {
        $q = "UPDATE `mywebsite` SET id='$id',name='$name',email='$email',password='$password',password='$cpassword',address='$address' WHERE id='$id'";
        $query = mysqli_query($conn, $q);

        if ($query) {
            $_SESSION['success'] = "Updated Successfully";
            header('location:update.php');
        } else {
            $_SESSION['status'] = "Updated Successfully";
            header('location:update.php');
        }
    } else {
        $_SESSION['status'] = "Password and confirm password does't match";
        header('location:update.php');
    }
}
?>