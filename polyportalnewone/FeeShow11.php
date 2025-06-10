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
  <a href="index1.php" class="btn btn-primary ml-4" id="back7">BACK</a><br /><br />
  <a href="#" onclick="printpage()" style="text-decoration:none;" id="print7"><i class="fas fa-print" style="float:right;"></i></a>
    <h1 class="text-primary text-uppercase text-center">Fee Installment Record</h1>
    <div class="d-flex justify-content-end"><!--- modal button start ----->
        <!-- Button to Open the Modal -->
          <!--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add Fee</button>-->
    </div><!------ modal button end ------><br/><br/>
    <h2 class="text-danger ml-4">All Fee Records</h2>
    <select class="form-control" placeholder="Enter Branch name" name="myInput" id="myInput" onchange="readRecords();">
      <option value="">******* Select Branch Name ***********</option>
      <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
      <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
    </select><br /><br />

    <select class="form-control" name="finy" id="finy" onchange="readRecords();">
                         <option value=" " selected>*********** Select financial Year ****************</option>
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
                      </select><br /><br />
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
              <?php 
                $regno=$_GET['regNo'];
                $query="SELECT * FROM `record` WHERE `RegNo`='$regno'";
                $sql=mysqli_query($db,$query);
                while($result=mysqli_fetch_array($sql)){
              ?>
        <div class="form-group"> <!------------ form start -------->
        <select class="form-control" name="finyt" id="finyt">
                         <option value="<?php echo $result['AdmissionNo1'] ?>" selected><?php echo $result['AdmissionNo1'] ?></option>
      <!--<option value="2020-21">2020-21</option>
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
      <option value="2049-50">2049-50</option>-->
                      </select>

        </div><!----------------- form group end ---------->


        <div class="form-group"> <!------------ form group start ----------------->
            
            <label for="StudentName">StudentName</label>
            <input type="text" name="StudentName" id="StudentName" class="form-control text-uppercase" placeholder="Student Name" value="<?php echo $result['First Name'].' '.$result['Middle Name'].' '.$result['Last Name'] ?>" />
        
          </div><!----------------- form group end ---------------------------------->
        
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="FatherName">FatherName</label>
            <input type="text" name="FatherName" id="FatherName" class="form-control text-uppercase" placeholder="Father Name" value="<?php echo $result['Father Name'] ?>" />
          
          </div><!----------------- form group end --------------------------------> 
          
          <div class="form-group"> <!------------ form group------------>    
            
            <label for="RegistrationNo">RegistrationNo</label>
            <input type="text" name="RegistrationNo" id="RegistrationNo" class="form-control" placeholder="Registration No" value="<?php echo $result['RegNo']  ?>"/>
          
          </div><!----------------- form group end -------------------------------->
              

          <div class="form-group"> <!------------ form group---------------------->
            
            <label for="Branch">Branch</label>
            <select name="Branch" id="Branch" class="form-control">
              <option value="<?php echo $result['Course'] ?>" selected><?php echo $result['Course'] ?></option>
              <!--<option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
              <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>-->
            </select>
          
          </div><!----------------- form group end--------------------->
          <?php 
                }
                  ?>

          <!---------------------------------------------------------------------------------
          -------------------------------------------------------------------------------------
          ------------------------------------------- FIRST YEAR ------------------------------------>

          <div class="form-group"><!------- form group start-------->
            <p class="form-label text-center bg-dark p-3 rounded text-white shadow">First Year</p>
            <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
            <label for="receiptNo1">Receipt Number</label>
            <input type="text" class="form-control" name="receiptNo1" id="receiptNo1" placeholder="Enter Receipt No" />
          </div>
          

          <div class="form-group"> <!------------ form group------------>
            
            <label for="Date2">Date</label>
            <input type="date" name="Date2" id="Date2" class="form-control" />
          
          </div><!------------------------ form group end------------------------>  

          <div class="form-group"> <!------------ form group------------> 
            <label for="TutionFee1">Tution Fee(First Installement)</label>
            <input type="text" name="TutionFee1" id="TutionFee1" class="form-control" placeholder="First Installement of Tution Fee" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end--------------------------> 

          <div class="form-group"> <!------------ form group------------>
            
            <label for="StudentFund1">Student Fund Fee</label>
            <input type="text" name="StudentFund1" id="StudentFund1" class="form-control" placeholder="Student Fund Fee" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          <div class="form-group"> <!------------ form group------------>
            
            <label for="SecurityAmount">Security Amount (Refundable)</label>
            <input type="text" name="SecurityAmount" id="SecurityAmount" class="form-control" placeholder="Security Amount (One time)" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          <div class="form-group"> <!------------ form group------------>
            <label for="PDc">Personality Development Charges (One time)</label>
            <input type="text" name="PDc" id="PDc" class="form-control" placeholder="Personality Development Charges" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          <div class="form-group"> <!------------ form group------------>
            <label for="HostelCharges1">Hostel Charges</label>
            <input type="text" name="HostelCharges1" id="HostelCharges1" class="form-control" placeholder="Hostel Charges" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount19">Total Amount (First Installement)</label>
            <input type="text" name="TotalAmount19" id="TotalAmount19" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end ---------------------------> 
          
                  <div class="form-group"><!------------ form group------------>
                  <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
                  <label for="receiptNo2">Receipt Number</label>
                  <input type="text" class="form-control" name="receiptNo2" id="receiptNo2" placeholder="Enter Receipt No" />
                  </div><!-- form group end -------------------------->

                  <div class="form-group"> <!------------ form group------------>
            
            <label for="Date29">Date</label>
            <input type="date" name="Date29" id="Date29" class="form-control" />
          
          </div><!------------------------ form group end------------------------> 


          <div class="form-group"> <!--------------- form group start -------------->
            <label for="TutionFee">Tution Fee (Second Installement)</label>
            <input type="text" name="TutionFee" id="TutionFee" class="form-control" placeholder="Second Installement" onkeyup="feetotals()" />

          </div><!--------------------- form group end------------------------>

          <div class="form-group"><!-------------- form group----------->
                  <label for="TotalAmount234">Total Amount (Second Installment)</label>
                  <input type="text" class="form-control" name="TotalAmount234" id="TotalAmount234" onkeyup="feetotals()" />
                </div><!------------------------ form group end------------------------>
        
          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount1">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="TotalAmount1" id="TotalAmount1" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end ---------------------------> 

                  <!-----------------------------------------------------------------------------
                  ---------------------------------------------------------------------------------
                  ----------------------------------------- SECOND YEAR ------------------------------>


        <div class="form-group"> <!------------ form group------------>
        <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Second Year</p>
        <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
        <label for="receiptNo3">Receipt No</label>
        <input type="text" class="form-control" name="receiptNo3" id="receiptNo3" placeholder="Enter receipt No" />
        </div><!-----------------form group end --------------------------->

        <div class="form-group"> <!------------ form group------------>
            
            <label for="Date21">Date</label>
            <input type="date" name="Date21" id="Date21" class="form-control" />
          
          </div><!------------------------ form group end------------------------>


        <div class="form-group"><!------------ form group------------>
        <label for="TutionFee11">Tution Fee(First Installement)</label>
            <input type="text" name="TutionFee11" id="TutionFee11" class="form-control" placeholder="Enter Tution Fee (First Installement)" onkeyup="feetotals()" />

        </div><!----form group end----->
        <div class="form-group"> <!------------ form group------------>
            
            <label for="StudentFund11">Student Fund Fee</label>
            <input type="text" name="StudentFund11" id="StudentFund11" class="form-control" placeholder="Student Fund Fee" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          <div class="form-group"> <!------------ form group------------>
            <label for="HostelCharges11">Hostel Charges</label>
            <input type="text" name="HostelCharges11" id="HostelCharges11" class="form-control" placeholder="Hostel Charges" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount25">Total Amount (First Installement)</label>
            <input type="text" name="TotalAmount25" id="TotalAmount25" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end --------------------------->

        <div class="form-group"> <!------------form group start------>
        <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
        <label for="receiptNo4">Receipt No</label>
        <input type="text" class="form-control" name="receiptNo4" id="receiptNo4" placeholder="Enter receipt No" />   
        </div><!-- form group end------------------------> 
      
        
        <div class="form-group"> <!------------ form group------------>
            
            <label for="Date28">Date</label>
            <input type="date" name="Date28" id="Date28" class="form-control" />
          
          </div><!------------------------ form group end------------------------>


          <div class="form-group"> <!--------------- form group start -------------->
            <label for="TutionFee2">Tution Fee (Second Installement)</label>
            <input type="text" name="TutionFee2" id="TutionFee2" class="form-control" placeholder="Second Installement" onkeyup="feetotals()" />

          </div><!--------------------- form group end------------------------>

          <div class="form-group"><!------------ form group------------>
                  <label for="TotalAmount890">Total Amount (Second Installement)</label>
                  <input type="text" class="form-control" name="TotalAmount890" id="TotalAmount890" onkeyup="feetotals()" />
        </div><!-- form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount11">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="TotalAmount11" id="TotalAmount11" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end --------------------------->
        
        


        <!------------------------------------------------------------------------------------------------------
        --------------------------------------------------------------------------------------------------------
        --------------------------------------------------------------------------------------------------------
        --------------------------------------------- Third Year -----------------------------------------------
        ------------------------------------------------------------------------------------------------------->



        <div class="form-group"> <!------------ form group------------>
        <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Third Year</p>
        <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
        <label for="receiptNo5">Receipt No</label>
        <input type="text" class="form-control" name="receiptNo5" id="receiptNo5" placeholder="Enter receipt No" />
        </div><!-----------------form group end --------------------------->

        <div class="form-group"> <!------------ form group------------>
            
            <label for="Date31">Date</label>
            <input type="date" name="Date31" id="Date31" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

        <div class="form-group"><!------------ form group------------>
        <label for="TutitonFee31">Tution Fee(First Installement)</label>
            <input type="text" name="TutionFee31" id="TutionFee31" class="form-control" placeholder="Enter Tution Fee First Installement" onkeyup="feetotals()" />

        </div><!----form group end----->
        <div class="form-group"> <!------------ form group------------>
            
            <label for="StudentFund31">Student Fund Fee</label>
            <input type="text" name="StudentFund31" id="StudentFund31" class="form-control" placeholder="Student Fund Fee" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->
          <div class="form-group"> <!------------ form group------------>
            <label for="HostelCharges31">Hostel Charges</label>
            <input type="text" name="HostelCharges31" id="HostelCharges31" class="form-control" placeholder="Hostel Charges" onkeyup="feetotals()" />
          
          </div><!------------------------ form group end-------------------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="TotalAmount31">Total Amount (First Installement)</label>
            <input type="text" name="TotalAmount31" id="TotalAmount31" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end --------------------------->

        <div class="form-group"> <!------------ form group------------>
        <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
        <label for="receiptNo6">Receipt No</label>
        <input type="text" class="form-control" name="receiptNo6" id="receiptNo6" placeholder="Enter receipt No" />
        </div><!-- form group end -------------------->


        <div class="form-group"> <!------------ form group------------>
            
            <label for="Date32">Date</label>
            <input type="date" name="Date32" id="Date32" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!--------------- form group start -------------->
            <label for="TutionFee3">Tution Fee (Second Installement)</label>
            <input type="text" name="TutionFee3" id="TutionFee3" class="form-control" placeholder="Second Installement" onkeyup="feetotals()" />

          </div><!--------------------- form group end------------------------>

          <div class="form-group"> <!------------ form group------------>

          <div class="form-group"> <!------------ form group------------>
                  <label for="TotalAmount120">Total Amount (Second Installement)</label>
                  <input type="text" name="TotalAmount120" id="TotalAmount120" class="form-control" onkeyup="feetotals()" />
                </div><!-- form group end------------------------>
            
            <label for="TotalAmount345">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="TotalAmount345" id="TotalAmount345" class="form-control" onkeyup="feetotals()" />
        </div> <!------------------ form group end --------------------------->

        <div class="form-group"> <!------------ form group------>
                  <label for="grand">Grand Total</label>
                  <input type="text" name="grand" id="grand" class="form-control" onkeyup="feetotals()" />
        </div><!------------form group end------>

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
            
            <!--<label for="upd_year">Year</label>
            <select class="form-control" name="upd_finyt" id="upd_finyt">
                         <option value="">*********** Select financial Year ****************</option>
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
              </select>-->
        
          </div><!----------------- form group end ---------------------------------->
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
              <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
              <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
            </select>
          
          </div><!----------------- form group end--------------------->

          <div class="form-group"> <!------------ form group------------>
          <p class="form-label text-center bg-dark p-3 rounded text-white shadow">First Year</p>
            <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
            <label for="upd_receiptNo1">Receipt Number</label>
            <input type="text" name="upd_receiptNo1" id="upd_receiptNo1" class="form-control" placeholder="Enter Receipt Number" />
          
          </div><!------------------------ form group end-------------------------->  
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date2">Date</label>
            <input type="date" name="upd_Date2" id="upd_Date2" class="form-control" />
          
          </div><!------------------------ form group end------------------------> 
          
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TutionFee1">Tution Fee (First Installement)</label>
            <input type="text" name="upd_TutionFee1" id="upd_TutionFee1" class="form-control" placholder="Second Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_StudentFund1">Student Fund Fee</label>
            <input type="text" name="upd_StudentFund1" id="upd_StudentFund1" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>  


          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_SecurityAmount">Security Amount</label>
            <input type="text" name="upd_SecurityAmount" id="upd_SecurityAmount" class="form-control" placeholder="Total Amount" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_PDc">Personality Developement Charges</label>
            <input type="text" name="upd_PDc" id="upd_PDc" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_HostelCharges1">Hostel Charges</label>
            <input type="text" name="upd_HostelCharges1" id="upd_HostelCharges1" class="form-control" onkeyup="upd_feetotals()"/>
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount19">Total Amount</label>
            <input type="text" name="upd_TotalAmount19" id="upd_TotalAmount19" class="form-control" placeholder="Fourth Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"><!------------ form group------------>
          <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
          <label for="upd_receiptNo2">Receipt Number</label>
            <input type="text" name="upd_receiptNo2" id="upd_receiptNo2" class="form-control" placeholder="Enter Receipt Number" />
          </div><!-- form group end-------------------------->    
          
          <div class="form-group"> <!------------ form group------------>
                <label for="upd_Date29">Date</label>
                <input type="date" name="upd_Date29" id="upd_Date29" class="form-control" />
          </div><!-- form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            <label for="upd_TutionFee">Tution Fee (Second Installement)</label>
            <input type="text" name="upd_TutionFee" id="upd_TutionFee" class="form-control" onkeyup="upd_feetotals()"/>
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
                <label for="upd_TotalAmount234">Total Amount(Second Installement)</label>
                <input type="text" name="upd_TotalAmount234" id="upd_TotalAmount234" class="form-control" onkeyup="upd_feetotals()"/>
          </div><!------------------------ form group end------------------------>

        <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount1">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="upd_TotalAmount1" id="upd_TotalAmount1" class="form-control" placeholder="Fifth Installement" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
          <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Second Year</p>
        <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
            <label for="upd_receiptNo3">Receipt Number</label>
            <input type="text" name="upd_receiptNo3" id="upd_receiptNo3" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date21">Date</label>
            <input type="date" name="upd_Date21" id="upd_Date21" class="form-control" placeholder="Sixth Installement" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TutionFee11">Tution Fee (First Installement)</label>
            <input type="text" name="upd_TutionFee11" id="upd_TutionFee11" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_StudentFund11">Student Fund Fee</label>
            <input type="text" name="upd_StudentFund11" id="upd_StudentFund11" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_HostelCharges11">Hostel Charges</label>
            <input type="text" name="upd_HostelCharges11" id="upd_HostelCharges11" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount25">Total Amount</label>
            <input type="text" name="upd_TotalAmount25" id="upd_TotalAmount25" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
          <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
          <label for="upd_receiptNo4">Receipt Number</label>
            <input type="text" name="upd_receiptNo4" id="upd_receiptNo4" class="form-control" placeholder="Enter Receipt Number" />
          </div><!-- form group end-------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date28">Date </label>
            <input type="date" name="upd_Date28" id="upd_Date28" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            <label for="upd_TutionFee2">Tution Fee (Second Installement)</label>
            <input type="text" name="upd_TutionFee2" id="upd_TutionFee2" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
                <label for="upd_TotalAmount890">Total Amount (Second Installement)</label>
                <input type="text" name="upd_TotalAmount890" id="upd_TotalAmount890" class="form-control" onkeyup="upd_feetotals()" />
          </div><!-- form group end-------------->
          
          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount11">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="upd_TotalAmount11" id="upd_TotalAmount11" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
          <p class="form-label text-center bg-dark p-3 rounded text-white shadow">Third Year</p>
        <p class="text-center text-white p-2 bg-secondary h5">First Installement</p>
            <label for="upd_receiptNo5">Receipt Number</label>
            <input type="text" name="upd_receiptNo5" id="upd_receiptNo5" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date31">Date</label>
            <input type="date" name="upd_Date31" id="upd_Date31" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TutionFee31">Tution Fee (First Installement)</label>
            <input type="text" name="upd_TutionFee31" id="upd_TutionFee31" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_StudentFund31">Student Fund Fee</label>
            <input type="text" name="upd_StudentFund31" id="upd_StudentFund31" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_HostelCharges31">Hostel Charges</label>
            <input type="text" name="upd_HostelCharges31" id="upd_HostelCharges31" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount31">Total Amount</label>
            <input type="text" name="upd_TotalAmount31" id="upd_TotalAmount31" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
          <p class="text-center text-white p-2 bg-secondary h5">Second Installement</p>
          <label for="upd_receiptNo6">Receipt Number</label>
            <input type="text" name="upd_receiptNo6" id="upd_receiptNo6" class="form-control" placeholder="Enter Receipt Number" />
          </div><!-- form group end-------------->

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_Date32">Date</label>
            <input type="date" name="upd_Date32" id="upd_Date32" class="form-control" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            <label for="upd_TutionFee3">Tution Fee (Second Installement)</label>
            <input type="text" name="upd_TutionFee3" id="upd_TutionFee3" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
                <label for="upd_TotalAmount120">Total Amount (secondary Installement)</label>
                <input type="text" name="upd_TotalAmount120" id="upd_TotalAmount120" class="form-control" onkeyup="upd_feetotals()" />
          </div><!-- form group end-------------->


          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_TotalAmount345">Total Amount (First Installement + Second Installement)</label>
            <input type="text" name="upd_TotalAmount345" id="upd_TotalAmount345" class="form-control" onkeyup="upd_feetotals()" />
          
          </div><!------------------------ form group end------------------------>

          <div class="form-group"> <!------------ form group------------>
            
            <label for="upd_grand">Grand Total</label>
            <input type="text" name="upd_grand" id="upd_grand" class="form-control" onkeyup="upd_feetotals()" />
          
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
          document.getElementById("TotalAmount19").value=parseInt(document.getElementById("TutionFee1").value)+ parseInt(document.getElementById("StudentFund1").value)+ parseInt(document.getElementById("SecurityAmount").value)+ parseInt(document.getElementById("PDc").value)+ parseInt(document.getElementById("HostelCharges1").value);
          document.getElementById("TotalAmount234").value=parseInt(document.getElementById("TutionFee").value);
          document.getElementById("TotalAmount1").value=parseInt(document.getElementById("TotalAmount19").value)+ parseInt(document.getElementById("TotalAmount234").value);
          document.getElementById("TotalAmount25").value=parseInt(document.getElementById("TutionFee11").value)+ parseInt(document.getElementById("StudentFund11").value)+ parseInt(document.getElementById("HostelCharges11").value);
          document.getElementById("TotalAmount890").value=parseInt(document.getElementById("TutionFee2").value);
          document.getElementById("TotalAmount11").value=parseInt(document.getElementById("TotalAmount25").value)+parseInt(document.getElementById("TotalAmount890").value);
          document.getElementById("TotalAmount31").value=parseInt(document.getElementById("TutionFee31").value)+parseInt(document.getElementById("StudentFund31").value)+parseInt(document.getElementById("HostelCharges31").value);
          document.getElementById("TotalAmount120").value=parseInt(document.getElementById("TutionFee3").value);
          document.getElementById("TotalAmount345").value=parseInt(document.getElementById("TotalAmount31").value)+parseInt(document.getElementById("TotalAmount120").value);
          document.getElementById("grand").value=parseInt(document.getElementById("TotalAmount1").value)+parseInt(document.getElementById("TotalAmount11").value)+parseInt(document.getElementById("TotalAmount345").value);
      }

      function upd_feetotals() {
        document.getElementById("upd_TotalAmount19").value=parseInt(document.getElementById("upd_TutionFee1").value)+ parseInt(document.getElementById("upd_StudentFund1").value)+ parseInt(document.getElementById("upd_SecurityAmount").value)+ parseInt(document.getElementById("upd_PDc").value)+ parseInt(document.getElementById("upd_HostelCharges1").value);
        document.getElementById("upd_TotalAmount234").value=parseInt(document.getElementById("upd_TutionFee").value);
        document.getElementById("upd_TotalAmount1").value=parseInt(document.getElementById("upd_TotalAmount19").value)+ parseInt(document.getElementById("upd_TotalAmount234").value);
        document.getElementById("upd_TotalAmount25").value=parseInt(document.getElementById("upd_TutionFee11").value)+ parseInt(document.getElementById("upd_StudentFund11").value)+ parseInt(document.getElementById("upd_HostelCharges11").value);
        document.getElementById("upd_TotalAmount890").value=parseInt(document.getElementById("upd_TutionFee2").value);
        document.getElementById("upd_TotalAmount11").value=parseInt(document.getElementById("upd_TotalAmount25").value)+parseInt(document.getElementById("upd_TotalAmount890").value);
        document.getElementById("upd_TotalAmount31").value=parseInt(document.getElementById("upd_TutionFee31").value)+ parseInt(document.getElementById("upd_StudentFund31").value)+ parseInt(document.getElementById("upd_HostelCharges31").value);
        document.getElementById("upd_TotalAmount120").value=parseInt(document.getElementById("upd_TutionFee3").value);
        document.getElementById("upd_TotalAmount345").value=parseInt(document.getElementById("upd_TotalAmount31").value)+ parseInt(document.getElementById("upd_TotalAmount120").value);
        document.getElementById("upd_grand").value=parseInt(document.getElementById("upd_TotalAmount1").value)+ parseInt(document.getElementById("upd_TotalAmount11").value)+ parseInt(document.getElementById("upd_TotalAmount345").value);

        }
  </script>
  <script type="text/javascript">
     $('#myModal').modal('show');
      $(document).ready(function(){
        readRecords();
      });
      
      function readRecords() {
        var readrecord = "readrecord";
        var myInput = $('#myInput').val();
        var finy = $('#finy').val();
        $.ajax({
          url :"feeinfo1.php",
          type : "POST",
          data : { readrecord : readrecord,
                   myInput : myInput,
                  finy : finy,
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
        var receiptNo1 = $('#receiptNo1').val();
        var Date2 = $('#Date2').val();
        var TutionFee1 = $('#TutionFee1').val();
        var StudentFund1 =$('#StudentFund1').val();
        var SecurityAmount = $('#SecurityAmount').val();
        var PDc = $('#PDc').val();
        var HostelCharges1 =$('#HostelCharges1').val();
        var TotalAmount19 = $('#TotalAmount19').val();
        var receiptNo2 = $('#receiptNo2').val();
        var Date29 = $('#Date29').val();
        var TutionFee = $('#TutionFee').val();
        var TotalAmount234 = $('#TotalAmount234').val();
        var TotalAmount1 = $('#TotalAmount1').val();
        var receiptNo3 = $('#receiptNo3').val();
        var Date21 = $('#Date21').val();
        var TutionFee11 = $('#TutionFee11').val();
        var StudentFund11 = $('#StudentFund11').val();
        var HostelCharges11 = $('#HostelCharges11').val();
        var TotalAmount25 = $('#TotalAmount25').val();
        var receiptNo4 = $('#receiptNo4').val();
        var Date28 = $('#Date28').val();
        var TutionFee2 = $('#TutionFee2').val();
        var TotalAmount890 = $('#TotalAmount890').val();
        var TotalAmount11 = $('#TotalAmount11').val();
        var receiptNo5 = $('#receiptNo5').val();
        var Date31 = $('#Date31').val();
        var TutionFee31 = $('#TutionFee31').val();
        var StudentFund31 = $('#StudentFund31').val();
        var HostelCharges31 = $('#HostelCharges31').val();
        var TotalAmount31 = $('#TotalAmount31').val();
        var receiptNo6 = $('#receiptNo6').val();
        var Date32 = $('#Date32').val();
        var TutionFee3 = $('#TutionFee3').val();
        var TotalAmount120 = $('#TotalAmount120').val();
        var TotalAmount345 = $('#TotalAmount345').val();
        var grand = $('#grand').val();
        $.ajax({
          url:"feeinfo1.php",
          type:'POST',
          data:{ 
            Year :Year,
            StudentName : StudentName ,
            FatherName : FatherName,
            RegistrationNo : RegistrationNo,
            Branch : Branch,
            receiptNo1 : receiptNo1,
            Date2 : Date2,
            TutionFee1 : TutionFee1,
            StudentFund1 : StudentFund1,
            SecurityAmount : SecurityAmount,
            PDc : PDc,
            HostelCharges1 : HostelCharges1,
            TotalAmount19 : TotalAmount19,
            receiptNo2:receiptNo2,
            Date29 : Date29,
            TutionFee : TutionFee,
            TotalAmount234 :TotalAmount234,
            TotalAmount1 : TotalAmount1,
            receiptNo3 :receiptNo3,
            Date21 : Date21,
            TutionFee11 : TutionFee11,
            StudentFund11 : StudentFund11,
            HostelCharges11 : HostelCharges11,
            TotalAmount25:TotalAmount25,
            receiptNo4:receiptNo4,
            Date28:Date28,
            TutionFee2:TutionFee2,
            TotalAmount890:TotalAmount890,
            TotalAmount11:TotalAmount11,
            receiptNo5:receiptNo5,
            Date31:Date31,
            TutionFee31:TutionFee31,
            StudentFund31:StudentFund31,
            HostelCharges31:HostelCharges31,
            TotalAmount31:TotalAmount31,
            receiptNo6:receiptNo6,
            Date32:Date32,
            TutionFee3:TutionFee3,
            TotalAmount120:TotalAmount120,
            TotalAmount345:TotalAmount345,
            grand:grand,
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
          $.post("feeinfo1.php",{
              id:id
            },function(data,status){
                var user = JSON.parse(data);
                //$('#upd_finyt').val(user.finyt);
                $('#upd_StudentName').val(user.StudentName);
                $('#upd_FatherName').val(user.FatherName);
                $('#upd_RegistrationNo').val(user.RegistrationNo);
                $('#upd_Branch').val(user.Branch);
                $('#upd_receiptNo1').val(user.receiptNo1);
                $('#upd_Date2').val(user.Date2);
                $('#upd_TutionFee1').val(user.TutionFee1);
                $('#upd_StudentFund1').val(user.StudentFund1);
                $('#upd_SecurityAmount').val(user.SecurityAmount);
                $('#upd_PDc').val(user.PDc);
                $('#upd_HostelCharges1').val(user.HostelCharges1);
                $('#upd_TotalAmount19').val(user.TotalAmount19);
                $('#upd_receiptNo2').val(user.receiptNo2);
                $('#upd_Date29').val(user.Date29);
                $('#upd_TutionFee').val(user.TutionFee);
                $('#upd_TotalAmount234').val(user.TotalAmount234);
                $('#upd_TotalAmount1').val(user.TotalAmount1);
                $('#upd_receiptNo3').val(user.receiptNo3);
                $('#upd_Date21').val(user.Date21);
                $('#upd_TutionFee11').val(user.TutionFee11);
                $('#upd_StudentFund11').val(user.StudentFund11);
                $('#upd_HostelCharges11').val(user.HostelCharges11);
                $('#upd_TotalAmount25').val(user.TotalAmount25);
                $('#upd_receiptNo4').val(user.receiptNo4);
                $('#upd_Date28').val(user.Date28);
                $('#upd_TutionFee2').val(user.TutionFee2);
                $('#upd_TotalAmount890').val(user.TotalAmount890);
                $('#upd_TotalAmount11').val(user.TotalAmount11);
                $('#upd_receiptNo5').val(user.receiptNo5);
                $('#upd_Date31').val(user.Date31);
                $('#upd_TutionFee31').val(user.TutionFee31);
                $('#upd_StudentFund31').val(user.StudentFund31);
                $('#upd_HostelCharges31').val(user.HostelCharges31);
                $('#upd_TotalAmount31').val(user.TotalAmount31);
                $('#upd_receiptNo6').val(user.receiptNo6);
                $('#upd_Date32').val(user.Date32);
                $('#upd_TutionFee3').val(user.TutionFee3);
                $('#upd_TotalAmount120').val(user.TotalAmount120);
                $('#upd_TotalAmount345').val(user.TotalAmount345);
                $('#upd_grand').val(user.grand);
            }
          );
            $('#update_user_Modal').modal("toggle");
         
      }}

      function updateuserdetail(){
        //var Yearupd = $('#upd_finyt').val();
        var StudentNameupd = $('#upd_StudentName').val();
        var FatherNameupd = $('#upd_FatherName').val();
        var RegistrationNoupd = $('#upd_RegistrationNo').val();
        var Branchupd = $('#upd_Branch').val();
        var receiptNo1upd = $('#upd_receiptNo1').val();
        var Date2upd = $('#upd_Date2').val();
        var TutionFee1upd = $('#upd_TutionFee1').val();
        var StudentFund1upd = $('#upd_StudentFund1').val();
        var SecurityAmountupd = $('#upd_SecurityAmount').val();
        var PDcupd = $('#upd_PDc').val();
        var HostelCharges1upd = $('#upd_HostelCharges1').val();
        var TotalAmount19upd = $('#upd_TotalAmount19').val();
        var receiptNo2upd = $('#upd_receiptNo2').val();
        var Date29upd = $('#upd_Date29').val();
        var TutionFeeupd = $('#upd_TutionFee').val();
        var TotalAmount234upd = $('#upd_TotalAmount234').val();
        var TotalAmount1upd = $('#upd_TotalAmount1').val();
        var receiptNo3upd = $('#upd_receiptNo3').val();
        var Date21upd = $('#upd_Date21').val();
        var TutionFee11upd = $('#upd_TutionFee11').val();
        var StudentFund11upd = $('#upd_StudentFund11').val();
        var HostelCharges11upd = $('#upd_HostelCharges11').val();
        var TotalAmount25upd = $('#upd_TotalAmount25').val();
        var receiptNo4upd = $('#upd_receiptNo4').val();
        var Date28upd = $('#upd_Date28').val();
        var TutionFee2upd = $('#upd_TutionFee2').val();
        var TotalAmount890upd = $('#upd_TotalAmount890').val();
        var TotalAmount11upd = $('#upd_TotalAmount11').val();
        var receiptNo5upd = $('#upd_receiptNo5').val();
        var Date31upd = $('#upd_Date31').val();
        var TutionFee31upd = $('#upd_TutionFee31').val();
        var StudentFund31upd = $('#upd_StudentFund31').val();
        var HostelCharges31upd = $('#upd_HostelCharges31').val();
        var TotalAmount31upd = $('#upd_TotalAmount31').val();
        var receiptNo6upd = $('#upd_receiptNo6').val();
        var Date32upd = $('#upd_Date32').val();
        var TutionFee3upd = $('#upd_TutionFee3').val();
        var TotalAmount120upd = $('#upd_TotalAmount120').val();
        var TotalAmount345upd = $('#upd_TotalAmount345').val();
        var grandupd = $('#upd_grand').val();

        var hidden_user_idupd = $('#hidden_user_id').val();
        $.post("feeinfo1.php",{ 
            hidden_user_idupd:hidden_user_idupd,
            //Yearupd : Yearupd,
            StudentNameupd:StudentNameupd,
            FatherNameupd:FatherNameupd,
            RegistrationNoupd:RegistrationNoupd,
            Branchupd:Branchupd,
            receiptNo1upd:receiptNo1upd,
            Date2upd:Date2upd,
            TutionFee1upd:TutionFee1upd,
            StudentFund1upd:StudentFund1upd,
            SecurityAmountupd:SecurityAmountupd,
            PDcupd:PDcupd,
            HostelCharges1upd:HostelCharges1upd,
            TotalAmount19upd:TotalAmount19upd,
            receiptNo2upd:receiptNo2upd,
            Date29upd:Date29upd,
            TutionFeeupd:TutionFeeupd,
            TotalAmount234upd:TotalAmount234upd,
            TotalAmount1upd:TotalAmount1upd,
            receiptNo3upd:receiptNo3upd,
            Date21upd:Date21upd,
            TutionFee11upd:TutionFee11upd,
            StudentFund11upd:StudentFund11upd,
            HostelCharges11upd:HostelCharges11upd,
            TotalAmount25upd:TotalAmount25upd,
            receiptNo4upd:receiptNo4upd,
            Date28upd:Date28upd,
            TutionFee2upd:TutionFee2upd,
            TotalAmount890upd:TotalAmount890upd,
            TotalAmount11upd:TotalAmount11upd,
            receiptNo5upd:receiptNo5upd,
            Date31upd:Date31upd,
            TutionFee31upd:TutionFee31upd,
            StudentFund31upd:StudentFund31upd,
            HostelCharges31upd:HostelCharges31upd,
            TotalAmount31upd:TotalAmount31upd,
            receiptNo6upd:receiptNo6upd,
            Date32upd:Date32upd,
            TutionFee3upd:TutionFee3upd,
            TotalAmount120upd:TotalAmount120upd,
            TotalAmount345upd:TotalAmount345upd,
            grandupd:grandupd,
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