<?php
require "connection.php";

	$names = mysqli_real_escape_string($con, $_POST['names']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$comment =  mysqli_real_escape_string($con, $_POST['comments']);
	$result=mysqli_query($con,"SELECT * FROM submit");
	while($row=mysqli_num_rows($result) > 0){
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and PHP code</title>
</head>
<body>
    <h1>Display user list using HTML and PHP</h1>
  
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Names</th>
                <th>Email</th>
                <th>password</th>
                <th>comments</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['names']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['comments']; ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>
</html>