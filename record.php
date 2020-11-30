<html>


<head>
<meta charset="UTF-8">
	<title>Sangam Pathology</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<style>
body{
	background-color:#f2f2f2;
}

.bluesection
{
	border-radius:20px;
	background:rgba(0, 123, 255,0.3);
}
.uppercase
{
	    text-transform: uppercase;
}
#datacollected
{display:none;}
.imgholder img
{
	height:150px;
	width:150px;
}
</style>
</head>
<body>
<hr class="bg-primary"style="   width: 100%;   height: 5px; margin-top:0;" >
<div class="container">
<a href="./" class="btn btn-primary float-right mt-2" >back</a>
<h1 class="text-center" style="letter-spacing:5;">COMPLETE BLOOD COUNT</H1>
</div>
<?php
	if(isset($_POST['done']))	
	{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$patientid=$_POST['patientid'];
		$receivedate=$_POST['receivedate'];
		$printdate=$_POST['printdate'];
		$haemoglobin=$_POST['haemoglobin'];
		$rbc=$_POST['rbc'];
		$platelet=$_POST['platelet'];
		$tlc=$_POST['tlc'];
		$pvc=$_POST['pvc'];
		$mcv=$_POST['mcv'];
		$mch=$_POST['mch'];
		$mchc=$_POST['mchc'];
		$rdwsd=$_POST['rdwsd'];
		$rdwcv=$_POST['rdwcv'];
		$neutrophlis=$_POST['neutrophlis'];
		$lymphocytes=$_POST['lymphocytes'];
		$monocytes=$_POST['monocytes'];
		$eosinophils=$_POST['eosinophils'];
		$basophil=$_POST['basophil'];
		$mpv=$_POST['mpv'];
		$pdw=$_POST['pdw'];
		
	}
?>

<div class="container bg-light my-5 py-2">
	<div class="row m-0">
		<div class="col-lg-6 col-md-6 col-12">
			<table width="50%">
				<tr>
					<td class="uppercase">Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td class="uppercase">age/sex</td>
					<td><?php echo $age . "/" . $sex; ?></td>
				</tr>
				<tr>
					<td class="uppercase">Patient id</td>
					<td><?php echo $patientid; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<table width=50%">
				<tr>
					<td class="uppercase">Referred by</td>
					<td><?php ?></td>
				</tr>
				<tr>
					<td class="uppercase">received date</td>
					<td><?php echo $receivedate; ?></td>
				</tr>
				<tr>
					<td class="uppercase">print date</td>
					<td><?php echo $printdate; ?></td>
				</tr>
			</table>
		</div>	
	</div>	
</div>
<div class="container bluesection py-2">
	<table width="100%" cellpadding=10 >
		<tr>
			<td class="uppercase">Haemoglobin</td>
			<td><?php echo $haemoglobin; ?></td>
			<td>g/dl</td>
			<td>12.0-13.0</td>
		</tr>
		<tr>
			<td class="uppercase">Platelet count</td>
			<td><?php echo $platelet; ?></td>
			<td>lakhs/cu.mm</td>
			<td>1.5-4.5</td>
		</tr>
		<tr>
			<td class="uppercase">RBC</td>
			<td><?php echo $rbc; ?></td>
			<td>mili/cu.mm</td>
			<td>4.5-5.0</td>
		</tr>
		<tr>
			<td class="uppercase">TOTAL leucocyte count</td>
			<td><?php echo $tlc; ?></td>
			<td>/cu.mm</td>
			<td>4000-11000</td>
		</tr>
	</table>
</div>

<div class="container py-5">
	<div class="row m-0">
		<div class="col-lg-6 col-md-6 col-12">
		<div class="bluesection px-5 py-3">
		<h4 class="text-center pb-3">RBC</h4>
			<table width="100%" cellpadding=15 class="" >
				<tr>
					<th class="uppercase">Name</th>
					<th class="uppercase" >Result</th>
					<th class="uppercase">Bio-ref</th>
				</tr>
				<tr>
					<td class="uppercase">PVC</td>
					<td><?php echo $pvc; ?></td>
					<td>35.0-45.0</td>
				</tr>
				<tr>
					<td class="uppercase">mcv</td>
					<td><?php echo $mcv; ?></td>
					<td>80.0-90.0</td>
				</tr>
				<tr>
					<td class="uppercase">MCH</td>
					<td><?php echo $mch; ?></td>
					<td>27-32</td>
				</tr>
				<tr>
					<td class="uppercase">MCHc</td>
					<td><?php echo $mchc; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">rdw-sd</td>
					<td><?php echo $rdwsd; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">rdw-cv</td>
					<td><?php echo $rdwcv; ?></td>
					<td>32-36.0</td>
				</tr>
			</table>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="bluesection px-5 py-3">
		<h4 class="text-center pb-3">Differential leucocyte count</h4>
			<table width="100%" cellpadding=4 class="" >
				<tr>
					<th class="uppercase">Name</th>
					<th class="uppercase" >Result</th>
					<th class="uppercase">Bio-ref</th>
				</tr>
				<tr>
					<td class="uppercase">Neutrophils</td>
					<td><?php echo $neutrophlis; ?></td>
					<td>40-65</td>
				</tr>
				<tr>
					<td class="uppercase">Lymphocytes</td>
					<td><?php echo $lymphocytes; ?></td>
					<td>20-45</td>
				</tr>
				<tr>
					<td class="uppercase">Monocytes</td>
					<td><?php echo $monocytes; ?></td>
					<td>27-32</td>
				</tr>
				<tr>
					<td class="uppercase">MCHc</td>
					<td><?php echo $mchc; ?></td>
					<td>0-6</td>
				</tr>
				<tr>
					<td class="uppercase">eosinophils</td>
					<td><?php echo $eosinophils; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">basophil</td>
					<td><?php echo $basophil; ?></td>
					<td>0-5</td>
				</tr>
			</table>
			</div>
			<div class="bluesection mt-2 px-5 py-3">
				<h4 class="text-center pb-3">Platelet</h4>
				<table width="100%" cellpadding=4 class="" >
					<tr>
						<td class="uppercase">MPV</td>
						<td ><?php echo $mpv; ?></td>
						<td >16.5-12.0</td>
					</tr>
					<tr>
						<td class="uppercase">PDW</td>
						<td><?php echo $pdw; ?></td>
						<td>9.6-15.2</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="py-5 container-fluid text-center">
	<h3 class="uppercase text-center">lifestyle suggestions</h3>
	<div class="imgholder">
	
		<img src="exc.png">
		<img src="diet.png">
	</div>
	<h5 class="uppercase float-right">Pathalogist</h5>
</div>

<div class="footer bg-warning py-5" style="">
	<h1 class="uppercase text-center py-5">Sangam Pathology labs</h1>
</div>
<hr class="bg-primary"style="   width: 100%;   height: 5px; margin-bottom:0; margin-top:0;" >
</body>

</html>