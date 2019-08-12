<?php
include "connection.php";
$su4a = $_GET['su4a'];
echo "<input type='hidden' value='$su4a' name='su4a'>"; 
for($i=1;$i<=$su4a;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d7[]' style='margin-right:50px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>