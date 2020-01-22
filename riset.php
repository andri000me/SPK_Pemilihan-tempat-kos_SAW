<?php



$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 99, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);


// Obtain a list of columns
foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// as of PHP 5.5.0 you can use array_column() instead of the above code
$volume  = array_column($data, 'volume');
$edition = array_column($data, 'edition');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

foreach ($data as $key => $value) {
	echo $value['volume'].'<br>';
}

?>