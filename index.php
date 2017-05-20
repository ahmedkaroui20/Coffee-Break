<?php get_header(); ?>
<?php get_sidebar();?>
<!-- welcome -->

<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
						<div class="a-1">
							









                <div class="welcome">
                    <div class="welcome-bottom">
                     <?php if ( have_posts() ) : while ( have_posts() ) :
            the_post(); get_template_part( 'content', get_post_format() );


        endwhile;
    ?>
<?php   endif; ?>

            <div class="clearfix"> </div>

							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
					
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>


<?php get_footer(); ?>