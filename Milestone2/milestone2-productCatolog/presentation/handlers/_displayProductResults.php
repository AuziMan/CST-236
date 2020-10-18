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
    padding-top: 15px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
</style>
</head>

<table id="customers">

<tr>

<tH>
ID
</tH>

<tH>
Product name
</tH>

<tH>
Discription
</tH>

<tH>
Price
</tH>

</tr>

<?php 

for ($x = 0; $x < count($products); $x++){
    echo "<tr>";
    
    echo "<td>" . $products[$x]['ID'] . "</td>";
    echo "<td>" . $products[$x]['PRODUCTNAME'] . "</td>";
    echo "<td>" . $products[$x]['DISCRIPTION'] . "</td>";
    echo "<td>" . $products[$x]['PRICE'] . "</td>";
    
    
    echo"</tr>";
    
}


?>



</table>







