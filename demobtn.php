<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<style type="text/css">
		.btnn{
				border: 1px solid red;
	color:blue;
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	padding: 12px 25px;
	display: inline-block;
	position: relative;
	float: right;
	margin-top: 25px;
	margin-right: 40px;
	transition: all .5s ease-in-out;

		}
		.btnn:after{
					background: gold;
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width:0%;
	height: 100%;
	z-index: -1!important;
			transition: all .5s ease-in-out;
}
.btnn:hover{
	color: #fff;
}
.btnn:hover:after{
	width: 100%;

		}
	</style>
</head>
<body>
<a href="" class="btnn">login</a>
</body>
</html>