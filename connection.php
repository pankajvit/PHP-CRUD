<?php
    $username="root";
    $password="";
    $server='localhost';
    $db='curdyoutube';
    $con=mysqli_connect($server,$username,$password,$db);
    
    if($db){
        ?>
            <script>
                alert('Connection successful');
            </script>
        <?php
    }else{
    ?>
        <script>
            alert('No connection');
        </script>
    <?php
    }
?>