<?php
if($_POST['value'] == Addition) {
$Answer=$fnumbr + $snumbr";
}
else if($_POST['value'] == Subtract) {
$Answer=$fnumbr - $snumbr";
}
else if($_POST['value'] == Multiplication) {
$Answer=$fnumbr * $snumbr";
}
else($_POST['value'] == Division) {
$Answer=$fnumbr / $snumbr";
}
echo"Answer is= $Answer";
?>
