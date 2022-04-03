<?php
include_once("config.php");
?>

<link rel="stylesheet" href="css/search.css">
<br>
<!-- <form action="" method="POST">
    Search:
    <input type="text" name="search">
    <button type="submit" name="submit">GO</button>
</form> -->
<br>

<div class="say">
    <?php
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        if (strlen($search) > 0) {
            echo "You are searching for <u><b>" . $search . "</b></u>";
    ?>
</div>
<br>
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
            $sql = "SELECT id,name,email,address FROM `mywebsite` where name like '%$search%' OR email like '%$search%' OR address like '%address%'";
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
</table>
<?php
        } else {
            echo "Please enter a character.";
        }
    }
?>