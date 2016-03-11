<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Завдання 2</title>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<section class="left1">
	<a href="index.html">На головну</a>
		<h3>Табуляція</h3>
		<h4>Вхідні данні</h4>
		<div>
			<form action="z2.php" method="get">
			<ol>
			<li><input type="text" name="left" id="left" placeholder="Введіть ліву границю"></li>
			<li><input type="text" name="right" id="right" placeholder="Введіть праву границю" onchange="valid()"></li>
			<div id="inf"></div>
			<li><input type="text" name="step" id="step" placeholder="Введіть крок"></li>
			</ol>
			<input type="submit" value="Протабулювати"><br>
			<input type="button" value="Очистити" onclick="clear1()">
			</form>
		</div>
		<div id="rez">
			<?
			if(isset($_GET[left])&&isset($_GET[right])&&isset($_GET[step])){
				$t=16.8;
				$b=3.787;
				$c=0.51;
				$z=1;
				$f=3.26;
				echo "<table>";
				$i=$_GET[left];
				$y=0;
				while($i<=$_GET[right]) {
					if($i<1) {
						$y=exp($i)+(log($t+$i)/$b);
					} else
					{
						if($i>2.2)
						{
							$y=pow(($t*pow($i,2)+$z),1 /4)/$c;
						}
						else
						{
							$y=($t*sin(pow($i,2)))/(pow(($f*pow($i,2)+pow($c,2)),1/3));
						}
					};
					echo "<tr><td>".$i."</td><td>".$y."</td></tr>";
					$i+=$_GET[step];
				}
				echo "</table>";
			}
			?>
		</div>
	</section>
	<section class="right1">
		
	</section>
</body>
</html>