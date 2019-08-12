<?php
include "connection.php";
$su3a = $_GET['su3a'];
echo "<input type='hidden' value='$su3a' name='su3a'>"; 
for($i=1;$i<=$su3a;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d5[]' style='margin-right:50px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>