<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial"; /* Database name */
$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
include "config.php";
?>
<div>Departments </div>
<select id="sel_depart">
<option value="0">- Select -</option>
<?php
// Fetch Department
?>
$sql_department = "SELECT * FROM department";
$department_data = mysqli_query($con,$sql_department);
while($row = mysqli_fetch_assoc($department_data) ){
$departid = $row['id'];
$depart_name = $row['depart_name'];
// Option
echo "<option value='".$departid."' >".$depart_name."</option>";
}
?>
</select>
<div class="clear"></div>
<div>Users </div>
<select id="sel_user">
<option value="0">- Select -</option>
</select>
