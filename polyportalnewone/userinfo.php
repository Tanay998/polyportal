<?php

include('conn.php');
	
	if(isset($_POST['submit']))
	{
        $firstName = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $query="INSERT INTO `userregis`(`firstname`, `email`, `password`) VALUES('$firstName','$email','$password')";
        if(mysqli_query($db,$query)){
            echo "
                <script>
                    if(confirm('Your information submitted successfully')){
                        location.replace('form114.php');
                    }
                </script>
            ";
        }
        else
		 	{
				 echo "Error: " . mysqli_error($db);
		 	}
             mysqli_close($db);

	}
?>
