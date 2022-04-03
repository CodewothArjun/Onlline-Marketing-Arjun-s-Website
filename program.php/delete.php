<?php
include_once("config.php");

$id = $_GET['id'];
$name = $_GET['name'];

?>
<link rel="stylesheet" href="css/delete.css">
<div class="delet">
    <h1> Do You Want To Delete The User <?php echo $name; ?> ? </h1>
    <button>
        <h2><a href="deleteconfirm.php?id=<?php echo $id; ?>">Yes</a></h2>
    </button> <button>
        <h2> <a href="update.php">Cancel</a></h2>
    </button>
</div>