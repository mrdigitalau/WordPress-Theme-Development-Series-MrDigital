<?php if( have_posts() ): while( have_posts() ): the_post();?>
	

	<div class="card mb-3">
		
		<div class="card-body d-flex justify-content-center align-items-center">


			<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

			<?php endif;?>

			
			<div class="blog-content">

				<h3><?php the_title();?></h3>
				<?php the_excerpt();?>

				<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

			</div>


		</div>

	</div>


<?php endwhile; else: ?>

			
			There are no results for '<?php echo get_search_query();?>'


<?php endif;?>

