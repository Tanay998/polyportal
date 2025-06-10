<?php
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ESTC Polytechnic</title>
    <link rel="stylesheet" href="css/tabstyle.css" />
    <link rel="stylesheet" href="css/boxstyle.css" />
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
  #text{
      display:block;
      color:#000;
      font-weight:300;
      font-style: italic;
      padding:5px;
  }
    </style>
  </head>
  <body>
    
    </div><!----- container fluid end --->

   <?php include('header.php') ?>
        <div class="container-fluid"><!--- container fluid start --->
        <form name="form" action="domicileshow.php" id="form" method="post" enctype="multipart/form-data">
            
        </div><!--- container fluid end --->

        <div class="container mt-4 rounded p-3 mb-5" style="box-shadow:4px 9px 25px 10px grey;"><!--- container start --->
               <a href="docupdate.php" class="btn btn-danger">BACK</a> <br/><br />    
              <div class="mt-2"></div>
              <div class="row"><!----- row start------>
                <div class="col-md-12"><!---- column start------>
                <p class="text-center h3">DOMICILE CERTIFICATE UPDATE</p>
                <div class="form-group"><!------ form group start ---->
                    <select name="Course" id="Course" class="form-control">
                        <option value="" selected>*********** select course**************</option>
                        <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
                        <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                    </select>
                </div><!---- form group end ---->
                <div class="form-group"><!---- form group start ---->
                    <input type="text" name="RegNo" id="RegNo" class="form-control" placeholder="Enter 4 or 5 digit registration no" />
                </div><!---- form group end ----> 
                </div><!---- column end------>
              </div><!----row end------->
              <div class="row mt-4"><!-------- row start-------->
                 <div class="col-md-12 text-center"><!-- column start------>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>
                 </div><!-- column end ------->
              </div><!-- row end ------>
              <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Top <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
        </div><!-----container end -->
    </form>
    <?php include('footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/tabscript.js"></script>-->
    <script src="js/displaydata.js"></script>
    <script type="text/javascript" src="js/gtransapi.js"></script>  
    <script type="text/javascript" src="js/translator.js"></script>
    <script type="text/javascript">
      /* -------------------------------------------------------------
            bootstrapTabControl
        ------------------------------------------------------------- */
        function bootstrapTabControl(){
            var i, items = $('.nav-link'), pane = $('.tab-pane');
            // next
            $('.nexttab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i+1]).addClass('show active');
                }

            });
            // Prev
            $('.prevtab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i-1]).addClass('show active');
                }
            });
        }
        bootstrapTabControl();
    </script>

    <script>
        function validation(){
            var form=document.getElementById("form");
            var email=document.getElementById("Email").value;
            var text=document.getElementById("text");
            var pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if(email.match(pattern))
            {
                form.classList.add("valid");
                form.classList.remove("invalid");
                text.innerHTML="Your Email Address is valid.";
                text.style.color="black";
            }
            else
            {
                form.classList.remove("valid");
                form.classList.add("invalid");
                text.innerHTML="Please Enter valid email address";
                text.style.color="#ff0000";
            }
            if(email=="")
            {
                form.classList.remove("valid");
                form.classList.remove("invalid");
                text.innerHTML="";
                text.style.color="#00ff00";
            }
        }

        function tele1()
        {
            var n=document.getElementById("phone").value;
            if(isNaN(n)){
                alert("Please enter 10 digit Mobile Number");
            }
            else{
                n;
            }
        }
        function tele2(){
            var n1=document.getElementById("phone1").value;
            if(isNaN(n1)){
                alert("Please enter 10 digit Mobile Number");
            }
            else{
                n1;
            }
        }

        function tele3(element){
        var aadhaar1 = document.getElementById('aadhaar').value;
        if(aadhaar1.length>14){
            document.getElementById('shown').innerHTML="Aadhaar should be 12 digit number";
        }
        else{
            document.getElementById('shown').innerHTML="";
        }
        }
    </script>
    <script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
    function num1(){
      var n = document.getElementById('regNo').value;
      if(isNaN(n)){
        alert("Please enter a number");
      }
      else{
        n;
      }
    }
</script>
<script>
    //document.getElementById('typeofmarks11').value = document.getElementById('typeofmraks').value;
    function transfer(){
        document.getElementById('t11').value = document.getElementById('t1').value;
        document.getElementById('t21').value = document.getElementById('t2').value;
        document.getElementById('course1').value = document.getElementById('course').value;
        document.getElementById('semester1').value = document.getElementById('semester').value;
        document.getElementById('gender1').value = document.getElementById('gender').value;
        document.getElementById('category1').value = document.getElementById('category').value;
        document.getElementById('marital1').value = document.getElementById('marital').value;
        document.getElementById('blood1').value = document.getElementById('blood').value;
        document.getElementById('add11').value = document.getElementById('add1').value;
        document.getElementById('cstate1').value = document.getElementById('cstate').value;
        document.getElementById('pstate1').value = document.getElementById('pstate').value;
        document.getElementById('yop1').value = document.getElementById('yop').value;
    }
