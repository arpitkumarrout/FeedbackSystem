<?php

include "configASL.php";
$x=mysqli_query($al,"select * from faculty");
// while ($row = mysqli_fetch_assoc($x)) { 
//     foreach($row as $value) {
//         echo "<h1>" . $value . "</h1>";
//     }
// }
$sql = "SELECT * FROM faculty";
$result = mysqli_query($al, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";

?>