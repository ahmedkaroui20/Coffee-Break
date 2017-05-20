		<div class="col-md-6 abt-left">
		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?> </a>
		<h3><a href="<?php the_permalink(); ?>"> </h3>							
		<h3><a><?php the_title(); ?></a></h3>
		<label>May 29, 2015</label>
		<p><?php the_content(); ?></p>
		<p>Enseignant :</p>
		<p> <?php echo get_post_meta($post->ID , 'meta-prof' , true); ?> </p>
		<p>Nombre horaire :</p>
		<p> <?php echo get_post_meta($post->ID , 'meta-hor' , true); ?> </p>
		 </div>
						