<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $Course = $_POST['Course'];
        $RegNo = $_POST['RegNo'];
        $candidateSignature = $_FILES['file7'];
        $filename = $candidateSignature['name'];
        $fileerror = $candidateSignature['error'];
        $filetmp = $candidateSignature['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck= strtolower(end($fileext));
        $fileextstored = array('png','jpg','jpeg');
        $destinationfile = "upload/CandidateSignature/".$filename;

        move_uploaded_file($filetmp,$destinationfile);
        $query ="UPDATE `record` SET `CandidateSignature`='$destinationfile' WHERE `Course`='$Course' AND `RegNo`='$RegNo'";
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