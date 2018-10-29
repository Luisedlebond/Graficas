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
		//anado senales cada 10px en los ejes como guia
		for (var i = -500; i <= 500; i++) {
			if (i%10==0) {
				drawLine(i,-2,i,2);
				drawLine(-2,i,2,i);
			}
		}
		//funcion para representar ecuaciones
		function funcion(){
			var Y=0;
			for (var X = -500; X <= 500; X++) {
				Y = X + 2*Math.pow(X,2);
					drawLine(X,Y,X-1,Y);
			}
		}
	funcion();
	</script>
</body>
</html>