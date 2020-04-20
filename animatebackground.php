<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.project{
	width: 100%;
	height: 100vh;
	position: relative;
	overflow: hidden;
	/*background-image: linear-gradient(275deg,#0ff5e2,#1a22c4);*/
	background: black;
}
.project h1{
	color: #fff;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	font-size: 50px;
}
.square ul li{
	position: absolute;
	border:2px solid white;
	width:20px;
	height:20px;
	list-style: none;
	opacity: 0;
	background: #fff;


}
.square li{
	top: 50vh;
	left: 45vh;
	animation: square 10s linear infinite;
}
.square li:nth-child(2){
	top: 80vh;
	left: 100vh;
	animation-delay: 2s;
}
.square li:nth-child(3){
	top: 50vh;
	left: 155vh;
	animation-delay: 4s;
}
.square li:nth-child(4){
	top: 30vh;
	left: 100vh;
	animation-delay: 6s;
}
.square li:nth-child(5){
	top: 20vh;
	left: 20vh;
	animation-delay: 8s;
}
.square li:nth-child(4){
	top: 80vh;
	left: 30vh;
	animation-delay: 3s;
}
.square li:nth-child(5){
	top: 30vh;
	left: 30vh;
	animation-delay: 6s;
}
@keyframes square
{
	0%{
		transform: scale(0) rotateY(0deg);

		opacity: 1;
	}
	100%{
		transform: scale(5) rotateY(1000deg);
		opacity: 0;
	}
}
.circle ul li{
	position: absolute;
	border:2px solid white;
	width:20px;
	height:20px;
	list-style: none;
	opacity: 0;
	background: #fff;


}
.circle li{
	bottom: 0;
	left:45v;
	animation:circle 10s linear infinite;
}
.circle li:nth-child(2){
	
	left:35vw;
	animation-delay: 2s;
}
.circle li:nth-child(3){
	
	left:55vw;
	animation-delay: 4s;
}
.circle li:nth-child(4){
	
	left:75vw;
	animation-delay: 6s;
}
.circle li:nth-child(4){
	
	left:80vw;
	animation-delay: 8s;
}
.circle li:nth-child(5){
	
	left:90vw;
	animation-delay: 6s;
}
.circle li:nth-child(6){
	
	left:70vw;
	animation-delay: 4s;
}
@keyframes circle
{
	0%{
		transform: scale(0) rotateY(0deg);

		opacity: 1;
		
	}
	100%{
		transform: scale(5) rotateY(1000deg);
		opacity: 0;
		bottom: 75vh;
		border-radius: 50%;
	
	}
}
	</style>
</head>
<body>
<div class="project">
	
	
</div>
<div class="square">
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</div>
<div class="circle">
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</body>
</html>