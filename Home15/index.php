<?php
function insertion_Sort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}

$example_array = array(4, 45, 34, 32, -1, 4, 31, -5, -12, 23, -123);
echo "Вхідний масив :<br/>";
echo implode(', ', $example_array);
echo "<br/>";
echo "\nВідсортований масив :<br/>";
print_r(insertion_Sort($example_array));
?>
