<?php 
    include 'connection.php';
    $id = $_GET['id'];
    $deletequery = "delete from student where id = $id ";
    $query = mysqli_query($con,$deletequery);
    header('location: display.php');

    if($query){
    ?>
        <script>
            alert("Deleted successfully");
        </script>
    <?php
    }else {
        ?>
            <script>
                alert("Not Deleted");
            </script>
        <?php
    }
?>