<?php

?>

<table>

<thead>
<td>
ID
</td>

<td>
First Name
</td>

<td>

Last Names
</td>



</thead>
  


	

<?php 
for($x = 0; $x < count($persons); $x++){
    echo "<tr>";
    
    // example of the array
    //$person[0]['FIRST_NAME'] = "Howard";
    echo "<td>" . $persons[$x]['USER_ID'] . "<td>";
    echo "<td>" . $persons[$x]['FIRST_NAME'] . "<td>";
    echo "<td>" . $persons[$x]['LAST_NAME'] . "<td>";
    echo "<tr>";
    
}
?>

</table>


