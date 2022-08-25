<?php
$server="sampledatabase:3306";
$user="root";
$password="root";
$database="sampledatabase";
$conn=new mysqli($server,$user,$password,$database);
if(!$conn)
echo ("connection refused");
else
        echo ("Login  succesfully");
echo "<h3>" . "Here is the list of Employees with their id " . "</h3>";

$query="select emp_id,name from Employee";
$result=$conn->query($query);
if($result->num_rows>0)
{
        echo "<table><tr><th>ID</th><th>NAME</th></tr>";
        while($row=$result->fetch_assoc())
        {
                echo "<tr><td>" . $row["emp_id"] . "</td><td>" . $row["name"] . "</td></tr>" ;
                echo "<br>" ;
        }
        echo "</table>";
}
else
{
        echo "Table is empty";
}
$conn->close();
?>
