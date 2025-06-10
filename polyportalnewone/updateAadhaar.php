<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $Aadhaar = $_FILES['file1'];
        $filename = $Aadhaar['name'];
        $fileerror = $Aadhaar['error'];
        $filetmp = $Aadhaar['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/AadhaarCard/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        $query ="UPDATE `record` SET `Aadhaar Card Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
        if(mysqli_query($db,$query)){
            echo "<script>
				if(confirm('Your information has been updated'))
					{
						location.replace('docupdate.php');
					}
					
				</script>";
        }
    }

?>