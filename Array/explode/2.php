
<?PHP 

$string = "apple,banana,cherry,durian";

$delimiter = ",";
$limit = 5;

$fruits = explode($delimiter, $string, $limit);

print_r($fruits);