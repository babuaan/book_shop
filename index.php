<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy Books Onlne</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
  <!--icon library-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>  
    
<!--own header css link-->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>

<!--end of own header css link-->
<!--header script link-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--end of header script link-->
<!--Jquery-->

</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>

</script>
<style>
  /*fade image*/
   #stage {
	 margin: 0 auto;
    width:100%;
    height: 292px;
  }

  #stage a {
    position: absolute;
  }
  #stage a img {
   /* padding: 10px;*/
    border: 1px solid #ccc;
    background: #fff;
  }

  #stage a:nth-of-type(1) {
    animation-name: fader;
    animation-delay: 3s;
    animation-duration: 3s;
    z-index: 20;
  }
  #stage a:nth-of-type(2) {
    z-index: 10;
  }
  #stage a:nth-of-type(n+3) {
    display: none;
  }

  @keyframes fader {
    from { opacity: 1.0; }
    to   { opacity: 0.0; }
  }
  </style>

</head>

<body>
<!--include header navbar and categroies-->
  <?php include 'header.php'  ?>  
  
     <!--start of autoslider
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="#"><img src="imge/1.jpg" class="d-block w-100" alt="..." style="height: 300px;"></a>
        </div>
        <div class="carousel-item">
         <a href="#"> <img src="imge/2.jpg" class="d-block w-100" alt="..." style="height:300px;"></a>
        </div>
        <div class="carousel-item">
          <a href="#"><img src="imge/3.jpg" class="d-block w-100" alt="..." style="height: 300px;"></a>
        </div>
        <div class="carousel-item">
          <a href="#"><img src="imge/3.jpg" class="d-block w-100" alt="..." style="height: 300px;"></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
  
end of autoslider-->
<!--fade image start-->
	
<div id="stage">
<a href=""><img src="imge/1.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/2.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/3.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/1.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/2.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/3.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/1.jpg" width="100%;" height="300px;"></a>
<a href=""><img src="imge/3.jpg" width="100%;" height="300px;"></a>
</div>
<!--fadeimage end-->
<br>
<div class="l-magazine-sec">
  <h5 class="l-magazine">Latest Magazine  <input type="button" value="View All" class="button mr-3" ></h5>
