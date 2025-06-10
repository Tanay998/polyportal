<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ESTC POLYTECHNIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
</style>
</head>
<body>
  <div class="container mt-4"> <!------ container start ----------------->
  <a href="feeshow.php" class="btn btn-primary ml-4" id="back7">BACK</a><br /><br />
  <a href="#" onclick="printpage()" style="text-decoration:none;" id="print7"><i class="fas fa-print" style="float:right;"></i></a>
    <h1 class="text-primary text-uppercase text-center">First Installment Record</h1>

    <div class="d-flex justify-content-end"><!--- modal button start ----->
        <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add Record</button>
    </div><!------ modal button end ------>
    <h2 class="text-danger ml-4">All Records</h2>
    <div id="records_contant">
    </div>

    <!--------- modal start ---------->

      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">First Installment Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group"> <!------------ form group start ----------------->
            
            <label for="StudentName">StudentName</label>
            <input type="text" name="StudentName" id="StudentName"class="form-control" placeholder="Student Name" />
        
          </div><!----------------- form group end ---------------------------------->
        
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="FatherName">FatherName</label>
            <input type="text" name="FatherName" id="FatherName" class="form-control" placeholder="Father Name" />
          
          </div><!----------------- form group end -------------------------------->    
           
          <div class="form-group"> <!------------ form group------------>
            
            <label for="RegistrationNo">RegistrationNo</label>
            <input type="text" name="RegistrationNo" id="RegistrationNo" class="form-control" placeholder="Registration No" />
          
          </div><!----------------- form group end -------------------------------->  

          <div class="form-group"> <!------------ form group---------------------->
            
            <label for="Branch">Branch</label>
            <select name="Branch" id="Branch" class="form-control">
              <option value="" selected>******** Select Branch **********</option>
              <option value="ElectricalEngineering">Electrical Engineering</option>
              <option value="MechanicalEngineering">MechanicalEngineering</option>
            </select>
          
          </div><!----------------- form group end--------------------->

          <div class="form-group"> <!------------ form group---------------->
            
            <label for="Semester">Semester</label>
            <select name="Semester" id="Semester" class="form-control">
              <option value="" selected>******** Select Semester **********</option>
              <option value="Sem1">Sem1</option>
              <option value="Sem2">Sem2</option>
              <option value="Sem3">Sem3</option>
              <option value="Sem4">Sem4</option>
              <option value="Sem5">Sem5</option>
              <option value="Sem6">Sem6</option>
            </select>
          
          </div><!------- form group end-------------------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="FirstInstallement">FirstInstallement</label>
            <input type="text" name="FirstInstallement" id="FirstInstallement" class="form-control" placeholder="First Installement" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="AmountStu1">Amount Payable by Student</label>
            <input type="text" name="AmountStu1" id="AmountStu1" class="form-control" placeholder="Amount Payable by Student" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="AmDate1">Date</label>
            <input type="date" name="AmDate1" id="AmDate1" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="DueDate1">Due Date</label>
            <input type="date" name="DueDate1" id="DueDate1" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="RemainingAmount1">Remaining Amount</label>
            <input type="text" name="RemainingAmount1" id="RemainingAmount1" class="form-control" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end------------------------>
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount1">Total Amount</label>
            <input type="text" name="TotalAmount1" id="TotalAmount1" class="form-control" onkeyup="feetotals()" />

        </div><!----------------- form group end ---------------------------------->
      </div>

      <!-- Modal footer -->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      <!------------ Modal Fooeter End ---------->

    </div>
  </div>
</div>
    <!------------- modal end ---------------->

 <!---------//////////////// Update Modal -----------------------------------------------------/////
 /////////////////////////////////////////////////////////------------------------------------------>
 
 <!--------- modal start ---------->

      <!-- The Modal -->
