<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" name="t1" id="t1" style="width:45px;border:none;border-radius:4px;" disabled
                            <?php 
                                
                                $pname=$_GET['pname'];
                                echo $pname;
                                $psem=$_GET['psem'];
                                if($psem=="Sem1" || $psem=="Sem2"){
                                $query = "SELECT * FROM `record1` WHERE `First Name`='$pname' AND `Semester`='$psem'";
                                $q=mysqli_query($db,$query) or die(mysqli_error($db));
                                while($result=mysqli_fetch_array($q)){
                            ?>
                            value="<?php echo $result['FromYear']?>">
                           से <span class="ml-3">20 </span>
                        <input type="text" name="t2" id="t2" style="width:45px;border:none;border-radius:4px;" disabled
                                value="<?php echo $result['ToYear']?>">
                    </p>
                    <table class="table-borderless table-sm table-responsive">
                   <tbody class="table-borderless">
                       <tr class="table-bordered">
                        <td style="width:15%;"><label for="Jeep" class="mt-2 text-dark" style="font-size:14px;">जीप रैंक (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP RANK (FIRST YEAR / FOR  CANDIDATE)</label></td>
                        <td style="width:10%;"><?php echo $result['JeepRank'];    ?></td>
                        <td style="width:18%;"> <label for="Admission" class="text-dark">Admission No - ESTC / POLY /</label><?php echo $result['AdmissionNo1']; ?>/ <?php echo $result['AdmissionNo2']; ?> / <?php echo $result['RegNo']; ?></td>
                       </tr>
                       <tr class="table-bordered">
                           <td style="width:15%;"><label for="Roll" class="mt-2 text-dark" style="font-size:14px;">जीप अनुक्रमांक  (प्रथम वर्ष  के छात्र / छात्रा हेतु )<br/>JEEP ROLL (FIRST YEAR / FOR  CANDIDATE)</label></td>
                           <td><?php echo $result['JeepRollNo']; ?></td>
                           <td rowspan="3"style="text-align:left;"><img class="img-responsive ml-5" src="<?php echo $result['Profile Picture'] ?>" width="150px" height="150px" alt="image not display"/></td>
                           
                       </tr>
                                </table>
                                <?php

                                    }
                                    }  ////// if block end /////////////////
                ?>   
</body>
</html>