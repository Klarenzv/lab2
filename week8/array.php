<!DOCTYPE html>
<html>
<body>

<?php
echo "sort array(4, 6, 2, 22, 11) in smallest to largest";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

</body>
</html>
