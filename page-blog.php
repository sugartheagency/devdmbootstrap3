<?php 
	
	/* Template Name: Blog Page */
	get_header();

?>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container" style="margin-bottom: 20px;">
        <div class="navbar-header">
        <!--<img src="//<?php echo THEME_IMG_PATH; ?>/logo.png" alt="" class="hidden">-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="position: relative;top: 22px;">
          <ul class="nav navbar-nav">
            <!--<li><a href="#what-we-do">What we do</a></li>-->
            <!--<li><a href="#our-clients">Our Clients</a></li>-->
            <li><a class="navbar-brand" href="/"><img src="<?php echo THEME_IMG_PATH; ?>/logo.svg" alt="Sugar The Agency logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/logo.png'" class="logo"></a></li>
            <!--<li><a href="#blog">Blog</a></li>-->
            <!--<li><a href="#contact">Contact Us</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!--<div class="container marketing">-->


	<!-- START THE FEATURETTES -->
	
	<div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="page-header" style="border-bottom: 1px solid #979797;">
				<div class="searchform"><?php get_search_form(); ?></div>
			</div>

				<?php // Display blog posts on any page @ http://m0n.co/l
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=7' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post();
					
					if( $wp_query->current_post == 0 && !is_paged() ){
				
				?>
					<!-- Featured article -->
					<div class="container" style="max-width: 760px;">
					 <article>
					  <div class="col-md-12" style="margin-bottom: 20px;">
					    <?php the_post_thumbnail( 'large' ); ?>
					    <div class="post-title">
						  <h2><?php echo get_the_date(); ?> - <span><?php the_title(); ?></span></h2>
					  	</div>
					  	<?php the_excerpt(); ?>
					  	<a href="<?php the_permalink(); ?>" title="Read more">Read more >></a>
					  </div>
					 </article>
					
				
				<?php } else { ?>
					<!-- Medium posts -->
					  <article>
						<div class="col-sm-6" style="margin-bottom: 20px;">
							<?php the_post_thumbnail( 'medium' ); ?>
							<h3 class="blog-header"><?php echo get_the_date(); ?> - <span><?php the_title(); ?></span></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" title="Read more">Read more >></a>
						</div>
					  </article>

					  <!--<div class="clearfix visible-md visible-lg"></div>-->
			
				<?php } endwhile; ?>
				</div> <!-- container 760px -->
				<?php if ($paged > 1) { ?>
		
				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Older Posts'); ?></div>
					<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
				</nav>
		
				<?php } else { ?>
		
				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				</nav>
		
				<?php } ?>
		
				<?php wp_reset_postdata(); ?>
		
			
		</div>

		
		</div>
	</div>

<!-- Hard-coded footer -->
<div class="footer">
    <ul class="nav" style="margin-bottom: 20px;">
      <li><a href="/">Home</a></li>
      <!--<li><a href="#our-clients">Our clients</a></li>-->
      <!--<li><a href="#blog">Blog</a></li>-->
      <!--<li><a href="#contact-us">Contact Us</a></li>-->
    </ul>
    <a href="#top">
      <img src="<?php echo THEME_IMG_PATH; ?>/back-to-top.svg" alt="back to top icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/back-to-top.png'" style="padding-bottom: 10px;"></a>
    <br>
    <a href="#top" style="font-size: 12px;text-transform:uppercase;color:#fff;font-family:'oswaldlight'">Back to top</a>
    <p style="margin-top: 20px;font-family: 'robotolight';">(+27) 31 940 4383<br>
    <a href="mailto:admin@sugartheagency.co.za" style="text-transform:lowercase;font-size:10px;">admin@sugartheagency.co.za</a></p>
  <p style="font-family: 'robotolight';">2015 All rights reserved SUGAR the agency.</p>
</div>