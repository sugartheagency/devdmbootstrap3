<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */ ?>
<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

  <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
      <!-- Wrapper for slides -->
      <!--<div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php //echo THEME_IMG_PATH; ?>/sugarcane-banner.jpg" alt="Sugar the Agency Header Banner" style="min-height: 213.31px;">
          <div class="carousel-caption" style="text-transform: uppercase;">
            We Are Sugar
          </div>
          <div class="carousel-blurb">-->
            <!--<a href="#what-we-do"><img src="<?php //echo THEME_IMG_PATH; ?>/scroll.png" alt=""></a>-->
            <!--<a href="#what-we-do"><img src="<?php //echo THEME_IMG_PATH; ?>/scroll.svg" alt="scroll icon" onerror="this.onerror=null; this.src='<?php //echo THEME_IMG_PATH; ?>/scroll.png'" style="display: none;"></a>
          </div>
        </div>
      </div>
    </div>--> <!--carousel -->
    
    <?php echo do_shortcode('[image-carousel category="main-carousel"]'); ?>

    <div id="what-we-do">
      <div class="container" style="margin-top: 20px;max-width:700px;">
        <!--<div class="starter-template">-->
          <h2 class="text-center">What We Do</h2>
          <p class="text-center" style="font-size: 12px;">
          We have applied our years of experience and knowledge to establish an agency that can offer our clients an efficient, 
          motivated studio that can take on any advertising or marketing job and provide high calibre results. 
          We place a large amount of focus on digital platforms, however, specialise in all the below mediums and are able to tailor specific needs for each of our clients with a 
          hands-on approach to everything we do.</p>
        <!--</div>-->
        <div class="row text-center"> <!-- col-sm-6 col-lg-3 icon -->
            <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/digital-icon.svg" alt="digital icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/digital-icon.png'" style="padding-bottom: 10px;"><br>Digital
            </div>
            <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/tv-icon.svg" alt="TV icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/tv-icon.png'" style="padding-bottom: 10px;"><br>TV
            </div>
            <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/print-icon.svg" alt="Print icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/print-icon.png'" style="padding-bottom: 10px;"><br>Print
            </div>    
            <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/radio-icon.svg" alt="Radio icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/radio-icon.png'" style="padding-bottom: 10px;"><br>Radio
            </div>    
        </div>
          <div class="row text-center">
              <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/outdoor-icon.svg" alt="Outdoor icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/outdoor-icon.png'" style="padding-bottom: 10px;"><br>Outdoor
              </div>
              <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/social-media-icon.svg" alt="Social Media icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/social-media-icon.png'" style="padding-bottom: 10px;"><br>Social Media
              </div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/media-icon.svg" alt="Media icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/media-icon.png'" style="padding-bottom: 10px;"><br>Media
              </div>
              <div class="col-xs-6 col-sm-3 icon">
                <img src="<?php echo THEME_IMG_PATH; ?>/brand-strategy-icon.svg" alt="Brand Strategy icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/brand-strategy-icon.png'" style="padding-bottom: 10px;"><br>Brand Strategy
            </div>
          </div>
        </div>
      </div> <!--section -->

      <div id="our-clients">
        <!--<div class="row">-->
          <div class="col-md-12" style="background: #D8D8D8;text-align: center;padding: 10px;">
            <h2>Our Clients</h2>
            <div class="container" style="max-width: 700px;">
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/bidvest-logo.svg" alt="Bidvest Insurance Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/bidvest-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/afgri-logo.svg" alt="Afgri Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/afgri-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <!-- fix jagermeister svg -->
                <img src="<?php echo THEME_IMG_PATH; ?>/jager-logo.svg" alt="Jagermeister Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/jager-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/xpanda-logo.svg" alt="Xpanda Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/xpanda-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/thirsti-logo.svg" alt="Thirsti Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/thirsti-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/boschendal-logo.svg" alt="Boschendal Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/boschendal-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <img src="<?php echo THEME_IMG_PATH; ?>/bacardi-logo.svg" alt="Bacardi Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/bacardi-logo.png'">
              </div>
              <div class="col-xs-6 col-sm-3">
                <!-- fix ignite svg -->
                <img src="<?php echo THEME_IMG_PATH; ?>/ignite-logo.svg" alt="Ignite Logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/ignite-logo.png'">
              </div>
            </div>
        </div>
        <!--</div>--> <!-- row -->
      </div> <!--section -->

      <div id="blog">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo THEME_IMG_PATH; ?>/blog-banner.jpg" alt="blog banner image" style="">
              <div class="carousel-title hidden-xs">
                <h2><a href="/blog/" style="color: #D8D8D8;text-decoration:none;">Blog</h2>
              </div>
              <div class="carousel-caption hidden-xs" style="top:15%;">
                Finalists at PIAF
              </div>
              <div class="carousel-blurb"><p>SUGAR crack it as finalists at the Prague International Advertising Festival Awards.</p>
              <a href="/blog/" style="font-family: 'oswaldlight';text-transform:uppercase;color: #8BC53F;">Read More</a></div>
            </div>
          </div>
        </div>
      </div> <!-- blog -->

      <div id="contact" style="margin-bottom: 40px;">
        <div class="container" style="max-width: 700px;">
         <div class="row">
           <div class="col-md-12" style="text-align: center;margin-bottom: 20px;">
             <h2>Contact Us</h2>
             <p style="margin-bottom: 40px;">Should you wish to receive a full portfolio of all our work or wish to set up a meeting, then please feel free to contact Gregg Fry, Warren Haviside or Butch James on the following contact details:</p>

             <div class="col-sm-4">
             <!--Gregg Fry-->
             <h5 style="font-weight: bold;text-transform:uppercase;font-family: 'oswaldlight';">Gregg Fry</h5>
             <p style="font-size: 12px;margin-bottom: 0;">+27 79 697 7344</p>
             <p style="font-size: 12px;"><a href="mailto:Gregg@sugartheagency.co.za">gregg@sugartheagency.co.za</a></p>
             </div>
             
             <div class="col-sm-4">
             <!--Warren-->
             <h5 style="font-weight: bold;text-transform:uppercase;font-family: 'oswaldlight';">Warren Haviside</h5>
             <p style="font-size: 12px;margin-bottom: 0;">+27 71 494 2652</p>
             <p style="font-size: 12px;"><a href="mailto:warren@sugartheagency.co.za">warren@sugartheagency.co.za</a></p>
             </div>
             
             <div class="col-sm-4">
             <!-- Butch -->
             <h5 style="font-weight: bold;text-transform:uppercase;font-family: 'oswaldlight';">Butch James</h5>
             <p style="font-size: 12px;margin-bottom: 0;">+27 82 465 1001</p>
             <p style="font-size: 12px;"><a href="mailto:butch@sugartheagency.co.za">butch@sugartheagency.co.za</a></p>
             </div>
         </div>
        </div>
        <div class="row" style="text-align: center;"> 
          <div class="col-md-6"><h3>Johannesburg</h3>
            <a href="https://www.google.com/maps/place/82+Maude+St,+Sandton,+2031,+South+Africa/@-26.105003,28.056593,15z/data=!4m7!1m4!3m3!1s0x1e95732dcb2374fb:0xedbae861dc70f18!2s82+Maude+St,+Sandton,+2031,+South+Africa!3b1!3m1!1s0x1e95732dcb2374fb:0xedbae861dc70f18" target="_blank"><div id="map-canvas" style="width:100%;"></div></a>
            <p style="margin-top: 10px;">82 Maude Street, Sandton, Johannesburg, <br>2146</p>
          </div>

          <div class="col-md-6"><h3>Durban</h3>
            <a href="https://www.google.com/maps/place/39+Churchill+Rd,+Berea,+4001,+South+Africa/@-29.8318242,31.0231088,17z/data=!3m1!4b1!4m2!3m1!1s0x1ef7077b3b788671:0x6450361d06358d2" target="_blank"><div id="map-canvas-net" style="width:100%;"></div></a>
            <p style="margin-top: 10px;">39 Churchill Road, Morningside, Durban, <br>4001</p>
          </div>
        </div>
      </div>
      </div> <!-- section -->
    </div><!-- /.container -->
 <?php get_footer(); ?>