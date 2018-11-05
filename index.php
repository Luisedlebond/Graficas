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
			if (i%100==0) {
				drawLine(i,-2,i,2);
				drawLine(-2,i,2,i);
			}
		}
		//funcion para representar ecuaciones
		function funcion(){
			for (var X = -500; X <= 500; X++) {
				if (X%100==0) {
					drawLine(X,ecuacion(X),X-100,ecuacion(X-100));
				}
			}
		}
		function ecuacion(x){
			//y = (Math.pow(x, 5)-3*Math.pow(x, 3));
			y=Math.pow(x, 2);
			return y;
		}
	funcion();
	</script>
</body>
</html>