<html>
<head> 
<title>.</title>
</head>

<body>
<?php
include('connection.php');
$subject = $_POST['subject']; 
$marks = $_POST['marks'];

if($marks==80)
{
$e="select * from add_subject where sname='$subject'";
$re1= mysqli_query($con, $e);
$re2 = mysqli_fetch_array($re1);

echo"<b>USN </b><img src='images/usn.jpg' height='40px;' align='middle'> <b style='float:right;'>".$re2[0]."</b>";
echo"<h2> <center>" .$subject. "</center> </h2>";
echo"Time: 3 hrs. <div style='float:right;'>Max. Marks: 80</div> <br>";
echo"<br> <b> <i style='margin-left:25px;'>Note: Answer any FIVE full questions, choosing one full question from each module. </i> </b> <br> <br>";
//module 1
function pick_theory_questionsm1($used_questions,$z1,$v,$w, $f)
{
								include('connection.php');
								$subject = $_POST['subject']; 	
                                $x=1;
                                $maxx=16;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
                                    $n0=rand(0,1);
									$n1=rand(0,3);
								
									
switch($v){
   case 1: 
   $query1= "SELECT * from question where marks=16 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   case 2: 
   if($n0==0){
   $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   
   
   else{
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=3 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
		
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;

echo "<tr> <td>" .$f. "</td>";

while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];
        echo"<td>a.</td> ";
        echo "<td>".$r1[1]."</td>";
		echo "<td>".$r1[2]."</td>";
		echo "<td>(".$r1[3]." marks)</td>";
        echo "</tr>";
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>";
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

 
 
 
 

 
//module 2

function pick_theory_questionsm2($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=2;
                                $maxx=16;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
                                    $n0=rand(0,1);
									$n1=rand(0,3);
									
switch($v){
   case 1: 
   $query1= "SELECT * from question where marks=16 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   case 2: 
   if($n0==0){
   $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   
   
   else{
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=3 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
		
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;

echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];
$scode = $r1[7];
echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>";
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function


//module 3

function pick_theory_questionsm3($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=3;
                                $maxx=16;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
                                    $n0=rand(0,1);
									$n1=rand(0,3);
									
switch($v){
   case 1: 
   $query1= "SELECT * from question where marks=16 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   case 2: 
   if($n0==0){
   $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   
   
   else{
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=3 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
		
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function


//module4

function pick_theory_questionsm4($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];	
                                $x=4;
                                $maxx=16;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
                                    $n0=rand(0,1);
									$n1=rand(0,3);
									
switch($v){
   case 1: 
   $query1= "SELECT * from question where marks=16 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   case 2: 
   if($n0==0){
   $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   
   
   else{
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=3 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
   break;   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];


echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

//module5

function pick_theory_questionsm5($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=5;
                                $maxx=16;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
                                    $n0=rand(0,1);
									$n1=rand(0,3);
									
switch($v){
   case 1: 
   $query1= "SELECT * from question where marks=16 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   case 2: 
   if($n0==0){
   $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   
   
   else{
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   
   }
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=3 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
		
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>";  
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

//module1
$su1a = $_POST['su1a'];
$su1b = $_POST['su1b'];
$w1=$_POST["d1"];
$w2=$_POST["d2"];                                  
$z1=0;                                    
$used=array(); 
$s1="01";
$s2="02";
echo "<b><u style='margin-left:43%;'>Module-1</u></b>"; 
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used=pick_theory_questionsm1($used,$z1,$su1a,$w1, $s1);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used=pick_theory_questionsm1($used,$z1,$su1b,$w2, $s2);
echo "</table>";
echo "<br>";
$z1++;

//module2 
$su2a = $_POST['su2a'];
$su2b = $_POST['su2b'];
$w3=$_POST["d3"];
$w4=$_POST["d4"];
$z1=0;                                    
$used2=array(); 
$s3="03";
$s4="04"; 
echo "<br><b><u style='margin-left:43%;'>Module-2</u></b><br>";
echo "<table>";    
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                   
$used2=pick_theory_questionsm2($used2,$z1,$su2a,$w3, $s3);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used2=pick_theory_questionsm2($used2,$z1,$su2b,$w4, $s4);
echo "</table>";
echo"<br>";
$z1++;  

//module3
$su3a = $_POST['su3a'];
$su3b = $_POST['su3b'];
$w5=$_POST["d5"];
$w6=$_POST["d6"];
$z1=0;                                    
$used3=array(); 
$s5="05";
$s6="06"; 
echo "<br><b><u style='margin-left:43%;'>Module-3</u></b><br>"; 
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                      
$used3=pick_theory_questionsm3($used3,$z1,$su3a,$w5, $s5);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used3=pick_theory_questionsm3($used3,$z1,$su3b,$w6, $s6);
echo "</table>";
echo"<br>";
$z1++;  

//module4
$su4a = $_POST['su4a'];
$su4b = $_POST['su4b'];
$w7=$_POST["d7"];
$w8=$_POST["d8"];
$z1=0;                                    
$used4=array();    
$s7="07";
$s8="08"; 
echo "<br><b><u style='margin-left:43%;'>Module-4</u></b><br>";    
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                    
$used4=pick_theory_questionsm4($used4,$z1,$su4a,$w7, $s7);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used4=pick_theory_questionsm4($used4,$z1,$su4b,$w8, $s8);
echo "</table>";
echo"<br>";
$z1++;  

//module5
$su5a = $_POST['su5a'];
$su5b = $_POST['su5b'];
$w9=$_POST["d9"];
$w10=$_POST["d10"];
$z1=0;                                    
$used5=array();  
$s9="09";
$s10="10"; 
echo "<br><b><u style='margin-left:43%;'>Module-5</u></b><br>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                     
$used5=pick_theory_questionsm5($used5,$z1,$su5a,$w9, $s9);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used5=pick_theory_questionsm5($used5,$z1,$su5b,$w10, $s10);
echo "</table>";
echo"<br>";
$z1++;  
}


//100 marks
else
{
$e="select * from add_subject where sname='$subject'";
$re1= mysqli_query($con, $e);
$re2 = mysqli_fetch_array($re1);

echo"<b>USN </b><img src='images/usn.jpg' height='40px;' align='middle'> <b style='float:right;'>".$re2[0]."</b>";
echo"<h2> <center>" .$subject. "</center> </h2>";
echo"Time: 3 hrs. <div style='float:right;'>Max. Marks: 100</div> <br>";
echo"<br> <b> <i style='margin-left:25px;'>Note: Answer any FIVE full questions, choosing one full question from each module. </i> </b> <br> <br>";
//module 1
function pick_theory_questionsm1($used_questions,$z1,$v,$w, $f)
{
								include('connection.php');
								$subject = $_POST['subject']; 	
                                $x=1;
                                $maxx=20;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
									$n1=rand(0,3);
																
switch($v){
   case 2: 
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   $query2= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   break;
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;

echo "<tr> <td>" .$f. "</td>";

while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];
        echo"<td>a.</td> ";
        echo "<td>".$r1[1]."</td>";
		echo "<td>".$r1[2]."</td>";
		echo "<td>(".$r1[3]." marks)</td>";
        echo "</tr>";
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>";
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

 
 
 
 

 
//module 2

function pick_theory_questionsm2($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=2;
                                $maxx=20;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
									$n1=rand(0,3);
									
switch($v){
   case 2: 
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   break;
    
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;

echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];
$scode = $r1[7];
echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>";
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function


//module 3

function pick_theory_questionsm3($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=3;
                                $maxx=20;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
									$n1=rand(0,3);
									
switch($v){
   case 2: 
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}		
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function


//module4

function pick_theory_questionsm4($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];	
                                $x=4;
                                $maxx=20;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
									$n1=rand(0,3);
									
switch($v){
 case 2: 
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   
   $query2= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   break;
   
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
   break;   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
     
             
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];


echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>"; 
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

//module5

function pick_theory_questionsm5($used_questions,$z1,$v,$w, $f){
								include('connection.php');
                                $subject = $_POST['subject'];
                                $x=5;
                                $maxx=20;
								$cnt  = $v;
                                for($i=0;$i<$v;$i++)
                                {
                                    $a = $w[$i];
                                    $b[$i]=$a;
                                }    
									$n1=rand(0,3);
									
switch($v){
 
   case 2: 
   $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
   $res1= mysqli_query($con, $query1);
   
   $query2= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
   $res2= mysqli_query($con, $query2);
   break;
   
   
   
   case 3: 
    if($n1==0){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
		}
	
	else if($n1==1){
    $query1= "SELECT * from question where marks=10 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=5 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	else if($n1==2){
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
   
    $query2= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=4 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
	
	else{
    $query1= "SELECT * from question where marks=8 and module='$x' and sname='$subject' and difficultylevel='$b[0]' order by RAND() limit 1";
    $res1= mysqli_query($con, $query1);
    
    $query2= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[1]' order by RAND() limit 1";
    $res2= mysqli_query($con, $query2);
	
    $query3= "SELECT * from question where marks=6 and module='$x' and sname='$subject' and difficultylevel='$b[2]' order by RAND() limit 1";
    $res3= mysqli_query($con, $query3);
	
	}
	
   break;
   
}

$q1=0;
$q2=0;
$q3=0;    
$z1=0;
echo "<tr> <td>" .$f. "</td>";
while($r1 = mysqli_fetch_array($res1,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r1[0],$used_questions))){
$z1++;    $q1=$r1[3];

echo"<td>a.</td> ";
echo "<td>".$r1[1]."</td>";
echo "<td>".$r1[2]."</td>";
echo "<td>(".$r1[3]." marks)</td>";
echo "</tr>";
        array_push($used_questions,$r1[0]);
}

else {
	
     echo ".";
	 echo "<script>window.location.reload();</script>";
     }
}
     
$z1=0;

while($r2 = mysqli_fetch_array($res2,MYSQLI_BOTH) and $z1<1){
if(!(in_array($r2[0],$used_questions))){
$z1++;$q2=$r2[3];

echo"<tr><td> </td> ";
echo"<td>b.</td> ";
echo "<td>".$r2[1]."</td>";
echo "<td>".$r2[2]."</td>";
echo "<td>(".$r2[3]." marks)</td>";
echo "</tr>"; 
         array_push($used_questions,$r2[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}     
     
 
if($v==3){
$z1=0;

while($r3 = mysqli_fetch_array($res3, MYSQLI_BOTH) and $z1<1){
if(!(in_array($r3[0],$used_questions))){
$z1++;$q3=$r3[3];

echo"<tr><td> </td> ";
echo"<td>c.</td> ";
echo "<td>".$r3[1]."</td>";
echo "<td>".$r3[2]."</td>";
echo "<td>(".$r3[3]." marks)</td>";
echo "</tr>";  
	 
         array_push($used_questions,$r3[0]);
}

else { 
     echo ".";
	 echo "<script>window.location.reload();</script>";
	 }
}   
    
    
} 
$cum=$q1+$q2+$q3;
if($cum<$maxx)	
{
    echo ".";
	echo "<script>window.location.reload();</script>";
	
}

return $used_questions;     
}  //end of function

//module1
$su1a = $_POST['su1a'];
$su1b = $_POST['su1b'];
$w1=$_POST["d1"];
$w2=$_POST["d2"];                                  
$z1=0;                                    
$used=array(); 
$s1="01";
$s2="02";
echo "<b><u style='margin-left:43%;'>Module-1</u></b>"; 
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used=pick_theory_questionsm1($used,$z1,$su1a,$w1, $s1);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used=pick_theory_questionsm1($used,$z1,$su1b,$w2, $s2);
echo "</table>";
echo "<br>";
$z1++;

//module2 
$su2a = $_POST['su2a'];
$su2b = $_POST['su2b'];
$w3=$_POST["d3"];
$w4=$_POST["d4"];
$z1=0;                                    
$used2=array(); 
$s3="03";
$s4="04"; 
echo "<br><b><u style='margin-left:43%;'>Module-2</u></b><br>";
echo "<table>";    
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                   
$used2=pick_theory_questionsm2($used2,$z1,$su2a,$w3, $s3);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";   
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used2=pick_theory_questionsm2($used2,$z1,$su2b,$w4, $s4);
echo "</table>";
echo"<br>";
$z1++;  

//module3
$su3a = $_POST['su3a'];
$su3b = $_POST['su3b'];
$w5=$_POST["d5"];
$w6=$_POST["d6"];
$z1=0;                                    
$used3=array(); 
$s5="05";
$s6="06"; 
echo "<br><b><u style='margin-left:43%;'>Module-3</u></b><br>"; 
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                      
$used3=pick_theory_questionsm3($used3,$z1,$su3a,$w5, $s5);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used3=pick_theory_questionsm3($used3,$z1,$su3b,$w6, $s6);
echo "</table>";
echo"<br>";
$z1++;  

//module4
$su4a = $_POST['su4a'];
$su4b = $_POST['su4b'];
$w7=$_POST["d7"];
$w8=$_POST["d8"];
$z1=0;                                    
$used4=array();    
$s7="07";
$s8="08"; 
echo "<br><b><u style='margin-left:43%;'>Module-4</u></b><br>";    
echo "<table>"; 
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                    
$used4=pick_theory_questionsm4($used4,$z1,$su4a,$w7, $s7);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used4=pick_theory_questionsm4($used4,$z1,$su4b,$w8, $s8);
echo "</table>";
echo"<br>";
$z1++;  

//module5
$su5a = $_POST['su5a'];
$su5b = $_POST['su5b'];
$w9=$_POST["d9"];
$w10=$_POST["d10"];
$z1=0;                                    
$used5=array();  
$s9="09";
$s10="10"; 
echo "<br><b><u style='margin-left:43%;'>Module-5</u></b><br>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";                                     
$used5=pick_theory_questionsm5($used5,$z1,$su5a,$w9, $s9);
echo "</table>";
echo "<br>";
echo "<div style='margin-left:45%;'> <b> OR </b> </div>";
echo "<table>";
echo "<col>"; 
echo "<col>";
echo "<col width='900'>";
echo "<col width='30' >";
echo "<col width='90'>";
$used5=pick_theory_questionsm5($used5,$z1,$su5b,$w10, $s10);
echo "</table>";
echo"<br>";
$z1++;  
}


?>
</body>
</html>