<?php

const DS = DIRECTORY_SEPARATOR;

$contents = file('elements.csv');
array_shift($contents);

foreach ($contents as $row) {
    
    list($atomicNumber, $elementName, $symbol, $atomicWeight, $electronegativity) = str_getcsv($row);
    
    $stub = file_get_contents('ElementStub.stub');
    $stub = str_replace("%atomic_number%", $atomicNumber, $stub);
    $stub = str_replace("%element_name%", $elementName, $stub);
    $stub = str_replace("%symbol%", $symbol, $stub);
    $stub = str_replace("%atomic_weight%", $atomicWeight, $stub);
    $stub = str_replace("%electronegativity%", $electronegativity, $stub);

    $file = fopen(__DIR__.DS."src".DS."PeriodicTable".DS."$elementName.php", "wb") or die("Unable to open file!");
    fwrite($file, $stub);
    fclose($file);
}

echo "Done".PHP_EOL;