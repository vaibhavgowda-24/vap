<?php
// Database Connection file
include('config.php');
?>
<img src="D:/logo.jpg">
<h1> OM Sai College Banglore</h1>
<h3> Exam Fees Details 2025</h3>
<hr></hr>
    <table border="1">
    <thead>
    
        <tr>
            <th>sl No.</th>
            <th>UUCMS NO</th>
            <th>Student Name</th>
             <th>Phone Number</th>
            <th>Total Fees Balance </th>
           
        </tr>
    </thead>
<?php
// File name
$filename="omc";
// Fetching data from data base
$query=mysqli_query($con,"select * from omstbl");
$cnt=1;
while ($row=mysqli_fetch_array($query)) {

?>

            <tr>
                <td><?php echo $cnt;  ?></td>
                <td><?php echo $row['uucmsno'];?></td>
                <td><?php echo $row['stname'];?></td>
                <td><?php echo $row['stcontactno'];?></td>
                <td><?php echo $row['stfees'];?></td>
               
            </tr>
<?php 
$cnt++;
// Genrating Execel  filess
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-recept.doc");
header("Pragma: no-cache");
header("Expires: 0");

} ?>
         
    </table>

