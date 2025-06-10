<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $Cast = $_FILES['file4'];
        $filename = $Cast['name'];
        $fileerror = $Cast['error'];
        $filetmp = $Cast['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/CastCertificate/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        $query ="UPDATE `record` SET `Cast or EWS Certificate Picture`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
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