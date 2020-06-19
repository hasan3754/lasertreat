<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Books</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
  <link rel="stylesheet" href="http://www.ophthalmichospital.com/style.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body onload="myFunction()">
   <div class="wrapper">
         <header>
            <nav>
      <nav class="navbar navbar-expand-lg">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars" style="color:#38CCC2;"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
		  <ul class="navbar-nav linta piniksa">
            <li class="nav-item  text-center vf">
              <a class="nav-link only cb text-nowrap" href="#"><span>ABOUT US</span>
              </a>
            </li>
            <li class="nav-item text-center vf">
              <a class="nav-link only cb text-nowrap " href="#"><span>AESTHETIC</span></a>
            </li>
            			<li class="nav-item text-center vf">
              <a class="nav-link only cb text-nowrap vrf" href="#"><span>ANTI-AGING</span></a>
            </li>
                        <li class="nav-item text-center vf">
              <a class="nav-link onlyone cb text-nowrap" href="#"><span>BODY SHAPING</span></a>
            </li>
            <li class="nav-item text-center vf ghk">
              <a class="nav-link onlytwo cb text-nowrap" href="#"><span>DERMATOLOGY</span></a>
            </li>
            <li class="nav-item text-center vf">
              <a class="nav-link only cb text-nowrap lkp" href="#"><span>SEXOLOGY</span></a>
            </li>
			<li class="nav-item text-center vf">
              <a class="nav-link only cb text-nowrap" href="#"><span>DHI</span></a>
            </li>

						<li class="nav-item text-center vf pol">
              <a class="nav-link only cb text-nowrap" href="#"><span>DDI</span></a>
            </li>
            						<li class="nav-item text-center vf lpn">
              <a class="nav-link onlythree cb text-nowrap" href="#"><span>VIDEO GALLERY</span></a>
            </li>
            						<li class="nav-item text-center vf lpd">
              <a class="nav-link only cb text-nowrap" href="#"><span>BLOG</span></a>
            </li>
            						<li class="nav-item text-center vf lpn ">
              <a class="nav-link onlyfour cb text-nowrap npkj" href="#"><span>CONTACT US</span></a>
            </li>

          </ul>
		  <ul class="navbar-nav ml-auto nav-flex-icons">
                        <span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-facebook-square fa-2x mx-1 my-2" style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
                        <span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-youtube-play fa-2x mx-1 my-2 " style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
						<span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-twitter fa-2x mx-1 my-2" style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
						<span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-linkedin fa-2x mx-1 my-2" style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
						<span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-whatsapp fa-2x mx-1 my-2" style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
                        						<span>
                            <a class="nav-link waves-effect waves-light hayre"><i class="fa fa-instagram fa-2x mx-1 my-2" style="color:#38CCC2; font-size:20px;"></i></a>
                        </span>
                        <span class="topb">
                            
                        </span>

                    </ul>

		</div>

      </nav>
            </nav>
         </header>
      </div>
<div class="row"> 
<div class="containerr">

  <div class="slideshow">  
  @if($slider!='no slider')
  @foreach ($slider as $key => $slider)
    <div class="slide {{$slider->active}}">
      <img src="{{ 'uploads/slider/'.$slider->image }}" alt="New York City" title="New York City" />

      
    </div>
   @endforeach
   
   @endif
  </div>


</div>
</div>

  
 <main>
 
<div class="row bgm">
  <div class="col-6 col-md-4">	   <div class="controls">
    <a class="next">Next Slide</a>
    <a class="prev">Previous Slide</a>
  </div></div>
</div>
	<section class="section-2 bgn">
	<div class="row">
	<div class="col-md-7 col-sm-12 col-6 martop">
     <h1 id="small"><p class="anoth">MAKE AN</p><br><p class="marinn">APPOINTMENT</p></h1>

	 </div>
    </div>

