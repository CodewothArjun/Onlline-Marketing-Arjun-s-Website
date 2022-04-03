<?php
session_start();
include_once("config.php");
?>
<link rel="stylesheet" href="css/update.css"><br>
<div class="desc">
    <label>Users Details</label>
</div>
<table border="1px" width="100%">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>OPTIONS</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT id,name,email,address FROM `mywebsite`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <button class="del"><a href="delete.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" name="delete">Delete</a></button>
                        <button type="submit" class="edit"> <a href="edit.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" name="edit">Update</a></button>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table><br><br>


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

<!-- back button -->
<button type="submit" name="submit" class="back"> <a href="welcome.php">Go To Back</a></button>