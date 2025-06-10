function displaying(){
    if(document.getElementById('typeadd').value=="TFW")
    {
      document.getElementById('incone').style.display="block";
    }
    else if(document.getElementById('typeadd').value=="GENERAL")
    {
      document.getElementById('incone').style.display = "none";
    }
  }

  function showt(){
    if(document.getElementById('entry').value=="Jeep Entry")
    {
        document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      //document.getElementById('para1').innerHTML = "Enter Your Highschool Details";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="block";
    }
    else if(document.getElementById('entry').value=="Lateral Entry")
    {
      document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      //document.getElementById('para1').innerHTML = "Enter Your Intermediate Details";
      document.getElementById('jeep1').style.display="block";
      document.getElementById('RollNo').style.display="block";
      document.getElementById('tfw1').style.display="none";
    }
    else if(document.getElementById('entry').value=="Direct Entry"){
      document.getElementById('entry1').value=document.getElementById('entry').value;
      document.getElementById('tfw1').value = document.getElementById('tfw').value;
      document.getElementById('jeep1').style.display="none";
      document.getElementById('RollNo').style.display="none";
      document.getElementById('tfw1').style.display="none";
    }

  }
  function showing()
      {
        if(document.getElementById("diva").value=="NO")
        {
          document.getElementById("div2").style.display="none";
        }
        else if(document.getElementById("diva").value=="YES")
        {
          document.getElementById("div2").style.display="block";
        }
        document.getElementById("diva11").value = document.getElementById("diva").value;
      }

function sameth() 
  {
    if(document.getElementById('sameAs').checked==true)
    {
      document.getElementById('pcity').value = document.getElementById('ccity').value;
      document.getElementById('pstreet').value = document.getElementById('cstreet').value;
      document.getElementById('pstate').value = document.getElementById('cstate').value;
      document.getElementById('pdistrict').value = document.getElementById('cdistrict').value;
      document.getElementById('ppincode').value = document.getElementById('cpincode').value;
    }
    else if(document.getElementById('sameAs').checked==false)
    {
      document.getElementById('pcity').value = "";
      document.getElementById('pstreet').value = "";
      document.getElementById('pstate').value = "";
      document.getElementById('pdistrict').value ="";
      document.getElementById('ppincode').value = "";
    }
  }

  function showf()
  {
    if(document.getElementById('edu').value == "HighSchool")
    {
      document.getElementById('high1').style.display = "block";
      document.getElementById('high2').style.display = "block";
      document.getElementById('inter1').style.display = "none";
      document.getElementById('inter2').style.display = "none";
    }
    else if(document.getElementById('edu').value == "Intermediate")
    {
      document.getElementById('high1').style.display = "none";
      document.getElementById('high2').style.display = "none";
      document.getElementById('inter1').style.display = "block";
      document.getElementById('inter2').style.display = "block";
    }
  }

  function calculate() {
    if(document.getElementById('typeofmarks').value=="percent")
    {
      document.getElementById('typeofmarks11').value = document.getElementById('typeofmarks').value;
      document.getElementById('tbt').style.display="block";
      document.getElementById('percentage').value=parseInt((document.getElementById('obtainmarks').value*100)/document.getElementById('totalmarks').value);
    }
    if(document.getElementById('typeofmarks').value=="cgpa")
    {
      document.getElementById('typeofmarks11').value = document.getElementById('typeofmarks').value;
      document.getElementById('tbt').style.display="none";
      document.getElementById('percentage').value=parseInt((document.getElementById('obtainmarks').value*9.5));
    }
  }  

  //Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function displayone() {
  document.getElementById('para2').innerHTML =document.getElementById('hindiname').value;
  document.getElementById('para3').innerHTML =document.getElementById('hindiname1').value;
  document.getElementById('para4').innerHTML =document.getElementById('course').value;
  document.getElementById('para6').innerHTML =document.getElementById('fathername').value;
  document.getElementById('para7').innerHTML =document.getElementById('course').value;
}