<html>


<head>
<meta charset="UTF-8">
	<title>Sangam Pathology</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<style>
body{
	background-color:#f2f2f2;
}
.imgholder img
{
	height:150px;
	width:150px;
}

table td
{
	border:0 !important;
}

.input
{
	border:none;
	box-shadow:0 0 5px 0 #000;
	border-radius:5px;
	padding:2px 5px;
	transition:.2s;
}
.input:hover
{
	box-shadow:0 0 10px 0 #000;
}
.uppercase
{
	    text-transform: uppercase;
}
</style>
</head>
<body>
<hr class="bg-primary"style="   width: 100%;   height: 5px; margin-top:0;" >
<h1 class="text-center" style="letter-spacing:5;">COMPLETE BLOOD COUNT</H1>
<div class=" container inputcontainer py-5" id="bodylayer">
	<div class="formcontainer">
		<form  action="record.php" method="post">
			<table action="record.php" class="table" width="100%">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" class="input"></td>
					<td>Patient ID</td>
					<td><input type="text" name="patientid" class="input"></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><input type="text" name="age" class="input"></td>
					<td>sex</td>
					<td><input type="text" name="sex" class="input"></td>
				</tr>
					
				<tr>
					<td>Receive date</td>
					<td><input type="date" name="receivedate" class="input"></td>
					<td>Print date</td>
					<td><input type="date" name="printdate" class="input"></td>
				</tr>
				
				<tr>
					<td>Haemoglobin</td>
					<td><input type="text" name="haemoglobin" class="input"></td>
					<td>Platelet count</td>
					<td><input type="text" name="platelet" class="input"></td>
				</tr>
				<tr>
					<td>RBC</td>
					<td><input type="text" name="rbc" class="input"></td>
					<td>TLC</td>
					<td><input type="text" name="tlc" class="input"></td>
				</tr>
				
				<tr>
					<td>PVC</td>
					<td><input type="text" name="pvc" class="input"></td>
					<td>MCV</td>
					<td><input type="text" name="mcv" class="input"></td>
				</tr>
				
				<tr>
					<td>MCH</td>
					<td><input type="text" name="mch" class="input"></td>
					<td>MCHC</td>
					<td><input type="text" name="mchc" class="input"></td>
				</tr>
				
				<tr>
					<td>RDW-SD</td>
					<td><input type="text" name="rdwsd" class="input"></td>
					<td>RDW-CV</td>
					<td><input type="text" name="rdwcv" class="input"></td>
				</tr>
				
				<tr>
					<td>Neutrophils</td>
					<td><input type="text" name="neutrophlis" class="input"></td>
					<td>Lymphocytes </td>
					<td><input type="text" name="lymphocytes" class="input"></td>
				</tr>
				
				<tr>
					<td>Monocytes </td>
					<td><input type="text" name="monocytes" class="input"></td>
					<td>Eosinophils </td>
					<td><input type="text" name="eosinophils" class="input"></td>
				</tr>
				
				<tr>
					<td>Basophil </td>
					<td><input type="text" name="basophil" class="input"></td>
					<td>MPV </td>
					<td><input type="text" name="mpv" class="input"></td>
				</tr>
				<tr>
					<td>PDW </td>
					<td><input type="text" name="pdw" class="input"></td>
					<td><input type="submit" value="Submit" name="done" class="btn btn-success btn-sm w-100"></td>
				</tr>
			</table>
		
		</form>
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
