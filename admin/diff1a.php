<?php
include "connection.php";
$su1a = $_GET['su1a']; 

echo "<input type='hidden' name='su1a' value='$su1a'>";
for($i=1;$i<=$su1a;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d1[]' style='margin-right:50px; margin-top:10px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
echo "<p id='dif1b'></p>";
?>