<?php                   
$fruits = array("apple" , "banana","cherry","date","fig","orange");
echo "All fruits: " . implode(" ", $fruits). "<br>";

echo "Fruits at index 0: " . $fruits[0] . "<br>";
echo "Fruits at index 2: " . $fruits[2] . "<br>";


$fruits[] = "grape";
$fruits[6] = "kiwi";

echo"All fruits: " . implode(",", $fruits) . "<br>";

$fruits[1] = "blueberry";

unset($fruits[3]);

echo "modified fruits: " . implode(", ", $fruits) . "<br>";
?>