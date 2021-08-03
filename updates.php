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
        <?php
        include 'connection.php';
        $ids = $_GET['id'];

        $showquery = "select * from student where id=$ids";
        $showdata = mysqli_query($con,$showquery);
        $arrdata = mysqli_fetch_array($showdata);
        if(isset($_POST['submit'])){
            $idupdate=$_GET['id'];
            $name=$_POST['name'];
            $mobile=$_POST['mobile'];
            $degree=$_POST['degree'];
            $address=$_POST['address'];
            // $insertquery=" insert into student(name,mobile,degree,address)value('$name','$mobile','$degree','$address') ";
            $query = "update student set id=$idupdate, name='$name', mobile='$mobile', degree='$degree', address='$address' where id=$idupdate";
            $res=mysqli_query($con,$query);

            if($res){
            ?>
            <script>
                alert("data updated properly");
            </script>
            <?php
            }else{
            ?>
            <script>
                alert("data not updated properly");
            </script>
            <?php
            }
        }
        ?>
        <label>Name :</label>
        <input type="text" name="name" value="<?php echo $arrdata['name'];?>" placeholder="Enter your name">
        <label>Mobile :</label>
        <input type="text" name="mobile" value="<?php echo $arrdata['mobile'];?>" placeholder="Enter your mobile no.">
        <label>Degree :</label>
        <input type="text" name="degree" value="<?php echo $arrdata['degree'];?>" placeholder="Enter your qualification">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $arrdata['address'];?>" placeholder="Enter your address">
        <input type="submit" name="submit" value="Update">
    </form><br><br>
    <a href="display.php" alt="">Check Data</a>
</body>
</html>
