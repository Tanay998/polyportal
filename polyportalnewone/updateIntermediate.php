<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $Intermediate = $_FILES['file3351'];
        $filename = $Intermediate['name'];
        $fileerror = $Intermediate['error'];
        $filetmp = $Intermediate['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/IntermediateMarksheet/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        $query ="UPDATE `record` SET `IntermediateMarksheetPicture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
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