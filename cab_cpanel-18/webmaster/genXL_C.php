<?php
include "initialization.php";
if (isset($_POST['submit']) ) {
	$name=$_POST['name'];

	header('Content-Disposition: attachment;filename='.$name.'.xls');
	header('Cache-Control:no-cache,no-store,must-revalidate,post-check=0,pre-check=0');
	header('Pragma:no-cache');
	header('Content-Type:application/x-msexcel;charset=windows-1251;format=attachment;');
	$sql="select * from `register`";
	$res=$con->query($sql);
	echo "<table class='ui table' border='1'>";
	echo "<thead>";
	echo "<th>S.No.</th>";
	echo "<th>Registration_Date</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Phone Number</th>";
	echo "<th>Age</th>";

	echo "<th>Qualification</th>";
	echo "<th>Occupation</th>";
	echo "<th>City</th>";
	echo "<th>State</th>";
	echo "<th>Pincode</th>";
	echo "<th>Address</th>";
	echo "<th>About</th>";

	echo "</thead>";
	$c=1;
	while ($row=$res->fetch_assoc()) {

		echo "<tr><td>".$c++."</td><td>".date('d-F-Y', strtotime($row['registration_time']))."</td><td>".$row['name']."</td><td>".$row['email']."</td>
		<td>".$row['ph_no']."</td><td>".$row['age']."</td><td>".$row['qualification']."</td>
		<td>".$row['occupation']."</td><td>".$row['city']."</td>
		<td>".$row['state']."</td>
		<td>".$row['pincode']."</td><td>".$row['address']."</td>
		<td>".$row['about']."</td><td>--</td>
		</tr>";

	}
	echo "</table>";
}
?>