<style>
h2 
{
	margin-top:40px; 
}
</style>

<script>
function sub() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","subselect.php?sub="+document.getElementById("sn").value,false);
  xmlhttp.send(null);
  document.getElementById("sc").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty1a() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff1a.php?su1a="+document.getElementById("myNumber1a").value+"&subject="+document.getElementById("sn").value,false);
  xmlhttp.send(null);
  document.getElementById("dif1a").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty1b() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff1b.php?su1b="+document.getElementById("myNumber1b").value,false);
  xmlhttp.send(null);
  document.getElementById("dif1b").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty2a() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff2a.php?su2a="+document.getElementById("myNumber2a").value,false);
  xmlhttp.send(null);
  document.getElementById("dif2a").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty2b() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff2b.php?su2b="+document.getElementById("myNumber2b").value,false);
  xmlhttp.send(null);
  document.getElementById("dif2b").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty3a() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff3a.php?su3a="+document.getElementById("myNumber3a").value,false);
  xmlhttp.send(null);
  document.getElementById("dif3a").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty3b() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff3b.php?su3b="+document.getElementById("myNumber3b").value,false);
  xmlhttp.send(null);
  document.getElementById("dif3b").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty4a() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff4a.php?su4a="+document.getElementById("myNumber4a").value,false);
  xmlhttp.send(null);
  document.getElementById("dif4a").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty4b() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff4b.php?su4b="+document.getElementById("myNumber4b").value,false);
  xmlhttp.send(null);
  document.getElementById("dif4b").innerHTML = xmlhttp.responseText;
}
</script> 

<script>
function difficulty5a() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff5a.php?su5a="+document.getElementById("myNumber5a").value,false);
  xmlhttp.send(null);
  document.getElementById("dif5a").innerHTML = xmlhttp.responseText;
}
</script>

<script>
function difficulty5b() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","diff5b.php?su5b="+document.getElementById("myNumber5b").value,false);
  xmlhttp.send(null);
  document.getElementById("dif5b").innerHTML = xmlhttp.responseText;
}
</script>

