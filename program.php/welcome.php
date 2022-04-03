<?php session_start();

if (!$_SESSION['login']) {
    header('location:index.php');
}

?>
<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/welcome.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- left side -->
    <div class="left">
        <ul class="unl">
            <br>
            <li class="liss"><a href="" class="active"> Home </a></li><br>
            <li class="liss"><a href="myprofile.php">My Profile</a></li><br>
            <hr>
            <li class="liss"><a href="signup_form.php">Register New User</a></li><br>
            <li class="liss"><a href="update.php">My Network</a></li><br>
            <hr>
            <li class="liss"><a href="contact.php">Contact Us</a></li><br>
            <li class="liss"><a href="aboutus.php">About us </a></li><br>
            <hr>
            <li class="liss"><a href="logout.php">Logout</a></li><br>
        </ul>
    </div>


    <!-- start right side -->
    <div class="right">

        <!-- sessioning -->
        <div class="alert">
            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                echo '<h2>' . $_SESSION['success'] . '</h2>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2>' . $_SESSION['status'] . '</h2>';
                unset($_SESSION['status']);
            }
            ?>
        </div>

        <form action="search.php" class="example" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="submit"><i class="fa fa-search"> </i> </button>
        </form>



        <!-- end of right side -->
    </div>

</body>

</html>