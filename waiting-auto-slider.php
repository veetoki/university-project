<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    .slideshow > div{
      background: url('css_sprites1.png');
      width:1000px;
      height:350px;
      position: absolute;
    }
   
  </style>
  </head>
<body>
  <div class="slideshow">
    <div class="mySlides"></div>
    <div class="mySlides"></div>
  </div>
<script>
var right = 0;
var count = 1;
    slideShow(count);
    function slideShow(count)
    {
      var slides = document.getElementsByClassName("mySlides");
       if(right < -3000){
         right = 0;
         slides[count].style.display= "none";
         if (count == 0) {
           count++;
         }else{
           count=0;
         }
         slides[count].style.display = "block";
       }

        slides[count].style.background = "url('css_sprites.png') " +right+"px"+ " 0";
        slides[count].style.transition = "1s";
        right -= 1000;
      
      setTimeout(function(){slideShow(count) }, 2000);
    } 
  </script>

</body>
</html>