<div class="row ">
    <div class="col-sm-6 col-lg-6 col-3 col-md-6" id="shrink"></div>
    <div class="col-sm-12 col-lg-6 col-9 col-md-6 fbg "><div class="container">
			<div class="row">
				<div class="col-md-12">
						<div id="letstalk" class="col-md-12 " style="display: block;">
							<!-- <h1>Sign Up for Free</h1> -->
							<form action="" method="POST" id="contactForm" class="form-horizontal movie" role="form" novalidate="novalidate">
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="name" class="form-control fniibo lika" placeholder="NAME">
									</div>
									<div class="col-md-12">
										<input type="text" name="company" class="form-control fniibo lika" placeholder="PHONE">
									</div>
																		<div class="col-md-12">
										<input type="text" name="name" class="form-control fniibo lika" placeholder="EMAIL">
									</div>
									<div class="col-md-12">
										<input type="text" name="company" class="form-control fniibo lika" placeholder="APPOINTMENT">
									</div>
									<div class="col-md-12">
										<label for="" class=""></label>
										<textarea name="message" id="input" class="form-control fniibone" placeholder="MESSAGE"></textarea>
									</div>
								</div>
								
								<div class="form-group likme">
									<button type="submit" class="button button-block fniibo puni" style="color:white;"><div class="pony">SEND</div></button>
								</div>
							</form>
						</div>
				</div>
			</div>
		</div>
		</div>
		</div>

    </section>
	<div class="row bgd npm">
  <div class="marin">CONFERENCE</div>
</div>

	  <div class="bg1">
  <div class="container mari">
  <div class="row trins litoner">

    <!-- Add the extra clearfix for only the required viewport -->
    <div class="col-xs-12 col-md-6 col-4 col-lg-3 mar parent">
      <div class="card car vir">
      <div class="" onclick="">

      <img class="card-img-top ca img-fluid pini" src="image1.jpg" alt="Card image cap">
      <div class="card-block child">
        <h4 class="card-title tiup foup pin liton nin pil cpl">LOS ANGELES</h4>
        <p class="card-text tiup nomi pin mrtn">Laser treat is the only "ISO 9000 2008" certified BEUTICINOLOGY clinic in bangladesh<br><br><br><br><br></p>
      </div>
      </div>

      <div class="card-footer mrbnn donv">
     <small class="findi"> <div class="float-left wi"><i class="fa fa-comments"></i> 3 comments</div><div class="float-right vi"><i class="fa fa-calendar"></i>March19,2019</div></small>
      </div>
      </div> </div>
    <div class="col-xs-12 col-md-6 col-4 col-lg-3 mar parent">
      <div class="card car vir">
                <div class="" onclick="">
      <img class="card-img-top trin cab img-fluid pini quack" src="2.jpg" alt="Card image cap" id="new">
      <div class="card-block child">
        <h4 class="card-title miup foup pin fin nin cpl">DR. SARKER MAHBUB AHMED SHAMIM</h4>
        <p class="card-text miup dipn pin mrtn">MBBS dip. derm(glasgow,uk) diploma in aesthetic medicine(USA),MCPS,FCPS(Dermatology) skin,sex and antiaging specialist,Laser,Hair transplant & Cosmetic Surgeon<br></p>
        </div>
        </div>
      <div class="card-footer mrbn mhcn mkin">
          <div class="vbg">
         <small class="findi"> <div class="float-left wi"><i class="fa fa-comments"></i> 3 comments</div><div class="float-right vi"><i class="fa fa-calendar"></i>March19,2019</div></small>
      </div></div>
    </div></div>
    <div class="col-xs-12 col-md-6 col-4 col-lg-3 mar parent">
      <div class="card car vir">
      <div class="" onclick="">
      <img class="card-img-top carb img-fluid pini" src="3.jpg" alt="Card image cap">
      <div class="card-block child">
        <h4 class="card-title biup foup pin nin pil cpl">DUBAI</h4>
        <p class="card-text diup pin mrtn">Laser treat is the only "ISO 9000 2008" certified BEUTICINOLOGY clinic in bangladesh<br><br><br><br><br></p>
        </div>
        </div>
      <div class="card-footer mrbnn donv">
          <small class="findi"> <div class="float-left wi"><i class="fa fa-comments"></i> 3 comments</div><div class="float-right vi"><i class="fa fa-calendar"></i>March19,2019</div></small>
      </div>
    </div></div>
