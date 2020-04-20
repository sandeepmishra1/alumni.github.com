<!DOCTYPE html>
<html>
<head>
<title>Multi Layered Effect with CSS3</title>
<style>

.container{
position: relative;
width: 360px;
margin-top: 250px;
background: rgba(0, 0, 0, 1);
background-size: cover;
transform: rotate(-20deg) skew(30deg) scale(0.9);
transition: 0.5s;

}
.container img{
position:  absolute;
width: 300px;
height: 250px;
transition: 0.5s;
cursor:  pointer;
}
.container:hover img:nth-child(4){
transform: translate(160px, -160px);
opacity: 1;
}
.container:hover img:nth-child(3){
transform: translate(120px, -120px);
opacity: 0.8;
}
.container:hover img:nth-child(2){
transform: translate(80px, -80px);
opacity: 0.6;
}
.container:hover img:nth-child(1){
transform: translate(40px, -40px);
opacity: 0.4;
}
</style>


</head>
<body>
<div class="container">
<img src="image/banner1.jpg">
<img src="image/banner1.jpg">
<img src="image/banner1.jpg">
<img src="image/banner1.jpg">
</div>
</body>
</html>