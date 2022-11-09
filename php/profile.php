<?php
$con=new mysqli('localhost','root','','regi');
if($con){
    echo "Connection successful";
}
else
{
    die(mysqli_error($con));
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>hai</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table">
		<thead>
		  <tr>
			<th scope="col">firstname</th>
			<th scope="col">lastname</th>
			<th scope="col">email</th>
			<th scope="col">phonenumber</th>
			<th scope="col">password</th>

		  </tr>
		</thead>
		<tbody>
            <?php

            $sql  ="Select * from 'register'";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $firstname=$row['firstname'];
                    $lastname=$row['$lastname'];
                    $email=$row['$email'];
                    $phonenumber=$row['$phonenumber'];
                    $password=$row['$password'];
                    echo '<tr>
                    <th scope="row">'.$firstname.'</th>
                    <td>'.$lastname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phonenumber.'</td>
                    <td>'.$password.'</td>
                  </tr>';
                }
            }
            
            ?>




		</tbody>
	  </table>
</body>
</html>