</div>
</div>
</div>
	<div class="row bgd npm">
  <div class="marin">TREATMENTS</div>
</div>
	<div class="row bgp sholin lk">
<div class="container">
<!-- Page Content -->
<div class="container">
        <div class="rectangle">
        <div class="portfolio-item row no-gutters">
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm  nun">
               <a href="http://www.ophthalmichospital.com/b.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/b.jpg" alt="">
               </div>
               </a>
             
             
            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
             <div class="cardd">
                 <div class="card__content">    
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
                  <div class="centered "><b><p class="t">BOTOXÀ®</p></b></div>
                  </div>
                 
                 
                 <div class="card__reveal card__reveal--up xlz poi">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">BOTOXÀ®</p></b>                <br><br>  <img  class="img-fluid centered noli binh" style="display: none" src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>

                  
                  </div>
            </div>
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm">
               <a href="http://www.ophthalmichospital.com/d.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                   <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/d.jpg" alt="">
               </div>
               </a>

            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
                <div class="carddone">
                <div class="card__contentone"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
                                  <div class="centered"><p class="t">FRACTIONAL<br>LASER CO2</p></div>
            </div>
                <div class="card__reveal card__reveal--up xlz poi">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t kinh nl">FRACTIONAL<br>LASER CO2</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            
            
            </div>
            </div>
            </div>
            <div class="vai">
          <div class="portfolio-item row no-gutters">
                        <div class="item selfie col-lg-3 col-md-3 col-3 col-sm nun">
                <div class="carddtwo">
                <div class="card__contenttwo"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </div>
               </a>
               <div class="centered"><p class="t">PRP BY ECLIPSE</p></div>
                 
            </div>
            
               <div class="card__reveal card__reveal--up xlz">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t kinh nl">PRP BY ECLIPSE</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            </div>
            
            
            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
               <a href="http://www.ophthalmichospital.com/c.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/c.jpg" alt="">
               </div>
               </a>
                 
            </div>
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm">
        <div class="carddthree">
                <div class="card__contentthree"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
               <div class="centered"><p class="t tn">BODY SHAPING,<br>
  BY ZERONAÀ®</p></div>
                 
            </div>
            
               <div class="card__reveal card__reveal--up xlz">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">BODY SHAPING,<br>
  BY ZERONAÀ®</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            </div>
            
            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
               <a href="http://www.ophthalmichospital.com/a.jpg"  class="fancylight popup-btn" data-fancybox-group="light">
                   <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/a.jpg" alt="">
               </div>
               </a>
                 <div class="centered"></div>
            </div>
         </div>

</div>
         </div>
         
         </div>
 
  </div>


</div>
<!-- /.container -->


	<div class="row bgdi npm">
  <div class="marin">SPECIALISTS</div>
