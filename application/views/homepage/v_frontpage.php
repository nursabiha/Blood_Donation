<!-- /**********************************************************************************************************************
*FIle Name                       : v_frontpage.php
*Description                     : view : template for homepage
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 25th november 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/ -->

<h2><center>Ini adalah Front Page</center></h2>

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
        <img src="<?=base_url()?>assets/image/capture1.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/capture2.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/capture3.jpg" alt="gambar" width="1140" height="745"></div>
      <div class="item">
        <img src="<?=base_url()?>assets/image/capture4.jpg" alt="gambar" width="1140" height="745"></div>
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
/**********************************************************************************************************************
* End of v_frontpage.php
***********************************************************************************************************************/