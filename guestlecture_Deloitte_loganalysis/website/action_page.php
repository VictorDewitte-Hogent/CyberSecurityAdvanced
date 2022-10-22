<!DOCTYPE html>​
<html>
    <table>
<?php
$PATH = "/home/USER/PROJECTNAME";
$db = mysqli_connect("localhost","howest","","howestSearchEngine");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

include "dbConn.php"; // Using database connection file here

$searchString = $_GET['searchString'];

echo "You searched for:" . $searchString;

$records = mysqli_query($db,"select * from howestPeople where firstName like '%" . $searchString . "%' OR lastName like '%" . $searchString . "%' OR email like'%" . $searchString . "%'"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>

  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['email']; ?></td>
  </tr>	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>
    </table>
</html>