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
    
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>

<!--<link rel="stylesheet" href="css/indexcss.css">-->
<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>

</script>


</head>

<body>

    
    <div class="nav ">
        <div class="brand-logo">
        <a href="#">
          <img src="logo/brand.png" alt="Mohan Books">
        </a>
      </div>
      <div class="col-lg-6 " style="background-color: re;">
      <form class="search-group">
        <input type="text" class="search" placeholder="Search">
        <button type="button" class="b-search" Value="Search">Search
         </button>
      </form>
    </div>
    
      <a href="#" class="login" data-toggle="modal" data-target="#loginModalCenter">
        <span> <h5><i class="fas fa-sign-in-alt"></i>&nbsp;Login&nbsp;</h5></span>
      </a>
      
      <span class="user"> <h5><i class="fa fa-user" aria-hidden="true"></i> Hello User</h5></span>
      <span class="cart"> <h5 style="color:white;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</h5>
      </span><!--cart value-->
      <div class="cart-val" value="0">

      </div>
    </div>
    
    <!--login modal-->
    <!-- user login Modal -->
    <div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" style="border-color:rgb(16, 31, 233)">
    <div class="modal-header" style="background-color:white;">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <!--tab -->
        <li class="nav-item" style="background: white;">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" >Login</a>
        </li>
        <li class="nav-item" style="background: white;">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sign Up</a>
        </li>
        

        
      </ul>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!--<form action="login.php" method="POST">-->
        <div class="form-group">
          <input type="hidden" name="login" value="userlogin">
          <!--tab-->
         
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <!--login Content\/-->
              <label for="exampleInputEmail1">Email</label>
          <input type="email" required class="form-control" id="lemail"  aria-describedby="emailHelp" placeholder="Enter email" name="lemail">
          <div class="form-group">
            <label for="exampleInputPassword1" >Password</label>
            <input type="password" required class="form-control" id="lpassword"placeholder="Password" name="lpassword">
            <div style="margin-left:70%;"><a href="#" >Forgot password?</a></div>
          </div>
          
          <button type="submit" class="btn btn-primary" id="login">Login

          </button>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <!--sign UP content \/-->  
            <div class="form-group">
              <!--<input type="hidden" name="login" value="signup">-->
              <label for="InputName">Name</label><span style="color: red;"> *</span> 
              <input type="text" required class="form-control" id="name" placeholder="Name" name="sname">
              <small id="check1" style="color: red;" type="hidden" > Please enter Name </small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label><span style="color: red;"> *</span>
              <input type="email" required class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter email" name="semail">
              <small id="check2" style="color: red;" type="hidden">We'll never share your email with anyone else. Please Enter valid Email</small>
              
            </div>
            <div class="form-group">
              <label for="phonenumber" >Contact No.</label><span style="color: red;"> *</span>
              <input type="number" required class="form-control" id="contact" placeholder="Contact No." name="sphone">
              <small id="check3" style="color: red;" type="hidden"> Please Enter valid Contact No.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" >Password</label><span style="color: red;"> *</span>
              <input type="password" required class="form-control" id="password" placeholder="Password" name="spassword">
              <small id="check4" style="color: red;"type="hidden" > Please Enter Password</small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="signup">Signup</button>
            </div>
            </div>
            <!--end of signup-->
            <!--admin login tab-->
            
          </div>
        </div>
      </div>
    </div>
     </div>
     </div>
     <!--end of modal and modal content/\-->
     <!--categories-->
     <!-- &#9779 for = menu bar-->
     <span style="font-size:18px;cursor:pointer ;margin-left:25px;" onclick="openNav()"class="category">&#9776; &nbsp;Categories</span>
     <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#"> <i class="fa fa-book" aria-hidden="true"></i> &nbsp;Text Books</a>
      <a href="#"><i class="fa fa-university" aria-hidden="true"></i> &nbsp;Exam Corner</a>
      <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;Literature and Fiction</a>
      <a href="#"><i class="fa fa-child" aria-hidden="true"></i>&nbsp;&nbsp; Children Books</a>
      <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; Biographies and Autobiographies</a>
      <a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i> &nbsp;Film and Photography </a>
      <a href="#"><i class="fas fa-door-open"></i> Cooking and Hospitality</a>
      <a href="#"><i class="fas fa-dharmachakra"></i> &nbsp;Religion</a>
      <a href="#"><i class="fas fa-plane"></i> Travelling and Wildlife</a>
      <a href="#"><i class="fa fa-futbol-o" aria-hidden="true"></i>&nbsp; Sports</a>
      <a href="#"><i class="fas fa-dumbbell" aria-hidden="true"></i> Yoga and Fitness</a>
      <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Map and Atlas</a>
      <a href="#"><i class="fas fa-shield-alt" aria-hidden="true"></i> &nbsp;Defense and Security</a>
      <a href="#"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp; Law & References</a>
    </div>
    
    
