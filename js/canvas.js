function draw() {
	var canvas = document.getElementById("canvas");
	if (canvas.getContext) {
		var context = canvas.getContext("2d");
	}
	// Create a rectangle that has been filled.
	context.fillRect(150,125,100,100);
	// Create any other (straight line) shape that has been filled.
	context.beginPath();
	context.moveTo(10,20);
	context.lineTo(20,30);
	context.lineTo(20,15);
	context.fill();
	// Create a circle.
	context.beginPath();
	context.moveTo(180,15);
	context.arc(90,90,50,0,Math.PI*2,true);
	context.stroke();
}