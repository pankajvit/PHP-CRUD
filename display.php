<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 <thead>
   <tr class="bg-dark text-white text-center">
    <th>ID</th>
    <th> name </th>
    <th> mobile </th>
    <th> degree </th>
    <th> address </th>
    <th colspan="2">Operation</th>
   </tr >
 </thead>
 <?php
 include 'connection.php'; 
 $q = "select * from student ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tbody>
   <tr class="text-center">
    <td> <?php echo $res['id'];  ?> </td>
    <td> <?php echo $res['name'];  ?> </td>
    <td> <?php echo $res['mobile'];  ?> </td>
    <td> <?php echo $res['degree'];  ?> </td>
    <td> <?php echo $res['address'];  ?> </td>
    <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="far fa-edit"></i></a></td>
    <td><a href="" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a></td>
 </tr>
 </tbody>
 <?php 
 }
  ?>
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 $(document).ready(function(){
 $('#tabledata').DataTable();
 })
 $(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();
 });
 </script>
</body>
</html>