<div class="modal" id="update_user_Modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">First Installment Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group"> <!------------ form group start ----------------->
            
            <label for="upd_StudentName">upd_StudentName</label>
            <input type="text" name="upd_StudentName" id="upd_StudentName"class="form-control" placeholder="Student Name" />
        
          </div><!----------------- form group end ---------------------------------->
        
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="upd_FatherName">upd_FatherName</label>
            <input type="text" name="upd_FatherName" id="upd_FatherName" class="form-control" placeholder="Father Name" />
          
          </div><!----------------- form group end -------------------------------->    
           
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_RegistrationNo">upd_RegistrationNo</label>
            <input type="text" name="upd_RegistrationNo" id="upd_RegistrationNo" class="form-control" placeholder="Registration No" />
          
          </div><!----------------- form group end -------------------------------->  

          <div class="form-group"> <!------------ form group---------------------->
            
            <label for="upd_Branch">upd_Branch</label>
            <select name="upd_Branch" id="upd_Branch" class="form-control">
              <option value="" selected>******** Select Branch **********</option>
              <option value="ElectricalEngineering">Electrical Engineering</option>
              <option value="MechanicalEngineering">MechanicalEngineering</option>
            </select>
          
          </div><!----------------- form group end--------------------->

          <div class="form-group"> <!------------ form group---------------->
            
            <label for="upd_Semester">upd_Semester</label>
            <select name="upd_Semester" id="upd_Semester" class="form-control">
              <option value="" selected>******** Select Semester **********</option>
              <option value="Sem1">Sem1</option>
              <option value="Sem2">Sem2</option>
              <option value="Sem3">Sem3</option>
              <option value="Sem4">Sem4</option>
              <option value="Sem5">Sem5</option>
              <option value="Sem6">Sem6</option>
            </select>
          
          </div><!------- form group end-------------------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_FirstInstallement">upd_FirstInstallement</label>
            <input type="text" name="upd_FirstInstallement" id="upd_FirstInstallement" class="form-control" placeholder="First Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end-------------------------->  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_AmountStu1">upd_Amount Payable by Student</label>
            <input type="text" name="upd_AmountStu1" id="upd_AmountStu1" class="form-control" placeholder="Amount Payable by Student" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_AmDate1">Date</label>
            <input type="date" name="upd_AmDate1" id="upd_AmDate1" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_DueDate1">upd_Due Date</label>
            <input type="date" name="upd_DueDate1" id="upd_DueDate1" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_RemainingAmount1">upd_Remaining Amount</label>
            <input type="text" name="upd_RemainingAmount1" id="upd_RemainingAmount1" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount1">upd_Total Amount</label>
            <input type="text" name="upd_TotalAmount1" id="upd_TotalAmount1" class="form-control" onkeyup="upd_feetotals()" />

        </div><!----------------- form group end ---------------------------------->
      </div>

      <!-- Modal footer -->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateuserdetail()">UPDATE</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id="hidden_user_id"  />
      </div>

      <!------------ Modal Fooeter End ---------->

    </div>
  </div>
