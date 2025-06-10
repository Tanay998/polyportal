<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('conn.php') 


?>
<?php 
                            
                            $query1="SELECT * FROM `record`";
                            $q1=mysqli_query($db,$query1) or die(mysqli_error($db));
                            while($result2=mysqli_fetch_array($q1)){
                           ?>
                           <td rowspan="3"style="text-align:left;"><img class="img-responsive ml-5" src="<?php echo $result2['Profile Picture'] ?>" width="150px" height="150px" alt="image not display"/></td>
                           <?php 
                            }
                           ?>
</body>
</html>