<!--
    <strong class="category" style="font-size:1.3em; font-family:'Times New Roman', Times, serif;"> Categories<i class="fa fa-sort-desc" aria-hidden="true"></i></strong>
    <div>
    <div class="cat-item" id="cat-item">
      welcome
    </div>-->
     <!--end of categories-->
     <!--start of autoslider-->
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
    
  
<!--end of autoslider-->
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
<!--sidebar javascript-->
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "auto";
  }
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>
  <!--end sidebar js-->
<script>
 $(document).ready(function(){
      var n1=1,e1=0,c1=1,p1=1,cp1=0;
      $('#check1, #check2, #check3, #check4').hide();//by default hide
      //hide when input value
      $("#name").keydown(function()
     { n1=1; 
       $("#check1").hide();
      
     });
     $("#email").keydown(function()
     { e1=0; 
       $("#check2").hide();

     });
     $("#contact").keydown(function()
     { c1=1; 
       $("#check3").hide();

     });
     $("#password").keydown(function()
     { p1=1;cp1=0;
        $("#check4").hide();


     });
    $("#signup").on("click",function(e)
     {  
      //alert("User Already Registered go for login");
     var name=$("#name").val();
     var email=$("#email").val();
     var contact=$("#contact").val();
     var password=$("#password").val();
      //alert(password.length);
     if(name=="")
     {n1=0;
      $("#check1").show();
     }
     if(email.includes("@")&&email.includes("."))
     {e1=1;
      //$("#check2").show();
     }
     else
     {
      $("#check2").show();
     }
     if(contact.length!=10)
     {c1=0;
      $("#check3").show();
     }
     if(password=="")
     {p1=0;
      $("#check4").show();
     }
     if(p1==1)
     {
       if(password.length<4)
       {
         cp1=0;
         $("#check4").show();
         $("#check4").html("Please Enter Minimun 4 Charactor Password");
       }
       else
       {
         cp1=1;
       }
     } e.preventDefault();
     if(n1==1 && e1==1 && c1==1 && cp1==1)
     {
    
          $.ajax({
          url:"login.php",
          type:"POST",
          data:{name:name, userid:contact,email:email,password:password,check:'0'},
          
          //check for check login or signup
          //1 for login 0 for signup
          //dataType:"JSON",
          
          success:function(data)
              { alert(data);
                
              }
          });
     }
     
     });

     $("#login").click(function(e)
     {
      //alert("click on login");
      e.preventDefault();
      var lemail=$("#lemail").val();
      var lpassword=$("#lpassword").val();
      $.ajax(
          { 
            url:"login.php",
            type:"post",
            data:{userid:lemail,lpassword:lpassword,check:'1'},
          //check for check login or signup
          //1 for login 0 for signup
            success:function(data)
            {
              alert(data);
              if(data=='0')
              {
               
              }
              else //if(data=='1')
              {
                //
                //$("#loginModalCenter").modal("hide");
                //$("#verifyotp").modal({backdrop:'static'});
              
              }
          }
        }
      );
     });

     

    });
  </script>
</body>
</html>