</div>

	<div class="container-flex">
		<!--slider------------------->
		<ul id="autoWidth" class="cs-hidden">
		<!--1------------------------------>
  <li class="item-a">
	  <!--slider-box-->
		<div class="box">

		<!--image-->
    <a href="#">
      <img src="imge/2.jpg" width="250px" style="height: 180px;">
    </a>
		<!--details-->
		<div class="details">
		<!--logo-character-->
    Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:green;">20% off</strong></i>
		<!--character-details-->
		
		</div>
		
		</div>
		</li>
		<!--2------------------------------>
  <!--slider-box-->
  <li class="item-a">
	  <!--slider-box-->
		<div class="box">

		<!--image-->
    <a href="#">
      <img src="imge/3.jpg" width="250px" style="height: 180px;">
    </a>
		<!--details-->
		<div class="details">
		<!--logo-character-->
    Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:green;">20% off</strong></i>
		<!--character-details-->
		
		</div>
		
		</div>
		</li>
		<!--3------------------------------>
  <li class="item-a">
	  <!--slider-box-->
		<div class="box">

      <!--image-->
      <a href="#">
        <img src="imge/1.jpg" width="250px" style="height: 180px;">
      </a>
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:green;">20% off</strong></i>
      <!--character-details-->
      </div>
		
		</div>
		</li>
		<!--4------------------------------>
  <li class="item-a">
	  <!--slider-box-->
		
		<div class="box">

      <!--image-->
      <a href="#">
        <img src="imge/2.jpg" width="250px" style="height: 180px;">
      </a>
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:green;">20% off</strong></i>
      <!--character-details-->
		</div>
		
		</div>
		</li>
		<!--5------------------------------>
  <li class="item-a">
	  <!--slider-box-->
		
		<div class="box">

      <!--image-->
      <a href="#">
        <img src="imge/3.jpg" width="250px" style="height: 180px;">
      </a>
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:green;">20% off</strong></i>
      <!--character-details-->
		</div>
		
		</div>
		</li>
		<!--6------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <!--image-->
		<div class="box">
      <a href="#">
        <img src="imge/1.jpg" width="250px" style="height: 180px;">
      </a>
      
    
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
      <!--character-details-->
		</div>
		</div>
		</li>
    </ul>

    
    
  </div>

  <div class="l-magazine-sec">
    <h5 class="l-magazine">Educational <input type="button" value="View All" class="button mr-3" ></h5>
  </div>
  
 <div class="container-flex" >
   <div class="col-lg-3 col-md-3 col-sm-6  col-6 " style="float:left;">
    <!--1 image-->
  <div class="item-a">
    <!--slider-box-->
    <!--image-->
		<div class="box" style="width: 100%;">
      <a href="#">
        <img src="imge/1.jpg" width="100%" style="height: 180px;">
      </a>
      
    
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
      <!--character-details-->
		</div>
		</div>
  </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6  col-6" style="float:left;">
    <!--2 image-->
  <div class="item-a">
    <!--slider-box-->
    <!--image-->
		<div class="box" style="width: 100%;">
      <a href="#">
        <img src="imge/1.jpg" width="100%" style="height: 180px;">
      </a>
      
    
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
      <!--character-details-->
		</div>
		</div>
  </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6  col-6 " style="float:left;">
    <!--3 image-->
  <div class="item-a">
    <!--slider-box-->
    <!--image-->
		<div class="box" style="width: 100%;">
      <a href="#">
        <img src="imge/1.jpg" width="100%" style="height: 180px;">
      </a>
      
    
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
      <!--character-details-->
		</div>
		</div>
  </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6  col-6" style="float:left;">
    <!--4 image-->
  <div class="item-a">
    <!--slider-box-->
    <!--image-->
		<div class="box" style="width: 100%;">
      <a href="#">
        <img src="imge/1.jpg" width="100%" style="height: 180px;">
      </a>
      
    
      <!--details-->
      <div class="details">
        Book Name
        <br>Author Name
        <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
      <!--character-details-->
		</div>
		</div>
  </div>
  </div>
 </div>
  
 <!--motivational-->
&nbsp;
&nbsp;
 <div class="l-magazine-sec">
  <h5 class="l-magazine">Motivational <input type="button" value="View All" class="button mr-3" ></h5>
</div>

<div class="container-flex" >
 <div class="col-lg-3 col-md-3 col-sm-6  col-6 " style="float:left;">
  <!--1 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box" style="width: 100%;">
    <a href="#">
      <img src="imge/1.jpg" width="100%" style="height: 180px;">
    </a>
    
  
    <!--details-->
    <div class="details">
      Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6  col-6" style="float:left;">
  <!--2 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box" style="width: 100%;">
    <a href="#">
      <img src="imge/1.jpg" width="100%" style="height: 180px;">
    </a>
    
  
    <!--details-->
    <div class="details">
      Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6  col-6 " style="float:left;">
  <!--3 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box" style="width: 100%;">
    <a href="#">
      <img src="imge/1.jpg" width="100%" style="height: 180px;">
    </a>
    
  
    <!--details-->
    <div class="details">
      Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6  col-6" style="float:left;">
  <!--4 image-->
<div class="item-a">
  <!--slider-box-->
  <!--image-->
  <div class="box" style="width: 100%;">
    <a href="#">
      <img src="imge/1.jpg" width="100%" style="height: 180px;">
    </a>
    
  
    <!--details-->
    <div class="details">
      Book Name
      <br>Author Name
      <i class="fa fa-inr" aria-hidden="true"> 300 &nbsp; &nbsp; <i class="fa fa-inr" aria-hidden="true"></i><del> 350</del> &nbsp;&nbsp;<strong style="color:rgb(22, 124, 22);">20% off</strong></i>
    <!--character-details-->
  </div>
  </div>
</div>
</div>
</div>
<script src="jquery-3.5.1.min.js"></script>
<script src="./conscript.js" type="text/javascript>"></script>
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
//fade image js
  window.addEventListener("DOMContentLoaded", function(e) {

    var stage = document.getElementById("stage");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("a");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);
//fade image js
</script>
</body>
</html>
