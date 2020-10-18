
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once 'ProductBusinessService.php';
require_once '../../Autoloader.php';

$searchPhrase = $_GET['name'];

$ps = new ProductBusinessService();

$products = $ps->findByProductName($searchPhrase);

?>

<h2>Search Results</h2>
<p>Here is what we found<p>

<?php 
if($products){
    include('_displayProductResults.php');
}
else {
    echo "Nothing was found like that<br>";
}

?>