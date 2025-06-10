<?php
    include ('conn.php');
    if(isset($_POST['submit']))
    {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $query = "SELECT * FROM `record` WHERE `First Name`='$firstName' AND `Last Name`='$lastName'";
        $q=mysqli_query($db,$query) or die(mysqli_error($db));
        while($result=mysqli_fetch_array($q))
        {
            echo "id: ".$result['FromYear'];
            echo "id:".$result['ToYear'];
        }
    }
?>