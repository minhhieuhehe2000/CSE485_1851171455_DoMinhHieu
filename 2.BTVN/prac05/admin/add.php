<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post" action="add.php">
            <table>
                <tr>
                    <td>User ID</td>
                    <td><input type="text" name="User ID" value=""/></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="First Name" value=""/></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="Last Name" value=""/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="Email" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="add" value="Add New User "/></td>
                </tr>
            </table>
            </div>
		<?php 
			require('Config.php');

			if (isset($_POST['add']) && $_POST['name'] != ""){

				$User ID= $_POST['User ID'];
				$FirstName= $_POST['FirstName'];
				$LastName = $_POST['LastName'];
				$Email= $_POST['Email'];
				

				$sql= "INSERT INTO employees(UserID, FirstName, LastName, Email ) VALUES ('$UserID','$FirstName','$LastName','$Email',NOW())";
				mysqli_query($conn,$sql);
				echo "Thêm thành công";		
			}
			else{ echo "Name không được bỏ trống";
			
		 ?>
        </form>
    </body>
</html>

