<!-- /**********************************************************************************************************************
*FIle Name                       : v_homepage.php
*Description                     : view : template for homepage
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 18th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<!-- 
<!DOCTYPE html>
<html>
<div class="col-xs-10 col-sm-10 col-md-8 col-lg-12" >
<body>
 -->
<h2><center>MEMBERI ITU LEBIH BAIK DARIPADA MENERIMA</center></h2>

<!-- 
<div class="container">
    <div class="row">
        <div class="col-md-12">
      <div id="myslideshow1" class="smoothslides slide" data-ride="smoothslides">

<ol class="smoothslides-indicators">
      <li data-target="#myslideshow1" data-slide-to="0" class="active"></li>
      <li data-target="#myslideshow1" data-slide-to="1"></li>
      <li data-target="#myslideshow1" data-slide-to="2"></li>
      <li data-target="#myslideshow1" data-slide-to="3"></li>
    </ol>

<section id="demo">
  <div class="center">
<div class="smoothslides" id="myslideshow1">
      <div class="item active" >
      <img src="<?=base_url('assets/image/bunga1.jpg')?>" alt="Zoom In" data-effect="zoomIn" width="1140" height="545" /></div>
      <div class="item" >
      <img src="<?=base_url('assets/image/bunga.jpg')?>" alt="Zoom In" data-effect="zoomIn" width="1140" height="545" /></div>
      <div class="item" >
      <img src="<?=base_url('assets/image/dreamcatcher.jpg')?>" alt="Zoom In" data-effect="zoomIn" width="1140" height="545" /></div>
      <div class="item" >
      <img src="<?=base_url('assets/image/friend.jpg')?>" alt="Zoom In" data-effect="zoomIn" width="1140" height="545" /></div>
</div> </div>
</section>

     </div>
        </div>
    </div>
</div> -->


<!-- container slide -->
<br><div class="container">
    <div class="row">
      <div class="col-md-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox" >
      <div class="item active" >
        <img src="<?=base_url()?>assets/image/friend.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/bunga.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/dreamcatcher.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/bunga1.jpg" alt="gambar" width="1140" height="745"></div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  			</div> </div> </div> </div><br>

<!-- </body>
</div>
</html> -->
    <script type="text/javascript" src="<?= base_url('assets/js/smoothslides-2.1.0.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/smoothslides-2.0.0.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/smoothslides-2.1.0.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/smoothslides-2.0.0.js')?>"></script>
<script type="text/javascript">
  $(window).load( function() {
  $('#myslideshow1').smoothSlides({
    effectDuration: 6000,
    effect: 'zoomIn',
    /* no comma on last option */
    });
  });
</script>
<!-- 
<script language="Javascript" type="text/javascript">
      adImages = new Array("<?=base_url()?>/assets/image/bunga1.jpg","<?=base_url()?>/assets/image/bunga.jpg","<?=base_url()?>/assets/image/dreamcatcher.jpg");
      thisAd=0;
      imgCt = adImages.length;
      
      function rotate(){
        if(document.images){
          thisAd++;
          if(thisAd == imgCt){
            thisAd = 0;
          }
          document.adBanner.src=adImages[thisAd];
          setTimeout("rotate()",3*1000);
          
        }
      }

      </script>
 -->
<!--
/**********************************************************************************************************************
* End of v_homepage.php
***********************************************************************************************************************/