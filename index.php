<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
</head>
<body>
    <form action="#" method="POST">
        <label>Name :</label>
        <input type="text" name="name" placeholder="Enter your name">
        <label>Mobile :</label>
        <input type="text" name="mobile" placeholder="Enter your mobile no.">
        <label>Degree :</label>
        <input type="text" name="degree" placeholder="Enter your qualification">
        <label>Address</label>
        <input type="text" name="address" placeholder="Enter your address">
        <input type="submit" name="submit" value="Submit">
    </form><br><br>
    <a href="display.php" alt="">Check Data</a>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $degree=$_POST['degree'];
        $address=$_POST['address'];
        $insertquery=" insert into student(name,mobile,degree,address)value('$name','$mobile','$degree','$address') ";
        $res=mysqli_query($con,$insertquery);

        if($res){
        ?>
            <script>
                alert("data inserted properly");
            </script>
        <?php
        }else{
        ?>
            <script>
                alert("data not inserted properly");
            </script>
        <?php
        }
    }
?>