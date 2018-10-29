<!DOCTYPE html>
<html>
<head>
	<title>Graficas</title>
</head>
<body>
	<canvas id="myCanvas" style="border: 1px solid #d3d3d3;">Your Browser does not support the canvas element.</canvas>
	<script type="text/javascript">
		var canvas = document.getElementById("myCanvas");
		canvas.width=1000;
		canvas.height=1000;
		//anado ejes transversales
		drawLine(0,-500,0,500);
		drawLine(-500,0,500,0);
		function drawLine(startX,startY,endX,endY) {
			//dibujamos una linea desde la punto de partida
			canvas.getContext("2d").beginPath();
			//movemos el punto (0,0) en el centro de la grafica
			canvas.getContext("2d").moveTo(startX+500,500-startY);
			canvas.getContext("2d").lineTo(endX+500,500-endY);
			canvas.getContext("2d").stroke();
		}
	</script>
</body>
</html>