<?php

require_once 'BuisnessService.php';

// Get the search term from the input form
$searchPhrase = $_GET['name'];

// create instance of buisnessService
$bs = new BuisnessService();


// find method returns array of person
$persons = $bs->findByFirstName($searchPhrase);

// display
?>
 
<h2>Search Results</h2>
<p>Here is what we found:</p>

<?php
if($persons){
    include('_displaySearchResults.php');
}
else{
    echo "Nobody is here with that name<br>";
}
?>