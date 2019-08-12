<?php
include "connection.php";
$su5a = $_GET['su5a'];
echo "<input type='hidden' value='$su5a' name='su5a'>"; 
for($i=1;$i<=$su5a;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d9[]' style='margin-right:50px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>