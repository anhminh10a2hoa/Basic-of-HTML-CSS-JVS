function choose() {
	var a = document.getElementById("draw").value;
	if(a == "line") {draw_line();}
	else if (a == "circle") {draw_circle();}
	else if (a == "linear_gradient") {draw_lg();}
	else if (a == "radial_gradient") {draw_rg();}
	else if (a == "image") {draw_image();}
	else {clear_canvas();}
}
function draw_line() {
	var canvas = document.getElementById("drawing_area");
	var context = canvas.getContext("2d");
	context.beginPath();
		var a=Math.random() * 600;
		var a1=Math.random() * 400;
		var b=Math.random() * 600;
		var b1=Math.random() * 400;
			context.moveTo(a,a1);
			context.lineTo(b,b1);
			context.strokeStyle=getRandomColor();
			context.stroke();
}
function draw_circle() { 
//Here we print a message
	var canvas = document.getElementById("drawing_area");
	var context = canvas.getContext("2d");
	var rx=Math.random() * 500 + 100;
	var ry=Math.random() * 350 + 50;
	var r=Math.random() * (canvas.width/2);
//Here we draw an arc clockwise
		context.beginPath();
//Here we draw an arc clockwise
		context.arc(rx,ry,r, 0,2*Math.PI);
//context.strokeStyle="#FF0000";
//Here we call getRandomColor() to get a random color
		context.strokeStyle=getRandomColor();
		context.lineWidth='2';
		context.stroke();
}
function draw_lg() { 
  
	var canvas = document.getElementById("drawing_area"); 
	var context = canvas.getContext("2d"); 
	var x0=0, y0=0, x1=canvas.width, y1=0; 
	var c=Math.random() * 550 + 50;
	var c1=Math.random() * 350 + 50;
	var d=Math.random() * 600 + 0;
	var d1=Math.random() * 400 + 0;
//Here we create gradient
	var gradient = context.createLinearGradient(x0,y0, x1, y1); 
		gradient.addColorStop(0,getRandomColor()); 
		gradient.addColorStop(0.3,getRandomColor()); 
		gradient.addColorStop(0.6,getRandomColor()); 
		gradient.addColorStop(0.8,getRandomColor()); 
		gradient.addColorStop(1,getRandomColor()); 
//Here we fill with gradient
		context.fillStyle = gradient; 
		context.fillRect(c,c1,d, d1); 
}
function draw_rg() { 
	var canvas = document.getElementById('drawing_area'); 
	var context = canvas.getContext('2d'); 
	var x=Math.random() * 550 + 50;
	var y=Math.random() * 350 + 50;
	var r=Math.random() * 150 + 0;
	var grad4 = context.createRadialGradient(x,y,0,x,y,r); 
		grad4.addColorStop(0,getRandomColor()); 
		grad4.addColorStop(.2,getRandomColor()); 
		grad4.addColorStop(.4,getRandomColor()); 
		grad4.addColorStop(.6,getRandomColor()); 
		grad4.addColorStop(.8,getRandomColor()); 
		grad4.addColorStop(1,getRandomColor()); 
		context.beginPath(); 
		context.arc(x,y,r,0,Math.PI*2); 
		context.fillStyle = grad4; 
		context.fill(); 
//context.fill(); 
}
function draw_image() {
	var canvas = document.getElementById("drawing_area");
	var context = canvas.getContext("2d");
	var imagestore = ["images/1.jpg", "images/2.jpg", "images/3.jpg", "images/4.jpg", "images/5.jpg", "images/6.jpg", "images/7.jpg", "images/8.jpg", "images/9.jpg", "images/10.jpg"];
	var image = document.getElementById("image");
	image.src = imagestore[Math.round(Math.random() * 9)];
	var a = Math.random() * 400 + 0;
	var b = Math.random() * 300 + 0;
	context.drawImage(image, a , b, 300, 400);
}
function clear_canvas() {   
	var canvas = document.getElementById("drawing_area"); 
	var context = canvas.getContext("2d"); 
		context.clearRect(0, 0, canvas.width, canvas.height); 
}
function getRandomColor() { 
	var digits = '0123456789ABCDEF';
    var color = '#';
		for (var i = 0; i < 6; i++) {   
			color += digits[Math.floor(Math.random() * 16)];
}  
return color;
}