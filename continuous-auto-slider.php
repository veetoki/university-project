<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    .slideshow {
  width:1000px;
  height:350px;
  position: relative;
  overflow: hidden;
}
 .slideshow >  div{
  background: url('css_sprites1.png');
  position: absolute;
  height: 350px;
  width: 4000px;
  /* animation: slideshow 10s linear infinite; */
  transform: translate3d(0,0,0);
}
.images1{
  left: -2000px;
  top: 0;
  animation: slideshow 20s linear infinite;
}
.images2{
  left: 0px;
  top:0;
  animation: slideshow 20s linear infinite;
}
@keyframes slideshow {
  100%{
    transform: translateX(-3000px);
  }
}
  </style>
  <title></title>
</head>
<body>
  <div class="slideshow">
    <div class="images1"></div>
   <div class="images2"></div>
  </div>
</body>
</html>