</div>

	  <div class="bg2 marmu">
  <div class="container mari">
  <div class="row trins litoner">

    <!-- Add the extra clearfix for only the required viewport -->
    <div class="col-xs-12 col-md-6 col-lg-3 col-4 parent">
      <div class="card car cari">
         <div class=""> 
      <img class="card-img-top trinnn carbo " src="2.jpg" height="355" width="330" alt="Card image cap">
      <div class="card-block child">
        <h4 class="card-title  minto likin vn">DR. SARKER MAHBUB AHMED SHAMIM</h4>
        <hr>
  <p class="card-text nini">Chief consultant of Laser treat<p class="ni">MBBS dip. derm(glasgow,uk) diploma in aesthetic medicine(USA),MCPS,FCPS(Dermatology) skin,sex and antiaging specialist,Laser,Hair transplant & Cosmetic Surgeon<br><br></p></p>
        <p class="lot bini">.</p>
        </div>
  
    </div></div></div>
    <div class="col-xs-12 col-md-6 col-lg-3 col-4 parent">
      <div class="card car cari">
    <div class="">      
      <img class="card-img-top ulu carbon " src="are.jpg" height="355" width="330"  alt="Card image cap">
       <div class="card-block child">
        <h4 class="card-title  minto liki vn">DR. RABEA AFROZ SHOMA</h4>
        <hr>
  <p class="card-text nini">Junior consultant of Laser treat<p class="ni mi">Advanced training<br>American academy of aesthetic medicine(USA),Advanced training(Aesthetic Dermatology) Aesthetic dermatologist and laser specialist<br><br></p></p>
        <p class="lot got bini">.</p>
        </div>
 
    </div></div></div>
    <div class="col-xs-12 col-md-6 col-lg-3 col-4 parent">
      <div class="card car cari bold">
          <div class="">
      <img class="card-img-top ulu nocar " src="three.jpg" height="355" width="330"  alt="Card image cap">
      <div class="card-block child">
        <h4 class="card-title  minto liki vn">DR. FARHANA RASHID SHUMI</h4>
        <hr>
  <p class="card-text nini">Junior consultant of Laser treat<br><p class="ni mi">Advanced training<br>American academy of aesthetic medicine(USA),Advanced training(Aesthetic Dermatology) Aesthetic dermatologist and laser specialist<br><br></p></p>
        <p class="lot got bini">.</p>
        </div>
   
    </div></div></div>
</div>
</div>
</div>
	<div class="row faltu npm">
  <div class="marin">EQUIPMENTS</div>
</div>
	<div class="row bg3 sholin nimu">
<div class="container">

<div class="rectangleee">
        <div class="portfolio-item row no-gutters">
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm nun">
           
               <a href="http://www.ophthalmichospital.com/b.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/xiiii.jpg" alt=""></div>
               </a>
             
             
            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
                    <div class="carddvione">
                <div class="card__contentvione"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
                  <div class="centered"><p class="t">INFO</p></div>
            </div>
            
                           <div class="card__reveal card__reveal--up xlz">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">INFO</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            
            
            
            </div>
            
            
            
            
            </div>
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm">
               <a href="http://www.ophthalmichospital.com/d.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                   <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/xli.jpg" alt="">
               </div>
               </a>

            </div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
                                    <div class="carddvitwo">
                <div class="card__contentvitwo"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
                                  <div class="centered"><p class="t">INFO</p></div>
            </div>
                           <div class="card__reveal card__reveal--up xlz poi">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">INFO</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            
            
            
            </div></div></div>
            <div class="vai">
          <div class="portfolio-item row no-gutters">
                        <div class="item selfie col-lg-3 col-md-3 col-3 col-sm nun">
                 <div class="carddvithree nibbi">
                <div class="card__contentvithree"> 
               <a href="http://www.ophthalmichospital.com/e.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg" alt="">
               </a>
                <div class="centered"><p class="t">INFO</p></div>
                 
            </div>
                           <div class="card__reveal card__reveal--up xlz poi">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">INFO</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            
            </div></div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm nibbii">
                <div class="nibbi">
               <a href="http://www.ophthalmichospital.com/c.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/xlin.jpg" alt="">
               </div>
               </a>
                 </div>
            </div>
            <div class="item selfie col-lg-3 col-md-3 col-3 col-sm nibbi">
                                                      <div class="carddvifour">
                <div class="card__contentvifour nibbii"> 
               <a href="http://www.ophthalmichospital.com/e.jpg"  class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/e.jpg"  alt="">
               </a>
                <div class="centered"><p class="t">INFO</p></div>
            </div>
        <div class="card__reveal card__reveal--up xlz poi">    
               <a href="http://www.ophthalmichospital.com/dd.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="http://www.ophthalmichospital.com/dd.jpg" alt="">
               </a>
                  <div class="centered"><b><p class="t tn kinh nl">INFO</p></b>                <br><br>  <img  class="img-fluid centered noli binh"  src="http://www.ophthalmichospital.com/arrio.png" alt=""></div>
                  </div>
            
            
            
            
            
            
            </div></div>
            <div class="item gts col-lg-3 col-md-3 col-3 col-sm">
                <div class="nibbi">
               <a href="http://www.ophthalmichospital.com/a.jpg"  class="fancylight popup-btn" data-fancybox-group="light">
                   <div class="zoom">
               <img class="img-fluid" src="http://www.ophthalmichospital.com/xlind.jpg" alt=""></div>
               </a>
                 <div class="centered"></div>
            </div>
            </div>
         </div>
         </div>

