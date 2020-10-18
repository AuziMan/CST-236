<?php


?>

<head>

<style>
#customers{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-sarif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
</style>
</head>

<table id="customers">

<tr>
<th>
ID
</th>

<th>
First name
</th>
<th>
Last name
</th>



<th>
street
</th>

<th>
City
</th>

<th>
State
</th>

<th>
Postal Code
</th>

</tr>

<?php 

for ($x = 0; $x < count($persons); $x++){
    echo "<tr>";
    
    echo "<td>" . $persons[$x]['USER_ID'] . "<td>";
    echo "<td>" . $persons[$x]['FIRST_NAME'] . "<td>";
    echo "<td>" . $persons[$x]['LAST_NAME'] . "<td>";
    
    echo "<td>" . $persons[$x]['STREET'] . "<td>";
    echo "<td>" . $persons[$x]['CITY'] . "<td>";
    echo "<td>" . $persons[$x]['STATE'] . "<td>";
    echo "<td>" . $persons[$x]['POSTALCODE'] . "<td>";
    
    echo"</tr>";
    
}


?>



</table>







