<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Trang Chủ</title>
  <script>
  $( function() {
    $( "#checkin" ).datepicker();
    $("#checkout").datepicker();
  } );
  </script>
  <style>
    body{
      padding:0px;
      margin:0px;
     }
    #container{
      /* structure */
      margin: auto;
      width:60%; 
    }
    /* Banner Structure */
    #banner{
      height:100px;
      background-color:#00ffff;
      color:#ffffff;
      text-align:center;
    }
    #banner p{
      
    }
    #banner .dropdown-menu{
      display:none;
    }
    #banner .dropdown:hover .dropdown-menu{
      display:block;
    }
    #banner .navbar-inverse{
      margin:0px;
    }
    /* End of Banner */
    
    /* Structure of Slideshow */
     #slideshow{
      height:380px;
      position:relative;
      text-align:center;
      background-color:blue;
      color:#ffffff;
     }
     #slideshow > div{
      background: url('css_sprites1.png') ;
      width:100%;
      height:350px;
      position: absolute;
    }
   /* End of Slideshow */
    /* Menu Structure */
    #menu{ 
      height:100px;
      background-color:#6495ED;
      color:#000000;
      text-align:center;
    }
    #menu-wrapper{
      display:inline-block
    
    }
    
    #menu-wrapper div{
      float:left;
      padding: 5px;
    }
    .input-group{
      position: relative;
    }
    .input-group .glyphicon{
     position: absolute;
     padding: 15px;
     right: 0px;
     
    }
 
    /* End of Menu */
    #main{
      height:500px;
      background-color:#dc143c;
      color:#ffffff;
      text-align:center;
    }
    #bottom{
      height:100px;
      background-color:#000000;
      color:#ffffff;
      text-align:center;
    }
    
  </style>
</head>
<body>
    <div id="container">
      <div id="banner"><p>Banner</p>
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <img src="" alt="">
              </div>
              <ul class="nav navbar-nav">
                <li><a href="#">Trang Chủ</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Phòng
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                  </ul>
                </li>
                <li><a href="#">Dịch Vụ</a></li>
                <li><a href="#">Bản Đồ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Đăng Nhập</a></li>
              </ul>
            </div>
         </nav> 
      </div>

      <div id="slideshow"><p>Slideshow</p>
            <div class="mySlides"></div>
            <div class="mySlides"></div>
      </div>
      <div id="menu"><p>Menu</p>
        <form action="post" href="">
          <div id="menu-wrapper">
            <div>
              <select id="roomType" name="roomType">
                <option value="0">Chọn loại phòng</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>  
            </div>
           <div class="input-group">
             <input type="text" id="checkin" value="Ngày nhận phòng"><span class="glyphicon glyphicon-calendar"></span> 
           </div>
           <div class="input-group">
             <input type="text" id="checkout" value="Ngày trả phòng"><span class="glyphicon glyphicon-calendar"></span> 
           </div>
          <div>
            <select id="numberOfRoom" name="numberOfRoom">
              <option value="0">Số lượng phòng</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <select id="numberOfCustomer" name="numberOfCustomer">
              <option value="0">Số lượng khách</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <input type="submit" name="submit" value="Đặt Phòng">
          </div>
          </div>
        </form>
      </div>
      <div id="main"><p>Main</p></div>
      <div id="bottom"><p>Bottom</p></div>
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
         slides[count].style.backgroundPosition = right+"px";
         if (count == 0) {
           count++;
         }else{
           count=0;
         }
         slides[count].style.display = "block";
       }

        slides[count].style.background = "url('css_sprites1.png') " +right+"px"+ " 0";
        slides[count].style.transition = "1s";
        right -= 1000;
      
      setTimeout(function(){slideShow(count) }, 2000);
    } 
  </script>

     
    

</body>
</html>
