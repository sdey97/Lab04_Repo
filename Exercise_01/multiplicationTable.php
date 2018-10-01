<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table>";
for($rows = 0; $rows <= 100; $rows++){
    echo "<tr>\n";
    for($cols = 0; $cols < 101; $cols++){ 
        if($rows == 0 && $cols == 0){ //blank corner space
            echo "<td></td>\n";
        }
        else if($rows == 0 && $cols != 0){ //column labels
            echo "<td>$cols</td>\n";
        }
        else if($cols == 0 && $rows != 0){ //row labels
            echo "<td>$rows</td>\n";
        }
        else{
            $product = $rows * $cols;
            echo "<td>$product</td>\n";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>