</div>
    <!------------- modal end ---------------->



    <button onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
  </div><!-------- container end ------------------->

  <br/><br/><br/><br/>
  <?php include("footer.php"); ?>
  <script src="js/displaydata.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script type="text/javascript">
      function printpage()
      {
        var BackButton = document.getElementById("back7");
        var PrintOne = document.getElementById("print7");
        BackButton.style.visibility="hidden";
        PrintOne.style.visibility="hidden";
        window.print();
        BackButton.style.visibility="visible";
        PrintOne.style.visibility="visible";
      }

      function feetotals() {
          document.getElementById("RemainingAmount1").value=parseInt(document.getElementById("FirstInstallement").value)-parseInt(document.getElementById("AmountStu1").value);
          document.getElementById("TotalAmount1").value=parseInt(document.getElementById("FirstInstallement").value)-parseInt(document.getElementById("RemainingAmount1").value);
      }

      function upd_feetotals() {
          document.getElementById("upd_RemainingAmount1").value=parseInt(document.getElementById("upd_FirstInstallement").value)-parseInt(document.getElementById("upd_AmountStu1").value);
          document.getElementById("upd_TotalAmount1").value=parseInt(document.getElementById("upd_FirstInstallement").value)-parseInt(document.getElementById("upd_RemainingAmount1").value);
      }
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
        readRecords();
      });
      
      function readRecords() {
        var readrecord = "readrecord";
        $.ajax({
          url :"feeinfo1.php",
          type : "POST",
          data : { readrecord : readrecord },
          success : function(data,status){
              $('#records_contant').html(data);
          }
        });
      }
      function addRecord(){
        var StudentName = $('#StudentName').val();
        var FatherName = $('#FatherName').val();
        var RegistrationNo = $('#RegistrationNo').val();
        var Branch = $('#Branch').val();
        var Semester = $('#Semester').val();
        var FirstInstallement = $('#FirstInstallement').val();
        var AmountStu1 = $('#AmountStu1').val();
        var AmDate1 = $('#AmDate1').val();
        var DueDate1 = $('#DueDate1').val();
        var RemainingAmount1 = $('#RemainingAmount1').val();
        var TotalAmount1 = $('#TotalAmount1').val();
        $.ajax({
          url:"feeinfo1.php",
          type:'POST',
          data:{ StudentName : StudentName ,
            FatherName : FatherName,
            RegistrationNo : RegistrationNo,
            Branch : Branch,
            Semester : Semester,
            FirstInstallement : FirstInstallement,
            AmountStu1 : AmountStu1,
            AmDate1 : AmDate1,
            DueDate1 : DueDate1,
            RemainingAmount1 : RemainingAmount1,
            TotalAmount1 : TotalAmount1
          },
          success: function(data,status){
              readRecords();
          }
        });
      }


      ///// delete record

      function DeleteUser(deleteid){
          var conf = confirm("Are you sure want to delete record");
          if(conf==true){
            $.ajax({
              url : "feeinfo1.php",
              type : "POST",
              data : { deleteid : deleteid},
              success: function(data,status){
                  readRecords();
              }
            });
          }
      }

      function GetUserDetails(id){
          $('#hidden_user_id').val(id);
          $(document).ready(function(){
            jQuery.noConflict();
            $('#update_user_Modal').modal("toggle");
          });
          $.post("feeinfo1.php",{
              id:id
            },function(data,status,xHR){
                var user = JSON.parse(data);
                $('#upd_StudentName').val(user.StudentName);
                $('#upd_FatherName').val(user.FatherName);
                $('#upd_RegistrationNo').val(user.RegistrationNo);
                $('#upd_Branch').val(user.Branch);
                $('#upd_Semester').val(user.Semester);
                $('#upd_FirstInstallement').val(user.FirstInstallement);
                $('#upd_AmountStu1').val(user.AmountStu1);
                $('#upd_AmDate1').val(user.AmDate1);
                $('#upd_DueDate1').val(user.DueDate1);
                $('#upd_RemainingAmount1').val(user.RemainingAmount1);
                $('#upd_TotalAmount1').val(user.TotalAmount1);
            }
          );
         
      }

      function updateuserdetail(){
        var StudentNameupd = $('#upd_StudentName').val();
        var FatherNameupd = $('#upd_FatherName').val();
        var RegistrationNoupd = $('#upd_RegistrationNo').val();
        var Branchupd = $('#upd_Branch').val();
        var Semesterupd = $('#upd_Semester').val();
        var FirstInstallementupd = $('#upd_FirstInstallement').val();
        var AmountStu1upd = $('#upd_AmountStu1').val();
        var AmDate1upd = $('#upd_AmDate1').val();
        var DueDate1upd = $('#upd_DueDate1').val();
        var RemainingAmount1upd = $('#upd_RemainingAmount1').val();
        var TotalAmount1upd = $('#upd_TotalAmount1').val();

        var hidden_user_idupd = $('#hidden_user_id').val();
        $(document).ready(function(){
        $.post("feeinfo1.php",{ 
            hidden_user_idupd:hidden_user_idupd,
            StudentNameupd:StudentNameupd,
            FatherNameupd:FatherNameupd,
            RegistrationNoupd:RegistrationNoupd,
            Branchupd:Branchupd,
            Semesterupd:Semesterupd,
            FirstInstallementupd:FirstInstallementupd,
            AmountStu1upd:AmountStu1upd,
            AmDate1upd:AmDate1upd,
            DueDate1upd:DueDate1upd,
            RemainingAmount1upd:RemainingAmount1upd,
            TotalAmount1upd:TotalAmount1upd
            },
            function(data,status){
          $('#update_user_Modal').modal("hide");
          console.log(data);
          readRecords();
         }
          );
        });
      }
    </script>
</body>
</html>