</div>
</div>
</div>



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


	<div class="row faltu sadaa nai">
  <div class="marin">  
   <div class="row">
    <div class="col l text-left sorabo bpl">
      <img class="logoi" src="logoi.jpg">
    </div>
    <div class="col l">
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col l fdiboni bpl dpl">
     <b class="niloy" style="color:#9BA1A7;font-family:robotobold;font-size:17px;"> HELPLINE:</b><b class="niloy" style="color:#9BA1A7;font-family:robotobold;font-size:23px;">+88 09678 006 007</b>
    </div>
    <div class="col l">
     .
    </div>
    <div class="col l text-right bili">
       <a href="https://www.w3schools.com"><img class="gigi" src="socialimage.jpg"></a>
    </div>
  </div>
    <div class="row bgdibo">
    <div class="coli col-6 lini text-left fdibo bnc">
     <b style="color:black;font-family:robotobold;font-size:17px;"> BANANI 11</b><br>
	 <p class="fontin">The Laureate,House:56(3rd Floor),<br>
	 Road:11,Block:F,Banani<br>
	 Dhaka-1213,Bangladesh<br>
	 Opening Hours: Everyday-10am to 08pm<br>
	 Helpline:++88 09678 006 007</p>
    </div>
    <div class="coli col-6 l text-left mtn no-padding fdibo bnc "><div class="kinlj">
    <b style="color:black;font-family:robotobold;font-size:17px;">UTTARA</b><br>
	<p class="fdibone">Tropical Shoroni Center<br>
	Plot No:30(4th Floor),Garibe Newaz Avenue,<br>
    Sector:13,Uttara,<br>
    Dhaka-1230,Bangladesh<br>
    Opening Hours:Everyday-11am to 09pm	</p>
    </div></div>
    <div class="col l">
      .
    </div>
  </div>
  </div>
</div>
<div class="row sadaa ase">
     
      <img class="bow" src="logoi.jpg">
      <div class="row">
         <div class="col-6 fdiboni">
     <b  style="color:#9BA1A7;font-family:robotobold;font-size:17px;"> HELPLINE:</b><b  style="color:#9BA1A7;font-family:robotobold;font-size:23px;">+88 09678 006 007</b>
    </div>
        <div class="col-6 text-right">
       <a href="https://www.w3schools.com"><img class="gigi" src="picicon.jpg"></a>
    </div>
    </div>
    <div class="row gbvcx">
     <div class="col-6 lini text-left fdibo">
     <b style="color:black;font-family:robotobold;font-size:17px;"> BANANI 11</b><br>
	 <p class="fontin">The Laureate,House:56(3rd Floor),<br>
	 Road:11,Block:F,Banani<br>
	 Dhaka-1213,Bangladesh<br>
	 Opening Hours: Everyday-10am to 08pm<br>
	 Helpline:++88 09678 006 007</p>
    </div>
        <div class="col-6 l text-left mtn no-padding fdibo">
    <b style="color:black;font-family:robotobold;font-size:17px;">UTTARA</b><br>
	<p class="fdibone">Tropical Shoroni Center<br>
	Plot No:30(4th Floor),Garibe Newaz Avenue,<br>
    Sector:13,Uttara,<br>
    Dhaka-1230,Bangladesh<br>
    Opening Hours:Everyday-11am to 09pm	</p>
    </div>
        
        </div>  

    
</div>    

<div class="row bgl">
.
</div>


<footer class="page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p class="whiteb"> ©2019 All rights reserved- laser treat</p>
  </div>
  <!-- Copyright -->

</footer>
 
  </body>
  
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


