<?php
    include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ESTC POLYTECHNIC</title>
    <link rel="stylesheet" href="css/tabstyle.css" />
    <link rel="stylesheet" href="css/boxstyle.css" />
    <style>
         tr:nth-of-type(even) {
background-color: transparent!important;
}
table
{
    border-collapse: collapse;
    border-spacing: 1em;
    
}
    </style>
  </head>
  <body>
  <?php include('header.php') ?>

    
        <div class="container-fluid"><!--- container fluid start --->
        <form method="get">
        </div><!--- container fluid end --->

        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 4px grey;"><!--- container start --->
               <a href="report1.php" class="btn btn-primary" id="back2">BACK</a> <a href="#" onclick="printpage2()" style="text-decoration:none;"><i class="fas fa-print" style="float:right;"></i></a><br/> <br/>
                        <p class="text-center h4 text-secondary">FEE DETAILS</p><br />
                            <?php 
                                
                                $pname=$_GET['pname'];
                                $preg=$_GET['preg'];
                                $query = "SELECT * FROM `feeinformation1` WHERE `StudentName`='$pname' AND `RegistrationNo`='$preg'";
                                $q=mysqli_query($db,$query) or die(mysqli_error($db));
                                while($result=mysqli_fetch_array($q)){
                            ?>
               <table class="table-borderless table-sm table-responsive" style="width:80%;margin-left:12.5%;">
                   <tbody>
                       <tr style="border:2px solid #060606;">
                        <td style="width:15%;border:2px solid #060606;"><label for="Jeep" class="mt-2 text-dark" style="font-size:14px;">STUDENT NAME</label></td>
                        <td style="width:10%;border:2px solid #060606;"><?php echo $result['StudentName'];?></td>
                        <td style="width:15%;border:2px solid #060606;"><label for="RegistrationNo">Registration No</label></td>
                        <td style="width:10%;border:2px solid #060606;"><?php echo $result['RegistrationNo'];?></td>
                       </tr>
                       <tr style="border:2px solid #060606;">
                            <td style="width:18%;border:2px solid #060606;"> <label for="Admission" class="text-dark">Father Name</label></td>
                            <td style="width:18%;border:2px solid #060606;"><?php echo $result['FatherName']; ?></td>
                            <td style="width:18%;border:2px solid #060606;"><label for="Branch">Branch</label></td>
                            <td style="width:18%;border:2px solid #060606;"><?php echo $result['Branch']; ?></td>
                        </tr>
                       
                   </tbody>
              
                    <tbody>
                        <!-------------------------------- First Year Record ----------------------------------------
                        ---------------------------------------------------------------------------------------------
                        ----------------------------------------------------------------------------------------->


                        <tr style="border:2px solid #060606;">
                          <th style="border:2px solid #060606;" colspan="5" class="text-center">First Year Fee Record</th>          
                        </tr>
                        <tr style="border:2px solid #060606;">
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">First Installement</th>
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">Second Installement</th>
                        </tr>
                        <tr style="border:2px solid #060606">
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo1'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date2'] ?></label></td>
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo2'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date29'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                        <td style="border:2px solid #060606;">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee1'] ?></label></td>
                        <td style="border:2px solid #060606;">Student Fund Fee:<label style="font-weight:bold"><?php echo $result['StudentFund1'] ?></label></td>
                        <td style="border:2px solid #060606;" colspan="2" rowspan="3">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee'] ?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                           <td style="border:2px solid #060606;">Security Amount (Refundable):<label style="font-weight:bold"><?php echo $result['SecurityAmount'] ?></label></td>
                           <td style="border:2px solid #060606;">Personality Development Charges (One Time):<label style="font-weight:bold"><?php echo $result['PDc'] ?></label></td>          
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Hostel Charges:<label style="font-weight:bold"><?php echo $result['HostelCharges1'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount19']?></label></td>
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount234']?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="4">Total Amount (First Installement + Second Installement):<label style="font-weight:bold;"><?php echo $result['TotalAmount1'] ?></label></td>
                        </tr>

                        <!---------------------------------------- Second Year Record ----------------------------------------------------
                        ------------------------------------------------------------------------------------------------------------------
                        ------------------------------------------------------------------------------------------------------------------>

                        <tr style="border:2px solid #060606;">
                          <th style="border:2px solid #060606;" colspan="5" class="text-center">Second Year Fee Record</th>          
                        </tr>
                        <tr style="border:2px solid #060606;">
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">Third Installement</th>
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">Fourth Installement</th>
                        </tr>
                        <tr style="border:2px solid #060606">
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo3'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date21'] ?></label></td>
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo4'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date29'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                        <td style="border:2px solid #060606;">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee11'] ?></label></td>
                        <td style="border:2px solid #060606;">Student Fund Fee:<label style="font-weight:bold"><?php echo $result['StudentFund11'] ?></label></td>
                        <td style="border:2px solid #060606;" colspan="2" rowspan="3">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee2'] ?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                                     
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Hostel Charges:<label style="font-weight:bold"><?php echo $result['HostelCharges11'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount25']?></label></td>
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount890']?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="4">Total Amount (Third Installement + Fourth Installement):<label style="font-weight:bold;"><?php echo $result['TotalAmount11'] ?></label></td>
                        </tr>

                        <!----------------------------- Third Year Record ----------------------------------------------------------------------------------------
                        ------------------------------------------------------------------------------------------------------------------------------------------
                        ------------------------------------------------------------------------------------------------------------------------------------------
                        ------------------------------------------------------------------------------------------------------------------------------------------>



                        <tr style="border:2px solid #060606;">
                          <th style="border:2px solid #060606;" colspan="5" class="text-center">Third Year Fee Record</th>          
                        </tr>
                        <tr style="border:2px solid #060606;">
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">Fifth Installement</th>
                           <th style="border:2px solid #060606;text-align:center;" colspan="2">Sixth Installement</th>
                        </tr>
                        <tr style="border:2px solid #060606">
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo5'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date31'] ?></label></td>
                            <td style="border:2px solid #060606;">Receipt No:<label style="font-weight:bold"><?php echo $result['receiptNo6'] ?></label></td>
                            <td style="border:2px solid #060606;">Date:<label style="font-weight:bold"><?php echo $result['Date32'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                        <td style="border:2px solid #060606;">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee31'] ?></label></td>
                        <td style="border:2px solid #060606;">Student Fund Fee:<label style="font-weight:bold"><?php echo $result['StudentFund31'] ?></label></td>
                        <td style="border:2px solid #060606;" colspan="2" rowspan="3">Tution Fee:<label style="font-weight:bold"><?php echo $result['TutionFee3'] ?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                                     
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Hostel Charges:<label style="font-weight:bold"><?php echo $result['HostelCharges31'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount31']?></label></td>
                            <td style="border:2px solid #060606;" colspan="2">Total Amount (in Rs):<label style="font-weight:bold"><?php echo $result['TotalAmount120']?></label></td>        
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="4">Total Amount (in Rs:) (Fifth Installement + Sixth Installement):<label style="font-weight:bold;"><?php echo $result['TotalAmount345'] ?></label></td>
                        </tr>
                        <tr style="border:2px solid #060606;">
                            <td style="border:2px solid #060606;" colspan="4">Grand Total (in Rs):<label style="font-weight:bold;"><?php echo $result['grand'] ?></label></td>
                        </tr>

                    </tbody>
                </table><br /><br />
               <?php

                                    }
                                ?>
        </div><!-----container end -->
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/tabscript.js"></script>-->
    <script src="js/displaydata.js"></script>
    <script type="text/javascript" src="js/gtransapi.js"></script>  
    <script type="text/javascript" src="js/translator.js"></script>
    <script>
        function printpage2()
      {
        var BackButton = document.getElementById("back2");
        BackButton.style.visibility="hidden";
        //document.getElementById("idone").style.visibility="hidden";
        window.print();
        document.getElementById("idone").style.visibility="visible";
        BackButton.style.visibility="visible";
      }
    </script>
    <script>
        function open(){
            window.open(document.location);
        }
    </script>
  </body>

  <?php include('footer.php'); ?>
</html>