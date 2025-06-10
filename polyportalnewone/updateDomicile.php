<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $Cast = $_FILES['file4451'];
        $filename = $Cast['name'];
        $fileerror = $Cast['error'];
        $filetmp = $Cast['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/DomicileCertificate/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        $query ="UPDATE `record` SET `DomicileCertificate`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
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