<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Завдання 3</title>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<section class="left1">
	<a href="index.html">На головну</a>
		<h3>Табуляція</h3>
		<h4>Вхідні данні</h4>
		<div>
			<form action="z3.php" method="get">
			<ol>
			<li><input type="text" id="left2" placeholder="Введіть ліву границю" onchange="rightg()"></li>
			<li>Виберіть праву границю
			<select id="right2">  
			</select></li>
			<li>Крок
			<select id="step2">
			<option>0.5</option>
				  <option>1</option>
				  <option>1.5</option>
				  <option>2</option>
				</select></li>
			</ol>
			<input type="submit" value="Протабулювати"><br>
			<input type="button" value="Очистити" onclick="clear2()">
			</form>
		</div>
		<div id="rez1">
			<?
			$a=Number(document.getElementById("left2").value);
			$n=Number(document.getElementById("right2").options.selectedIndex);
			$k=Number(document.getElementById("right2").options[n].text);
			$n=Number(document.getElementById("step2").options.selectedIndex);
			$h=Number(document.getElementById("step2").options[n].text);
			echo "<table>";
			$y;
			echo "<tr>"."<td>".$x."</td>"."<td>".$y."</td>"."</tr>";
			for($i = $a; $i<=$k; $i=$i+$h){
				$y=(exp($i)-exp(-$i))/4;
				vuhod=vuhod+"<tr>"+"<td>"+i.toFixed(2)+"</td>"+"<td>"+y.toFixed(2)+"</td>"+"</tr>";
			}
			vuhod=vuhod+"</table>";
			?>
		</div>
	</section>
	<section class="right1">
		
	</section>
</body>
</html>