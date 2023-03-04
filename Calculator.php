<!DOCTYPE html>
<html>

<head>
	<title>Simple Scientific Calculator</title>
	<style>
		.btn-primary {
			margin-right: 4px;
			margin-top: 8px;
			width: 100px;
			background-color: #337ab7;
			border-color: #2e6da4;
			color: #fff;
			border-radius: 5px;
		}

		.btn-primary:hover {
			background-color: #286090;
			border-color: #204d74;
			color: #fff;
		}

		.answer {
			margin: 6px;
			box-shadow: 20px;
			font: 20px;
			background-color: #f5f5f5;
			padding: 10px;
			border-radius: 5px;
		}

		b {
			font-size: 30px;
		}

		.mydiv {
			background-color: #f2f2f2;
			padding: 10px;
			border: 1px solid #e6e6e6;
			margin: 20px;
			border-radius: 10px;
		}

		.answer {
			background-color: #e6e6e6;
			padding: 10px;
			border-radius: 50px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:lightblue;">
	<div class='container'>
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b>
						<center>Simple Scientific Calculator</center>
					</b></h1>
				<form method="get" action="" class="">
					<center>
						<input type="text" class='form-control' name="num1" placeholder="Enter number 1">
						<br>
						<input type="text" class='form-control' name="num2" placeholder="Enter number 2">
						<br>
						<button class='btn btn-primary' type="submit" name="add">Add</button>
						<button class='btn btn-primary' type="submit" name="sub">Sub</button>
						<button class='btn btn-primary' type="submit" name="mul">Mul</button>
						<button class='btn btn-primary' type="submit" name="div">Div</button>
						<button class='btn btn-primary' type="submit" name="mod">Mod</button>
						<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>
						<button class='btn btn-primary' type="submit" name="sin">Sin()</button>
						<button class='btn btn-primary' type="submit" name="cos">Cos()</button>
						<button class='btn btn-primary' type="submit" name="tan">Tan()</button>
						<button class='btn btn-primary' type="submit" name="log">Log()</button>
						<button class='btn btn-primary' type="submit" name="log10">Log10()</button>
						<button class='btn btn-primary' type="submit" name="pow">Pow()</button>
					</center>
				</form>
				<br>

				<div class='answer'>
					<center>
						<?php
						$ans = 0;
						$num1 = (float)$_REQUEST['num1'];
						$num2 = (float)$_REQUEST['num2'];
						if (isset($_REQUEST['add'])) {
							$ans = $num1 + $num2;
						} else if (isset($_REQUEST['sub'])) {
							$ans = $num1 - $num2;
						} else if (isset($_REQUEST['mul'])) {
							$ans = $num1 * $num2;
						} else if (isset($_REQUEST['div'])) {
							$ans = $num1 / $num2;
						} else if (isset($_REQUEST['mod'])) {
							$ans = $num1 % $num2;
						} else if (isset($_REQUEST['square-root'])) {
							$ans = sqrt($num1);
						} else if (isset($_REQUEST['sin'])) {
							$ans = sin($num1);
						} else if (isset($_REQUEST['cos'])) {
							$ans = cos($num1);
						} else if (isset($_REQUEST['tan'])) {
							$ans = tan($num1);
						} else if (isset($_REQUEST['log'])) {
							$ans = log($num1);
						} else if (isset($_REQUEST['log10'])) {
							$ans = log10($num1);
						} else if (isset($_REQUEST['pow'])) {
							$ans = pow($num1, $num2);
						}
						echo "<b>Answer is : " . $ans . "</b>";
						?>
					</center>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>