</script>
<script>
    function lock(){
       document.getElementById('t1').disabled = true;
       document.getElementById('t2').disabled = true;
       document.getElementById('dateadd').readOnly=true;
       document.getElementById('brn').readOnly=true;
       document.getElementById('regNo').readOnly=true;
       document.getElementById('jeep').readOnly = true;
       document.getElementById('RollNo1').readOnly=true;
       document.getElementById('course').disabled = true;
       document.getElementById('semester').disabled = true;
       document.getElementById('entry').disabled=true;
       document.getElementById('tfw').disabled=true;

    }
    function release(){
        document.getElementById('t11').disabled=false;
        document.getElementById('t2').disabled=false;
        document.getElementById('dateadd').readOnly=false;
        document.getElementById('brn').readOnly=false;
       document.getElementById('regNo').readOnly=false;
       document.getElementById('jeep').readOnly=false;
       document.getElementById('RollNo1').readOnly=false;
       document.getElementById('course').disabled=false;
       document.getElementById('semester').disabled=false;
       document.getElementById('entry').disabled=false;
       document.getElementById('tfw').disabled=false;
    }
    

    function lock1(){
       document.getElementById('firstname').readOnly=true;
       document.getElementById('middlename').readOnly=true;
       document.getElementById('lastname').readOnly=true;
       document.getElementById('hindiname').readOnly=true;
       document.getElementById('fathername').readOnly=true;
       document.getElementById('hindiname1').readOnly=true;
       document.getElementById('mothername').readOnly=true;
       document.getElementById('hindiname2').readOnly=true;
       document.getElementById('phone').readOnly=true;
       document.getElementById('dateone').readOnly=true;
       document.getElementById('Email').readOnly=true;

    }
    function release1(){
        document.getElementById('firstname').readOnly=false;
        document.getElementById('middlename').readOnly=false;
        document.getElementById('lastname').readOnly=false;
        document.getElementById('hindiname').readOnly=false;
       document.getElementById('fathername').readOnly=false;
       document.getElementById('hindiname1').readOnly=false;
       document.getElementById('mothername').readOnly=false;
       document.getElementById('hindiname2').readOnly=false;
       document.getElementById('phone').readOnly=false;
       document.getElementById('dateone').readOnly=false;
       document.getElementById('Email').readOnly=false;
    }





    function lock2(){
       document.getElementById('phone1').readOnly=true;
       document.getElementById('gender').disabled=true;
       document.getElementById('category').disabled=true;
       document.getElementById('marital').disabled=true;
       document.getElementById('blood').disabled=true;
       document.getElementById('add1').disabled=true;
       document.getElementById('diva').disabled=true;
       document.getElementById('div1').readOnly=true;
       document.getElementById('rec').readOnly=true;

    }
    function release2(){
        document.getElementById('phone1').readOnly=false;
       document.getElementById('gender').disabled=false;
       document.getElementById('category').disabled=false;
       document.getElementById('marital').disabled=false;
       document.getElementById('blood').disabled=false;
       document.getElementById('add1').disabled=false;
       document.getElementById('diva').disabled=false;
       document.getElementById('div1').readOnly=false;
       document.getElementById('rec').readOnly=false;
    }






    function lock3(){
       document.getElementById('emp').readOnly=true;
       document.getElementById('salary').readOnly=true;
       document.getElementById('aadhaar').readOnly=true;
       document.getElementById('ccity').readOnly=true;
       document.getElementById('cstreet').readOnly=true;
       document.getElementById('cstate').disabled=true;
       document.getElementById('cdistrict').readOnly=true;
       document.getElementById('cpincode').readOnly=true;
       document.getElementById('sameAs').readOnly=true;
       document.getElementById('pcity').readOnly=true;
       document.getElementById('pstreet').readOnly=true;
       document.getElementById('pstate').disabled=true;
       document.getElementById('pdistrict').readOnly=true;
       document.getElementById('ppincode').readOnly=true;

    }
    function release3(){
        document.getElementById('emp').readOnly=false;
       document.getElementById('salary').readOnly=false;
       document.getElementById('aadhaar').readOnly=false;
       document.getElementById('ccity').readOnly=false;
       document.getElementById('cstreet').readOnly=false;
       document.getElementById('cstate').disabled=false;
       document.getElementById('cdistrict').readOnly=false;
       document.getElementById('cpincode').readOnly=false;
       document.getElementById('sameAs').readOnly=false;
       document.getElementById('pcity').readOnly=false;
       document.getElementById('pstreet').readOnly=false;
       document.getElementById('pstate').disabled=false;
       document.getElementById('pdistrict').readOnly=false;
       document.getElementById('ppincode').readOnly=false;
    }




    function lock4(){
       document.getElementById('bankacc').readOnly=true;
       document.getElementById('IFSC').readOnly=true;
       document.getElementById('BANKNAME').readOnly=true;
       document.getElementById('schoolName').readOnly=true;
       document.getElementById('Board').readOnly=true;
       document.getElementById('subject').readOnly=true;
       document.getElementById('yop').disabled=true;
       document.getElementById('typeofmarks').disabled=true;
       document.getElementById('totalmarks').readOnly=true;
       document.getElementById('obtainmarks').readOnly=true;
       document.getElementById('percentage').readOnly=true;

    }
    function release4(){
        document.getElementById('bankacc').readOnly=false;
       document.getElementById('IFSC').readOnly=false;
       document.getElementById('BANKNAME').readOnly=false;
       document.getElementById('schoolName').readOnly=false;
       document.getElementById('Board').readOnly=false;
       document.getElementById('subject').readOnly=false;
       document.getElementById('yop').disabled=false;
       document.getElementById('typeofmarks').disabled=false;
       document.getElementById('totalmarks').readOnly=false;
       document.getElementById('obtainmarks').readOnly=false;
       document.getElementById('percentage').readOnly=false;
    }






    function lock5(){
       document.getElementById('file').readOnly=true;
       document.getElementById('output').readOnly=true;
       document.getElementById('file1').readOnly=true;
       document.getElementById('output1').readOnly=true;
       document.getElementById('file2251').readOnly=true;
       document.getElementById('output2251').readOnly=true;
       document.getElementById('file2').readOnly=true;
       document.getElementById('output2').readOnly=true;
       document.getElementById('file3351').readOnly=true;
       document.getElementById('output3351').readOnly=true;
       document.getElementById('file3').readOnly=true;
       document.getElementById('output3').readOnly=true;
       document.getElementById('file4').readOnly=true;
       document.getElementById('output4').readOnly=true;
       document.getElementById('file4451').readOnly=true;
       document.getElementById('output4451').readOnly=true;
       document.getElementById('file5551').readOnly=true;
       document.getElementById('output5551').readOnly=true;
       document.getElementById('file5').readOnly=true;
       document.getElementById('output5').readOnly=true;
       document.getElementById('file6').readOnly=true;
       document.getElementById('output6').readOnly=true;
       document.getElementById('decdate').readOnly=true;
       document.getElementById('file7').readOnly=true;
       document.getElementById('output7').readOnly=true;

    }
    function release5(){
        document.getElementById('file').readOnly=false;
       document.getElementById('output').readOnly=false;
       document.getElementById('file1').readOnly=false;
       document.getElementById('output1').readOnly=false;
       document.getElementById('file2251').readOnly=false;
       document.getElementById('output2251').readOnly=false;
       document.getElementById('file2').readOnly=false;
       document.getElementById('output2').readOnly=false;
       document.getElementById('file3351').readOnly=false;
       document.getElementById('output3351').readOnly=false;
       document.getElementById('file3').readOnly=false;
       document.getElementById('output3').readOnly=false;
       document.getElementById('file4').readOnly=false;
       document.getElementById('output4').readOnly=false;
       document.getElementById('file4451').readOnly=false;
       document.getElementById('output4451').readOnly=false;
       document.getElementById('file5551').readOnly=false;
       document.getElementById('output5551').readOnly=false;
       document.getElementById('file5').readOnly=false;
       document.getElementById('output5').readOnly=false;
       document.getElementById('file6').readOnly=false;
       document.getElementById('output6').readOnly=false;
       document.getElementById('decdate').readOnly=false;
       document.getElementById('file7').readOnly=false;
       document.getElementById('output7').readOnly=false;
    }
    
