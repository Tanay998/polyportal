<?php

include('conn.php');
	
	if(isset($_GET['submit']))
	{
        $email = $_GET['email'];
        $password = $_GET['psw'];
        $query="SELECT * FROM `userregis`";
        $result1=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result1)){
            if($email==$row['email'] && $password==$row['password']){
                echo"
                    <script>
                        location.replace('form1.php?username=".$row['firstname']."');
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        if(confirm('UserId or Password is incorrect')){
                            location.replace('login.php');
                        }
                    </script>
                ";
            }
        }
	}
?>