<?php
session_start();
if(!isset($_SESSION["librarian"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
	
}
include('connection.php');
include('header.php');
error_reporting(0);
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">                         
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h1 style="color:black; text-align:center;">Generate Question Paper</h1> <br>
								<h4 style="color:black; width:100%; padding:10px; font-family:archivo;"> <b>NOTE:</b>
								<ul><li>By refering to the below table, you can select the questions based on the difficulty level.</li>
								    <li>For each module, there will be two sections and the number of questions for each section can be selected seperately.</li>
								</ul>
								</h4>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content"><br>
                                <form name = "form1" action="" method="post">
									<table>
										<tr>
											<td>
												<select name="sname" class="form-control selectpicker" id="sn" onChange="sub()">
                                				<option value="">select subject</option>
													<?php
													$query="SELECT distinct sname from assign_subject";
													$s=mysqli_query($con,$query);
													while($row=mysqli_fetch_array($s))
													{
														?>
														<option value='<?php echo $row["sname"];?>'>
    		                                			<?php echo $row["sname"];?>
            		                        			</option>
                    		                			<?php
													}
													?>								
												</select>
											</td>
    										<td><div id="sc"><input type="text" value="" name="scode" class="form-control" autocomplete="off" placeholder="Subject Code" style="border-radius:10px;  margin-left:10px;" size="7" disabled></div></td>
        									
											<td> <select name="marks" style="margin-left:20px;" class="form-control selectpicker" id="mks">
													<option value="" disabled selected>select Marks</option>
													<option value="80">80</option>
													<option value="100">100</option>							
												</select>
											</td>
											
											<td><button  type="submit" name="submit1" style="border:none; display: inline-block; margin-left:40px; margin-top:5px; border-radius:30px;"> 
												<img src="images/search.png" height="33px" width="50px" style="border-radius:10px; display: block;"></button></td>
										</tr>
									</table>
								</form>
							
								<form action='qp.php' method='post'>
								<?php
								if(isset($_POST["submit1"]))
								{	
									?>										
										<h2 style='color:black;'>Module 1 </h2>
										<input type="hidden" value="<?php echo $_POST['subject']?>" name="subject">
										<input type="hidden" value="<?php echo $_POST['marks']?>" name="marks">
										<table>
										<tr>
										<td>
										<select type="text" id="myNumber1a" style="margin-left:10px;  color:black;" onChange="difficulty1a()">
										<option> section 1 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>
										
									<?php
								}
								?>
								<?php
								if(isset($_POST["submit1"]))
								{	
									?>
										<select type="text" id="myNumber1b" style="margin-left:100px; margin-top:-30px; color:black;" onChange="difficulty1b()">
										<option> section 2</option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select> </td>
										
										
										<td>
										<table border='1' style='color:black; margin-left:250px;'>
										<col width="170">
  									<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">

											<tr style='font-size:15px; background-color:#ff9966;' height='35px'>
												<th><center>Difficulty / Marks</center></th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th>6</th>
												<th>8</th>
												<th>10</th>
											</tr>
											<tr height='25px'>
												<th><center>L1</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L1' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
												
											</tr>
											<tr height='25px'>
												<th><center>L2</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L2' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L3</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=1 and difficultylevel='L3' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>

										</table>
										</td>

										</tr>
										</table>
										<?php
								}
								?>
								<p id="dif1a">
								</p>
						
								<?php
								if(isset($_POST["submit1"]))
								{	
									?>			
										<hr style="border: 1px solid lightgray;" />							
										<h2 style="color:black;">Module 2  </h2>
										<table>
										<tr>
										<td>
										<select type="text" id="myNumber2a" style="margin-left:10px; color:black;" onChange="difficulty2a()">
										<option> section 1 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>
									<?php
								}
								?>

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>
										<select type="text" id="myNumber2b" style="margin-left:100px; margin-top:-30px; color:black;" onChange="difficulty2b()">
										<option> section 2 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>  </td>
										
										
										<td>
										<table border='1' style='color:black; margin-left:250px;'>
										<col width="170">
  									<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">

											<tr style='font-size:15px; background-color:#ff9966;' height='35px'>
												<th><center>Difficulty / Marks</center></th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th>6</th>
												<th>8</th>
												<th>10</th>
											</tr>
											<tr height='25px'>
												<th><center>L1</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L1' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L2</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L2' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L3</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=2 and difficultylevel='L3' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>

										</table>
										</td>

										</tr>
										</table>
										<?php
								}
								?>
								<p id="dif2a"></p>
								<p id="dif2b"></p>

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>					
										<hr style="border: 1px solid lightgray;" />						
										<h2 style="color:black;">Module 3  </h2>
										<table>
										<tr>
										<td>
										<select type="text" id="myNumber3a" style="margin-left:10px; color:black;" onChange="difficulty3a()">
										<option> section 1 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>
									<?php
								}
								?>

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>
										<select type="text" id="myNumber3b" style="margin-left:100px; margin-top:-30px; color:black;" onChange="difficulty3b()">
										<option> section 2 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select> </td>
										
										
										<td>
										<table border='1' style='color:black; margin-left:250px;'>
										<col width="170">
  									<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">

											<tr style='font-size:15px; background-color:#ff9966;' height='35px'>
												<th><center>Difficulty / Marks</center></th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th>6</th>
												<th>8</th>
												<th>10</th>
											</tr>
											<tr height='25px'>
												<th><center>L1</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L1' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L2</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L2' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L3</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=3 and difficultylevel='L3' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>

										</table>
										</td>

										</tr>
										</table>
										<?php
								}
								?>
								<p id="dif3a"></p>
								<p id="dif3b"></p>
							

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>			
										<hr style="border: 1px solid lightgray;" />								
										<h2 style="color:black;">Module 4 </h2>
										<table>
										<tr>
										<td>
										<select type="text" id="myNumber4a" style="margin-left:10px; color:black;" onChange="difficulty4a()">
										<option> section 1 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>
									<?php
								}
								?>

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>
										<select type="text" id="myNumber4b" style="margin-left:100px; margin-top:-30px; color:black;" onChange="difficulty4b()">
										<option> section 2 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select> </td>
										
										
										<td>
										<table border='1' style='color:black; margin-left:250px;'>
										<col width="170">
  									<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">

											<tr style='font-size:15px; background-color:#ff9966;' height='35px'>
												<th><center>Difficulty / Marks</center></th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th>6</th>
												<th>8</th>
												<th>10</th>
											</tr>
											<tr height='25px'>
												<th><center>L1</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L1' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L2</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L2' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L3</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=4 and difficultylevel='L3' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>

										</table>
										</td>

										</tr>
										</table>
										<?php
								}
								?>
								<p id="dif4a"></p>
								<p id="dif4b"></p>
							

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>		
										<hr style="border: 1px solid lightgray;" />									
										<h2 style="color:black;">Module 5 </h2>
										<table>
										<tr>
										<td>
										<select type="text" id="myNumber5a" style="margin-left:10px; color:black;" onChange="difficulty5a()">
										<option> section 1 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select>
									<?php
								}
								?>

								<?php
								if(isset($_POST["submit1"]))
								{	
									?>
										<select type="text" id="myNumber5b" style="margin-left:100px; margin-top:-30px; color:black;" onChange="difficulty5b()">
										<option> section 2 </option> 
										<option value='1'> 1 </option> 
										<option value='2'> 2 </option>
										<option value='3'> 3 </option> 
										</select> </td>
										
										
										<td>
										<table border='1' style='color:black; margin-left:250px;'>
										<col width="170">
  									<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">
										<col width="50">

											<tr style='font-size:15px; background-color:#ff9966;' height='35px'>
												<th><center>Difficulty / Marks</center></th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th>6</th>
												<th>8</th>
												<th>10</th>
											</tr>
											<tr height='25px'>
												<th><center>L1</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L1' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L2</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L2' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>
											<tr height='25px'>
												<th><center>L3</center></th>
												<?php
                                                $L13="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=3";
                                                $s1=mysqli_query($con,$L13);?>
												<td><?php while($row=mysqli_fetch_array($s1)){echo $row[0]; } ?></td>
												<?php
												$L14="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=4";
                                                $s2=mysqli_query($con,$L14);?>
												<td><?php while($row=mysqli_fetch_array($s2)){echo $row[0]; } ?></td>
												<?php
                                                $L15="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=5";
                                                $s3=mysqli_query($con,$L15);?>
												<td><?php while($row=mysqli_fetch_array($s3)){echo $row[0]; } ?></td>
												<?php
                                                $L16="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=6";
                                                $s4=mysqli_query($con,$L16);?>
												<td><?php while($row=mysqli_fetch_array($s4)){echo $row[0]; } ?></td>
												<?php
                                                $L18="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=8";
                                                $s5=mysqli_query($con,$L18);?>
												<td><?php while($row=mysqli_fetch_array($s5)){echo $row[0]; } ?></td>
												<?php
                                                $L110="select count(question) from question where sname like ('$_POST[sname]') and module=5 and difficultylevel='L3' and marks=10";
                                                $s6=mysqli_query($con,$L110);?>
												<td><?php while($row=mysqli_fetch_array($s6)){echo $row[0]; } ?></td>
											</tr>

										</table>
										</td>

										</tr>
										</table>
										<?php
								}
								?>
								<p id="dif5a"></p>
								<p id="dif5b"></p>
								</form>
               			 	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php
include('footer.php');
?>