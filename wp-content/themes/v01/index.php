<?php get_header(); ?>

<section id="corpo">
	<div class="container">
		<div class="row by">
			<div class="col-md-12 title">
				<h1>welcome!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<hr class="borda">
			</div>
			<div class="col-md-12">
				<?php 
					$wp_query = new WP_Query();
                    query_posts( array( 'post_type'         =>  'post',
                            'orderby'           =>  'post_date',
                            'order'             =>  'ASC',
                            'showposts'         =>   2,
                            'offset'			=>	'1' ));

                    $cont = 0;

                    if(have_posts()):
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        	if ($cont == 0) {
                        	?>
                        		<div class="left">
									<div class="row">
										<?php 
								            $post_thumbnail_id = get_post_thumbnail_id();
								            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
								        ?>
										<div class="img col-12 col-sm-12 col-md-6">
											 <img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="Image" width="100%" height="145px"> 
										</div>
										<div class="text col-12 col-sm-12 col-md-6">
											<hr class="borda title-int">
											<h4><?php the_title(); ?></h4>
											<p><?php the_content(); ?></p>
										</div>
									</div>
								</div>
							<?php
							$cont= $cont+1;
                        	} else{
                        	?>
								<div class="right">
									<div class="row">
										<?php 
								            $post_thumbnail_id = get_post_thumbnail_id();
								            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
								        ?>
										<div class="img col-12 col-sm-12 col-md-6">
											<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="Image" width="100%" height="145px"> 
										</div>
										<div class="text col-12 col-sm-12 col-md-6">
											<hr class="borda title-int">
											<h4><?php the_title(); ?></h4>
											<p><?php the_content(); ?></p>
										</div>
									</div>
								</div>
                        	<?php
                        	}
                			
						endwhile;
						wp_reset_postdata();

					endif;
				?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>