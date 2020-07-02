
 <!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================
 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)
 Coded by Creative Tim
=========================================================
 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laser Treat Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
  <link rel="stylesheet" href="http://www.ophthalmichospital.com/style.css" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
                <div class="logo">
                <a href="http://www.lasertreat.com" class="simple-text">
                    Laser Treat
                    </a>
                </div>
                <ul class="nav">
                    <li >
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Main slider</p>
                        </a>
                    </li>
                    <li class="activee">
                        <a class="nav-link" href="{{route('conference')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Conference</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('treatments')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Treatments</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('specialist')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Specialists</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('equipments')}}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Equipments</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('map')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('appointment')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Appointment</p>
                        </a>
                    </li>
                    <li class="activee">
                        <a class="nav-link" href="{{route('latest')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>latest</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Table List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                
                <div class="row bgd">
  <div class="marin">LATEST NEWS</div>
</div>
	<div class="row bg3 sholin">
<div class="container">

<div class="rectangleeee">
       <div class="row">
    <div class="col-sm-5point5 col-5 col-img-wrap tilfi"><div class="nilon"><img class="tilfi gilly" src="http://www.ophthalmichospital.com/tisha.jpg" alt="SEO Text" /></div></div>
    <div class="col-sm-6 col-6 sada milfi ghj"><h4 class="rocki">UTTARA BRANCH RELOCATED</h4><p class="rock">
  We are proud to announce Laser Treat Uttara Branch moved to new premises on 01st October 2017.This relocation is a result of continued business growth and an increase in associated professional staff.Retaining our commitment to the city of Dhaka and maintaining a prime location on which to support our growing list of patients</p><p class="pot">.</p><div class="icon">
   
</div></div>
   <div class="col-sm-1 col-1 col-img-wrap"><img  src="http://www.ophthalmichospital.com/arrow.jpg" class="binik" alt="SEO Text" /></div>
 </div>
         <div class="row ">
  <div class="col-sm-1 col-1 col-img-wrap"><img  src="http://www.ophthalmichospital.com/arrow.jpg" class="binik" alt="SEO Text" /></div>
    <div class="col-sm-6 col-6 sada milfi ghjone borovai"><div class="iconone">
   
</div><h4 class="rocki milfi">LASER TREAT MOVED AHEAD</h4><p class="rock">  We are proud to announce Laser Treat Uttara Branch moved to new premises on 01st October 2017.This relocation is a result of continued business growth and an increase in associated professional staff.Retaining our commitment to the city of Dhaka and maintaining a prime location on which to support our growing list of patients</p><p class="pot">.</p>
</div>

    <div class="col-sm-5point5 col-5 col-img-wrap milfi" ><div class="nilon"><img class="milfi gillyone" src="http://www.ophthalmichospital.com/nayika.jpg" alt="SEO Text" /></div></div>

   
  </div> 
         <div class="row">
    <div class="col-sm-5point5 col-5 col-img-wrap"><div class="nilon"><img src="http://www.ophthalmichospital.com/tishaa.jpg" class="gillytwo" alt="SEO Text" /></div></div>
    <div class="col-sm-6 col-6 sada ghjtwo"><h4 class="rockin">LASER TREAT IS LOOKING<br> FOR SUITABLE FRANCISE PARTNERS</h4><p class="rock">Laser Treat is looking for suitable francise partners in Bangladesh for the expansion of its network in the country.</p><p class="mrtin pock"> if you would like to be your own boss and passionate about being a successful, then Lasr Treat is one a life time business opportunity</p><p class="pot">.</p><div class="icontwo">
   
</div></div>
      <div class="col-sm-1 col-1 col-img-wrap"><img  src="http://www.ophthalmichospital.com/arrow.jpg" alt="SEO Text" /></div>
  </div> 
         
</div>

</div>
</div>
</div>


</div>
</div>
</div>
</div>
                           
                      
                      
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
 
</body>

<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

<script>
response.setIntHeader("Refresh", 1);
</script>
</html>



<script>
$.fn.nextOrFirst = function(selector){
var next = this.next(selector);
return (next.length) ? next : this.prevAll(selector).last();
};

$.fn.prevOrLast = function(selector){
var prev = this.prev(selector);
return (prev.length) ? prev : this.nextAll(selector).last();
};

function slider() {
var activeSlide = $(".active");

activeSlide
.removeClass("active anim animleft animright")
.nextOrFirst()
.addClass("active anim");
}
var initList=setInterval(slider,3000);

function controls() {
var control = $(".controls");

control.on('click', '.prev', function() {
$(".active")
.removeClass("active anim animleft animright")
.prevOrLast()
.addClass("active animleft");
});

control.on('click', '.next', function() {
$(".active")
.removeClass("active anim animleft animright")
.nextOrFirst()
.addClass("active animright");
});
}
controls();

 $('.controls').mouseover(function(){
    clearInterval(initList);
 }).mouseout(function(){
    initList = initList=setInterval(slider,3000);
 })
  </script>
  
  <script>
   $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('');
            }

            else {
                  $('nav').removeClass('navi');
            }
      })
  </script>
  
<script>
$(document).ready(function(){
  $(".cc").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>

<script>
$(document).ready(function(){
  $(".ab").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".bb").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".cb").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".db").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".eb").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".fb").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>

<script>
$(document).ready(function(){
  $(".gb").hover(function(){
    $(this).css("color", "white");
    }, function(){
    $(this).css("color", "white");
  });
});
</script>

<script>
$(document).ready(function(){
  $(".xlz").hover(function(){
    $(".noli").show("slow");
    }, function(){
    $(".noli").hide();
  });
});
</script>


<script>
$(".ghjone").hover(function(){
var a=$(".ghjone").width()+30;
  $(".iconone").width(a);
  $(".ghjone").addClass("box-rotateone");
  $(".gillyone").addClass("gillyyy");
  }, function(){
  $(".iconone").width(1);
  $(".ghjone").removeClass("box-rotateone");
  $(".gillyone").removeClass("gillyyy");
});
</script>



<script>
$(".ghjtwo").hover(function(){
var a=$(".ghjtwo").width()+30;
  $(".icontwo").width(a);
  $(".ghjtwo").addClass("box-rotatetwo");
  $(".ghjtwo").addClass("vind");
  $(".gillytwo").addClass("gillyy");
  }, function(){
  $(".icontwo").width(1);
  $(".ghjtwo").removeClass("box-rotatetwo");
  $(".gillytwo").removeClass("gillyy");
});
</script>


<script>
$(".ghj").hover(function(){
var a=$(".ghj").width()+30;
  $(".icon").width(a);
  $(".ghj").addClass("box-rotate");
  $(".gilly").addClass("gillyy");
  }, function(){
  $(".icon").width(1);
  $(".ghj").removeClass("box-rotate");
  $(".gilly").removeClass("gillyy");
});
</script>





<style>

.activee{background-color:#b194e4; width:200px; transition: all 0.5s ease 0s;}
</style>






