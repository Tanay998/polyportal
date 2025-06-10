<?php include("conn.php");
 include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ESTC POLYTECHNIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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
  <a href="record11.php" class="btn btn-primary ml-4" id="back7">BACK</a><br /><br />
  <a href="#" onclick="printpage()" style="text-decoration:none;" id="print7"><i class="fas fa-print" style="float:right;"></i></a>
    <h1 class="text-primary text-uppercase text-center">YEAR WISE RECORD</h1>
    <!--<div class="d-flex justify-content-end"> modal button start ----->
        <!-- Button to Open the Modal
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add Fee</button>
    </div> modal button end ------><br/><br/>
    <h2 class="text-danger ml-4">Students Records</h2>
    <select class="form-control" placeholder="Enter Branch name" name="course" id="course" onchange="readRecords();">
      <option value="">******* Select Course ***********</option>
      <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
      <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
    </select><br /><br />
    <select class="form-control" placeholder="Enter Branch name" name="myInput" id="myInput" onchange="readRecords();">
      <option value="">******* Select Admission Session Year ***********</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select><br /><br />
    <select class="form-control" name="fyear" id="fyear" onchange="readRecords();">
      <option value="" selected>************ Select Year**************</option>
      <option value="2020-21">2020-21</option>
      <option value="2021-22">2021-22</option>
      <option value="2022-23">2022-23</option>
      <option value="2023-24">2023-24</option>
      <option value="2024-25">2024-25</option>
      <option value="2025-26">2025-26</option>
      <option value="2026-27">2026-27</option>
      <option value="2027-28">2027-28</option>
      <option value="2028-29">2028-29</option>
      <option value="2029-30">2029-30</option>
      <option value="2030-31">2030-31</option>
      <option value="2031-32">2031-32</option>
      <option value="2032-33">2032-33</option>
      <option value="2033-34">2033-34</option>
      <option value="2034-35">2034-35</option>
      <option value="2035-36">2035-36</option>
      <option value="2036-37">2036-37</option>
      <option value="2037-38">2037-38</option>
      <option value="2038-39">2038-39</option>
      <option value="2039-40">2039-40</option>
      <option value="2040-41">2040-41</option>
      <option value="2041-42">2041-42</option>
      <option value="2042-43">2042-43</option>
      <option value="2043-44">2043-44</option>
      <option value="2044-45">2044-45</option>
      <option value="2045-46">2045-46</option>
      <option value="2046-47">2046-47</option>
      <option value="2047-48">2047-48</option>
      <option value="2048-49">2048-49</option>
      <option value="2049-50">2049-50</option>
    </select>

    <!--<select class="form-control" name="finy" id="finy" onchange="readRecords();">
                         <option value=" " selected>*********** Select financial Year ****************</option>
                        <option>
                        ?>
                      </select><br /><br />-->
      <!--<select class="form-control" name="sem" id="sem" onchange="readRecords();">
                          <option value="selectSem" selected>******* select semester **********</option>
                          <option value="sem1">sem1</option>
                          <option value="sem2">sem2</option>
                          <option value="sem3">sem3</option>
                          <option value="sem4">sem4</option>
                          <option value="sem5">sem5</option>
                          <option value="sem6">sem6</option>
      </select>--><br /><br />
    <div id="records_contant">
    </div>

    <!--------- modal start ---------->

      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fee Installment Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="form-group"> <!------------ form start -------->
        <select class="form-control" name="finyt" id="finyt">
                         <option value="" selected>*********** Select financial Year ****************</option>
                         <?php
                            $sql="select * from year";
                            $query=mysqli_query($db,$sql);
                            while ($result=mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $result['Year']; ?>"><?php echo $result['Year']; ?></option>
                        <?php
                          }
                        ?>
                      </select>
                      

        </div><!----------------- form group end ---------->
        


        <div class="form-group"> <!------------ form group start ----------------->
            
            <label for="StudentName">StudentName</label>
            <input type="text" name="StudentName" id="StudentName" class="form-control" placeholder="Student Name" />
        
          </div><!----------------- form group end ---------------------------------->
        
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="FatherName">FatherName</label>
            <input type="text" name="FatherName" id="FatherName" class="form-control" placeholder="Father Name" />
          
          </div><!----------------- form group end --------------------------------> 
          
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="RegistrationNo">RegistrationNo</label>
            <input type="text" name="RegistrationNo" id="RegistrationNo" class="form-control" placeholder="Registration No" onkeyup="getdata()" />
          
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
            <p class="form-label text-center bg-dark p-3 rounded text-white shadow">First Year</p>
            
            <label for="FirstInstallement">First Installement</label>
            <input type="text" name="FirstInstallement" id="FirstInstallement" class="form-control" placeholder="First Installement" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->  
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="Date1">Date</label>
            <input type="date" name="Date1" id="Date1" class="form-control" />
          
          </div><!------------------------ form group end------------------------> 
          
          <div class="form-group"> <!--------------- form group start -------------->
            <label for="SecondInstallement">Second Installement</label>
            <input type="text" name="SecondInstallement" id="SecondInstallement" class="form-control" placeholder="Second Installement" onkeyup="feetotals()" />

          </div><!--------------------- form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="Date2">Date</label>
            <input type="date" name="Date2" id="Date2" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount1">Total Amount</label>
            <input type="text" name="TotalAmount1" id="TotalAmount1" class="form-control" onkeyup="feetotals()" />

        </div><!----------------- form group end ---------------------------------->

        <div class="form-group"> <!-------------- form group start ----------------->
        <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Second Year</p>
          <label for="ThirdInstallement">Third Installement</label>
          <input type="text" name="ThirdInstallement" id="ThirdInstallement" class="form-control" placeholder="Third Installment" onkeyup="feetotals()" />
      
        </div><!------ form group end ----------------->

        <div class="form-group"><!--------------- form group start ------------->
          <label for="Date3">Date</label>
          <input type="date" name="Date3" id="Date3" class="form-control" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="FourthInstallement">Fourth Installement</label>
          <input type="text" name="FourthInstallement" id="FourthInstallement" class="form-control" placeholder="Fourth Installement" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="Date4">Date</label>
          <input type="date" name="Date4" id="Date4" class="form-control" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="TotalAmount2">Total Amount</label>
          <input type="text" name="TotalAmount2" id="TotalAmount2" class="form-control" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
        <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Third Year</p>
          <label for="FifthInstallement">Fifth Installement</label>
          <input type="text" name="FifthInstallement" id="FifthInstallement" class="form-control" placeholder="Fifth Installement" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="Date5">Date</label>
          <input type="date" name="Date5" id="Date5" class="form-control" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="SixthInstallement">Sixth Installement</label>
          <input type="text" name="SixthInstallement" id="SixthInstallement" class="form-control" placeholder="Sixth Installement" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="Date6">Date</label>
          <input type="date" name="Date6" id="Date6" class="form-control" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="TotalAmount3">Total Amount</label>
          <input type="text" name="TotalAmount3" id="TotalAmount3" class="form-control" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 

        <div class="form-group"><!--------------- form group start ------------->
          <label for="GrandTotal">Grand Total</label>
          <input type="text" name="GrandTotal" id="GrandTotal" class="form-control" onkeyup="feetotals()" />

        </div> <!------------------ form group end ---------------------------> 
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
        <h4 class="modal-title">Fee Installment Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group"> <!------------ form group start ----------------->
            
            <label for="upd_StudentName">StudentName</label>
            <input type="text" name="upd_StudentName" id="upd_StudentName"class="form-control" placeholder="Student Name" />
        
          </div><!----------------- form group end ---------------------------------->
        
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="upd_FatherName">FatherName</label>
            <input type="text" name="upd_FatherName" id="upd_FatherName" class="form-control" placeholder="Father Name" />
          
          </div><!----------------- form group end --------------------------------> 
          
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="upd_RegistrationNo">Registration No</label>
            <input type="text" name="upd_RegistrationNo" id="upd_RegistrationNo" class="form-control" placeholder="RegistrationNo" />
          
          </div><!----------------- form group end --------------------------------> 

          <div class="form-group"> <!------------ form group---------------------->
            
            <label for="upd_Branch">Branch</label>
            <select name="upd_Branch" id="upd_Branch" class="form-control">
              <option value="" selected>******** Select Branch **********</option>
              <option value="ElectricalEngineering">Electrical Engineering</option>
              <option value="MechanicalEngineering">MechanicalEngineering</option>
            </select>
          
          </div><!----------------- form group end--------------------->

          <div class="form-group"> <!------------ form group---------------->
            
            <label for="upd_Semester">Semester</label>
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
            
            <label for="upd_FirstInstallement">FirstInstallement</label>
            <input type="text" name="upd_FirstInstallement" id="upd_FirstInstallement" class="form-control" placeholder="First Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end-------------------------->  
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date1">Date</label>
            <input type="date" name="upd_Date1" id="upd_Date1" class="form-control" />
          
          </div><!------------------------ form group end------------------------> 
          
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_SecondInstallement">Second Installement</label>
            <input type="text" name="upd_SecondInstallement" id="upd_SecondInstallement" class="form-control" placholder="Second Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date2"> Date</label>
            <input type="date" name="upd_Date2" id="upd_Date2" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  


          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount1">Total Amount</label>
            <input type="text" name="upd_TotalAmount1" id="upd_TotalAmount1" class="form-control" placeholder="Total Amount" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_ThirdInstallement">Third Installement</label>
            <input type="text" name="upd_ThirdInstallement" id="upd_ThirdInstallement" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date3">Date</label>
            <input type="date" name="upd_Date3" id="upd_Date3" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_FourthInstallement">Fourth Installement</label>
            <input type="text" name="upd_FourthInstallement" id="upd_FourthInstallement" class="form-control" placeholder="Fourth Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date4">Date</label>
            <input type="date" name="upd_Date4" id="upd_Date4" class="form-control" />
          
          </div><!------------------------ form group end------------------------>
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount2">Total Amount</label>
            <input type="text" name="upd_TotalAmount2" id="upd_TotalAmount2" class="form-control" onkeyup="upd_feetotals()" />

        </div><!----------------- form group end ---------------------------------->

        <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_FifthInstallement">Fifth Installement</label>
            <input type="text" name="upd_FifthInstallement" id="upd_FifthInstallement" class="form-control" placeholder="Fifth Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date5">Date</label>
            <input type="date" name="upd_Date5" id="upd_Date5" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_SixthInstallement">Sixth Installement</label>
            <input type="text" name="upd_SixthInstallement" id="upd_SixthInstallement" class="form-control" placeholder="Sixth Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date6">Date</label>
            <input type="date" name="upd_Date6" id="upd_Date6" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount3">Total Amount</label>
            <input type="text" name="upd_TotlAmount3" id="upd_TotalAmount3" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_GrandTotal">Grand Total</label>
            <input type="text" name="upd_GrandTotal" id="upd_GrandTotal" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>
      </div>

      <!-- Modal footer -->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateuserdetail()">UPDATE</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="hidden_user_id" id="hidden_user_id"  />
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
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
          document.getElementById("TotalAmount1").value=parseInt(document.getElementById("FirstInstallement").value)+parseInt(document.getElementById("SecondInstallement").value);
          document.getElementById("TotalAmount2").value=parseInt(document.getElementById("ThirdInstallement").value)+parseInt(document.getElementById("FourthInstallement").value);
          document.getElementById("TotalAmount3").value=parseInt(document.getElementById("FifthInstallement").value)+parseInt(document.getElementById("SixthInstallement").value);
          document.getElementById("GrandTotal").value=parseInt(document.getElementById("TotalAmount1").value) + parseInt(document.getElementById("TotalAmount2").value) + parseInt(document.getElementById("TotalAmount3").value);
      }

      function upd_feetotals() {
        document.getElementById("upd_TotalAmount1").value=parseInt(document.getElementById("upd_FirstInstallement").value)+parseInt(document.getElementById("upd_SecondInstallement").value);
          document.getElementById("upd_TotalAmount2").value=parseInt(document.getElementById("upd_ThirdInstallement").value)+parseInt(document.getElementById("upd_FourthInstallement").value);
          document.getElementById("upd_TotalAmount3").value=parseInt(document.getElementById("upd_FifthInstallement").value)+parseInt(document.getElementById("upd_SixthInstallement").value);
          document.getElementById("upd_GrandTotal").value=parseInt(document.getElementById("upd_TotalAmount1").value) + parseInt(document.getElementById("upd_TotalAmount2").value) + parseInt(document.getElementById("upd_TotalAmount3").value);
      }
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
        readRecords();
      });
      
      function readRecords() {
        var readrecord = "readrecord";
        var course = $('#course').val();
        var myInput = $('#myInput').val();
        var fyear = $('#fyear').val();
        $.ajax({
          url :"feeinfo22.php",
          type : "POST",
          data : { readrecord : readrecord,
                   course : course,
                  myInput : myInput,
                  fyear : fyear,
                },
          success : function(data,status){
              $('#records_contant').html(data);
          }
        });
      }

      function addRecord(){
        var Year = $('#finyt').val();
        var StudentName = $('#StudentName').val();
        var FatherName = $('#FatherName').val();
        var RegistrationNo = $('#RegistrationNo').val();
        var Branch = $('#Branch').val();
        var Semester = $('#Semester').val();
        var FirstInstallement = $('#FirstInstallement').val();
        var Date1 = $('#Date1').val();
        var SecondInstallement =$('#SecondInstallement').val();
        var Date2 = $('#Date2').val();
        var TotalAmount1 = $('#TotalAmount1').val();
        var ThirdInstallement =$('#ThirdInstallement').val();
        var Date3 = $('#Date3').val();
        var FourthInstallement = $('#FourthInstallement').val();
        var Date4 = $('#Date4').val();
        var TotalAmount2 = $('#TotalAmount2').val();
        var FifthInstallement = $('#FifthInstallement').val();
        var Date5 = $('#Date5').val();
        var SixthInstallement = $('#SixthInstallement').val();
        var Date6 = $('#Date6').val();
        var TotalAmount3 = $('#TotalAmount3').val();
        var GrandTotal = $('#GrandTotal').val();
        $.ajax({
          url:"feeinfo1.php",
          type:'POST',
          data:{ 
            Year :Year,
            StudentName : StudentName ,
            FatherName : FatherName,
            RegistrationNo : RegistrationNo,
            Branch : Branch,
            Semester : Semester,
            FirstInstallement : FirstInstallement,
            Date1 : Date1,
            SecondInstallement : SecondInstallement,
            Date2 : Date2,
            TotalAmount1 : TotalAmount1,
            ThirdInstallement : ThirdInstallement,
            Date3 : Date3,
            FourthInstallement:FourthInstallement,
            Date4 : Date4,
            TotalAmount2 : TotalAmount2,
            FifthInstallement :FifthInstallement,
            Date5 : Date5,
            SixthInstallement :SixthInstallement,
            Date6 : Date6,
            TotalAmount3 : TotalAmount3,
            GrandTotal : GrandTotal
          },
          success: function(data,status){
              readRecords();
          }
        });
      }


      ///// delete record

      function DeleteUser(deleteid){
          var conf = prompt("Enter Password to delete the user record");
          if(conf=="estc@12345"){
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
        pass=prompt('Enter Password');
        if(pass=="estc@1234"){
          $('#hidden_user_id').val(id);
          $.post("feeinfo22.php",{
              id:id
            },function(data,status){
                var user = JSON.parse(data);
                $('#upd_StudentName').val(user.StudentName);
                $('#upd_FatherName').val(user.FatherName);
                $('#upd_RegistrationNo').val(user.RegistrationNo);
                $('#upd_Branch').val(user.Branch);
                $('#upd_Semester').val(user.Semester);
                $('#upd_FirstInstallement').val(user.FirstInstallement);
                $('#upd_Date1').val(user.Date1);
                $('#upd_SecondInstallement').val(user.SecondInstallement);
                $('#upd_Date2').val(user.Date2);
                $('#upd_TotalAmount1').val(user.TotalAmount1);
                $('#upd_ThirdInstallement').val(user.ThirdInstallement);
                $('#upd_Date3').val(user.Date3);
                $('#upd_FourthInstallement').val(user.FourthInstallement);
                $('#upd_Date4').val(user.Date4);
                $('#upd_TotalAmount2').val(user.TotalAmount2);
                $('#upd_FifthInstallement').val(user.FifthInstallement);
                $('#upd_Date5').val(user.Date5);
                $('#upd_SixthInstallement').val(user.SixthInstallement);
                $('#upd_Date6').val(user.Date6);
                $('#upd_TotalAmount3').val(user.TotalAmount3);
                $('#upd_GrandTotal').val(user.GrandTotal);
            }
          );
            $('#update_user_Modal').modal("toggle");
         
      }}

      function updateuserdetail(){
        var Yearupd = $('#upd_finyt').val();
        var StudentNameupd = $('#upd_StudentName').val();
        var FatherNameupd = $('#upd_FatherName').val();
        var RegistrationNoupd = $('#upd_RegistrationNo').val();
        var Branchupd = $('#upd_Branch').val();
        var Semesterupd = $('#upd_Semester').val();
        var FirstInstallementupd = $('#upd_FirstInstallement').val();
        var Date1upd = $('#upd_Date1').val();
        var SecondInstallementupd = $('#upd_SecondInstallement').val();
        var Date2upd = $('#upd_Date2').val();
        var TotalAmount1upd = $('#upd_TotalAmount1upd').val();
        var ThirdInstallementupd = $('#upd_ThirdInstallement').val();
        var Date3upd = $('#upd_Date3').val();
        var FourthInstallementupd = $('#upd_FourthInstallement').val();
        var Date4upd = $('#upd_Date4').val();
        var TotalAmount2upd = $('#upd_TotalAmount2').val();
        var FifthInstallementupd = $('#upd_FifthInstallement').val();
        var Date5upd = $('#upd_Date5').val();
        var SixthInstallementupd = $('#upd_SixthInstallement').val();
        var Date6upd = $('#upd_Date6').val();
        var TotalAmount3upd = $('#upd_TotalAmount3').val();
        var GrandTotalupd = $('#upd_GrandTotal').val();

        var hidden_user_idupd = $('#hidden_user_id').val();
        $.post("feeinfo1.php",{ 
            hidden_user_idupd:hidden_user_idupd,
            Yearupd : Yearupd,
            StudentNameupd:StudentNameupd,
            FatherNameupd:FatherNameupd,
            RegistrationNoupd:RegistrationNoupd,
            Branchupd:Branchupd,
            Semesterupd:Semesterupd,
            FirstInstallementupd:FirstInstallementupd,
            Date1upd:Date1upd,
            SecondInstallementupd:SecondInstallementupd,
            Date2upd:Date2upd,
            TotalAmount1upd:TotalAmount1upd,
            ThirdInstallementupd:ThirdInstallementupd,
            Date3upd:Date3upd,
            FourthInstallementupd:FourthInstallementupd,
            Date4upd:Date4upd,
            TotalAmount2upd:TotalAmount2upd,
            FifthInstallementupd:FifthInstallementupd,
            Date5upd:Date5upd,
            SixthInstallementupd:SixthInstallementupd,
            Date6upd:Date6upd,
            TotalAmount3upd:TotalAmount3upd,
            GrandTotalupd:GrandTotalupd
         },
         function(data,status){
          $('#update_user_Modal').modal("hide");
          readRecords();
         }

        );
      }
    </script>
    
</body>
</html>