</script>
<script>
    function showt(){
    if(document.getElementById('entry').value=="Jeep Entry")
    {
        document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      //document.getElementById('para1').innerHTML = "Enter Your Highschool Details";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="block";
      document.getElementById('incone').style.display="block";
    }
    else if(document.getElementById('entry').value=="Lateral Entry")
    {
      document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      //document.getElementById('para1').innerHTML = "Enter Your Intermediate Details";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="none";
      document.getElementById('incone').style.display="none";
    }
    else if(document.getElementById('entry').value=="Direct Entry"){
      document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      document.getElementById('jeep1').style.display="none";
      document.getElementById('RollNo').style.display="none";
      document.getElementById('tfw1').style.display="none";
      document.getElementById('incone').style.display="none";
    }

  }
  showf()
  {
      if(document.getElementById('edu').value=="HighSchool")
      {
          document.getElementById('high1').style.display="block";
          document.getElementById('high2').style.display="block";
          document.getElementById('inter1').style.display="none";
          document.getElementById('inter2').style.display="none";
      }
      else if(document.getElementById('edu').value=="Intermediate")
      {
          document.getElementById('high1').style.display="none";
          document.getElementById('high2').style.display="none";
          document.getElementById('inter1').style.display="block";
          document.getElementById('inter2').style.display="block";
      }
  }
</script>
<script>
    function showTab(){
      document.getElementById('Paris').style.display="block";
      document.getElementById('London').style.display="none";
      
    }
</script>
  </body>
</html>