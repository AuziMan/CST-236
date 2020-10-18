<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once '../UserDataService.php';

require_once '../../Autoloader.php';

$searchPhrase = $_GET['name'];

$bs = new UserBusinessService();

$persons = $bs->findByFirstNameAddress($searchPhrase);

?>

<h2>Search Results</h2>
<p>Here is what we found<p>

<?php 
if($persons){
    include('_displayPeopleSearchResults.php');
}
else {
    echo "Nobody was found like that<br>";
}

?>